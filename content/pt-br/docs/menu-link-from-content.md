---
title: "Adding a Page to the Navigation"
description: "How to add a page to the navigation."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "pt-br"
---
## Goal { #menu-link-from-content }

Add a page to the navigation. For example, the About page.
## Prerequisite knowledge

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Site prerequisites

The About page content item must exist. See [content-create](./content-create.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Content_ (_admin/content_).
1. Find the About page, and click _Edit_ in that row. The content editing form
    appears.
    <img src="/images/menu-link-from-content_edit_page.webp" alt="Page edit link" width="100%" />
1. Click _Menu settings_ on the right to expand it.
1. Check _Provide a menu link_ for the menu options to appear.
1. Enter values from the table below:
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
          <td>Menu link title</td>
          <td>Title that will be displayed in the menu</td>
          <td>About</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Text that will be displayed when a visitor hovers over the link</td>
          <td>History of the market</td>
        </tr>
        <tr>
          <td>Parent item</td>
          <td>Location of the page in the menu hierarchy. For example, if you choose _<Main navigation>_, the page will appear in the highest level of the navigation. By choosing another menu item as parent, you can create a menu hierarchy of multiple levels.</td>
          <td><Main navigation></td>
          <td>Weight</td>
          <td>The order in which the page should appear in the menu (lower-weighted</td>
        </tr>
      </tbody>
    </table>

    ![Creating a menu link from within the content edit form](/images/menu-link-from-content.webp)

1. Click _Save_ to save the changes. Click _Home_ or _Return
    to site_ in the navigation bar to see the result, which could look like the
    picture below.
    <img src="/images/menu-link-from-content-result.webp" alt="Link has been added to the main menu" width="100%" />

## Expand your understanding

[menu-reorder](./menu-reorder.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Adding a Page to the Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[_Drupal.org_ community documentation page "Working with menus"](https://www.drupal.org/docs/8/core/modules/menu-ui)

*Attributions*

Adapted by [Boris Doesborg](https://www.drupal.org/u/batigolix) from
["Working with Menus"](https://www.drupal.org/docs/8/core/modules/menu-ui),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation);
edited by [Jack Haas](https://www.drupal.org/u/jerseycheese).
