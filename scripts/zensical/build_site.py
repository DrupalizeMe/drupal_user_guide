#!/usr/bin/env python3
"""Build and assemble the multi-locale publish artifact.

Standard Zensical commands build one committed locale config at a time.
This wrapper keeps only the final project-specific step: building a set
of locale configs and assembling them under one publish artifact root.
"""

from __future__ import annotations

import argparse
import re
import shutil
import subprocess
from pathlib import Path
from shutil import which

from site_prep import (
    BUILD_ROOT,
    get_available_locales,
    locale_config_path,
    locale_meta,
    locale_root,
    prepare_locale_workspace,
    reset_dir,
    workspace_locale_root,
)


REPO_ROOT = Path(__file__).resolve().parents[2]
LOCAL_ZENSICAL_BIN = REPO_ROOT / ".venv" / "bin" / "zensical"
ASSEMBLED_ROOT = BUILD_ROOT / "site-build" / "assembled"
BUILD_WORKSPACE = "build"
LOCALE_URL_RE = re.compile(r'(?P<attr>href|src)="/(?P<locale>[A-Za-z0-9-]+)/(?P<rest>[^"]*)"')


def parse_args() -> argparse.Namespace:
    """Parse the CLI for the multi-locale assembly wrapper."""
    parser = argparse.ArgumentParser()
    parser.add_argument("--locales", help="Comma-separated locale list")
    return parser.parse_args()


def zensical_bin() -> str:
    """Return the preferred Zensical executable for local and CI builds."""
    if LOCAL_ZENSICAL_BIN.exists():
        return str(LOCAL_ZENSICAL_BIN)

    path_bin = which("zensical")
    if path_bin:
        return path_bin

    raise RuntimeError(
        f"Missing {LOCAL_ZENSICAL_BIN} and no 'zensical' binary was found on PATH. "
        "Create a virtualenv and install requirements.txt, or run the build through uv."
    )


def assert_locales(locales: list[str]) -> None:
    """Validate that each requested locale has committed source content."""
    if not locales:
        raise RuntimeError("No locales selected for the Zensical build.")

    metadata = locale_meta()
    for locale in locales:
        if locale not in metadata:
            raise RuntimeError(f"Locale {locale} is missing from content/locales.yml")

        if not locale_root(locale).exists():
            raise RuntimeError(f"Missing docs directory for locale {locale}: {locale_root(locale)}")
        if not locale_config_path(locale).exists():
            raise RuntimeError(f"Missing Zensical config for locale {locale}: {locale_config_path(locale)}")


def build_locale(locale: str) -> None:
    """Prepare and build one locale into a generated workspace."""
    prepared_root = prepare_locale_workspace(locale, BUILD_WORKSPACE)
    prepared_site_dir = prepared_root / "site"
    prepared_config_path = prepared_root / "zensical.toml"
    shutil.rmtree(prepared_site_dir, ignore_errors=True)
    result = subprocess.run(
        [zensical_bin(), "build", "--config-file", str(prepared_config_path)],
        cwd=prepared_root,
        text=True,
        capture_output=True,
    )
    if result.returncode != 0:
        if result.stdout:
            print(result.stdout, end="")
        if result.stderr:
            print(result.stderr, end="")
        raise RuntimeError(f"Zensical build failed for locale {locale}")

    if result.stdout:
        print(result.stdout, end="")


def rewrite_locale_asset_paths(root: Path, locale: str, locales: list[str]) -> None:
    """Rewrite root-relative locale URLs for nested assembled Pages output.

    A single locale build emits site-root-relative locale URLs like ``/en/...``
    and shared image URLs like ``/images/...``. The assembled Pages artifact
    nests each locale under a project/path prefix, so those root-relative URLs
    must become page-relative paths to keep navigation, assets, and locale
    switcher links working in preview and published Pages deployments.
    """

    for html_path in root.rglob("*.html"):
        original = html_path.read_text(encoding="utf-8")
        relative_path = html_path.relative_to(root)
        depth = len(relative_path.parts) - 1
        image_prefix = "../" * depth + "images/"
        updated = original.replace('src="/images/', f'src="{image_prefix}')
        updated = updated.replace('href="/images/', f'href="{image_prefix}')

        def replace_locale_url(match: re.Match[str]) -> str:
            attr = match.group("attr")
            target_locale = match.group("locale")
            rest = match.group("rest")
            if target_locale not in locales:
                return match.group(0)

            if target_locale == locale:
                prefix = "../" * depth
            else:
                prefix = "../" * (depth + 1) + f"{target_locale}/"
            return f'{attr}="{prefix}{rest}"'

        updated = LOCALE_URL_RE.sub(replace_locale_url, updated)
        if updated != original:
            html_path.write_text(updated, encoding="utf-8")


def main() -> None:
    args = parse_args()
    selected_locales = (
        [value.strip() for value in args.locales.split(",") if value.strip()]
        if args.locales
        else get_available_locales()
    )
    assert_locales(selected_locales)

    all_locales = list(locale_meta().keys())

    for locale in selected_locales:
        build_locale(locale)

    assemble_locales_with_registry(selected_locales, all_locales)
    print(f"Assembled site written to {ASSEMBLED_ROOT}")


def assemble_locales_with_registry(selected_locales: list[str], all_locales: list[str]) -> None:
    """Assemble selected locales while rewriting links for the full locale registry."""
    reset_dir(ASSEMBLED_ROOT)
    for locale in selected_locales:
        site_dir = workspace_locale_root(locale, BUILD_WORKSPACE) / "site"
        destination = ASSEMBLED_ROOT / locale
        shutil.copytree(site_dir, destination, dirs_exist_ok=True)
        rewrite_locale_asset_paths(destination, locale, all_locales)


if __name__ == "__main__":
    main()
