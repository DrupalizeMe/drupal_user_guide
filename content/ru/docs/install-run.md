---
title: "Запуск интерактивного установщика"
description: "Как воспользоваться встроенным веб-установщиком для установки ядра Drupal."
id: "install-run"
translation_key: "install-run"
source_locale: "ru"
---
## Цель { #install-run }

Установить ядро Drupal и создать административную учетную запись, используя встроенный веб-установщик.
## Требования к сайту

[install-prepare](./install-prepare.md)

> Если вы работали по инструкции [install-ddev](./install-ddev.md), ядро уже установлено. Если хотите запустить установку заново, выполните `ddev drush sql:drop`, затем следуйте шагам ниже.
## Шаги

1. Если вы используете 1-клик установку от хостинга или демо-сайт, вы, вероятно, увидите большинство следующих шагов автоматически. Если вы загрузили файлы Drupal вручную или через Composer, чтобы начать установку, откройте браузер и перейдите по URL вашего будущего сайта.
1. На первом экране выберите язык, например, Русский. После выбора нужного языка нажмите _Сохранить и продолжить_ — файлы перевода будут загружены автоматически.
    <img src="/images/install-run-1.png" alt="Выбор языка" width="100%" />
1. Выберите установочный профиль. Профили определяют базовую конфигурацию и набор расширений для разных сценариев сайтов. Как правило, выберите "Стандарт" и нажмите _Сохранить и продолжить_.
    <img src="/images/install-run-2.png" alt="Выберите профиль установки" width="100%" />
1. Далее будет проверка соответствия минимальным требованиям сервера. Если что-то не подходит, появится сообщение с рекомендациями. Если всё в порядке, установщик перейдёт к следующему этапу.
1. Введите параметры базы данных, созданной на шаге [install-prepare](./install-prepare.md), и нажмите _Сохранить и продолжить_.
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Пояснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Имя базы данных</td>
          <td>Имя созданной БД</td>
          <td>drupal</td>
        </tr>
        <tr>
          <td>Пользователь базы</td>
          <td>Имя пользователя БД</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Пароль</td>
          <td>Пароль к базе</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.png" alt="Форма конфигурации базы данных" width="100%" />

1. На следующем этапе появится индикатор прогресса установки — подождите окончания процесса.
    <img src="/images/install-run-4.png" alt="Индикатор процесса установки" width="100%" />
1. После установки задайте основные параметры сайта: название сайта, почта, логин и пароль администратора (создаётся первый пользователь — суперпользователь). Обратите внимание на предупреждение о правах доступа к файлам, если оно появилось.
    Заполните форму:
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Пояснение</th>
          <th>Пример</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Название сайта</td>
          <td>Название сайта</td>
          <td>Городская ярмарка города N</td>
        </tr>
        <tr>
          <td>Email сайта</td>
          <td>Служебная почта сайта</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>Имя пользователя</td>
          <td>Имя админа</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Пароль</td>
          <td>Пароль для админа</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Подтвердить пароль</td>
          <td>Повторите пароль</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Email пользователя</td>
          <td>Почта админа</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    Остальные поля можно оставить по умолчанию.
    <img src="/images/install-run-5.png" alt="Форма базовых настроек сайта" width="100%" />

1. Нажмите _Сохранить и продолжить_.
1. После завершения вы будете перенаправлены на главную страницу нового сайта с сообщением _Поздравляем, вы успешно установили Drupal!_.
    <img src="/images/install-run-6.png" alt="Успешная установка" width="100%" />
1. Если на шаге конфигурации появилось предупреждение о правах доступа к файлам, после установки установите права только для чтения (read-only) для каталога _sites/default_ и файла _sites/default/settings.php_ (обратитесь к документации хостинга, если не знаете как это сделать).
## Расширьте понимание

Вы можете выполнить установку и через Drush, а не через веб-интерфейс. Используйте команду из папки с сайтом (укажите свои данные доступа к БД):

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```

Проверьте отчет о состоянии сайта (Status Report), чтобы убедиться в отсутствии проблем. См. [prevent-status](./prevent-status.md).
## Связанные темы

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/LGfRKKKDjv8" title="Running the Installer" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

<div class="embedded-video">
  <iframe src="https://youtu.be/stfyr0757ts" title="Установка и русификация Drupal 8" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [_Drupal.org_: Create a Database](https://www.drupal.org/docs/installing-drupal/step-3-create-a-database)
* [_Drupal.org_: Webhosting issues](https://www.drupal.org/server-permissions)
* [Drupalbook.org — Установка и русификация Drupal 8](https://drupalbook.org/ru/blog/1-ustanovka-i-rusifikaciya-drupal-8)

*Авторы*

Написано и отредактировано [Joe Shindelar](https://www.drupal.org/u/eojthebrave) из
[Drupalize.Me](https://drupalize.me),
и [Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
