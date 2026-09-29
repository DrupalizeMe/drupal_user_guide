---
title: "Перевод контента"
description: "Как перевести страницу на другой язык."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "ru"
---
## Цель { #language-content-translate }

Перевести домашнюю страницу на испанский язык.
## Необходимые знания

[language-concept](./language-concept.md)
## Требования к сайту

* Должен существовать материал "Главная страница". См. [content-create](./content-create.md).
* Модуль ядра Content Translation должен быть установлен, и на сайте должно быть как минимум два языка. См. [language-add](./language-add.md).
* Тип материала _Страница_ должен быть настроен как переводимый. См. [language-content-config](./language-content-config.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Содержимое_ (_admin/content_).
1. Найдите домашнюю страницу. Для поиска можно ввести "Главная" в поле заголовка.
1. В строке материала "Главная" выберите _Переводы_ из выпадающего меню. Откроется страница _Переводы: Главная страница_.
1. Нажмите _Добавить_ в строке _Spanish_ (Испанский).
    <img src="/images/language-content-translate-add.png" alt="Добавление перевода содержимого" width="100%" />
1. Обратите внимание, что пользовательский интерфейс переключился на испанский. Чтобы вернуть его на русский, удалите первую часть _es_ из URL-адреса браузера. Например, если ваш URL выглядит как _example.com/es/node/5/translations/add/en/es_, удалите _es_, который идет сразу после _example.com_.
1. Заполните поля, как показано ниже:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Заголовок</td>
          <td>Переведённый заголовок страницы</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Содержимое</td>
          <td>Переведённый текст страницы</td>
          <td></td>
        </tr>
        <tr>
          <td>Синоним URL</td>
          <td>Переведённый адрес веб-страницы</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Нажмите _Сохранить (этот перевод)_.
1. Перейдите на домашнюю страницу сайта, чтобы увидеть недавно добавленный перевод.
## Расширьте своё понимание

* Повторите эти шаги для перевода других материалов на вашем сайте.
* [language-config-translate](./language-config-translate.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="Translating Content" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
