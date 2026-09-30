---
title: "Uninstalling Unused Modules"
description: "How to uninstall modules to reduce overhead."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "ja"
---
## Goal { #config-uninstall }

Uninstall the core Search and History modules, as well as the core Activity
Tracker module if you installed it in [config-install](./config-install.md), to reduce overhead.
## Prerequisite knowledge

[understanding-modules](./understanding-modules.md)
## Site prerequisites

* You must have at least one unused module on your site that you want to
uninstall, such as the core Search module.
* If you want to use Drush to uninstall modules, Drush must be installed. See
[install-tools](./install-tools.md).
## Steps

You can use the administrative interface or Drush to uninstall modules.
### Using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Extend_ > _Uninstall_
    (_admin/modules/uninstall_) where you will find the list of modules that are
    ready to be uninstalled.
1. Check the boxes for the modules you are uninstalling (_Search_, _History_, and
    _Activity Tracker_). Click _Uninstall_ at the bottom of the page.
    <img src="/images/config-uninstall_check-modules.png" alt="Uninstalling module" width="100%" />
