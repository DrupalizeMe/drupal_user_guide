---
title: "Concept: Responsive Image Styles"
description: "Overview of responsive image styles, which allow you to provide different images for different screen sizes."
id: "structure-image-responsive"
translation_key: "structure-image-responsive"
source_locale: "es"
---
## Prerequisite knowledge { #structure-image-responsive }

* [understanding-themes](./understanding-themes.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## What are responsive image styles?

The core Responsive Image module provides responsive image styles. This allows
you to have images in your website that are specifically sized for different
screen sizes. This is useful, for example, to make your site load faster on
mobile devices because image sizes are optimized for smaller screens.

A responsive image style is a mapping between image styles and breakpoints.
Breakpoints are the points where a responsive design needs to change in order
to respond to different screen sizes. Responsive image styles can either work
with breakpoints defined in your theme or with breakpoints defined in the
responsive image style settings.

When a responsive image style is defined, it can be used in the display settings
for Image fields. This allows the site to display responsive images using the
HTML5 _picture_ tag, or using the _srcset_ and _sizes_ attributes in an _img_
tag, depending on how the responsive image style is set up.
## Related topics

[structure-fields](./structure-fields.md)
## Additional resources

* [_Drupal.org_ community documentation page "Responsive web design"](https://www.drupal.org/node/1388492)
* [_Drupal.org_ community documentation page "Responsive images in Drupal 8"](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8)
* [_Drupal.org_ community documentation page "Working with breakpoints in Drupal 8"](https://www.drupal.org/docs/8/theming-drupal-8/working-with-breakpoints-in-drupal-8)
* [Blog post "Responsive Images in Drupal 8 using 'srcset'"](https://chromatichq.com/blog/responsive-images-drupal-8-using-srcset)

*Attributions*

Adapted by [Boris Doesborg](https://www.drupal.org/u/batigolix) from
[Responsive images in Drupal 8](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
