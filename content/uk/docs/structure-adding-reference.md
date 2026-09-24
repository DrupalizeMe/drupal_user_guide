---
title: "Додавання поля посилання на сутність"
description: "Як додати поле посилання на сутність, яке з'єднає два типи матеріалів."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "uk"
---
## Мета { #structure-adding-reference }

Додати поле посилання на сутність, так щоб рецепти були пов'язані з постачальником, який їх
надав.
## Необхідні знання

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Вимоги до сайту

Типи матеріалів Рецепт і Постачальник повинні бути створені. Дивіться [structure-content-type](./structure-content-type.md).
## Кроки

1. У _Керування_ адміністративного меню, перейдіть в _Структура_ > _Типи матеріалів_ (_admin/structure/types_). Потім натисніть _Керувати полями_ в
    випадаючому меню кнопки для типу матеріалу Рецепт. З'явиться сторінка _Керувати полями_.
1. Натисніть _Додати поле_. З'явиться сторінка _Додати поле_. Заповніть поля, як показано
    нижче. Натисніть _Зберегти та продовжити_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Додати нове поле</td>
          <td>Можливість вказати тип поля</td>
          <td>Посилання > Вміст</td>
        </tr>
        <tr>
          <td>Мітка</td>
          <td>Назва, яку ви хочете дати полю</td>
          <td>Надано</td>
        </tr>
      </tbody>
    </table>

    image: images/structure-adding-reference-add-field.webp [ "Додавання поля посилання на сутність для типу матеріалу"]

1. З'явиться сторінка _надано_, яка дозволяє встановити допустиму кількість
    значень. Заповніть поля, як показано нижче. Натисніть _Зберегти налаштування поля_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тип пункту дли посилання</td>
          <td>Можливість вибору типу об'єкта посилання</td>
          <td>Вміст</td>
        </tr>
        <tr>
          <td>Дозволена кількість значень</td>
          <td>Вкажіть кількість значень, пов'язаних з полем</td>
          <td>Обмежено, 1</td>
        </tr>
      </tbody>
    </table>

    ![Збереження конфігурації посилального поля](/images/structure-adding-reference-set-field-basic.webp)

1. З'явиться сторінка _Налаштування Надано для Рецепт_, яка дозволяє вам
    налаштувати поле. Заповніть поля, як показано нижче. Натисніть _Зберегти налаштування_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Мітка</td>
          <td>Заголовок що відображається для цього поля на сторінці</td>
          <td>Надано</td>
        </tr>
        <tr>
          <td>Текст довідки</td>
          <td>Короткий текст, що допомагає людині, що створює контент</td>
          <td>Виберіть постачальника, який надав цей рецепт</td>
        </tr>
        <tr>
          <td>Обов'язкове поле</td>
          <td>Чи зобов'язане бути надано значення чи ні</td>
          <td>Обрано</td>
        </tr>
        <tr>
          <td>Тип посилання > Спосіб посилання</td>
          <td>Можливість вибрати тип посилання</td>
          <td>Базово</td>
        </tr>
        <tr>
          <td>Тип посилання > Тип матеріалів</td>
          <td>Вкажіть тип матеріалу</td>
          <td>Постачальник</td>
        </tr>
        <tr>
          <td>Тип посилання > Впорядкувати за</td>
          <td>Впорядкування</td>
          <td>Заголовок</td>
        </tr>
        <tr>
          <td>Ти посилання > Напрям впорядкування</td>
          <td>Порядок сортування</td>
          <td>Зростання</td>
        </tr>
      </tbody>
    </table>

    ![Налаштування для поля посилання на сутність](/images/structure-adding-reference-field-settings.webp)

1. Поле Надано було додано до типу матеріалу
    image: images/structure-adding-reference-manage-fields.webp [ "Сторінка керування полями для типу матеріалу Рецепт",width="100%"]
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hAhWiqPlKh0" title="Adding a Reference Field" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано і змінено [Boris Doesborg](https://www.drupal.org/u/batigolix),
і [Jojy Alphonso](https://www.drupal.org/u/jojyja) в
[Red Crackle](http://redcrackle.com)

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
