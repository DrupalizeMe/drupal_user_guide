#!/usr/bin/env python3
"""Prepare locale workspaces for Zensical builds.

The committed content under ``content/<locale>/docs`` is the canonical source.
Before building, we copy a locale into a generated workspace and normalize
placeholder links like ``[block-concept](./block-concept.md)`` into ordinary
Markdown links with the destination page title.
"""

from __future__ import annotations

import re
import shutil
from pathlib import Path, PurePosixPath

import yaml


REPO_ROOT = Path(__file__).resolve().parents[2]
CONTENT_ROOT = REPO_ROOT / "content"
LOCALES_PATH = CONTENT_ROOT / "locales.yml"
BUILD_ROOT = REPO_ROOT / "build" / "zensical"

FRONTMATTER_RE = re.compile(r"^---\n(.*?)\n---\n", re.S)
PLACEHOLDER_LINK_RE = re.compile(
    r"\[(?P<label>[^\]]+)\]\((?P<target>\./[^)#]+\.md(?:#[A-Za-z0-9_-]+)?)\)"
)

_LOCALE_META_CACHE: dict | None = None


def reset_dir(path: Path) -> None:
    """Replace ``path`` with an empty directory."""
    shutil.rmtree(path, ignore_errors=True)
    path.mkdir(parents=True, exist_ok=True)


def locale_meta() -> dict:
    """Load shared locale metadata from ``content/locales.yml`` once."""
    global _LOCALE_META_CACHE
    if _LOCALE_META_CACHE is None:
        _LOCALE_META_CACHE = yaml.safe_load(LOCALES_PATH.read_text(encoding="utf-8")) or {}
    return _LOCALE_META_CACHE


def get_available_locales() -> list[str]:
    """Return locale codes that have both metadata and a committed site tree."""
    return sorted(locale for locale in locale_meta().keys() if locale_root(locale).is_dir())


def locale_root(locale: str) -> Path:
    """Return the committed source directory for one locale."""
    return CONTENT_ROOT / locale


def locale_config_path(locale: str) -> Path:
    """Return the committed Zensical config path for one locale."""
    return locale_root(locale) / "zensical.toml"


def locale_site_dir(locale: str) -> Path:
    """Return the build output directory for a committed locale tree."""
    return locale_root(locale) / "site"


def workspace_root(name: str) -> Path:
    """Return the root for generated locale workspaces."""
    return BUILD_ROOT / "workspaces" / name


def workspace_locale_root(locale: str, workspace_name: str) -> Path:
    """Return the generated workspace path for one locale."""
    return workspace_root(workspace_name) / locale


def parse_frontmatter(path: Path) -> dict:
    """Read YAML frontmatter from a topic file.

    This intentionally stays narrow: it only supports the frontmatter shape
    used by the committed guide topics.
    """
    match = FRONTMATTER_RE.match(path.read_text(encoding="utf-8"))
    if not match:
        return {}
    data = yaml.safe_load(match.group(1)) or {}
    return data if isinstance(data, dict) else {}


def load_page_titles(docs_root: Path) -> dict[str, str]:
    """Build a filename-to-title map for placeholder link substitution."""
    titles: dict[str, str] = {}
    for path in sorted(docs_root.glob("*.md")):
        title = parse_frontmatter(path).get("title")
        if isinstance(title, str) and title.strip():
            titles[path.name] = title.strip()
    return titles


def normalize_placeholder_links(docs_root: Path) -> None:
    """Replace placeholder file-stem links with destination page titles.

    Example:
    ``[block-concept](./block-concept.md)`` becomes
    ``[Concept: Blocks](./block-concept.md)`` in the generated workspace.

    The committed source stays unchanged. Only links whose label exactly
    matches the target file stem are treated as placeholders.
    """
    titles = load_page_titles(docs_root)

    for path in sorted(docs_root.glob("*.md")):
        original = path.read_text(encoding="utf-8")

        def replace(match: re.Match[str]) -> str:
            target = match.group("target")
            target_path = target.split("#", 1)[0]
            target_name = PurePosixPath(target_path).name
            label = match.group("label")
            if label != PurePosixPath(target_path).stem:
                return match.group(0)

            title = titles.get(target_name)
            if not title:
                return match.group(0)
            return f"[{title}]({target})"

        updated = PLACEHOLDER_LINK_RE.sub(replace, original)
        if updated != original:
            path.write_text(updated, encoding="utf-8")


def prepare_locale_workspace(locale: str, workspace_name: str) -> Path:
    """Copy one committed locale tree into a generated build workspace."""
    source_root = locale_root(locale)
    target_root = workspace_locale_root(locale, workspace_name)
    reset_dir(target_root)
    shutil.copytree(source_root, target_root, dirs_exist_ok=True)
    docs_root = target_root / "docs"
    normalize_placeholder_links(docs_root)
    return target_root
