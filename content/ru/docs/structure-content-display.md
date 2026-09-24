---
title: "Изменение отображения содержимого"
description: "Как сделать элементы содержимого более презентабельными."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "ru"
---
## Цель { #structure-content-display }

Сделать элементы содержимого более удобочитаемыми, доступными и визуально привлекательными,
изменяя порядок полей, скрывая метки и настраивая вывод полей.
## Необходимые знания

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Требования к сайту

Должен существовать тип контента "Производитель", в нем должны быть поля Главное изображение и URL производителя,
а также на сайте должен быть создан хотя бы один элемент этого типа. См.
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) и [content-create](./content-create.md).
## Шаги

1. Найдите и откройте элемент типа Производитель, который вы создавали в [structure-fields](./structure-fields.md).
    Обратите внимание, что есть несколько моментов, которые можно улучшить в отображении страницы:
    * Для полей Главное изображение и URL производителя не нужны метки.
    * Следует изменить порядок полей, чтобы изображение было первым.
    * Изображение должно быть меньше.
1. Чтобы исправить первые две проблемы и обновить некоторые дополнительные настройки,
    в меню _Управление_ перейдите в _Структура_ > _Типы контента_ (_admin/structure/types_).
    Затем в выпадающем списке для типа контента Производитель выберите _Управление отображением_.
    <img src="/images/structure-content-display_manage_display.webp" alt="Управление отображением" width="100%" />
1. В колонке _Метка_ выберите _Скрыто_ для Главного изображения. То же самое сделайте для поля URL производителя.
    <img src="/images/structure-content-display_main_image_hidden.webp" alt="Выбор метки главного изображения как скрытой" width="100%" />
1. Нажмите на значок шестерёнки для поля URL производителя, чтобы открыть его параметры.
1. Заполните поля, как показано ниже.
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Объяснение</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Обрезать длину текста ссылки</td>
          <td>Максимальная длина текста ссылки</td>
          <td>Пусто (не обрезать)</td>
        </tr>
        <tr>
          <td>Открывать ссылку в новом окне</td>
          <td>Должны ли ссылки открываться в новом окне или в текущем</td>
          <td>Отмечено</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.webp" alt="Обрезка длины ссылки" width="100%" />

1. Нажмите _Обновить_.
1. Перетащите поля так, чтобы порядок был: Главное изображение, _Body_, URL производителя, _Ссылки_.
    Вместо перетаскивания можно воспользоваться ссылкой _Показать веса строк_ в начале таблицы и
    ввести числовые значения веса (поля с меньшими или более отрицательными весами отображаются первыми).
    <img src="/images/structure-content-display_change_order.webp" alt="Изменение порядка полей" width="100%" />
1. Нажмите _Сохранить_.
1. Снова найдите элемент Производитель из первого шага и убедитесь, что изменения применены.
1. Повторите похожие шаги для управления отображением полей типа контента Рецепт.
## Расширьте своё понимание

* Сделайте главное изображение меньше. См. [structure-image-style-create](./structure-image-style-create.md).
* Если вы не видите результат изменений на сайте, попробуйте очистить кэш. См. [prevent-cache-clear](./prevent-cache-clear.md).
## Связанные понятия

[structure-image-styles](./structure-image-styles.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Changing Content Display" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные ресурсы

* [_Drupal.org_ страница документации сообщества "Specify how fields are displayed"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/specify-how-fields-are-displayed)
* [_Drupal.org_ страница документации сообщества "Rearrange the order of fields"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/rearrange-the-order-of-fields)
* [_Drupal.org_ страница документации сообщества "View modes"](https://www.drupal.org/node/1577752)

*Авторы*

Написано [Ann Greazel](https://www.drupal.org/u/AnnGreazel) и
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Переведено [Валерий Толмачёв](https://www.drupal.org/u/valeriytolmachov).
