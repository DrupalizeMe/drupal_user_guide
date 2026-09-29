---
title: "تغییر فرم‌های ورود محتوا"
description: "چگونگی ویرایش فرم‌های ورود محتوا."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "fa"
---
## هدف { #structure-form-editing }

تغییر فرم محصول به گونه‌ای که از یک ویجت دیگر برای ورود اطلاعات مواد اولیه استفاده کند.
## دانش پیشنیاز

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## پیشنیازهای سایت

نوع محتوای محصول باید موجود و شامل یک فیلد مرجع عبارت دسته‌بندی نیز باشد. [structure-content-type](./structure-content-type.md) و [structure-taxonomy-setup](./structure-taxonomy-setup.md) را مشاهده کنید.
## گام‌ها

1. از منوی _مدیریت_ به مسیر _محتوا_ > _افزودن محتوا_ > _محصول_ (_node/add/recipe_) بروید که فرم ورود محتوای پیشفرض را مشاهده کنید. می‌بینید که چطور باید مواد اولیه را تک به تک وارد کنید، بجای آنکه از یک قالب فشرده‌تر استفاده شود.
1. از منوی _مدیریت_ به مسیر _ساختار_ > _انواع محتوا_ (_admin/structure/types_) بروید. سپس روی _مدیریت نمایش فرم_ که به صورت منوی کشویی در نوع محتوای محصول قرار دارد کلیک کنید. صفحه _مدیریت نمایش فرم_ ظاهر می‌شود.
1. برای فیلد مواد اولیه، گزینه _تکمیل خودکار (به سبک تگ)_ را از ستون _ویجت_ انتخاب کنید.
    <img src="/images/structure-form-editing-manage-form.png" alt="مدیریت فرم محصول" width="100%" />
1. روی _ذخیره‌سازی_ کلیک کنید.
1. از منوی _مدیریت_ به مسیر _محتوا_ > _افزودن محتوا_ > _محصول_ (_node/add/recipe_) بروید تا تغییر عملکرد فرم محتوایی را مشاهده کنید. اکنون فیلد مواد اولیه به صورت متنی درآمده که چند گزینه را قبول می‌کند.
    <img src="/images/structure-form-editing-add-recipe.png" alt="افزودن یک محصول" width="100%" />
1. دو گزینه محتوایی محصول ایجاد کنید ([content-create](./content-create.md) را مشاهده کنید)، مانند "سالاد سبز" و "هویج‌های تازه". اطمینان یابید که تمام فیلدها دارای مقدار باشند، از جمله تصویر، مواد اولیه و درج شده توسط (این را به یکی از گزینه‌های محتوایی ایجاد شده برای فروشنده که در قسمت [structure-fields](./structure-fields.md) بوجود آمد، تنظیم کنید).

## درک خود را گسترش دهید

فرم تماس سایت اصلی را با پیمایش به مسیر _ساختار_ > _فرم‌های تماس_ تغییر دهید. برای نمونه، شاید بخواهید گزینه _ارسال یک رونوشت به خود_ یا فیلد‌های _زبان_ را مخفی سازید.

*مشارکت‌کنندگان*

نگارش توسط [Boris Doesborg](https://www.drupal.org/u/batigolix)

ترجمه توسط [Navid Emami](https://www.drupal.org/u/novid)
