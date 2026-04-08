---
title: "Основы: пути, синонимы и URL-адреса"
description: "Обзор путей, синонимов и URL-адресов (с примерами)."
id: "content-paths"
translation_key: "content-paths"
source_locale: "ru"
---
## Что такое URL? { #content-paths }

URL — сокращение от «Uniform Resource Locator», адрес страницы в сети.
Это «имя», по которому браузер определяет страницу для отображения.
В примере «Посетите нас по адресу _example.com_.» _example.com_ — это URL
главной страницы вашего сайта, который пользователи вводят для поиска контента.
## Что такое путь?

Путь — это уникальная последняя часть URL, указывающая на конкретную функцию
или кусок содержимого. Например, для страницы с полным URL
_http://example.com/node/7_ путь — _node/7_.

Ниже приведены примеры путей, которые можно встретить на сайте:

* _node/7_
* _taxonomy/term/6_
* _admin/content/comment_
* _user/login_
* _user/3_
## Что такое синоним?

В ядре есть функция «URL-синоним», позволяющая присвоить
содержимому более понятное имя. Поэтому, если у вас есть страница «О нас»
с путём _node/7_, можно задать синоним, и посетители увидят её как
_http://www.example.com/AboutUs_. Эту возможность предоставляет
модуль ядра Path, поддерживающий синонимы URL.
## Связанные темы

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)

*Авторы*

Адаптировано [Diána Lakatos](https://www.drupal.org/u/dianalakatos) из
[Pronovix](https://pronovix.com/) на основе
["URL aliases"](https://www.drupal.org/node/120631) и
["URL paths"](https://www.drupal.org/docs/7/understanding-drupal/url-paths)
авторские права 2000–2017 принадлежат отдельным участникам
[Drupal Community Documentation](https://www.drupal.org/documentation)

Переведено: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
