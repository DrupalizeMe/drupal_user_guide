<a id="formatting"></a>
# Formatting Your Text

Information for contributors to the Drupal User Guide on how to format
text using the Markdown conventions used by this project.

On this page:

- [Markdown reference](#asciidoc)
- [Paragraph and list formatting](#formatting-paragraph)
- [Creating topics and sections](#style-sections)
- [Making links](#style-crosslinks)
- [Glossary and index notes](#style-glossary)
- [Including images and videos](#formatting-images)
- [Typography formatting](#style-literals)
- [Formatting code blocks](#style-code)
- [Adding comments to source files](#style-comments)
- [How to indicate a topic is incomplete](#formatting-todo)

<a id="asciidoc"></a>
## Markdown reference

The documentation in this project is authored in Markdown, and guide
topics should be saved as `.md`.

Every topic should start with frontmatter similar to this:

```md
---
title: "Placing a Block in a Region"
description: "How to place a block in a region."
id: "block-place"
translation_key: "block-place"
source_locale: "en"
---
```

Notes:

- `title` and `description` are required for the rendered site.
- `id`, `translation_key`, and `source_locale` are project-specific
  metadata fields used to keep pages aligned across locales.
- Keep `id`, `translation_key`, and `source_locale` aligned with the
  corresponding English page.

<a id="formatting-paragraph"></a>
## Paragraph and list formatting

- Keep descriptions concise. Frontmatter descriptions should stay under
  140 characters.
- Wrap prose at a readable line length when practical, but do not force
  awkward breaks inside URLs, tables, or image tags.
- A blank line makes a paragraph break.
- Use `-` for bullet lists and `1.` style numbering for ordered lists.
- Task pages use a normal ordered list in the `## Steps` section.

Example:

```md
1. Open the page you need to edit.
1. Make the change.

   Add a second paragraph by leaving a blank line and indenting it so it
   stays inside the same step.

1. Save the page.
```

<a id="style-sections"></a>
## Creating topics and sections

Use Markdown headings for page structure:

```md
## Goal
## Prerequisite knowledge
## Site prerequisites
## Steps
## Expand your understanding
## Related concepts
## Videos
## Additional resources
```

Notes:

- The page title belongs in frontmatter, not as a top-level `#` heading
  on normal topic pages.
- Use `##` for the main sections of a topic.
- Use `###` only when a section genuinely needs a subsection.
- If you need a stable anchor for generated links, attach the explicit
  ID to the heading it belongs to, for example
  `## Goal { #block-place }`.

<a id="style-crosslinks"></a>
## Making links

For links to other guide topics, use the target file stem as the link
label in canonical source:

```md
[block-concept](./block-concept.md)
```

The prep step replaces that placeholder with the destination page title
in the generated workspace.

Use an explicit label only when you are intentionally not using the
destination page title, such as an anchor link:

```md
[Drupal User Guide](./index.md#user-chapter)
```

For glossary links, link directly to the glossary page anchor:

```md
[Ajax entry in the Glossary](./glossary.md#glossary-ajax)
```

<a id="style-glossary"></a>
## Glossary and index notes

The current web guide still has a glossary topic, but it does not use
the old AsciiDoc glossary syntax. Follow the patterns already present in
the glossary page when editing glossary entries.

The old AsciiDoc index-entry syntax is not part of normal Markdown
authoring for this site. If you are updating content, do not add legacy
index markup to Markdown files.

<a id="formatting-images"></a>
## Including images and videos

Use normal HTML image tags in topic content:

```html
<img src="/images/block-place-configure-block.png" alt="Block configuration page" width="100%" />
```

Notes and conventions:

- Use `/images/...` paths for guide images inside a locale site.
- Always include useful `alt` text.
- Keep the image file name aligned with the topic slug when practical,
  such as `block-place-configure-block.png`.
- Add a short source comment before complex embeds or hand-maintained
  media when future contributors would otherwise have to reverse-engineer
  it.

For embedded videos, use the same HTML iframe pattern already used in
the guide:

```html
<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/VIDEO_ID" title="Name of video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>
```

See [Adding links and videos](./guidelines-writing.md#guideline-additional-info)
for content guidelines on when to embed a video versus linking to it.

<a id="style-literals"></a>
## Typography formatting

- Use `*italics*` for user-interface text, file paths mentioned in
  prose, and newly introduced terms when needed.
- Use backticks for code, commands, IDs, and literal values.
- Use bold sparingly.

Examples:

```md
Click *Save configuration*.
Edit `content/en/docs/block-place.md`.
Run `./.venv/bin/python scripts/zensical/build_site.py`.
```

<a id="style-code"></a>
## Formatting code blocks

Use fenced code blocks with an info string whenever possible:

````md
```bash
./.venv/bin/python scripts/zensical/build_site.py
```
````

Use tables in standard Markdown table syntax:

```md
| Field name | Explanation | Example value |
| --- | --- | --- |
| Title | Title to be displayed for the block | Hours and location |
```

<a id="style-comments"></a>
## Adding comments to source files

Use HTML comments when you need a note for maintainers that should not
render in page output:

```md
<!-- Regenerate this screenshot after the block configuration UI changes. -->
```

Keep comments short and specific.

<a id="formatting-todo"></a>
## How to indicate a topic is incomplete

Do not leave placeholder text in committed guide topics.

If work is incomplete:

- leave a concise HTML comment for maintainers if the note should not be
  rendered
- or add a clear issue reference in prose if readers need to understand
  a current limitation

For larger unfinished work, prefer tracking it in an issue instead of
leaving broad in-file TODO blocks.
