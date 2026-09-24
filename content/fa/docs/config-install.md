---
title: "نصب یک افزونه"
description: "چگونگی نصب یک افزونه داخلی یا خارجی با استفاده از رابط مدیریتی و Drush"
id: "config-install"
translation_key: "config-install"
source_locale: "fa"
---
## هدف { #config-install }

نصب یک افزونه داخلی یا خارجی که فایل‌های آن هم‌اکنون در وبسایت قرار دارند، از طریق رابط مدیریتی یا Drush
## دانش پیشنیاز

[understanding-modules](./understanding-modules.md)
## پیشنیازهای سایت

اگر می‌خواهید از Drush برای نصب افزونه‌ها استفاده کنید، ابتدا باید آن را نصب کنید. [install-tools](./install-tools.md) را مشاهده کنید.
## گام‌ها

برای نصب افزونه‌ها می‌توانید از رابط مدیریتی یا Drush استفاده کنید.
### استفاده از رابط مدیریتی

1. از منوی _مدیریت_ به مسیر _توسعه_ (_admin/modules_) بروید. صفحه _توسعه_ فهرستی از تمام افزونه‌های موجود را نمایش می‌دهد.
1. افزونه یا افزونه‌هایی که می‌خواهید نصب شوند را انتخاب کنید. برای نمونه، افزونه Activity Tracker را انتخاب کنید.
    <img src="/images/config-install-check-modules.webp" alt="فعال‌سازی افزونه Activity Tracker" width="100%" />
1. روی _نصب_ کلیک کنید. افزونه‌های انتخاب شده نصب می‌گردند.

### استفاده از Drush

1. از منوی _مدیریت_ به مسیر _توسعه_ (_admin/modules_) بروید. صفحه _توسعه_ فهرستی از تمام افزونه‌های موجود را نمایش می‌دهد.
1. با جستجو در قسمت اطلاعات افزونه، نام ماشینی آن را پیدا کنید. برای نمونه، نام ماشینی افزونه Activity Tracker برابر است با _tracker_.
1. دستور زیر را برای نصب افزونه اجرا کنید:
    ```text
    drush en tracker
    ```

## درک خود را گسترش دهید

اگر تاثیر تغییرات اخیر در سایت را مشاهده نکردید، شاید نیاز باشد حافظه موقت را پاکسازی کنید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.
## منابع مطالعاتی

[Drush](http://www.drush.org)

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix) و  [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
