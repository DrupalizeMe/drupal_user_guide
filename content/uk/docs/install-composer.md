---
title: "Використання Composer і Git для завантаження файлів"
description: "Як використовувати інструмент Composer для управління файлами ядра і додавати модулі і теми."
id: "install-composer"
translation_key: "install-composer"
source_locale: "uk"
---
## Мета { #install-composer }

Використання Composer для завантаження та оновлення файлів і залежностей в ядрі,
або доданих модулях чи темах. Пропустіть цю тему якщо ви не використовуєте Composer.
## Необхідні знання

[install-tools](./install-tools.md)
## Вимоги до сайту

Якщо ви хочете використовувати Composer, він повинен бути встановлений або на сервері вашої локальної розробки
або на живому сайті. Дивіться [install-tools](./install-tools.md).
## Кроки

Якщо ви не можете встановити інструмент Composer на свій сервер, ви можете
слідувати кроками в будь-якому з розділів нижче на вашому локальному сервері, і потім
перенести всі оновлені або додані файли на ваш сервер для живого сайту. Рекомендована
процедура полягає в тому, щоб зробити архів або zip-файл з нових і змінених директорій,
перенести архів на ваш сервер для живого сайту, видалити директорії, які були
змінені, і розпакувати архів. Обов'язково перевіряйте наявність оновлень і доповнень
в наступних файлах, в корені вашої установки:

* _vendor_ directory
* _autoload.php_
* _composer.json_
* _composer.lock_
### Використання Composer для завантаження ядра

Виконайте наступні дії, якщо ви ще не завантажили або що не встановили ядро,
і ви хочете використовувати Composer для завантаження ядра і
його зовнішніх залежностей:

1. У командному рядку перейдіть на один рівень вище директорії, де ви хочете
    розташувати ядро.
1. Введіть цю команду, де _mydir_ директорія, яку ви хочете створити для проекту:
    ```text
    composer create-project drupal-composer/drupal-project: 8.x-dev mydir --no-interaction
    ```
1. Останній випуск ядра буде встановлений в _mydir/web_
    піддиректорії; Ви отримаєте деякі додаткові інструменти, такі як Drush і Drupal Console
    в _mydir/vendor_ директорії.
### Перетворення раніше завантаженого сайту в Composer

Якщо ви раніше завантажували ядро ​​без використання Composer, ви можете
виявити, що ви хочете або повинні використовувати Composer для управління або поновлення
залежностей. Щоб перенести ваш існуючий сайт на використання Composer, введіть
наступні команди в корені вашого сайту:

```text
composer global require grasmash/composerize-drupal
composer composerize-drupal --composer-root=. --drupal-root=.
```

Зверніть увагу, що це також зробить модулі, теми і профілі, які ви раніше
завантажували без використання Composer, доступними для Composer, якщо вони були поміщені в директоріях _modules/contrib_, _themes/contrib_, and _profiles/contrib_. Якщо
ви розмістили їх в іншому місці, ви можете розглянути можливість видалити
раніше встановлення модулі і теми, а потім слідувати інструкціям
нижче, щоб повторно завантажити їх за допомогою Composer.
### Використання Composer для завантаження модулів або тем

Виконайте наступні дії, якщо ви вже використовуєте Composer для управління ядром,
і ви хочете використовувати Composer для додавання модуля або теми з
їх залежностями.

1. Кожен раз, коли ви хочете додати модуль або тему, визначте
    коротку назва проекту. Це остання частина URL сторінки проекту;
    наприклад, модуль Geofield, в
    https://www.drupal.org/project/geofield, має коротку назву +geofield+.
1. Щоб завантажити модуль або тему, разом з їх зовнішніми
    залежностями, введіть наступну команду в корені вашого сайту (змінивши
    коротку назва модуля або теми для +geofield+):
    ```text
    composer require drupal/geofield
    ```
### Використання Composer для поновлення раніше завантажених файлів

Виконайте наступні дії, щоб оновити файли ядра,
модуля або теми, після того як почали керувати залежностями через
Composer:

1. Визначте коротку назва проекту, який ви хочете оновити. Для ядра
    це _core_. Для модулів або тем, це остання
    частина URL сторінки проекту; наприклад, модуль Geofield, в
    https://www.drupal.org/project/geofield, має коротку назву +geofield+.
1. Якщо ви хочете оновити до останньої стабільної версії, використовуйте наступні
    команди, підставляючи коротку назву проекту для поновлення
    +geofield+:
    ```text
    composer update drupal/geofield --with-dependencies
    ```
1. Якщо вам потрібна конкретна версія, до номера якої версії ви
    хочете оновитися. Наприклад, для модуля версії 8.x-1.7, ви
    будете вводити тільки 1.7, а для версії ядра 8.3.1, ви будете
    вводити 8.3.1. Потім введіть наступну команду в корені вашого сайту
    (Підставивши коротку назву проекту замість +geofield+ і правильний
    номер версії):
    ```text
    composer require drupal/geofield:1.7
    ```
## Поліпшіть своє розуміння

Ви можете дізнатися більше про команди Composer за допомогою системи довідки Composer.
Наприклад, щоб дізнатися більше про команду `create-project`, введіть
`Composer help create-project` в вашому командному рядку терміналу.
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Using Composer and Git to Download Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові документи

* [_Drupal.org_ сторінка документації спільноти "Використання Composer для управління залежностями сайту Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* [_Drupal.org_ сторінка документації спільноти "Оновлення ядра Drupal через Composer"](https://www.drupal.org/docs/updating-drupal/update-drupal-core-via-composer)
* [_Drupal.org_ сторінка документації спільноти "Додавання Composer на існуючий сайт"](https://www.drupal.org/docs/installing-drupal/add-composer-to-an-existing-site)

*Автори*

Адаптовано [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), і
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) із
[Drupalize.Me](https://drupalize.me) від
["Using Composer to manage Drupal site dependencies"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
