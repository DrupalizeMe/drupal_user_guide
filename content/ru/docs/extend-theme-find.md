---
title: "Поиск тем оформления"
description: "Как использовать фильтры для поиска тем и их оценки."
id: "extend-theme-find"
translation_key: "extend-theme-find"
source_locale: "ru"
---
## Цель { #extend-theme-find }

Найти и оценить темы на _Drupal.org_.
## Необходимые знания

* [understanding-drupal](./understanding-drupal.md)
* [understanding-themes](./understanding-themes.md)
## Шаги

1. Перейдите на https://www.drupal.org и откройте _Download & Extend > Themes_
    (https://www.drupal.org/project/project_theme).
1. Отфильтруйте поиск, используя категории на странице поиска тем.
    Например, вы можете использовать такие фильтры:
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Объяснение</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maintenance status</td>
          <td>Насколько активно поддерживается тема? Если тема активно поддерживается, можно ожидать регулярные исправления ошибок и улучшения.</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>На каком этапе разработки тема? Если выбрано _Under active development_, ожидаются новые функции, и некоторые аспекты темы могут измениться. Если выбрано _Maintenance fixes only_, это значит, что тема считается завершённой.</td>
          <td>Any</td>
          <td>Core compatibility</td>
          <td>Версия Drupal, с которой тема совместима.</td>
          <td>9.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>_Sandbox projects_ — экспериментальные проекты. _Full projects_ уже прошли процесс утверждения, но всё ещё могут находиться в разработке.</td>
          <td>Full projects</td>
          <td>Stability</td>
          <td>Есть ли у проекта стабильная версия, готовая для использования на рабочем сайте.</td>
        </tr>
        <tr>
          <td>Has a supported stable release</td>
          <td>Security advisory coverage</td>
          <td>Согласился ли мейнтейнер следовать процедурам Drupal Security Team.</td>
          <td>Has security advisory coverage</td>
        </tr>
        <tr>
          <td>Search themes</td>
          <td>Поиск по ключевым словам в описании темы.</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Упорядочить результаты поиска по критериям, например _Most installed_ (популярные темы, которые используют многие сайты) или _Last release_ (дата последнего релиза).</td>
          <td>Most installed</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Фильтры на странице поиска тем на _Drupal.org_](/images/extend-theme-find_theme_finder.webp)

1. Нажмите _Search_. Появятся результаты поиска.
    ![Страница результатов поиска на _Drupal.org_](/images/extend-theme-find_search_results.webp)
1. Для более детальной оценки темы щёлкните её название в списке результатов поиска,
    чтобы открыть страницу проекта.

    Некоторые аспекты, на которые стоит обратить внимание при оценке тем:

    * Введение: Описание темы на странице проекта должно быть ясным и полезным. Скриншот темы
    также поможет оценить её.
    * Информация о проекте: В этой области могут быть предупреждения, например,
    если тема больше не поддерживается или не попадает под политику безопасности.
    * Информация о проекте > Количество установок, загрузок: Можно увидеть,
    сколько людей скачали тему и сколько сайтов её используют.
    * Проблемы (Issues): Посмотрите, есть ли открытые проблемы, потенциальные баги. Проверьте
    статистику — как быстро реагируют на обращения.
    * Документация, ресурсы: Посмотрите, есть ли у темы документация или файл README,
    который поможет установить, настроить и протестировать тему.
## Расширьте своё понимание

* [extend-theme-install](./extend-theme-install.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/M8LYX6K53jg" title="Finding Themes" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано [Diána Lakatos](https://www.drupal.org/u/dianalakatos).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
