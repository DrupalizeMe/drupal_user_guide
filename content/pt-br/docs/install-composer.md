---
title: "Using Composer to Download and Update Files"
description: "How to use the Composer tool to manage the files in the core software and add-on modules and themes."
id: "install-composer"
translation_key: "install-composer"
source_locale: "pt-br"
---
## Goal { #install-composer }

Use Composer to download or update files and dependencies in the core software,
or in add-on modules and themes. Skip this topic if you are not using Composer.
## Prerequisite knowledge

[install-tools](./install-tools.md)
## Site prerequisites

If you want to use Composer, it must be installed either on a local development
server or your live site. See [install-tools](./install-tools.md).
## Steps

If you are unable to install the Composer tool on your live server, you can
follow the steps in any of the sections below on your local server, and then
transfer any updated or added files to your live server. The recommended
procedure is to make an archive or zip file of the new and changed directories,
transfer the archive to your live server, delete the directories that have
changed, and extract the archive. Make sure to check for updates and additions
to the following files, in the root of your installation:

* _vendor_ directory
* _autoload.php_
* _composer.json_
* _composer.lock_
### Using Composer to download the core software

Follow these steps if you have not yet downloaded or installed the core
software, and you want to use Composer to download both the core software and
its external dependencies:

1. At the command line, change to one level above the directory where you want
    the software to reside.
1. Enter this command, where _mydir_ is the directory you want to create:
    ```text
    composer create-project drupal-composer/drupal-project:8.x-dev mydir --no-interaction
    ```
1. The latest release of the core software will be downloaded to the _mydir/web_
    sub-directory; you'll also get some extra tools such as Drush and Drupal Console
    in the _mydir/vendor_ directory.
### Converting a previously-downloaded site to use Composer

If you previously downloaded the core software without using Composer, you may
find later that you want or need to use Composer to manage and update
dependencies. To convert your existing site to using Composer, enter the
following commands at the root of your site:

```text
composer global require grasmash/composerize-drupal
composer composerize-drupal --composer-root=. --drupal-root=.
```

Note that this will also make modules, themes, and profiles that you previously
downloaded without using Composer available to Composer, if they were placed in
the _modules/contrib_, _themes/contrib_, and _profiles/contrib_ directories. If
you placed them in another location, you might consider deleting
previously-downloaded modules and themes, and then following the instructions
below to re-download them using Composer.
### Using Composer to download a module or theme

Follow these steps if you are already using Composer to manage the core
software, and you want to use Composer to add a contributed module or theme with
its dependencies.

1. Each time you want to add a contributed module or theme, determine the
    project's short name. This is the last part of the URL of the project page; for
    example, the Geofield module, at
    https://www.drupal.org/project/geofield, has short name +geofield+.
1. To download the contributed module or theme, along with its external
    dependencies, enter the following command at the root of your site (substituting
    the short name of the module or theme for +geofield+):
    ```text
    composer require drupal/geofield
    ```
### Using Composer to update previously-downloaded files

Follow these steps to update the files for the core software or a contributed
module or theme, after having already started to manage dependencies with
Composer:

1. Determine the short name of the project you want to update. For the core
    software, it is _core_. For contributed modules and themes, it is the last
    part of the URL of the project page; for example, the Geofield module, at
    https://www.drupal.org/project/geofield, has short name +geofield+.
1. If you want to update to the latest stable release, use the following
    command, substituting the short name of the project to be updated for
    +geofield+:
    ```text
    composer update drupal/geofield --with-dependencies
    ```
1. If you need a specific version, determine how to enter the version number you
    want to update to. For example, for version 8.x-1.7 of a contributed module, you
    would enter just the 1.7, and for the core software version 8.3.1, you would
    enter 8.3.1. Then enter the following command at the root of your site
    (substituting the short name of the project for +geofield+ and the correct
    version number):
    ```text
    composer require drupal/geofield:1.7
    ```
## Expand your understanding

You can learn more about Composer commands by using Composer's built-in help
system. For example, to learn more about the `create-project` command, enter
`composer help create-project` in your command window.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Using Composer and Git to Download Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

* ["Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* ["Update core via Composer"](https://www.drupal.org/docs/8/update/update-core-via-composer)
* [Composerize Drupal project for converting a previously-downloaded site to using Composer](https://github.com/grasmash/composerize-drupal)

*Attributions*

Adapted by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), and
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me) from
["Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
