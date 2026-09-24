---
title: "Зміна ролей користувача"
description: "Як вибрати або додати роль для користувача."
id: "user-roles"
translation_key: "user-roles"
source_locale: "uk"
---
## Мета { #user-roles }

Зміна або додавання ролей для даного користувача шляхом редагування одного користувача або
застосування масової операції.
## Необхідні знання

[user-concept](./user-concept.md)
## Вимоги до сайту

Обліковий запис користувача, який ви хочете оновити, і роль, яку ви хочете надати, повинні
існувати. Дивіться [user-new-user](./user-new-user.md), [user-new-role](./user-new-role.md), і
[user-permissions](./user-permissions.md).
## Кроки
### Оновлення ролей з використанням розрахованого на одного користувача методу редагування

1. У _Керування_ адміністративного меню, перейдіть в _Люди_
    (_admin/people_).
1. Знайдіть акаунт користувача 1 (ім'я "admin") з призначеною роллю _Адміністратор_.
    Якщо його не відразу видно, використовуйте фільтр _Ім'я чи електронна адреса містять_,
    або інші фільтри, щоб звузити список.
1. Натисніть _Редагуати_, щоб оновити обліковий запис користувача.
    ![Сторінка користувачів](/images/user-roles_people-list.webp)
1. На сторінці _Редагувати_, перейдіть до розділу _Ролі_. Виберіть роль _Адміністратор_
    для аккаунта користувача.
    ![Розділ ролей сторінки редагування користувача](/images/user-roles_person-edit.webp)
1. Натисніть _Зберегти_, щоб оновити обліковий запис користувача. Ви будете повернуті на
    сторінку _Люди_ і побачите повідомлення про те, що зміни були збережені.
    ![Повідомлення підтвердження](/images/user-roles_message.webp)
### Оновлення ролей методом масового редагування

1. Якщо у користувачів Веселий молочник і Алтайський мед ще не було ролі Постачальник,
    ось як потрібно додати цю роль. У _Керування_ адміністративного меню, перейдіть в
    _Люди_ (_admin/people_).
1. Знайдіть облікові записи Постачальника _Солодкий мед_ і _Веселий молочник_ і перевірте їх. Якщо
    їх не відразу видно, використовуйте фільтр _Ім'я чи електронна адреса містять_,
    або інші фільтри, щоб звузити список.
1. Виберіть _Додати роль Постачальник для обраних користувачів_ зі списку _Дія_.
    ![People page with bulk operation set up](/images/user-roles_bulk.webp)
1. Натисніть _Застосувати до вибраних позицій_. Ви повинні побачити повідомлення про те, що
    бажані зміни були зроблені.
    image: images/user-roles_message_bulk.webp [ "Confirmation message"]
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hd7Sr3-n9ME" title="Changing a User's Roles" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Chris Dart](https://www.drupal.org/u/chris-dart)
і [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
