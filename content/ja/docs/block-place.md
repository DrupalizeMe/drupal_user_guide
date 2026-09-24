---
title: "Placing a Block in a Region"
description: "How to place a block in a region."
id: "block-place"
translation_key: "block-place"
source_locale: "ja"
---
## Goal { #block-place }

Place the Opening hours and location block in the website's sidebar.
## Prerequisite knowledge

[block-concept](./block-concept.md)
## Site prerequisites

* The core Bartik theme must be installed and set as default. See
[config-theme](./config-theme.md).
* The Opening hours and location block must exist. See [block-create-custom](./block-create-custom.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Block layout_
    (_admin/structure/block_). The _Block layout_ page appears, listing the theme's
    regions.
1. Ensure that in the secondary tab the core Bartik theme is selected. Block
    placement is defined per theme.
1. Locate the region _Sidebar second_ in the list and click _Place block_ next to
    it. The _Place block_ window appears, listing all the blocks.
1. Locate the block Opening hours and location and click _Place block_ next to
    it. The _Configure block_ window appears. Fill in the fields as shown below.
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
          <td>Title</td>
          <td>Title to be displayed for the block</td>
          <td>Hours and location</td>
        </tr>
        <tr>
          <td>Display title</td>
          <td>Whether or not to display the title with the block</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Region</td>
          <td>Which theme region to display it in</td>
          <td>Sidebar second</td>
        </tr>
      </tbody>
    </table>

    You can also hide or display the block on specific pages. In the case of the
    Farmer's market website you do not set any of these configuration options
    because you want to show the block everywhere.
    <img src="/images/block-place-configure-block.webp" alt="Block configuration page" width="100%" />

1. Click _Save block_. The _Block layout_ page appears. You can drag blocks to
    change the order in which they will appear.
1. Verify that the Opening hours and location block is listed in the _Sidebar
    second_ region, and click _Save blocks_.
    The block has been placed on the sidebar of all pages that use the core Bartik
    theme.
    <img src="/images/block-place-sidebar.webp" alt="Page with a block placed on the Sidebar second region" width="100%" />

## Expand your understanding

* Remove the _Powered by Drupal_ block from the _Footer fifth_ region by setting
the region to _- None -_.
* Remove the _Tools_ block from the _Sidebar first_ region by setting the
region to _- None -_. This block is only visible to logged-in users.
* Place the _User login_ block in a region.
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix)
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
