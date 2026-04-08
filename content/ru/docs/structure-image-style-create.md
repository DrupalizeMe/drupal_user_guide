---
title: "Настройка стиля изображения"
description: "Как добавить стиль изображения, чтобы переформатировать изображение."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "ru"
---
## Цель { #structure-image-style-create }

Добавить стиль изображения и использовать его для отображения изображений на страницах Производителя.
## Необходимые знания

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Требования к сайту

* Типы материалов Производитель и Рецепт должны существовать. См. [structure-content-type](./structure-content-type.md).
* Основные поля изображений должны существовать для обоих типов материалов. См. [structure-fields](./structure-fields.md).
* Должны быть созданы материалы обоих типов. См.
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md), и [content-create](./content-create.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Конфигурация_ > _Медиа_ > _Стили изображений_ (_admin/config/media/image-styles_).
1. Нажмите _Добавить стиль изображения_.
1. Введите название стиля: _Extra medium (300x200)_.
1. Нажмите _Создать новый стиль_. Откроется страница _Редактировать стиль Extra medium (300x200)_.
1. В таблице _Эффекты_, выберите _Масштабировать и обрезать_ (_Scale and crop_). Нажмите _Добавить_.
1. Заполните поля следующим образом:
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Ширина</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Высота</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Нажмите _Добавить эффект_. Стиль изображения будет сохранён с добавленным эффектом.
    <img src="/images/structure-image-style-create-add-style.png" alt="Добавить стиль изображения" width="100%" />
1. В административном меню _Управление_ перейдите в _Структура_ > _Типы материалов_ (_admin/structure/types_).
1. В выпадающем меню _Операции_ для типа материала Производитель выберите _Управление отображением_. Откроется страница _Управление отображением_ (_admin/structure/types/manage/vendor/display_).
1. Убедитесь, что выбрана вкладка _По умолчанию_ (_Default_).
1. Нажмите на значок шестерёнки для поля _Главное изображение_, чтобы открыть настройки поля.
1. Заполните поля следующим образом:
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Описание</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Стиль изображения</td>
          <td>Какой стиль использовать</td>
          <td>Extra medium (300x200)</td>
        </tr>
        <tr>
          <td>Связать изображение с</td>
          <td>Куда вести при клике</td>
          <td>Ничего</td>
        </tr>
      </tbody>
    </table>

    ![Настройки форматирования поля изображения](/images/structure-image-style-create-manage-display.png)

1. Нажмите _Обновить_.
1. Нажмите _Сохранить_. Новый стиль изображения будет использоваться для отображения материалов типа Производитель.
1. Откройте материал Производитель и убедитесь, что изображение отображается уменьшенным. См. [content-edit](./content-edit.md) для поиска нужного материала.
1. Повторите шаги 8-15 для типа материала Рецепт.
## Связанные понятия

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Setting up an Image Style" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные ресурсы

[_Drupal.org_ страница документации сообщества "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Авторы*

Адаптировано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com), по материалам
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
авторские права 2000-2026 за отдельными вкладчиками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
