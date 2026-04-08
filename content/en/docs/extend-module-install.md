---
title: "Downloading and Installing a Module from _Drupal.org_"
description: "How to download and install a module from Drupal.org."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "en"
---
## Goal { #extend-module-install }

Download and install the
[contributed Admin Toolbar module](https://www.drupal.org/project/admin_toolbar),
which allows you to easily browse through the administration section of the
website.
## Prerequisite knowledge

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Site prerequisites

Composer must be installed to download modules. If you want to use Drush, Drush
must be installed. See [install-tools](./install-tools.md).
## Steps

To install a contributed module, first download the module with Composer. Then
install it using either the administrative interface or Drush. If you are
installing a custom module rather than a contributed module that is not
available via Composer, skip the steps for downloading the module, and refer to
[extend-manual-install](./extend-manual-install.md). Then return here and follow the steps for installing
the module using either the administrative interface or Drush.
### Download the contributed module with Composer

1. On the _Admin toolbar_ project page on drupal.org
    (_https://www.drupal.org/project/admin_toolbar_), scroll to the _Releases_
    section at the bottom of the page.
1. Copy the provided Composer command for the version of the module you want to
    install.
    ![Finding a module's composer install command](/images/extend-module-install-download.png)
1. Alternatively, type the following command (substituting
    the short name of the module and desired version for +admin_toolbar:^3.5+):
    ```text
    composer require 'drupal/admin_toolbar:^3.5'
    ```
1. At the command line, change to the root directory of your project. Paste the
    Composer command and execute it.
1. You should see a message about the module being successfully downloaded.

### Install the module using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Extend_
    (_admin/modules_). The _Extend_ page appears.
1. Locate the _Admin toolbar_ module and check it.
    ![Installing Admin Toolbar module](/images/extend-module-install-admin-toolbar-do.png)
1. Click _Install_ to turn on the new module.

### Install the module using Drush

1. Run the following Drush command, giving the project name (for example,
    `admin_toolbar`) as a parameter:
    ```text
    drush pm:enable admin_toolbar
    ```
1. Follow the instructions on the screen.

## Expand your understanding

* Verify that the
[contributed Admin Toolbar module](https://www.drupal.org/project/admin_toolbar)
is working by browsing through the menu in the administration section.
* Install and configure the
[contributed Pathauto module](https://www.drupal.org/project/pathauto)
so that content pages in your site get nice URLs by default. See
[content-paths](./content-paths.md) for more on URLs.
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vx9nWJE1Kbk" title="Downloading and Installing a Module from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

* [_Drupal.org_ community documentation page "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* ["Download and Extend" page on _Drupal.org_](https://www.drupal.org/download)
* [Admin Toolbar module on _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me), and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
