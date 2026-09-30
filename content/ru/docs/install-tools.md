---
title: "Основы: Дополнительные инструменты"
description: "Обзор инструментов, которые позволяют быстрее и удобнее создавать и поддерживать сайты на Drupal."
id: "install-tools"
translation_key: "install-tools"
source_locale: "ru"
---
## Какие инструменты доступны создателям сайтов? { #install-tools }

В разработке и поддержке сайта Drupal вам помогут следующие инструменты:

- **Drush:** Подробнее о командных инструментах ниже.
- **Git:** Подробнее о системе контроля версий ниже.
- **Composer:** Подробнее о Composer — ниже.
- **Devel:** [Devel](https://www.drupal.org/project/devel) — модуль для разработчиков, который облегчает отладку, просмотр данных, генерацию тестового контента и многое другое.
## Что такое инструменты командной строки?

Инструменты командной строки — альтернатива админ-интерфейсу для работы с сайтом. Они позволяют:

* Выполнять задачи быстрее и удобнее, чем через веб-интерфейс.
* Писать автоматические сценарии для регулярных операций.
* Получать доступ к возможностям, которых нет в интерфейсе сайта (например, выполнение SQL-запросов).

Наиболее популярный инструмент — [Drush](https://www.drush.org/), который подходит для разработчиков, DevOps и администраторов. В этом руководстве приводятся примеры команд Drush. Для использования Drush необходим Composer и доступ к терминалу.

Установка Drush (в корне проекта):

```text
composer require drush/drush
```
## Что такое система управления версиями?

Система контроля версий (например, [Git](https://git-scm.com/)) позволяет:

* Тестировать правки локально до выкладки на живой сайт.
* Сравнивать изменения и возвращаться к прежним версиям файлов.
* Объединять изменения от разных разработчиков.
* Поддерживать синхронизацию кода и конфигурации между локальными и рабочими сайтами.

Git — современная распределённая система, работает под Linux, Windows и macOS, а также поддерживается такими сервисами как [GitHub](https://github.com/) и [GitLab](https://about.gitlab.com/).
## Для чего используется Composer?

[Composer](https://getcomposer.org/) — инструмент для управления зависимостями PHP. С его помощью вы устанавливаете не только сам Drupal, но и модули, темы, а также сторонние библиотеки, которые требуются некоторым расширениям.

Drupal и многие модули требуют сторонних библиотек, поэтому Composer считается стандартом для современных Drupal-сайтов. Кроме того, Drush также устанавливается через Composer.
## Какие ещё инструменты полезны для разработчиков?

В дополнение к вышеперечисленным:

- **Coder:** [Coder](https://www.drupal.org/project/coder) — инструмент для проверки кода модулей и тем на соответствие стандартам кодирования. Позволяет автоматизировать исправление ошибок форматирования.
- **Инструменты разработчика в браузере:** В браузерах (например, Firefox, Chrome) доступны встроенные инструменты “Инспектор”, “DevTools” и др., которые позволяют анализировать и отлаживать HTML, CSS и JS прямо на сайте.
## Связанные темы

[install-composer](./install-composer.md)
## Дополнительные материалы

* [_Drupal.org_: Development tools overview](https://www.drupal.org/docs/develop/development-tools/development-tools-overview)
* [_Drupal.org_: Using Composer with Drupal](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)
* [Wikipedia: Distributed version control](https://en.wikipedia.org/wiki/Distributed_version_control)

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), [Joe Shindelar](https://www.drupal.org/u/eojthebrave) (Drupalize.Me). Часть текста адаптирована с ["Introduction to Git"](https://www.drupal.org/node/991716), авторские права — сообществу [Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin), [DrupalBook](https://drupalbook.org/ru).
