---
title: "Налаштування таксономії"
description: "Як створити словник таксономії і додати його поле до типу матеріалів."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "uk"
---
## Мета { #structure-taxonomy-setup }

Створити словник Інгредієнти і додати його в тип матеріалу Рецепт
як поле, яке може містити необмежену кількість значень і це дозволить додавати
нові терміни в словник.
## Необхідні знання

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Вимоги до сайту

Тип матеріалу Рецепт повинен бути створений. Дивіться [structure-content-type](./structure-content-type.md).
## Кроки

1. У _Керування_ адміністративного меню, перейдіть в _Структура_ > _Таксономія_
    (_admin/structure/taxonomy_). Ви побачите словник _Tags_ vocabulary, який був
    створений Стандартним інсталяційний профілем. (Зверніть увагу, що ім'я та
    опис цього словника показано англійською на цій сторінці; дивіться
    [language-concept](./language-concept.md) для пояснення.)
    ![Сторінка таксономії](/images/structure-taxonomy-setup-taxonomy-page.png)
1. Натисніть _Додати словник_, і заповніть значення нижче.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Пояснення</th>
          <th>Приклад значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Назва (ім'я)</td>
          <td>Назва словника</td>
          <td>Інгредієнти</td>
        </tr>
        <tr>
          <td>Опис</td>
          <td>Короткий опис словника</td>
          <td>(Залишити порожнім)</td>
        </tr>
      </tbody>
    </table>

    ![Додавання таксономії Інгредієнти](/images/structure-taxonomy-setup-add-vocabulary.png)

1. Натисніть _Зберегти_. Ви потрапите на сторінку Інгредієнти, яка показує список
    всіх термінів в цьому словнику.
    ![Список термінів таксономії інгредієнти](/images/structure-taxonomy-setup-vocabulary-overview.png)
1. Натисніть _Додати термін_. Введіть "Масло" в поле _Назва (ім'я)_. Натисніть _Зберегти_.
    ![Сторінка додавання терміну](/images/structure-taxonomy-setup-add-term.png)
1. Ви побачите підтвердження, що створили термін. Додайте більше
    термінів. Наприклад, "Яйця" і "Молоко".
1. У _Керування_ адміністративного меню, перейдіть в _Структура_ > _Типи матеріалів_
    (_admin/structure/types_). Натисніть _Керувати полями_ для вашого типу матеріалу Рецепт.
1. Натисніть _Додати поле_, і введіть значення з таблиці нижче. Натисніть _Зберегти та продовжити_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Додати нове поле</td>
          <td>Вибір типу поля</td>
          <td>Посилання> Термін таксономії</td>
        </tr>
        <tr>
          <td>Мітка</td>
          <td>Заголовок поля</td>
          <td>Інгредієнти</td>
        </tr>
      </tbody>
    </table>

    ![Додавання поля Інгредієнти в тип матеріалу Рецепт](/images/structure-taxonomy-setup-add-field.png)

1. На наступному екрані конфігурації, введіть значення з таблиці нижче.
    Натисніть _Зберегти налаштування поля_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тип пункту для посилання</td>
          <td>Тип об'єкта, на який посилається поле</td>
          <td>Термін таксономії</td>
        </tr>
        <tr>
          <td>Дозволена кількість значень</td>
          <td>Кількість значень, які користувач може ввести</td>
          <td>Необмежено</td>
        </tr>
      </tbody>
    </table>

    ![Налаштування поля для інгридієнтів](/images/structure-taxonomy-setup-field-settings.png)

1. На наступному екрані конфігурації, введіть значення з таблиці нижче. Натисніть _Зберегти налаштування_.
    <table>
      <thead>
        <tr>
          <th>Назва поля</th>
          <th>Опис</th>
          <th>Значення</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Текст довідки</td>
          <td>Довідка, показана користувачам, що створють контент</td>
          <td>Введіть інгредієнти, які відвідувачі сайту можуть шукати</td>
        </tr>
        <tr>
          <td>Тип посилання > Спосіб посилання</td>
          <td>Виберіть метод, який використовується для вибору допустимих значень</td>
          <td>Базово</td>
        </tr>
        <tr>
          <td>Тип посилання > Словник</td>
          <td>Виберіть словник, щоб обирати з нього допустимі значення</td>
          <td>Інгредієнти</td>
        </tr>
        <tr>
          <td>Тип посилання > Створювати сутності за посиланням, якщо вони ще не були створені до того</td>
          <td>Чи можна створювати нові терміни для інгредієнтів з форми редагування контенту</td>
          <td>Обрано</td>
        </tr>
      </tbody>
    </table>

    ![Налаштування поля посилання](/images/structure-taxonomy-setup-field-settings-2.png)

1. Натисніть _Зберегти налаштування_. Ви повернетеся на сторінку _Керувати полями_.
    З'явиться повідомлення про те, що конфігурація для Інгредієнти
    збережена.
    ![Сторінка керування полями для типу матеріалу Рецепт](/images/structure-taxonomy-setup-finished.png)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Setting up a Taxonomy" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Written and edited by [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
