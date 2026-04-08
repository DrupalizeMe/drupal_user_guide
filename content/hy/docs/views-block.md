---
title: "Adding a Block Display to a View"
description: "How to add a block display to a view."
id: "views-block"
translation_key: "views-block"
source_locale: "hy"
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
1. Create a new block display by clicking _Add_ under _Displays_. Click
    _Block_ from the list of links that appears. The new display is created, and the
    focus is automatically switched to its configuration.
    ![Add block display](/images/views-block_add-block.png)
1. To change the title of this display, click _Block_ in the _Display
    name_ field. The _Block: The name and the description of this display_ pop-up
    appears. Change the _Administrative name_ to "Recent recipes". Click _Apply_.
1. To change the title of the block, click Recipes in the _Title_ field
    under _Title_. In the pop-up that appears, select _This block (override)_ from
    the _For_ select list. Change the _Title_ field to "New recipes" and click
    _Apply (this display)_.
    ![Title only for this block](/images/views-block_title.png)
1. To change the block's style, click _Grid_ in the _Format_ field under
    _Format_. In the pop-up that appears, select _This block (override)_ from the
    _For_ select list. Select _Unformatted list_ and Click _Apply (this
    display)_. You can further configure the style options in the next pop-up that
    appears. Then click _Apply_.
1. To configure the image field, click _Content: Main image_ under _Fields_.
    In the pop-up that appears, select _This block (override)_ from the
    _For_ select list. Select _Image style Thumbnail (100x100)_. Click _Apply
    (this display)_.
    <img src="/images/views-block_image.png" alt="Image to thumbnail" width="100%" />
1. To remove ingredients as a filter, click _Content: Ingredients (exposed)_
    under _Filter criteria_. In the pop-up that appears, select _This
    block (override)_ from the _For_ select list. Click _Remove_ at the bottom.
1. To configure how you want the content to be sorted in the view, click _Add_
    from the dropdown button under _Sort criteria_. In the pop-up that appears,
    select _This block (override)_ from the _For_ select list. Check
    _Authored on_ (in the _Content_ category), and then click _Add and configure
    sort criteria_.
1. In the appearing configuration pop-up, select _Sort descending_ to have the
    most recent recipes appear first. Click _Apply_.
1. To specify the number of items to be displayed, click _Mini_ in the _Use
    pager_ field under _Pager_. In the pop-up that appears, select _This block
    (override)_ from the _For_ select list. Under _Pager_, select _Display a
    specified number of items_. Click _Apply (this display)_. In the _Block: Pager
    options_ pop-up, provide "5" as the value for _Items to display_. Click _Apply_.
1. Click _Save_. You will either see the view editing page again, or the Recipes
    page, depending on what you did in step 1. You should also see a message saying
    that the view has been saved.
    <img src="/images/views-block_recipes.png" alt="Summary page after configuration" width="100%" />
1. Place the "Recipes: Recent Recipes" block in the _Sidebar second_ region. See
    [block-place](./block-place.md). Navigate to the site's home page to see the block.
    <img src="/images/views-block_sidebar.png" alt="New Recipes block on homepage" width="100%" />

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/xrnuekARwYc" title="Adding a Block Display to a View" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Laura Vass](https://www.drupal.org/u/lolk) at
[Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and
[Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
