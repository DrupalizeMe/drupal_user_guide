---
title: "پیکربندی قالب"
description: "چگونگی ویرایش تنظیمات قالب برای بروزرسانی طرح رنگ و افزودن لوگو."
id: "config-theme"
translation_key: "config-theme"
source_locale: "fa"
---
## هدف { #config-theme }

ویرایش تنظیمات قالب پیشفرض Bartik برای تغییر طرح رنگ و افزودن لوگو به سایت.
## دانش پیشنیاز

[understanding-themes](./understanding-themes.md)
## گام‌ها

1. از منوی _مدیریت_ به مسیر _ظاهر_ (_admin/appearance_) بروید.
1. زیرعنوان _قالب‌های نصب‌شده_ می‌توانید Bartik را به عنوان قالب پیشفرض مشاهده کنید. زیر عنوان _Bartik (قالب پیشفرض)_ روی _تنظیمات_ کلیک کنید.
    <img src="/images/config-theme_bartik_settings.webp" alt="قالب پیشفرض، Bartik" width="100%" />
1. زیرعنوان _طرح رنگ_ مقدار مورد نظر برای هر یک از قسمت‌های مشخص شده را تعیین کنید. برای نمونه، از رنگ‌های زیر استفاده کنید:
    <table>
      <thead>
        <tr>
          <th>ناحیه</th>
          <th>رنگ</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>پس‌زمینه سرآیند بالا</td>
          <td>#7db84a (سبز)</td>
        </tr>
        <tr>
          <td>پس‌زمینه سرآیند پایین</td>
          <td>#2a3524 (سبز تیره)</td>
        </tr>
        <tr>
          <td>پس‌زمینه اصلی</td>
          <td>#ffffff (سفید)</td>
        </tr>
        <tr>
          <td>پس‌زمینه نوارکناری</td>
          <td>#f8bc65 (نارنجی روشن)</td>
        </tr>
        <tr>
          <td>حاشیه‌های نوارکناری</td>
          <td>#e96b3c (نارنجی)</td>
        </tr>
        <tr>
          <td>پس‌زمینه انتهای صفحه</td>
          <td>#2a3524 (سبز تیره)</td>
        </tr>
        <tr>
          <td>عنوان و شعار</td>
          <td>#ffffff (سفید)</td>
        </tr>
        <tr>
          <td>رنگ متن</td>
          <td>#000000 (سیاه)</td>
        </tr>
        <tr>
          <td>رنگ پیوند</td>
          <td>#2a3524 (سبز تیره)</td>
        </tr>
      </tbody>
    </table>

    یادداشت: همچنین می‌توانید از چرخ رنگ که در قسمت سمت راست قرار دارد استفاده کنید. کدهای رنگی مخصوص وب به صورت خودکار اضافه می‌شوند.
    <img src="/images/config-theme_color_scheme.webp" alt="مشخصات جدید رنگی برای قالب Bartik" width="100%" />

1. زیرعنوان _تصویر لوگو_ گزینه _استفاده از لوگوی همراه با قالب_ را از حالت انتخاب خارج کنید.
    ![لوگوی جدید در قالب پیشفرض Bartik](/images/config-theme_logo_upload.webp)
1. زیرعنوان _آپلود تصویر لوگو_ یک فایل لوگو انتخاب کرده و در سایت خود آپلود کنید. یادداشت: همچنین می‌توانید از یک لوگوی عمومی برای تمام قالب‌ها در قسمت _ظاهر_ > _تنظیمات_ (_admin/appearance/settings_) استفاده کنید. یک لوگو سفارشی برای قالب شما جایگزین لوگوی عمومی می‌شود.
    زمانی که فایل مورد نظر را برای آپلود انتخاب کردید، نام فایل آن را در کنار دکمه _انتخاب فایل_ یا _جستجو_ مشاهده می‌کنید.
1. به منظور ذخیره‌سازی تغییرات و مشاهده رنگ‌های بروزشده و لوگوی انتخابی، روی _ذخیره‌سازی پیکربندی_ در انتهای صفحه کلیک کنید.
    یادداشت: زیرعنوان _طرح رنگ_ یک قسمت _پیش‌نمایش_ وجود دارد که به صورت مختصر نشان می‌دهد سایت چگونه نمایش داده می‌شود.
    <img src="/images/config-theme_color_scheme_preview.png" alt="پیش‌نمایش تنظیمات قالب Bartik" width="100%" />
1. روی _بارگشت به سایت_ یا _خانه_ در نوارابزار کلیک کنید تا تغییرات اعمال شده در تنظیمات قالب Bartik را مشاهده کنید.
    <img src="/images/config-theme_final_result.webp" alt="نتیجه نهایی ویرایش تنظیمات قالب Bartik- colors and logo" width="100%" />

## درک خود را گسترش دهید

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* اگر تاثیر تغییرات اخیر در سایت را مشاهده نکردید، شاید نیاز باشد حافظه موقت را پاکسازی کنید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Ann Greazel](https://www.drupal.org/u/AnnGreazel) به همراه [Amanda Luker](https://www.drupal.org/u/mndonx) در [Advomatic](https://www.advomatic.com/) و [Jack Haas](https://www.drupal.org/u/jerseycheese)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
