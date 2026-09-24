---
title: "Переклад матеріалу"
description: "Як перевести сторінку на іншу мову."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "uk"
---
## Мета { #language-content-translate }

Перекласти домашню сторінку на іспанську.
## Необхідні знання

[language-concept](./language-concept.md)
## Вимоги до сайту

* Матеріал Головна повинен існувати. Дивіться [content-create](./content-create.md).
* Модуль ядра Content Translation повинен бути встановлений, і ваш сайт повинен
мати як мінімум дві мови. Дивіться [language-add](./language-add.md).
* Тип матеріалу _Сторінка_ повинен бути налаштований на переклад. Дивіться
[language-content-config](./language-content-config.md).
## Кроки

1. У _Керування_ адміністративного меню, перейдіть в _Вміст_ (_admin/content_).
1. Знайдіть домашню сторінку. Ви можете знайти її, ввівши "Головна" в поле
    Заголовок.
1. Виберіть _Переводи_ з меню, що випадає в рядку елемента вмісту Головна.
     З'явиться сторінка _Переводи Головна сторінка_.
1. Натисніть _Добавити_ в рядку _Spanish_.
    ![Додавання перекладу вмісту](/images/language-content-translate-add.webp)
1. Зверніть увагу, що призначений інтерфейс користувача переключився на іспанську. Щоб переключити його назад на
    Українську, видаліть _es_ в URL браузера. наприклад,
    якщо ваш URL виглядає _example.com/es/node/5/translations/add/en/es_,
    видаліть _es_, який йде відразу після _example.com_.
1. Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>опис</th>
          <th>значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тема</td>
          <td>Перекладена назва сторінки</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Вміст</td>
          <td>Переклад вмісту сторінки</td>
          <td></td>
        </tr>
        <tr>
          <td>Синонім URL > Синонім URL</td>
          <td>Перекладена адреса веб-сторінки</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Натисніть _Зберегти (цей переклад)_.
1. Перейдіть на домашню сторінку свого сайту, щоб переглянути нещодавно перекладену сторінку.
## Поліпшіть своє розуміння

* Дотримуйтесь інструкцій вище, щоб перевести більше вмісту на вашому сайті.
* [language-config-translate](./language-config-translate.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="Translating Content" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
