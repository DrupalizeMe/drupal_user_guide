---
title: "Changing Content Entry Forms"
description: "How to edit a content entry form."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "en"
---
## Goal { #structure-form-editing }

Change the Recipe form to use a different widget to enter terms in the
Ingredients field.
## Prerequisite knowledge

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Site prerequisites

The Recipe content type must exist, and it must have an Ingredients taxonomy
term reference field. At least one Vendor content item must exist. See
[structure-content-type](./structure-content-type.md) and [structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Content_ > _Add content_ >
    _Recipe_ (_node/add/recipe_) to look at the content entry form that is set up by
    default. Notice how you have to enter ingredients one by one, instead of having
    a more compact format.
1. In the _Manage_ administrative menu, navigate to _Structure_ > _Content
    types_ (_admin/structure/types_). Then click _Manage form display_  on the
    dropdown button for the Recipe content type. The _Manage form display_ page
    appears.
1. For the Ingredients field, select _Autocomplete (Tags style)_ in the _Widget_
    column.
    <img src="/images/structure-form-editing-manage-form.webp" alt="Manage the Recipe form" width="100%" />
1. Click _Save_.
1. In the _Manage_ administrative menu, navigate to _Content_ > _Add content_ >
    Recipe (_node/add/recipe_) to verify the changed behavior of the content
    form. The Ingredients field is now a single text field that accepts multiple
    values.
    <img src="/images/structure-form-editing-add-recipe.webp" alt="Add a recipe" width="100%" />
1. Create two Recipe content items (see [content-create](./content-create.md)), such as recipes for
    "Green Salad" and "Fresh Carrots". Make sure all the fields have values,
    including images, ingredients, and submitted by (set this to one of the Vendor
    content items you created in [structure-fields](./structure-fields.md)).

## Expand your understanding

Change the main site Contact form by navigating in the _Manage_ administrative
menu to _Structure_ > _Contact forms_. For instance, you may want to hide the
_Send yourself a copy_ or _Language_ fields.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Changing Content Entry Forms" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
