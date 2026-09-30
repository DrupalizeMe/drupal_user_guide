---
title: "Обновление ядра Drupal"
description: "Как обновить ядро Drupal с помощью интерфейса администратора или Drush."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "ru"
---
## Цель { #security-update-core }

Обновить ядро Drupal через интерфейс администратора или используя Drush.
## Требования к сайту

* Если вы хотите использовать Drush, Drush должен быть установлен. Смотрите [install-tools](./install-tools.md).
* Если ваш сайт находится в интернете, рекомендуется протестировать этот процесс в тестовой (разработческой) среде перед запуском обновления на рабочем сайте. Смотрите [install-dev-making](./install-dev-making.md).
## Шаги

1. Сделайте полную резервную копию вашего сайта. См. [prevent-backups](./prevent-backups.md).
1. Откройте _settings.php_ (_/sites/default/settings.php_) в любом текстовом редакторе. Найдите строку с переменной _$settings['update_free_access']_. По умолчанию она установлена в "FALSE" из соображений безопасности. Измените значение на "TRUE":
    ```text
    $settings['update_free_access'] = TRUE;
    ```
1. Отключите любые используемые вами системы кэширования (memcache, varnish и т.д.).
1. Переведите ваш сайт в режим обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. Если вы используете Composer для управления зависимостями, пропустите следующие шесть шагов и вместо этого используйте инструкции из [install-composer](./install-composer.md) для загрузки обновленных файлов. Продолжайте со шага _update.php_.
1. Загрузите tar.gz или zip-архив с последней версией ядра Drupal вашей ветки (например, 8.x или 9.x) со страницы [_Drupal.org_ Drupal Core Downloads](https://www.drupal.org/project/drupal). См. [install-prepare](./install-prepare.md) для деталей о том, как найти последнюю версию.
1. Загрузите архив на сервер вашего хостинга.
1. Распакуйте архив во временную папку на сервере (эта папка должна находиться вне директории сайта). В файловом менеджере панели управления хостингом обычно есть функция распаковки файлов. Если у вас есть терминальный доступ (Linux), используйте команду:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. В директории сайта удалите папки _core_ и _vendor_, а также все файлы, которые не лежат в поддиректориях, включая _.htaccess_, _composer.json_ и _autoload.php_. Не удаляйте кастомные и измененные вами файлы, иначе вы можете потерять вашу дополнительную функциональность.
1. Скопируйте папки _core_ и _vendor_, а также некастомные файлы, которые вы удалили на предыдущем шаге, из временной папки в директорию сайта.
1. Запустите скрипт _update.php_ одним из следующих способов:
    * Перейдите в браузере по адресу _http://www.example.com/update.php_ (где _www.example.com_ — это адрес вашего сайта). Нажмите _Продолжить_ на первом экране для запуска обновлений и успешного завершения скрипта.
    * Выполните команду Drush: `drush updatedb`
1. Если вы получаете ошибку или предупреждение, повторно запустите _update.php_, пока все обновления не будут выполнены успешно.
1. Откройте _settings.php_ (_/sites/default/settings.php_) в текстовом редакторе. Найдите строку с _$settings['update_free_access']_ и верните значение на "FALSE":
    ```text
    $settings['update_free_access'] = FALSE;
    ```
1. Нажмите _Страницы администрирования_, чтобы вернуться в раздел администрирования вашего сайта.
1. Выведите сайт из режима обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. Очистите кэш. См. [prevent-cache-clear](./prevent-cache-clear.md).
1. Вновь включите системы кэширования, которые были отключены на шаге 3.
1. Теперь ваш сайт должен работать на обновленной версии. Проверить текущую версию можно на странице _Отчет о состоянии_ (см. [prevent-status](./prevent-status.md)).
## Улучшите свое понимание

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Связанные концепции

[prevent-status](./prevent-status.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DqYqxp4xByk" title="Updating the Core Software" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* ["Drupal Core Downloads" page on _Drupal.org_](https://www.drupal.org/project/drupal)
* ["Registry Rebuild" page on _Drupal.org_](https://www.drupal.org/project/registry_rebuild)
* Файл _/core/UPDATE.txt_ внутри вашей установки.

*Авторы*

Написано и отредактировано [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Boris Doesborgh](https://www.drupal.org/u/batigolix) и
[Jojy Alphonso](https://www.drupal.org/u/jojyja) на
[Red Crackle](http://redcrackle.com).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin).
