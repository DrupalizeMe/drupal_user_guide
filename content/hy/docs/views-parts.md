---
title: "Concept: The Parts of a View"
description: "Overview of the administrative parts of a view."
id: "views-parts"
translation_key: "views-parts"
source_locale: "hy"
---
## Prerequisite knowledge { #views-parts }

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [views-concept](./views-concept.md)
* [content-paths](./content-paths.md)
* [block-concept](./block-concept.md)
## What are the parts of a view?

When you are editing a view in the administrative interface, you will see the
following parts (or sections), which allow you to specify what data to output,
in what order, and in what format:

- **Display:** Each view can have one or more displays, each of which produces one type of output. Options for display types include: Page;; Makes output at a particular URL, for the main page content at that URL. Block;; Makes output in a block, which can be placed on pages. Feed;; Makes an RSS or another type of feed. Attachment;; Makes output that you can attach to another display.
- **Format:** Depending on the display type, you can choose to output your data in a table, grid, HTML list, or another format. Some formats also give you a second choice that lets you output either rendered entities or fields; other formats do not give you this choice (for example, if you use a table format, you must always use fields).
- **Fields:** Depending on the format choice, you may be able to choose which content fields are output. For example, if you were making a view of recipe content items, in a block display you might show only the recipe names, while in a full page display you might also show an image field because you have more space.
- **Filter criteria:** Filters limit the data to be output, based on criteria such as whether the content has been published or not, the type of content, or a field value. For instance, to make a view of recipe content items, you would need to filter to the Recipe content type, and to published recipes. Filters can also be _exposed_, which means that users will have a form where they can choose their own filter values. You might use this on a Recipe page to let users filter for recipes with certain ingredients.
- **Sort criteria:** Defines the order to present the output, which can be based on any content field.
- **Contextual filters:** Contextual filters are like regular filters, except that the values come from the _context_ of the view display, such as the full URL of the page being displayed, the current date or time, or some other value that can be detected by the view calculation.
- **Relationships:** Relationships allow you to expand what is displayed in your view, by relating the base content being displayed to other content entities. Relationships are created using fields on the base content that relate it to the other content; one example is that all regular content items have an author field, which references the user account of the person who authored the content. Once you have created a relationship, you can display fields from the referenced entity in the view.
## Related topics

[views-create](./views-create.md)

*Attributions*

Written and edited by [Surendra Mohan](https://www.drupal.org/u/surendramohan)
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
