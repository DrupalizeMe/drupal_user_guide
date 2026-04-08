---
title: "Running the Installer"
description: "How to use the installer to install the core software."
id: "install-run"
translation_key: "install-run"
source_locale: "id"
---
## Goal { #install-run }

Install the core software and create the admin account by running the included
installer.
## Prerequisite knowledge

[install-requirements](./install-requirements.md)
## Site prerequisites

[install-prepare](./install-prepare.md)
## Steps

1. If you are using a 1-click install from a hosting provider or demo site, you
    will most likely see some or all of the following screens as part of the
    installation process. If you uploaded the core files manually, to start the
    installer, open a browser and visit the URL that you set up for your hosting.
1. Select a language on the first page of the installer; for example,
    English. You could optionally choose from any of the other listed languages.
    The language files for the chosen language will be downloaded and installed so
    that the rest of the installation process can be finished in the chosen
    language. After choosing a language, click _Save and continue_.
    <img src="/images/install-run-1.png" alt="Choose a language" width="100%" />
1. Select an installation profile. Installation profiles provide site features
    and functions for a specific type of site as a single download containing
    the core software, contributed modules, themes, and pre-defined
    configuration. Core contains two installation profiles. Select the core
    Standard installation profile. Click _Save and continue_.
    <img src="/images/install-run-2.png" alt="Choose an installation profile" width="100%" />
1. The next step in the installer will verify that your system meets the minimum
    requirements. If it does not, you'll be presented with an outline of what
    needs to be corrected in order to proceed. If it does, the installer will
    automatically advance to the next step.
1. Provide details of the database you created in the [install-prepare](./install-prepare.md)
    chapter. Then click _Save and continue_.
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
          <td>Database name</td>
          <td>The custom name given to the database</td>
          <td>drupal8</td>
        </tr>
        <tr>
          <td>Database username</td>
          <td>Username created</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Database password</td>
          <td>Password chosen</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.png" alt="Database configuration form" width="100%" />

1. The next step will display a progress bar under the heading _Installing
    Drupal_. After the installer has completed, it will automatically advance to
    the next step.
    <img src="/images/install-run-4.png" alt="Installation progress bar" width="100%" />
1. The final step is to configure some basic information about your new site.
    Note that the user account you create in this step is the site's admin
    account. See [user-admin-account](./user-admin-account.md) for important information about this unique
    account. You can safely name this account "admin", and make sure to choose a
    secure and unique password.
    Fill in the form with the following information:
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
          <td>Site name</td>
          <td>The name chosen for the site</td>
          <td>Anytown Farmers Market</td>
        </tr>
        <tr>
          <td>Site email address</td>
          <td>The email associated with the site</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>Username</td>
          <td>The designated user's credentials</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Password</td>
          <td>The password chosen</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Confirm password</td>
          <td>Repeat the password</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Email address</td>
          <td>The user's email</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    The remaining fields can likely be left at their default values.
    <img src="/images/install-run-5.png" alt="Configuration form" width="100%" />

1. Click _Save and continue_.
1. You will be redirected to the front page of your new site and you should see
    the message _Congratulations, you installed Drupal!_ displayed at the top of
    the page.
    <img src="/images/install-run-6.png" alt="Installation success" width="100%" />

## Expand your understanding

Check the Status Report to see if there are any problems with the
installation. See [prevent-status](./prevent-status.md).
## Related concepts

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Additional resources

[Drupal.org community documentation page "Create A Database"](https://www.drupal.org/docs/8/install/step-3-create-a-database)

*Attributions*

Written and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
