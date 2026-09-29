---
title: "Завантаження функціоналу і установка модуля з _Drupal.org_"
description: "Як завантажити і встановити модуль з Drupal.org (використовуючи призначений для користувача інтерфейс) або за допомогою Drush."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "uk"
---
## Мета { #extend-module-install }

Завантажити та встановити
[Admin Toolbar модуль](https://www.drupal.org/project/admin_toolbar),
що дозволяє вам легко переглядати розділ адміністрування
сайту.
## Необхідні знання

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Вимоги до сайту

* Якщо ви хочете встановити модулі через сайт, модуль ядра Update Manager
повинен бути встановлений. Дивіться [config-install](./config-install.md) для інструкцій по установці
модулів.
* Якщо хочете використовувати Drush, він повинен бути встановлений. Дивіться [install-tools](./install-tools.md).
## Кроки

Ви можете використовувати адміністративний інтерфейс для завантаження і установки додаткового
модуля. Якщо ви встановлюєте модуль для користувача, а не додатковий модуль,
якщо ви бачите повідомлення _Установка модулів і тем вимагає FTP доступ
до вашого серверу_, або якщо наведені нижче кроки не працюють для завантаження і розпакування файлів
модуля, виконайте кроки в [extend-manual-install](./extend-manual-install.md). Якщо ви використовуєте
Composer для управління файлами вашого сайту, дотримуйтесь кроків для завантаження в
[install-composer](./install-composer.md). У будь-якому з цих випадків, ви можете встановити модуль
через Drush, або продовжити з кроку 7 в інструкції для
адміністративного інтерфейсу.
### Використання адміністративного інтерфейсу

1. На сторінці проекту _Admin toolbar_ на drupal.org
    (_https://www.drupal.org/project/admin_toolbar_), скрольте до розділу _Downloads_
    внизу сторінки.
1. Скопіюйте адресу _tar.gz_ посилання. Залежно від вашого пристрою і браузера,
    ви можете зробити це, клацнувши правою кнопкою миші і вибравши _Копіювати адресу посилання_.
    ![Знайти URL модуля](/images/extend-module-install-download.png)
1. В _Керування_ адміністративного меню, перейдіть в _Розширення_
    (_admin/modules_). З'явиться сторінка _Розширення_.
1. Натисніть _Встановити новий модуль_. З'явиться сторінка _Встановити новий модуль_.
    ![Установка модуля з URL](/images/extend-module-install-admin-toolbar-do.png)
1. В полі _Встановити з URL-адреси_, вставте скопійоване посилання. це значення
    може виглядати так:
    _https://ftp.drupal.org/files/projects.admin_toolbar-8.x-1.14.tar.gz_
1. Натисніть _Встановити_ для завантаження і розпакування нового модуля на сервер. файли
    завантажуються в директорію _modules_.
1. Натисніть _Включити нові додані модулі_ для повернення на сторінку _Розширення_. Якщо ви
    використовували процедуру завантаження вручну, згадану раніше, ви можете продовжити
    з цього кроку, і потрапити на сторінку _Розширення_ використовуючи _Керування_
    адміністративного меню і перейти в _Розширення_ (_admin/modules_).
1. Знайдіть модуль _Admin toolbar_ і перевірте його.
1. Натисніть _Встановити_ для включення нового модуля.
### Використання Drush для установки модуля

1. Знайдіть ім'я проекту модуля, який хочете встановити, остання частина
    URL сторінки проекту модуля. Наприклад, якщо URL проекту
    _https://www.drupal.org/project/admin_toolbar_, ім'я проекту буде
    "admin_toolbar".
1. Завантажте модуль, використовуючи кроки в [extend-manual-install](./extend-manual-install.md) або
    [install-composer](./install-composer.md).
1. Запустіть наступну Drush команду, використовуючи ім'я проекту (наприклад,
    `admin_toolbar`) в якості параметра:
    ```text
    drush pm:enable admin_toolbar
    ```
1. Дотримуйтесь інструкцій на екрані.
## Поліпшіть своє розуміння

* Переконайтесь, що
[Admin Toolbar модуль](https://www.drupal.org/project/admin_toolbar)
працює, переглядаючи меню в розділі адміністрування.
* Встановіть і налаштуйте
[Pathauto модуль](https://www.drupal.org/project/pathauto)
щоб сторінки контенту на вашому сайті за замовчуванням отримували хороші URL-адреси. дивіться
[content-paths](./content-paths.md) для додаткових відомостей по URL.
* Якщо ви не бачите змін на вашому сайті, можливо вам варто
очистити кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/GJWS2TLtEpk" title="Downloading and Installing a Module from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

* [_Drupal.org_ сторінка документації спільноти "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* ["Download and Extend "сторінка на _Drupal.org_](https://www.drupal.org/download)
* [Admin Toolbar модуль на _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Автори*

Написано і відредаговано [Boris Doesborg](https://www.drupal.org/u/batigolix) і
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
