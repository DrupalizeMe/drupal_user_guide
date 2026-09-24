---
title: "Enabling and Disabling Maintenance Mode"
description: "How to enable maintenance mode to set up a \"Site under maintenance\" message, and how to disable it."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "hy"
---
## Goal { #extend-maintenance }

Put your site in maintenance mode to allow users with the right permissions to
use the site while users without this permission are presented with a message
that the site is under maintenance.
## Prerequisite knowledge

[security-concept](./security-concept.md)
## Site prerequisites

If you want to use Drush to enable or disable maintenance mode, Drush must be
installed. See [install-tools](./install-tools.md).
## Steps

You can use the administrative interface or Drush to enable or disable
maintenance mode.
### Enabling maintenance mode using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Maintenance mode_ (_admin/config/development/maintenance_). The
    _Maintenance mode_ page appears.
1. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Put site into maintenance mode</td>
          <td>Enable the maintenance mode</td>
          <td></td>
        </tr>
        <tr>
          <td>Message to display when in maintenance mode</td>
          <td>The information that is shown to website visitors when the mode is enabled. Variables such as @site can be used in the message</td>
          <td>@site is currently under maintenance but should be back shortly. Thank you for your patience.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Click _Save configuration_.
1. Verify that the site is in maintenance mode by accessing it from another
    browser where you aren't logged in. If you are not able to verify, try clearing
    the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-enabled.webp" alt="Maintenance mode enabled" width="100%" />

### Disabling maintenance mode using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Maintenance mode_ (_admin/config/development/maintenance_). The
    _Maintenance mode_ page appears.
1. Fill in the fields as shown below.
    <table>
      <thead>
        <tr>
          <th>Field name</th>
          <th>Explanation</th>
          <th>Value</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Put site into maintenance mode</td>
          <td>Disable the maintenance mode</td>
          <td></td>
        </tr>
        <tr>
          <td>Message to display when in maintenance mode</td>
          <td>No message required while disabling. You can leave the field blank.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Click _Save configuration_.
1. Verify that the site is no longer in maintenance mode by accessing it from
    another browser where you aren't logged in. If you are not able to verify, try
    clearing the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-disabled.webp" alt="Maintenance mode disabled" width="100%" />

### Enabling or disabling maintenance mode using Drush

1. Follow the user interface steps above to edit the site maintenance message, if
    desired.
1. Run the following Drush commands to enable maintenance mode and clear the
    cache:
    ```text
    drush config:set system.maintenance message "Optional message" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Run the following Drush commands to disable maintenance mode and clear the
    cache:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. After running either set of commands, verify that your site is either in or
    out of maintenance mode by visiting the site in a browser where you are not
    logged in.
## Expand your understanding

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Enabling and Disabling Maintenance Mode" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com), and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
