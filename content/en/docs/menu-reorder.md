---
title: "Changing the Order of Navigation"
description: "How to reorder links in a menu."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "en"
---
## Goal { #menu-reorder }

Reorder the links in a menu.
## Prerequisite knowledge

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Site prerequisites

Home and About pages must exist in the main navigation menu. See
[menu-link-from-content](./menu-link-from-content.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Menus_
    (_admin/structure/menu_) where all menus on your site are listed. Click _Edit
    Menu_ from the _Operations_ dropdown for _Main navigation_. You can also reach
    this page using contextual links (refer to [config-overview](./config-overview.md)) for the
    menu. Note that the names and descriptions of the menus that were provided by
    your installation profile are shown in English on this page; see
    [language-concept](./language-concept.md) for an explanation.
    <img src="/images/menu-reorder_menu_titles.webp" alt="List of menus on the site with 'Main navigation' highlighted" width="100%" />
1. The _Edit menu_ page will display a list of each link in the menu you
    chose (_Main navigation_).
    ![List of menu links under _Main navigation_](/images/menu-reorder_edit_menu.webp)
1. Drag the cross bar handles of menu links to change their order: Home, then
    About. As an alternative to dragging, you can click the _Show row weights_ link
    at the top of the table and select numerical weights (menu links with lower or
    more negative weights will be shown first).
    ![Reordered menu links with warning message about unsaved changes and the _Save_ button](/images/menu-reorder_reorder.webp)
1. Click _Save_.
1. The home page now displays the main navigation with the Home menu
    link displayed first.
    ![Reordered menu links on the home page with 'Home' first and then 'About'](/images/menu-reorder_final_order.webp)

## Expand your understanding

Add a menu link called _Contact_, leading to the _/contact_ page, to your Main
navigation menu. The contact page is provided by the core Contact module; you
may want to edit its layout and fields (see [structure-form-editing](./structure-form-editing.md)).
## Related concepts

[menu-concept](./menu-concept.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Changing the Order of Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Ann Greazel](https://www.drupal.org/u/AnnGreazel).
