---
title: "Concept: Reference Fields"
description: "Overview of reference fields and their commonly-used types."
id: "structure-reference-fields"
translation_key: "structure-reference-fields"
source_locale: "id"
---
## Prerequisite knowledge { #structure-reference-fields }

[planning-data-types](./planning-data-types.md)
## What is a reference field?

A _reference field_ is a field that represents a relationship between an entity
and one or more other entities, which may belong to the same or different entity
type. The three most commonly-used reference fields are:

- **Content reference:** A reference to a content item. For example, you might want to connect recipes to the vendors who submitted them. You would set up a content reference field called Submitted by referencing Vendor content items on the Recipe content type.
- **Taxonomy term reference:** A reference to a taxonomy term. For example, you might want to connect recipes to their ingredients. You would set up a taxonomy term reference field called Ingredients on the Recipe content type. This reference field will point to the vocabulary Ingredients.
- **User reference:** A reference to a user account. For example, you might want to connect recipes with their chefs. You would set up a user reference field called Chefs on the Recipe content type.
## Related topics

[structure-taxonomy](./structure-taxonomy.md)

*Attributions*

Written and edited by [Surendra Mohan](https://www.drupal.org/u/surendramohan),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
