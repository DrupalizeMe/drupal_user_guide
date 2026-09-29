---
title: "Adding a Block Display to a View"
description: "How to add a block display to a view."
id: "views-block"
translation_key: "views-block"
source_locale: "ca"
---
## Goal { #views-block }

Add a block display to the Recipes view to display the most recent recipes
in a sidebar, and change its configuration without changing the existing
Recipes page view.
## Prerequisite knowledge

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
* [views-create](./views-create.md)
## Site prerequisites

* The Recipe content type must exist, it must have a Main image field, and your
site must have a couple of Recipe content items. See [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), [structure-form-editing](./structure-form-editing.md), and [content-create](./content-create.md).
* The _Thumbnail (100x100)_ image style must be defined. This is created on your
site when you install the core Image module (installed with the core Standard
installation profile) but can be recreated if deleted. See
[structure-image-style-create](./structure-image-style-create.md).
* The Recipes view must exist. See [views-create](./views-create.md) and [views-duplicate](./views-duplicate.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Views_
    (_admin/structure/views_). Find the view "Recipes" and click _Edit_ from its
    dropdown button. Alternatively, navigate to the Recipes page in the main site
    navigation, and click the _Edit view_ contextual link in the main area of the
    page. See [config-overview](./config-overview.md) for information about contextual links.
1. Create a new block display by clicking _Add_ in the _Displays_ section. Click
    _Block_ from the dropdown button. The new display is created, and the focus is
    automatically switched to its configuration.
    ![Add block display](/images/views-block_add-block.png)
1. Change the title of this display by clicking _Block_ next to _Display
    name_. The _Page: The name and the description of this display_ pop-up
    appears. Change the _Administrative name_ to "Recent recipes". Click _Apply_.
1. Change the title of the view by clicking _Title: Recipes_ in the _Title_
    section. In the pop-up that appears, select _For This block (override)_ from the
    _For_ dropdown button. Change the title to "New Recipes" and click _Apply (this
    display)_.
    ![Title only for this block](/images/views-block_title.png)
1. Change the view's style by clicking _Format: Grid_ in the _Format_ section. In
    the pop-up that appears, select _For This block (override)_ from the _For_
    dropdown button. Select _Unformatted list_ and Click _Apply (this display)_. You
    can further configure the style options in the next pop-up that appears.
1. Configure the image field by clicking _Content: Main image_ in the _Fields_
    section. In the pop-up that appears, select _For This block (override)_ from the
    _For_ dropdown button. Select _Image style Thumbnail (100x100)_. Click _Apply
    (this display)_.
    <img src="/images/views-block_image.png" alt="Image to thumbnail" width="100%" />
1. Remove ingredients as a filter by clicking _Content: Ingredients (exposed)_ in
    the _Filter criteria_ section. In the pop-up that appears, select _For This
    block (override)_ from the _For_ dropdown button. Click _Remove_ at the bottom.
1. Configure how you want the content to be sorted in the view by clicking _Add_
    in the _Sort criteria_ section. In the pop-up that appears, select _For This
    block (override)_ from the _For_ dropdown button. Check the field _Authored on_
    (from Content category), and then _Add and configure sort criteria_.
1. In the appearing configuration pop-up, select _Sort descending_ to have the
    most recent recipes appear first. Click _Apply_.
1. Specify the number of items to be displayed by clicking _Use pager: Mini_ in
    the _Pager_ section. In the pop-up that appears, select _For This block
    (override)_ from the _For_ dropdown button. Under _Pager_, select _Display a
    specified number of items_. Click _Apply (this display)_. In the _Page: Pager
    options_ pop-up, provide "5" as the value for _Items to display_.
1. Click _Save_. You will either see the view editing page again, or the Recipes
    page, depending on what you did in step 1. You should also see a message saying
    that the view has been saved.
    <img src="/images/views-block_recipes.png" alt="Summary page after configuration" width="100%" />
1. Place the "Recipes: Recent Recipes" block in the _Sidebar second_ region. See
    [block-place](./block-place.md). Navigate to the site's home page to see the block.
    <img src="/images/views-block_sidebar.png" alt="New Recipes block on homepage" width="100%" />

    *Attributions*

    Written and edited by [Laura Vass](https://www.drupal.org/u/lolk) at
    [Pronovix](https://pronovix.com/),
    [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and
    [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
    [Red Crackle](http://redcrackle.com).
