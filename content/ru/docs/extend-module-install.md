---
title: "Загрузка и установка модуля с _Drupal.org_"
description: "Как скачать и установить модуль с Drupal.org."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "ru"
---
## Цель { #extend-module-install }

Загрузить и установить
[дополнительный модуль Admin Toolbar](https://www.drupal.org/project/admin_toolbar),
который позволяет легко просматривать административный раздел
сайта.
## Необходимые знания

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Требования к сайту

Composer должен быть установлен для загрузки модулей. Если вы хотите использовать Drush,
Drush также должен быть установлен. Смотрите [install-tools](./install-tools.md).
## Шаги

Чтобы установить дополнительный модуль, сначала скачайте модуль с помощью Composer.
Затем установите его через административный интерфейс или Drush.
Если вы устанавливаете пользовательский модуль, который недоступен через Composer,
пропустите шаги по скачиванию модуля и обратитесь к [extend-manual-install](./extend-manual-install.md).
Затем вернитесь сюда и выполните шаги для установки модуля через административный интерфейс или Drush.
### Скачивание дополнительного модуля через Composer

1. На странице проекта _Admin toolbar_ на drupal.org
    (_https://www.drupal.org/project/admin_toolbar_) прокрутите вниз до раздела _Releases_.
1. Скопируйте команду Composer для нужной версии модуля.
    ![Команда установки модуля через composer](/images/extend-module-install-download.webp)
1. Или введите следующую команду (замените короткое имя и версию на нужные вам):
    ```text
    composer require 'drupal/admin_toolbar:^3.5'
    ```
1. В терминале перейдите в корневую директорию вашего проекта. Вставьте и выполните команду Composer.
1. Дождитесь сообщения об успешном скачивании модуля.
### Установка модуля через административный интерфейс

1. В _Управлении_ административного меню, перейдите в _Расширения_
    (_admin/modules_). Откроется страница _Расширения_.
1. Найдите модуль _Admin toolbar_ и поставьте галочку напротив него.
    ![Установка модуля Admin Toolbar](/images/extend-module-install-admin-toolbar-do.webp)
1. Нажмите _Установить_, чтобы включить новый модуль.
### Установка модуля через Drush

1. Запустите следующую команду Drush, указав название проекта (например, `admin_toolbar`):
    ```text
    drush pm:enable admin_toolbar
    ```
1. Следуйте инструкциям на экране.
## Расширьте своё понимание

* Проверьте, что
[дополнительный модуль Admin Toolbar](https://www.drupal.org/project/admin_toolbar)
работает, просматривая административное меню.
* Установите и настройте
[дополнительный модуль Pathauto](https://www.drupal.org/project/pathauto)
для красивых URL-адресов контента по умолчанию. Смотрите [content-paths](./content-paths.md) для подробностей о ссылках.
* Если вы не видите изменений на сайте, возможно, потребуется очистить кэш. Смотрите [prevent-cache-clear](./prevent-cache-clear.md).
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vx9nWJE1Kbk" title="Downloading and Installing a Module from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [_Drupal.org_ страница "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* ["Download and Extend" страница на _Drupal.org_](https://www.drupal.org/download)
* [Admin Toolbar модуль на _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) из [Drupalize.Me](https://drupalize.me) и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov)
