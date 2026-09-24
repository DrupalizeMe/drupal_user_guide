---
title: "دانلود و نصب یک افزونه از _Drupal.org_"
description: "چگونگی دانلود و نصب یک افزونه از Drupal.org با استفاده از رابط مدیریتی یا Drush."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "fa"
---
## هدف { #extend-module-install }

دانلود و نصب [افزونه خارجی Admin Toolbar](https://www.drupal.org/project/admin_toolbar) که به شما اجازه می‌دهد به راحتی در میان رابط مدیریتی وبسایت پیمایش کنید.
## دانش پیشنیاز

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## پیشنیازهای سایت

* اگر قصد نصب افزونه‌ها از طریق رابط مدیریتی وبسایت را دارید، افزونه داخلی Update Manager باید نصب گردد. برای اطلاعات بیشتر درباره نصب افزونه‌ها، [config-install](./config-install.md) را مشاهده کنید.
* اگر قصد استفاده از Drush را دارید، [install-tools](./install-tools.md) را مشاهده کنید.
## گام‌ها

برای نصب یک افزونه خارجی، می‌توانید از رابط مدیریتی یا Drush استفاده کنید. اگر قصد نصب یک افزونه سفارشی را دارید و پیام _نصب افزونه‌ها و قالب‌ها نیازمند دسترسی FTP به سرور شما می‌باشد_ نمایش یافت، یا گام‌های پیش رو برای دانلود و استفاده از افزونه‌های خارجی به کار شما نمی‌آید، [extend-manual-install](./extend-manual-install.md) را مشاهده کنید. اگر قصد نصب افزونه خارجی را دارید که وابستگی‌های خود را با استفاده از Composer مدیریت می‌کند، [install-composer](./install-composer.md) را مشاهده کنید. در هر کدام از این موارد، به گام ۷ از این راهنما مراجعه کرده تا فرآیند نصب افزونه کامل شود.
### استفاده از رابط مدیریتی

1. در صفحه پروژه _Admin Toolbar_ وافع در _https://www.drupal.org/project/admin_toolbar_ به قسمت _دانلودها_ در انتهای صفحه بروید.
1. از نشانی پیوند _tar.gz_ رونوشت بگیرید.
    ![یافتن نشانی یک افزونه](/images/extend-module-install-download.webp)
1. از منوی _مدیریت_ به مسیر _توسعه_ (_admin/modules_) بروید. صفحه _توسعه_ نمایش داده می‌شود.
1. روی _نصب افزونه جدید_ کلیک کنید. صفحه _نصب افزونه جدید_ نمایش می‌یابد.
    ![نصب افزونه با استفاده از نشانی آن](/images/extend-module-install-admin-toolbar-do.webp)
1. در فیلد _نصب از یک نشانی_ محتوای پیوند موجود را قرار دهید. این مقدار شبیه به زیر است:
    _https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.14.tar.gz_
1. روی _نصب_ کلیک کنید تا افزونه جدید در سرور قرار بگیرد. فایل‌ها در دایرکتوری _modules_ قرار می‌گیرند.
1. روی _فعال‌سازی افزونه‌های تازه اضافه شده_ کلیک کنید تا به صفحه _توسعه_ بازگردید. اگر با شیوه دستی اقدام به قرار دادن فایل‌ها روی سرور کرده‌اید، از منوی _مدیریت_ به مسیر _توسعه_ (_admin/modules_) رفته و از آنجا ادامه دهید.
1. _Admin Toolbar_ را شناسایی و انتخاب کنید.

    برای فعال‌سازی افزونه جدید روی _نصب_ کلیک کنید.

### استفاده از Drush

1. نام پروژه افزونه‌ای که قصد نصب آن را دارید پیدا کنید، این نام قسمت انتهایی نشانی صفحه پروژه است. برای نمونه، اگر نشانی پروژه _https://www.drupal.org/project/admin_toolbar_ باشد، آنگاه نام پروژه برابر "admin_toolbar" است.
1. با استفاده از نام پروژه (برای نمونه `admin_toolbar`)، دستورات زیر را اجرا کنید:
    ```text
    drush dl admin_toolbar
    drush en admin_toolbar
    ```
1. توضیحات روی صفحه را دنبال کنید.

## درک خود را گسترش دهید

* با پیمایش از منوی مدیریتی سایت به قسمت‌های مختلف، اطمینان یابید که [افزونه خارجی Admin Toolbar](https://www.drupal.org/project/admin_toolbar) به درستی کار می‌کند.
* با نصب و پیکربندی [افزونه خارجی Pathauto](https://www.drupal.org/project/pathauto) محتوای سایت خود را به صورت خودکار از نشانی‌های تمیز بهره‌مند سازید. برای اطلاعات بیشتر [content-paths](./content-paths.md) را مشاهده کنید.
* اگر تاثیر این تغییرات را در سایت خود مشاهده نمی‌کنید، ممکن است لازم باشد حافظه موقت را پاکسازی نمایید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.
## منابع مطالعاتی

* [صفحه "افزونه‌های خارجی" در مستندات جامعه‌کاربری _Drupal.org_](https://www.drupal.org/node/340271)
* [صفحه "دانلود و توسعه" در _Drupal.org_](https://www.drupal.org/download)
* [افزونه Admin Toolbar در _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix) و [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
