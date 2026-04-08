---
title: "Concept: Methods for Downloading and Installing the Core Software"
description: "Overview of methods you can use to download the core software."
id: "install-decide"
translation_key: "install-decide"
source_locale: "en"
---
## Prerequisite knowledge { #install-decide }

* [install-tools](./install-tools.md)
* [install-requirements](./install-requirements.md)
* [understanding-distributions](./understanding-distributions.md)
## What methods are available for downloading the core software?

Before you can build a site, you will need to first download the core software.
Depending on your plans, there are several ways that you can download the core
software:

- **Use Composer:** If you plan to build a site, and continue to develop it over time you should use Composer to download the core software, because Composer will manage the dependencies properly. If you plan to use the Drush tool (see [install-tools](./install-tools.md)), using Composer is required. See [install-composer](./install-composer.md) for instructions.
- **Try a free online demo:** If you are evaluating whether or not to use Drupal to build a site, you can use an online provider to get a demo installation of the core software in 20 minutes or less. See the [_Drupal.org_ page "Try Drupal"](https://www.drupal.org/try-drupal).
- **Use a one-click installer from your hosting provider:** If you choose to install the core software at your hosting provider, your hosting provider may have specific documentation and/or a one-click install that you can use. See [_Drupal.org's_ list of hosting providers that support Drupal](https://www.drupal.org/hosting).
- **Use a pre-configured environment:** Use a pre-configured environment or virtual machine that contains Drupal and all the required supporting software to install Drupal locally. See the section for your operating system under [_Drupal.org_ community documentation page "Local server setup guide"](https://www.drupal.org/docs/develop/local-server-setup) for possible options.
## What happens when I install the core software?

_Installing_ the core software means setting up some database tables,
configuration, and an administrative user account, so that you can build and use
your site.
## What methods are available for installing the core software?

There are several ways to install the core software:

- **Behind-the-scenes installer:** If you choose to use an online demo or one-click installer from a hosting provider, the core software may be installed for you automatically.
- **Interactive installer:** The core software has an interactive installer that presents you with several on-line forms, and then completes the installation using the information you provide in the forms. See [install-prepare](./install-prepare.md) and [install-run](./install-run.md).
- **Command-line tool:** Command-line tools (see [install-tools](./install-tools.md)) can also be used to perform the installation steps.
- **Demo site installer:** Quickly create a temporary demo site that uses the built-in web server and SQLite database that are part of PHP by running the command below from the root directory of your project. In this case, you will not run the interactive installer. See the [Evaluator Guide](https://www.drupal.org/docs/official_docs/evaluator-guide) to learn more.

```text
  php -d memory_limit=256M core/scripts/drupal quick-start demo_umami
```

*Attributions*

Written and edited by [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
