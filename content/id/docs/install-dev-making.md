---
title: "Making a Development Site"
description: "How to make a copy of a live site for development purposes."
id: "install-dev-making"
translation_key: "install-dev-making"
source_locale: "id"
---
## Goal { #install-dev-making }

Make a copy of a site that you can use to develop new features and test updates
on.
## Prerequisite knowledge

[install-dev-sites](./install-dev-sites.md)
## Site prerequisites

* You have a live, developed site that you would like to make a copy of for
development purposes.
* If you want to use Drush for some of the steps in this task, Drush must be
installed. See [install-tools](./install-tools.md).
## Steps

1. Follow the steps in [install-prepare](./install-prepare.md), so that you have hosting set up for
    your development site, you know where the web root is for your development site,
    and you have an empty database and database user for your development site to
    use.
1. Make a database dump file from your live site's database. Try one of the
    following methods:
    * If you are using MySQL as your database, and your live site's server has
      phpMyAdmin installed (it is available from many hosting control panels),
      use the _Export_ tab in phpMyAdmin to export in _SQL_ format. Using _gzip_
      compression on the output file is suggested, to reduce the file size.
    * If you are using MySQL and have access to the command line, use this
      command (substituting in your site's database name, user name, and password):
    ```text
    mysqldump -u USERNAME -p'PASSWORD' DATABASENAME > BACKUPFILE.sql
    ```
    * If you prefer to use Drush, use this command:
    ```text
    drush sql-dump > BACKUPFILE.sql
    ```
    * Use the [contributed Backup and Migrate module](https://www.drupal.org/project/backup_migrate)
      from within your live site. See [extend-module-install](./extend-module-install.md) for instructions on
      installing contributed modules.
    You now have a database dump stored in the file _BACKUPFILE.sql_. For security
    reasons, avoid storing this file on your hosting server anywhere under the
    Drupal site root. This will prevent others from getting a copy of your
    database.
1. Copy all of the files from the web root of your live site to the web root of
    your development site.
1. Edit the _sites/default/settings.php_ file under your development site's
    top-level directory in a plain-text editor. Find the lines near the end that
    contain the database name, database username, and database password, and update
    them to the information about the development site database you set up. The
    lines look something like this (before editing):
    ```text
    $databases['default']['default'] = array (
      'database' => 'live_site_database_name',
      'username' => 'live_site_database_username',
      'password' => 'live_site_database_password',
    ```
1. Check whether your _settings.php_ file has the following setting; if yes, then
    you will need to edit this to point to your development site URL instead of your
    production site URL:
    ```text
    $settings['trusted_host_patterns']
    ```
1. Import the database dump file you created, into the development site's
    database. Try one of the following methods:
    * If you are using MySQL as your database, and your live site's server has
      PHPMyAdmin installed (it is available from many hosting control panels),
      use the _Import_ tab in PHPMyAdmin. You may find that you have to restart the
      import a few times, if your database was large.
    * If you are using MySQL and have access to the command line, use this
      command (substituting in your site's database name, user name, and password;
      if you made a gzip-compressed backup file, you will also need to uncompress it
      first):
    ```text
    mysql -u USERNAME -pPASSWORD  DATABASE_NAME < BACKUPFILE.sql
    ```
    * If you prefer to use Drush, use this command:
    ```text
    drush sql-query --file=BACKUPFILE.sql
    ```
1. If your development and live sites need to have different configuration, then
    you have to use configuration overrides in the _settings.php_ file. The
    _$config_ variable will help you maintain override values separately from the
    standard configuration data. For instance, you might want the site name to be
    "Anytown Farmers Market" on the production site, but "Development Site for
    Anytown Farmers Market" on the development site. To do that, you could have the
    production value in the site configuration (in the database), and on the
    development site, in the settings.php file, you would need to have:
    ```text
    $config['system.site']['name'] = "Development Site for Anytown Farmers Market";
    ```
## Expand your understanding

* Verify that the development site is working correctly.
* Log in to the development site as an administrator, and clear the cache. See
[prevent-cache-clear](./prevent-cache-clear.md).
* [extend-deploy](./extend-deploy.md)
## Additional resources

* [_Drupal.org_ community documentation page "Backing up a site"](https://www.drupal.org/docs/7/backing-up-and-migrating-a-site/backing-up-a-site)
* [_Drupal.org_ community documentation page "Create a Test Site"](https://www.drupal.org/docs/develop/local-server-setup/how-to-create-a-test-site)

*Attributions*

Written and edited by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me), and
[Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
