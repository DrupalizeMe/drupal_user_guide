<a id="guidelines-translating"></a>
# Translation Guidelines

Guidelines for translators of the Drupal User Guide to follow.

**Note: This is a rough draft still!**

- When translating, follow the standard glossary of terminology
  translations that your language team has set up for the Drupal User Guide,
  so that consistency is maintained across the entire book.

- You may feel free to communicate on translation issues for the
  Drupal User Guide either in English, or in the language you are translating
  into.

- Be careful not to change the Markdown formatting. See
  [Formatting Your Text](./formatting.md#formatting) for details.

- Be careful not to change any IDs — these should stay in English (they
  are not visible to the reader). IDs come in two places/types:

  - The topic `id` in frontmatter, which looks like
    `id: "block-place"`.

  - Explicit body anchors and anchored links, such as
    `## Goal { #block-place }` and
    `[Ajax entry in the Glossary](./glossary.md#glossary-ajax)`. You
    should translate visible link text when needed, but not the slug or
    anchor id.

- Be careful not to change any image file names, for embedded images.
  The image embedding lines look like:
  `<img src="/images/example.png" alt="Screen shot of the tracking spreadsheet" width="100%" />`
  You should translate the `alt` text, but not the image path unless
  the locale uses a different image file.

- Be sure to look at the **images** carefully and note on your issue if
  there are any problems, such as:

  - Bad cropping (too much white space or important things cut off)

  - Bad magnification on the page

  - Untranslated English text that should be in your language

  - Text entered in forms in the image that doesn’t match the
    instructions

- If there is a Glossary topic, you will need to re-alphabetize it after
  translating the terms and definitions.

- Translate visible labels, glossary links, and other reader-facing text
  in the topic, but keep structural metadata and stable ids intact.

- **Additional references section in some topics:** This section is for
  links to outside references, and most or all are in English.
  Translators will need to replace the references with references in
  their language if possible. If you are not able to find reference
  links in your language, and feel that the English references are still
  useful to include (or want to include references in a third language),
  make sure to include a note with each reference that is not in the
  language you are translated into. For instance, it might say:

<!-- -->

    [Drupal.org community documentation page "Working with blocks (content in
    regions)" (in English)](https://www.drupal.org/documentation/modules/block)

- **Attributions information:** There may be attributions information at
  the bottom of topic files, as well as in a book-wide
  attributions page. When translating attributions information, do
  not translate people’s names, URLs, or company names. Your language
  version of the book will also need to have additional attributions
  added for the translation team for your language.

**Attributions**

Written/edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
and [Joe Shindelar](https://www.drupal.org/u/eojthebrave).
