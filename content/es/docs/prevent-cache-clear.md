---
title: "Clearing the Cache"
description: "How to clear the cache using Drush or the user interface."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "es"
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

You can use the administrative interface or Drush to clear the cache. You can
also use the rebuild script or Drush to do a more complete cache rebuild.
### Using the administrative interface to clear the cache

1. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _Development_ > _Performance_ (_admin/config/development/performance_). If you
    cannot access this page in the administrative interface, use one of the other
    methods to clear or rebuild the cache.
1. Click _Clear all caches_.
1. A message saying the cache has been cleared appears at the top of
    the page.
1. If this doesn't resolve the problem that caused you to want to clear the
    cache, try a rebuild instead.
### Using the rebuild script

1. Open _settings.php_ (_/sites/default/settings.php_) in any plain text
    editor. Add this line to the end of the file and save it:
    ```text
    $settings['rebuild_access'] = TRUE;
    ```
1. Visit _http://www.example.com/core/rebuild.php_ in your browser (where
    _www.example.com_ is your site's URL). After a short pause, you should be
    redirected to the home page of your site, and the cache should be rebuilt.
1. Open _settings.php_ (_/sites/default/settings.php_) in a text editor. Find the
    line you added with _$settings['rebuild_access']_, remove this line, and save
    the file.
### Using Drush to rebuild or clear the cache

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
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="Clearing the Cache" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

[_Drupal.org_ community documentation page "Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Attributions*

Adapted and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
and [Jack Haas](https://www.drupal.org/u/jerseycheese) from
["Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
copyright 2000-2026 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
