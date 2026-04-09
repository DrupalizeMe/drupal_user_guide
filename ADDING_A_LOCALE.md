# Adding a Locale

This document describes how to add a new translation locale to the
Markdown/Zensical site.

It assumes that:

- Markdown files in `content/<locale>/docs/` are the source of truth for page content
- `content/<locale>/zensical.toml` is the source of truth for locale-local Zensical navigation and settings
- locale images live in `content/<locale>/docs/images/`
- locale-local site assets live in `content/<locale>/docs/assets/`

This is slightly different from a standard single-site Zensical project. Each locale here is its own committed Zensical site, and the project-specific build wrapper later assembles those locale builds into one published multi-locale site.

## Summary

To add a new locale:

1. Register the locale in `content/locales.yml`
2. Create `content/<locale>/`
3. Create `content/<locale>/zensical.toml`
4. Create `content/<locale>/docs/`
5. Add localized images in `content/<locale>/docs/images/`
6. Translate content from English while preserving IDs and translation keys
7. Build the site and verify the new locale routes

## 1. Register the Locale

Add the locale to `content/locales.yml`.

Example:

```yaml
en:
  label: English
  lang: en
it:
  label: Italiano
  lang: it
```

Use:

- `label` for the language switcher label
- `lang` for the locale's language code
- `dir: 'rtl'` only for right-to-left languages
- `ui_lang` only when the Zensical theme needs a different UI language
  code than the locale's content language

## 2. Create the Docs Directory

Create a new directory:

```bash
mkdir -p content/<locale>
```

Start by copying the English docs as a template:

```bash
cp -R content/en content/<locale>
```

Then translate the copied files.

Keep filenames exactly the same as English. Locale builds rely on the
same file structure across languages.

## 3. Create the Locale Zensical Config

Each locale needs a committed `zensical.toml` in its locale directory.

If you copied the English locale directory, you already have one. Update:

- `site_name`
- `site_description`
- `theme.language`
- the language switcher entries under `extra.alternate`
- any localized navigation labels in `nav`

Keep:

- route/file references in `nav`
- the overall page ordering unless you are deliberately changing the
  guide structure across all locales

Files inside `docs/`, including `index.md`, are just normal committed
content. Edit them directly when you
want to change the locale landing page content.

## 4. Add Locale Images

Create a matching image directory:

```bash
mkdir -p content/<locale>/docs/images
```

Add localized images there, keeping file paths stable when practical.

Images are per-locale and should not be deduplicated across languages unless the asset is truly language-neutral.

Keep the locale's committed site assets under `content/<locale>/docs/assets/`, including `guide.css`, `favicon.ico`, and `druplicon.svg`.

## 5. Translate Page Content

For each page in `content/<locale>/docs/`:

- translate visible text
- keep frontmatter `id` unchanged
- keep frontmatter `translation_key` aligned with the English page
- keep filenames aligned with English
- keep guide-internal page links as file-stem placeholder links

Important conventions:

- `id` is the stable topic identifier and should stay the same across locales
- `translation_key` should also stay aligned across locales
- same-page guide links should use the target file stem, such as `[install-run](./install-run.md)`
- anchor links can keep explicit visible text, such as `[Drupal User Guide](./index.md#user-chapter)`

Do not translate:

- filenames unless you are intentionally changing the route structure for all locales
- anchor IDs
- cross-reference target IDs

## 6. Keep Linking Conventions

Preferred page-to-page guide links use the target file stem as the
placeholder label:

```md
[install-run](./install-run.md)
```

The prep step turns that into a normal visible page-title link in the
generated workspace.

For anchor links or other cases where the visible text should not be the
destination page title, keep an explicit label:

```md
[Drupal User Guide](./index.md#user-chapter)
```

For explicit stable anchors inside a page, keep the Markdown ID syntax:

```md
## Goal { #install-run }
```

## 7. Build and Verify

Create a Python virtual environment and install the Zensical
requirements if needed:

```bash
python3 -m venv .venv
./.venv/bin/python -m ensurepip --upgrade
./.venv/bin/python -m pip install -r requirements.txt
```

Run a site build:

```bash
./.venv/bin/python scripts/zensical/build_site.py --locales <locale>
```

That wrapper exists because Zensical builds one locale site at a time, while this repository publishes many locale sites together under one Drupal.org Pages deployment.

Recommended checks:

- the new locale appears in the language switcher
- `/<locale>/` loads
- a few translated topic pages load
- sidebar labels are localized
- landing page chapter labels are localized
- internal links resolve
- localized images load

For local browsing, prepare a workspace first so placeholder links are
resolved to destination page titles:

```bash
./.venv/bin/python scripts/zensical/prepare_site.py --locales <locale>
./.venv/bin/zensical serve -f build/zensical/workspaces/dev/<locale>/zensical.toml
```

## 8. Content Expectations

Locales should keep the same page/file structure as English. The normal
translation workflow is to copy the full English locale and then
translate it in place, even if some pages remain in English for a time.

## 9. Files to Update

When adding a locale, expect to touch at least:

- `content/locales.yml`
- `content/<locale>/zensical.toml`
- `content/<locale>/docs/index.md`
- `content/<locale>/docs/*.md`
- `content/<locale>/docs/images/*`

## 10. Commit Model

After a locale has been created or refreshed:

- commit the Markdown files
- commit `zensical.toml`
- commit the landing page changes
- commit locale images
