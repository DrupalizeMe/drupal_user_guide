---
title: "Пошук тем оформлення"
description: "Як використовувати фільтри для пошуку тем і їх оцінки."
id: "extend-theme-find"
translation_key: "extend-theme-find"
source_locale: "uk"
---
## Мета { #extend-theme-find }

Пошук і оцінка тeм на _Drupal.org_.
## Необхідні знання

* [understanding-drupal](./understanding-drupal.md)
* [understanding-themes](./understanding-themes.md)
## Кроки

1. Зайдіть на https://www.drupal.org, і перейдіть в _Download & Extend > Themes_
    (https://www.drupal.org/project/project_theme).
1. Фільтрувати результати пошуку за категоріями на сторінці пошуку теми.
    Наприклад, ви можете використовувати ці фільтри:
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Пояснення</th>
          <th>Зразкове значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maintenance status</td>
          <td>Наскільки активно підтримується і розробляється тема оформлення? Якщо тема активно розробляється, ви можете очікувати виправлення багів і поліпшення на регулярній основі.</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>В якій стадії розробки знаходиться тема? Якщо ви вибрали _Under active development_, ви можете очікувати додавання нового функціоналу і деякі речі можуть бути змінені. Якщо ви вибрали _Maintenance fixes only_, це означає, що тема імовірно завершена.</td>
          <td>Any</td>
          <td>Core compatibility</td>
          <td>З якими версії Drupal тема сумісна.</td>
          <td>8.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>_Sandbox projects_ - це експериментальні проекти. _Full projects_ вже пройшли процес підтвердження, але вони можуть бути до сих пір в розробці.</td>
          <td>Full projects</td>
          <td>Stability</td>
          <td>Чи готова версія створена розробником до використання на живому сайті.</td>
          <td>Has a supported stable release</td>
        </tr>
        <tr>
          <td>Security advisory coverage</td>
          <td>Чи погодився розробник теми слідувати процедурам Drupal Security Team.</td>
          <td>Has security advisory coverage</td>
          <td>Search themes</td>
          <td>Шукає теми за допомогою термінів в опис тем.</td>
          <td>-</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Сортує результати пошуку за параметрами, таким як _Most installed_ (популярні теми які часто використовуються на сайтах) або _Last release_ (випущені недавно).</td>
          <td>Most installed</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Фільтри на сторінці пошуку теми на _Drupal.org_](/images/extend-theme-find_theme_finder.png)

1. Натисніть _Search_. Результати пошуку з'являться.
    ![Сторінка результатів пошуку на _Drupal.org_](/images/extend-theme-find_search_results.png)
1. Для подальшої оцінки теми клацніть її назву в списку результатів пошуку,
    відвідавши сторінку проекту.

    Деякі аспекти, на які слід звернути увагу при оцінці тем:

    * Вступ: Опис теми на сторінці проекту має бути зрозумілим
    і корисним. Скріншот теми також допоможе вашій оцінці.
    * Project information: У цій області сторінки можуть бути попередження, такі як
    тема більше не розробляється або не захищена
    з міркуваннь політики безпеки.
    * Project information > Reported installs, downloads: Ви можете побачити скільки
    людей завантажили і скільки сайтів використовують цю тему.
    * Issues: Подивіться, чи є відкриті питання, потенційні проблеми з
    темою. Перевірте статистику, щоб побачити, як регулярно реагують на проблеми.
    * Documentation, Resources: Перевірте, чи є у теми документація або README
    файл, який допоможе вам встановити, налаштувати, дослідити, і протестувати її.
## Поліпшіть своє розуміння

* [extend-theme-install](./extend-theme-install.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/M8LYX6K53jg" title="Finding Themes" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Diána Lakatos](https://www.drupal.org/u/dianalakatos).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://www.drupal.org/mazaltov).
