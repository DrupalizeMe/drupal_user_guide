---
title: "Завантаження і установка теми оформлення з _Drupal.org_"
description: "Як завантажити і встановити тему оформлення з Drupal.org або за допомогою Drush."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "uk"
---
## Мета { #extend-theme-install }

Завантаження і установка теми оформлення з _Drupal.org_.
## Необхідні знання

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Вимоги до сайту

Якщо ви хочете встановити через сайт, модуль ядра Update Manager повинен бути
встановлений. Дивіться [config-install](./config-install.md) для інструкції по установці модуля.

Якщо ви хочете використовувати Drush, він повинен бути встановлений. Дивіться [install-tools](./install-tools.md).
## Кроки

Ви можете використовувати адміністративний інтерфейс для завантаження і установки додаткової
теми. Якщо ви встановлюєте замовну тему, а не додаткову тему, якщо
ви бачите повідомлення _Установка модулів і тем вимагає FTP-доступу до
вашому серверу_, або якщо наведені нижче кроки не працюють для завантаження і розпакування файлів
теми, виконайте кроки в [extend-manual-install](./extend-manual-install.md). Якщо ви використовуєте Composer
для управління файлами вашого сайту, дотримуйтесь кроків для завантаження в
[install-composer](./install-composer.md). У будь-якому з цих випадків, ви можете встановити тему через
Drush, або продовжити з кроку 7 в інструкції для
адміністративного інтерфейсу нижче.
### Використання адміністративного інтерфейсу

1. На сторінці теми проекту на drupal.org (для прикладу,
    _https://www.drupal.org/project/mayo_), скрольте до _Downloads_ розділу
    внизу сторінки.
1. Клацніть правою кнопкою миші на _tar.gz_ для копіювання адреси.
    ![Пошук URL-адреси теми](/images/extend-theme-install-download.png)
1. В _Керування_ адміністративного меню, перейдіть в _Оформлення_
    (_admin/appearance_). З'явиться сторінка _Оформлення_.
1. Натисніть _Встановити нову тему_. З'явиться сторінка _Встановити нову тему_.
    ![Установка теми](/images/extend-theme-install-page.png)
1. В полі _Встановити з URL-адреси_, вставте скопійоване посилання для скачування. Це посилання може
    виглядати так
    `https://ftp.drupal.org/files/projects/mayo-8.x-1.3.tar.gz`.
1. Натисніть _Встановити_ для завантаження і розпакування нової теми на сервер. файли
    завантажаться в директорію _themes_.
1. Натисніть _Встановити нову додану тему_ для повернення на сторінку _Оформлення_. Якщо ви
    використовували процедуру завантаження вручну, згадану раніше, ви можете продовжити
    з цього кроку, і потрапити на сторінку _Оформлення_ використовуючи _Керування_
    адміністративного меню і перейти в _Керування_ (_admin/appearance_).
1. Знайдіть нову тему в розділі _Не установлені теми_ і натисніть _Встановити і зробити базовою_
    для її використання. Всі не адміністративні сторінки на сайті будуть використовувати цю
    нову тему.
    ![Видалення теми на сторінці Оформлення](/images/extend-theme-install-appearance-page.png)
### Використання Drush для установки теми

1. Знайдіть назву проекту для теми, яку ви хочете встановити, остання частина
    URL сторінки теми проекту. Наприклад, якщо URL проекту
    _https://www.drupal.org/project/mayo_, ім'я проекту буде `mayo`.
1. Завантажте тему, використовуючи кроки в [extend-manual-install](./extend-manual-install.md) або
    [install-composer](./install-composer.md).
1. Виконайте наступні команди Drush, вказавши ім'я проекту (наприклад,
    _mayo_) в якості прикладу:
    ```text
    drush theme:enable mayo
    drush config:set system.theme default mayo
    ```
1. Дотримуйтесь інструкцій на екрані.
## Поліпшіть своє розуміння

* В _Керування_ адміністративного меню, перейдіть в _Оформлення_
(_admin/appearance_) і вимкніть теми, які ви не використовуєте.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* Якщо ви не бачите змін на вашому сайті, можливо вам варто
очистити кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UOYy9A_9_Lw" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано і відредаговано [Joe Shindelar](https://www.drupal.org/u/eojthebrave) в
[Drupalize.Me](https://drupalize.me), і
[Boris Doesborgh](https://www.drupal.org/u/batigolix).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
