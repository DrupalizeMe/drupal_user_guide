---
title: "Підготовка до встановлення"
description: "Як завантажити Drupal і задовольнити вимоги по встановленню."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "uk"
---
## Мета { #install-prepare }

Завантажити основне програмне забезпечення, і забезпечити всі необхідні умови.
## Необхідні знання

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* Як встановити і налаштувати серверне програмне забезпечення (при установці на Ваш особистий
комп'ютер)
* Як налаштувати хостинг для стандартного веб-сайту
* Як створити базу даних
## Вимоги сайту

Серверне програмне забезпечення повинно бути встановлено на комп'ютер, де ви плануєте розгорнути свій
сайт. Дивіться [install-requirements](./install-requirements.md).

Залежно від того, як Ви плануєте завантажити основне програмне забезпечення, можливо буде потрібно спершу встановити
додаткові інструменти до програмного забезпечення. Дивіться [install-decide](./install-decide.md) і [install-tools](./install-tools.md).
## Етапи

1. Вибрати методи завантаження і установки основного програмного забезпечення, з
    перерахованих в [install-decide](./install-decide.md). Решта інструкції відносяться до
    параметрів завантаження Composer та інтерактивної програми установки; якщо Ви вибрали
    інші опції, програмне забезпечення повинно бути встановлено для Вас.
1. Налаштування URL і хостингу для вашого сайту на сервері. Підтвердіть, що хостинг
    працює, помістивши простий HTML-файл у веб-кореневий каталог хостингу,
    і відвідавши URL для Вашого сайту.
1. Створіть базу даних, разом з обліковим записом користувача бази даних з повним доступом.
1. Завантажте файли основного програмного забезпечення в кореневий каталог, використовуючи метод,
    який Ви вибрали. Дивіться [install-decide](./install-decide.md) для посилань на інструкції.
## Розширте своє розуміння

Дивіться [install-run](./install-run.md), щоб запустити інтерактивну програму установки.

Крім того, Ви можете використовувати наступну Drush-команду, з каталогу,
в який Ви завантажили програмне забезпечення, де _DB_NAME_, _DB_USER_ і
_DB_PASS_ є обліковими даними Вашої бази даних (database credentials):

```text
drush site:install standard --db-url = 'mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Preparing to Install" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

[Drush](http://www.drush.org)

*Автори*

Написано і відредаговано [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) із
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
і [Jojy Alphonso](https://www.drupal.org/u/jojyja) із
[Red Crackle](http://redcrackle.com).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
