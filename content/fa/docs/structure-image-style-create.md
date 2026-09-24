---
title: "برپایی یک سبک تصویری"
description: "چگونگی افزودن یک سبک تصویری به منظور قالب‌بندی مجدد یک تصویر."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "fa"
---
## هدف { #structure-image-style-create }

افزودن یک سبک تصویری و استفاده از آن در صفحات فروشنده برای فیلد تصویر.
## دانش پیشنیاز

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## پیشنیازهای سایت

* انوع محتوای فروشنده و محصول باید موجود باشند. [structure-content-type](./structure-content-type.md) را مشاهده کنید.
* فیلدهای تصویر اصلی در هر دو نوع محتوا باید موجود باشند. [structure-fields](./structure-fields.md) را مشاهده کنید.
* گزینه‌های محتوایی برای هر دو نوع محتوا باید موجود باشند. [structure-content-type](./structure-content-type.md)، [structure-fields](./structure-fields.md) و [content-create](./content-create.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _پیکربندی_ > _رسانه_ > _سبک‌های تصویری_ (_admin/config/media/image-styles_) بروید.
1. روی _افزودن سبک تصویری_ کلیک کنید.
1. نام _اندازه متوسط (۳۰۰x۳۰۰)_ را برای آن وارد کنید.
1. روی _ایجاد سبک جدید_ کلیک کنید. صفحه _ویرایش سبک اندازه متوسط (۳۰۰x۳۰۰)_ نمایش می‌یابد.
1. از جدول _تغییرات بصری_، گزینه _تغییر مقیاس و بریدن_ را انتخاب کنید. روی _افزودن_ کلیک کنید.
1. فیلدها را با توجه به مقادیر زیر پر کنید.
    <table>
      <thead>
        <tr>
          <th>نام فیلد</th>
          <th>مقدار</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>عرض</td>
          <td>۳۰۰</td>
        </tr>
        <tr>
          <td>ارتفاع</td>
          <td>۲۰۰</td>
        </tr>
      </tbody>
    </table>
1. روی _افزودن تغییر بصری_ کلیک کنید. سبک تصویری همراه با گزینه انتخاب شده ذخیره می‌گردد.
    <img src="/images/structure-image-style-create-add-style.webp" alt="افزودن یک سبک تصویری" width="100%" />
1. از منوی _مدیریت_ به مسیر _ساختار_ > _انواع محتوا_ (_admin/structure/types_) بروید.
1. از منوی کشویی _عملیات_ برای نوع محتوای فروشنده گزینه _مدیریت نمایش_ را انتخاب کنید. صفحه _مدیریت نمایش_ (_admin/structure/types/manage/vendor/display_) ظاهر می‌شود.
1. اطمینان یابید که زبانه ثانویه _پیشفرض_ انتخاب شده باشد.
1. روی چرخ‌دنده کنار _تصویر اصلی_ برای گزینه‌های پیکربندی کلیک کنید.
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
          <td>سبک تصویری</td>
          <td>از چه سبک تصویری استفاده شود</td>
          <td>اندازه متوسط (۳۰۰x۳۰۰)</td>
        </tr>
        <tr>
          <td>پیوند تصویر به</td>
          <td>بازدید از این صفحه در صورت کلیک شدن تصویر</td>
          <td>هیچ‌چیز</td>
        </tr>
      </tbody>
    </table>

    ![تغییر تنظیمات قالب‌دهنده فیلد تصویر](/images/structure-image-style-create-manage-display.webp)

1. روی _بروزرسانی_ کلیک کنید.
1. روی _ذخیره‌سازی_ کلیک کنید. هنگام نمایش محتوای فروشنده از سبک تصویری جدید استفاده خواهد شد.
1. یک گزینه محتوایی فروشنده را باز کنید و اطمینان یابید که به شیوه قبل نمایش نمی‌یابد. برای اطلاعات بیشتر در مورد یافتن گزینه‌های محتوایی، [content-edit](./content-edit.md) را مشاهده کنید.
1. گام‌های ۸ تا ۱۵ را برای نوع محتوای محصول نیز تکرار کنید.

## موضوعات مرتبط

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## منابع مطالعاتی

[صفحه "کار با تصاویر در دروپال ۷ و ۸" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/docs/8/core/modules/image/working-with-images)

*مشارکت‌کنندگان*

اقتباس و ویرایش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix) و [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com) از [صفحه "کار با تصاویر در دروپال ۷ و ۸" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/docs/8/core/modules/image/working-with-images)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)

کپی‌رایت ۲۰۱۷-۲۰۰۰ توسط مشارکت‌کنندگان انفرادی در  [مستندات جامعه کاربری دروپال](https://www.drupal.org/documentation)
