---
title: "Preparing to Install"
description: "How to choose a method for installing the core software, and satisfy prerequisites for installation."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "zh-hans"
---
## Goal { #install-prepare }

Choose an appropriate way to install the core software, and handle any
required prerequisites.
## Prerequisite knowledge

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
## Site prerequisites

If you want to use Drush to install the core software, Drush must be
installed. See [install-tools](./install-tools.md).
## Steps

1. Choose a method for installing the core software.
    - **Try a free online demo:** Use an online provider to get a demo installation of the core software in 20 minutes or less. See the [_Drupal.org_ page "Try Drupal"](https://www.drupal.org/try-drupal).
    - **Use a one-click installer from your hosting provider:** If you choose to install the core software at your hosting provider, your hosting provider may have specific documentation and/or a one-click install that you can use. See [_Drupal.org's_ list of hosting providers that support Drupal](https://www.drupal.org/association/supporters/hosting).
    - **Use Drush:** You will need to have Drush installed and command-line access to the site. See [install-tools](./install-tools.md).
    - **Use the web installer:** You will need space on a local or hosted web server to install the core software manually.
    - **Use a pre-configured environment:** Use a pre-configured environment or virtual machine that contains Drupal and all the required supporting software to install Drupal locally. See the section for your operating system under [Drupal.org's Local server setup guide](https://www.drupal.org/docs/develop/local-server-setup) for possible options. --
1. If you are installing using Drush or the web installer, set up a URL and
    hosting for your site, either at an external hosting provider or on your own
    computer. Verify that the hosting is working by putting a simple HTML file in
    the web root directory of the hosting, and visiting the URL for your site.
1. If you are installing using Drush or the web installer, create a database,
    along with a database user account with full access.
1. If you are installing using Drush, type the following at the Drush command
    line, where _example_ is the name of the directory that the core software will
    be downloaded to, and _DB_NAME_, _DB_USER_ and _DB_PASS_ are your database's
    credentials:
    ```text
    drush dl drupal --drupal-project-rename=example
    cd example
    drush site-install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site- name=example
    ```
1. If you are installing using the web installer, upload the core software files
    manually. To do this using Git and/or Composer, see [install-composer](./install-composer.md); to do
    this by downloading a zipped archive:

    .. Go to _https://www.drupal.org_ and click _Download & Extend_ on the top-level
    menu.
    <img src="/images/install-prepare-downloads.webp" alt="Downloads page on _Drupal.org_" width="100%" />

    .. Click the _Download Drupal_ button (of the appropriate version) to be taken
    to the Downloads page.
    ![Recommended releases section of Drupal downloads page on _Drupal.org_](/images/install-prepare-recommended.webp)

    .. Click the version you wish to download under _Recommended releases_.
    ![Download files section of Drupal core download page on _Drupal.org_](/images/install-prepare-files.webp)

    .. Download the tar.gz or zip file to your local machine.

    .. Upload the downloaded file to your hosting account. Log in to the control
    panel and navigate to the _HTML_ directory. Save the file there.

    .. Uncompress the tar.gz or zip file, which will create a new directory. If you
    do not have terminal access, or your hosting server is not running Linux, your
    hosting control panel's file manager should provide a way to extract the
    files. If you have terminal access to your hosting server (running Linux), you
    can use a command like:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```

    .. Delete the compressed file from the server, unless your unpacking method
    already deleted it.

    .. Rename the directory or reconfigure your web hosting, so that the directory
    name matches the directory your web hosting is configured to use for your site.
## Expand your understanding

Run the installer if you chose web installer to install the core software. See
[install-run](./install-run.md).
## Additional resources

[Drush](http://www.drush.org)

*Attributions*

Written and edited by [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
