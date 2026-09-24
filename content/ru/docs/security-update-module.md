---
title: "Обновление модуля Drupal"
description: "Как обновить дополнительный модуль с помощью Composer и административного интерфейса для запуска скрипта обновления базы данных."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "ru"
---
## Цель { #security-update-module }

Обновить дополнительный модуль и запустить скрипт _Обновление базы данных_.
## Необходимые знания

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Требования к сайту

* Установлен дополнительный модуль, для которого доступно обновление.
  См. [extend-module-install](./extend-module-install.md) и [security-announce](./security-announce.md).
* Если ваш сайт находится в интернете, сначала рекомендуется протестировать этот процесс в разработческой среде перед запуском на рабочем сайте. См. [install-dev-making](./install-dev-making.md).
* Сделана полная резервная копия сайта. См. [prevent-backups](./prevent-backups.md).
* Если вы хотите использовать интерфейс для проверки обновлений, модуль ядра Update Manager должен быть установлен. См. [config-install](./config-install.md) для инструкции по установке модулей ядра.
## Шаги

Перед началом проверьте инструкции по обновлению для конкретного модуля. Прочитайте и выполните все специфические требования для модуля перед обновлением. Чтобы найти инструкции, проверьте ссылку _Read Documentation_ на странице проекта модуля.

Чтобы узнать больше, после загрузки обновленных файлов найдите файлы _README.txt_, _INSTALL.txt_ и _UPGRADE.txt_, входящие в комплект модуля. Также изучите примечания к релизу на странице проекта, нажав на номер скачиваемой версии.

![Release notes link](/images/security-update-module-release-notes.webp)

Обновление модуля включает перевод сайта в режим обслуживания, получение новых файлов и выполнение необходимых обновлений базы данных, а затем возвращение сайта в обычный режим.

Вы можете обновить код дополнительного модуля с помощью Composer. Если вы обновляете пользовательский модуль, получите новые файлы модуля, а затем следуйте инструкции ниже для запуска обновлений базы данных через административный интерфейс.

Далее предполагается, что вы используете Composer для управления файлами на сайте; см. [install-composer](./install-composer.md).
### Обновление дополнительного модуля с помощью Composer

1. Переведите сайт в режим обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. В _Управлении_ административного меню перейдите в _Отчеты_ > _Доступные обновления_ > _Обновить_ (_admin/reports/updates_).
1. Найдите и отметьте модуль в списке. Нажмите _Скачать эти обновления_ для модуля.
    <img src="/images/security-update-module-updates.webp" alt="Available updates" width="100%" />
1. Определите короткое имя проекта, который вы хотите обновить. Для дополнительных модулей и тем это последняя часть URL страницы проекта; например, модуль Geofield на https://www.drupal.org/project/geofield имеет короткое имя `geofield`.
1. Если вы хотите обновить до последнего стабильного релиза, используйте команду, подставив короткое имя проекта вместо `geofield`:
    ```text
    composer update drupal/geofield --with-dependencies
    ```

    Чтобы узнать, как загрузить определенные версии, см. [install-composer](./install-composer.md).

1. После получения новых файлов модуля запустите обновление базы данных, введя в браузере URL _example.com/update.php_.
1. Нажмите _Продолжить_, чтобы запустить обновления. Скрипты обновления базы данных будут выполнены.
1. Нажмите _Страницы администрирования_, чтобы вернуться в административный раздел сайта.
1. Выведите сайт из режима обслуживания. См. [extend-maintenance](./extend-maintenance.md).
1. Очистите кэш Drupal (см. [prevent-cache-clear](./prevent-cache-clear.md)).
## Расширьте своё понимание

* Проверьте журнал сайта (см. [prevent-log](./prevent-log.md)) после завершения обновлений, чтобы убедиться в отсутствии ошибок.
* [security-update-theme](./security-update-theme.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/wxWW-lPQ_Pc" title="Updating a Module" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Атрибуция*

Адаптировано [Boris Doesborgh](https://www.drupal.org/u/batigolix),
[Sarah German](https://www.drupal.org/u/hey_germano) на
[Advomatic](https://www.advomatic.com), и
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) на [Drupalize.Me](https://drupalize.me)
из ["Update modules"](https://www.drupal.org/docs/7/update/updating-modules),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
