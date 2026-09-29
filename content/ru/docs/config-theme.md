---
title: "Настройка темы"
description: "Как изменить настройки темы для обновления цветовой схемы и добавления логотипа."
id: "config-theme"
translation_key: "config-theme"
source_locale: "ru"
---
## Цель { #config-theme }

Отредактируйте настройки базовой темы ядра Olivero, чтобы изменить цветовую схему
и добавить логотип.
## Необходимые знания

[understanding-themes](./understanding-themes.md)
## Шаги

1. В административном меню _Управление_ перейдите в _Оформление_
    (_admin/appearance_).
1. В разделе _Установленные темы_ вы увидите, что Olivero установлена как тема
    по умолчанию. В блоке _Olivero (тема по умолчанию)_ нажмите _Настройки_.
    <img src="/images/config-theme_olivero_settings.png" alt="Тема по умолчанию, Olivero" width="100%" />
1. В разделе _Изображение логотипа_ снимите галочку _Использовать логотип,
    предоставленный темой_.
    ![Новый логотип в настройках темы Olivero](/images/config-theme_logo_upload.png)
1. В поле _Загрузить изображение логотипа_ найдите файл логотипа и загрузите его
    на сайт. Примечание: универсальный логотип для всех тем можно задать в
    _Оформление_ > _Настройки_ (_admin/appearance/settings_). Пользовательский логотип для
    вашей темы переопределит универсальный логотип.
    После выбора файла его имя появится рядом с кнопкой _Выбрать файл_ или _Обзор_
    в вашем браузере.
1. В разделе _Утилиты Olivero_ вы можете выбрать другую цветовую схему для
    темы. Можно выбрать существующую схему либо указать цвет, и ядро сгенерирует
    новую схему на его основе.

    Для примера используйте следующий пользовательский цвет:
    <table>
      <thead>
        <tr>
          <th>Поле</th>
          <th>Цвет</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Основной базовый цвет</td>
          <td>#7db84a (зелёный)</td>
        </tr>
      </tbody>
    </table>

    Примечание: вы также можете воспользоваться палитрой, нажав цветной квадрат
    справа, — код выбранного веб-цвета подставится автоматически.

1. Чтобы сохранить изменения и увидеть обновлённые цвета и логотип на сайте,
    нажмите _Сохранить конфигурацию_ внизу страницы.
1. Нажмите _Вернуться на сайт_ или _Главная_ на панели, чтобы убедиться, что
    настройки темы Olivero обновлены.
    <img src="/images/config-theme_final_result.png" alt="Итог изменения настроек темы Olivero — цвета и логотип" width="100%" />

## Расширьте понимание

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* Если изменения не видны на сайте, возможно, нужно очистить кэш. См. [prevent-cache-clear](./prevent-cache-clear.md).
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CEi3i1YGOs0" title="Настройка темы" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Amanda Luker](https://www.drupal.org/u/mndonx) из
[Advomatic](https://www.advomatic.com/) и
[Jack Haas](https://www.drupal.org/u/jerseycheese).

Переведено: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
