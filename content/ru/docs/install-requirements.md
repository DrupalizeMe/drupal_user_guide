---
title: "Основы: Требования к серверу"
description: "Обзор требований к серверу для установки и работы ядра Drupal."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "ru"
---
## Каковы требования для запуска ядра Drupal? { #install-requirements }
### Место на диске

Общий объём дискового пространства, необходимого для вашего сайта, зависит от его размера и структуры. Базовые файлы ядра Drupal занимают около 100 МБ на сервере. Дополнительные модули и темы потребуют больше места, также необходима область для хранения медиафайлов, резервных копий и других файлов, загружаемых или генерируемых сайтом. База данных также занимает место на диске, но, как правило, это другая папка или даже отдельный сервер.
### PHP

**PHP 8.3 или выше**. Минимальный лимит памяти PHP (memory_limit) — 64 МБ, однако для современных сайтов, особенно с дополнительными модулями или при использовании Composer и других CLI-инструментов на PHP, рекомендуется устанавливать лимит памяти значительно выше (128–256 МБ и более).

Для работы Drupal требуются определённые PHP-расширения. Их точный список зависит от способа установки ядра и используемых вами модулей. Как правило, на хостингах все необходимые расширения уже установлены. При самостоятельной установке вы получите сообщение об ошибке, если какого-либо расширения не хватает. Список всех необходимых расширений — по ссылке:
[PHP requirements](https://www.drupal.org/docs/getting-started/system-requirements/php-requirements).
### Веб-сервер

- **Apache (рекомендуется):** Наиболее часто используемый веб-сервер. Drupal работает на **Apache 2.4.7** и выше (UNIX/Linux, OS X или Windows) с установленным и включённым модулем mod_rewrite. В конфигурации виртуального хоста Apache должно быть указано _AllowOverride All_ для работы с _.htaccess_.
- **PHP-встроенный сервер:** Для временного локального демо-сайта вы можете запускать сайт только с помощью встроенного в PHP сервера, без установки полноценного веб-сервера.
- **Nginx:** Поддерживается Nginx **0.7** и выше (UNIX/Linux, OS X или Windows). Должен быть установлен и включён модуль ngx_http_rewrite_module.
### База данных

Используйте одну из следующих СУБД:

* **MySQL 8.0+** (или совместимые MariaDB 10.6+, Percona 8.0+) с основным движком хранения InnoDB
* **PostgreSQL 16** или выше с расширением pg_trgm
* **SQLite 3.45** или выше. Временные локальные демо-сайты используют SQLite, который включён в PHP. Убедитесь, что версия PHP содержит нужную версию SQLite.
## Дополнительные материалы

* [_Drupal.org_: System requirements](https://www.drupal.org/docs/system-requirements)
* [PHP Runtime Configuration (memory_limit и другие параметры)](https://secure.php.net/manual/en/configuration.php)
* [Установка Drupal на локальной машине](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Создание демо-сайта Drupal для ознакомления](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Авторы*

Адаптировано [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987), и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), и
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) из [Drupalize.Me](https://drupalize.me),
на основе ["System requirements"](https://www.drupal.org/docs/system-requirements),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
