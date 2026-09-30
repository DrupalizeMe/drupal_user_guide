---
title: "Настройка главной страницы"
description: "Как выбрать материал, который будет отображаться в качестве главной страницы сайта."
id: "menu-home"
translation_key: "menu-home"
source_locale: "ru"
---
## Цель { #menu-home }

Настроить, какой материал будет показываться в качестве главной (начальной) страницы вашего сайта.
## Требования к сайту

Материал, который вы хотите сделать главной страницей сайта, должен быть уже создан. См. [content-create](./content-create.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Конфигурация_ > _Система_ > _Основные настройки сайта_ (_admin/config/system/site-information_).
1. В поле _Начальная страница_ замените _/node_ на путь к странице, которую вы хотите сделать главной. Чтобы использовать ранее созданную страницу "Главная", укажите путь _/home_. Нажмите _Сохранить настройки_.
    ![Область 'Начальная страница' с /home в текстовом поле](/images/menu-home_new_text_field.png)
1. Перейдите на главную страницу сайта и убедитесь, что отображается нужное содержимое.
    <img src="/images/menu-home_final.png" alt="'Начальная страница' с добавленным материалом 'Главная страница'" width="100%" />

## Узнать больше

* [menu-link-from-content](./menu-link-from-content.md)
* Выполните [content-create](./content-create.md), чтобы создать страницу ошибки, которую можно будет назначить для 404 (страница не найдена) или 403 (нет доступа) в разделе _Страницы ошибок_ этой же конфигурации.
## Связанные понятия

[menu-concept](./menu-concept.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/qOL8arBYpJ4" title="Назначение главной страницы сайта" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано: [Ann Greazel](https://www.drupal.org/u/AnnGreazel), [Jack Haas](https://www.drupal.org/u/jerseycheese), и [Jojy Alphonso](https://www.drupal.org/u/jojyja) из [Red Crackle](http://redcrackle.com).

Переведено: [Аземша Дарья](https://www.drupal.org/u/asdasha).
