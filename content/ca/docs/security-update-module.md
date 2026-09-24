---
title: "Updating a Module"
description: "How to update a contributed module by using the administrative interface and running the Database updates script, or by using Drush."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "ca"
---
## Goal { #security-update-module }

Update a contributed module and run the _Database updates_ script.
## Prerequisite knowledge

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Site prerequisites

* A contributed module has been installed and there is an update available for
it. See [extend-module-install](./extend-module-install.md) and [security-announce](./security-announce.md).
* If your site is live, you should test this process in a development
environment before running it on your production site. See
[install-dev-making](./install-dev-making.md).
* You have created a full-site backup. See [prevent-backups](./prevent-backups.md).
* If you want to use the user interface, the core Update Manager module must be
installed. See [config-install](./config-install.md) for instructions on installing core
modules.
* If you want to use Drush, Drush must be installed. See [install-tools](./install-tools.md).
## Steps

Before you start, check for module-specific update instructions. This is
typically necessary while updating modules that involve the usage of third-party
libraries. Read and understand all module-specific requirements before
proceeding with the updates. To find instructions, check the module's project
page _Read Documentation_ link.

To view further instructions, download the tar.gz or .zip file from the project
page to your local computer. Unzip the file and look for _README.txt_,
_INSTALL.txt_, and _UPGRADE.txt_ that come with the module's installation
file. Also, review the release notes on the project page by clicking the version
number you're downloading.

![Release notes link](/images/security-update-module-release-notes.webp)

You can use the administrative interface or Drush to update a contributed
module. If you are updating a custom module rather than a contributed module, if
you see a message saying _Installing modules and themes requires FTP access to
your server_, or if the steps below do not work to obtain the new module files,
follow the steps in [extend-manual-install](./extend-manual-install.md). You can then continue here with
step 6 in the instructions for the administrative interface below.
### Using the administrative interface

1. Put your site in maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. In the _Manage_ administrative menu, navigate to _Reports_ >
    _Available updates_ > _Update_ (_admin/reports/updates/update_).
1. Find and check the module in the list. Click _Download these updates_ for the
    module.
    <img src="/images/security-update-module-updates.webp" alt="Available updates" width="100%" />
1. Click _Continue_.
1. Click _Run database updates_. If you obtained the new module files manually,
    start with this step, and reach the database updates page by typing the URL
    _example.com/update.php_ in your browser.
1. Click _Continue_ and apply all updates. The database update scripts will be
    executed.
1. Click _Administration pages_ to return to the administration section of your
    site.
1. Take your site out of maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. Clear the cache (refer to [prevent-cache-clear](./prevent-cache-clear.md)).
### Using Drush

1. Find the project name for the module you wish to update. It is the last
    segment of the module's project page URL. For example, if the project URL is
    _https://www.drupal.org/project/admin_toolbar_, the project name is
    "admin_toolbar".
1. Run the following Drush command, giving the project name (for example,
    `admin_toolbar`) as a parameter (if you have more than one module to update, add
    the additional module project names to the end of the command, separated by
    spaces):
    ```text
    drush up admin_toolbar
    ```
1. Follow the instructions on the screen.
## Expand your understanding

* Review the site log (refer to [prevent-log](./prevent-log.md)) once the updates are complete
to check for errors.
* [security-update-theme](./security-update-theme.md)
## Additional resources

[_Drupal.org_ community documentation page "Updating modules"](https://www.drupal.org/node/250790)

*Attributions*

Adapted by [Boris Doesborgh](https://www.drupal.org/u/batigolix), and
[Sarah German](https://www.drupal.org/u/hey_germano) at
[Advomatic](https://www.advomatic.com), from
["Updating modules"](https://www.drupal.org/node/250790), copyright 2000-2017 by
the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
