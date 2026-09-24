---
title: "Изменение формы ввода материала"
description: "Как изменить форму ввода содержимого."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "ru"
---
## Цель { #structure-form-editing }

Изменить форму для типа материала Рецепт, чтобы использовать другой виджет для выбора терминов в поле Ингредиенты.
## Необходимые знания

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Требования к сайту

Должен существовать тип материала Рецепт с полем Ингредиенты — ссылка на термин таксономии. Также должен быть создан хотя бы один материал типа Производитель. См. [structure-content-type](./structure-content-type.md) и [structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Шаги

1. В административном меню _Управление_ перейдите к _Содержимое_ > _Добавить материал_ > _Рецепт_ (_node/add/recipe_), чтобы посмотреть текущую форму ввода. Обратите внимание, что по умолчанию ингредиенты нужно добавлять по одному — более компактного ввода нет.
1. В административном меню _Управление_ перейдите к _Структура_ > _Типы материалов_ (_admin/structure/types_). Далее выберите _Управление отображением формы_ из выпадающего меню для типа материала Рецепт. Откроется страница _Управление отображением формы_.
1. Для поля Ингредиенты в колонке _Виджет_ выберите _Автодополнение (в стиле тегов)_.
    <img src="/images/structure-form-editing-manage-form.webp" alt="Управление формой Рецепта" width="100%" />
1. Нажмите _Сохранить_.
1. В административном меню _Управление_ перейдите к _Содержимое_ > _Добавить материал_ > _Рецепт_ (_node/add/recipe_), чтобы проверить обновлённую форму. Теперь поле Ингредиенты — это единое текстовое поле, куда можно ввести несколько значений.
    <img src="/images/structure-form-editing-add-recipe.webp" alt="Добавить рецепт" width="100%" />
1. Создайте два материала типа Рецепт (см. [content-create](./content-create.md)), например "Зелёный салат" и "Свежая морковь". Убедитесь, что все поля заполнены: изображения, ингредиенты, а также поле "Предоставлено" (укажите одного из производителей, созданных в [structure-fields](./structure-fields.md)).
## Узнать больше

Изменить основную контактную форму сайта можно по пути _Структура_ > _Контактные формы_ в меню _Управление_. Например, вы можете скрыть поля _Отправить себе копию_ или _Язык_.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Changing Content Entry Forms" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано [Boris Doesborg](https://www.drupal.org/u/batigolix).

Перевод: [Валерий Толмачёв](https://www.drupal.org/u/valeriytolmachov).
