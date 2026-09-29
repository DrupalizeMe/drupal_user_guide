---
title: "Зміна послідовності в навігації"
description: "Як змінити порядок пунктів меню."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "uk"
---
## Мета { #menu-reorder }

Змінити послідовність пунктів меню.
## Необхідні знання

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Вимоги до сайту

Сторінки Головна і Про Ярмарку вже повинні існувати в меню основної
навігації. Див. [menu-link-from-content](./menu-link-from-content.md).
## Кроки

1. В адміністративному меню _Керування_ перейдіть до _Структура_ > _Меню_
    (_admin/structure/menu_), де перераховані всі меню вашого сайту. Натисніть
    _Редагувати меню_ в списку _Операції_ для _Основна навігація (Main navigation)_. Ви також можете потрапити на цю сторінку, використовуючи
    контекстні посилання (див. [config-overview](./config-overview.md)) для доступу до меню. Зверніть
    увагу, що назви і опис меню, які були надані вашим
    профілем установки, показані на цій сторінці англійською мовою; для
    більш докладної інформації дивіться [language-concept](./language-concept.md).
    ![Список меню на сайті з підсвічується 'Main navigation'](/images/menu-reorder_menu_titles.png)
1. На сторінці _Редагувати меню_ буде відображений список кожного пункту
    меню, в якому ви перебуваєте (_Основная навігація_).
    ![Список пунктів меню в _Main navigation_](/images/menu-reorder_edit_menu.png)
1. Перетягніть "хрестиком" пункт меню на нове місце, щоб змінити їх
    порядок: Головна, потім Про ярмарок. В якості альтернативи перетягування можна
    вибрати посилання _Показать вагу рядків_ у верхній частині сторінки і вибрати числові
    значення ваг (спочатку будуть показані пункти меню з меншим значенням ваги або негативним значенням, тобто чим менше - тим вище).
    ![Змінений порядок виводу пунктів меню з попередженням про те, що є не збережені зміни](/images/menu-reorder_reorder.png)
1. Натисніть _Зберегти_.
1. В навігації на головній сторінці, пункт меню Головна тепер показується
    першим.
    ![Змінений порядок проходження пунктів меню на головній сторінці: спочатку 'Головна', а потім 'Про ярмарку'](/images/menu-reorder_final_order.png)
## Поліпшіть своє розуміння

Додайте пункт меню _Контакти_, що веде на сторінку _/contact_, в меню
основної навігації. Сторінка контакту надається основним модулем
Contact, можливо, буде потрібно відредагувати його розташування і поля (див.
[structure-form-editing](./structure-form-editing.md)).
## Пов'язані поняття

[menu-concept](./menu-concept.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Changing the Order of Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Ann Greazel](https://www.drupal.org/u/AnnGreazel).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
