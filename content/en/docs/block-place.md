---
title: "Placing a Block in a Region"
description: "How to place a block in a region."
id: "block-place"
translation_key: "block-place"
source_locale: "en"
---
## Goal { #block-place }

Place the Opening hours and location block in the website's sidebar.
## Prerequisite knowledge

[block-concept](./block-concept.md)
## Site prerequisites

* The core Olivero theme must be installed and set as default. See
[config-theme](./config-theme.md).
* The Opening hours and location block must exist. See [block-create-custom](./block-create-custom.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Block layout_
    (_admin/structure/block_). The _Block layout_ page appears, listing the theme's
    regions.
1. Ensure that in the secondary tab the core Olivero theme is selected. Block
    placement is defined per theme.
1. Locate the region _Sidebar_ in the list and click _Place block_ next to
    it. The _Place block_ window appears, listing all the blocks.
1. Locate the Hours and location block and click _Place block_ next to
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
          <td>Sidebar</td>
        </tr>
      </tbody>
    </table>

    You can also hide or display the block on specific pages. In the case of the
    Farmer's market website you do not set any of these configuration options
    because you want to show the block everywhere.
    <img src="/images/block-place-configure-block.png" alt="Block configuration page" width="100%" />

1. Click _Save block_. The _Block layout_ page appears. You can drag the cross
    bar handles of blocks to change their order within each region. As an
    alternative to dragging, you can click the _Show row weights_ link at the top of
    the table and select numerical weights (blocks with lower or more negative
    weights will be shown first).
1. Verify that the Hours and location block is listed in the _Sidebar_ region,
    and click _Save blocks_.
    The block has been placed on the sidebar of all pages that use the core Bartik
    theme.
    <img src="/images/block-place-sidebar.png" alt="Page with a block placed on the Sidebar region" width="100%" />

## Expand your understanding

* Remove the _Powered by Drupal_ block from the _Footer Bottom_ region by
clicking _Disable_ or _Remove_ in the _Operations_ dropdown button. Clicking
_Disable_ will let you enable the block easily later with the same
configuration; if you click _Remove_ and you want the block back, you would
need to go through the steps in this topic to place it in a region again. Note
that the names of the blocks that are provided by the core software, such as
_Powered by Drupal_ and _User login_, are shown in English on this page; see
[language-concept](./language-concept.md) for an explanation.
* Place the _User login_ block in a region.
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/iWW7Ja5p0hA" title="Placing a Block in a Region" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me)
