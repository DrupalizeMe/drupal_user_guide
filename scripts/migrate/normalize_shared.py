#!/usr/bin/env python3
"""Content normalization helpers for the AsciiDoc -> Markdown migration.

RECOVERED CODE. The functions below were originally part of
``scripts/zensical/shared.py`` and were removed from the repository at commit
06bc5778 ("Use committed locale configs for Zensical"), before the migration was
squashed onto this branch. They are reproduced here verbatim apart from the
``DOCS_ROOT`` retarget noted below.

This module is the third stage of the migration pipeline. It takes the raw
Markdown emitted by ``convert-locale.mjs`` and rewrites it into the shape the
committed content actually uses:

  * strips the Starlight-only ``template: doc`` frontmatter key
  * strips the Astro ``<Steps>`` component and its import
  * turns ``<a id="x"></a>`` + heading into ``## Heading { #x }``
  * turns a bare ``<a id="x"></a>`` into ``[](){ #x }``
  * resolves legacy ``<<id>>`` references and Markdown file links
  * converts indented AsciiDoc tables
  * collapses runs of blank lines

Recovered from: ad98f968:scripts/zensical/shared.py (lines 89-286)
See scripts/migrate/README.md for the full provenance table.
"""

from __future__ import annotations

import re
from pathlib import Path

REPO_ROOT = Path(__file__).resolve().parents[2]

# Retargeted during recovery. The original pointed at the Astro layout
# (``src/content/docs/<locale>``); committed content now lives at
# ``content/<locale>/docs``.
CONTENT_ROOT = REPO_ROOT / "content"


def locale_docs_root(locale: str) -> Path:
    """Return the docs directory for a locale in the current layout."""
    return CONTENT_ROOT / locale / "docs"


def get_available_locales() -> list[str]:
    """Locales that have a committed docs directory."""
    return sorted(
        path.parent.name
        for path in CONTENT_ROOT.glob("*/docs")
        if path.is_dir()
    )


def ensure_dir(path: Path) -> None:
    path.mkdir(parents=True, exist_ok=True)


def walk_markdown_files(directory: Path) -> list[Path]:
    return sorted(
        path
        for path in directory.rglob("*")
        if path.is_file() and path.suffix in {".md", ".mdx"}
    )


def parse_frontmatter(content: str) -> tuple[dict[str, str], str]:
    match = re.match(r"^---\n([\s\S]*?)\n---\n?", content)
    if not match:
        return {}, content

    data: dict[str, str] = {}
    for line in match.group(1).splitlines():
        parts = re.match(r"^([A-Za-z0-9_]+):\s*(.+)$", line)
        if not parts:
            continue
        key, raw_value = parts.group(1), parts.group(2)
        value = re.sub(r'^"(.*)"$', r"\1", raw_value)
        data[key] = value

    return data, content[match.end() :]


def extract_anchor_aliases(body: str) -> list[str]:
    aliases: list[str] = []
    aliases.extend(re.findall(r'^<a id="([^"]+)"></a>$', body, flags=re.MULTILINE))
    aliases.extend(re.findall(r'^\[\]\(\)\{ #([^}]+) \}$', body, flags=re.MULTILINE))
    aliases.extend(re.findall(r'^#{1,6}\s+.*\s+\{ #([^}]+) \}$', body, flags=re.MULTILINE))
    return aliases


def build_doc_index(locale: str) -> dict[str, dict]:
    locale_root = locale_docs_root(locale)
    index: dict[str, dict] = {}

    for file_path in walk_markdown_files(locale_root):
        relative_path = file_path.relative_to(locale_root).as_posix()
        source = file_path.read_text(encoding="utf-8")
        data, body = parse_frontmatter(source)
        normalized_path = re.sub(r"\.mdx$", ".md", relative_path)
        stem = Path(normalized_path).stem
        doc_id = data.get("id", stem)
        index[normalized_path] = {
            "file_path": file_path,
            "relative_path": normalized_path,
            "original_relative_path": relative_path,
            "stem": stem,
            "id": doc_id,
            "title": data.get("title", stem),
            "aliases": {doc_id, *extract_anchor_aliases(body)},
        }

    return index


def _replace_md_links(content: str, relative_path: str, doc_index: dict[str, dict], alias_index: set[str]) -> str:
    """Normalize inline Markdown file links to the committed placeholder model.

    REWRITTEN DURING RECOVERY. The original produced reference-style autorefs
    links (``[Title][topic-id]``). That model was abandoned at commit 7b4ba91f
    ("Replace autorefs with placeholder Markdown links") and 2765979a ("Restore
    placeholder page links in source"). Committed content now stores a bare
    placeholder whose label is the target's own filename stem:

        [content-create](./content-create.md)

    The human-readable title is substituted at BUILD time by
    scripts/zensical/site_prep.py::normalize_placeholder_links, which maps
    filename -> frontmatter title. Keeping titles out of the committed source
    means a retitled page does not require editing every page that links to it.

    Verified against all 14 locales: of 9536 committed inline .md links, the
    label equals the target stem in 9536 cases. Anchored links
    (``./glossary.md#glossary-path``) keep whatever label the AsciiDoc source
    gave them, so they are left untouched.
    """

    pattern = re.compile(r"\[([^\]]+)\]\(([^)#]+\.md)(#[^)]+)?\)")

    def repl(match: re.Match[str]) -> str:
        text, raw_target, raw_hash = match.group(1), match.group(2), match.group(3) or ""
        if re.match(r"^[a-z]+://", raw_target, flags=re.IGNORECASE):
            return match.group(0)

        # Anchored links carry a meaningful source-authored label; leave them be.
        if raw_hash:
            return match.group(0)

        current_dir = Path(relative_path).parent
        if raw_target.startswith("/"):
            target_path = raw_target.lstrip("/")
        else:
            target_path = (current_dir / raw_target).as_posix()
        target_path = str(Path(target_path)).replace("\\", "/")
        target = doc_index.get(target_path)
        if not target:
            return match.group(0)

        return f"[{target['stem']}]({raw_target})"

    return pattern.sub(repl, content)


