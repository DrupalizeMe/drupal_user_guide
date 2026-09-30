---
title: "Основи: Крон"
description: "Огляд cron і чим він відрізняється від Unix cron."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "uk"
---
## Що таке cron завдання? { #security-cron-concept }

Щоб ваш сайт і його модулі продовжували нормально функціонувати, група
адміністративних операцій повинна виконуватися періодично. Ці операції
називаються завданнями _cron_. Приклади cron завдань: перевірка оновлень для модуля або
теми, індексація контенту для пошуку або очищення тимчасових файлів.
## Який зв'язок між cron завданнями і Unix cron?

Операційні системи на основі Linux/Unix мають планувальник cron, який можна використовувати для запуску
періодичних задач. Ви можете використовувати планувальник cron сервера для планування запуску
cron завдань сайту. Крім того, ви можете використовувати модуль ядра Automated Cron для
запуску завдань. Ви можете перевірити статус cron завдань сайту в звіті про стан.
## Схожі теми

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Додаткові ресурси

[_Drupal.org_ сторінка документації спільноти "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Автори*

Написано і змінено
[Diána Lakatos](https://www.drupal.org/u/dianalakatos) із
[Pronovix](https://pronovix.com/),
[Dave Hansen-Lange](https://www.drupal.org/u/dalin) із
[Advomatic](https://www.advomatic.com/),
і [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
