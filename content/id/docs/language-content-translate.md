---
title: "Translating Content"
description: "How to translate a page into another language."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "id"
---
## Goal { #language-content-translate }

Translate the home page to Spanish.
## Prerequisite knowledge

[language-concept](./language-concept.md)
## Site prerequisites

* The Home content item must exist. See [content-create](./content-create.md).
* The core Content Translation module must be installed, and your site must
have at least two languages. See [language-add](./language-add.md).
* The _Basic page_ content type must be configured to be translatable. See
[language-content-config](./language-content-config.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Content_ (_admin/content_).
1. Locate the home page. You can search for it by entering "Home" in the title
    field.
1. Select _Translate_ from the dropdown button in the row of the Home content
    item. The page _Translations of Home_ appears.
1. Click _Add_ in the row _Spanish_.
    <img src="/images/language-content-translate-add.webp" alt="Adding a content translation" width="100%" />
1. Note that the user interface has switched to Spanish. To switch it back to
    English, remove the first instance of _es_ in the browser's URL. For
    example, if your URL looks like _example.com/es/node/5/translations/add/en/es_,
    remove the _es_ that comes immediately after _example.com_.
1. Fill in the fields as shown below. You will have to click and expand _URL path
    settings_ on the right to provide the value for _URL alias_.
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
          <td>Translated title of the page</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Body</td>
          <td>Translated body of the page</td>
          <td></td>
        </tr>
        <tr>
          <td>URL path settings > URL alias</td>
          <td>Translated address of the webpage</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Click _Save and keep published (this translation)_.
1. Go to your site's home page to view the newly translated page.
## Expand your understanding

* Follow the steps above to translate more content on your site.
* [language-config-translate](./language-config-translate.md)

*Attributions*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
