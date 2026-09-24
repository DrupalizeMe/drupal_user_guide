---
title: "Downloading and Installing a Module from _Drupal.org_"
description: "How to download and install a module from Drupal.org (using the user interface) or by using Drush."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "ja"
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

* If you want to install modules via the website, the core Update Manager module
must be installed. See [config-install](./config-install.md) for instructions on installing
modules.
* If you want to use Drush, Drush must be installed. See [install-tools](./install-tools.md).
## Steps

You can use the administrative interface or Drush to install a contributed
module. If you are installing a custom module rather than a contributed module,
if you see a message saying _Installing modules and themes requires FTP access
to your server_, or if the steps below do not work to download and unpack the
module files, follow the steps in [extend-manual-install](./extend-manual-install.md). If you are
installing a contributed module with external dependencies that are managed by
Composer, follow the steps for downloading in [install-composer](./install-composer.md). In either of
these cases, then continue here with step 7 in the instructions for the
administrative interface below.
### Using the administrative interface

1. On the _Admin toolbar_ project page on drupal.org
    (_https://www.drupal.org/project/admin_toolbar_), scroll to the _Downloads_
    section at the bottom of the page.
1. Copy the address of the _tar.gz_ link. Depending on your device and browser,
    you might do this by right clicking and selecting _Copy link address_.
    ![Finding a module URL](/images/extend-module-install-download.webp)
1. In the _Manage_ administrative menu, navigate to _Extend_
    (_admin/modules_). The _Extend_ page appears.
1. Click _Install new module_. The _Install new module_ page appears.
    ![Installing a module from a URL](/images/extend-module-install-admin-toolbar-do.webp)
1. In the field _Install from a URL_, paste the copied download link. This value
    could look like this:
    _https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.14.tar.gz_
1. Click _Install_ to upload and unpack the new module on the server. The files
    are being downloaded to the _modules_ directory.
1. Click _Enable newly added modules_ to return to the _Extend_ page. If you
    used the manual uploading procedure, start with this step, and reach the
    _Extend_ page by using the _Manage_ administrative menu and navigating to
    _Extend_ (_admin/modules_).
1. Locate and check _Admin toolbar_.
1. Click _Install_ to turn on the new module.
### Using Drush

1. Find the project name for the module you want to install, which is the last
    segment of the module's project page URL. For example, if the project URL is
    _https://www.drupal.org/project/admin_toolbar_, the project name is
    "admin_toolbar".
1. Run the following Drush commands, giving the project name (for example,
    `admin_toolbar`) as a parameter:
    ```text
    drush dl admin_toolbar
    drush en admin_toolbar
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
## Additional resources

* [_Drupal.org_ community documentation page "Contributed modules"](https://www.drupal.org/node/340271)
* ["Download and Extend" page on _Drupal.org_](https://www.drupal.org/download)
* [Admin Toolbar module on _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
