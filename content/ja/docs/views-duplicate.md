---
title: "Duplicating a View"
description: "How to create a new page by duplicating a view."
id: "views-duplicate"
translation_key: "views-duplicate"
source_locale: "ja"
---
## Goal { #views-duplicate }

Create a page listing recipes by duplicating the existing Vendors view.  Modify
the page so that the recipes are displayed in a grid and can by filtered by
ingredients.
## Prerequisite knowledge

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Site prerequisites

* The Vendor and Recipe content types must exist; both must have Main image
fields, and the Recipe content type must have an Ingredients field. Your site
must also have a couple of Recipe content items. See [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), [structure-taxonomy-setup](./structure-taxonomy-setup.md), [structure-form-editing](./structure-form-editing.md),
and [content-create](./content-create.md).
* The Vendors view must exist. See [views-create](./views-create.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Views_
    (_admin/structure/views_). Find the view "Vendors" and click _Duplicate_ in its
    dropdown button.
    <img src="/images/views-duplicate_duplicate.png" alt="Duplicate existing view" width="100%" />
1. Name the duplicate "Recipes" and click _Duplicate_. The view configuration
    page appears.
1. To change the title of the view page to "Recipes", click Vendors in the
    _Title_ field under _Title_. The _Page: The title of this view_ pop-up
    appears. Enter "Recipes". Click _Apply_.
    <img src="/images/views-duplicate_title.png" alt="Change view title" width="100%" />
1. To change from a table to a grid format, click _Table_ in the _Format_ field
    under _Format_. The _Page: How should this view be styled_ pop-up
    appears. Check _Grid_ and click _Apply_. The _Page: Style options_ pop-up
    appears. Retain the default values and click _Apply_.
1. To retain only the title and image fields for the Recipes view, click
    _Content: Body_ under _Fields_. Click _Remove_ in the pop-up that appears.
1. To change the content type filter to use the Recipe content type, click
    _Content: Type (=Vendor)_ under _Filter criteria_. In the _Configure
    filter criterion: Content: Type_ pop-up, check Recipe and uncheck Vendor. Click
    _Apply_.
1. To add a further filter that is exposed to visitors, click _Add_ in the
    dropdown button under _Filter criteria_. Search for "ingredients" and check
    "Ingredients (field_ingredients)". Click _Add and configure filter criteria_.
1. The appearing pop-up offers extra settings on vocabulary and selection
    type. Click _Apply and continue_. The next pop-up allows you to expose this
    filter to visitors. Fill in the fields as shown below, and click _Apply_.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Example value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Expose this filter to visitors, to allow them to change it</td>
          <td>Allow visitors to filter and search</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Required</td>
          <td>Whether a value has to be provided or not</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Label</td>
          <td>Label shown for this filter on the view page</td>
          <td>Find recipes using...</td>
        </tr>
      </tbody>
    </table>

    ![Expose filter](/images/views-duplicate_expose.png)

1. To change the _Path_ label field to "Recipes", click "/vendors" in the _Path_
    field under _Page settings_. In the pop-up that appears, enter the path
    "recipes" and click _Apply_.
    Note that when editing a view, you enter paths without the leading "/", unlike
    on other administrative pages (such as when providing a path to a content item
    page).
1. To change the menu link title, click "Normal: Vendors" in the _Menu_ field
    under _Page settings_. In the pop-up that appears, change the title to "Recipes"
    and click _Apply_.
1. In order to use Ajax (see [Ajax entry in the Glossary](./glossary.md#glossary-ajax)) to
    make filtering and paging faster for users, under _Advanced_ > _Other_, click
    _No_ in the _Use AJAX_ field. Check _Use AJAX_ in the pop-up that appears, and
    click _Apply_.
1. Click _Save_ to save the view.
1. Go back to the home page and click Recipes in the navigation to view the new
    Recipes page.
    <img src="/images/views-duplicate_final.png" alt="Recipes view" width="100%" />

## Expand your understanding

The link to the view in the main navigation will probably not be in the right
place. Change the order of the menu items in the main navigation. See
[menu-reorder](./menu-reorder.md).
## Related concepts

* [planning-structure](./planning-structure.md)
* [Ajax entry in the Glossary](./glossary.md#glossary-ajax)

*Attributions*

Written and edited by [Laura Vass](https://www.drupal.org/u/lolk) at
[Pronovix](https://pronovix.com/),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
