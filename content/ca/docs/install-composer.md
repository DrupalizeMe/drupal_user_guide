---
title: "Using Composer and Git to Download Files"
description: "How to use the Composer and Git tools to manage the files in the core software and add-on modules and themes."
id: "install-composer"
translation_key: "install-composer"
source_locale: "ca"
---
## Goal { #install-composer }

Use Composer and/or Git to download files and dependencies in the core software,
or in add-on modules and themes.
## Prerequisite knowledge

* [install-tools](./install-tools.md)
* [install-dev-sites](./install-dev-sites.md)
## Site prerequisites

If you want to use Git or Composer, they must be installed either on a local
development server or your live site. See [install-tools](./install-tools.md).
## Steps

If you are unable to install the Git or Composer tools on your live server,
after following the steps in any of the sections below on your local server, you
will need to transfer any updated or added files to your live server. The
recommended procedure is to make an archive or zip file of the new and changed
files, transfer the archive to your live server, and extract it there. If you
are using Composer, make sure to check for updates and additions to the
following files, in the root of your installation:

* _vendor_ directory
* _autoload.php_
* _composer.json_
* _composer.lock_
### Using Git to download a project

Follow these steps if you want to download the development version of the core
software, or of a contributed module or theme, from the project's Git version
control repository:

1. In a command-line window, change to one level above the directory where you
    want the files to reside. For the core software, this would be your web
    root. For an add-on module, this would be the _modules_ directory, or a
    sub-directory like _contrib_ under the modules directory.
1. Locate the page for the project that you want to download on _Drupal.org_; for
    example, https://www.drupal.org/project/drupal for the core software, or
    https://www.drupal.org/project/admin_toolbar for the contributed Admin Toolbar
    module.
1. Click the _Version control_ link near the top of the page, which opens up a
    page giving Git commands for this project.
1. Copy the +git clone+ command under _Setting up repository for the first time_,
    and paste it into your command line. For example, it might be:
    ```text
    git clone --branch 8.2.x https://git.drupal.org/project/drupal.git
    ```
1. This will create a directory named with the short name of the project
    (_drupal_ in this example), and download the required files into that
    directory. If necessary, rename the directory.
1. If you downloaded the _drupal_ project (the core software), follow the
    instructions below to download its external dependencies.
1. Later on, you can change to the created directory and run the command +git
    pull+ to update the files to the latest version from the Git repository for the
    project.
### Using Composer to download external core dependencies

Follow these steps if you downloaded the core software files using Git, which
does not include the external dependencies:

1. Change to the core software's root directory.
1. Run the command +composer install+ at the command line. The external
    dependencies will be downloaded.
### Using Composer to download the core software

Follow these steps if you have not yet downloaded or installed the core
software, and you want to use Composer to download both the core software and
its external dependencies:

1. At the command line, change to one level above the directory where you want
    the software to reside.
1. Enter this command, where +my_site_name+ is the directory you want to create:
    ```text
    composer create-project drupal/drupal my_site_name
    ```
### Using Composer to download a module or theme

Follow these steps if you have already downloaded the core software, and you
want to use Composer to add a contributed module or theme (usually because it
has external dependencies that need to be downloaded with Composer):

1. If you have not already done so, tell Composer about the download location for
    contributed modules and themes, by entering this command from the root of your
    site installation:
    ```text
    composer config repositories.drupal composer https://packages.drupal.org/8
    ```
1. If you have not already done so, you can optionally override the default
    location where Composer will put downloaded modules and themes. For example,
    typically you would want contributed modules to go in a _contrib_ subdirectory
    of the top-level _modules_ directory, instead of the default location of
    _modules_. To make this change, edit the _composer.json_ file at the root level
    in your site installation. Find the line that says +"extra": {+, and add these
    lines following that line:
    ```text
    "installer-paths": {
    "modules/contrib/{$name}": ["type:drupal-module"],
    "modules/custom/{$name}": ["type:drupal-custom-module"],
    "profiles/contrib/{$name}": ["type:drupal-profile"],
    "themes/contrib/{$name}": ["type:drupal-theme"],
    "themes/custom/{$name}": ["type:drupal-custom-theme"],
    "libraries/{$name}": ["type:drupal-library"],
    "drush/{$name}": ["type:drupal-drush"]
    },
    ```
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
### Using Composer to update a project's files

Follow these steps to update the files for the core software or a contributed
module or theme, after having already started to manage dependencies with
Composer:

1. Determine the short name of the project you want to update. For the core
    software, it is _drupal_. For contributed modules and themes, it is the last
    part of the URL of the project page; for example, the Geofield module, at
    https://www.drupal.org/project/geofield, has short name +geofield+.
1. Determine how to enter the version number you want to update to. For
    example, for version 8.x-1.7 of a contributed module, you would enter just the
    1.7, and for the core software version 8.3.1, you would enter 3.1.
1. Enter the following command at the root of your site (substituting
    the short name of the module or theme for +geofield+ and the correct version
    number):
    ```text
    composer require drupal/geofield:1.7
    ```
## Additional resources

[_Drupal.org_ community documentation page "Using Composer with Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)

*Attributions*

Adapted by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) from
["Using Composer with Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
