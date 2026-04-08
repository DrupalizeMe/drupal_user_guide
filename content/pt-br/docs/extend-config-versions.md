---
title: "Synchronizing Configuration Versions"
description: "How to synchronize the configuration between a development and live site using the core Configuration Manager module."
id: "extend-config-versions"
translation_key: "extend-config-versions"
source_locale: "pt-br"
---
## Goal { #extend-config-versions }

Synchronize the configuration between a development and live site.
## Prerequisite knowledge

* [understanding-data](./understanding-data.md)
* [install-prepare](./install-prepare.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-dev-making](./install-dev-making.md)
## Site prerequisites

* You must have a development copy of your production site. See
[install-dev-making](./install-dev-making.md).
* The core Configuration Manager module must be installed on both the
development and production sites. See [config-install](./config-install.md) for instructions on how
to install core modules.
* You must have changed configuration on either the production or development
site (the _source site_), and want to synchronize the changes to the other site
(the _destination site_). As an example, you can develop a new content type,
fields, and views on your development site, and when it is all working
correctly, deploy the changes to the live site.
* All configuration that should not be synchronized between the source and
destination sites must be stored in configuration overrides in the
_settings.php_ file rather than in the database. See [install-dev-making](./install-dev-making.md).
## Steps

1. In the source site, in the _Manage_ administrative menu, navigate to
    _Configuration_ > _Development_ > _Configuration synchronization_ > _Export_
    (_admin/config/development/configuration/full/export_).
1. Click _Export_. Your site will generate an archive of the full site
    configuration. Save the file on your local computer.
1. In the destination site, in the _Manage_ administrative menu, navigate to
    _Configuration_ > _Development_ > _Configuration synchronization_ > _Import_
    (_admin/config/development/configuration/full/import_).
1. Browse to find the downloaded configuration archive, and click _Upload_. Your
    configuration archive will be uploaded to the destination site, and you will be
    redirected to the configuration _Synchronize_ page
    (_admin/config/development/configuration_) with a message saying your files were
    uploaded.
1. Verify that the differences shown on the page are what you expect. You may see
    configuration items that have been added, deleted, or changed; for changed
    items, you can click _View differences_ to see what the changes are.
1. When you are satisfied, click _Import all_ to import the configuration
    changes.
## Expand your understanding

* If the changes you have made involve only one configuration item (such as one
view), you can use the single configuration export/import feature to deploy
the change between sites. See [extend-deploy](./extend-deploy.md).
* After the step where you export the full configuration from the source site,
you might also want to unpack the archive and commit it to a version control
system, such as Git, to track changes in your site configuration. See
[extend-git](./extend-git.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/dLUGQk8GKa0" title="Synchronizing Configuration Versions" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
