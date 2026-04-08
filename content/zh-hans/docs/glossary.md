---
title: "词汇表"
description: "词汇表"
id: "glossary"
translation_key: "glossary"
source_locale: "zh-hans"
---
[](){ #glossary }

## Ajax { #glossary-ajax }

A web technology used to exchange data with a server to dynamically update parts of a web page (for example, forms) without needing entire page reloads.

## Alias { #glossary-alias }

A user-friendly name to replace the internal [path](./glossary.md#glossary-path) that the system assigns to a URL on the site. For example, you might assign an alias of _/about_ to the About page on your site, to replace the internal path _/node/5_. This would give the page a URL of _http://example.com/about_ instead of _http://example.com/node/5_. See [content-paths](./content-paths.md) for more information.

## Anonymous { #glossary-anonymous }

A person ([user](./glossary.md#glossary-user)) interacting with the site who is not logged in. See [user-concept](./user-concept.md) for more information.

## Block { #glossary-block }

A chunk of [content](./glossary.md#glossary-content) (text, images, links, etc.) that can be displayed on a page of a site. Blocks are displayed in [regions](./glossary.md#glossary-region). See [block-concept](./block-concept.md) for more information.

## Breakpoint { #glossary-breakpoint }

Breakpoints are used to separate the height or width of browser screens, printers, and other media output types into steps. A [responsive](./glossary.md#glossary-responsive) site adjusts its presentation at these breakpoints. See [structure-image-responsive](./structure-image-responsive.md) for more information.

## Bundle { #glossary-bundle }

Synonym for [Entity subtype](./glossary.md#glossary-entity-subtype).

## Cache { #glossary-cache }

The site's internal cache stores the output of time-consuming calculations, such as computing output for an HTML page request, and then retrieves them instead of recalculating the next time they are needed. External caching systems can also be used on the web server to speed up a site's response. See [prevent-cache](./prevent-cache.md) for more information on the internal cache.

## CMS { #glossary-cms }

Acronym for [Content Management System](./glossary.md#glossary-content-management-system).

## Configuration { #glossary-configuration }

Information about your site that is not [content](./glossary.md#glossary-content), and is meant to be more permanent than [state](./glossary.md#glossary-state) information, such as the name of your site, the [content types](./glossary.md#glossary-content-type) and [views](./glossary.md#glossary-view) you have defined, etc. See [understanding-data](./understanding-data.md) for more information.

## Content { #glossary-content }

Information meant to be displayed on your site, such as text, images, downloads, etc. See also [Configuration](./glossary.md#glossary-configuration) and [State](./glossary.md#glossary-state). See [understanding-data](./understanding-data.md) for more information.

## Content item { #glossary-content-item }

An item of [content](./glossary.md#glossary-content) that is typically meant to be displayed as the main content of a page on your site. This is an [entity type](./glossary.md#glossary-entity-type). See [planning-data-types](./planning-data-types.md) for more information.

## Content Management System (CMS) { #glossary-content-management-system }

A collection of tools designed to allow the creation, modification, organization, search, retrieval and removal of information on a website. See [understanding-drupal](./understanding-drupal.md) for more information.

## Content type { #glossary-content-type }

An [entity subtype](./glossary.md#glossary-entity-subtype) for the [content item](./glossary.md#glossary-content-item) [entity type](./glossary.md#glossary-entity-type). Each content type is used for some particular purpose on the site, and each has its own fields. For example, a site for a farmers market might have a content type for simple pages, and another for a vendor listing page. See [planning-data-types](./planning-data-types.md) for more information.

## Contextual link { #glossary-contextual-link }

A link to an administrative page for editing or configuring a feature of the site, shown in the context where that feature is displayed. Example: a link to configure a [menu](./glossary.md#glossary-menu) that is shown when you hover your mouse over the menu. See [config-overview](./config-overview.md) for more information.

## Contributed { #glossary-contributed }

[Modules](./glossary.md#glossary-module), [themes](./glossary.md#glossary-theme), and [distributions](./glossary.md#glossary-distribution) that are not part of the [Drupal core](./glossary.md#glossary-drupal-core) download, and that can be downloaded separately from the [_Drupal.org_](https://www.drupal.org) website.

## Cron { #glossary-cron }

On some operating systems, _cron_ is a command scheduler application that executes commands or scripts periodically. Your site defines periodic tasks, also known as cron tasks, that need to be triggered either by an operating system cron scheduler, or internally. See [security-cron-concept](./security-cron-concept.md) for more information.

## Distribution { #glossary-distribution }

A single download that provides a shortcut for setting up a specific type of site, such as a website for a club or for e-commerce. A distribution contains [Drupal core](./glossary.md#glossary-drupal-core), along with [contributed](./glossary.md#glossary-contributed) [modules](./glossary.md#glossary-module) and/or [themes](./glossary.md#glossary-theme); many distributions also pre-configure the site or even create sample content upon installation. See [understanding-distributions](./understanding-distributions.md) for more information.

## Drupal core { #glossary-drupal-core }

The files, themes, profiles, and modules included with the standard project software download. See [understanding-drupal](./understanding-drupal.md) for more information.

## Entity { #glossary-entity }

An item of either [content](./glossary.md#glossary-content) or [configuration](./glossary.md#glossary-configuration) data, although in common usage, the term often refers to content entities. Examples include [content items](./glossary.md#glossary-content-item), custom [blocks](./glossary.md#glossary-block), [taxonomy terms](./glossary.md#glossary-taxonomy-term), and definitions of [content types](./glossary.md#glossary-content-type); the first three are content entities, and the last is a configuration entity. See also [Entity type](./glossary.md#glossary-entity-type), [Entity subtype](./glossary.md#glossary-entity-subtype), and [Field](./glossary.md#glossary-field). See [planning-data-types](./planning-data-types.md) for more information.

## Entity subtype { #glossary-entity-subtype }

Within a [content](./glossary.md#glossary-content) [entity type](./glossary.md#glossary-entity-type), a grouping of entities that share the same [fields](./glossary.md#glossary-field). For example, within the [content item](./glossary.md#glossary-content-item) entity type, a farmers market site might have subtypes (known as [content types](./glossary.md#glossary-content-type)) for static pages and vendor pages, each with its own group of fields. You may also see the term _bundle_ used (especially in programmer documentation) as a synonym of entity subtype. See [planning-data-types](./planning-data-types.md) for more information.

## Entity type { #glossary-entity-type }

The overall type of an [entity](./glossary.md#glossary-entity); in common usage, it is only applied to a [content](./glossary.md#glossary-content) entity. Examples include [content types](./glossary.md#glossary-content-type), [taxonomy terms](./glossary.md#glossary-taxonomy-term), and custom [blocks](./glossary.md#glossary-block). See [planning-data-types](./planning-data-types.md) for more information.

## Field { #glossary-field }

Data of a certain type that is attached to a [content](./glossary.md#glossary-content) [entity](./glossary.md#glossary-entity). For instance, on a farmers market site's vendor content type, you might have fields for an image, the vendor description, and a [taxonomy term](./glossary.md#glossary-taxonomy-term). See [planning-data-types](./planning-data-types.md) for more information.

## Field bundle { #glossary-field-bundle }

Synonym for [Entity subtype](./glossary.md#glossary-entity-subtype).

## Field formatter { #glossary-field-formatter }

[Configuration](./glossary.md#glossary-configuration) that defines how the data in a [field](./glossary.md#glossary-field) is displayed. For example, a text field could be displayed with a prefix and/or suffix, and it could have its HTML tags stripped out or limited. See also [View mode](./glossary.md#glossary-view-mode) and [Field widget](./glossary.md#glossary-field-widget). See [structure-view-modes](./structure-view-modes.md) for more information.

## Field widget { #glossary-field-widget }

[Configuration](./glossary.md#glossary-configuration) that defines how someone can enter or edit data for a [field](./glossary.md#glossary-field) on a data entry form. For example, a text field could use a single-line or multi-line entry box, and there could be a setting for the size of the box. See also [Field formatter](./glossary.md#glossary-field-formatter). See [structure-widgets](./structure-widgets.md) for more information.

## Formatter { #glossary-formatter }

See [Field formatter](./glossary.md#glossary-field-formatter).

## FOSS { #glossary-foss }

Acronym for _Free and Open Source Software_, meaning software that is developed by a community of people and released under a non-commercial license. See also [GPL](./glossary.md#glossary-gpl). See [understanding-project](./understanding-project.md) for more information.

## GPL { #glossary-gpl }

Acronym for the _GNU General Public License_, a non-commercial software license. All software downloaded from the [_Drupal.org_](https://www.drupal.org) website is licensed under the ["GNU General Public License, version 2"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html). See also [FOSS](./glossary.md#glossary-foss). See [understanding-gpl](./understanding-gpl.md) for more information.

## Image style { #glossary-image-style }

A set of processing steps that transform a base image into a new image; typical processing includes scaling and cropping. See [structure-image-styles](./structure-image-styles.md) for more information.

## LAMP { #glossary-lamp }

Acronym for _Linux, Apache, MySQL, and PHP_: the software on the web server that the scripts commonly run on (although it can use other operating systems, web servers, and databases). See [install-requirements](./install-requirements.md) for more information.

## Log { #glossary-log }

A list of recorded events on the site, such as usage data, performance data, errors, warnings, and operational information. See [prevent-log](./prevent-log.md) for more information.

## Menu { #glossary-menu }

A set of links used for navigation on a site, which may be arranged in a hierarchy. See [menu-concept](./menu-concept.md) for more information.

## Module { #glossary-module }

Software (usually PHP, JavaScript, and/or CSS) that extends site features and adds functionality. The Drupal project distinguishes between _[core](./glossary.md#glossary-drupal-core)_ and _[contributed](./glossary.md#glossary-contributed)_ modules. See [understanding-modules](./understanding-modules.md) for more information.

## Path { #glossary-path }

The unique, last part of the internal URL that the system assigns to a page on the site, which can be a visitor-facing page or an administrative page. For example, the internal URL for the About page on your site might be _http://example.com/node/5_, and in this case, the path is _node/5_. See also [Alias](./glossary.md#glossary-alias). See [content-paths](./content-paths.md) for more information.

## Permission { #glossary-permission }

The ability to perform some action on the site, such as editing a particular type of [content](./glossary.md#glossary-content), or viewing user profiles. See also [Role](./glossary.md#glossary-role). See [user-concept](./user-concept.md) for more information.

## Reference field { #glossary-reference-field }

A [field](./glossary.md#glossary-field) that represents a relationship between an [entity](./glossary.md#glossary-entity) and one or more other entities, which may be the same [entity type](./glossary.md#glossary-entity-type) or a different type. For example, on a farmers market site, a recipe content item might have a reference field to the vendor (also a content item) that posted the recipe. [Taxonomy term](./glossary.md#glossary-taxonomy-term) fields are also reference fields. See [structure-reference-fields](./structure-reference-fields.md) for more information.

## Region { #glossary-region }

A defined area of a page where [content](./glossary.md#glossary-content) can be placed, such as the header, footer, main content area, left sidebar, etc. Regions are defined by [themes](./glossary.md#glossary-theme), and the content displayed in each region is contained in [blocks](./glossary.md#glossary-block). See [block-regions](./block-regions.md) for more information.

## Responsive { #glossary-responsive }

A site or [theme](./glossary.md#glossary-theme) is said to be responsive if it adjusts its presentation in response to the size of the browser screen, printer, or other media output type. See also [Breakpoint](./glossary.md#glossary-breakpoint). See [structure-image-responsive](./structure-image-responsive.md) for more information.

## Revision { #glossary-revision }

A record of the past or present state of a [content](./glossary.md#glossary-content) [entity](./glossary.md#glossary-entity), as it is edited over time. See [planning-workflow](./planning-workflow.md) for more information.

## Role { #glossary-role }

A named set of [permissions](./glossary.md#glossary-permission) that can be applied to a [user account](./glossary.md#glossary-user). See [user-concept](./user-concept.md) for more information.

## Security update { #glossary-security-update }

An [update](./glossary.md#glossary-update) that fixes a security-related bug, such as a hacking vulnerability. See [security-concept](./security-concept.md) for more information.

## State { #glossary-state }

Information of a temporary nature about the current state of your site, such as the time when [cron](./glossary.md#glossary-cron) was last run, etc. See also [Content](./glossary.md#glossary-content) and [Configuration](./glossary.md#glossary-configuration).  See [understanding-data](./understanding-data.md) for more information.

## Taxonomy { #glossary-taxonomy }

The process of classifying [content](./glossary.md#glossary-content). See [structure-taxonomy](./structure-taxonomy.md) for more information.

## Taxonomy term { #glossary-taxonomy-term }

A term used to classify [content](./glossary.md#glossary-content), such as a tag or a category. See also [Vocabulary](./glossary.md#glossary-vocabulary). See [structure-taxonomy](./structure-taxonomy.md) for more information.

## Text format { #glossary-text-format }

[Configuration](./glossary.md#glossary-configuration) that defines the processing that happens to user-entered text before it is shown in the browser. This might include stripping or limiting HTML tags, or turning URLs into links. See [structure-text-formats](./structure-text-formats.md) for more information.

## Theme { #glossary-theme }

Software and asset files (images, CSS, PHP code, and/or templates) that determine the style and layout of the site. The Drupal project distinguishes between  _[core](./glossary.md#glossary-drupal-core)_ and _[contributed](./glossary.md#glossary-contributed)_ themes. See [understanding-themes](./understanding-themes.md) for more information.

## UI { #glossary-ui }

Acronym for [_User Interface_](./glossary.md#glossary-user-interface).

## Update { #glossary-update }

A newer version of your site's software, either [Drupal core](./glossary.md#glossary-drupal-core) or a [module](./glossary.md#glossary-module) or [theme](./glossary.md#glossary-theme). See also [Security update](./glossary.md#glossary-security-update). See [security-concept](./security-concept.md) for more information.

## User { #glossary-user }

A person interacting with the site, either logged-in or [anonymous](./glossary.md#glossary-anonymous). See [user-concept](./user-concept.md) for more information.

## User interface { #glossary-user-interface }

The text, styles, and images that are visible on a site, separated logically into the user interface for site visitors and the administrative user interface.

## User one (User 1) { #glossary-user-one }

The initial [user](./glossary.md#glossary-user) account that is created when you install the site (whose ID number is 1). It automatically has all [permissions](./glossary.md#glossary-permission), even if it is not assigned an administrative [role](./glossary.md#glossary-role). See [user-admin-account](./user-admin-account.md) for more information.

## View { #glossary-view }

A formatted listing of data; typically, the data comes from [content](./glossary.md#glossary-content) [entities](./glossary.md#glossary-entity). For example, on a farmers market site, you might create a [content item](./glossary.md#glossary-content-item) for each vendor. You could then make view that generates a listing page that shows a thumbnail image and short description of each vendor, linking to the full-page content item. Using the same data, you could also make a view that generates a new vendors block, which would show information from the most recently added vendors. See [planning-modular](./planning-modular.md) for more information.

## View mode { #glossary-view-mode }

A set of [field formatter](./glossary.md#glossary-field-formatter) [configuration](./glossary.md#glossary-configuration) for all of the [fields](./glossary.md#glossary-field) of a [content](./glossary.md#glossary-content) [entity](./glossary.md#glossary-entity), some of which may be hidden. Each [entity subtype](./glossary.md#glossary-entity-subtype) can have one or more view modes defined; for example, [content types](./glossary.md#glossary-content-type) typically have _Full_ and _Teaser_ view modes, where the _Teaser_ view mode displays fewer or trimmed-down fields. See [structure-view-modes](./structure-view-modes.md) for more information.

## Vocabulary { #glossary-vocabulary }

A group of [taxonomy terms](./glossary.md#glossary-taxonomy-term) to choose from when classifying [content](./glossary.md#glossary-content) in a particular way, such as the list of all of the vendor categories on a farmers market site. Technically, vocabularies are the [entity subtype](./glossary.md#glossary-entity-subtype) for the taxonomy term [entity type](./glossary.md#glossary-entity-type). See [structure-taxonomy](./structure-taxonomy.md) for more information.

## Widget { #glossary-widget }

See [Field widget](./glossary.md#glossary-field-widget).

## Wizard { #glossary-wizard }

A web form that allows you to fill in a few values, and creates something with sensible defaults based on the values you chose. For example, there are wizards for creating [views](./glossary.md#glossary-view) of different types. See [views-create](./views-create.md) for more information.

## WYSIWYG { #glossary-wysiwyg }

Acronym for _What You See is What You Get_, meaning a method for editing [content](./glossary.md#glossary-content) where what you see on the editing screen closely resembles the final product. See [structure-text-format-config](./structure-text-format-config.md) for more information.
