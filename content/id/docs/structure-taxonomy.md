---
title: "Concept: Taxonomy"
description: "Overview of taxonomy and how it can be used to categorize content in a website."
id: "structure-taxonomy"
translation_key: "structure-taxonomy"
source_locale: "id"
---
## Prerequisite knowledge { #structure-taxonomy }

* [planning-data-types](./planning-data-types.md)
* [structure-reference-fields](./structure-reference-fields.md)
## What is Taxonomy?

_Taxonomy_ is used to classify website content. One common example of taxonomy
is the tags used to classify or categorize posts in a blog website; the farmers
market website could use an ingredients taxonomy to classify recipes.
Individual taxonomy items are known as _terms_ (the blog tags or recipe
ingredients in these examples); and a set of terms is known as a _vocabulary_
(the set of all blog post tags, or the set of all recipe ingredients in these
examples). Technically, taxonomy terms are an entity type and the entity
subtypes are the vocabularies. Like other entities, taxonomy terms can have
fields attached; for instance, you could set up an image field to contain an
icon for each term.

An individual vocabulary can organize its terms in a hierarchy, or it could be
flat. For example, blog tags normally have a flat structure, while a recipe
ingredients vocabulary could be hierarchical (for example, tomatoes could be a
sub-term of vegetables, and under tomatoes, you could have green and red
tomatoes).

Taxonomy terms are normally attached as reference fields to other content
entities, which is how you can use them to classify content. When you set up a
taxonomy reference field, you can let users enter terms in two ways:

- **Free tagging:** New terms can be created right on the content editing form.
- **Fixed list of terms:** The list of terms is curated and managed outside the content editing form, and users can only choose from the existing list when editing content.

Taxonomy reference fields can be added to any entity, such as user accounts,
custom blocks, or regular content items. If you use them to classify regular
content items, your site will automatically be set up with
taxonomy listing pages for each term; each of these pages lists all of the
content items that are classified with that term. For example, if you created
several recipes that all had carrots as an ingredient, you might see something
like this on the Carrots taxonomy listing page:

![Taxonomy listing page - Carrots](/images/structure-taxonomy_listingPage_carrots.webp)
## Related topics

* [structure-taxonomy-setup](./structure-taxonomy-setup.md).
* The listing pages are views, which are covered in [views-chapter](./index.md#views-chapter).

*Attributions*

Adapted and edited by [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com) from
["Organizing content with taxonomies"](https://www.drupal.org/docs/7/organizing-content-with-taxonomies/organizing-content-with-taxonomy)
and ["About taxonomies"](https://www.drupal.org/node/774892),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
