---
title: "Оновлення ядра Drupal"
description: "Як оновити ядро ​​Drupal використовуючи інтерфейс адміністратора або Drush."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "uk"
---
## Мета { #security-update-core }

Оновити ядро ​​Drupal через інтерфейс адміністратора або
використовуючи Drush.
## Вимоги до сайту

* Якщо ви хочете використовувати Drush, Drush повинен бути встановлений. Дивіться [install-tools](./install-tools.md).
* Якщо сайт викладений в Інтернет, вам слід протестувати процес на копії сайту
локально перед тим як запускати оновлення на живому сайті. дивіться
[install-dev-making](./install-dev-making.md).
## Кроки

1. Зробіть повну копію вашого сайту. Детально як це зробити тут [prevent-backups](./prevent-backups.md).
1. Відкрийте _settings.php_ (_/sites/default/settings.php_) в будь-якому текстовому
    редакторі. Знайдіть рядок з _$settings['update_free_access']_ змінною. За
    замовчуванням, змінна встановлена ​​як "FALSE" з міркувань безпеки. Змініть значення на
    "TRUE":
    ```text
    $settings['update_free_access']=TRUE;
    ```
1. Вимкніть будь-який кеш (memcache, varnish і так далі), який використовується на вашому
    сайті.
1. Увімкніть режим обслуговування на вашому сайті. Дивіться [extend-maintenance](./extend-maintenance.md).
1. Якщо ви використовуєте Composer для управління залежностями, пропустіть наступні шість кроків і
    замість цього використовуйте інструкції з [install-composer](./install-composer.md) для завантаження оновлених
    файлів. Продовжіть з кроку _update.php_.
1. Завантажте tar.gz або zip архів з останньою версією Drupal
    8.x зі сторінки [_Drupal.org_ Drupal Core Downloads](https://www.drupal.org/project/drupal). Дивіться [install-prepare](./install-prepare.md) для більшої інформації про те, як знайти останню
    версію.
1. Завантажте файл архіву на сервер вашого хостингу.
1. Розпакуйте файл до тимчасової папки на вашому сервері (повинен бути
    зовні папки, де розташований сайт). Ваша панель управління на хостингу
    повинна мати файловий менеджер здатний розпакувати файли. Якщо ви маєте
    доступ до командного рядка на вашому сервері (наприклад використовуючи Linux), ви можете виконати команду:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. У папці сайту, видаліть папки _core_ і _vendor_
    і всі файли, які знаходяться в корені сайту, включаючи _.htaccess_,
    _composer.json_ і _autoload.php_. Не чіпайте додаткові і змінені файли,
    тому що ви можете втрат частину додаткового функціоналу, який ґрунтується на цих файлах.
1. Скопіюйте папки _core_ і _vendor_ і інші не додаткові і не призначені для користувача
    файли, які ви видалили в попередньому кроці з тимчасової папки на
    вашому сайті.
1. Запустіть скрипт _update.php_ використовуючи такі інструкції:
    * Відкрийте в браузері _http://www.example.com/update.php_ (де
      _www.example.com_ це адреса URL вашого сайту). Натисніть _Продовжити_ на першому екрані
      для запуску оновлення і успішного завершення виконання скрипта.
    * Запустіть наступну Drush команду: `drush updatedb`
1. Якщо ви отримали якісь помилки або попередження, запускайте _update.php_ скрипт
    знову до тих пір поки всі оновлення не будуть виконані успішно.
1. Відкрийте _settings.php_ (_/sites/default/settings.php_) в текстовому редакторі. Знайдіть
    рядок з _$settings['update_free_access']_ змінною і обновіть її на
    "FALSE":
    ```text
    $settings['update_free_access']=FALSE;
    ```
1. Натисніть _Сторінка адміністрування_, щоб повернутися в розділ адміністрування вашого
    сайту.
1. Вимкніть режим обслуговування на вашому сайті. Дивіться [extend-maintenance](./extend-maintenance.md).
1. Очистіть кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
1. Додайте всі додаткові кеші назад, які ви вимикали на Кроці 3.
1. Після цього ви повинні мати оновлену працюючу версію Drupal. Ви можете перевірити поточну
    версію Drupal на сторінці _Status report_ (Дивіться
    [prevent-status](./prevent-status.md)).
## Поліпшите своє розуміння

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Пов'язані концепції

[prevent-status](./prevent-status.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/eLzAD83a9BY" title="Updating the Core Software" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

* ["Drupal Core Downloads "page on _Drupal.org_](https://www.drupal.org/project/drupal)
* ["Registry Rebuild "page on _Drupal.org_](https://www.drupal.org/project/registry_rebuild)
* The file _/core/UPDATE.txt_ within your installation.

*Автори*

Написано і змінено [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Boris Doesborgh](https://www.drupal.org/u/batigolix) і
[Jojy Alphonso](https://www.drupal.org/u/jojyja) із
[Red Crackle](http://redcrackle.com).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
