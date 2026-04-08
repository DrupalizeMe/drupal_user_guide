---
title: "Створення Власного Блоку"
description: "Як створювати власні блоки."
id: "block-create-custom"
translation_key: "block-create-custom"
source_locale: "uk"
---
## Мета { #block-create-custom }

Створити блок що відображає години роботи і адресу міського ярмарку.
## Необхідні знання

* [block-concept](./block-concept.md)
* [block-regions](./block-regions.md)
## Кроки

1. В меню адміністратора _Керування_, перейдіть в _Структура_ > _Схема блоків_ > _Бібліотека власних блокіі_ (_admin/structure/block/block-content_).
1. Натисніть _Додати власний блок_. І у вас з'явиться сторінка _Додати власний блок_.
1. Заповніть поля як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Пояснення</th>
          <th>Необхідне значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Опис блоку</td>
          <td>Ім'я блоку, яке показується адміністратору</td>
          <td>Години роботи і адреса блок</td>
        </tr>
        <tr>
          <td>Вміст</td>
          <td>Контент блоку, який відображається для користувачів</td>
          <td>Відкрито: Неділя, 9:00 -</td>
        </tr>
      </tbody>
    </table>

    ![Додати власний блок](/images/block-create-custom-add-custom-block.png)

1. Натисніть _Зберегти_. Повинно бути виведено повідомлення про успішне збереженні блоку.
## Поліпшіть своє розуміння

* Відредагуйте вміст вашого власного блоку. В меню адміністратора _Керування_,
перейдіть в _Структура_ > _Схема блоків_ > _Бібліотека власних блоків_
(_admin/structure/block/block-content_). Знайдіть ваш блок в списку і натисніть
_Редагувати_ для внесення змін.
* Додайте створений вами блок в колонку. Дивіться інструкції тут [block-place](./block-place.md).
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/sI2wrbn3cPg" title="Creating a Custom Block" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

video :: https: //drupalbook.org/ru/drupal/26-block-regiony-i-bloki [title="Регіони і блоки"]
## Додаткові матеріали

[_Drupal.org_ сторінка документації спільноти "Managing blocks"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/block-module/managing-blocks)
[_DrupalBook.org_ сторінка "2.6. Block - Регіони і блоки"](https://drupalbook.org/ru/drupal/26-block-regiony-i-bloki)

*Автори*

Адаптовано [Jacob Redding](https://www.drupal.org/u/jredding) і
[Boris Doesborg](https://www.drupal.org/u/batigolix) з
[Managing blocks](https://www.drupal.org/docs/core-modules-and-themes/core-modules/block-module/managing-blocks), авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