def _replace_legacy_refs(content: str, alias_index: set[str], doc_index: dict[str, dict]) -> str:
    """Convert legacy AsciiDoc ``<<id>>`` references to placeholder Markdown links.

    REWRITTEN DURING RECOVERY, for the same reason as _replace_md_links: the
    original emitted reference-style ``[label][id]`` autorefs. Any explicit
    label in the AsciiDoc source is intentionally discarded, because the title
    is resolved at build time from the target's frontmatter.

        <<content-create>>                 -> [content-create](./content-create.md)
        <<content-create,Create content>>  -> [content-create](./content-create.md)

    References whose id resolves to an in-page anchor rather than a page keep
    their anchor form.
    """

    id_to_doc: dict[str, dict] = {}
    for doc in doc_index.values():
        for alias in doc["aliases"]:
            id_to_doc.setdefault(alias, doc)

    pattern = re.compile(r"<<([^>,]+)(?:,([^>]+))?>>")

    def repl(match: re.Match[str]) -> str:
        ref_id = match.group(1).strip()
        if ref_id not in alias_index:
            return match.group(0)

        target = id_to_doc.get(ref_id)
        if not target:
            return match.group(0)

        # A reference to the page's own id resolves to the page itself.
        if ref_id == target["id"]:
            return f"[{target['stem']}](./{target['stem']}.md)"

        # Otherwise it is an anchor inside that page.
        return f"[{ref_id}](./{target['stem']}.md#{ref_id})"

    return pattern.sub(repl, content)


def _cells_from_table_row(row: str) -> list[str]:
    trimmed = row.strip()
    if trimmed.startswith("|"):
        trimmed = trimmed[1:]
    if trimmed.endswith("|"):
        trimmed = trimmed[:-1]
    return [cell.strip() for cell in trimmed.split("|")]


def _convert_indented_tables(content: str) -> str:
    lines = content.splitlines()
    output: list[str] = []
    i = 0

    while i < len(lines):
        line = lines[i]
        table_match = re.match(r"^(\s{2,})\|.*\|\s*$", line)
        if not table_match:
            output.append(line)
            i += 1
            continue

        indent = table_match.group(1)
        separator = lines[i + 1] if i + 1 < len(lines) else ""
        separator_pattern = rf"^{re.escape(indent)}\|[\s:|-]+\|\s*$"
        if not re.match(separator_pattern, separator):
            output.append(line)
            i += 1
            continue

        table_lines = [line, separator]
        j = i + 2
        row_pattern = rf"^{re.escape(indent)}\|.*\|\s*$"
        while j < len(lines) and re.match(row_pattern, lines[j]):
            table_lines.append(lines[j])
            j += 1

        header_cells = _cells_from_table_row(table_lines[0])
        body_rows = [_cells_from_table_row(row) for row in table_lines[2:]]

        output.append(f"{indent}<table>")
        output.append(f"{indent}  <thead>")
        output.append(f"{indent}    <tr>")
        for cell in header_cells:
            output.append(f"{indent}      <th>{cell}</th>")
        output.append(f"{indent}    </tr>")
        output.append(f"{indent}  </thead>")
        if body_rows:
            output.append(f"{indent}  <tbody>")
            for row in body_rows:
                output.append(f"{indent}    <tr>")
                for cell in row:
                    output.append(f"{indent}      <td>{cell}</td>")
                output.append(f"{indent}    </tr>")
            output.append(f"{indent}  </tbody>")
        output.append(f"{indent}</table>")
        i = j

    return "\n".join(output)


def normalize_doc_content(locale: str, relative_path: str, content: str, doc_index: dict[str, dict]) -> str:
    """Rewrite committed guide content into the authoring shape Zensical expects.

    This preserves the project's stable IDs and cross-reference style while
    removing the previous Starlight-specific markup.
    """

    alias_index: set[str] = set()
    for item in doc_index.values():
        alias_index.update(item["aliases"])

    normalized = content
    normalized = re.sub(r"^template:\s+doc\n", "", normalized, flags=re.MULTILINE)
    # source_path is migration-only traceability and is not kept in committed content.
    normalized = re.sub(r'^source_path:\s+.*\n', "", normalized, flags=re.MULTILINE)
    normalized = re.sub(
        r"^import\s+\{\s*Steps\s*\}\s+from\s+['\"]@astrojs/starlight/components['\"];\n\n?",
        "",
        normalized,
        flags=re.MULTILINE,
    )
    normalized = re.sub(r"^<Steps>\n\n?", "", normalized, flags=re.MULTILINE)
    normalized = re.sub(r"^\n?</Steps>\n?", "\n", normalized, flags=re.MULTILINE)
    normalized = re.sub(
        r'^<a id="([^"]+)"></a>\n+(#{1,6}\s+.+)$',
        lambda match: f"{match.group(2)} {{ #{match.group(1)} }}",
        normalized,
        flags=re.MULTILINE,
    )
    normalized = re.sub(r'^<a id="([^"]+)"></a>$', r"[](){ #\1 }", normalized, flags=re.MULTILINE)
    normalized = _replace_legacy_refs(normalized, alias_index, doc_index)
    normalized = _replace_md_links(normalized, relative_path, doc_index, alias_index)
    normalized = _convert_indented_tables(normalized)
    normalized = re.sub(r"\n{3,}", "\n\n", normalized)

    if not normalized.endswith("\n"):
        normalized += "\n"

    return normalized
