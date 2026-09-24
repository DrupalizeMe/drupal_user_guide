---
title: "Налаштування Перекладу Матеріалів"
description: "Як налаштувати матеріали, щоб зробити їх перекладними."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "uk"
---
## Мета { #language-content-config }

Зробіть типи сутностей _Власний блок_, _Пункти меню_, і _Вміст_
перекладними. Вибрати конкретні підтипи і встановити, які поля в них можуть бути
перекладені.
## Необхідні знання

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Вимоги до сайту

Модуль ядра Content Translation повинен бути встановлений, і у вашого сайту має
бути дві мови. Дивіться [language-add](./language-add.md).
## Кроки

1. У _Керування_ адміністративного меню, перейдіть в _Конфігурація_ > _Мова та регіональні стандарти_ > _Мова Матеріалу_
    (_admin/config/regional/content-language_).
1. Під _Налаштування власної мови_, виберіть _Вміст_,
    _Власний блок_ і _Посилання власного меню_, щоб зробити ці типи сутностей перекладними.
    ![чекліст налаштувань мови](/images/language-content-config_custom.webp)
1. Параметри конфігурації відобразяться для _Вміст_, _Власний блок_ і _Пункти власного меню_. Виберіть підтипи, які ви хочете перевести для кожного типу
    сутності. Виберіть _Головна сторінка_ для _Вміст_, _Головний блок_ для _Власного блока_ і
    _Пункти меню_ для _Пунктів меню_.
1. Перевірте налаштування для типів сутності, як показано нижче:
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Приклад значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Мова за замовчуванням</td>
          <td>Мова за замовчуванням для підтипу сутності</td>
          <td>Базова мова сайту (Українська)</td>
        </tr>
        <tr>
          <td>Показувати вибір мови на сторінках створення та редагування</td>
          <td>Чи повинна бути вибрана мова при редагуванні і створенні вмісту</td>
          <td>Обрано</td>
        </tr>
      </tbody>
    </table>

    ![Мова за замовчуванням і перекладність для типів матеріалу](/images/language-content-config_content.webp)

1. Виберіть поля, які повинні бути перекладними для _Головної сторінки_, як показано в
    таблиці нижче. Якщо полю не потрібен переклад, то не вибирайте його.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Приклад значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Заголовок</td>
          <td>Тема вмісту</td>
          <td>Обрано</td>
        </tr>
        <tr>
          <td>Автор</td>
          <td>Автор</td>
          <td>Не обрано</td>
        </tr>
        <tr>
          <td>Опубліковано</td>
          <td>Чи було вміст опубліковано</td>
          <td>Обрано</td>
        </tr>
        <tr>
          <td>Час створення</td>
          <td>Дата публікації</td>
          <td>Не обрано</td>
        </tr>
        <tr>
          <td>зміна</td>
          <td>Дата останнього оновлення</td>
          <td>Не обрано</td>
        </tr>
        <tr>
          <td>Винесено на головну сторінку</td>
          <td>Чи буде вміст включено до деяких уявлення вмісту</td>
          <td>Не обрано</td>
        </tr>
        <tr>
          <td>Прикріплено зверху списків</td>
          <td>Чи буде вміст відображатися першим в деяких видах вмісту</td>
          <td>Не обрано</td>
        </tr>
        <tr>
          <td>Синонім URL</td>
          <td>URL для вмісту</td>
          <td>Обрано</td>
        </tr>
        <tr>
          <td>Тіло</td>
          <td>Основний вміст сторінки</td>
          <td>Обрано</td>
        </tr>
      </tbody>
    </table>

    ![чекліст перекладу вмісту підтипів сутностей](/images/language-content-config_basic_page.webp)

1. Точно так само відзначте відповідні поля для перекладних полів, що належать
    _Головному блоку_ і _Пунктам меню_.
1. Натисніть _Зберегти конфігурацію_.
## Поліпшіть своє розуміння

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Configuring Content Translation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

* [Матеріал блогу "Multilingual Drupal 8 tidbits, part 5"](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [Матеріал блогу "Multilingual Drupal 8 tidbits, part 17"](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*Автори*

Написано і змінено [Laura Vass](https://www.drupal.org/u/lolk) із
[Pronovix](https://pronovix.com/),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) із
[Red Crackle](http://redcrackle.com),
і [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переклав [Олексій Бондаренко](https://www.drupal.org/user/2914091) із [Mazaltov](https://drupal.org/mazaltov).
