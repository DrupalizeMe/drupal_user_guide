---
title: "Очищення кешу"
description: "Як почистити кеш використовуючи Drush і призначений для користувача інтерфейс."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "uk"
---
## Мета { #prevent-cache-clear }

Очистити або перебудувати внутрішній кеш вашого сайту, щоб бути впевненим, що велика частина нових даних
 актуальна і виводяться на сайті, використовуючи при цьому інтерфейс користувача або Drush.
## Необхідні знання

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Вимоги до сайту

Якщо ви хочете використовувати Drush для очищення кешу, то Drush повинен бути встановлений. Дивіться
[install-tools](./install-tools.md).
## Кроки

Ви можете використовувати інтерфейс адміністратора або Drush для очищення кеша. Ви можете
також використовувати скрипти для скидання кешу або Drush для більш повного оновлення кеша.
### Використання адміністративного інтерфейсу для очищення кеша

1. У _Керування_ меню адміністратора, перейдіть на _Конфігурація_ >
    _Розробка_ > _Швидкодія_ (_admin/config/development/performance_). Якщо ви не
    маєте доступ до цієї сторінки в інтерфейсі адміністратора, використовуйте один з інших
    методів очищення і перестроювання кеша.
1. Натисніть _Очистити всі кеші_.
1. Повідомлення про успішне очищення кеша з'явиться зверху
    сторінки.
1. Якщо це не допомогло вирішити проблему, спробуйте замість очищення
    кешу, перебудувати кеш.
### Використання скрипт перестроювання кеша

1. Відкрийте _settings.php_ (_/sites/default/settings.php_) в будь-якому текстовому
    редакторі. Додайте наступний рядок в кінці файлу і збережіть його:
    ```text
    $settings['rebuild_access']=TRUE;
    ```
1. Зайдіть _http://www.example.com/core/rebuild.php_ в вашому браузері (де
    _www.example.com_ адреса вашого сайту). Після короткої паузи, ви будете
    перенаправлені на головну сторінку вашого сайту і кеш буде перебудований.
1. Відкрийте _settings.php_ (_/sites/default/settings.php_) в текстовому редакторі. Знайдіть рядок,
    яку ви додали до цього з _$settings['rebuild_access']_, видаліть її та збережіть
    файл.
### Використання Drush для перестроювання або очищення кеша

Ви можете використовувати одну з двох команд:

* Використовуйте команду `drush cache:rebuild` для очищення і перестроювання всіх даних кеша
на сайті. Після запуску цієї команди, ви побачите повідомлення "Cache
rebuild complete. "
* Використовуйте команду `drush cache:clear`, щоб подивитися список окремих кешів і потім
виберіть потрібний кеш, який ви б хотіли очистити. Ця процедура виглядає
приблизно таким чином:
```text
> Drush cache:clear
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

Виберіть який кеш ви хочете очистити через введення числа для цього кеша. Натисніть
"Enter" щоб продовжити.
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="Clearing the Cache" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

[_Drupal.org_ сторінка документації спільноти "Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache)

*Автори*

Адаптовано і змінено [Joe Shindelar](https://www.drupal.org/u/eojthebrave)
і [Jack Haas](https://www.drupal.org/u/jerseycheese) із
["Clearing or rebuilding Drupal's cache"](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache),
авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
