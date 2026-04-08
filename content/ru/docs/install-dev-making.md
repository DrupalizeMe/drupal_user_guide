---
title: "Создание сайта для разработки"
description: "Как создать копию живого сайта для разработки."
id: "install-dev-making"
translation_key: "install-dev-making"
source_locale: "ru"
---
## Цель { #install-dev-making }

Создать копию сайта, которую можно использовать для разработки нового функционала и тестирования обновлений.
## Необходимые знания

[install-dev-sites](./install-dev-sites.md)
## Требования к сайту

* У вас должен быть живой сайт, из которого вы хотите сделать копию для разработки.
* Если вы хотите использовать Drush для некоторых шагов, Drush должен быть установлен. Смотрите [install-tools](./install-tools.md).
* Если вы хотите использовать DDEV для вашей локальной среды, выполните шаги из [install-ddev](./install-ddev.md), затем следуйте инструкциям в секции про DDEV ниже.
## Общие шаги по созданию сайта для разработки

1. Пройдите шаги из [install-prepare](./install-prepare.md), чтобы у вас был хостинг для сайта для разработки, знали где его веб-корень, и у вас была пустая база данных и пользователь для этой базы.
1. Далее создайте дамп базы данных, содержащий содержимое вашей базы данных сайта. Файл может быть довольно большим, но есть два способа уменьшить размер:
    * Заархивируйте файл с помощью gzip или другой утилиты сжатия.
    * Исключите содержимое таблиц кеша, очистив эти таблицы (их данные временные, и вам нужна только структура таблиц).
    Для создания дампа базы данных используйте один из следующих методов:
    * Если вы используете Drush, используйте эту команду (она сохранит только структуру таблиц кеша, не данные, и сожмет результат):
    ```text
    drush sql:dump --gzip --structure-tables-list="cache,cache_*" \
      --result-file='PATH/TO/BACKUPFILE.sql'
    ```
    * Если вы используете MySQL и командную строку, используйте эту команду после очистки таблиц кеша (замените имя базы, пользователя и пароль на свои):
    ```text
    mysqldump -u'USERNAME' -p'PASSWORD' DATABASENAME | \
      gzip > PATH/TO/BACKUPFILE.sql.gz
    ```
    * Если вы используете MySQL, и ваш сервер поддерживает phpMyAdmin, очистите таблицы кеша через интерфейс (операция _Очистить_), затем используйте вкладку _Экспорт_ и выберите _SQL_ с _gzip_.
    * Используйте [модуль Backup and Migrate](https://www.drupal.org/project/backup_migrate) на живом сайте. Смотрите [extend-module-install](./extend-module-install.md) для установки модулей.
    Теперь у вас есть дамп базы данных, хранящийся в файле _BACKUPFILE.sql.gz_. Из соображений безопасности не храните его на сервере в пределах корня сайта.
1. Скопируйте все файлы из веб-корня живого сайта в веб-корень сайта для разработки. Можно использовать для этого Git, см. [extend-git](./extend-git.md).
1. Отредактируйте _sites/default/settings.php_ на сайте для разработки. Обновите строки с именем базы данных, пользователем и паролем на данные для тестовой базы. Строки выглядят примерно так:
    ```text
    $databases['default']['default'] = [
      'database' => 'live_site_database_name',
      'username' => 'live_site_database_username',
      'password' => 'live_site_database_password',
      …
    ```
1. Проверьте, есть ли в _settings.php_ настройка:
    ```text
    $settings['trusted_host_patterns']
    ```

    Если есть — отредактируйте, чтобы там был URL тестового сайта.
1. Проверьте наличие строки:
    ```text
    $settings['hash_salt'] = 'строка_из_случайных_символов';
    ```

    Если нет — добавьте ее. Для генерации случайной строки используйте:
    ```text
    drush php-eval 'echo \Drupal\Component\Utility\Crypt::randomBytesBase64(55) . "\n";'
    ```

    или любой онлайн-генератор (примерно 74 символа).

1. Импортируйте дамп базы данных в базу сайта для разработки одним из способов:
    * В phpMyAdmin вкладка _Импорт_ (при необходимости — повторяйте импорт если база большая).
    * Через командную строку:
    ```text
    gunzip < PATH/TO/BACKUPFILE.sql.gz | \
      mysql -u'USERNAME' -p'PASSWORD' DATABASENAME
    ```
    * Через Drush:
    ```text
    drush sql:query --file='PATH/TO/BACKUPFILE.sql.gz'
    ```
1. Если сайт для разработки должен отличаться по настройкам, используйте переопределения в _settings.php_ через переменную _$config_. Например:
    ```text
    $config['system.site']['name'] = "Тестовая копия Ярмарки города N";
    ```
## DDEV: шаги для создания сайта для разработки

1. В папке с файлами сайта выполните команду для инициализации и запуска окружения:
    ```text
    ddev config --project-type=drupal11 --docroot=web
    ddev start
    ```

    (Если структура отличается, подправьте путь --docroot).
1. Импортируйте дамп базы:
    ```text
    ddev import-db --file=PATH/TO/BACKUPFILE.sql.gz
    ```
## Расширьте свое понимание

* Проверьте, что сайт для разработки работает.
* Зайдите на тестовый сайт под администратором и очистите кэш ([prevent-cache-clear](./prevent-cache-clear.md)).
* [extend-deploy](./extend-deploy.md)
* [extend-git](./extend-git.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/FSBNm4oAkaA" title="Making a Development Site" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [Installing a new Drupal application on your local machine](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Creating a Drupal demo application for evaluation purposes](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Авторы*

Написано и отредактировано [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) из
[Drupalize.Me](https://drupalize.me) и
[Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
