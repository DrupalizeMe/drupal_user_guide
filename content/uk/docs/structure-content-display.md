---
title: "Зміна Відображення типу матеріалу"
description: "Як поліпшити відображення полів типу матеріалу."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "uk"
---
## Мета { #structure-content-display }

Зробити вміст зручнішим для читання, доступним і візуально привабливим
шляхом зміни порядку полів, приховування міток і налаштування відображення полів.
## Необхідні знання

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Необхідні компоненти сайту

Повинен існувати тип матеріалу Постачальник, який містить поля
Основне зображення і URL постачальника, також необхідно мати хоча б один
матеріал типу Постачальник. Див. [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md)
і [content-create](./content-create.md).
## Кроки

1. Знайдіть і відкрийте матеріал Постачальник, створення якого описано в
    [structure-fields](./structure-fields.md). Для поліпшення відображення сторінки можна виконати
    наступне:
    * Приховати мітки для полів Основне зображення і URL постачальника.
    * Змінити порядок розміщення полів, щоб зображення стало першим.
    * Зменшити зображення.
1. Щоб виконати два перші пункти і здійснити додаткові налаштування,
    в розділі _Керування_ адміністративного меню перейдіть до пункту
    _Структура_ > _Типи матеріалів_ (_admin/structure/types_). Потім виберіть
    _Керувати відображенням_ у випадаючому списку для типу матеріалу Постачальник.
    ![Керувати відображенням](/images/structure-content-display_manage_display.webp)
1. У колонці _Мітка_ для поля Основне зображення виберіть _-Приховано-_. Теж саме виконайте для поля URL постачальника.
    ![Вибір _мітки головного зображення_ як _прихованого_](/images/structure-content-display_main_image_hidden.webp)
1. Натисніть на символ шестерні для поля URL постачальника, щоб перейти до його налаштувань.
1. Заповніть поля як зазначено нижче.
    <table>
      <thead>
        <tr>
          <th>Ім'я поля</th>
          <th>Пояснення</th>
          <th>Приклад</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Скорочувати довжину тексту посилання</td>
          <td>Максимальна довжина тексту посилання</td>
          <td>Пусто (не скорочувати)</td>
        </tr>
        <tr>
          <td>Відкривати посилання в новому вікні</td>
          <td>Відкривати посилання в новому або існуючому вікні</td>
          <td>Відзначено</td>
        </tr>
      </tbody>
    </table>

    ![Обрізка довжини посилання](/images/structure-content-display_trim_length.webp)

1. Натисніть _Оновити_.
1. Змініть порядок полів _Основне зображення_, _Body_, _URL_ постачальника і _Посилання_
    перетягуванням кнопки з хрестиком. В якості альтернативи можна натиснути на
    посилання _Показати вагу рядків_, розташовану над таблицею, і ввести числові значення ваги
    (Поля з меншими або негативними значеннями будуть відображатися першими).
    ![Зміна порядку полів](/images/structure-content-display_change_order.webp)
1. Натисніть _Зберегти_.
1. Знову знайдіть матеріал Постачальник з пункту 1 і переконайтеся, що зміни зроблені.
1. Повторіть подібні кроки для управління відображенням полів типу матеріалів Рецепт.
## Дізнатися більше

* Як зменшити основне зображення. Див. [structure-image-style-create](./structure-image-style-create.md).
* Якщо зміни були виконані, але не відображаються на сайті, вам слід виконати
очистку кешу. Див. [prevent-cache-clear](./prevent-cache-clear.md).
## Пов'язані поняття

[structure-image-styles](./structure-image-styles.md)
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Changing Content Display" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові ресурси

* [_Drupal.org_ сторінка документації спільноти "Specify how fields are displayed"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/specify-how-fields-are-displayed)
* [_Drupal.org_ сторінка документації спільноти "Rearrange the order of fields"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/rearrange-the-order-of-fields)
* [_Drupal.org_ сторінка документації спільноти "View modes"](https://www.drupal.org/node/1577752)

*Автори*

Написано [Ann Greazel](https://www.drupal.org/u/AnnGreazel) і
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
