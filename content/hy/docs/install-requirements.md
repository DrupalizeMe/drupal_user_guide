---
title: "Concept: Server Requirements"
description: "Overview of server requirements for installing and running the core software."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "hy"
---
## What are the requirements for running the core software? { #install-requirements }
### Disk space

The total amount of disk space needed for your site is not a fixed amount, as it
depends on your site. The base files for the core software take up about 100 MB
on the web server. You will need more space if you install additional modules or
themes, and you'll also need space for media, backups, and other files generated
by and uploaded to your site. The database also uses disk space, although that
is typically not in the same area (and in some cases, not even on the same
server) as that used by the site files.
### PHP

PHP 7.3 or a higher PHP 7 version. PHP must be set up with a minimum memory size
of 64MB; if you are running multiple modules on your site or using
memory-intensive PHP-based command-line tools (such as Composer), considerably
more memory than that may be needed.

Certain PHP extensions are also required; the exact list of required PHP
extensions depends on how you install the core software and which modules you
are using on your site. Generally, hosting service providers have installed all
the PHP extensions you will need. If you are self-hosting or running your site
on your local computer, you will get error messages during installation if any
required PHP extensions are missing, and should be able to install them and
continue.
### Web server

- **Apache (Recommended):** Apache is the most commonly used web server. The core software will work on Apache 2.4.7 or higher hosted on UNIX/Linux, OS X, or Windows that have the Apache mod_rewrite module installed and enabled. The Apache VirtualHost configuration must contain the directive _AllowOverride All_ to allow the _.htaccess_ file to be used.
- **PHP Local Server:** You can temporarily run a local demo site on your computer using just PHP, without installing web server software.
- **Nginx:** Nginx is a commonly used web server that focuses on high concurrency, performance and low memory usage. The core software will work on Nginx 0.7 or greater hosted on UNIX/Linux, OS X, or Windows. The ngx_http_rewrite_module must be installed and enabled.
- **Microsoft IIS:** Microsoft IIS is a web server and set of feature extension modules for use with Microsoft Windows. The core software will work with IIS 5, 6, 7, 8, or 10 if PHP is configured correctly. Because clean URLs are required, you may need to use a third party product. For IIS 7/8, you can use the Microsoft URL Rewrite module or a third party solution.
### Database

Use one of the following databases:

* MySQL - 5.7.8 (MariaDB 10.3.7, Percona 5.7.8) or higher with an
InnoDB-compatible primary storage engine
* PostgreSQL - 10.0 or higher with the pg_trgm extension
* SQLite - 3.26 or higher. Temporary local demo sites use SQLite, which is
distributed as part of PHP and doesn't require installing separate database
software, but make sure your version of PHP has the minimum SQLite included.
## Additional resources

* [_Drupal.org_ community documentation page "System requirements"](https://www.drupal.org/docs/system-requirements)
* [PHP Runtime Configuration (PHP memory limit and other settings)](https://secure.php.net/manual/en/configuration.php)
* [Installing a new Drupal application on your local machine](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Creating a Drupal demo application for evaluation purposes](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Attributions*

Adapted by [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987), and
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) from
["System requirements"](https://www.drupal.org/docs/system-requirements),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
