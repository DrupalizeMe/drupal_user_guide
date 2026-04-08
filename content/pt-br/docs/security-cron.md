---
title: "Configuring Cron Maintenance Tasks"
description: "How to run cron maintenance tasks using the core Automated Cron module, or by running them from outside the site."
id: "security-cron"
translation_key: "security-cron"
source_locale: "pt-br"
---
## Goal { #security-cron }

Check whether cron maintenance tasks are run regularly, and if not, either
install the core Automated Cron module or run cron maintenance tasks from
outside the website.
## Prerequisite knowledge

[security-cron-concept](./security-cron-concept.md)
## Steps

1. Review the _Status report_ (see [prevent-status](./prevent-status.md)) to see when cron
    maintenance tasks were last run.
    If you installed the website using the core Standard installation profile (or
    similar), then cron maintenance tasks might already be running via the
    core Automated Cron module.  By default, these tasks are run about every three
    hours.
1. Choose whether to run cron maintenance tasks using the core Automated Cron
    module, or by other means. The core Automated Cron module might not be suitable
    for some websites because:
    * Each time someone accesses a page on the site, the module checks how long it
      has been since cron maintenance tasks have last run, and then runs them if
      necessary. If no one visits the website for a long time, cron maintenance
      tasks will not be run.
    * Cron maintenance tasks are run after the page has been generated. This means
      there is less time for the tasks to be run before various server timeouts are
      reached (for example, PHP execution timeout). If this happens, the logs (see
      [prevent-log](./prevent-log.md)) will show error messages that cron is unable to complete.
    * There is a small [scalability](https://en.wikipedia.org/wiki/Scalability) cost
      associated with the core Automated Cron module. This is because one of the web
      server's processes is occupied (and can't serve other web pages) until the
      cron maintenance tasks are complete.
1. If you want to use the core Automated Cron module, first make sure it is
    installed (it is installed with the core Standard install profile; see
    [config-install](./config-install.md) if it is not installed).
    Next, configure the module to control how frequently cron maintenance tasks are
    run. In the _Manage_ administrative menu, navigate to _Configuration_ >
    _System_ > _Cron_ (_admin/config/system/cron_). Select the desired interval from
    the _Run cron every_ field under _Cron settings_, and click _Save
    configuration_.
    ![Configure the core Automated Cron module](/images/security-cron.png)
1. If you want to run cron maintenance tasks from outside the website, uninstall
    the core Automated Cron module (see [config-uninstall](./config-uninstall.md)). Next, find the
    cron URL. This URL is shown in the _Status report_ (see [prevent-status](./prevent-status.md)), and
    in the _Cron_ administration page (see previous step). The URL looks
    like this:
    _http://www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Whenever this URL is visited, cron maintenance tasks will run. Set up one of
    the following schedulers to access this URL regularly:
    * [The Cron daemon](https://www.drupal.org/node/23714) (Linux, OS X, Solaris,
      BSD)
    * [Scheduled Tasks](https://www.drupal.org/node/31506) (Windows)
    * A cron SASS provider (software as a service)
    * A cron manager provided by your web hosting provider (see the documentation
      provided by your provider)
## Related concepts

[security-concept](./security-concept.md)
## Videos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Configuring Cron Maintenance Tasks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Additional resources

* [Drush page "Running Drupal cron tasks from Drush"](http://docs.drush.org/en/master/cron/)
* [_Drupal.org_ community documentation page "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Attributions*

Written and edited by [Dave Hansen-Lange](https://www.drupal.org/u/dalin) at
[Advomatic](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix),
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
