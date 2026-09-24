---
title: "Downloading and Installing a Theme from _Drupal.org_"
description: "How to download and install a theme from Drupal.org."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "en"
---
## Goal { #extend-theme-install }

Download and install a theme from _Drupal.org_.
## Prerequisite knowledge

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Site prerequisites

Composer must be installed to download themes. If you want to use Drush, Drush
must be installed. See [install-tools](./install-tools.md).
## Steps

To install a contributed theme, first download the theme with Composer. Then
install it using either the administrative interface or Drush. If you are
installing a custom theme rather than a contributed theme that is not
available via Composer, skip the steps for downloading the theme, and refer to
[extend-manual-install](./extend-manual-install.md). Then return here and follow the steps for installing
the theme using either the administrative interface or Drush.
### Download the contributed theme with Composer

1. On the theme's project page on drupal.org (for example,
    _https://www.drupal.org/project/honey_), scroll to the _Releases_ section
    at the bottom of the page.
1. Copy the provided Composer command for the version of the theme you want to
    install.
    ![Finding the composer command for a theme](/images/extend-theme-install-download.webp)
1. Alternatively, type the following command (substituting
    the short name of the theme and desired version for `honey:^1.0`):
    ```text
    composer require 'drupal/honey:^1.0'
    ```
1. At the command line, change to the root directory or your project. Paste the
    Composer command and execute it.
1. You should see a message about the theme being successfully downloaded.

### Install the theme using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Appearance_
    (_admin/appearance_). The _Appearance_ page appears.
1. Locate the new theme under _Uninstalled themes_ and click _Install and set as
    default_ to use it. All non-administrative pages on the site will now use this
    new theme.
    <img src="/images/extend-theme-install-appearance-page.webp" alt="Uninstalled themes on Appearance page" width="286px" />

### Install the theme using Drush

1. To install the theme, and set it as the default, run the following Drush\
    commands, giving the project name (for example, _honey_) as a parameter:
    ```text
    drush theme:enable honey
    drush config:set system.theme default honey
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
  <iframe src="https://www.youtube-nocookie.com/embed/UFgddj0F_bU" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Attributions*

Written and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me), and
[Boris Doesborgh](https://www.drupal.org/u/batigolix).
