---
title: "Обновление темы"
description: "Как обновить дополнительную тему с помощью Composer и административного интерфейса для запуска скрипта обновления базы данных."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "ru"
---
## Цель { #security-update-theme }

Обновить дополнительную тему на сайте и запустить скрипт _Обновление базы данных_.
## Необходимые знания

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Требования к сайту

* Установлена дополнительная тема, и для неё доступно обновление. См. [extend-theme-install](./extend-theme-install.md) и [security-announce](./security-announce.md).
* Если сайт находится в интернете, сначала протестируйте процесс в разработческой среде, прежде чем запускать на рабочем сайте. См. [install-dev-making](./install-dev-making.md).
* Сделана полная резервная копия сайта. См. [prevent-backups](./prevent-backups.md).
* Если вы хотите использовать интерфейс для проверки обновлений, модуль ядра Update Manager должен быть установлен. См. [config-install](./config-install.md) для инструкции по установке модулей ядра.
## Шаги

Обновление дополнительной темы предполагает перевод сайта в режим обслуживания, затем получение новых файлов темы и выполнение необходимых обновлений базы данных, а затем возврат сайта к обычной работе.

Вы можете обновить код дополнительной темы с помощью Composer. Если вы обновляете пользовательскую тему, получите новые файлы темы, затем продолжите с инструкций по запуску обновлений базы данных через административный интерфейс ниже.

Далее предполагается, что вы используете Composer для управления файлами на сайте; см. [install-composer](./install-composer.md).
### Обновление дополнительной темы с помощью Composer

1. Переведите сайт в режим обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. В _Управлении_ административного меню перейдите в _Отчёты_ > _Доступные обновления_ > _Обновить_ (_admin/reports/updates_).
1. Найдите все темы в списке, для которых доступны обновления.
    <img src="/images/security-update-theme-updates.png" alt="Available updates" width="100%" />
1. Определите короткое имя проекта, который вы хотите обновить. Для дополнительных модулей и тем это последняя часть URL страницы проекта; например, тема Honey на https://www.drupal.org/project/honey имеет короткое имя `honey`.
1. Если вы хотите обновить до последнего стабильного релиза, используйте команду, подставив короткое имя проекта вместо `honey`:
    ```text
    composer update drupal/honey --with-dependencies
    ```

    Чтобы узнать, как загрузить определённые версии, см. [install-composer](./install-composer.md).

1. После получения новых файлов темы запустите обновления базы данных, введя в браузере URL _example.com/update.php_.
1. Нажмите _Продолжить_, чтобы запустить обновления. Скрипты обновления базы данных будут выполнены.
1. Нажмите _Страницы администрирования_, чтобы вернуться в административный раздел сайта.
1. Выведите сайт из режима обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. Очистите кэш Drupal (см. [prevent-cache-clear](./prevent-cache-clear.md)).
## Расширьте своё понимание

* Проверьте журнал сайта, см. [prevent-log](./prevent-log.md), после завершения обновлений для проверки ошибок.
* [security-update-module](./security-update-module.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/elVnWoaQMkk" title="Updating a Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Атрибуция*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) на [Drupalize.Me](https://drupalize.me).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
