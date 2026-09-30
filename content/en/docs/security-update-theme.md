---
title: "Updating a Theme"
description: "How to update a contributed theme using Composer and the administrative interface for running the Database Updates script."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "en"
---
## Goal { #security-update-theme }

Update a contributed theme on your site and run the _Database Updates_ script.
## Prerequisite knowledge

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Site prerequisites

* A contributed theme has been installed and there is an update available for
it. See [extend-theme-install](./extend-theme-install.md) and [security-announce](./security-announce.md).
* If your site is live, you should test this process in a development
environment before running it on your production site. See
[install-dev-making](./install-dev-making.md).
* You have created a full site backup. See [prevent-backups](./prevent-backups.md).
* If you want to use the user interface to check for updates, the core Update
Manager module must be installed. See [config-install](./config-install.md) for instructions on
installing core modules.
## Steps

Updating a contributed theme requires first putting your site into maintenance
mode, then obtaining the new code files and applying any required database
updates, then finally taking the site out of maintenance mode.

You can update the code for a contributed theme using Composer. If you are
updating a custom theme rather than a contributed theme, obtain the new theme
files, then continue with instructions for running the database updates via the
administrative interface below.

This assumes that you are using Composer to manage the files in your site; see
[install-composer](./install-composer.md).
### Update a contributed theme with Composer

1. Put your site in maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. In the _Manage_ administrative menu, navigate to _Reports_ >
    _Available updates_ > _Update_ (_admin/reports/updates_).
1. Find any themes in the list that need updating.
    <img src="/images/security-update-theme-updates.png" alt="Available updates" width="100%" />
1. Determine the short name of the project you want to update. For contributed
    modules and themes, it is the last part of the URL of the project page; for
    example, the Honey theme, at https://www.drupal.org/project/honey, has
    short name `honey`.
1. If you want to update to the latest stable release, use the following
    command, substituting the short name of the project to be updated for
    `honey`:
    ```text
    composer update drupal/honey --with-dependencies
    ```

    To learn how to download specific versions see [install-composer](./install-composer.md).

1. After obtaining the new theme files run any database updates page by typing
    the URL _example.com/update.php_ in your browser.
1. Click _Continue_ to run the updates. The database update scripts will be
    executed.
1. Click _Administration pages_ to return to the administration section of your
    site.
1. Take your site out of maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. Clear the Drupal cache (refer to [prevent-cache-clear](./prevent-cache-clear.md)).

## Expand your understanding

* Review the site log, see [prevent-log](./prevent-log.md), once the updates are complete to
check for errors.
* [security-update-module](./security-update-module.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/elVnWoaQMkk" title="Updating a Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix) and
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at [Drupalize.Me](https://drupalize.me).
