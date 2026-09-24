---
title: "پیکربندی ترجمه محتوا"
description: "چگونگی پیکربندی گزینه‌های محتوایی برای ترجمه آن‌ها."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "fa"
---
## هدف { #language-content-config }

قابل ترجمه ساختن _بلاک سفارشی_، _پیوند منوی سفارشی_ و انواع موجودیت _محتوا_، انتخاب زیر مجموعه‌های آن‌ها و اینکه کدام فیلدها می‌توانند ترجمه شوند.
## دانش پیشنیاز

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## پیشنیازهای سایت

افزونه داخلی Content Translation باید نصب و سایت شما حداقل شامل دو زبان باشد. [language-add](./language-add.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _پیکربندی_ > _ناحیه و زبان_ > _زبان محتوا و ترجمه_ (_admin/config/regional/content-language_) بروید.
1. زیرعنوان _تنظیمات سفارشی زبان_ گزینه‌های _محتوا، بلاک سفارشی و پیوند منوی سفارشی_ را به منظور قابل ترجمه ساختن آن‌ها انتخاب کنید.
    <img src="/images/language-content-config_custom.webp" alt="فهرست انتخاب تنظیمات سفارشی زبان" width="193px" />
1. گزینه‌های پیکربندی برای _محتوا، بلاک سفارشی و پیوند منوی سفارشی_ ظاهر می‌شوند. برای هر نوع موجودیت، زیر مجموعه مورد نظر خود را انتخاب کنید. برای _محتوا_ گزینه _صفحه ساده_ برای _بلاک سفارشی_ گزینه _بلاک ساده_ و برای _پیوند منوی سفارشی_ گزینه _پیوند منوی سفارشی_ را انتخاب کنید.
1. تنظیمات مربوط به انواع موجودیت را با توجه به جدول زیر تایید کنید:
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار نمونه</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>زبان پیشفرض</td>
          <td>زبان پیشفرض برای زیرمجموعه موجودیت</td>
          <td>زبان پیشفرش سایت (انگلیسی)</td>
        </tr>
        <tr>
          <td>نمایش انتخابگر زبان در صفحات ایجاد و ویرایش</td>
          <td>تعیین کنید انتخابگر زبان در صفحات ایجاد و ویرایش نمایش داده شود یا خیر</td>
          <td>انتخاب شده</td>
        </tr>
      </tbody>
    </table>

    ![زبان و قابلیت ترجمه پیشفرض برای انواع محتوا](/images/language-content-config_content.webp)

1. با توجه به جدول زیر فیلدهایی که باید قابل ترجمه باشند را برای نوع محتوای _صفحه ساده_ مشخص کنید. اگر فیلدی سازگار با ترجمه نیست، آن را رها کنید. فعال‌سازی ترجمه برای فیلدهایی که به صورت عددی یا تاریخ هستند در پیاده‌سازی گردشکار کاربرد دارند.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار نمونه</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>عنوان</td>
          <td>عنوان محتوا</td>
          <td>انتخاب شده</td>
        </tr>
        <tr>
          <td>نوشته شده توسط</td>
          <td>نویسنده</td>
          <td>انتخاب نشده</td>
        </tr>
        <tr>
          <td>وضعیت انتشار</td>
          <td>محتوا منتشر شده است یا خیر</td>
          <td>انتخاب شده</td>
        </tr>
        <tr>
          <td>نوشته شده در تاریخ</td>
          <td>تاریخ انتشار</td>
          <td>انتخاب نشده</td>
        </tr>
        <tr>
          <td>تغییر یافته</td>
          <td>تاریخ آخرین بروزرسانی</td>
          <td>انتخاب نشده</td>
        </tr>
        <tr>
          <td>انتقال یافته به صفحه اول</td>
          <td>آیا محتوا در صفحه اول قرار می‌گیرد یا خیر</td>
          <td>انتخاب نشده</td>
        </tr>
        <tr>
          <td>چسبنده به بالای فهرست</td>
          <td>آیا محتوا در برخی گزینه‌های view در ابتدای فهرست قرار می‌گیرد یا خیر</td>
          <td>انتخاب نشده</td>
        </tr>
        <tr>
          <td>نشانی مستعار</td>
          <td>نشانی این محتوا</td>
          <td>انتخاب شده</td>
        </tr>
        <tr>
          <td>بدنه</td>
          <td>محتوای اصلی صفحه</td>
          <td>انتخاب شده</td>
        </tr>
      </tbody>
    </table>

    ![فهرست انتخاب فیلدهای زیرمجموعه موجودیت محتوایی برای ترجمه](/images/language-content-config_basic_page.webp)

1. به طور مشابه، فیلدهای قابل ترجمه برای _بلاک ساده_ و _پیوند منوی سفارشی_ را انتخاب کنید.
1. روی _ذخیره‌سازی پیکربندی_ کلیک کنید.

## درک خود را گسترش دهید

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## منابع مطالعاتی

* [نوشته وبلاگ "دروپال ۸ چندزبانه، قسمت ۵"](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [نوشته وبلاگ "دروپال ۸ چندزبانه، قسمت ۱۷"](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*مشارکت‌کنندگان*

نگارش و ویرایش توسط [Laura Vass](https://www.drupal.org/u/lolk) در [Pronovix](https://pronovix.com/)، [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com) و [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
