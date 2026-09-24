---
title: "Назначение прав доступа для роли"
description: "Как назначить права доступа для роли."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "ru"
---
## Цель { #user-permissions }

Измените права доступа для роли Производитель так, чтобы пользователи могли создавать, редактировать,
и удалять материалы Рецепт и Производитель, форматировать контент и связываться друг с другом.
## Необходимые знания

* [user-concept](./user-concept.md)
## Требования к сайту

Роль Производитель должна существовать на вашем сайте. Смотрите [user-new-role](./user-new-role.md).
## Шаги

1. В _Управлении_ административного меню перейдите в _Пользователи_ > _Роли_
    (_admin/people/roles_). Появится страница _Роли_.
1. Нажмите _Редактировать права доступа_ в выпадающем меню для роли Производитель.
    Появится страница _Редактирование роли_, где можно увидеть все доступные
    действия для сайта, такие как, например, _Добавление комментариев_ или _Управление
    блоками_. Доступные права зависят от установленных модулей.
    Примечание: некоторые права доступа могут повлиять на безопасность сайта. Будьте внимательны
    при назначении прав доступа ролям.
1. Отметьте галочками следующие права доступа, сгруппированные по модулям:
    <table>
      <thead>
        <tr>
          <th>Модуль</th>
          <th>Право доступа</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Использование персональных контактных форм пользователей</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Использование текстового формата Ограниченный HTML</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Создание новых материалов</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Редактирование собственных материалов</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Удаление собственных материалов</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Производитель: Редактирование собственных материалов</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.webp" alt="Добавление пользователям с ролью Производитель прав на создание, удаление и редактирование Рецептов" width="100%" />

1. Нажмите _Сохранить права доступа_. Вы увидите сообщение о том, что ваши изменения были
    сохранены.
    ![Сообщение с подтверждением после обновления прав доступа](/images/user-permissions-save-permissions.webp)
## Улучшите своё понимание

* Войдите на сайт под одним из новых пользователей, созданных в [user-new-user](./user-new-user.md). Проверьте,
есть ли у него нужные права доступа.
* [user-roles](./user-roles.md)
## Связанные концепции

[user-admin-account](./user-admin-account.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Assigning Permissions to a Role" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

[_Drupal.org_ страница документации сообщества "Managing Users"](https://www.drupal.org/docs/7/managing-users)

*Авторы*

Адаптировано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
и [Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com),
и [Joe Shindelar](https://www.drupal.org/u/eojthebrave) из
[Drupalize.Me](https://drupalize.me), из
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
