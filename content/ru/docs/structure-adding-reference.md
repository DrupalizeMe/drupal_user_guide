---
title: "Добавление поля ссылки на сущность"
description: "Как добавить поле ссылки, которое соединяет два типа контента."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "ru"
---
## Цель { #structure-adding-reference }

Добавить поле ссылки, чтобы рецепты можно было связать с производителем, который их предоставил.
## Необходимые знания

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Требования к сайту

Типы контента Рецепт и Производитель должны существовать. См. [structure-content-type](./structure-content-type.md).
## Шаги

1. В _Управлении_ административного меню перейдите в _Структура_ > _Типы контента_ (_admin/structure/types_). Затем нажмите _Управление полями_ в выпадающем списке для типа контента Рецепт. Откроется страница _Управление полями_.
1. Нажмите _Создать новое поле_. Откроется страница _Добавить поле_. Выберите тип поля _Ссылка_ из вариантов _Выберите тип поля_. Нажмите _Продолжить_. Откроется страница _Добавить поле_ с формой для настройки метки поля.
    ![Добавление поля ссылки на тип контента](/images/structure-adding-reference-add-field.webp)
1. Заполните поля, как показано ниже. Нажмите _Сохранить и продолжить_.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Метка</td>
          <td>Название поля</td>
          <td>Предоставлено</td>
        </tr>
        <tr>
          <td>Выберите вариант ниже:</td>
          <td>Тип сущности для связи</td>
          <td>Контент</td>
        </tr>
      </tbody>
    </table>

    ![Добавление поля ссылки на тип контента](/images/structure-adding-reference-add-field-label.webp)

1. Откроется страница Предоставлено, где можно указать допустимое количество значений. Заполните поля, как показано ниже. Нажмите _Сохранить настройки_.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тип сущности для ссылки</td>
          <td>Вариант для выбора типа сущности</td>
          <td>Контент</td>
        </tr>
        <tr>
          <td>Допустимое количество значений</td>
          <td>Количество значений для поля</td>
          <td>Ограничено, 1</td>
        </tr>
      </tbody>
    </table>

    ![Настройка хранилища для поля ссылки](/images/structure-adding-reference-set-field-basic.webp)

1. Откроется страница _Настройки поля Предоставлено для Рецепта_, позволяющая настроить поле. Заполните поля, как показано ниже. Нажмите _Сохранить настройки_.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Метка</td>
          <td>Название, отображаемое для этого поля на странице</td>
          <td>Предоставлено</td>
        </tr>
        <tr>
          <td>Текст подсказки</td>
          <td>Краткий текст для помощи при создании контента</td>
          <td>Выберите производителя, который предоставил этот рецепт</td>
        </tr>
        <tr>
          <td>Обязательное поле</td>
          <td>Нужно ли обязательно указывать значение</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>Тип ссылки > Метод ссылки</td>
          <td>Способ выбора значения</td>
          <td>По умолчанию</td>
        </tr>
        <tr>
          <td>Тип ссылки > Тип контента</td>
          <td>Тип связанного контента</td>
          <td>Производитель</td>
        </tr>
        <tr>
          <td>Тип ссылки > Сортировать по</td>
          <td>Поле для сортировки</td>
          <td>Имя производителя</td>
        </tr>
        <tr>
          <td>Тип ссылки > Направление сортировки</td>
          <td>Порядок сортировки</td>
          <td>По возрастанию</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.webp" alt="Настройки для поля ссылки" width="100%" />

1. Поле Предоставлено было добавлено к типу контента.
    <img src="/images/structure-adding-reference-manage-fields.webp" alt="Страница управления полями для типа контента Рецепт" width="100%" />

## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hAhWiqPlKh0" title="Adding a Reference Field" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix),
и [Jojy Alphonso](https://www.drupal.org/u/jojyja) на
[Red Crackle](http://redcrackle.com).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
