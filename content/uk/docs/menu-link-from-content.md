---
title: "Додавання сторінки в навігацію"
description: "Як додати сторінку в навігацію."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "uk"
---
## Мета { #menu-link-from-content }

Додайти сторінку в навігацію. Наприклад, сторінку Про ярмарок.
## Необхідні знання

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Попередні вимоги до сайту

Сторінка Про ярмарок вже має існувати. Див. [content-create](./content-create.md).
## Кроки

1. В адміністративному меню _Керування_, перейдіть до _Вміст_
    (_admin/content_).
1. Знайдіть сторінку Про ярмарок в списку і натисніть _Редагувати_ у відповідному
    рядку. З'явиться форма редагування вмісту.
    ![Посилання на редагування сторінки](/images/menu-link-from-content_edit_page.png)
1. Натисніть _Налаштування меню_ праворуч, щоб розгорнути вкладку.
1. Поставте прапорець _Створити посилання в меню_ щоб відобразилися опції меню.
1. Введіть значення з наступної таблиці:
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Пояснення</th>
          <th>Приклад</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Назва посилання меню</td>
          <td>Назва, яка буде відображатися в меню</td>
          <td>Про ярмарок</td>
        </tr>
        <tr>
          <td>Опис</td>
          <td>Текст, який буде відображатися, коли відвідувач наведе курсор на посилання.</td>
          <td>Історія ярмарку</td>
        </tr>
        <tr>
          <td>Батьківський пункт</td>
          <td>Розташування сторінки в ієрархії меню. Наприклад, якщо вибрати _<Основна навіґація>_, сторінка з'явиться на самому верхньому рівні навіґації. Вибравши інший батьківський пункт меню, можна створити ієрархію меню, що складається з декількох рівнів.</td>
          <td><Основна навігація></td>
          <td>Вага</td>
          <td>Порядок, в якому сторінка повинна відображатися в меню (пункти меню з</td>
        </tr>
      </tbody>
    </table>

    ![Створення посилання в меню в формі редагування вмісту](/images/menu-link-from-content.png)

1. Натисніть _Зберегти_, щоб зберегти зміни. Натисніть _Головна_ або
    _До сайту_ на панелі навігації, щоб побачити результат, який може
    виглядати як на малюнку нижче.
    ![В основне меню було додано посилання](/images/menu-link-from-content-result.png)
## Поліпшіть своє розуміння

[menu-reorder](./menu-reorder.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Adding a Page to the Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

[_Drupal.org_ сторінка документації спільноти "Working with menus"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu)

*Автори*

Адаптовано [Boris Doesborg](https://www.drupal.org/u/batigolix) з
["Додавання посилання в меню"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu),
авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation);
змінено [Jack Haas](https://www.drupal.org/u/jerseycheese).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
