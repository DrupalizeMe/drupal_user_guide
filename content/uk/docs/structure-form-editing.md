---
title: "Зміна форми додавання матеріалу"
description: "Як змінити форму додавання матеріалу."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "uk"
---
## Мета { #structure-form-editing }

Змінити форму для матеріалу Рецепт, щоб використовувати інший віджет при
введенні термінів таксономії в поле Інгредієнти.
## Необхідні знання

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Вимоги до сайту

Повинен існувати тип матеріалу Рецепт, який містить поле Інгредієнти як
посилання на термін таксономії. Див. [structure-content-type](./structure-content-type.md) і
[structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Кроки

1. У розділі _Керування_ адміністративного меню перейдіть до пункту
    _Вміст_ > _Додати вміст_ > _Рецепт_ (_node/add/recipe_), щоб відкрити
    форму введення вмісту з налаштуваннями за замовчуванням. Зверніть увагу, що
    інгредієнти необхідно вносити послідовно, немає можливості використовувати
    більш компактний формат.
1. У розділі _Керування_ адміністративного меню перейдіть до пункту
    _Структура_ > _Типи матеріалів_ (_admin/structure/types_). Потім виберіть
    _Керувати відображенням форми_ в випадаючому списку для типу матеріалу Рецепт.
    З'явиться сторінка _Керувати відображенням форми_.
1. Виберіть _Автодоповнення (Стиль теґів)_ для поля Інгредієнти в колонці
    _Віджет_.
    ![Управління формою Рецепту](/images/structure-form-editing-manage-form.png)
1. Натисніть _Зберегти_.
1. У розділі _Керування_ адміністративного меню перейдіть до пункту
    _Вміст_ > _Додати матеріал_ > _Рецепт_ (_node/add/recipe_), щоб
    перевірити нову поведінку форми введення вмісту. Тепер поле Інгредієнти
    допускає введення декількох значень, розташованих в один рядок.
    ![Додати Рецепт](/images/structure-form-editing-add-recipe.png)
1. Створіть два матеріала типу Рецепт (див. [content-create](./content-create.md)), наприклад
    "Зелений салат" і "Свіжа морква". Переконайтеся, що всі поля, включаючи зображення
    та інгредієнти, заповнені і збережені (зробіть це для одного з матеріалів
    Постачальник, створеного в [structure-fields](./structure-fields.md)).
## Дізнатися більше

Змініть контактну форму сайту за допомогою пункту _Структура_ > _Контактні форми_
в розділі _Керування_ адміністративного меню. Наприклад, можна приховати поля
_Відправити копію собі_ або _Мова_.
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Changing Content Entry Forms" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Автори*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
