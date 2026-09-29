---
title: "Налаштування стилю зображення"
description: "Як додати стиль зображення, щоб переформатувати зображення."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "uk"
---
## Мета { #structure-image-style-create }

Додати стиль зображення і використовувати його для відображення зображень на сторінках Постачальника.
## Необхідні знання

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Вимоги до сайту

* Типи контенту Постачальник і Рецепт повинні існувати. Дивіться [structure-content-type](./structure-content-type.md).
* Основні поля зображення повинні існувати для обох типів контенту. Дивіться [structure-fields](./structure-fields.md).
* Елементи контенту повинні існувати для обох типів контенту. Дивіться
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), і [content-create](./content-create.md).
## Кроки

1. У _Керування_ адміністративного меню, Перейдемо в _Конфігурація_ > _Медіа_ >
    _Стилі зображень_ (_admin/config/media/image-styles_).
1. Натисніть _Додати стиль зображення_.
1. Ведіть назву _Средній (300x200)_
1. Натисніть _Створити новий стиль_. З'явиться сторінка _Редагувати стиль Середній (300х200)_.
1. У таблиці _Ефект_, виберіть _Масштабування і кадрування_. Натисніть _Додати_.
1. Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ширина</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Висота</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Натисніть _Додати ефект_. Стиль зображення збережеться з обраним ефектом.
    ![Додати стиль зображення](/images/structure-image-style-create-add-style.png)
1. У _Керування_ адміністративного меню, перейдіть в _Структура_ > _Типи матеріалів_
    (_admin/structure/types_).
1. Натисніть _Керувати відображенням_ з випадаючої кнопки в колонці _Операції_ для типу матеріалу
    Постачальник. З'явиться сторінка _Керувати відображенням_ (_admin/structure/types/manage/vendor/display_).
1. Переконайтеся, що обрана другорядна вкладка _Default_.
1. Натисніть на шестірню для поля _Основне зображення_, щоб відкрити опції
    конфігурації.
1. Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Опис</th>
          <th>Приклад значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Стиль зображення</td>
          <td>Який стиль зображення використовувати</td>
          <td>Середній (300х200)</td>
        </tr>
        <tr>
          <td>Зображення як посилання на</td>
          <td>На яку сторінку перейде користувач при натисканні на зображення</td>
          <td>Нічого</td>
        </tr>
      </tbody>
    </table>

    ![Змінити настройки форматера поля зображення](/images/structure-image-style-create-manage-display.png)

1. Натисніть _Оновити_.
1. Натисніть _Зберегти_. Новий стиль зображення буде використовуватися при відображенні вмісту
    Постачальник.
1. Відкрийте матеріал Постачальник і переконайтеся, що він тепер відображається за допомогою
    зменшеного зображення. Дивіться [content-edit](./content-edit.md) для отримання інформації про те, як знайти
    існуючий матеріал.
1. Повторіть кроки 8-15 для матеріалу Рецепт.
## Схожі поняття

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Setting up an Image Style" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

[_Drupal.org_ сторінка документації спільноти "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Автори*

Адаптовано і додано [Boris Doesborg](https://www.drupal.org/u/batigolix), і
[Jojy Alphonso](https://www.drupal.org/u/jojyja) в
http://redcrackle.com [Red Crackle] з
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
авторські права 2000-2026 за окремими учасниками в
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
