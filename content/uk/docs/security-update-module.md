---
title: "Оновлення модуля Drupal"
description: "Як оновити модуль Drupal, використовуючи адміністративний інтерфейс і запустити скрипт оновлення бази даних."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "uk"
---
## Мета { #security-update-module }

Оновити модуль, і запустити скрипт _Оновлення бази данних_.
## Необхідні знання

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Вимоги до сайту

* Модуль встановлений і для нього є оновлення.
 Дивіться [extend-module-install](./extend-module-install.md) і [security-announce](./security-announce.md).
* Якщо ваш сайт живий, спочатку вам потрібно перевірити цей процес на сайті розробки,
перш ніж запускати його на вашому живому сайті. дивіться
[install-dev-making](./install-dev-making.md).
* Ви створили повну резервну копію сайту. Дивіться [prevent-backups](./prevent-backups.md).
* Якщо ви хочете використовувати інтерфейс для користувача, модуль ядра Update Manager повинен бути
встановлено. Дивіться [config-install](./config-install.md) для інструкцій по установці модулів
ядра.
## Кроки

Перш ніж почати, перевірте інструкції по оновленню для конкретного модуля. це,
як правило, необхідно при оновленні модулів, які використовують сторонні
бібліотеки. Прочитайте і зрозумійте всі специфічні вимоги для модуля, перш ніж
запускати процес оновлення. Для отримання інструкцій, перевірте на сторінці проекту
модуля посилання _Read Documentation_.

Для перегляду подальших інструкцій завантажте файл tar.gz або .zip файл зі сторінки
проекту на ваш комп'ютер. Розпакуйте файл і подивіться на файли _README.txt_,
_INSTALL.txt_, і _UPGRADE.txt_, які йдуть разом з файлом установки
модуля. Крім того, перегляньте примітки до версії на сторінці проекту, клацнувши на номер версії,
який ви завантажуєте.

![Посилання на примітки про випуск](/images/security-update-module-release-notes.png)

Ви можете використовувати адміністративний інтерфейс для поновлення теми. Якщо ви
оновлюєте користувацьку тему, а не додаткову тему, якщо ви бачите
повідомлення _Для установки модулів і тем потрібен FTP-доступ до вашого серверу_, або якщо наведені нижче кроки не працюють для отримання нових файлів теми, дотримуйтесь
інструкцій в [extend-manual-install](./extend-manual-install.md). Потім ви можете продовжити тут з
кроку 6 в інструкціях для адміністративного інтерфейсу нижче.

Якщо ви використовуєте Composer для управління файлами на вашому сайті, дотримуйтесь інструкцій
в [install-composer](./install-composer.md) для поновлення файлів, потім продовжіть тут з кроку 6 в
інструкції для адміністративного інтерфейсу нижче.
### Використання адміністративного інтерфейсу

1. Переведіть ваш сайт в режим обслуговування. Дивіться [extend-maintenance](./extend-maintenance.md).
1. У _Керування_ адміністративного меню, перейдіть в _Звіти_ >
    _Доступні оновлення_ > _Оновити_ (_admin/reports/updates/update_).
1. Знайдіть і перевірте модуль в списку. Натисніть _Завантажити оновлення_ для
    модуля.
    ![Доступні оновлення](/images/security-update-module-updates.png)
1. Натисніть _Продовжити_.
1. Натисніть _Запустити оновлення бази даних_. Якщо ви отримали нові файли модуля вручну,
    почніть з цього кроку, і перейдіть на сторінку оновлень бази даних, ввівши URL
    _example.com/update.php_ в ваш браузер.
1. Натисніть _Продовжити_, щоб запустити оновлення. Скрипт оновлення бази даних буде
    виконаний.
1. Натисніть _Сторінка адміністрування_ для повернення на сторінку адміністрування вашого
    сайту.
1. Виведіть ваш сайт з режиму обслуговування. Дивіться [extend-maintenance](./extend-maintenance.md).
1. Очистіть кеш Drupal (посилання на [prevent-cache-clear](./prevent-cache-clear.md)).
## Поліпшіть своє розуміння

* Перегляньте журнал сайту, дивіться [prevent-log](./prevent-log.md), як тільки оновлення будуть завершені
перегляньте помилки.
* [security-update-theme](./security-update-theme.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ZYFJ_OJaK4M" title="Updating a Module" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

[_Drupal.org_ сторінка документації спільноти "Updating modules"](https://www.drupal.org/node/250790)

*Автори*

Адаптовано [Boris Doesborgh](https://www.drupal.org/u/batigolix), і
[Sarah German](https://www.drupal.org/u/hey_germano) в
[Advomatic](https://www.advomatic.com), від
["Updating modules"](https://www.drupal.org/docs/7/update/updating-modules), авторські права 2000-2026 за
окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
