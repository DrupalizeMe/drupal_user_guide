---
title: "Налаштування теми"
description: "Як редагувати налаштування теми, щоб оновити схему кольорів та додати логотип."
id: "config-theme"
translation_key: "config-theme"
source_locale: "uk"
---
## Мета { #config-theme }

Змінити налаштування основної теми Bartik за замовчуванням, щоб змінити схему кольору
та додати логотип.
## Необхідні знання

[understanding-themes](./understanding-themes.md)
## Кроки

1. В адміністративному меню _Керування_ перейдіть до _Зовнішній вигляд_
    (_admin/appearance_).
1. У розділі _Встановлені теми_ ви знайдете Bartik як базова тема. У розділі _Bartik (базова тема)_ клацніть _Налаштування_.
    ![Тема за замовчуванням, Bartik](/images/config-theme_bartik_settings.webp)
1. У розділі _Схема кольорів_ клацніть всередині кожного поля вибору кольору та введіть відповідні
    коди кольорів, які ви хотіли б додати. Наприклад, використовуйте
    наступні кольори:
    <table>
      <thead>
        <tr>
          <th>Площа</th>
          <th>Колір</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Заголовок фона зверху</td>
          <td># 7db84a (зелений)</td>
        </tr>
        <tr>
          <td>Заголовок фона знизу</td>
          <td># 2a3524 (темно-зелений)</td>
        </tr>
        <tr>
          <td>Основна довідка</td>
          <td>#ffffff (білий)</td>
        </tr>
        <tr>
          <td>Фон бічної панелі</td>
          <td># f8bc65 (світло-оранжевий)</td>
        </tr>
        <tr>
          <td>Межі бічної панелі</td>
          <td># e96b3c (оранжевий)</td>
        </tr>
        <tr>
          <td>Фон нижнього колонтитула</td>
          <td># 2a3524 (темно-зелений)</td>
        </tr>
        <tr>
          <td>Назва та гасло</td>
          <td>#ffffff (білий)</td>
        </tr>
        <tr>
          <td>Колір тексту</td>
          <td># 000000 (чорний)</td>
        </tr>
        <tr>
          <td>Колір посилання</td>
          <td># 2a3524 (темно-зелений)</td>
        </tr>
      </tbody>
    </table>

    Примітка: Ви також можете скористатися кольоровим кружком праворуч, щоб вибрати кольори на ваш вибір. Коди веб-кольорів будуть додані для вас.

    ![Оновлені специфікації кольорів в основній темі Bartik](/images/config-theme_color_scheme.webp)

1. У розділі _Зображеня логотипа_ зніміть прапорець _Використовувати логотип, пропонований темою_.
    ![Новий логотип у основних налаштуваннях теми Bartik](/images/config-theme_logo_upload.webp)
1. У розділі _Викласти зображення з логотипом_ знайдіть файл логотипу та завантажте його у свій
    сайт. Примітка. Ви також можете встановити універсальний логотип для всіх тем
    _Вигляд_ > _Налаштування_ (_admin/appearance/settings_). Спеціальний логотип для вашої
    теми замінить універсальний логотип.
    Вибравши файл, який ви хочете завантажити, ви побачите його
    ім'я файлу поруч із кнопкою _Вибрати файл_ або _Переглянути_ у вашому браузері.
1. Щоб зберегти зміни та побачити оновлені кольори та логотип на
    веб-сайті, натисніть _Зберегти конфігурацію_ внизу сторінки.
    Примітка: У розділі _Схема кольорів_ є розділ _Переглянути_, який відображає зразок
    про те, як ваш веб-сайт буде виглядати з новими налаштуваннями.
    ![попередній перегляд налаштувань основної теми Bartik](/images/config-theme_color_scheme_preview.png)
1. Клацніть _Повернутися на сайт_ або _Додому_ на панелі інструментів, щоб підтвердити, що система
    оновила основні налаштування теми Bartik для вашого веб-сайту.
    ![Остаточний результат редагування основних налаштувань теми Bartik - кольори та логотип](/images/config-theme_final_result.webp)
## Поліпшіть своє розуміння

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* Якщо ви не бачите ефекту від цих змін на своєму веб-сайті, вам може знадобитися
очистити кеш. Див. [prevent-cache-clear](./prevent-cache-clear.md).
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CEi3i1YGOs0" title="Configuring the Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написала та відредагувала [Ann Greazel](https://www.drupal.org/u/AnnGreazel),
[Amanda Luker](https://www.drupal.org/u/mndonx) за адресою
[Advomatic](https://www.advomatic.com/) та
[Jack Haas](https://www.drupal.org/u/jerseycheese).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://www.drupal.org/mazaltov).
