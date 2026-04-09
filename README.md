# Drupal User Guide

This repository contains the source for the Drupal User Guide.

The guide is built with [Zensical](https://zensical.org). Content is authored in Markdown, organized by locale, and assembled as a static site assembled under locale roots such as `/en/` and `/de/`.

## Quickstart

Project page: https://www.drupal.org/project/user_guide
Issues: https://www.drupal.org/project/issues/user_guide?categories=All 

If you want to contribute an edit to an existing page the easiest way to do that is to edit the relevant file directly in GitLab and open a merge request.

For bigger changes, or to work locally, read the rest of this document.

## Setup

Clone the repo, and create a Python virtual environment and install the Zensical requirements:

```bash
git clone git@git.drupal.org:project/user_guide.git
cd user_guide

python3 -m venv .venv
./.venv/bin/python -m ensurepip --upgrade
./.venv/bin/python -m pip install -r requirements.txt
```

## File organization

This repository contains one Zensical site per locale under `content/`, plus the supporting material needed to author, build, and maintain those locale sites.

The most important directories are:

**content/**

Each locale lives in its own directory, such as `content/en/` or `content/de/`. Every locale directory contains:

- `zensical.toml` for that locale's site config
- `docs/` for that locale's Markdown pages
- `docs/images/` for locale-specific screenshots and page images
- `docs/assets/` for committed site assets used by that locale build

In other words, `content/en/` is a complete English site, `content/de/` is a complete German site, and so on.

**assets/**

Images and text for use in making screenshots for the guide.

**guidelines/ & templates/**

Contributor and editorial documentation for this project is in the _guidelines/_ and _templates/_ directories.

## Working with content

Guide pages live in locale folders under [content](./content). Each page uses frontmatter plus Markdown body content.

Each locale directory also contains its committed Zensical site files:

- `zensical.toml` for locale-local navigation and site settings
- `docs/` for Markdown content, `index.md`, locale-specific images, and committed site assets under `docs/assets/`

Locale metadata is maintained in [content/locales.yml](./content/locales.yml).

Build a preview of the locale site you're working on with:

```bash
./.venv/bin/zensical serve -f content/en/zensical.toml
```

Note that internal links will _work_ there, but placeholder page links will still show placeholder names. More about this below.

### Special link handling and page types

There's a special build step to help with internal page links. This allows you to author a link like `[config-theme](./config-theme.md)` and `[config-theme]` will be automatically replaced with the title of the linked tutorial. This helps ensure link titles stay up-to-date as tutorial titles change.

Internal page links should use the target file stem as the link label. The prep step replaces that placeholder with the destination page title in the generated workspace:

```md
[config-theme](./config-theme.md)
```

Where `config-theme` is both the file stem, and the frontmatter `id`. This becomes:

```md
[Configuring the Theme](./config-theme.md)
```

## Why are there multiple sites in one repo?

This repository is one documentation project, but it contains one Zensical site per locale under `content/<locale>/`.

That means:

- `content/en/` is the English site
- `content/de/` is the German site
- `content/fr/` is the French site
- and so on for each locale listed in [content/locales.yml](./content/locales.yml)

For content authoring guidance, start with [guidelines/README.md](./guidelines/README.md).

If you are adding a new locale, follow [ADDING_A_LOCALE.md](./ADDING_A_LOCALE.md).

Each site is basically an exact copy of the English site with the content of the `.md` files translated to the specific locale.

It's organized this way because Zensical builds one site at a time, but the Drupal User Guide is published as one multi-locale documentation site with language roots such as `/en/` and `/de/`.

So we've basically got two layers:

- authoring layer: locale sites live under `content/<locale>/`
- publishing layer: custom build wrapper that runs a standard build for each locale, and then assembles those locale builds into one output tree under `build/zensical/site-build/assembled/`

More about the custom build steps below.

If you are reading the repository directly, it helps to think of each locale directory as a self-contained site that happens to live alongside the others.

## Building the HTML site

This repository has a small Python prep/build layer around Zensical.

It does three project-specific things:

- prepare generated locale workspaces under `build/zensical/workspaces/`
- replace placeholder links like `[config-theme](./config-theme.md)` with the destination page title in the generated workspace
- build a selected set of locale sites in one command
- rewrite root-relative locale URLs during assembly so navigation, images, stylesheets, favicons, and locale switcher links so they still work when GitLab pages serves previews under a path prefix such as `/user_guide/preview-74/`

This also means that if you're making changes to Zensical configuration (zensical.toml) those changes likely need to be made across all locales. The same is true for assets like logo, favicon, and CSS.

You can run any individual site locally, but if you want to preview or build the finished product there are some extra steps.

To preview the final site for a specific locale prepare a locale workspace for review:

```bash
./.venv/bin/python scripts/zensical/prepare_site.py --locales en
```

Then serve that prepared locale with Zensical:

```bash
./.venv/bin/zensical serve -f build/zensical/workspaces/dev/en/zensical.toml
```

To build the assembled multi-locale publish artifact:

```bash
./.venv/bin/python scripts/zensical/build_site.py
```

To build and serve the assembled multi-locale output with one command:

```bash
./scripts/zensical/preview_site.sh
```

The script prints the local preview URLs and then serves the assembled site until you stop it with `Ctrl+C`.

If you want to do that flow manually, serve the built files directly:

```bash
cd build/zensical/site-build/assembled
python3 -m http.server 8000
```

Then open `http://localhost:8000/en/`, `http://localhost:8000/de/`, and the other locale roots you want to review.

Build only a subset of locales when you want a smaller assembled review artifact:

```bash
./.venv/bin/python scripts/zensical/build_site.py --locales en,de
```

Or build and preview only a subset directly:

```bash
./scripts/zensical/preview_site.sh --locales en,de --port 8001
```

For a different locale, rerun the prep command and change the served config path to `build/zensical/workspaces/dev/<locale>/zensical.toml`.

The assembled build remains a project-specific wrapper around standard `zensical build` because Zensical does not natively publish multiple locale roots as one artifact, and because the guide uses placeholder Markdown links that need a pre-build normalization step.

## Contributing

When contributing content or site changes:

1. Read the relevant guidance in [guidelines](./guidelines).
2. Make changes in the Markdown content, images, or site code as needed.
3. Run `./.venv/bin/python scripts/zensical/build_site.py` before submitting changes.
4. Review the generated site locally with `python scripts/zensical/prepare_site.py --locales <locale>` followed by `zensical serve -f build/zensical/workspaces/dev/<locale>/zensical.toml` when the change affects rendering or navigation.

## Copyright and license

Guide content, contributor documentation, and templates in this project are licensed under `CC BY-SA 2.0`. Copyright and attribution notices are maintained in the directories that own that content, including:

- [content](./content/), with notices in each locale's `copyright.md` and `attributions.md`
- [guidelines](./guidelines), with notices in `guidelines/copyright.md`
- [templates](./templates), with notices in `templates/COPYRIGHT.txt`

Screenshot and media source material under [assets](./assets) includes a mix of `CC BY-SA 2.0` and public-domain material. See `assets/README.txt` for the directory-specific notices and attributions.

Project-specific code in this repository, including site configuration and build scripts, is licensed under the GNU GPL version 2 or later. Third-party dependencies are provided under their own licenses.
