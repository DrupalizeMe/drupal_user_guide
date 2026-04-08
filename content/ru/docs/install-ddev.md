---
title: "Настройка окружения с помощью DDEV"
description: "Как настроить сайт для разработки с помощью DDEV — локального окружения для разработки PHP-приложений."
id: "install-ddev"
translation_key: "install-ddev"
source_locale: "ru"
---
## Цель { #install-ddev }

Настроить локальное окружение для разработки с помощью DDEV для запуска приложения и Composer для загрузки необходимых файлов.
## Необходимые знания

[install-requirements](./install-requirements.md)
[install-composer](./install-composer.md)
## Почему использовать DDEV?

DDEV — это локальное окружение для разработки PHP-приложений, построенное на Docker. Оно включает все необходимые компоненты для работы основного программного обеспечения и используется многими разработчиками в сообществе Drupal.
## Шаги

1. Следуйте
    [официальной инструкции по установке DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/)
    для установки DDEV на ваш локальный компьютер. DDEV доступен для Windows, Mac и Linux. Процесс установки отличается для каждой операционной системы, поэтому обязательно следуйте инструкциям для вашей ОС.
1. После установки DDEV следуйте
    [инструкциям по быстрому старту для Drupal](https://ddev.readthedocs.io/en/stable/users/quickstart/#drupal)
    для загрузки основного программного обеспечения с помощью Composer и установки его в окружение DDEV.
1. Выполните команду `ddev launch` из каталога, созданного на предыдущем шаге, чтобы открыть сайт в веб-браузере и убедиться, что окружение работает корректно.
## Связанные темы

* [install-requirements](./install-requirements.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Дополнительные ресурсы

* [Документация DDEV](https://ddev.readthedocs.io/en/stable/)
* [Установка Drupal с помощью DDEV для локальной разработки](https://www.drupal.org/docs/getting-started/installing-drupal/install-drupal-using-ddev-for-local-development)

*Благодарности*

Автор и редактор: [Джо Шинделар](https://www.drupal.org/u/eojthebrave) на
[Drupalize.Me](https://drupalize.me).
