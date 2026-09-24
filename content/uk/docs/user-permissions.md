---
title: "Додавання прав доступу для ролі"
description: "Як додати права доступу для ролі."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "uk"
---
## Мета { #user-permissions }

Змінити права доступу для ролі Постачальник, так щоб користувачі могли створювати, редагувати
і видаляти рецепти і сторінку постачальника, змінювати контент і писати повідомлення один
одному.
## Необхідні знання

* [user-concept](./user-concept.md)
## Вимоги до сайту

Роль Постачальник повинна існувати на вашому сайті. Дивіться [user-new-role](./user-new-role.md).
## Кроки

1. В адміністративному меню _Керування_, перейдіть на _Люди_ > _Ролі_
    (_admin/people/roles_). З'явиться сторінка _Ролі_.
1. Натисніть _Редагувати права доступа_ у випадаючому списку для ролі постачальник.
    З'явиться сторінка _Редагування ролі_, де ви можете подивитися всі доступні
    дії для сайту такі як, _Додавання коментарів_ або _Керування блоками_. Доступні права доступу залежать від модулів, які встановлені на
    сайті. Замітка: Деякі права доступу мають позначку про важливість для безпеки. Будьте обережними
    коли додаєте права доступу для ролей.
1. Виберіть галочками наступні дозволи надані модулями:
    <table>
      <thead>
        <tr>
          <th>Модуль</th>
          <th>Права доступу</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Використання персональних контактних форм користувачів</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Використання текстового формату Обмежений HTML</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Створення нових матеріалів</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Редагування власних матеріалів</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Рецепт: Видалення власного матеріалу</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Постачальник: Редагування власного матеріалу</td>
        </tr>
        <tr>
          <td>Quick Edit</td>
          <td>Доступ до вбудованого редактору</td>
        </tr>
      </tbody>
    </table>

    ![Додавання користувачам з роллю постачальник прав доступу на створення, видалення і редагування Рецептів](/images/user-permissions-check-permissions.webp)

1. Натисніть _Зберегти права доступа_. Ви отримаєте повідомлення, в якому буде сказано, що ваші зміни були
    збережені.
    ![Повідомлення з підтвердженням після оновлення прав доступу](/images/user-permissions-save-permissions.webp)
## Поліпшити своє розуміння

* Авторизуйтесь під одним з нових користувачів, яких ви створили тут [user-new-user](./user-new-user.md). Перевірте
чи мають вони правильні права доступу.
* [user-roles](./user-roles.md)
## пов'язані концепції

[user-admin-account](./user-admin-account.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Assigning Permissions to a Role" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

[_Drupal.org_ сторінка документації спільноти "Managing Users"](https://www.drupal.org/docs/7/managing-users)

*Автори*

Адаптовано і змінено [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
і [Jojy Alphonso](https://www.drupal.org/u/jojyja) з
http://redcrackle.com [Red Crackle], з
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
