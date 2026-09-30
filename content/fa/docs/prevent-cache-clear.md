---
title: "پاکسازی حافظه موقت"
description: "چگونگی پاکسازی حافظه موقت با استفاده از Drush یا رابط کاربری."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "fa"
---
## هدف { #prevent-cache-clear }

پاکسازی یا بازسازی حافظه موقت داخلی سایت برای بروزرسانی با آخرین تغییرات داده‌ای، با استفاده از رابط کاربری یا Drush.
## دانش پیشنیاز

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## پیشنیازهای سایت

اگر برای پاکسازی حافظه موقت از Drush استفاده می‌کنید، [install-tools](./install-tools.md) را مشاهده کنید.
## گام‌ها

برای پاکسازی حافظه موقت می‌توانید از رابط مدیریتی یا Drush استفاده کنید.
### استفاده از رابط مدیریتی

1. از منوی _مدیریت_ به مسیر _پیکربندی_ > _توسعه_ > _عملکرد_ (_admin/config/development/performance_) بروید.
1. روی _پاکسازی حافظه موقت_ کلیک کنید.
1. پیامی مبنی بر پاکسازی حافظه موقت در بالای صفحه نمایش می‌یابد.

### استفاده از Drush

می‌توانید از دو دستور استفاده کنید:

* با استفاده از دستور `drush cache-rebuild` اقدام به پاکسازی و بازسازی تمام حافظه موقت یک سایت کنید. پس از اجرای این دستور، پیام "Cache rebuild complete." را مشاهده می‌کنید.
* با استفاده از دستور `drush cc` فهرستی از تمام داده‌های موجود در حافظه موقت را مشاهده کرده و یکی را برای پاکسازی انتخاب کنید. اجرای این دستور خروجی مشابه زیر را خواهد داشت:
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

با وارد کردن شماره متناسب با هر حافظه موقت، یکی را انتخاب کنید. برای ادامه "Enter" کنید.
## منابع مطالعاتی

[صفحه "پاکسازی یا بازسازی حافظه موقت دروپال" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*مشارکت‌کنندگان*

اقتباس و ویرایش توسط [Joe Shindelar](https://www.drupal.org/u/eojthebrave) و [Jack Haas](https://www.drupal.org/u/jerseycheese) از [صفحه "پاکسازی یا بازسازی حافظه موقت دروپال" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)

کپی‌رایت ۲۰۱۷-۲۰۰۰ توسط مشارکت‌کنندگان انفرادی در  [مستندات جامعه کاربری دروپال](https://www.drupal.org/documentation)
