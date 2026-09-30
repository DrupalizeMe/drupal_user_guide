---
title: "Concept: Content Entities and Fields"
description: "Overview of content entities and fields."
id: "planning-data-types"
translation_key: "planning-data-types"
source_locale: "ca"
---
## Prerequisite knowledge { #planning-data-types }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
## What is a content entity?

A _content entity_ (or more commonly, _entity_) is an item of content data,
which can consist of text, HTML markup, images, attached files, and other data
that is intended to be displayed to site visitors. Content entities can be
defined by the core software or by modules.

Content entities are grouped into _entity types_, which have different purposes
and are displayed in very different ways on the site. Most entity
types are also divided into _entity sub-types_, which are divisions within an
entity type to allow for smaller variations in how the entities are used and
displayed. Here is a table of some common content entity types:

| Entity type | Entity sub-type | Defining Module | Main uses | Examples |
| --- | --- | --- | --- | --- |
| Content item | Content type | Node module | Content intended to be the main page area for pages on the site | In the farmers market site example, you might have content types for |
| Comment | Comment type | Comment module | Commentary added to content entities (typically to Content item entities) | On a blog site, blog posts might have comments. They are not needed in the |
| User profile | (none) | User module | Data related to a person with a user account (login access) on the site | Every site has at least basic user profiles with user names and email |
| Custom block | Block type | Custom Block module | Text and images in smaller chunks, often displayed in the site header, footer, or sidebar | In the farmers market site example, you might put the hours and location in |
| Taxonomy term | Vocabulary | Taxonomy module | Used to classify other types of content | In the farmers market site example, you might classify Recipe content with an |
| File | (none) | File module | An image or attachment file that is tracked and managed by the site, often attached to other types of content | In the farmers market site example, both Recipe and Vendor pages might have |
| Contact form | Form type | Contact module | A form that lets site visitors contact site owners | A contact form is needed in the farmers market site example |
## What is a field?

Within entity items, the data is stored in individual _fields_, each of which
holds one type of data, such as formatted or plain text, images or other files,
or dates. Field types can be defined by the core software or by modules.

Fields can be added by an administrator on entity sub-types, so that all
entity items of a given entity sub-type have the same collection of fields
available. For example, the Vendor content type in the farmers market example
might have fields for the vendor name, a logo image, website URL, and
description, whereas the _Basic page_ content type might only have fields for
the title and page body. When you create or edit entity items, you are
specifying the values for the fields on the entity item.
## Related topics

* [planning-structure](./planning-structure.md)
* [content-create](./content-create.md)
* [structure-content-type](./structure-content-type.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [user-concept](./user-concept.md)
* [block-concept](./block-concept.md)

*Attributions*

Written and edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
and [Grant Dunham](https://www.drupal.org/u/gdunham).
