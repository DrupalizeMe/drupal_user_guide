#!/usr/bin/env python3
"""Prepare normalized locale workspaces for local Zensical use."""

from __future__ import annotations

import argparse

from site_prep import get_available_locales, locale_meta, prepare_locale_workspace, workspace_root


def parse_args() -> argparse.Namespace:
    """Parse CLI options for local workspace preparation."""
    parser = argparse.ArgumentParser()
    parser.add_argument("--workspace", default="dev", help="Workspace name under build/zensical/workspaces/")
    parser.add_argument("--locales", help="Comma-separated locale list")
    return parser.parse_args()


def main() -> None:
    """Prepare one or more locale workspaces for local Zensical review."""
    args = parse_args()
    locales = (
        [value.strip() for value in args.locales.split(",") if value.strip()]
        if args.locales
        else get_available_locales()
    )
    metadata = locale_meta()
    for locale in locales:
        if locale not in metadata:
            raise RuntimeError(f"Locale {locale} is missing from content/locales.yml")
        workspace = prepare_locale_workspace(locale, args.workspace)
        print(f"Prepared {locale}: {workspace}")

    print(f"Workspace root: {workspace_root(args.workspace)}")


if __name__ == "__main__":
    main()
