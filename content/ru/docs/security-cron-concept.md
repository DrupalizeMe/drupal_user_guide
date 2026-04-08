---
title: "Основы: Крон"
description: "Обзор крон и его отличий от Unix cron."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "ru"
---
## Что такое задачи cron? { #security-cron-concept }

Для того чтобы ваш сайт и его модули продолжали корректно работать, необходимо регулярно выполнять ряд административных операций. Эти операции называются задачами _cron_. Примеры таких задач: проверка обновлений модулей и тем, индексация контента для поиска или очистка временных файлов.
## Какова связь между cron задачами сайта и Unix cron?

Операционные системы на базе Linux/Unix содержат планировщик cron, который можно использовать для запуска периодических задач. Вы можете настроить запуск задач cron сайта с помощью системного планировщика cron сервера. В качестве альтернативы можно использовать модуль ядра Automated Cron для запуска этих задач. Статус выполнения задач cron сайта можно посмотреть в отчете о состоянии.
## Похожие темы

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Дополнительные ресурсы

[_Drupal.org_ страница документации сообщества "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Авторы*

Написано и отредактировано
[Diána Lakatos](https://www.drupal.org/u/dianalakatos) на
[Pronovix](https://pronovix.com/),
[Dave Hansen-Lange](https://www.drupal.org/u/dalin) на
[Advomatic](https://www.advomatic.com/),
и [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
