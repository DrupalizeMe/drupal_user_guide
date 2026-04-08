<a id="templates"></a>
# Topic templates

Templates for writing task and concept topics in the current Markdown
guide.

The repository also includes ready-to-copy template files in
[templates/concept-topic.md](../templates/concept-topic.md) and
[templates/task-topic.md](../templates/task-topic.md).

<a id="template-task"></a>
## Template for task topics

Task pages should be authored as `.md`.

```md
---
title: "Verbing a Noun"
description: "How to verb a noun."
id: "noun-verb"
translation_key: "noun-verb"
source_locale: "en"
---

## Goal { #noun-verb }

Describe the site goal for the reader. Make it specific.

## Prerequisite knowledge

[related-concept](./related-concept.md)

## Site prerequisites

- A prerequisite item on the site. See [related-task](./related-task.md).

## Steps

1. Do the first thing.
1. Do the second thing.

   Add another paragraph inside the same step by indenting it.

   | Field name | Explanation | Example value |
   | --- | --- | --- |
   | Title | Title to be displayed | Example |

   <img src="/images/noun-verb-example.png" alt="Describe the screenshot" width="100%" />

1. Verify the result.

## Expand your understanding

- [another-task](./another-task.md)

## Related concepts

- [related-concept](./related-concept.md)

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/VIDEO_ID" title="Name of video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

- [Useful external resource](https://example.com)

*Attributions*

Written by [Example Person](https://example.com)
```

Notes:

- Use relative Markdown links such as `[related-concept](./related-concept.md)`.
- Remove placeholder text before considering the topic complete.

<a id="template-concept"></a>
## Template for concept topics

Concept pages can usually stay as plain `.md`.

```md
---
title: "Concept: Example"
description: "Overview of example."
id: "example-concept"
translation_key: "example-concept"
source_locale: "en"
---

## Prerequisite knowledge

- [related-concept](./related-concept.md)

## What is Example? { #example-concept }

Explain the concept clearly and relate it to the guide scenario when
that helps.

## Related topics

- [related-task](./related-task.md)
- [another-concept](./another-concept.md)

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/VIDEO_ID" title="Name of video" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

- [Useful external resource](https://example.com)

*Attributions*

Written by [Example Person](https://example.com)
```

Use this concept template when the page explains an idea rather than
walking through a procedure.
