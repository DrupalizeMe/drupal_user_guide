---
title: "افزودن یک فیلد مرجع"
description: "چگونگی افزودن یک فیلد مرجع که دو نوع محتوا را به یکدیگر وصل می‌کند."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "fa"
---
## هدف { #structure-adding-reference }

افزودن یک فیلد مرجع به طوری که محصولات به فروشندگان هر کدام متصل شوند.
## دانش پیشنیاز

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## پیشنیازهای سایت

انواع محتوای فروشنده و محصول باید موجود باشند. [structure-content-type](./structure-content-type.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _ساختار_ > _انواع محتوا_ (_admin/structure/types_) بروید. سپس روی _مدیریت فیلدها_ از منوی کشویی نوع محتوای محصول کلیک کنید. صفحه _مدیریت فیلدها_ نمایش می‌یابد.
1. روی _افزودن فیلد_ کلیک کنید. صفحه _افزودن فیلد_ نمایش می‌یابد. فیلدها را با توجه به مقادیر زیر پر کنید. روی _ذخیره‌سازی و ادامه_ کلیک کنید.
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
          <td>گزینه‌ای برای تعیین نوع فیلد</td>
          <td>مرجع > محتوا</td>
        </tr>
        <tr>
          <td>برچسب</td>
          <td>عنوانی که می‌خواهید به فیلد بدهید</td>
          <td>درج شده توسط</td>
        </tr>
      </tbody>
    </table>

    ![افزودن یک فیلد مرجع به نوع محتوا](/images/structure-adding-reference-add-field.png)

1. صفحه _درج شده توسط_ ظاهر می‌شود که به شما اجازه تعیین مقادیر مجاز برای فیلد را می‌دهد. فیلدها را با توجه هب مقادیر زیر پر کنید. روی _ذخیره‌سازی تنظیمات فیلد_ کلیک کنید.
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
          <td>نوع گزینه برای ارجاع</td>
          <td>گزینه‌ای برای انتخاب نوع فیلد مرجع</td>
          <td>محتوا</td>
        </tr>
        <tr>
          <td>تعداد مقادیر مجاز</td>
          <td>تعداد مقادیر مشخص شده توسط فیلد را تعیین کنید</td>
          <td>محدود، ۱</td>
        </tr>
      </tbody>
    </table>

    ![پیکربندی ذخیره‌سازی یک فیلد مرجع](/images/structure-adding-reference-set-field-basic.png)

1. صفحه _تنظیمات محصول درج شده توسط_ نمایش می‌یابد که به شما اجازه پیکربندی فیلد را می‌دهد. فیلدها را با توجه به مقادیر زیر پر کنید. روی _ذخیره‌سازی تنظیمات_ کلیک کنید.
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
          <td>برچسب</td>
          <td>عنوان انتخابی برای این فیلد در صفحه</td>
          <td>درج شده توسط</td>
        </tr>
        <tr>
          <td>متن راهنما</td>
          <td>متن مختصری که به فرد تولیدکننده محتوا کمک می‌کند</td>
          <td>فروشنده‌ای که این دستور را درج کرده است انتخاب کنید</td>
        </tr>
        <tr>
          <td>فیلد مورد نیاز</td>
          <td>تعیین کنید یک مقدار باید وارد شود یا خیر</td>
          <td>انتخاب شده</td>
        </tr>
        <tr>
          <td>متد ارجاع</td>
          <td>گزینه‌ای برای انتخاب متد ارجاع</td>
          <td>پیشفرض</td>
        </tr>
        <tr>
          <td>انواع محتوا</td>
          <td>نوع محتوا را مشخص کنید</td>
          <td>فروشنده</td>
        </tr>
        <tr>
          <td>مرتب‌سازی</td>
          <td>فیلد مرتب‌سازی</td>
          <td>عنوان</td>
        </tr>
        <tr>
          <td>جهت مرتب‌سازی</td>
          <td>ترتیب مرتب‌سازی</td>
          <td>صعودی</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.png" alt="تنظیمات یک فیلد مرجع " width="100%" />

1. فیلد درج شده توسط به نوع محتوا افزوده شد.
    <img src="/images/structure-adding-reference-manage-fields.png" alt="صفحه مدیریت فیلد برای نوع محتوای محصول" width="100%" />

    *مشارکت‌کنندگان*

    نگارش و ویرایش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix) و [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com)

    ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)

