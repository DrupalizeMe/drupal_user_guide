---
title: "Включение и отключение режима обслуживания"
description: "Как включить режим обслуживания для отображения сообщения «Сайт находится в режиме обслуживания» и как отключить этот режим."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "ru"
---
## Цель { #extend-maintenance }

Включить режим обслуживания, чтобы пользователи с нужными правами могли
использовать сайт, а остальные видели сообщение о технических работах.
## Необходимые знания

[security-concept](./security-concept.md)
## Требования к сайту

Если вы хотите использовать Drush для включения/отключения режима обслуживания,
Drush должен быть установлен. Смотрите [install-tools](./install-tools.md).
## Шаги

Вы можете включать и отключать режим обслуживания через административный интерфейс или Drush.
### Включение режима обслуживания через административный интерфейс

1. В административном меню _Управление_ перейдите в _Конфигурация_ >
    _Разработка_ > _Режим обслуживания_ (_admin/config/development/maintenance_). Откроется
    страница _Режим обслуживания_.
1. Заполните поля, как показано ниже.
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Объяснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Перевести сайт в режим обслуживания</td>
          <td>Включить режим обслуживания</td>
          <td></td>
        </tr>
        <tr>
          <td>Сообщение для режима обслуживания</td>
          <td>Сообщение для посетителей сайта при включённом режиме. Можно использовать переменные вроде @site</td>
          <td>@site сейчас находится на обслуживании, но скоро будет доступен. Спасибо за ваше терпение.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Нажмите _Сохранить конфигурацию_.
1. Проверьте, что сайт находится в режиме обслуживания, открыв его в другом
    браузере без авторизации. Если не удаётся проверить, попробуйте очистить кэш — см. [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-enabled.webp" alt="Режим обслуживания включен" width="100%" />

### Отключение режима обслуживания через административный интерфейс

1. В административном меню _Управление_ перейдите в _Конфигурация_ >
    _Разработка_ > _Режим обслуживания_ (_admin/config/development/maintenance_).
    Откроется страница _Режим обслуживания_.
1. Заполните поля, как показано ниже.
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Объяснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Перевести сайт в режим обслуживания</td>
          <td>Отключить режим обслуживания</td>
          <td></td>
        </tr>
        <tr>
          <td>Сообщение для режима обслуживания</td>
          <td>При отключении сообщения не требуется, поле можно оставить пустым.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Нажмите _Сохранить конфигурацию_.
1. Проверьте, что сайт больше не в режиме обслуживания, открыв его в другом
    браузере без авторизации. Если не удаётся проверить — попробуйте очистить кэш ([prevent-cache-clear](./prevent-cache-clear.md)).
    <img src="/images/extend-maintenance-mode-disabled.webp" alt="Режим обслуживания отключен" width="100%" />

### Включение или отключение режима обслуживания с помощью Drush

1. Если нужно, сначала через интерфейс измените сообщение для режима обслуживания.
1. Для включения режима обслуживания и очистки кэша выполните:
    ```text
    drush config:set system.maintenance message "Необязательное сообщение" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Для отключения режима обслуживания и очистки кэша выполните:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. После выполнения команд проверьте, включён ли режим обслуживания, открыв сайт
    в браузере без авторизации.
## Расширьте своё понимание

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Включение и отключение режима обслуживания" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) в
[Red Crackle](http://redcrackle.com), и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
