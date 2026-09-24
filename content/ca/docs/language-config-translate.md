---
title: "Translating Configuration"
description: "How to translate field labels in a view, and other configuration."
id: "language-config-translate"
translation_key: "language-config-translate"
source_locale: "ca"
---
## Goal { #language-config-translate }

Translate the labels on the Recipes view page into Spanish.
## Prerequisite knowledge

* [language-concept](./language-concept.md)
* [views-create](./views-create.md)
## Site prerequisites

* The core Configuration Translation module must be installed, and your site
must have at least two languages. See [language-add](./language-add.md).
* The Recipes view must exist. See [views-create](./views-create.md) and [views-duplicate](./views-duplicate.md).
## Steps

The basic steps for translating any configuration on your site are:

1. Locate the page where the configuration you want to translate is created or
    edited in the site's primary language. For example, to translate the site name,
    you need to find the page where you would edit the site name (see
    [config-basic](./config-basic.md)).
1. Find a link, tab, or button on the page that says "Translate" or something
    similar. Click this link, tab, or button.
1. Find a button that will let you add a translation in the desired language, and
    click this button.
1. Enter the translation in the form, and save.

    Most configuration is fairly straightforward and intuitive to edit in this
    manner. Views configuration is an exception, because the translation editing
    form is nothing like the view editing form, and it is complex and hierarchical
    rather than being a simple form with just a few fields. As an example of how to
    translate a view, here are the steps to translate the labels in the Recipes view
    to Spanish:

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Views_
    (_admin/structure/views_).
1. Locate the Recipes view and click _Translate_ from the dropdown button.
1. Click _Add_ in the row _Spanish_. The page _Add Spanish translation for
    Recipes view_ appears.
1. Find _Displays_ > _Master display settings_ > _Recipes default display
    options_. Translate the _Display title_ from "Recipes" to "Recetas".
1. Find _Displays_ > _Master display settings_ > _Recipes default display
    options_ > _Exposed form_ > _Reset options_. Translate _Submit button text_
    (_Apply_) to "Applicar". The other buttons and labels in this section do not
    appear on the Recipes page or block, and do not need to be translated.
    <img src="/images/language-config-translate-recipes-view.webp" alt="Translate the Recipes view" width="100%" />
1. Find _Displays_ > _Master display settings_ > _Recipes default display
    options_ > _Filters_ > _(Empty) taxonomy term ID_ > _Find recipes
    using... Expose_. In the _Label_ field, enter "Encontrar recetas usando...".
1. Click _Save translation_.
1. Navigate to the Recipes page and switch to Spanish using the Language switcher
    block. Verify that the labels have been translated.
## Expand your understanding

* Translate the block display title in the Recent recipes
display settings section of the Recipes view.
* Translate the page title in the Vendors view.
* Translate other configuration. Some examples of where to find the translation
pages:

** To translate the site name, navigate in the _Manage_ administrative menu to
_Configuration_ > _System_ > _Basic site settings_ > _Translate system
information_ (_admin/config/system/site-information/translate_).

** To translate the contact form, navigate in the _Manage_ administrative menu
to _Structure_ > _Contact forms_ (_admin/structure/contact_). Click _Translate_
in the dropdown button in the _Website feedback_ row.

** To translate the name of a menu, navigate in the _Manage_ administrative menu
to _Structure_ > _Menus_ (_admin/structure/menu_). Click _Translate_ in the
dropdown button for the menu whose name you want to translate.

** Menu items within a menu are considered to be content (not configuration);
see [language-content-config](./language-content-config.md) to enable translation. Once translation is
enabled, navigate in the _Manage_ administrative menu to _Structure_ > _Menus_
(_admin/structure/menu_). Click _Edit menu_ in the dropdown button for the menu
whose links you want to translate. Click _Translate_ in the dropdown button for
the link you want to translate.

** To translate field labels on a content type, navigate in the _Manage_
administrative menu to _Structure_ > _Content types_
(_admin/structure/types_). Click _Manage fields_ in the dropdown button for the
content type whose field labels you want to edit. Click _Translate_ in the
dropdown button for the field whose label you want to edit.

* Translate content. See [language-content-translate](./language-content-translate.md).

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
