---
title: "Редагування основної інформації про сайт"
description: "Як редагувати основну інформацію про сайт (назва сайту, слоган і часовий пояс за умовчанням)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "uk"
---
## Мета { #config-basic }

Зміна основної інформації про сайт, такий як _Назва сайту_, _Слоган_,
_Часовой пояс по замовчуванню_.
## Необхідні знання

[config-overview](./config-overview.md)
## Кроки
### Налаштування базової інформації про сайт

1. В адміністративному меню _Керування_ перейдіть до _Конфігурація_ > _Система_ > _Основні налаштування сайту_
    (_admin/config/system/site-information_) для зміни _Назва сайту_, _Слогана_, адміністративної _Email адреси_ або шляху
     _Головної сторінки_.
1. Заповніть доступні поля відповідно до особливостей вашого сайту.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Пояснення</th>
          <th>Приклад</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Інформація про сайт > Назва сайту</td>
          <td>Використовується для ідентифікації сайту і відображається в браузерах.</td>
          <td>Ярмарка товарів міста N</td>
        </tr>
        <tr>
          <td>Інформація про сайт > Слоган</td>
          <td>Зазвичай відображається по всьому сайту</td>
          <td>Свіжі продукти від фермерських господарств]]</td>
        </tr>
        <tr>
          <td>Інформація про сайт > Email адреса</td>
          <td>Адреса вказуватиметься в поле _Відправника_ в автоматичних email повідомленнях (реєстрація, скидання пароля і т.д.)</td>
          <td>info@example.com</td>
        </tr>
      </tbody>
    </table>

    ![Інформація про сайт](/images/config-basic-SiteInfo.png)

1. Після редагування полів, натисніть _Зберегти конфігурацію_, щоб побачити зміни, внесені на сайті.
### Установка регіональних налаштувань за замовчуванням

1. В адміністративному меню _Керування_, перейдіть до _Конфігурація_ > _Регіон та мова_>
    _Регіональні налаштування_ (_admin/config/regional/settings_).
1. Заповніть форму наступним чином:
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Пояснення</th>
          <th>Приклад</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Мова > країна за замовчуванням</td>
          <td>The primary country for your site</td>
          <td>Україна</td>
        </tr>
        <tr>
          <td>Мова > Перший день тижня</td>
          <td>The day when the week starts on calendars</td>
          <td>понеділок</td>
        </tr>
        <tr>
          <td>Часові пояси > Часовий пояс за умовчанням</td>
          <td>Основний часовий пояс для вашого сайту</td>
          <td>Kyiv</td>
        </tr>
        <tr>
          <td>Часові пояси > наші клієнти можуть змінювати свій часовий пояс</td>
          <td>Можливість вибору користувачами іншого часового поясу для відображення дат і часу на сайті</td>
          <td>немає прапорця</td>
        </tr>
      </tbody>
    </table>

    ![Часові пояси](/images/config-basic-TimeZone.png)

1. Після редагування полів, натисніть _Зберегти конфігурацію_, щоб побачити зміни, внесені на сайті.
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Editing Basic Site Information" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

[_Drupal.org_ сторінка документації спільноти "Getting started with Drupal administration"](https://www.drupal.org/docs/administering-a-drupal-site/getting-started-with-drupal-administration)

*Автори*

Написано і змінено [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) з
[erdfisch](https://erdfisch.de),
[Antje Lorch](https://www.drupal.org/u/ifrik) і
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
