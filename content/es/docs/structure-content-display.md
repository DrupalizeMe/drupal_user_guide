---
title: "Changing Content Display"
description: "How to make content items more presentable."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "es"
---
## Goal { #structure-content-display }

Make the content items more readable, accessible, and visibly attractive by
reordering the fields, hiding labels, and tuning the output of the fields.
## Prerequisite knowledge

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Site prerequisites

The Vendor content type must exist, it must have Main Image and Vendor URL
fields, and your site must have at least one Vendor content item. See
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), and [content-create](./content-create.md).
## Steps

1. Find and view a Vendor content item you created in [structure-fields](./structure-fields.md).
    Notice that there are several things that could be done to improve how the page
    looks:
    * The Main Image and Vendor URL fields should not have labels.
    * The order of the fields should be changed so that the image comes first.
    * The image should be smaller.
1. To fix the first two problems, and update some additional settings, in the
    _Manage_ administrative menu, navigate to _Structure_ > _Content types_
    (_admin/structure/types_). Then click _Manage display_ in the dropdown button
    for the Vendor content type.
    <img src="/images/structure-content-display_manage_display.png" alt="Manage display" width="100%" />
1. Under the _Label_ column, select _Hidden_ for Main image. Do the same
    for Vendor URL.
    <img src="/images/structure-content-display_main_image_hidden.png" alt="Selecting _main image title_ as _hidden_" width="100%" />
1. Click the gear wheel for the Vendor URL field, to open the configuration
    options.
1. Fill in the fields as shown below.
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
          <td>Trim link text length</td>
          <td>Maximum displayed length for link text</td>
          <td>Blank (no trimming)</td>
        </tr>
        <tr>
          <td>Open link in new window</td>
          <td>Whether links should open in a new window or the same window</td>
          <td>Checked</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.png" alt="Link trim length" width="100%" />

1. Click _Update_.
1. Drag the cross bar handles of the fields to reorder as Main image, _Body_,
    Vendor URL, and _Links_. As an alternative to dragging, you can click the _Show
    row weights_ link at the top of the table and enter numerical weights (fields
    with lower or more negative weights will be shown first).
    <img src="/images/structure-content-display_change_order.png" alt="Changing order of fields" width="100%" />
1. Click _Save_.
1. Find the Vendor content item from step 1 again, and verify that the updates
    have been made.
1. Repeat similar steps to manage the display of the Recipe content type
    fields.
## Expand your understanding

* Make the main image smaller. See [structure-image-style-create](./structure-image-style-create.md).
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Related concepts

[structure-image-styles](./structure-image-styles.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Changing Content Display" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

* [_Drupal.org_ community documentation page "Specify how fields are displayed"](https://www.drupal.org/node/774798)
* [_Drupal.org_ community documentation page "Rearrange the order of fields"](https://www.drupal.org/node/774744)
* [_Drupal.org_ community documentation page "View modes"](https://www.drupal.org/node/1577752)

*Attributions*

Written by [Ann Greazel](https://www.drupal.org/u/AnnGreazel) and
[Boris Doesborg](https://www.drupal.org/u/batigolix).
