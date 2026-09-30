---
title: "Concept: Drupal as a Content Management System"
description: "Overview of Drupal and the reasons to choose it as a reliable Content Management System (CMS)."
id: "understanding-drupal"
translation_key: "understanding-drupal"
source_locale: "ca"
---
## What is a Content Management System? { #understanding-drupal }

A content management system (CMS) is a software tool that lets users add,
publish, edit, or remove content from a website, using a web browser on a
smartphone, tablet, or desktop computer. Typically, the CMS software is written
in a scripting language, and its scripts run on a computer where a database and
a web server are installed. The content and settings for the website are usually
stored in a database, and for each page request that comes to the web server,
the scripts combine information from the database and _assets_ (JavaScript
files, CSS files, image files, etc. that are part of the CMS or have been
uploaded) to build the pages of the website.

The combination of the operating system that the CMS runs on, the scripting
language it is written in, the database it stores its information in, and the
web server that runs the scripts to retrieve information and return it to the
site visitor's web browser is known as the _stack_ that the CMS runs on; the
commonly used combination of the Linux operating system, Apache web server,
MySQL database, and PHP scripting language is known as the _LAMP stack_.
## What is Drupal?

Drupal is a flexible CMS based on the LAMP stack, with a modular design allowing
features to be added and removed by installing and uninstalling _modules_, and
allowing the entire look and feel of the website to be changed by installing and
uninstalling _themes_. The base Drupal download, known as Drupal Core, contains
the PHP scripts needed to run the basic CMS functionality, several optional
modules and themes, and many JavaScript, CSS, and image assets. Many additional
modules and themes can be downloaded from the [_Drupal.org_](https://www.drupal.org)
website.

Drupal can also run on other technology stacks:

* The operating system can be Windows or Mac OS instead of Linux.
* The web server can be Nginx or IIS instead of Apache.
* The database can be PostgreSQL or SQLite instead of MySQL, or a
MySQL-compatible replacement such as MariaDB or Percona.

Other operating systems, web servers, and databases can also be made to work;
however, the scripts that the software uses are written in PHP, so that cannot
be changed.
## What are the reasons for using Drupal?

When building a website, you have your choice of using one of the many existing
CMS packages and hosted services, developing your own CMS, or building the site
without using a CMS. Here are some of the reasons you might choose to use
Drupal:

* Building a small, simple site with static HTML pages is not difficult, and you
can get a simple site up very quickly. Setting up a site in a CMS generally
requires more time initially, but brings you the benefits of on-line editing
(easier for less experienced content maintainers), uniformity (harder to
maintain using static HTML for larger sites), and the possibility of more
complex features requiring a database.
* Some CMS software is special-purpose; for instance, there are packages and
hosted services that you can use to build a blog or a club membership
website. Drupal, in contrast, is a general-purpose CMS. If you are building a
special-purpose site, you might choose to use a special-purpose CMS; however, if
your site falls even slightly outside the intended purpose, you will probably be
better off using a general-purpose CMS rather than trying to adapt a
special-purpose CMS.
* Building your own CMS-type software can seem attractive. However, using a
general-purpose CMS like Drupal as a starting point is usually a better idea,
because the basic CMS functionality (such as user accounts and content
management) has thousands of developer hours behind it, including many years of
user testing, bug fixing, and security hardening.
* Some CMS software packages are expensive to purchase a license for. Some are
free or have a free version, but have restrictive licenses that do not allow you
to make modifications and extensions. You might prefer to use a package (like
Drupal) that has a less restrictive software license, and is developed by a
world-wide community. See [understanding-project](./understanding-project.md) for more on this topic.
## Related topics

* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [understanding-project](./understanding-project.md)
## Additional resources

* [The Drupal overview](https://www.drupal.org/docs/8/understanding-drupal-8/overview)
* [_Drupal.org_ page "FAQ" (Frequently Asked Questions)](https://www.drupal.org/about/faq)
* [_Drupal.org_ page "Case Studies"](https://www.drupal.org/case-studies)
* [Wikipedia page "Content management systems"](https://en.wikipedia.org/wiki/Content_management_system)
* [Wikipedia page "Modular design"](https://en.wikipedia.org/wiki/Modular_design)

*Attributions*

Written and edited by [Kristof van Tomme](https://www.drupal.org/u/kvantomme)
at [Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Michael Lenahan](https://www.drupal.org/u/michaellenahan)
at [erdfisch](https://erdfisch.de).
