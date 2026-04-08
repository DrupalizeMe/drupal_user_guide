---
title: "Setting Up a Taxonomy"
description: "How to create a taxonomy vocabulary and add it as a field to a content type."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "hy"
---
## Goal { #structure-taxonomy-setup }

Create an Ingredients vocabulary and add it to the Recipe content type as
a field that can contain an unlimited number of values and that allows adding
new terms to the vocabulary.
## Prerequisite knowledge

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Site prerequisites

The Recipe content type must exist. See [structure-content-type](./structure-content-type.md).
## Steps

1. In the _Manage_ administrative menu, navigate to _Structure_ > _Taxonomy_
    (_admin/structure/taxonomy_). You will see the _Tags_ vocabulary that was
    created with the core Standard installation profile. (Note that the name and
    description of this vocabulary are shown in English on this page; see
    [language-concept](./language-concept.md) for an explanation.)
    <img src="/images/structure-taxonomy-setup-taxonomy-page.png" alt="taxonomy list page" width="100%" />
1. Click _Add vocabulary_, and fill in the values below.
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
          <td>The name of the vocabulary</td>
          <td>Ingredients</td>
        </tr>
        <tr>
          <td>Description</td>
          <td>A brief note about the vocabulary</td>
          <td>(Leave blank)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.png" alt="taxonomy add Ingredients" width="100%" />

1. Click _Save_. You will be taken to the Ingredients page, which shows a list
    of all the terms in this vocabulary.
    <img src="/images/structure-taxonomy-setup-vocabulary-overview.png" alt="Ingredients taxonomy term listing" width="100%" />
1. Click _Add term_. Enter "Butter" in the _Name_ field. Click _Save_.
    <img src="/images/structure-taxonomy-setup-add-term.png" alt="Add term page" width="100%" />
1. You will receive a confirmation about the term you created. Add more
    terms. For example, "Eggs" and "Milk".
1. In the _Manage_ administrative menu, navigate to _Structure_ > _Content Types_
    (_admin/structure/types_). Click _Manage fields_ for your Recipe content type.
1. Click _Add field_, and enter values from the table below. Click _Save and
    continue_.
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
          <td>Add a new field</td>
          <td>Select the field type</td>
          <td>Reference > Taxonomy term</td>
        </tr>
        <tr>
          <td>Label</td>
          <td>The title to give the field</td>
          <td>Ingredients</td>
        </tr>
      </tbody>
    </table>

    ![Add Ingredients field to Content type Recipe](/images/structure-taxonomy-setup-add-field.png)

1. On the following configuration screen, enter the values from the table below.
    Click _Save field settings_.
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
          <td>Type of item to reference</td>
          <td>The type of entity that is referenced by the field</td>
          <td>Taxonomy term</td>
        </tr>
        <tr>
          <td>Allowed number of values</td>
          <td>The number of values a user can enter</td>
          <td>Unlimited</td>
        </tr>
      </tbody>
    </table>

    ![Field storage settings for Ingredients field](/images/structure-taxonomy-setup-field-settings.png)

1. On the following configuration screen, enter the values from the table below. Click _Save settings_.
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
          <td>Help text</td>
          <td>Help shown to users creating content</td>
          <td>Enter ingredients that site visitors might want to search for</td>
        </tr>
        <tr>
          <td>Reference type > Reference method</td>
          <td>Select the method used to choose allowed values</td>
          <td>Default</td>
        </tr>
        <tr>
          <td>Reference type > Vocabulary</td>
          <td>Select the vocabulary to choose allowed values from</td>
          <td>Ingredients</td>
        </tr>
        <tr>
          <td>Reference type > Create referenced entities if they don't already exist</td>
          <td>Whether new ingredient terms can be created from the content editing form</td>
          <td>Checked</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.png" alt="reference type field settings" width="100%" />

1. Click _Save settings_. You will be taken back to the _Manage Fields_ page. A
    message will be displayed saying that the configuration for Ingredients is
    complete.
    <img src="/images/structure-taxonomy-setup-finished.png" alt="Manage fields page for Recipe content type" width="100%" />

## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Setting up a Taxonomy" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
