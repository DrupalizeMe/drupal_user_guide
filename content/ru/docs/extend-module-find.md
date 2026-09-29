---
title: "Поиск модулей"
description: "Как искать и оценивать модули на Drupal.org."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "ru"
---
## Цель { #extend-module-find }

Найдите и оцените модули на _Drupal.org_.
## Необходимые знания

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Шаги

1. Зайдите на [_Drupal.org_](https://www.drupal.org), и перейдите в _Download &
    Extend_ > _Modules_ (https://www.drupal.org/project/project_module).
1. Используйте фильтры на странице поиска модулей.
    Заполните поля, как показано ниже.
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Описание</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Статус поддержки</td>
          <td>Насколько активно поддерживается модуль?</td>
          <td>Активно поддерживается</td>
        </tr>
        <tr>
          <td>Статус разработки</td>
          <td>Какой этап разработки проходит модуль?</td>
          <td>Любой</td>
        </tr>
        <tr>
          <td>Категория модуля</td>
          <td>Тематическая область модуля.</td>
          <td>Администрирование</td>
        </tr>
        <tr>
          <td>Совместимость с ядром</td>
          <td>Версия ядра, с которой совместим модуль.</td>
          <td>9.x</td>
        </tr>
        <tr>
          <td>Статус</td>
          <td>Статус проекта: _Sandbox projects_ — экспериментальные проекты. _Full projects_ уже утверждены, но могут быть в разработке.</td>
          <td>Full projects</td>
        </tr>
        <tr>
          <td>Стабильность</td>
          <td>Есть ли стабильный релиз.</td>
          <td>Has a supported stable release</td>
        </tr>
        <tr>
          <td>Покрытие рекомендаций по безопасности</td>
          <td>Соглашение поддерживать рекомендации по безопасности Drupal.</td>
          <td>Has security advisory coverage</td>
        </tr>
        <tr>
          <td>Поиск модулей</td>
          <td>Ищите _Admin Toolbar_, модуль, который будет рассмотрен далее. Можно оставить пустым, если не уверены, какой модуль искать.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Сортировать по</td>
          <td>Порядок отображения: например, _Most installed_ (самые популярные) или _Last release_ (последний релиз).</td>
          <td>Most installed</td>
        </tr>
      </tbody>
    </table>

    ![Фильтры на странице поиска модуля на _Drupal.org_](/images/extend-module-find_module_finder.png)

1. Нажмите _Search_. Появятся результаты поиска.
    ![Страница результатов поиска модулей на _Drupal.org_](/images/extend-module-find_search_results.png)
1. Чтобы подробнее оценить модуль, кликните по его названию в списке результатов — вы попадёте на страницу проекта.

    Обратите внимание на следующие аспекты при оценке модуля:

    * Описание проекта: На странице модуля должно быть чёткое описание, позволяющее понять его возможности и требования.
    * Информация о проекте: Могут быть предупреждения, если модуль более не разрабатывается или не покрывается рекомендациями по безопасности.
    * Статистика: Количество установок и загрузок — если модуль используется мало, это может быть либо уникальным решением, либо предупреждением.
    * Поддержка: Посмотрите дату последнего коммита и релиза. Если давно не было обновлений и при этом много открытых проблем — возможно, проект заброшен.
    * Проблемы (Issues): Проверьте наличие открытых проблем и как быстро на них отвечают.
    * Документация, ресурсы: Есть ли README или подробная документация для установки и настройки.
    ![Информация на странице проекта, на которую стоит обратить внимание при оценке модуля](/images/extend-module-find_project_info.png)
## Расширьте своё понимание

[extend-module-install](./extend-module-install.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/G-XUuSj9xYA" title="Поиск модулей" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано [Diána Lakatos](https://www.drupal.org/u/dianalakatos) в
[Pronovix](https://pronovix.com//).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
