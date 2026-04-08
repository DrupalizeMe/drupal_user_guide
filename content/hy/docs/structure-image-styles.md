---
title: "Concept: Image Styles"
description: "Overview of image styles and how they are used to display a single image in several variations."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "hy"
---
## Prerequisite knowledge { #structure-image-styles }

[structure-fields](./structure-fields.md)
## What are image styles?

Image styles allow you to upload a single image but display it in several ways;
each display variation, or _image style_, is the result of applying one or more
_effects_ to the original image.

As an example, you might upload a high-resolution image with a 4:3 aspect ratio,
and display it scaled down, square cropped, or black-and-white (or any
combination of these effects). The core software provides a way to do this
efficiently:

1. Configure an image style with the desired effects on the _Image styles_ page
    (_admin/config/media/image-styles_).
1. The effects will be applied the first time a particular image is requested in
    that style.
1. The resulting image is saved.
1. The next time that same style is requested, the saved image is retrieved
    without the need to recalculate the effects.

    The core software provides several effects that you can use to define styles;
    others may be provided by contributed modules.

    Visit the _Image styles_ page via the _Manage_ administrative menu, navigate to
    _Configuration_ > _Media_ > _Image styles_ (_admin/config/media/image-styles_)
    to see the image styles that are defined by default.
## Related topics

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Additional resources

[_Drupal.org_ community documentation page "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Attributions*

Adapted and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com), from
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation)
