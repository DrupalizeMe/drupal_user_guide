---
title: "اختصاص دادن مجوزها به یک نقش"
description: "چگونگی اختصاص دادن مجوز به یک نقش."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "fa"
---
## هدف { #user-permissions }

تغییر مجوزهای فروشنده به گونه‌ای که کاربران بتوانند محتوای محصول و فروشنده را ایجاد، ویرایش و حذف کنند، قالب‌‌بندی آن را تغییر داده و با یکدیگر تماس بگیرند.
## دانش پیشنیاز

* [user-concept](./user-concept.md)
## پیشنیازهای سایت

نقش فروشنده در سایت شما باید موجود باشد. [user-new-role](./user-new-role.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _افراد_ > _نقش‌ها_ (_admin/people/roles_) بروید. صفحه نقش‌ها نمایش می‌یابد.
1. از منوی کشویی برای نقش فروشنده روی _ویرایش مجوزها_ کلیک کنید. صفحه _ویرایش نقش_ نمایش می‌یابد که در آن می‌توانید تمام عملیات ممکن روی وبسایت را مشاهده کنید، برای نمونه، _درج دیدگاه‌ها_ یا _مدیریت بلاک‌ها_. مجوزهای موجود بستگی به افزونه‌ها نصب شده روی سایت دارند. نکته: برخی مجوزها ممکن است پیامدهای امنیتی داشته باشند، پس هنگام اختصاص آن‌ها به نقش محتاط باشید.
1. مجوزهای زیر را که توسط افزونه‌ها فهرست شده‌اند، انتخاب کنید:
    <table>
      <thead>
        <tr>
          <th>افزونه</th>
          <th>مجوز</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>استفاده از فرم‌های تماس شخصی کاربران</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>استفاده از قالب متنی محدود شده HTML</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>محصول: ایجاد محتوای جدید</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>محصول: ویرایش محتوای خود</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>محصول: حذف محتوای خود</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>فروشنده: ویرایش محتوای خود</td>
        </tr>
        <tr>
          <td>Quick Edit</td>
          <td>دسترسی به ویرایش درجا</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.webp" alt="اختصاص مجوزهای ایجاد، ویرایش و حذف محصول به نقش فروشنده" width="100%" />

1. روی _ذخیره‌سازی مجوزها_ کلیک کنید. پیامی مبنی بر ذخیره‌سازی تغییرات خود دریافت می‌کنید.
    ![پیام تاییدیه پس از ذخیره‌سازی مجوزها](/images/user-permissions-save-permissions.webp)

## درک خود را گسترش دهید

* به عنوان یکی از کاربران ایجاد شده در قسمت [user-new-user](./user-new-user.md) وارد سایت شوید و دسترسی خود به مجوزهای لازم را بررسی کنید.
* [user-roles](./user-roles.md)
## موضوعات مرتبط

[user-admin-account](./user-admin-account.md)
## منابع مطالعاتی

[صفحه "مدیریت کاربران" در مستندات جامعه کاربری _Drupal.org_](https://www.drupal.org/docs/7/managing-users)

*مشارکت‌کنندگان*

اقتباس و ویرایش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix)، [Brian Emery](https://www.drupal.org/u/bemery987) و [Jojy Alphonso](https://www.drupal.org/u/jojyja) در [Red Crackle](http://redcrackle.com) از ["نقش‌های کاربری"](https://www.drupal.org/node/1803614)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)

کپی‌رایت ۲۰۱۷-۲۰۰۰ توسط مشارکت‌کنندگان انفرادی در  [مستندات جامعه کاربری دروپال](https://www.drupal.org/documentation)
