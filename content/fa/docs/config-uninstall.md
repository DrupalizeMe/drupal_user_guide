---
title: "حذف افزونه‌های اضافی"
description: "چگونگی حذف افزونه‌ها برای کاهش بار سایت."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "fa"
---
## هدف { #config-uninstall }

برای کاهش بار سایت، افزونه‌های داخلی Search و History به همراه Activity Tracker را حذف کنید، اگر در قسمت [config-install](./config-install.md) نصب کرده باشید.
## دانش پیشنیاز

[understanding-modules](./understanding-modules.md)
## پیشنیازهای سایت

* حداقل باید یک افزونه اضافی در سایت داشته باشید، مانند Search.
* اگر می‌خواهید از Drush برای حذف افزونه‌ها استفاده کنید، ابتدا باید آن را نصب کنید. [install-tools](./install-tools.md) را مشاهده کنید.
## گام‌ها

برای حذف افزونه‌ها، می‌توانید از رابط مدیریتی یا Drush استفاده کنید.
### استفاده از رابط مدیریتی

1. از منوی _مدیریت_ به مسیر _توسعه_ > _حذف_ (_admin/modules/uninstall_) بروید. این صفحه فهرستی از افزونه‌های قابل حذف را نمایش می‌دهد.
1. افزونه‌هایی که قصد حذف آن‌ها را دارید (Search، History و Activity Tracker) انتخاب کنید. روی _حذف_ در انتهای صفحه کلیک کنید.
    <img src="/images/config-uninstall_check-modules.png" alt="حذف افزونه" width="100%" />

