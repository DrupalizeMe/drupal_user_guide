---
title: "Downloading and Installing a Theme from _Drupal.org_"
description: "How to download and install a theme from Drupal.org or by using Drush."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "pt-br"
---
## Goal { #extend-theme-install }

Download and install a theme from _Drupal.org_.
## Prerequisite knowledge

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Site prerequisites

If you want to install via the website, the core Update Manager module must be
installed. See [config-install](./config-install.md) for instructions on installing modules.

If you want to use Drush, Drush must be installed. See [install-tools](./install-tools.md).
## Steps

You can use the administrative interface to download and install a contributed
theme. If you are installing a custom theme rather than a contributed theme, if
you see a message saying _Installing modules and themes requires FTP access to
your server_, or if the steps below do not work to download and unpack the theme
files, follow the steps in [extend-manual-install](./extend-manual-install.md). If you are using Composer
to manage the files in your site, follow the steps for downloading in
[install-composer](./install-composer.md). In either of these cases, you can then install the theme
using Drush, or by continuing with step 7 in the instructions for the
administrative interface below.
### Using the administrative interface

1. On the theme's project page on drupal.org (for example,
    _https://www.drupal.org/project/mayo_), scroll to the _Downloads_ section
    at the bottom of the page.
1. Right-click _tar.gz_ to copy the address.
    ![Finding the URL for a theme](/images/extend-theme-install-download.png)
1. In the _Manage_ administrative menu, navigate to _Appearance_
    (_admin/appearance_). The _Appearance_ page appears.
1. Click _Install new theme_. The _Install new theme_ page appears.
    ![Installing a theme](/images/extend-theme-install-page.png)
1. In the field _Install from a URL_, paste the copied download link. This value
    could look like
    `https://ftp.drupal.org/files/projects/mayo-8.x-1.3.tar.gz`.
1. Click _Install_ to upload and unpack the new theme on the server. The files
    are being downloaded to the _themes_ directory.
1. Click _Install newly added themes_ to return to the _Appearance_ page. If you
    used the manual uploading procedure mentioned earlier, then you can continue
    with this step, and reach the _Appearance_ page by using the _Manage_
    administrative menu and navigating to _Appearance_ (_admin/appearance_).
1. Locate the new theme under _Uninstalled themes_ and click _Install and set as
    default_ to use it. All non-administrative pages on the site will now use this
    new theme.
    <img src="/images/extend-theme-install-appearance-page.png" alt="Uninstalled themes on Appearance page" width="286px" />

### Using Drush to install a theme

1. Find the project name for the theme you want to install, which is the last
    segment of the theme's project page URL. For example, if the project URL is
    _https://www.drupal.org/project/mayo_, the project name is `mayo`.
1. Download the theme using either the steps in [extend-manual-install](./extend-manual-install.md) or
    [install-composer](./install-composer.md).
1. Run the following Drush commands, giving the project name (for example,
    _mayo_) as a parameter:
    ```text
    drush en mayo
    drush config-set system.theme default mayo
    ```
1. Follow the instructions on the screen.
## Expand your understanding

* In the _Manage_ administrative menu, navigate to _Appearance_
(_admin/appearance_) and uninstall any themes that you are not using.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* If you do not see the effect of these changes in your site, you might need
to clear the cache. See [prevent-cache-clear](./prevent-cache-clear.md).
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UOYy9A_9_Lw" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me), and
[Boris Doesborgh](https://www.drupal.org/u/batigolix).
