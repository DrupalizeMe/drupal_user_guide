---
title: "Установка модуля Drupal"
description: "Как установить модуль ядра или сторонний модуль через административный интерфейс или с помощью Drush."
id: "config-install"
translation_key: "config-install"
source_locale: "ru"
---
## Цель { #config-install }

Установить модуль ядра или сторонний модуль, файлы которого уже
загружены на сайт, используя административный интерфейс или Drush.
## Необходимые знания

[understanding-modules](./understanding-modules.md)
[install-composer](./install-composer.md)
## Требования к сайту

Если вы хотите использовать Drush для установки модулей, сам Drush должен быть установлен. Смотрите
[install-tools](./install-tools.md).
## Шаги

Вы можете установить модули через административный интерфейс или Drush.

Сторонние модули не входят в ядро; их необходимо предварительно
загрузить с помощью Composer. Подробности см. в [install-composer](./install-composer.md).
### Использование административного интерфейса

1. В административном меню _Управление_ перейдите в _Расширение_
    (_admin/modules_). На странице _Расширение_ отображаются все доступные модули
    на сайте.
1. Отметьте флажками модули, которые вы хотите установить. Например,
    отметьте модуль ядра Ban.
    <img src="/images/config-install-check-modules.png" alt="Включение модуля Ban" width="100%" />
1. Нажмите _Установить_. Выбранные модули будут установлены.
### Использование Drush

1. В административном меню _Управление_ перейдите в _Расширение_
    (_admin/modules_). На странице _Расширение_ отображаются все доступные модули
    на сайте.
1. Раскройте информационную область модуля, чтобы узнать его машинное имя.
    Например, машинное имя модуля ядра Ban — _ban_.
1. Выполните следующую команду Drush для установки модуля:
    ```text
    drush pm:enable ban
    ```
## Расширьте понимание

Если вы не видите изменений на сайте, возможно, нужно очистить кэш. Смотрите [prevent-cache-clear](./prevent-cache-clear.md).
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/HymQsDOcT3E" title="Установка модуля" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

[Drush](http://www.drush.org)

*Авторы*

Написано и отредактировано by [Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
