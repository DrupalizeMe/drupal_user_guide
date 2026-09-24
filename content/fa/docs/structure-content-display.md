---
title: "تغییر نمایش محتوا"
description: "چگونگی نمایش بهتر گزینه‌های محتوایی."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "fa"
---
## هدف { #structure-content-display }

مرتب‌سازی فیلدها، مخفی‌کردن برچسب‌ها و تنظیم خروجی فلیدها به منظور خواناتر کردن، دسترس‌پذیرتر کردن و زیباکردن گزینه‌های محتوایی.
## دانش پیشنیاز

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## پیشنیازهای سایت

نوع محتوای فروشنده باید موجود باشد، شامل فیلدهای تصویر و نشانی فروشنده بوده و سایت شما باید حداقل یک گزینه محتوایی از این نوع داشته باشد. [structure-content-type](./structure-content-type.md)، [structure-fields](./structure-fields.md) و [content-create](./content-create.md) را مشاهده کنید.
## گام‌ها

1. یک گزینه محتوایی که در قسمت [structure-fields](./structure-fields.md) ایجاد کردید را یافته و مشاهده کنید. مشاهده می‌کنید که با چند تغییر کوچک می‌توان شیوه نمایش بهتری ارائه داد:
    * فیلدهای تصویر و نشانی فروشنده نباید دارای برچسب باشند.
    * ترتیب نمایش فیلدها باید طوری تغییر کند که ابتدا تصویر نمایش داده شود.
    * تصویر باید اندازه کوچکتری داشته باشد.
1. برای رفع دو مشکل ابتدایی، و بروزرسانی چند تنظیم اضافی، از منوی _مدیریت_ به مسیر _ساختار_ > _انواع محتوا_ (_admin/structure/types_) بروید. سپس روی _مدیریت نمایش_ از منوی کشویی نوع محتوای فروشنده کلیک کنید.
    <img src="/images/structure-content-display_manage_display.webp" alt="مدیریت نمایش" width="100%" />
1. زیر ستون _برچسب_ گزینه _مخفی_ برای تصویر اصلی را انتخاب کنید. همین کار را برای نشانی فروشنده نیز انجام دهید.
    <img src="/images/structure-content-display_main_image_hidden.webp" alt="انتخاب _تصویر اصلی_ به عنوان _مخفی_" width="100%" />
1. روی چرخ‌دنده فیلد نشانی فروشنده کلیک کنید تا گزینه‌های پیکربندی آن باز شود.
1. فیلدها را با توجه به مقادیر زیر پر کنید.
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
          <td>طول متن پیوند کوتاه شده</td>
          <td>حداکثر طول برای نمایش متن پیوند</td>
          <td>خالی (بدون برش)</td>
        </tr>
        <tr>
          <td>باز کردن پیوند در پنجره جدید</td>
          <td>اینکه پیوندها در پنجره جدید از مرورگر باز شوند یا خیر</td>
          <td>انتخاب شده</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.webp" alt="طول متن پیوند" width="100%" />

1. روی  _بروزرسانی_ کلیک کنید.
1. با استفاده از فلش‌های حرکتی که در کنار فیلدها قرار دارند ترتیب آن‌ها را به صورت تصویر اصلی، _بدنه_، نشانی فروشنده و _پیوندها_ قرار دهید.

    <img src="/images/structure-content-display_change_order.webp" alt="تغییر ترتیب فیلدها" width="100%" />

1. روی _ذخیره‌سازی_ کلیک کنید.
1. گزینه محتوایی فروشنده که در گام ۱ پیدا کردید را مشاهده کنید تا از تغییرات انجام شده اطمینان یابید.
1. برای مدیریت نمایش نوع محتوای محصول، همین گام‌ها را تکرار کنید.

## درک خود را گسترش دهید

* تصویر اصلی را کوچک‌تر کنید. [structure-image-style-create](./structure-image-style-create.md) را مشاهده کنید.
* اگر تاثیر تغییرات انجام شده روی سایت را مشاهده نمی‌کنید، ممکن است لازم باشد حافظه موقت را پاکسازی کنید. [prevent-cache-clear](./prevent-cache-clear.md) را مشاهده کنید.
## موضوعات مرتبط

[structure-image-styles](./structure-image-styles.md)
## منابع مطالعاتی

* [صفحه "تعیین چگونگی نمایش فیلدها" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/node/774798)
* [صفحه "تغییر ترتیب نمایش فیلدها" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/node/774744)
* [صفحه "حالت‌های نمایشی" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/node/1577752)

*مشارکت‌کنندگان*

نگارش توسط [Ann Greazel](https://www.drupal.org/u/AnnGreazel) و [Boris Doesborg](https://www.drupal.org/u/batigolix)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
