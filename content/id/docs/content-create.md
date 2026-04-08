---
title: "Creating a Content Item"
description: "How to create a content item for use as the home page."
id: "content-create"
translation_key: "content-create"
source_locale: "id"
---
## Goal { #content-create }

Create and publish a content item that will be used as the home page of the
site.
## Prerequisite knowledge

[content-paths](./content-paths.md)
## Site prerequisites

The _Basic page_ content type must exist. This is created on your site when you
install with the core Standard installation profile.
## Steps

1. In the _Manage_ administrative menu, navigate to _Content_ > _Add content_ >
    _Basic page_ (_node/add/page_). The _Create Basic page_ form appears.
1. Click _Edit summary_.
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
          <td>Title</td>
          <td>Title of the page. Will also be used as a meta tag in the source code, URL alias, and as label of the content item in administration screens</td>
          <td>Home</td>
          <td>Summary</td>
          <td>Summary of the value of the body field. Can be used as teaser</td>
        </tr>
        <tr>
          <td>Body</td>
          <td>Full content of the page</td>
          <td>Welcome to City Market - your neighborhood</td>
        </tr>
        <tr>
          <td>URL path settings > URL alias</td>
          <td>Alternate relative path for the content</td>
          <td>/home</td>
        </tr>
      </tbody>
    </table>

    By clicking the _Source_ button in the rich text editor toolbar, you can see the
    HTML source code of the text that you are editing.
    <img src="/images/content-create-create-basic-page.png" alt="Create a basic page" width="100%" />

1. Click _Preview_ to ensure everything looks like expected.
1. Click _Back to content editing_.
1. Click _Save and publish_. The content is saved and can be found on the
    _Content_ page.
1. Follow the same steps to create an About page, with title "About", and a body
    telling about the history of the farmer's market.
## Expand your understanding

* [menu-home](./menu-home.md)
* [menu-link-from-content](./menu-link-from-content.md)
* [language-content-translate](./language-content-translate.md)
## Related concepts

* [language-concept](./language-concept.md)
* [content-paths](./content-paths.md)
* [content-edit](./content-edit.md)
## Additional resources

[_Drupal.org_ community documentation page "About nodes"](https://www.drupal.org/docs/8/core/modules/node/about-nodes)

*Attributions*

Written by [Agnes Kiss](https://www.drupal.org/u/pixiekiss) and
[Boris Doesborg](https://www.drupal.org/u/batigolix).
