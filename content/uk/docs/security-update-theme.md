---
title: "Оновлення теми оформлення Drupal"
description: "Як оновити додану тему оформлення, використовуючи адміністративний інтерфейс і запустити скрипт Оновлення Бази даних."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "uk"
---
## Мета { #security-update-theme }

Оновити тему оформлення на своєму сайті і запустити скрипт _Database Updates_.
## Необхідні знання

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Вимоги до сайту

* Тема оформлення була встановлена ​​і доступне оновлення для
неї. Дивіться [extend-theme-install](./extend-theme-install.md) і [security-announce](./security-announce.md).
* Якщо ваш сайт живий, спочатку вам потрібно перевірити цей процес на сайті розробки,
перш ніж запускати його на вашому живому сайті. Дивіться
[install-dev-making](./install-dev-making.md).
* Ви створили повну резервну копію сайту. Дивіться [prevent-backups](./prevent-backups.md).
* Якщо ви хочете використовувати інтерфейс для користувача, модуль ядра Update Manager повинен бути
встановлено. Дивіться [config-install](./config-install.md) для інструкцій по установці модулів
ядра.
## Кроки

Ви можете використовувати адміністративний інтерфейс для поновлення теми. Якщо ви
оновлюєте призначену для користувача тему, а не додаткову тему, якщо ви бачите
повідомлення _Для установки модулів і тем потрібен FTP-доступ до вашого серверу_, або якщо наведені нижче кроки не працюють для отримання нових файлів теми, дотримуйтесь
інструкцій в [extend-manual-install](./extend-manual-install.md), а потім перейдіть до кроку 6 в
інструкції для адміністративного інтерфейсу нижче.

Якщо ви використовуєте Composer для управління файлами на вашому сайті, дотримуйтесь інструкцій
в [install-composer](./install-composer.md) для поновлення файлів, потім продовжите тут з кроку 6 в
інструкції для адміністративного інтерфейсу нижче.
### Використання адміністративного інтерфейсу

1. Переведіть ваш сайт в режим обслуговування. Дивіться [extend-maintenance](./extend-maintenance.md).
1. У _Керування_ адміністративного меню, перейдіть в _Звіти_>
    _Доступні оновлення_ > _Оновити_ (_admin/reports/updates/update_).
1. Знайдіть і перевірте тему в списку. Натисніть _Скачать оновлення_ для
    теми.
    ![Доступні оновлення](/images/security-update-theme-updates.webp)
1. Натисніть _Продовжити_.
1. Натисніть _Запустити поновлення бази данних_. Якщо ви отримали нові файли теми вручну,
    почніть з цього кроку, і перейдіть на сторінку оновлень бази даних, ввівши URL
    _example.com/update.php_ в ваш браузер.
1. Натисніть _Продовжити_, щоб запустити оновлення. Скрипт поновлення бази даних буде
    виконаний.
1. Натисніть _Сторінка адміністрування_ для повернення на сторінку адміністрування вашого
    сайту.
1. Виведіть ваш сайт з режиму обслуговування. Дивіться [extend-maintenance](./extend-maintenance.md).
1. Очистіть кеш Drupal (посилання на [prevent-cache-clear](./prevent-cache-clear.md)).
## Поліпшіть своє розуміння

* Перегляньте журнал сайту, дивіться [prevent-log](./prevent-log.md), як тільки оновлення будуть завершені
перегляньте помилки.
* [security-update-module](./security-update-module.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/2jihIuY91vs" title="Updating a Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
