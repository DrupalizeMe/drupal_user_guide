---
title: "Preparing to Install"
description: "How to download the core software and satisfy prerequisites for installation."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "hy"
---
## Goal { #install-prepare }

Download the core software, and handle any required prerequisites.
## Prerequisite knowledge

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* How to install and configure server software (if installing on your own
computer)
* How to set up hosting for a generic web site
* How to create a database
## Site prerequisites

Server software must be installed on the computer where you plan to host your
site. See [install-requirements](./install-requirements.md).

Depending on how you plan to download the core software, you may need to install
additional software tools first. See [install-decide](./install-decide.md) and [install-tools](./install-tools.md).
## Steps

1. Choose methods for downloading and installing the core software, from those
    listed in [install-decide](./install-decide.md). The rest of these instructions apply to the
    Composer and manual download options and the interactive installer; if you chose
    other options, the software should be installed for you.
1. Set up a URL and hosting for your site on the server. Verify that the hosting
    is working by putting a simple HTML file in the web root directory of the
    hosting, and visiting the URL for your site.
1. Create a database, along with a database user account with full access.
1. Download the core software files to the web root directory, using the method
    you decided on. See [install-decide](./install-decide.md) for links to instructions.
## Expand your understanding

See [install-run](./install-run.md) to run the interactive installer.

Alternatively, you can use the following Drush command, from inside the
directory that you downloaded the software to, where _DB_NAME_, _DB_USER_ and
_DB_PASS_ are your database's credentials:

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Preparing to Install" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[Drush](http://www.drush.org)

*Attributions*

Written and edited by [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
