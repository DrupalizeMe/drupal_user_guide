---
title: "Concept: Additional Tools"
description: "Overview of additional tools that help site builders conveniently create sites."
id: "install-tools"
translation_key: "install-tools"
source_locale: "en"
---
## What tools are available for site builders? { #install-tools }

There are several additional tools available that help you create sites faster,
more accurately and with less effort.

- **Drush:** See below for more about command-line tools.
- **Git:** See below for more about version control tools.
- **Composer:** See below for more about Composer.
- **Devel:** The [contributed Devel module](https://www.drupal.org/project/devel) helps with development tasks such as debugging and inspecting code, and generating dummy content.
## What are command-line tools?

Command-line tools provide an alternative to using the administrative interface
for various operations on your site. Many site builders and maintainers have
invested the time to install and learn a command-line tool, because:

* Administrative tasks are typically faster and less tedious when performed at
the command line than in the user interface.
* You can write scripts that combine site-related commands with other commands
on the server, to automate more complicated tasks.
* Command-line tools provide additional functionality not available via the
administrative interface; for example, running database queries.

The most popular tool is [Drush](https://www.drush.org/). Drush is a command-line
interface and scripting tool that can speed up common tasks for developers, site
builders, and DevOps teams. This guide documents commands from the latest stable
version of Drush for many tasks; it does not document commands for older
versions of Drush, but you can look them up in the Drush documentation.

To use these tools, you will need to have command-line terminal access to the
environment where your website will be hosted, and you will need to install
Composer first in order to install Drush.

To install Drush first make sure your project is using Composer to manage
dependencies. See below for more about Composer. Then use the following
commands:

```text
# Install Drush
composer require drush/drush
```
## What is a version control system?

A version control system is software that keeps copies of files and revision
history in a _repository_, and allows you to add, delete, and update files. For
a web site project, revision control software can help you:

* Test locally before deploying files on the live site
* Look at, compare with, and revert to previous versions of files
* Look at the added, changed, or deleted files before you _commit_ the changes
(update the repository)
* Merge changes from different team members together
* Keep files and configuration synchronized between local and live sites

There are many proprietary and open-source version control systems to choose
from; a popular choice is [Git](https://git-scm.com/), which is open-source
software that runs on most computer platforms. Git is a _distributed_ version
control system that allows you to have one or more copies of your repository,
which allows you to commit changes to a copy and then only _push_ them to the
repository you've designated as _canonical_ when you're ready to share them with
others. The canonical git repository can be hosted on your local computer or a
server at your company, but many software projects and individuals host their
Git repositories using third-party services provided by
[GitLab](https://about.gitlab.com/) or [GitHub](https://github.com/).
## What is Composer used for?

[Composer](https://getcomposer.org/) is a tool for managing PHP dependencies,
where the developer specifies what version of each external library is needed,
and Composer manages the process of downloading and installing the libraries.

[Composer can be installed](https://getcomposer.org/doc/00-intro.md) on the
local development environment or webserver but is often already available in
[Drupal development tool kits](https://www.drupal.org/docs/develop/development-tools/development-tools-overview).

The core software is a primary user of Composer, because it makes use of several
externally-developed software libraries, which must be downloaded and installed
in order for the core software to work. When you install the core software, you
either need to download an archive that contains compatible versions of the
external libraries, or you need to run Composer to download the external
libraries after the initial download. The Drush command-line tool is also
downloaded using Composer.

Some contributed modules also make use of externally-developed software
libraries; for example, a Facebook integration module might require Facebook's
integration library to be installed for the module to work, and a geographical
module might make use of a standard library of geographical functions. To
install a module with external dependencies, you will need to run Composer.
## What tools are available for module and theme developers?

In addition to the site builder tools mentioned above, the following tools are
useful for module and theme developers.

- **Drush:** [Drush](https://www.drush.org/) is a command-line tool that can be used to generate boilerplate code and interact with a Drupal site. It can generate, for example, block or form code, install modules and themes, clear the cache, and create dummy content.
- **Coder:** [Coder](https://www.drupal.org/project/coder) is a command-line tool that checks if your modules and themes comply with coding standards and other best practices. It can also fix coding standard violations.
- **Browser debugging tools:** Web browsers such as Firefox and Chrome include tools that allow viewing, editing, debugging, and monitoring CSS, HTML, and JavaScript. You can open the debugging pane or window by right-clicking the mouse in an area of your window, and choosing "Inspect" or "Inspect element".
## Related topics

[install-composer](./install-composer.md)
## Additional resources

* [_Drupal.org_ community documentation page "Development tools overview"](https://www.drupal.org/docs/develop/development-tools/development-tools-overview)
* [_Drupal.org_ community documentation page "Using Composer with Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)
* [Wikipedia article "Distributed version control"](https://en.wikipedia.org/wiki/Distributed_version_control)

*Attributions*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix)
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), and [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at [Drupalize.Me](https://drupalize.me). Some text adapted from
["Introduction to Git"](https://www.drupal.org/node/991716),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
