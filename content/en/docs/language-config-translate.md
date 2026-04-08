---
title: "Translating Configuration"
description: "How to translate field labels in a view, and other configuration."
id: "language-config-translate"
translation_key: "language-config-translate"
source_locale: "en"
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

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Regional and Language_ > _Configuration translation_
    (_admin/config/regional/config-translation_).
1. Locate the configuration item that you would like to translate. For example,
    to translate the site name, you need to find _System information_. For
    configuration that is grouped by type (for example, views or date formats),
    click the _List_ button to list all configuration of that type, and then locate
    the item you are looking for.
1. Click _Translate_ for the item you located.
1. Find a button that will let you add a translation in the desired language, and
    click this button.
1. Enter the translation in the form, and save.

    Most configuration is fairly straightforward and intuitive to edit in this
    manner. Views configuration is an exception, because the translation editing
    form is nothing like the view editing form, and it is complex and hierarchical
    rather than being a simple form with just a few fields. As an example of how to
    translate a view, here are the steps to translate the labels in the Recipes view
    to Spanish:

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Regional and Language_ > _Configuration translation_
    (_admin/config/regional/config-translation_).
1. Click _List_ in the _Views_ row.
1. Click _Translate_ in the Recipes row.
1. Click _Add_ in the _Spanish_ row. The page _Add Spanish translation for
    Recipes view_ appears.
1. Under _Displays_ > _Default Display settings_ > _Recipes default display
    Options_, translate _Display title_ from "Recipes" to "Recetas".
1. Under _Displays_ > _Default display settings_ > _Recipes default display
    options_ > _Exposed form_ > _Reset options_, translate _Submit button text_
    from "Apply" to "Applicar". The other buttons and labels in this section do not
    appear on the Recipes page or block, and do not need to be translated.
    <img src="/images/language-config-translate-recipes-view.png" alt="Translate the Recipes view" width="100%" />
1. Under _Displays_ > _Default display settings_ > _Recipes default display
    options_ > _Filters_ > _(Empty) taxonomy term ID_ > _Find recipes
    using... Expose_, translate _Label_ from "Find recipes using..." to "Encontrar
    recetas usando...".
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

** Menu links within a menu are considered to be content (not configuration);
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
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/j2GZdJIOo_I" title="Translating Configuration" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
