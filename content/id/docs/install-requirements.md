---
title: "Concept: Server Requirements"
description: "Overview of server requirements for installing and running the core software."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "id"
---
## What are the requirements for running the core software? { #install-requirements }
### Disk space

A minimum installation requires 15 MB. 60 MB is needed for a website with many
contributed modules and themes installed. Keep in mind you need much more for
the database, files uploaded by the users, media, backups, and other files.
### Web server

- **Apache (Recommended):** Apache is the most commonly used web server. The core software will work on Apache 2.x hosted on UNIX/Linux, OS X, or Windows that have the Apache mod_rewrite module installed and enabled. The Apache VirtualHost configuration must contain the directive _AllowOverride All_ to allow the _.htaccess_ file to be used.
- **Nginx:** Nginx is a commonly used web server that focuses on high concurrency, performance and low memory usage. The core software will work on Nginx 1.1 or greater hosted on UNIX/Linux, OS X, or Windows. The ngx_http_rewrite_module must be installed and enabled.
- **Hiawatha:** Hiawatha is a web server with a strong focus on security. It also aims at being easy to use and lightweight. Research performed by independent researchers proves that Hiawatha offers a performance comparable to other web servers under normal conditions, but much better while under attack. URL Toolkit must be installed and configured to rewrite URLs.
- **Microsoft IIS:** Microsoft IIS is a web server and set of feature extension modules for use with Microsoft Windows. The core software will work with IIS 5, IIS 6, or IIS 7 if PHP is configured correctly. Because clean URLs are required, you may need to use a third party product. For IIS 7, you can use the Microsoft URL Rewrite module or a third party solution.
### Database

Use one of the following databases:

* MySQL - 5.5.3 (MariaDB 5.5.20, Percona 5.5.8) or higher with an
InnoDB-compatible primary storage engine
* PostgreSQL - 9.1.2 or higher
* SQLite - 3.4.2 or higher
### PHP

PHP 5.5.9 or higher.
## Additional resources

[_Drupal.org_ community documentation page "System requirements"](https://www.drupal.org/docs/8/system-requirements)

*Attributions*

Adapted by [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky) and
[Brian Emery](https://www.drupal.org/u/bemery987) from
["System requirements"](https://www.drupal.org/docs/8/system-requirements),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
