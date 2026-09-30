#!/usr/bin/env python3
"""Normalize converted guide docs toward the Zensical authoring model.

Stage 3 of the AsciiDoc -> Markdown migration pipeline. Run this after
``convert-locale.mjs`` has produced raw Markdown.

    python3 scripts/migrate/normalize_docs.py            # all locales
    python3 scripts/migrate/normalize_docs.py es id      # specific locales

Idempotent: running it twice produces the same result.

Recovered from ad98f968:scripts/zensical/normalize_docs.py. The original
imported its helpers from scripts/zensical/shared.py, which no longer exists;
the normalization subset now lives in scripts/migrate/normalize_shared.py.
See scripts/migrate/README.md for provenance.
"""

from __future__ import annotations

import argparse

from normalize_shared import (
    build_doc_index,
    ensure_dir,
    get_available_locales,
    locale_docs_root,
    normalize_doc_content,
    walk_markdown_files,
)


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(description=__doc__.splitlines()[0])
    parser.add_argument(
        "locales",
        nargs="*",
        help="Locales to normalize; defaults to every locale with a docs directory",
    )
    return parser.parse_args()


def main() -> None:
    args = parse_args()
    locales = args.locales or get_available_locales()

    for locale in locales:
        locale_root = locale_docs_root(locale)
        if not locale_root.is_dir():
            raise SystemExit(f"No docs directory for locale {locale!r} at {locale_root}")

        doc_index = build_doc_index(locale)
        count = 0
        for file_path in walk_markdown_files(locale_root):
            relative_path = file_path.relative_to(locale_root).as_posix()
            output_relative_path = (
                relative_path[:-4] + ".md" if relative_path.endswith(".mdx") else relative_path
            )
            output_path = locale_root / output_relative_path
            source = file_path.read_text(encoding="utf-8")
            normalized = normalize_doc_content(locale, output_relative_path, source, doc_index)

            ensure_dir(output_path.parent)
            output_path.write_text(normalized, encoding="utf-8")
            if output_path != file_path:
                file_path.unlink()
            count += 1

        print(f"Normalized {count} {locale} docs.")


if __name__ == "__main__":
    main()
