---
title: "Добавление страницы в меню навигации"
description: "Как добавить страницу в меню сайта при редактировании содержимого."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "ru"
---
## Цель { #menu-link-from-content }

Добавить страницу в меню навигации сайта. Например, добавить страницу "О рынке".
## Необходимые знания

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Требования к сайту

Страница "О рынке" уже должна быть создана. См. [content-create](./content-create.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Содержимое_ (_admin/content_).
1. Найдите страницу "О рынке" в списке и нажмите _Редактировать_ в её строке. Откроется форма редактирования материала.
    <img src="/images/menu-link-from-content_edit_page.png" alt="Ссылка на редактирование страницы" width="100%" />
1. Справа найдите и разверните вкладку _Настройки меню_.
1. Установите флажок _Создать ссылку в меню_, чтобы появились дополнительные поля настроек.
1. Заполните поля следующим образом:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Название ссылки меню</td>
          <td>Текст ссылки, который будет отображаться в меню</td>
          <td>О рынке</td>
        </tr>
        <tr>
          <td>Описание</td>
          <td>Текст-подсказка, который показывается при наведении</td>
          <td>История ярмарки</td>
        </tr>
        <tr>
          <td>Родительская ссылка</td>
          <td>Место расположения в иерархии меню. Например, выберите _<Основная навигация>_, чтобы разместить ссылку на верхнем уровне меню. Если выбрать другую ссылку как родительскую, можно создать вложенность меню.</td>
          <td><Основная навигация></td>
        </tr>
        <tr>
          <td>Вес</td>
          <td>Порядок вывода ссылки в меню (меньший вес — выше в списке)</td>
          <td>-2</td>
        </tr>
      </tbody>
    </table>

    ![Создание ссылки в меню через форму редактирования материала](/images/menu-link-from-content.png)

1. Нажмите _Сохранить_, чтобы применить изменения. Затем нажмите _Главная_ или _Вернуться на сайт_ в навигационной панели и убедитесь, что новая ссылка появилась в главном меню.
    <img src="/images/menu-link-from-content-result.png" alt="В основное меню добавлена ссылка" width="100%" />

## Узнать больше

[menu-reorder](./menu-reorder.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Добавление страницы в меню навигации" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные ресурсы

[_Drupal.org_ — документация "Добавление ссылки в меню"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu)

*Авторы*

Адаптировано [Boris Doesborg](https://www.drupal.org/u/batigolix) из
["Adding a link to a menu"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/menu-ui-module/adding-a-link-to-a-menu),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation);
отредактировано [Jack Haas](https://www.drupal.org/u/jerseycheese).

Перевод: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
