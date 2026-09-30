---
title: "Загрузка и установка темы оформления с _Drupal.org_"
description: "Как загрузить и установить тему оформления с Drupal.org."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "ru"
---
## Цель { #extend-theme-install }

Загрузить и установить тему оформления с _Drupal.org_.
## Необходимые знания

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Требования к сайту

Для загрузки тем должен быть установлен Composer. Если вы хотите использовать Drush, Drush
должен быть установлен. Смотрите [install-tools](./install-tools.md).
## Шаги

Чтобы установить дополнительную тему, сначала загрузите тему с помощью Composer. Затем
установите её через административный интерфейс или с помощью Drush. Если вы
устанавливаете пользовательскую тему, а не дополнительную тему, которая недоступна
через Composer, пропустите шаги по загрузке темы и смотрите
[extend-manual-install](./extend-manual-install.md). Затем вернитесь сюда и выполните шаги по установке
темы через административный интерфейс или Drush.
### Загрузка дополнительной темы с помощью Composer

1. На странице темы проекта на drupal.org (например,
    _https://www.drupal.org/project/honey_), прокрутите вниз к разделу _Releases_.
1. Скопируйте предоставленную Composer-команду для версии темы, которую вы хотите
    установить.
    ![Поиск composer-команды для темы](/images/extend-theme-install-download.png)
1. Либо выполните следующую команду (подставив короткое имя темы и нужную версию вместо `honey:^1.0`):
    ```text
    composer require 'drupal/honey:^1.0'
    ```
1. В командной строке перейдите в корневую директорию вашего проекта. Вставьте
    Composer-команду и выполните её.
1. Вы должны увидеть сообщение об успешной загрузке темы.
### Установка темы через административный интерфейс

1. В _Управлении_ административного меню перейдите в _Оформление_
    (_admin/appearance_). Появится страница _Оформление_.
1. Найдите новую тему в разделе _Неустановленные темы_ и нажмите _Установить и назначить по умолчанию_
    для её использования. Все неадминистративные страницы сайта теперь будут использовать
    эту тему.
    <img src="/images/extend-theme-install-appearance-page.png" alt="Неустановленные темы на странице Оформление" width="286px" />

### Установка темы с помощью Drush

1. Чтобы установить тему и назначить её по умолчанию, выполните следующие команды Drush,
    указав имя проекта (например, _honey_) в качестве параметра:
    ```text
    drush theme:enable honey
    drush config:set system.theme default honey
    ```
1. Следуйте инструкциям на экране.
## Расширьте своё понимание

* В _Управлении_ административного меню перейдите в _Оформление_
(_admin/appearance_) и удалите темы, которые вы не используете.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* Если вы не видите изменений на вашем сайте, возможно, вам нужно
очистить кэш. Смотрите [prevent-cache-clear](./prevent-cache-clear.md).
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UFgddj0F_bU" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Joe Shindelar](https://www.drupal.org/u/eojthebrave) в
[Drupalize.Me](https://drupalize.me), и
[Boris Doesborgh](https://www.drupal.org/u/batigolix).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov)
