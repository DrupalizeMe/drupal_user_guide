---
title: "Manually Downloading Module or Theme Files"
description: "How to manually download and upload a module or theme."
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "es"
---
## Goal { #extend-manual-install }

Manually download module or theme files and upload them to your site, if the
website or Drush methods for installing or updating a module or theme do not
work, or if you are placing a custom-written module or theme.
## Prerequisite knowledge

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Site prerequisites

You need to be facing any of the following to perform the manual download
described in this topic:

* File permission issues
* FTP permission issues
* You created a custom module/theme or received its files from someone
* You could not successfully complete the instructions in
[extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
[security-update-module](./security-update-module.md), or [security-update-theme](./security-update-theme.md)

Skip this topic if none of the above applies to you. If you are using Composer
to manage the files in your site, follow the file updating steps in
[install-composer](./install-composer.md) instead of this topic.
## Steps

If you are installing a module or theme from _Drupal.org_, follow the
downloading instructions, and then the uploading/unpacking instructions. If
you created the module or theme, skip the downloading step. Instead, create
an archive file (that you know how to extract on the server) and proceed with
the steps in uploading/unpacking, using whatever method is appropriate for the
way you initially created the archive file.
### Downloading the files

1. Open the module or theme project page on drupal.org; for example, the _Admin
    toolbar_ page (https://www.drupal.org/project/admin_toolbar).
1. Scroll to the _Downloads_ section near the bottom of the page.
    ![Downloading module files](/images/extend-manual-install-download.png)
1. Click _tar.gz_ to download the file to your computer. Alternatively, if you
    have terminal access to your hosting server (running Linux), you can copy the
    link address for the _tar.gz_ file from your browser, and use this command to
    download the file (substituting the copied URL):
    ```text
    wget https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.26.tar.gz
    ```
### Uploading the files to your site and unpacking them

1. If you are adding a new module or theme, create subdirectories in your
    top-level _modules_ and _themes_ directories (if they don't already
    exist). Typically, people make a _contrib_ subdirectory for contributed modules
    and themes that are downloaded from _Drupal.org_, and a _custom_ subdirectory for
    modules and themes that they created. Your _modules_ directory might look like
    this:
    <img src="/images/extend-manual-install-directories.png" alt="Suggested directory structure for modules" width="174px" />
1. If you are replacing an existing module or theme with an updated version, put
    the site into maintenance mode. See [extend-maintenance](./extend-maintenance.md).
1. If you are replacing an existing module or theme with an updated version, find
    and delete all the existing files and directories for the existing module
    or theme. Modules are normally located in directories under the top-level
    _modules_ directory, and themes are normally located in directories under the
    top-level _themes_ directory.
1. Upload the _.tar.gz_ file (or whatever archive you created) to your site.
    Place it in either the same location from which you deleted the directory
    (if replacing an existing module or theme) or the appropriate subdirectory
    of _modules_ or _themes_ (if adding a new module or theme).
1. Extract the files from the _.tar.gz_ archive (or whatever archive you
    created), making a subdirectory in the same location as the archive file.
    If you do not have terminal access, or your hosting server is not running
    Linux, your hosting control panel's file manager should provide a way to
    extract the files. If you have terminal access to your hosting server
    (running Linux) and you are using a tar.gz file, you can use a command like:
    ```text
    tar -xzf admin_toolbar-8.x-1.17.tar.gz
    ```
1. Delete the compressed file from the server, unless your unpacking method
    already deleted it.
1. Refer to [extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
    [security-update-module](./security-update-module.md), or [security-update-theme](./security-update-theme.md) to complete the
    installation or update of the module or theme. Start at the step after the
    automatic download has been completed.
## Expand your understanding

* If you work with multiple environments (for example, a local development site
and a production site) you will have to repeat the steps on each environment, or
re-clone the environment. See [install-dev-making](./install-dev-making.md).
* If you added a new theme, navigate in the _Manage_ administrative menu to
_Appearance_ (_admin/appearance_) and uninstall the old theme.
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Manually Downloading Module or Theme Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

* [_Drupal.org_ community documentation page "Updating modules"](https://www.drupal.org/node/250790)
* [_Drupal.org_ community documentation page "Installing contributed modules (Drupal 8)"](https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules)
* [_Drupal.org_ community documentation page "Installing themes"](https://www.drupal.org/docs/8/extending-drupal-8/installing-themes)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and
[Marc Isaacson](https://www.drupal.org/u/vegantriathlete).
