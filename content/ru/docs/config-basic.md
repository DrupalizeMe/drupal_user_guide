---
title: "Редактирование основной информации сайта"
description: "Как редактировать основную информацию сайта (название, слоган и часовой пояс по умолчанию)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "ru"
---
## Цель { #config-basic }

Изменить базовую информацию сайта, такую как _Название сайта_, _Слоган_,
_Часовой пояс по умолчанию_.
## Необходимые знания

[config-overview](./config-overview.md)
## Шаги
### Настройка базовой информации сайта

1. В административном меню _Управление_ перейдите в _Конфигурация_ > _Система_ >
    _Основная информация сайта_ (_admin/config/system/site-information_) для изменения
    _Названия сайта_, _Слогана_, административного _Email адреса_ или пути _Главной страницы_.
1. Заполните поля, соответствующие вашему сайту.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Пояснение</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Информация о сайте > Название сайта</td>
          <td>Используется для идентификации сайта и отображается в браузере</td>
          <td>Рынок продуктов города N</td>
        </tr>
        <tr>
          <td>Информация о сайте > Слоган</td>
          <td>Использование зависит от темы сайта. По умолчанию не отображается в теме Olivero.</td>
          <td>Свежие фермерские продукты</td>
        </tr>
        <tr>
          <td>Информация о сайте > Email адрес</td>
          <td>Используется как адрес _От кого_ в автоматических письмах (регистрация, сброс пароля и т. д.)</td>
          <td>info@example.com</td>
        </tr>
      </tbody>
    </table>

    ![Информация о сайте](/images/config-basic-SiteInfo.png)

1. После заполнения полей нажмите _Сохранить конфигурацию_, чтобы изменения
    применились к сайту.
### Настройка региональных параметров по умолчанию

1. В административном меню _Управление_ перейдите в _Конфигурация_ >
    _Регион и язык_ > _Региональные настройки_
    (_admin/config/regional/settings_).
1. Заполните форму следующим образом:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Пояснение</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Локаль > Страна по умолчанию</td>
          <td>Основная страна сайта</td>
          <td>Соединённые Штаты</td>
        </tr>
        <tr>
          <td>Локаль > Первый день недели</td>
          <td>День начала недели в календарях</td>
          <td>воскресенье</td>
        </tr>
        <tr>
          <td>Часовые пояса > Часовой пояс по умолчанию</td>
          <td>Основной часовой пояс сайта</td>
          <td>Америка > Лос-Анджелес</td>
        </tr>
        <tr>
          <td>Часовые пояса > Пользователи могут задавать свой часовой пояс</td>
          <td>Позволяет ли авторизованным пользователям выбирать другой часовой пояс для отображения дат и времени</td>
          <td>Не отмечено</td>
        </tr>
      </tbody>
    </table>

    ![Часовые пояса](/images/config-basic-TimeZone.png)

1. После заполнения полей нажмите _Сохранить конфигурацию_, чтобы изменения
    применились к сайту.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/oDMCQ1cDYOI" title="Редактирование основной информации сайта" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

[_Drupal.org_ — страница «Getting started with Drupal administration»](https://www.drupal.org/docs/administering-a-drupal-site/getting-started-with-drupal-administration)

*Авторы*

Написано и отредактировано [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) из
[erdfisch](https://erdfisch.de),
[Antje Lorch](https://www.drupal.org/u/ifrik) и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
