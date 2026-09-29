---
title: "Deploying New Site Features"
description: "How to copy a view created in a local development site to a production site."
id: "extend-deploy"
translation_key: "extend-deploy"
source_locale: "pt-br"
---
## Goal { #extend-deploy }

Copy a view that you have created in a local development site to the production
site.
## Prerequisite knowledge

* [install-dev-making](./install-dev-making.md)
* [extend-config-versions](./extend-config-versions.md)
* [install-dev-sites](./install-dev-sites.md)
## Site prerequisites

* The core Configuration Manager module must be installed in both the
development and production sites. See [config-install](./config-install.md) for
instructions on installing core modules.
* The Vendor content type must exist in both the development and production
sites, with the same fields. See [structure-content-type](./structure-content-type.md).
* The Vendors view must exist in the development site but not the production
site. See [views-create](./views-create.md).
## Steps

1. Open the local development site.
1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Configuration synchronization_ > _Export_ > _Single item_
    (_admin/config/development/configuration/single/export_).
    The _Single export_ page appears.
1. Select _View_ from the _Configuration type_ list.
1. Select Vendors from the _Configuration name_ list. The configuration
    appears in the textarea.
1. Copy the configuration from the textarea.
    ![Export a single item](/images/extend-deploy-export-single.png)
1. Open the production site.
1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Configuration synchronization_ > _Import_ > _Single item_
    (_admin/config/development/configuration_). The _Import_ page appears.
1. Select _View_ from the _Configuration type_ list.
1. Paste the configuration in the textarea.
1. Click _Import_. The confirmation page appears.
1. Click _Confirm_.
1. Verify that the view was imported by navigating in the _Manage_
    administrative menu to _Structure_ > _Views_.
## Expand your understanding

The steps in this topic show how to export and import a single configuration
item. However, often if you develop functionality on a development website
and want to transfer it to your production site, you will need to transfer
multiple configuration items. For instance, if you developed a new content
type with fields, you would need to transfer several configuration items for
each field, one for the content type itself, and possibly multiple view mode
and form mode items, and they would have to be transferred in the right order.
Getting this right can be both tedious and difficult.

As an alternative, you can export and import the complete configuration of the
site. For this, you would need a local development site that is a clone
of the production site (see [install-dev-making](./install-dev-making.md)), and then you can follow the
steps in [extend-config-versions](./extend-config-versions.md) to synchronize configuration between
development and production sites.

Another alternative is to use the
[contributed Features module](https://www.drupal.org/project/features), which
allows exporting and importing bundled functionality (for example, all the
configuration for a photo gallery).

Finally, if you do not see the effect of these changes in your site, you might
need to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Related concepts

* [install-dev-sites](./install-dev-sites.md)
* [planning-workflow](./planning-workflow.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hysqVDIfLTA" title="Deploying New Site Features" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
