---
title: "Концепция: Модули"
description: "Обзор модулей и функциональности, для которой они могут быть использованы."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "ru"
---
## Необходимые знания { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## Что такое модуль?

Модуль — это набор PHP, JavaScript и/или CSS файлов, который расширяет возможности сайта
и добавляет функциональность.

Вы можете включить возможности и функциональность с помощью _установки_ модуля, и
вы можете отключить их с помощью _удаления_ модуля; перед удалением, возможно,
придётся удалить данные и конфигурации, связанные с возможностями или функциональностью.

Каждый установленный модуль увеличивает время, необходимое для генерации страниц на вашем
сайте, поэтому рекомендуется удалять ненужные модули.

Ядро Drupal предоставляет модули для следующей функциональности:

* Управление учетными записями пользователей (модуль ядра User)
* Управление основным содержимым (модуль ядра Node) и полями (модули ядра Field и
Field UI; существуют также модули ядра, обеспечивающие типы полей)
* Управление навигационными меню (модуль ядра Menu UI)
* Создание списков, таблиц и блоков на основе существующего содержимого (модули ядра Views и
Views UI)

Вы можете загрузить дополнительные _дополнительные модули_ с
[_Drupal.org_ Module Downloads](https://www.drupal.org/project/project_module), либо
создать собственные _пользовательские модули_.
## Похожие темы

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Дополнительные ресурсы

[_Drupal.org_ страница документации сообщества "Module developer's guide"](https://www.drupal.org/developing/modules)

*Авторы*

Написано [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

Переведено [Исмайлов Михаил](https://www.drupal.org/u/MishaIsmajlov).
