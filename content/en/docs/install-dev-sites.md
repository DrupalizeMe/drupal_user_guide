---
title: "Concept: Development Sites"
description: "Overview of development sites with an example deployment workflow for site building."
id: "install-dev-sites"
translation_key: "install-dev-sites"
source_locale: "en"
---
## What are Development Sites? { #install-dev-sites }

Development Sites are different copies of the same site used for developing,
updating, and testing a site without risking the integrity of the live site.

An example deployment workflow for site building will usually include the sites
mentioned below:

- **Local environment:** The development process starts with developers working on new features, bug fixes, theming, and configuration in their local environment. The recommended tool for setting up a local environment is DDEV. See [install-ddev](./install-ddev.md).
- **Development site:** Developers push the changes they've been working on to the development site. For a team of more than one developer, version control is usually used. Git is a version control system that tracks your files for any changes. You can then commit those changes to a repository. Using Git allows team members to work on the same site without overriding each other's work. It also makes it possible to easily roll back to previous stages of the development.
- **Staging site:** The staging site can be used for testing, or presenting the changes to the client for approval. QA (Quality Assurance) and UAT (User Acceptance Testing) are most often carried out on the staging site. It is recommended to have live content on both the development and staging sites, so that you can test how the new features will work with the existing content.
- **Production site:** The live site on the web available to visitors. It contains new features that have been proven safe to go live.

Based on the project's size, scope, requirements, or stakeholders, stages from
the above workflow can be removed, or additional stages can be added. For
example, a testing site before staging can be added to separate testing and user
acceptance processes.
## Related topics

* [install-dev-making](./install-dev-making.md)
* [install-ddev](./install-ddev.md)
* [planning-workflow](./planning-workflow.md)
* [extend-git](./extend-git.md)

*Attributions*

Written and edited by [Diána Lakatos](https://www.drupal.org/u/dianalakatos),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com), and
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me).
