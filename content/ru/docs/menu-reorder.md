---
title: "Изменение порядка ссылок в меню"
description: "Как изменить порядок ссылок в меню."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "ru"
---
## Цель { #menu-reorder }

Изменить порядок вывода ссылок в меню.
## Необходимые знания

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Требования к сайту

В меню основной навигации уже должны быть добавлены страницы "Главная" и "О рынке". См. [menu-link-from-content](./menu-link-from-content.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Структура_ > _Меню_ (_admin/structure/menu_), где отображаются все меню сайта. В строке _Основная навигация_ выберите _Редактировать меню_ в выпадающем списке _Операции_. На эту страницу можно попасть и через контекстные ссылки (см. [config-overview](./config-overview.md)). Обратите внимание, что названия и описания меню, добавленных при установке, могут отображаться на английском языке; подробнее — см. [language-concept](./language-concept.md).
    <img src="/images/menu-reorder_menu_titles.webp" alt="Список меню сайта, выделено 'Main navigation'" width="100%" />
1. На странице _Редактировать меню_ будет представлен список всех ссылок этого меню (_Основная навигация_).
    ![Список ссылок меню в _Main navigation_](/images/menu-reorder_edit_menu.webp)
1. Перетащите значки-перекрестия напротив нужных ссылок для изменения порядка, чтобы, например, "Главная" была первой, а "О рынке" — второй. Альтернативно можно нажать _Показать веса строк_ и назначить числовой вес (чем меньше/отрицательнее значение, тем выше ссылка в меню).
    ![Изменённый порядок ссылок меню, предупреждение о несохранённых изменениях и кнопка _Сохранить_](/images/menu-reorder_reorder.webp)
1. Нажмите _Сохранить_.
1. Теперь на главной странице в меню первой отображается ссылка "Главная".
    ![Изменённый порядок ссылок меню на главной: 'Главная' первой, затем 'О рынке'](/images/menu-reorder_final_order.webp)
## Расширьте своё понимание

Добавьте ссылку _Контакт_, ведущую на страницу _/contact_, в меню основной навигации. Эта страница создаётся основным модулем Contact. При необходимости настройте её поля и расположение (см. [structure-form-editing](./structure-form-editing.md)).
## Связанные понятия

[menu-concept](./menu-concept.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Changing the Order of Navigation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано [Ann Greazel](https://www.drupal.org/u/AnnGreazel).

Перевод: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
