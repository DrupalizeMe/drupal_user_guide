# AsciiDoc → Markdown migration pipeline

The tooling, and this documentation, was authored with Claude code.

Tooling that converted the guide's AsciiDoc sources (`source/<locale>/*.asciidoc`)
into the committed Markdown under `content/<locale>/docs/`, for
[issue #3470837](https://www.drupal.org/project/user_guide/issues/3470837).

The conversion is **scripted and deterministic** on purpose: anyone should be able
to re-run it and get the same result, rather than relying on a one-off manual or
AI-assisted pass.

> **Recovered code.** These scripts were written during the migration, committed on
> branch `zensical-pivot`, then removed before that branch was squashed onto the
> issue branch — so they were absent from the squashed commit while the AsciiDoc
> sources they consume were also deleted. They were restored from git history on
> 2026-09-15. The provenance table below records exactly where each file came from.

## Requirements

- Node.js (tested on v24) — stages 1 and 2
- Python 3 with PyYAML — stage 3
- `source/<locale>/` present in the working tree (deleted on this branch; restore
  it from `drupalorg/11.x` before running)

## Running it

```bash
node scripts/migrate/convert-all.mjs              # all locales, stage 1
node scripts/migrate/convert-locale.mjs es        # one locale, stage 1
python3 scripts/migrate/normalize_docs.py         # all locales, stage 3
python3 scripts/migrate/normalize_docs.py es id   # specific locales, stage 3
```

Stage 3 is idempotent — running it twice changes nothing.

## Pipeline stages

### Stage 1 — `convert-locale.mjs` (+ `convert-all.mjs`, `guide-structure.mjs`)

Reads `source/<locale>/*.asciidoc` and writes Markdown to `content/<locale>/docs/`,
copying screenshots to `content/<locale>/docs/images/`. Handles frontmatter, list
and table structure, video embeds, external links, and cross-reference resolution.

Ordering and chapter grouping come from `guide-structure/<locale>.mjs`.

### Stage 2 — nav and landing pages: **superseded, not included**

Originally `generate_guide_metadata.py` generated each locale's `index.md` landing
page from the guide structure. That approach was abandoned: `c607c0c1` made locale
landing pages regular content, and issue `guide-tvv` replaced the generated guide
structure with **manually maintained nav data** in `content/<locale>/zensical.toml`.

Consequences when syncing upstream changes:

- Nav ordering is **not** regenerated. If `source/<locale>/guide.asciidoc` changes
  upstream, reconcile `content/<locale>/zensical.toml` **by hand**.
- Added and deleted topics need their nav entries added/removed by hand. The
  converter iterates over source files that exist, so it silently leaves orphaned
  Markdown behind when an upstream `.asciidoc` is deleted.

### Stage 3 — `normalize_docs.py` (+ `normalize_shared.py`)

Rewrites stage 1's output into the shape the committed content actually uses:

- strips the Starlight-only `template: doc` frontmatter key
- strips the Astro `<Steps>` component and its import
- `<a id="x"></a>` + heading → `## Heading { #x }`; bare `<a id="x"></a>` → `[](){ #x }`
- resolves legacy `<<id>>` references into placeholder Markdown links
- normalizes inline `.md` link labels to the target's filename stem
- converts indented AsciiDoc tables
- collapses runs of blank lines

## The link model

Committed content stores **placeholder links** whose label is the target's own
filename stem:

```markdown
See [content-create](./content-create.md).
```

The human-readable title is substituted at **build time** by
`scripts/zensical/site_prep.py::normalize_placeholder_links`, which maps filename →
frontmatter title. Keeping titles out of the committed source means retitling a page
does not require editing every page that links to it.

Anchored links (`./glossary.md#glossary-path`) keep whatever label the AsciiDoc
source gave them and are left untouched.

This replaced an earlier reference-style "autorefs" model (`[Title][topic-id]`) at
`7b4ba91f` and `2765979a`. The recovered stage 3 predates that change, so
`_replace_md_links` and `_replace_legacy_refs` in `normalize_shared.py` were
**rewritten during recovery** for the placeholder model. Both carry comments saying so.

## Provenance

| File | Recovered from |
|---|---|
| `convert-locale.mjs` | `c2872ab3:scripts/migrate/convert-locale.mjs` (output paths retargeted) |
| `convert-all.mjs` | `c2872ab3:scripts/migrate/convert-all.mjs` |
| `guide-structure.mjs` | `c2872ab3:scripts/migrate/guide-structure.mjs` (import repointed) |
| `guide-structure/*.mjs` | `c2872ab3:src/content/guide-structure/*.mjs` |
| `normalize_docs.py` | `ad98f968:scripts/zensical/normalize_docs.py` (imports repointed) |
| `normalize_shared.py` | `ad98f968:scripts/zensical/shared.py` lines 89–286 (link functions rewritten) |

Retargeting applied on recovery, from the old Astro layout to the current one:

| Old | New |
|---|---|
| `src/content/docs/<locale>/` | `content/<locale>/docs/` |
| `public/images/<locale>/` | `content/<locale>/docs/images/` |
| `src/generated/<locale>-conversion-report.json` | `build/migrate-reports/<locale>-conversion-report.json` |

### Deliberately not restored

| File | Last good ref | Why |
|---|---|---|
| `convert-en.mjs` | `c2872ab3:scripts/migrate/convert-en.mjs` | English-only pilot, superseded by `convert-locale.mjs` when the pipeline was generalized for all locales (`guide-hc0.8`). `convert-all.mjs` covers `en`. |
| `generate_guide_metadata.py` | `c607c0c1^:scripts/migrate/generate_guide_metadata.py` | Generated locale landing pages from guide structure; superseded by `c607c0c1` and `guide-tvv` (see Stage 2). Also imports a `shared.py` that no longer exists. |

Note `41bd1f2d^:scripts/zensical/normalize_docs.py` looks like the natural recovery
point for stage 3 but is **already broken** — `normalize_doc_content()` was removed
from `shared.py` earlier, at `06bc5778`. `ad98f968` is the last ref where both exist.

## Verification

`060e90d2` is both the merge-base with `drupalorg/11.x` and the last commit with
`source/` intact, which makes it a free oracle:

```
060e90d2:source/        → pipeline →  should reproduce  content/
drupalorg/11.x:source/  → pipeline →  the upstream changes to port
```

Verified 2026-09-15:

- **Stage 1** reproduces its own committed output byte-for-byte for `es` apart from
  the `<Steps>` wrapper, which stage 3 strips anyway.
- **Stage 3** is faithful: running it over all 14 locales' committed content
  (1451 files) changes 14 lines, each a stray trailing blank line in a file that was
  hand-edited after the original normalization run. No semantic differences.

## Known gap

There is **no parser for `guide.asciidoc`**. The per-locale files in
`guide-structure/` were generated once during the original migration and committed
as data, never derived by script. That is why upstream changes to a locale's
`guide.asciidoc` have to be reconciled by hand today, and why `guide-structure/es.mjs`
reflects the state at `060e90d2` rather than current upstream.
