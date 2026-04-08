---
title: "Planning your Content Structure"
description: "How to plan a content structure that assigns content entity types to specific content on the website."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "zh-hans"
---
## Goal { #planning-structure }

Make a plan for the content structure of the site (which type and subtype of
entity to use for which content), and which pages will contain listings of
content.
## Prerequisite knowledge

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Steps

1. Brainstorm about what content your site needs to contain, which could include
    content that visitors would be looking for, as well as content that you want
    to show to visitors. The result could be the description in
    [preface-scenario](./preface-scenario.md).
1. For each identified piece of content, decide which content entity type would
    be the best fit. In doing this, you'll need to consider where and how
    the content will be used and edited on the site. For example, in the farmers
    market site scenario, you might want to display the hours and location of the
    farmers market on the sidebar of every page. For that content, a single custom
    block makes sense. As another example, you might decide that pages displaying
    information about each vendor should be content items managed by the core Node
    module, because you want vendors to be able to edit their own listings.
    The core Node module permission system lets you do this easily.
    These decisions do not necessarily always have only one right answer; for
    instance, you could decide that vendor pages should be user profiles instead of
    content items, but if you did that the content would be tied to a specific user
    account, and it would not be as easy to later change the ownership of a vendor
    page to a different user account.
1. Within each content entity type you identified, decide what division into
    entity sub-types would make sense. For example, in the farmers market site
    example, you would probably decide that under the Content item entity type,
    there should be one content type for basic pages (Home and
    About), one for vendor pages, and one for recipe pages.
1. For each entity sub-type you decided on, decide what fields are needed. For
    instance, the Vendor content type might need fields for the vendor name, web
    page URL, image, and description.
1. Decide on what entity listings are needed, which could be entire pages or
    smaller areas on the page. For each listing, you'll need to determine what
    entity items should be listed. Then you'll need to decide in what order and with
    what filtering options they should be displayed; for example, you might want to
    give the site visitor the option to search by keyword, to filter the list down
    to a subset, or to sort the list. You'll also need to decide what information
    from the entity items should be shown, which might result in adding to the list
    of fields you determined in the previous step. The farmers market site, for
    example, needs to have a Recipes listing page that lists content items of type
    Recipe, with the ability to filter by ingredients, so that means that the Recipe
    content type needs an Ingredients field.
1. For each identified field on each entity subtype, identify what type of data
    it should contain (such as plain text, formatted text, a date, an image file,
    etc.), and how many values should be allowed. Most fields are
    single-valued, but for example, a Recipe should allow for multiple values in
    its Ingredients field.
1. Consider which fields would be best as references to taxonomy term entities:
    fields whose values should be chosen from a list of allowed values. Allowed
    values that are expected to change and grow over time, are good candidates. An
    example is the Ingredients field for the Recipe content type.
1. Consider which fields should reference other content entities. An example is
    that since vendors will be submitting recipes, a field will be needed on
    the Recipe content type that references the Vendor content item for the vendor
    who submitted the recipe.

    Here's an example of the resulting content structure for the farmers market
    scenario example site:

    <table>
      <thead>
        <tr>
          <th>Entity type</th>
          <th>Entity sub-type</th>
          <th>Examples</th>
          <th>Fields</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Content item</td>
          <td>Basic page</td>
          <td>Home page, about page</td>
          <td>Title, page body</td>
        </tr>
        <tr>
          <td>Content item</td>
          <td>Vendor</td>
          <td>A page for each vendor at the market</td>
          <td></td>
        </tr>
        <tr>
          <td>Content item</td>
          <td>Recipe</td>
          <td>A page for each submitted recipe</td>
          <td></td>
        </tr>
        <tr>
          <td>Custom block</td>
          <td>(generic)</td>
          <td>Copyright notice for footer, Hours and location for sidebar</td>
          <td>No special fields</td>
          <td></td>
        </tr>
        <tr>
          <td>Taxonomy term</td>
          <td>Ingredients</td>
          <td>Carrots, tomatoes, and other recipe ingredients</td>
          <td></td>
        </tr>
        <tr>
          <td>Contact form</td>
          <td>(generic)</td>
          <td>Generic contact form</td>
          <td>Name, email, subject, message</td>
        </tr>
        <tr>
          <td>User profile</td>
          <td>(none)</td>
          <td>Will not be displayed on site</td>
          <td>No special fields</td>
        </tr>
      </tbody>
    </table>

    And here are the listings the site needs:

    <table>
      <thead>
        <tr>
          <th>Page or page area</th>
          <th>Entity type and sub-type</th>
          <th>Filter/sort/pagination</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vendors page</td>
          <td>Vendor content items</td>
          <td>All vendors, alphabetical, paged</td>
          <td></td>
        </tr>
        <tr>
          <td>Recipes page</td>
          <td>Recipe content items</td>
          <td>Filter by ingredients, alphabetical, paged</td>
          <td>Image, recipe name</td>
          <td></td>
        </tr>
        <tr>
          <td>Recent recipes sidebar</td>
          <td>Recipe content items</td>
          <td>List 5 most recent</td>
          <td></td>
        </tr>
      </tbody>
    </table>
## Expand your understanding

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Related concepts

[structure-taxonomy](./structure-taxonomy.md)

*Attributions*

Written and edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
and [Grant Dunham](https://www.drupal.org/u/gdunham).
