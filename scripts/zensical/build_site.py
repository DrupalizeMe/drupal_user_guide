#!/usr/bin/env python3
"""Build and assemble the multi-locale publish artifact.

Standard Zensical commands build one committed locale config at a time.
This wrapper keeps only the final project-specific step: building a set
of locale configs and assembling them under one publish artifact root.
"""

from __future__ import annotations

import argparse
import shutil
import subprocess
from pathlib import Path

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
ZENSICAL_BIN = REPO_ROOT / ".venv" / "bin" / "zensical"
ASSEMBLED_ROOT = BUILD_ROOT / "site-build" / "assembled"
BUILD_WORKSPACE = "build"


def parse_args() -> argparse.Namespace:
    """Parse the CLI for the multi-locale assembly wrapper."""
    parser = argparse.ArgumentParser()
    parser.add_argument("--locales", help="Comma-separated locale list")
    return parser.parse_args()


def assert_zensical_installed() -> None:
    """Fail fast when the local virtualenv is missing Zensical."""
    if not ZENSICAL_BIN.exists():
        raise RuntimeError(
            f"Missing {ZENSICAL_BIN}. Create a virtualenv and install requirements.txt before building the site."
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
        [str(ZENSICAL_BIN), "build", "--config-file", str(prepared_config_path)],
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
    """Prefix root-relative image paths after nesting a locale under ``/<locale>/``.

    A single locale build treats ``/images/...`` as site-root-relative, which is
    fine when serving that locale by itself. The assembled Pages artifact nests
    each locale under ``/<locale>/``, so the combined site needs those image
    references rewritten to ``/<locale>/images/...``. It also needs locale
    switcher links rewritten away from site-root-relative ``/<locale>/`` paths
    so they keep working under GitLab Pages path prefixes.
    """

    for html_path in root.rglob("*.html"):
        original = html_path.read_text(encoding="utf-8")
        updated = original.replace('src="/images/', f'src="/{locale}/images/')
        updated = updated.replace('href="/images/', f'href="/{locale}/images/')
        relative_path = html_path.relative_to(root)
        depth = len(relative_path.parts) - 1
        locale_prefix = "../" * (depth + 1)
        for target_locale in locales:
            updated = updated.replace(f'href="/{target_locale}/"', f'href="{locale_prefix}{target_locale}/"')
        if updated != original:
            html_path.write_text(updated, encoding="utf-8")


def assemble_locales(locales: list[str]) -> None:
    """Merge per-locale site builds under one publishable artifact root."""
    reset_dir(ASSEMBLED_ROOT)
    for locale in locales:
        site_dir = workspace_locale_root(locale, BUILD_WORKSPACE) / "site"
        destination = ASSEMBLED_ROOT / locale
        shutil.copytree(site_dir, destination, dirs_exist_ok=True)
        rewrite_locale_asset_paths(destination, locale, locales)


def main() -> None:
    args = parse_args()
    selected_locales = (
        [value.strip() for value in args.locales.split(",") if value.strip()]
        if args.locales
        else get_available_locales()
    )
    assert_zensical_installed()
    assert_locales(selected_locales)

    for locale in selected_locales:
        build_locale(locale)

    assemble_locales(selected_locales)
    print(f"Assembled site written to {ASSEMBLED_ROOT}")


if __name__ == "__main__":
    main()
