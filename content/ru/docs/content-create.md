---
title: "Создание элемента контента"
description: "Как создать элемент контента для использования в качестве главной страницы."
id: "content-create"
translation_key: "content-create"
source_locale: "ru"
---
## Цель { #content-create }

Создать и опубликовать элемент контента, который будет использоваться как главная
страница сайта.
## Необходимые знания

* [content-paths](./content-paths.md)
* [planning-data-types](./planning-data-types.md)
## Предпосылки сайта

Тип содержимого _Основная страница_ (_Basic page_) должен существовать. Он создаётся при
установке сайта с использованием стандартного установочного профиля ядра.
## Шаги

1. В административном меню _Управление_ перейдите _Содержимое_ > _Добавить содержимое_ >
    _Основная страница_ (_node/add/page_). Откроется форма _Создать Основную страницу_.
1. Нажмите _Редактировать краткое описание_.
1. Заполните поля, как показано ниже.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Пояснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Заголовок</td>
          <td>Заголовок страницы. Также будет использоваться как мета-тег в исходном коде, URL-алиас и метка элемента контента на административных страницах</td>
          <td>Home</td>
          <td>Краткое описание</td>
          <td>Краткое содержание поля Текст. Может использоваться как тизер</td>
        </tr>
        <tr>
          <td>Текст</td>
          <td>Полное содержимое страницы</td>
          <td>Добро пожаловать на Рынок продуктор города N — ваш</td>
        </tr>
        <tr>
          <td>Опубликовано</td>
          <td>Опубликован ли контент для публичного просмотра</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>URL-алиас > URL-алиас</td>
          <td>Альтернативный относительный путь к содержимому</td>
          <td>/home</td>
        </tr>
      </tbody>
    </table>

    Нажав кнопку _Исходный код_ на панели визуального редактора, вы можете увидеть
    HTML-код редактируемого текста.
    <img src="/images/content-create-create-basic-page.webp" alt="Создание основной страницы" width="100%" />

1. Нажмите _Предпросмотр_, чтобы убедиться, что всё выглядит как ожидалось.
1. Нажмите _Вернуться к редактированию_.
1. Нажмите _Сохранить_. Контент будет сохранён и появится на
    странице _Содержимое_.
1. По тем же шагам создайте страницу «О нас» с заголовком «About» и текстом,
    рассказывающим об истории городского рынка.
## Узнайте больше

* [menu-home](./menu-home.md)
* [menu-link-from-content](./menu-link-from-content.md)
* [language-content-translate](./language-content-translate.md)
## Связанные понятия

* [language-concept](./language-concept.md)
* [content-paths](./content-paths.md)
* [content-edit](./content-edit.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/h312fekiSNE" title="Создание элемента контента" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

[_Drupal.org_ — «About nodes»](https://www.drupal.org/docs/core-modules-and-themes/core-modules/node-module/about-nodes)

*Авторы*

Написано: [Agnes Kiss](https://www.drupal.org/u/pixiekiss) and
[Boris Doesborg](https://www.drupal.org/u/batigolix)

Переведено: [Аземша Дарья](https://www.drupal.org/u/asdasha).
