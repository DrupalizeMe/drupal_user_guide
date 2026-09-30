---
title: "Концепция: Способы загрузки и установки ядра Drupal"
description: "Обзор методов, которыми можно загрузить ядро Drupal."
id: "install-decide"
translation_key: "install-decide"
source_locale: "ru"
---
## Необходимые знания { #install-decide }

* [install-tools](./install-tools.md)
* [install-requirements](./install-requirements.md)
* [understanding-distributions](./understanding-distributions.md)
## Какие методы доступны для загрузки ядра Drupal?

Перед тем как начать создание сайта, нужно сначала скачать ядро Drupal.
В зависимости от ваших задач, есть несколько способов скачать ядро Drupal:

- **Использовать Composer:** Если вы планируете создавать сайт и продолжать его развивать, рекомендуется использовать Composer для загрузки ядра, потому что Composer корректно управляет зависимостями. Если вы планируете использовать Drush (смотрите [install-tools](./install-tools.md)), Composer обязателен. Смотрите [install-composer](./install-composer.md) для инструкций.
- **Попробовать бесплатное онлайн-демо:** Если вы оцениваете, стоит ли использовать Drupal для создания сайта, вы можете воспользоваться онлайн-провайдером для получения демо-установки ядра за 20 минут или меньше. См. страницу [_Drupal.org_ "Try Drupal"](https://www.drupal.org/try-drupal).
- **Использовать установщик в один клик от хостинг-провайдера:** Если вы устанавливаете ядро на хостинге, ваш провайдер может предлагать специальную документацию и/или установку в один клик. См. [_Drupal.org_ список поддерживающих хостинг-провайдеров](https://www.drupal.org/association/supporters/hosting).
- **Использовать преднастроенное окружение:** Используйте преднастроенное окружение или виртуальную машину, содержащие Drupal и все необходимые компоненты для локальной установки. См. раздел для вашей ОС в [_Drupal.org_ "Local server setup guide"](https://www.drupal.org/docs/develop/local-server-setup).
## Что происходит при установке ядра Drupal?

_Установка_ ядра Drupal означает настройку таблиц базы данных,
конфигурации и учетной записи администратора, чтобы вы могли создавать и использовать свой сайт.
## Какие методы доступны для установки ядра Drupal?

Есть несколько способов установить ядро Drupal:

- **Автоматическая установка:** Если вы используете онлайн-демо или установщик в один клик от хостинг-провайдера, ядро может быть установлено автоматически.
- **Интерактивная установка:** В ядре есть интерактивная установка, которая предлагает несколько форм. После заполнения этих форм завершается установка. См. [install-prepare](./install-prepare.md) и [install-run](./install-run.md).
- **Инструменты командной строки:** Установку также можно выполнить с помощью командных инструментов (см. [install-tools](./install-tools.md)).
- **Установка демо-сайта:** Быстро создайте временный демо-сайт, использующий встроенный веб-сервер и SQLite из PHP, выполнив команду ниже из корня вашего проекта. В этом случае не потребуется запускать интерактивный установщик. Подробнее — [Evaluator Guide](https://www.drupal.org/docs/official_docs/evaluator-guide).

```text
  php -d memory_limit=256M core/scripts/drupal quick-start demo_umami
```

*Авторы*

Написано и отредактировано [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) из
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
и [Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com)

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
