---
title: "Changing the Order of Navigation"
description: "How to reorder items in a menu."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "id"
---
## Goal { #menu-reorder }

Reorder the items in a menu.
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
    this page using contextual links (refer to [config-overview](./config-overview.md)) for the menu.
    <img src="/images/menu-reorder_menu_titles.png" alt="List of menus on the site with 'Main navigation' highlighted" width="100%" />
1. The _Edit menu_ page will display a list of each item in the menu you
    chose (_Main navigation_).
    ![List of menus items under _Main navigation_](/images/menu-reorder_edit_menu.png)
1. Use the cross bar handles to reorder the menu items.  Drag the Home menu item
    above the About menu item so that it appears first.
    ![Reordered menu items with warning message about unsaved changes and the _Save_ button](/images/menu-reorder_reorder.png)
1. Click _Save_.
1. The home page now displays the main navigation with the Home menu
    item displayed first.
    ![Reordered menu items on the home page with 'Home' first and then 'About'](/images/menu-reorder_final_order.png)
## Expand your understanding

Add a menu item called _Contact_, leading to the _/contact_ page, to your Main
navigation menu. The contact page is provided by the core Contact module; you
may want to edit its layout and fields (see [structure-form-editing](./structure-form-editing.md)).
## Related concepts

[menu-concept](./menu-concept.md)

*Attributions*

Written by [Ann Greazel](https://www.drupal.org/u/AnnGreazel).
