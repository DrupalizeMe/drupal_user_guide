---
title: "Concept: Cron"
description: "Overview of cron and how it is different from Unix cron."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "en"
---
## What are cron tasks? { #security-cron-concept }

To ensure that your site and its modules continue to function well, a group
of administrative operations should be run periodically. These operations are
called _cron_ tasks. Examples of cron tasks are: checking for module and theme
updates, indexing content for search, or cleaning up temporary files.
## What is the relationship between the site's cron tasks and Unix cron?

Linux/Unix-based operating systems have a cron scheduler that can be used to run
periodic tasks. You can use the server’s cron scheduler to schedule runs of the
site’s cron tasks. Alternatively, you can use the core Automated Cron module to
run tasks. You can check the site’s cron tasks' status in the status report.
## Related topics

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Additional resources

[_Drupal.org_ community documentation page "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Attributions*

Written and edited by
[Diána Lakatos](https://www.drupal.org/u/dianalakatos) at
[Pronovix](https://pronovix.com/),
[Dave Hansen-Lange](https://www.drupal.org/u/dalin) at
[Advomatic](https://www.advomatic.com/),
and [Boris Doesborg](https://www.drupal.org/u/batigolix).
