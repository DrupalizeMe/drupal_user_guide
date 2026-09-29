---
title: "Installing a Module"
description: "How to install a core or contributed module, using the administrative interface or Drush."
id: "config-install"
translation_key: "config-install"
source_locale: "ca"
---
## Goal { #config-install }

Install a core module, or a contributed module whose files have already been
uploaded to the site, through the administrative interface or using Drush.
## Prerequisite knowledge

[understanding-modules](./understanding-modules.md)
## Site prerequisites

If you want to use Drush to install modules, Drush must be installed. See
[install-tools](./install-tools.md).
## Steps

You can use the administrative interface or Drush to install modules.
### Using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Extend_
    (_admin/modules_). The _Extend_ page appears showing all the available modules
    in your site.
1. Check the boxes for the module or modules you want to install. For example,
    check the box for the core Activity Tracker module.
    <img src="/images/config-install-check-modules.png" alt="Enabling the core Activity Tracker module" width="100%" />
1. Click _Install_. The checked modules will be installed.
### Using Drush

1. In the _Manage_ administrative menu, navigate to _Extend_
    (_admin/modules_). The _Extend_ page appears showing all the available modules
    in your site.
1. Find the machine name of the module you want to install, by expanding the
    information area for the module. For instance, the core Activity Tracker
    module's machine name is _tracker_.
1. Run the following Drush command to install the module:
    ```text
    drush en tracker
    ```
## Expand your understanding

If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Additional resources

[Drush](http://www.drush.org)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
