---
title: "Adding Basic Fields to a Content Type"
description: "How to add fields to a content type."
id: "structure-fields"
translation_key: "structure-fields"
source_locale: "en"
---
## Goal { #structure-fields }

Add a link field and an image field to the Vendor content type.
## Prerequisite knowledge

[planning-data-types](./planning-data-types.md)
## Site prerequisites

The Vendor content type must exist. See [structure-content-type](./structure-content-type.md).
## Steps

Add the fields Vendor URL and Main image to the Vendor content type.

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Content
    types_ (_admin/structure/types_). Then click _Manage fields_ in the dropdown
    button for the Vendor content type. The _Manage fields_ page appears. From here
    you can either create a new field for the content type or re-use an existing
    field. Note that the names and descriptions of the content types and fields that
    were provided by your installation profile are shown in English on these pages;
    see [language-concept](./language-concept.md) for an explanation.
1. Click _Create a new field_. The _Add field_ page appears.
    ![Add field page to choose field type](/images/structure-fields-add-field.webp)
1. Choose the _Link_ field type from the _Choose a field type_ options. Click _Continue_. The _Add field_ page appears with a form to configure the field label.
1. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Label that is visible in administration pages</td>
          <td>Vendor URL</td>
        </tr>
        <tr>
          <td>Choose a type of field</td>
          <td>Field type</td>
          <td>Link</td>
        </tr>
      </tbody>
    </table>

    A machine name is automatically generated, based on the _Label_ value. Click
    _Edit_ if you want to override the default name.
    ![Add field page to set field label](/images/structure-fields-add-field-label.webp)

1. Click _Continue. The page _Vendor URL settings for Vendor_
    appears which allows you to configure the field. Fill in the fields as shown
    below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Label that is visible in the content form</td>
          <td>Vendor URL</td>
        </tr>
        <tr>
          <td>Allowed number of values</td>
          <td>The number of values that can be entered</td>
          <td>Limited, 1</td>
        </tr>
        <tr>
          <td>Help text</td>
          <td>The instruction that is shown below the field</td>
          <td>(leave blank)</td>
        </tr>
        <tr>
          <td>Required field</td>
          <td>Whether the field is required or not</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Allowed link type</td>
          <td>The kind of links that can be entered</td>
          <td>External links only</td>
        </tr>
        <tr>
          <td>Allow link text</td>
          <td>Whether a link text can be entered</td>
          <td>Disabled</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-vendor-url.webp" alt="Field settings page for Vendor URL" width="100%" />

1. Click _Save settings_. The Vendor URL has been added to the content
    type. Continue creating the Main image field.
1. Click _Create a new field_. The _Add field_ page appears.
1. Choose the _File upload_ field type from the _Choose a field type_ options. Click _Continue_. The _Add field_ page appears with a form to configure the field label.
1. Some field types require the selection of a sub-type. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Label that is visible in administration pages</td>
          <td>Main image</td>
        </tr>
        <tr>
          <td>Choose an option below</td>
          <td>Field sub-type</td>
          <td>Image</td>
        </tr>
      </tbody>
    </table>
1. Click _Continue_. The page Main image settings for Vendor appears. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Label that is visible in the content form</td>
          <td>Main image</td>
        </tr>
        <tr>
          <td>Allowed number of values</td>
          <td>The number of values that can be entered</td>
          <td>Limited, 1</td>
        </tr>
        <tr>
          <td>Default image</td>
          <td>You can set a default image here. This will be used when you do not provide an image when creating a Vendor content item.</td>
          <td>(leave blank)</td>
          <td>Help text</td>
          <td>The instruction that is shown below the field</td>
          <td>(leave blank)</td>
        </tr>
        <tr>
          <td>Required field</td>
          <td>Whether the field is required or not</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Allowed file extensions</td>
          <td>The type of images that can be uploaded</td>
          <td>png, gif, jpg, jpeg</td>
        </tr>
        <tr>
          <td>File directory</td>
          <td>The directory where the files will be stored. By providing a file directory value, you ensure that all images uploaded via the Main image field will be located in the same directory.</td>
          <td>vendors</td>
        </tr>
        <tr>
          <td>Minimum image dimensions</td>
          <td>The minimum dimensions of the uploaded image</td>
          <td>600 x 600</td>
        </tr>
        <tr>
          <td>Maximum upload size</td>
          <td>The maximum file size of the uploaded image</td>
          <td>5 MB</td>
        </tr>
        <tr>
          <td>Enable Alt field</td>
          <td>Whether an alternative text can be entered</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Alt field required</td>
          <td>Whether an alternative text is required</td>
          <td>Checked</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-main-img.webp" alt="Field settings page for Main Image" width="100%" />

1. Click _Save settings_. Main image has been added to the content type.
    <img src="/images/structure-fields-result.webp" alt="Manage fields page" width="100%" />
1. Add a Main image field to the Recipe content type, using similar steps. Start
    by navigating to the Recipe content type's _Manage Fields_ page. Then use the _Re-use an existing field_ button to open the modal dialog and press the _Re-use_ button that corresponds with the Main image field in the table. Then skip to step 7 and follow the remaining steps.
    <img src="/images/structure-fields-main-img-reuse.webp" alt="Select a field to re-use" width="100%" />
1. Create two Vendor content items (see [content-create](./content-create.md)) called "Happy Farm"
    and "Sweet Honey". Make sure that they include images and URLs.

## Expand your understanding

* [structure-image-styles](./structure-image-styles.md)
* [structure-content-display](./structure-content-display.md)
* [structure-form-editing](./structure-form-editing.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CZpfR9WbVcQ" title="Adding Basic Fields to a Content Type" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[_Drupal.org_ community documentation page "Add a field to a content type"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/add-a-field-to-a-content-type)

*Attributions*

Written by [Sree Veturi](https://www.drupal.org/u/sree) and
[Boris Doesborg](https://www.drupal.org/u/batigolix), and [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at [Drupalize.Me](https://drupalize.me).
