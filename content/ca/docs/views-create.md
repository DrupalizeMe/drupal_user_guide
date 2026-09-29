---
title: "Creating a Content List View"
description: "How to create a content list view."
id: "views-create"
translation_key: "views-create"
source_locale: "ca"
---
## Goal { #views-create }

Create a page listing vendors that will be automatically updated whenever a
vendor is added, deleted, or updated on the site.
## Prerequisite knowledge

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
## Site prerequisites

* The core Views and Views UI modules must be installed. These are installed for
you when you install with the core Standard installation profile.
* The Vendor content type must exist, with URL and Main image fields. Your
site must have a couple of Vendor content items. See [structure-content-type](./structure-content-type.md),
[structure-fields](./structure-fields.md), and [content-create](./content-create.md).
* The _Medium (220x220)_ image style must be defined. This is created on your
site when you install the core Image module (installed with the core Standard
installation profile) but can be recreated if deleted. See
[structure-image-style-create](./structure-image-style-create.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Views_ > _Add
    view_ (_admin/structure/views/add_). The _Add view_ wizard appears.
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
          <td>View name</td>
          <td>Name of the view that will be visible in the administration pages</td>
          <td>Vendors</td>
        </tr>
        <tr>
          <td>Show</td>
          <td>Type of information listed in the view</td>
          <td>Content</td>
        </tr>
        <tr>
          <td>Of Type</td>
          <td>Specify content type</td>
          <td>Vendor</td>
        </tr>
        <tr>
          <td>Sorted by</td>
          <td>List order</td>
          <td>Title</td>
        </tr>
        <tr>
          <td>Create a page</td>
          <td>Create a page that displays the view</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Page title</td>
          <td>Title show above the view</td>
          <td>Vendors</td>
        </tr>
        <tr>
          <td>Path</td>
          <td>Address of the page</td>
          <td>vendors</td>
        </tr>
        <tr>
          <td>Display format</td>
          <td>Type of list</td>
          <td>Table</td>
        </tr>
        <tr>
          <td>Items to display</td>
          <td>Number of items visible on the page</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Use a pager</td>
          <td>Split up the list in several pages if there are more items</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Create a menu link</td>
          <td>Add the view page to the menu</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Menu</td>
          <td>Menu in which to add the link</td>
          <td>Main navigation</td>
        </tr>
        <tr>
          <td>Link text</td>
          <td>Label of the link in the menu</td>
          <td>Vendors</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/views-create-wizard.png" alt="Add new view wizard" width="100%" />

1. Click _Save and edit_. The view configuration page appears.
1. Click _Add_ from the dropdown button in the _Fields_ section. The _Add
    fields_ pop-up appears.
1. Enter the word "image" in the search field.
1. Check Main image in the table.
1. Click _Apply_. The _Configure field: Content: Main Image_
    pop-up appears.
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
          <td>Create a label</td>
          <td>Add a label before the field value</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Image style</td>
          <td>The format of the image</td>
          <td>Medium (220x220)</td>
        </tr>
        <tr>
          <td>Link image to</td>
          <td>Add a link to the content item</td>
          <td>Content</td>
        </tr>
      </tbody>
    </table>
1. Click _Apply_. The view configuration page appears.
1. Click _Add_ from the dropdown button in the _Fields_ section. The _Add
    fields_ pop-up appears.
1. Enter the word "body" in the search field.
1. Select _Body_ in the table.
1. Click _Apply_. The _Configure field: Content: Body_ pop-up
    appears.
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
          <td>Create a label</td>
          <td>Add a label before the field value</td>
          <td>Unchecked</td>
        </tr>
        <tr>
          <td>Formatter</td>
          <td>The presentation of the field value</td>
          <td>Summary or trimmed</td>
        </tr>
        <tr>
          <td>Trimmed limit:</td>
          <td>The number of maximum characters shown</td>
          <td>120</td>
        </tr>
      </tbody>
    </table>
1. Click _Apply_. The view configuration page appears.
1. Click _Content: Title (Title)_ in the _Fields_ list. The
    _Configure field: Content: Title_ pop-up appears.
1. Uncheck _Create a label_. This will remove the label that was created by the
    wizard.
1. Click _Apply_. The view configuration page appears.
1. Click _Rearrange_ from the dropdown button in the _Fields_ section. The
    _Rearrange fields_ pop-up appears.
1. Drag the fields into the right order: Image, Title. Body.
1. Click _Apply_. The view configuration page appears.
1. Optionally, click _Update preview_ for a preview.
1. Click _Save_.
    ![Vendors view configuration page](/images/views-create-view.png)
1. Navigate to the homepage and click Vendors from the main navigation to see
    the result.
    ![Vendors view output](/images/views-create-view-output.png)
## Expand your understanding

The link to the view in the main navigation will probably not be in the right
place. Change the order of the menu items in the main navigation. See
[menu-reorder](./menu-reorder.md).

*Attributions*

Written/edited by [Boris Doesborg](https://www.drupal.org/u/batigolix)
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
