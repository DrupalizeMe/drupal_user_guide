---
title: "برپایی یک دسته‌بندی"
description: "چگونگی ایجاد یک واژگان دسته‌بندی و افزودن آن به عنوان فیلد به یک نوع محتوا."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "fa"
---
## هدف { #structure-taxonomy-setup }

ایجاد یک واژگان مواد اولیه و افزودن آن به نوع محتوای محصول به عنوان یک فیلد که می‌تواند شامل تعداد نامحدودی از مقادیر باشد که این مقادیر به واژگان مورد نظر اضافه می‌شوند.
## دانش پیشنیاز

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## پیشنیازهای سایت

نوع محتوای محصول باید موجود باشد. [structure-content-type](./structure-content-type.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _ساختار_ > _دسته‌بندی_ (_admin/structure/taxonomy_) بروید. در اینجا واژگان _تگ‌ها_ را مشاهده می‌کنید که در زمان نصب با پروفایل استاندارد ایجاده شده‌اند.

    <img src="/images/structure-taxonomy-setup-taxonomy-page.webp" alt="صفحه فهرست دسته‌بندی" width="100%" />

1. روی _افزودن واژگان_ کلیک کرده و مقادیر زیر را وارد نمایید.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>نام</td>
          <td>نام واژگان</td>
          <td>مواد اولیه</td>
        </tr>
        <tr>
          <td>توضیح</td>
          <td>توضیح مختصری درباره این واژگان</td>
          <td>(خالی بگذارید)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="افزودن مواد اولیه به دسته‌بندی" width="100%" />

1. روی _ذخیره‌سازی_ کلیک کنید. به صفحه مواد اولیه هدایت می‌شوید، که فهرستی از تمام عبارت‌های موجود در آن را نمایش می‌دهد.
    <img src="/images/structure-taxonomy-setup-vocabulary-overview.webp" alt="فهرستی از عبارت‌های دسته‌بندی مواد اولیه" width="100%" />
1. روی _افزودن عبارت_ کلیک کنید. در فیلد _نام_ عبارت "کره" را وارد کنید. روی _ذخیره‌سازی_ کلیک کنید.
    <img src="/images/structure-taxonomy-setup-add-term.webp" alt="صفحه افزودن عبارت" width="100%" />
1. تاییدیه‌ای مبنی بر عبارت جدید دریافت می‌کنید. عبارت‌های بیشتری ایجاد کنید. برای نمونه، "گوجه" و "خیار".
1. از منوی _مدیریت_ به مسیر _ساختار_ > _انواع محتوا_ (_admin/structure/types_) بروید. روی _مدیریت فیلدها_ برای نوع محتوای محصول کلیک کنید.
1. روی _افزودن فیلد_ کلیک کرده و مقادیر جدول زیر را وارد کنید. روی _ذخیره‌سازی و ادامه_ کلیک کنید.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>افزودن یک فیلد جدید</td>
          <td>نوع فیلد را انتخاب کنید</td>
          <td>مرجع > عبارت دسته‌بندی</td>
        </tr>
        <tr>
          <td>برچسب</td>
          <td>عنوان مورد نظر برای فیلد</td>
          <td>مواد اولیه</td>
        </tr>
      </tbody>
    </table>

    ![افزودن فیلد مواد اولیه به نوع محتوای محصول](/images/structure-taxonomy-setup-add-field.webp)

1. در صفحه پیکربندی پیش رو، مقادیر جدول زیر را وارد کنید. روی _ذخیره‌سازی تنظیمات فیلد_ کلیک کنید.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>نوع گزینه مرجع</td>
          <td>نوع موجودیتی که توسط فیلد ارجاع داده می‌شود</td>
          <td>عبارت دسته‌بندی</td>
        </tr>
        <tr>
          <td>تعداد مقادیر مجاز</td>
          <td>تعداد مقادیری که کاربر مجاز به وارد کردن است</td>
          <td>نامحدود</td>
        </tr>
      </tbody>
    </table>

    ![تنظیمات ذخیره‌سازی فیلد برای فیلد مواد اولیه](/images/structure-taxonomy-setup-field-settings.webp)

1. در صفحه پیکربندی پیش رو، مقادیر جدول زیر را وارد کنید. روی _ذخیره‌سازی تنظیمات_ کلیک کنید.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>توضیحات</th>
          <th>مقدار</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>متن راهنما</td>
          <td>راهنما برای کاربرانی که اقدام به تولید محتوا می‌کنند</td>
          <td>مواد اولیه‌ای را وارد کنید که بازدیدکنندگان سایت قصد جستجوی آن‌ها را دارند.</td>
        </tr>
        <tr>
          <td>نوع ارجاع > متد ارجاع</td>
          <td>متد مورد استفاده برای انتخاب مقادیر مجاز را برگزینید</td>
          <td>پیشفرض</td>
        </tr>
        <tr>
          <td>نوع ارجاع > واژگان موجود</td>
          <td>واژگان مورد نظر جهت انتخاب مقادیر را برگزینید</td>
          <td>مواد اولیه</td>
        </tr>
        <tr>
          <td>نوع ارجاع > ایجاد موجودیت‌های مرجع در صورتی که از قبل موجود نباشند</td>
          <td>تعیین کنید آیا مواد اولیه می‌توانند توسط کاربر اضافه شوند یا خیر</td>
          <td>انتخاب شده</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.webp" alt="تنظیمات فیلد نوع مرجع" width="100%" />

1. روی _ذخیره‌سازی تنظیمات_ کلیک کنید. در این مرحله به صفحه _مدیریت فیلدها_ هدایت می‌شوید. پیامی نمایش می‌یابد مبنی بر اینکه پیکربندی برای مواد اولیه کامل شده است.
    <img src="/images/structure-taxonomy-setup-finished.webp" alt="صفحه مدیریت فیلدها برای نوع محتوای محصول" width="100%" />

    *مشارکت‌کنندگان*

    نگارش و ویرایش توسط [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass) و [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com)

    ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)

