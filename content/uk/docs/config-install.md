---
title: "Установка модуля Drupal"
description: "Як встановити модуль, використовуючи адміністративний інтерфейс або Drush."
id: "config-install"
translation_key: "config-install"
source_locale: "uk"
---
## Мета { #config-install }

Встановити модуль, файли якого вже
завантажені на сайт, через адміністративний інтерфейс або Drush.
## Необхідні знання

[understanding-modules](./understanding-modules.md)
## Вимоги до сайту

Якщо ви хочете використовувати Drush для установки модулів, Drush повинен бути встановлений. Дивіться
[install-tools](./install-tools.md).
## Кроки

Ви можете використовувати адміністративний інтерфейс або Drush для установки модулів.
### Використання адміністративного інтерфейсу

1. В адміністративному меню _Упаравління_, перейдіть в _Розшрення_
    (_admin/modules_). На сторінці _Розширення_ показуються всі доступні модулі
    на вашому сайті.
1. Проставте галочки для модуля або модулів, які ви хочете встановити. Наприклад,
    поставте галочку для модуля ядра Activity Tracker.
    ![Включення модуля Activity Tracker](/images/config-install-check-modules.png)
1. Натисніть _Встановити_. Вибрані модулі будуть встановлені.
### Використання Drush

1. У розділі _Керування_ адміністративного інтерфейсу, перейдіть в _Розширення_
    (_admin/modules_). На сторінці _Розширення_ показані всі встановлені модулі
    на вашому сайті.
1. Знайдіть машинне ім'я модуля який ви хочете встановити, розкривши
    блок інформації для потрібного модуля. Наприклад, Activity Tracker
    модуль має машинне ім'я _tracker_.
1. Запустіть наступну Drush команду, щоб встановити потрібний модуль:
    ```text
    drush pm:enable tracker
    ```
## Поліпшіть своє розуміння

Якщо ви не спостерігаєте змін на вашому сайті, можливо вам потрібно
почистити кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/HymQsDOcT3E" title="Installing a Module" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

[Drush](http://www.drush.org)

*Автори*

Написано і відредаговано [Boris Doesborg](https://www.drupal.org/u/batigolix) і
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
