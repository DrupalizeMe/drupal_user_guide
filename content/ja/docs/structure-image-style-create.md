---
title: "Setting Up an Image Style"
description: "How to add an image style to reformat an image."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "ja"
---
## Goal { #structure-image-style-create }

Add an image style and use it to display images on Vendor pages.
## Prerequisite knowledge

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Site prerequisites

* Vendor and Recipe content types must exist. See [structure-content-type](./structure-content-type.md).
* Main image fields must exist for both content types. See [structure-fields](./structure-fields.md).
* Content items must exist for both content types. See
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), and [content-create](./content-create.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Configuration_ > _Media_ >
    _Image styles_ (_admin/config/media/image-styles_).
1. Click _Add image style_.
1. Enter the name _Extra medium (300x200)_
1. Click _Create new style_. The page _Edit style Extra medium
    (300x200)_ appears.
1. In the _Effect_ table, select _Scale and crop_. Click _Add_.
1. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Width</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Click _Add effect_. The image style is saved with the chosen effects.
    <img src="/images/structure-image-style-create-add-style.png" alt="Add an image style" width="100%" />
1. In the _Manage_ administrative menu, navigate to _Structure_ > _Content types_
    (_admin/structure/types_).
1. Click _Manage display_ in the _Operations_ dropdown for the Vendor content
    type. The _Manage display_ page (_admin/structure/types/manage/vendor/display_)
    appears.
1. Ensure that the secondary tab _Default_ is selected.
1. Click the cogwheel next to _Main image_ for the configuration options.
1. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Image style</td>
          <td>Extra medium (300x200)</td>
        </tr>
        <tr>
          <td>Link image to</td>
          <td>Nothing</td>
        </tr>
      </tbody>
    </table>

    ![Change field formatter settings of image field](/images/structure-image-style-create-manage-display.png)

1. Click _Update_.
1. Click _Save_. The new image style will be used while displaying Vendor
    content.
1. Open a Vendor content item and verify that it now shows up with the
    scaled-down image. See [content-edit](./content-edit.md) for information on how to locate an
    existing content item.
1. Repeat steps 8-15 for the Recipe content type.
## Related concepts

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Additional resources

[_Drupal.org_ community documentation page "Working with images in Drupal 7 and 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images)

*Attributions*

Adapted and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix), and
[Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com) from
["Working with images in Drupal 7 and 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
