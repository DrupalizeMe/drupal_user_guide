---
title: "Пошук модулів"
description: "Як шукати і оцінювати модулі на Drupal.org."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "uk"
---
## Мета { #extend-module-find }

Знайти і оцінити модулі на _Drupal.org_.
## Необхідні знання

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Кроки

1. Зайдіть на [_Drupal.org_](https://www.drupal.org), і перейдіть в _Download &
    Extend_ > _Modules_ (https://www.drupal.org/project/project_module).
1. Фільтрувати результати пошуку за категоріями на сторінці пошуку модуля.
    Заповніть поля, як показано нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Опис</th>
          <th>Приклад значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Статус обслуговування (Maintenance status)</td>
          <td>Наскільки активно підтримується модуль?</td>
          <td>Активно підтримується (Actively maintained)</td>
        </tr>
        <tr>
          <td>Статус розробки (Development status)</td>
          <td>Який етап розробки проходить модуль?</td>
          <td>Будь-який</td>
        </tr>
        <tr>
          <td>Категорія модуля (Module categories)</td>
          <td>Тематична область модуля.</td>
          <td>Адміністрування (Administration)</td>
        </tr>
        <tr>
          <td>Сумісність ядра (Core compatibility)</td>
          <td>Версія ядра, з якої сумісний модуль.</td>
          <td>8.x</td>
        </tr>
        <tr>
          <td>Статус (Status)</td>
          <td>Статус проекту: _Sandbox projects_ - експериментальні проекти. _Full projects_ вже пройшли процес затвердження, але вони все ще можуть бути в розробці.</td>
          <td>Full projects</td>
          <td>Стабільність (Stability)</td>
          <td>Чи розробник проекту створив production-ready версію.</td>
        </tr>
        <tr>
          <td>Має підтримуваний стабільний випуск</td>
          <td>Дотримання рекомендацій з безпеки (Security advisory coverage)</td>
          <td>Чи згоден супроводжуючий проекту слідувати процедурам Drupal</td>
        </tr>
        <tr>
          <td>Пошук модулів (Search modules)</td>
          <td>Знайдіть _Admin Toolbar_, модуль, який буде докладно описаний пізніше. Крім того, ви також можете залишити поле порожнім, якщо ви не впевнені, який модуль шукати.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Сортувати по (Sort by)</td>
          <td>Упорядкуйте результати пошуку за критеріями, таким як _Most Installed_ (популярні модулі, які використовують багато сайти) або _Last release_ (дата випуску останньої версії).</td>
          <td>Most installed</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Фільтри на сторінці пошуку модуля на _Drupal.org_](/images/extend-module-find_module_finder.webp)

1. Натисніть _Search_. З'являться результати пошуку.
    ![Сторінка результатів пошуку модуля на _Drupal.org_](/images/extend-module-find_search_results.webp)
1. Щоб додатково оцінити модуль, клацніть його назву в списку результатів пошуку і
    відвідайте сторінку проекту.

    Деякі аспекти, на які слід звернути увагу при оцінці модулів:

    * Опис проекту: Опис модуля на його сторінці проекту має
    бути ясним і зрозумілим. Ви повинні отримати уявлення про його особливості та вимоги.
    * Інформація про проект (Project information): У цій області сторінки можуть бути попередження, такі як
    модуль більше не розробляється або він не відповідіє
    рекомендаціям з безпеки.
    * Інформація про проект (Project information) > Кількість установок, завантаженнь (Reported installs, downloads): Ви можете побачити, скільки
    людей завантажили і скільки сайтів використовують модуль. Якщо він використовується тільки
    на декількох сайтах, це може бути унікальне рішенням, яке використовують не так багато людей, або може
    бути попередженням, що ви не повинні його встановлювати.
    * Розробники (Maintainers): Коли був останній Комміт (останній раз коли хтось щось оновлював
    в модулі) або останній реліз (нова версія)? Якщо у проекті мало відкритих
    проблем, протягом тривалого часу коммітів/релізів модуль може бути доречним, але якщо модуль має
    багато відкритих проблем і немає коммітів/релізів, це може бути підказкою
    що встановлювати даний модуль не слід.
    * Проблеми (Issues): Подивіться, чи є відкриті проблеми.
    Перевірте статистику, щоб побачити, як регулярно реагують на проблеми.
    * Документація, Ресурси (Documentation, Resources): Перевірте, чи є у модуля документація або README
    файл, який допоможе вам встановити, налаштувати, дослідити, і протестувати його.
    ![Інформація на сторінці проекту для пошуку при оцінці модуля](/images/extend-module-find_project_info.webp)
## Поліпшіть своє розуміння

[extend-module-install](./extend-module-install.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/G-XUuSj9xYA" title="Finding Modules" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Diána Lakatos](https://www.drupal.org/u/dianalakatos) з
[Pronovix](https://pronovix.com//).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
