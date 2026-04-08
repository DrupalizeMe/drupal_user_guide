---
title: "دانلود و نصب یک قالب از _Drupal.org_"
description: "چگونگی دانلود و نصب یک قالب از Drupal.org با استفاده از رابط گرافیکی یا Drush."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "fa"
---
## هدف { #extend-theme-install }

دانلود و نصب یک قالب از _Drupal.org_.
## دانش پیشنیاز

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## پیشنیازهای سایت

* اگر قصد نصب قالب‌ها از طریق رابط مدیریتی وبسایت را دارید، افزونه داخلی Update Manager باید نصب گردد. برای اطلاعات بیشتر درباره نصب قالب‌ها، [config-install](./config-install.md) را مشاهده کنید.
* اگر قصد استفاده از Drush را دارید، [install-tools](./install-tools.md) را مشاهده کنید.
## گام‌ها

برای نصب یک قالب خارجی، می‌توانید از رابط مدیریتی یا Drush استفاده کنید. اگر قصد نصب یک قالب سفارشی را دارید و پیام _نصب افزونه‌ها و قالب‌ها نیازمند دسترسی FTP به سرور شما می‌باشد_ نمایش یافت، یا گام‌های پیش رو برای دانلود و استفاده از قالب‌های خارجی به کار شما نمی‌آید، [extend-manual-install](./extend-manual-install.md) را مشاهده کنید. اگر قصد نصب قالب خارجی را دارید که وابستگی‌های خود را با استفاده از Composer مدیریت می‌کند، [install-composer](./install-composer.md) را مشاهده کنید. در هر کدام از این موارد، به گام ۷ از این راهنما مراجعه کرده تا فرآیند نصب قالب کامل شود.
### استفاده از رابط مدیریتی

1. در صفحه پروژه _Mayo_ وافع در _https://www.drupal.org/project/mayo_ ، به قسمت _دانلودها_ در انتهای صفحه بروید.
1. از نشانی پیوند _tar.gz_ رونوشت بگیرید.
    ![یافتن نشانی یک قالب](/images/extend-theme-install-download.png)
1. از منوی _مدیریت_ به مسیر _ظاهر_ (_admin/appearance_) بروید.
1. روی _نصب قالب جدید_ کلیک کنید. صفحه _نصب قالب جدید_ نمایش می‌یابد.
    ![نصب یک قالب](/images/extend-theme-install-page.png)
1. در فیلد _نصب از یک نشانی_ محتوای پیوند موجود را قرار دهید. این مقدار شبیه به زیر است:
    `https://ftp.drupal.org/files/projects/mayo-8.x-1.3.tar.gz`.
1. روی _نصب_ کلیک کنید تا قالب جدید در سرور قرار بگیرد. فایل‌ها در دایرکتوری _themes_ قرار می‌گیرند.
1. روی _فعال‌سازی قالب‌های تازه اضافه شده_ کلیک کنید تا به صفحه _نمایش_ بازگردید. اگر با شیوه دستی اقدام به قرار دادن فایل‌ها روی سرور کرده‌اید، از منوی _مدیریت_ به مسیر _ظاهر_ (_admin/appearance_) بروید و از آنجا ادامه دهید.
1. قالب جدید زیر _قالب‌های نصب‌نشده_ را شناسایی کرده و برای استفاده از آن روی _نصب و تنظیم به عنوان پیشفرض_ کلیک کنید. اکنون تمام صفحات غیر-مدیریتی سایت از این قالب استفاده می‌کنند.
    <img src="/images/extend-theme-install-appearance-page.png" alt="قالب‌های نصب‌نشده در صفحه نمایش" width="286px" />

### استفاده از Drush

1. نام پروژه قالبی که قصد نصب آن را دارید پیدا کنید، این نام قسمت انتهایی نشانی صفحه پروژه است. برای نمونه، اگر نشانی پروژه _https://www.drupal.org/project/mayo_ باشد، آنگاه نام پروژه برابر "mayo" است.
1. با استفاده از نام پروژه (برای نمونه `mayo`)، دستورات زیر را اجرا کنید:
    ```text
    drush dl mayo
    drush en mayo
    drush config-set system.theme default mayo
    ```
1. توضیحات روی صفحه را دنبال کنید.

## درک خود را گسترش دهید

* از منوی _مدیریت_ به مسیر _ظاهر_ (_admin/appearance_) رفته و هر قالبی که استفاده نمی‌کنید را غیرفعال کنید.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* اگر تاثیر این تغییرات را در سایت خود مشاهده نمی‌کنید، ممکن است لازم باشد حافظه موقت را پاکسازی نمایید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Joe Shindelar](https://www.drupal.org/u/eojthebrave) در [Drupalize.Me](https://drupalize.me) و [Boris Doesborgh](https://www.drupal.org/u/batigolix)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
