---
title: "Updating a Theme"
description: "How to update a contributed theme by using the administrative interface and running the Database Updates script."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "hy"
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
* If you want to use the user interface, the core Update Manager module must be
installed. See [config-install](./config-install.md) for instructions on installing core
modules.
## Steps

You can use the administrative interface to update a contributed theme. If you
are updating a custom theme rather than a contributed theme, if you see a
message saying _Installing modules and themes requires FTP access to your
server_, or if the steps below do not work to obtain the new theme files, follow
the steps in [extend-manual-install](./extend-manual-install.md), and then continue with step 6 in the
instructions for administrative interface below.

If you are using Composer to manage the files in your site, follow the steps
in [install-composer](./install-composer.md) to update the files, then continue here with step 6 in
the instructions for the administrative interface below.
### Using the administrative interface

1. Put your site in maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. In the _Manage_ administrative menu, navigate to _Reports_ >
    _Available updates_ > _Update_ (_admin/reports/updates/update_).
1. Find and check the theme in the list. Click _Download these updates_ for the
    theme.
    <img src="/images/security-update-theme-updates.png" alt="Available updates" width="100%" />
1. Click _Continue_.
1. Click _Run database updates_. If you obtained the new theme files manually,
    start with this step, and reach the database updates page by typing the URL
    _example.com/update.php_ in your browser.
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

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
