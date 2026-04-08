---
title: "Setting Up an Environment with DDEV"
description: "How to set up a development site using DDEV, a local development environment for PHP applications."
id: "install-ddev"
translation_key: "install-ddev"
source_locale: "en"
---
## Goal { #install-ddev }

Set up a local development environment using DDEV to serve the application and
Composer to download the required files.
## Prerequisite knowledge

[install-requirements](./install-requirements.md)
[install-composer](./install-composer.md)
## Why use DDEV?

DDEV is a local development environment for PHP applications built on Docker. It
includes all the necessary components to run the core software, and is used by
many developers in the Drupal community.
## Steps

1. Follow the
    [official DDEV installation instructions](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/)
    to install DDEV on your local machine. DDEV is available for Windows, Mac, and
    Linux. The installation process is different for each operating system, so be
    sure to follow the instructions for your OS.
1. After installing DDEV, follow the
    [Drupal Quickstart instructions](https://ddev.readthedocs.io/en/stable/users/quickstart/#drupal)
    to download the core software using Composer and install it in the DDEV
    environment.
1. Run the command `ddev launch` from the directory created in the previous step
    to open the site in your web browser and confirm the environment is working
    correctly.

## Related topics

* [install-requirements](./install-requirements.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Additional resources

* [DDEV documentation](https://ddev.readthedocs.io/en/stable/)
* [Install Drupal using DDEV for local development](https://www.drupal.org/docs/getting-started/installing-drupal/install-drupal-using-ddev-for-local-development)

*Attributions*

Written and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me).
