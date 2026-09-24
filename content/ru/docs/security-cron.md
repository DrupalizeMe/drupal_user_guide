---
title: "Настройка задач крона для обслуживания сайта"
description: "Как запускать задачи крона с помощью модуля ядра Automated Cron или запускать их извне сайта."
id: "security-cron"
translation_key: "security-cron"
source_locale: "ru"
---
## Цель { #security-cron }

Проверьте, выполняются ли задачи крона регулярно, и если нет, либо установите модуль ядра Automated Cron, либо настройте запуск задач крона извне сайта.
## Необходимые знания

[security-cron-concept](./security-cron-concept.md)
## Шаги

1. Просмотрите страницу _Отчет о состоянии_ (см. [prevent-status](./prevent-status.md)), чтобы узнать, когда задачи крона запускались в последний раз.
    Если вы устанавливали сайт с помощью стандартного установочного профиля ядра (или похожего), задачи крона, вероятно, уже запускаются через модуль ядра Automated Cron. По умолчанию задачи выполняются примерно каждые три часа.
1. Выберите, запускать ли задачи крона с помощью модуля ядра Automated Cron или другим способом. Модуль ядра Automated Cron может не подходить для некоторых сайтов по следующим причинам:
    * Каждый раз, когда кто-то посещает страницу сайта, модуль проверяет, сколько времени прошло с последнего запуска задач крона, и запускает их при необходимости. Если сайт долго никто не посещает, задачи крона не будут выполняться.
    * Задачи крона запускаются после генерации страницы. Это значит, что времени на их выполнение может быть меньше до срабатывания различных серверных таймаутов (например, таймаут выполнения PHP). Если это произойдет, в логах (см. [prevent-log](./prevent-log.md)) появятся сообщения о том, что крон не может завершиться.
    * Существует небольшая [нагрузка на масштабируемость](https://en.wikipedia.org/wiki/Scalability) при использовании модуля Automated Cron, поскольку один из процессов веб-сервера занят (и не может обслуживать другие страницы), пока задачи крона не завершатся.
1. Если вы хотите использовать модуль Automated Cron, сначала убедитесь, что он установлен (он устанавливается вместе со стандартным установочным профилем; см. [config-install](./config-install.md), если не установлен).
    Затем настройте модуль, чтобы управлять частотой запуска задач крона. В меню администратора _Управление_ перейдите к _Конфигурация_ > _Система_ > _Крон_ (_admin/config/system/cron_). В поле _Запускать cron каждые_ в разделе _Настройки крон_ выберите желаемый интервал и нажмите _Сохранить конфигурацию_.
    ![Configure the core Automated Cron module](/images/security-cron.webp)
1. Если вы хотите запускать задачи крона извне сайта, удалите модуль ядра Automated Cron (см. [config-uninstall](./config-uninstall.md)). Далее найдите URL для запуска крона. Этот URL указан на странице _Отчет о состоянии_ (см. [prevent-status](./prevent-status.md)), а также на странице _Крон_ (см. предыдущий шаг). URL выглядит примерно так:
    _http://www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Каждый раз, когда этот URL посещается, задачи крона запускаются. Настройте один из следующих планировщиков, чтобы регулярно обращаться по этому адресу:
    * [Cron daemon](https://www.drupal.org/docs/7/setting-up-cron/configuring-cron-jobs-using-the-cron-command) (Linux, OS X, Solaris, BSD)
    * [Scheduled Tasks](https://www.drupal.org/docs/7/setting-up-cron-for-drupal/configuring-cron-jobs-with-windows) (Windows)
    * SaaS-сервис для крона (software as a service)
    * Менеджер крона, предоставляемый вашим хостинг-провайдером (см. документацию от провайдера)
## Связанные концепции

[security-concept](./security-concept.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Configuring Cron Maintenance Tasks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [Drush page "Running Drupal cron tasks from Drush"](https://www.drush.org/latest/cron/)
* [_Drupal.org_ страница документации сообщества "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Авторы*

Написано и отредактировано [Dave Hansen-Lange](https://www.drupal.org/u/dalin) из
[Advomatic](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix),
и [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
