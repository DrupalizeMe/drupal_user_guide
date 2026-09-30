---
title: "Finding Modules"
description: "How to search and evaluate modules on Drupal.org."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "ca"
---
## Goal { #extend-module-find }

Find and evaluate modules on _Drupal.org_.
## Prerequisite knowledge

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Steps

1. Go to [_Drupal.org_](https://www.drupal.org), and navigate to _Download &
    Extend_ > _Modules_ (https://www.drupal.org/project/project_module).
1. Filter your search using the categories on the module search page.
    Fill in the fields as shown below.
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
          <td>Maintenance status</td>
          <td>How actively should the module be maintained?</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>What kind of development should the module undergo?</td>
          <td>Any</td>
        </tr>
        <tr>
          <td>Module categories</td>
          <td>The module's topic area.</td>
          <td>Administration</td>
        </tr>
        <tr>
          <td>Core compatibility</td>
          <td>The version of the core software the module is compatible with.</td>
          <td>8.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Project status: _Sandbox projects_ are experimental projects. _Full projects_ have already gone through an approval process, but they can still be in development.</td>
          <td>Full projects</td>
        </tr>
        <tr>
          <td>Search Modules</td>
          <td>Search for _Admin Toolbar_, a module that will be covered in detail later. Alternatively, you can also leave the field blank if you are not sure which module to search for.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Order your search results by criteria like _Most installed_ (popular modules that many sites use) or _Last release_ (date of latest version released).</td>
          <td>Most installed</td>
        </tr>
      </tbody>
    </table>

    ![Filters on the module search page on _Drupal.org_](/images/extend-module-find_module_finder.png)

1. Click _Search_. Search results will appear.
    ![Module search results page on _Drupal.org_](/images/extend-module-find_search_results.png)
1. To further evaluate a module, click its title in the list of search results
    to visit its project page.

    Some aspects to pay attention to when evaluating modules:

    * Project description: The description of the module on its project page should
    be clear and useful. You should get an idea of its features and requirements.
    * Maintenance status: If a module is _Actively maintained_, you can be sure that
    there will be security updates, bug fixes and feature improvements provided on
    a regular basis. However, if the module is unmaintained or abandoned, you
    shouldn't use it.
    * Development status: _Under active development_ means you can expect new
    features to be added to the project, but some aspects (for example, API) may
    still change. _Maintenance fixes only_ means that the project is considered
    feature complete.
    * Reported installs, downloads: You can see how many people have downloaded and
    how many sites use the module. If it's only used by a few sites, it might be a
    unique solution that not many people need, or it might be a warning sign that
    you shouldn't use it either.
    * Maintainers: When was the last commit (the last time someone updated something
    on the module) or last release (new version)? If the project has few open
    issues, a long time since commits/releases might be appropriate, but if it has
    a lot of open issues and there are no commits/releases, that would be a clue
    that it might be abandoned.
    * Issues: See if there are any open issues, potential problems with the
    module. Check the _Statistics_ to see how regularly issues are responded to.
    * Resources: Check if the module has documentation or a README file, that can
    help you install, configure, explore, and test it.
    ![Information on the project page to look for when evaluating a module](/images/extend-module-find_project_info.png)
## Expand your understanding

[extend-module-install](./extend-module-install.md)

*Attributions*

Written by [Diána Lakatos](https://www.drupal.org/u/dianalakatos) at
[Pronovix](https://pronovix.com//).
