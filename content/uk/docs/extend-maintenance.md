---
title: "Включення і вимкннення режиму обслуговування"
description: "Як включити режим обслуговування, щоб налаштувати повідомлення «Сайт знаходиться в режимі обслуговування», і як його відключити."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "uk"
---
## Мета { #extend-maintenance }

Переведіть ваш сайт в режим обслуговування, щоб користувачі з правами доступу могли
використовувати сайт, в той час як користувачі без цього дозволу отримають повідомлення
що сайт знаходиться в режимі обслуговування.
## Необхідні знання

[security-concept](./security-concept.md)
## Вимоги до сайту

Якщо ви хочете використовувати Drush, щоб включати і вимикати режим обслуговування, Drush повинен бути
встановлено. Дивіться [install-tools](./install-tools.md).
## Кроки

Ви можете використовувати адміністративне меню або Drush для включення або виключення
режиму обслуговування.
### Включення режиму обслуговування через адміністративний інтерфейс

1. В _Керування_ адміністративного меню, перейдіть в _Конфігурація_ >
    _Розробка_ > _Режим обслуговування_ (_admin/config/development/maintenance_).
    з'явиться сторінка _Режим обслуговування_.
1. Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>пояснення</th>
          <th>значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Перекласти сайт в режим обслуговування</td>
          <td>Включити режим обслуговування</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Повідомлення про те, що сайт знаходиться в режимі технічного обслуговування</td>
          <td>Інформація, яка відображається відвідувачам сайту при включеному режимі. Можна використовувати такі змінні, як @site в повідомленні</td>
          <td>@site в даний час знаходиться на обслуговуванні, але повинен повернутися найближчим часом. Спасибі за терпіння.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Натисніть _Зберегти конфігурацію_.
1. Переконайтеся, що сайт знаходиться в режимі обслуговування, відкривши його з іншого
    браузера, де ви не ввійшли в систему. Якщо ви не можете перевірити, спробуйте скинути
    кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
    ![Режим обслуговування включений](/images/extend-maintenance-mode-enabled.webp)
### Відключення режиму обслуговування з використанням адміністративного інтерфейсу

1. В _Керування_ адміністративного меню, перейдіть в _Конфігурація_ > _Розробка_ > _Режим обслуговування_ (_admin/config/development/maintenance_).
    З'явиться сторінка _Режим обслуговування_.
1. Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>пояснення</th>
          <th>значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Перекласти сайт в режим обслуговування</td>
          <td>Вимкнути режим обслуговування</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Повідомлення про те, що сайт знаходиться в режимі технічного обслуговування</td>
          <td>При відключенні повідомлення з відповіді. Ви можете залишити поле порожнім.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Натисніть _Зберегти конфігурацію_.
1. Переконайтеся, що сайт більше не знаходиться в режимі обслуговування, отримавши доступ до нього з
    іншого браузера, де ви не ввійшли в систему. Якщо ви не можете перевірити, спробуйте скинути
    кеш. Дивіться [prevent-cache-clear](./prevent-cache-clear.md).
    ![Режим обслуговування відключений](/images/extend-maintenance-mode-disabled.webp)
### Включення або відключення режиму обслуговування за допомогою Drush

1. Виконайте дії, описані вище, для редагування повідомлення про обслуговування сайту, якщо
    це потрібно.
1. Виконайте наступні команди Drush, щоб включити режим обслуговування і очистити
    кеш:
    ```text
    drush config:set system.maintenance message "додаткове повідомлення" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Виконайте наступні команди Drush, щоб відключити режим обслуговування і очистити
    кеш:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. Після запуску будь-якого набору команд переконайтеся, що ваш сайт знаходиться в або
    поза режимом обслуговування відвідавши сайт в браузері, де ви не
    авторизовані.
## Поліпшіть своє розуміння

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Enabling and Disabling Maintenance Mode" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано і змінено [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) з
[Red Crackle](http://redcrackle.com), і
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://www.drupal.org/mazaltov).
