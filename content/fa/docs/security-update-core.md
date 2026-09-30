---
title: "بروزرسانی دروپال"
description: "چگونگی بروزرسانی دروپال با استفاده از رابط مدیریتی یا Drush."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "fa"
---
## هدف { #security-update-core }

بروزرسانی دروپال با استفاده از رابط مدیریتی یا Drush.
## پیشنیازهای سایت

* اگر قصد استفاده از Drush را دارید، [install-tools](./install-tools.md) را مشاهده کنید.
* اگر سایت شما در دسترس عموم قرار دارد، ابتدا باید این فرآیند را در یک سایت توسعه آزمایش سپس به سایت اصلی منتقل کنید. [install-dev-making](./install-dev-making.md) را مشاهده کنید.
## گام‌ها

1. یک پشتیبان کامل از سایت خود بگیرید. به [prevent-backups](./prevent-backups.md) مراجعه کنید.
1. فایل _settings.php_ (_/sites/default/settings.php_) را در یک ویرایشگر متن ساده باز کنید. خط مربوط به متغیر _$settings['update_free_access']_ را پیدا کنید. به صورت پیشفرض مقدار "FALSE" را دارد، بنا بر دلایل امنیتی. تنظیم آن را به "TRUE" تغییر دهید:
    ```text
    $settings['update_free_access'] = TRUE;
    ```
1. هر گونه تکنیک caching از جمله memcache یا varnish که نرم‌افزار از آن استفاده می‌کند را غیرفعال کنید.
1. سایت را در حالت نگهداری قرار دهید. [extend-maintenance](./extend-maintenance.md) را مشاهده کنید.
1. اگر برای مدیریت وابستگی‌ها از Composer یا Git استفاده می‌کنید، شش گام بعدی را نادیده گرفته و در عوض [install-composer](./install-composer.md) را به منظور دانلود فایل‌های بروزرسانی مشاهده کنید. با گام _update.php_ ادامه دهید.
1. فایل بایگانی tar.gz یا zip مربوط به آخرین نسخه از انتشار دروپال ۸ را از صفحه [دانلود دروپال](https://www.drupal.org/project/drupal) دریافت کنید. به منظور چگونگی یافتن آخرین نسخه [install-prepare](./install-prepare.md) را مشاهده کنید.
1. فایل بایگانی را در سرور میزبانی سایت خود آپلود کنید.
1. محتویات فایل بایگانی را در یک دایرکتوری موقت از سرور قرار دهید (باید خارج از مسیر اصلی سایت باشد). مدیر فایل سرویس میزبانی شما باید روشی برای اینکار داشته باشد. اگر به ترمینال سرور (لینوکس) خود دسترسی دارید می‌توانید از دستور زیر استفاده کنید:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. همچنین می‌توانید با استفاده از Drush عملیات دانلود و استخراج فایل‌ها را با رفتن به یک دایرکتوری موقت از سرور به صورت زیر انجام دهید:
    ```text
    drush dl drupal
    ```
1. در دایکتوری میزبانی سایت خود دایرکتوری‌های _core_ و _vendor_ همراه با تمام فایل‌هایی که درون یک دایرکتوری فرزند نیستند را پاک کنید از جمله _.htaccess، composer.json و autoload.php_. فایل‌های سفارشی شده را پاک نکنید چرا که ممکن است تغییرات اعمال شده در آن‌ها را از دست بدهید.
1. دایرکتوری‌های _core_ و _vendor_ به همراه تمام فایل‌هایی که از گام قبلی پاک کردید را از دایرکتوری موقت به دایرکتوری سایت خود انتقال دهید.
1. با یکی از روش‌های زیر اسکریپت _update.php_ را اجرا کنید:
    * به نشانی _http://www.example.com/update.php_ در مرورگر خود بروید (به صورتی که _www.example.com_ نشانی سایت شما است). روی _ادامه_ در اولین صفحه کلیک کنید تا عملیات بروزرسانی انجام شود.
    * دستور `drush updb` را از Drush اجرا کنید.
1. اگر خطا یا هشداری دریافت کردید، اسکریپت _update.php_ را مجدد اجرا کنید تا تمام بروزرسانی‌ها اعمال شوند.
1. فایل _settings.php_ (_/sites/default/settings.php_) را در یک ویرایشگر متن ساده باز کنید. خط مربوط به متغیر _$settings['update_free_access']_ را پیدا کنید. تنظیم آن را به "FALSE" تغییر دهید:
    ```text
    $settings['update_free_access'] = FALSE;
    ```
1. روی _صفحات مدیریتی_ کلیک کنید تا به قسمت مدیریتی سایت خود بازگردید.
1. سایت را از حالت نگهداری خارج کنید. [extend-maintenance](./extend-maintenance.md) را مشاهده کنید.
1. حافظه موقت را پاکسازی کنید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.
1. هر گونه تکنیک caching که در گام ۳ غیرفعال کرده‌اید را مجدد فعال کنید.
1. اکنون سایت شامل نسخه بروزرسانی شده است و می‌توانید اطلاعات مربوط به آن را از صفحه _گزارش وضعیت_ بازبینی کنید ([prevent-status](./prevent-status.md) را مشاهده کنید).

## درک خود را گسترش دهید

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## موضوعات مرتبط

[prevent-status](./prevent-status.md)
## منابع مطالعاتی

* [صفحه "دانلود دروپال" در _Drupal.org_](https://www.drupal.org/project/drupal)
* [صفحه "بازسازی رجیستری" در _Drupal.org_](https://www.drupal.org/project/registry_rebuild)
* فایل _/core/UPDATE.txt_ از نصب دروپال.

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Surendra Mohan](https://www.drupal.org/u/surendramohan)، [Boris Doesborgh](https://www.drupal.org/u/batigolix) و [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
