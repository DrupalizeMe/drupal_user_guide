---
title: "Adding a Content Type"
description: "How to add and configure a new content type."
id: "structure-content-type"
translation_key: "structure-content-type"
source_locale: "ca"
---
## Goal { #structure-content-type }

Add and configure a new content type Vendor.
## Prerequisite knowledge

[planning-data-types](./planning-data-types.md)
## Site prerequisites

You need to have a plan in place for your content structure. See
[planning-structure](./planning-structure.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Content types_
    (_admin/structure/types_). The _Content types_ page appears showing all the
    available types of content.
1. Click _Add content type_. The _Add content type_ page appears. Fill
    in the fields as shown below.
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
          <td>Name</td>
          <td>Name of the content type</td>
          <td>Vendor</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>Explain the use of the content type</td>
          <td>Information about a vendor</td>
        </tr>
      </tbody>
    </table>

    ![Adding a Content type](/images/structure-content-type-add.webp)

1. In the vertical tab _Submission form settings_, configure the form that is
    used for creating and editing content of this type. Fill in the fields as shown
    below.
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
          <td>Label of the Title field that is shown when editing or creating content of this type.</td>
          <td>Vendor name</td>
        </tr>
        <tr>
          <td>Preview before submitting</td>
          <td>Option to choose whether you should preview the content before submitting.</td>
          <td>Optional</td>
        </tr>
        <tr>
          <td>Explanation or submission guidelines</td>
          <td>Instructions for creating or editing content.</td>
          <td>(Leave blank)</td>
        </tr>
      </tbody>
    </table>

    ![Submission form settings](/images/structure-content-type-add-submission-form-settings.webp)

1. In the vertical tab _Publishing options_, decide on default options for new
    content of this type. Fill in the fields as shown below.
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
          <td>Published</td>
          <td>Make the content item published by default.</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Promoted to front page</td>
          <td>In a default website, this setting can be used to show content on the homepage.</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Sticky at the top of the list</td>
          <td>In a default website, this setting can be used to keep content on top of a list.</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Create new revision</td>
          <td>Create a new revision each time the vendor is being edited.</td>
          <td>Checked</td>
        </tr>
      </tbody>
    </table>

    Changing these settings does not affect the content items that have already been
    created.
    ![Publishing Options](/images/structure-content-type-add-Publishing-Options.webp)

1. In the vertical tab _Display settings_, decide if the author and
    publication date will be visible in the content item. Fill in the fields as
    shown below.
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
          <td>Display author and date information</td>
          <td>Display the author username and publication date on each vendor page.</td>
          <td>Unchecked</td>
        </tr>
      </tbody>
    </table>

    ![Display settings](/images/structure-content-type-add-Display-settings.webp)

1. In the vertical tab _Menu settings_, fill in the fields as shown below.
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
          <td>Available menus</td>
          <td>Menus that this type of content can be added to. Vendors do not need to appear in menus, so uncheck all menu options.</td>
          <td>Unchecked</td>
        </tr>
      </tbody>
    </table>

    ![Menu settings](/images/structure-content-type-add-Menu-settings.webp)

1. Click _Save and manage fields_ to save the content type. The
    _Manage fields_ page appears that allows you to add fields to the content
    type. See [structure-fields](./structure-fields.md)
    <img src="/images/structure-content-type-add-confirmation.webp" alt="Confirmation" width="100%" />
1. Follow the same steps to create a content type for recipes. Example values
    for the fields in the forms, where they are different from the steps above:
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Example value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Name</td>
          <td>Recipe</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>A recipe submitted by a vendor</td>
        </tr>
        <tr>
          <td>Submission form settings - Title</td>
          <td>Recipe name</td>
        </tr>
      </tbody>
    </table>
## Expand your understanding

* [structure-fields](./structure-fields.md)
* Install and configure the [contributed Pathauto module](https://www.drupal.org/project/pathauto)
so that content items get automatically generated URLs/path aliases. See [content-paths](./content-paths.md) for more on
URLs within your site, [extend-module-find](./extend-module-find.md) for instructions on finding
contributed modules, and [extend-module-install](./extend-module-install.md) for instructions on
downloading and installing contributed modules.

*Attributions*

Written and edited by [Sree Veturi](https://www.drupal.org/u/sree),
[Boris Doesborg](https://www.drupal.org/u/batigolix), and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
