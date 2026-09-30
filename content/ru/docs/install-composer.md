---
title: "Использование Composer для загрузки и обновления файлов"
description: "Как использовать инструмент Composer для управления файлами ядра Drupal, а также для загрузки и обновления модулей и тем оформления."
id: "install-composer"
translation_key: "install-composer"
source_locale: "ru"
---
## Цель { #install-composer }

Используйте Composer для загрузки или обновления файлов и зависимостей ядра, а также дополнительных модулей и тем оформления.
## Необходимые знания

[install-tools](./install-tools.md)
## Требования к сайту

Если вы хотите использовать Composer, он должен быть установлен либо на локальном сервере разработки, либо на вашем рабочем сайте. Смотрите [install-tools](./install-tools.md).
## Шаги

Если вы не можете установить Composer на рабочем сервере, выполните действия из любого из разделов ниже на локальном сервере, затем перенесите все обновлённые или добавленные файлы на ваш рабочий сайт. Рекомендуется создать архив или zip-файл новых и изменённых директорий, передать архив на рабочий сервер, удалить изменённые директории и распаковать архив. Обязательно проверьте, были ли обновлены или добавлены следующие файлы в корне вашей установки:

* _vendor_ directory
* _autoload.php_
* _composer.json_
* _composer.lock_
### Использование Composer для загрузки ядра

Выполните эти шаги, если вы ещё не загрузили или не устанавливали ядро и хотите использовать Composer для загрузки ядра и его внешних зависимостей:

1. В командной строке перейдите на уровень выше директории, где вы хотите разместить сайт.
1. Введите следующую команду, где _mydir_ — это директория, которую вы хотите создать:
    ```text
    composer create-project drupal/recommended-project mydir
    ```
1. Последняя версия ядра будет загружена в поддиректорию _mydir/web_.
### Использование Composer для загрузки модуля или темы

Выполните эти шаги, если вы уже используете Composer для управления ядром и хотите добавить дополнительный модуль или тему вместе с их зависимостями.

1. Каждый раз, когда вы хотите добавить модуль или тему, определите короткое имя проекта. Это последняя часть URL страницы проекта; например, модуль Geofield на
    https://www.drupal.org/project/geofield имеет короткое имя `geofield`.
1. Для загрузки дополнительного модуля или темы, вместе с внешними зависимостями, введите следующую команду в корне сайта (замените короткое имя на нужное):
    ```text
    composer require drupal/geofield
    ```
### Использование Composer для обновления ранее загруженных файлов

Выполните эти шаги для обновления файлов ядра, модуля или темы, после того как вы начали управлять зависимостями через Composer:

1. Определите короткое имя проекта, который хотите обновить. Для ядра это _core_. Для дополнительных модулей и тем это последняя часть URL страницы проекта; например, модуль Geofield на https://www.drupal.org/project/geofield имеет короткое имя `geofield`.
1. Чтобы обновить до последней стабильной версии, используйте следующую команду, подставляя короткое имя проекта:
    ```text
    composer update drupal/geofield --with-dependencies
    ```
1. Если нужна определённая версия, узнайте как правильно указать номер версии. Например, для версии 8.x-1.16 модуля — просто 1.16, а для ядра 9.0.7 — 9.0.7. Затем введите команду (заменяя короткое имя проекта и версию):
    ```text
    composer require drupal/geofield:1.16
    ```
## Расширьте своё понимание

Подробнее о командах Composer можно узнать через встроенную справочную систему Composer. Например, чтобы узнать больше о команде `create-project`, введите в командной строке `composer help create-project`.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Using Composer and Git to Download Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [_Drupal.org_ документация "Использование Composer для управления зависимостями сайта"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* [_Drupal.org_ документация "Обновление ядра Drupal через Composer"](https://www.drupal.org/docs/updating-drupal/update-drupal-core-via-composer)
* [_Drupal.org_ документация "Добавление Composer на существующий сайт"](https://www.drupal.org/docs/installing-drupal/add-composer-to-an-existing-site)

*Авторы*

Адаптировано [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), и
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) в
[Drupalize.Me](https://drupalize.me) из
["Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
copyright 2000-2026, отдельные участники
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
