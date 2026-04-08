---
title: "Clearing the Cache"
description: "How to clear the cache using Drush or the user interface."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "ja"
---
## Goal { #prevent-cache-clear }

Clear or rebuild your site's internal caches to ensure they are up-to-date with
the most recent data, using the user interface or Drush.
## Prerequisite knowledge

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Site prerequisites

If you want to use Drush to clear the cache, Drush must be installed. See
[install-tools](./install-tools.md).
## Steps

You can use the administrative interface or Drush to clear the cache.
### Using the administrative interface

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Performance_ (_admin/config/development/performance_).
1. Click _Clear all caches_.
1. A message saying the cache has been cleared appears at the top of
    the page.
### Using Drush

You can use one of two commands:

* Use the command `drush cache-rebuild` to clear and rebuild all cached data
for a site. After running this command, you will see the output message "Cache
rebuild complete."
* Use the command `drush cc` to see a list of individual caches and then
choose the specific cache you would like to clear. Running this command should
produce output like the following:
```text
> drush cc
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

Choose a cache to clear by entering the number associated with that cache. Press
"Enter" to continue.
## Additional resources

[_Drupal.org_ community documentation page "Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Attributions*

Adapted and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
and [Jack Haas](https://www.drupal.org/u/jerseycheese) from
["Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
