---
title: "Добавление типа контента"
description: "Как добавить и настроить новый тип контента."
id: "structure-content-type"
translation_key: "structure-content-type"
source_locale: "ru"
---
## Цель { #structure-content-type }

Добавить и настроить новый тип контента "Производитель".
## Необходимые знания

[planning-data-types](./planning-data-types.md)
## Требования к сайту

Вам необходимо иметь план структуры контента. См. [planning-structure](./planning-structure.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Структура_ > _Типы контента_
    (_admin/structure/types_). Откроется страница _Типы контента_,
    отображающая все доступные типы содержимого. Обратите внимание, что имена и описания
    типов контента, которые были добавлены вашим профилем установки, отображаются на этой странице на
    английском языке; см. [language-concept](./language-concept.md) для объяснения.
1. Нажмите _Добавить тип контента_. Откроется страница _Добавить тип контента_. Заполните поля как указано ниже.
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
          <td>Имя</td>
          <td>Имя типа контента</td>
          <td>Производитель</td>
        </tr>
        <tr>
          <td>Описание</td>
          <td>Объяснение для чего используется этот тип</td>
          <td>Информация о производителе</td>
        </tr>
      </tbody>
    </table>

    ![Добавление типа контента](/images/structure-content-type-add.webp)

1. В разделе _Настройки формы отправки_ настройте форму, которая
    используется для создания и редактирования контента этого типа. Заполните поля как указано ниже.
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
          <td>Метка поля заголовка</td>
          <td>Метка поля "Заголовок", отображаемая при создании или редактировании</td>
          <td>Имя производителя</td>
        </tr>
        <tr>
          <td>Предпросмотр перед отправкой</td>
          <td>Нужно ли предварительно просматривать содержимое перед отправкой</td>
          <td>Необязательно</td>
        </tr>
        <tr>
          <td>Пояснение или инструкция по заполнению</td>
          <td>Инструкция по созданию или редактированию</td>
          <td>(Оставьте пустым)</td>
        </tr>
      </tbody>
    </table>

    ![Настройки формы отправки](/images/structure-content-type-add-submission-form-settings.webp)

1. В разделе _Опции публикации_ выберите параметры по умолчанию для нового
    контента этого типа. Заполните поля как указано ниже.
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
          <td>Опубликовано</td>
          <td>Контент публикуется по умолчанию</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>Продвигать на главную</td>
          <td>На стандартном сайте можно показывать на главной</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Закрепить вверху списков</td>
          <td>Можно закрепить в начале списка</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Создавать новую редакцию</td>
          <td>Создавать новую редакцию при каждом редактировании</td>
          <td>Отмечено</td>
        </tr>
      </tbody>
    </table>

    Изменение этих настроек не влияет на уже созданные элементы.
    ![Опции публикации](/images/structure-content-type-add-Publishing-Options.webp)

1. В разделе _Настройки отображения_ решите, будет ли отображаться имя автора и дата публикации.
    Заполните поля как указано ниже.
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
          <td>Показывать автора и дату публикации</td>
          <td>Показывать имя автора и дату на каждой странице производителя</td>
          <td>Не отмечено</td>
        </tr>
      </tbody>
    </table>

    ![Настройки отображения](/images/structure-content-type-add-Display-settings.webp)

1. В разделе _Настройки меню_ заполните поля как указано ниже.
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
          <td>Доступные меню</td>
          <td>Меню, в которые можно добавить этот тип контента. Производителей не нужно добавлять в меню, поэтому снимите все флажки.</td>
          <td>Не отмечено</td>
        </tr>
      </tbody>
    </table>

    ![Настройки меню](/images/structure-content-type-add-Menu-settings.webp)

1. Нажмите _Сохранить и управлять полями_, чтобы сохранить тип контента. Откроется страница _Управление полями_, позволяющая добавить поля к типу контента. См. [structure-fields](./structure-fields.md)
    <img src="/images/structure-content-type-add-confirmation.webp" alt="Подтверждение" width="100%" />
1. Повторите те же шаги, чтобы создать тип контента для рецептов. Пример значений для полей, если отличаются:
    <table>
      <thead>
        <tr>
          <th>Имя поля</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Имя</td>
          <td>Рецепт</td>
        </tr>
        <tr>
          <td>Описание</td>
          <td>Рецепт, отправленный производителем</td>
        </tr>
        <tr>
          <td>Настройки формы отправки – Заголовок</td>
          <td>Имя рецепта</td>
        </tr>
      </tbody>
    </table>
## Расширьте своё понимание

* [structure-fields](./structure-fields.md)
* Установите и настройте [дополнительный модуль Pathauto](https://www.drupal.org/project/pathauto), чтобы элементы контента автоматически получали URL-алиасы. См. [content-paths](./content-paths.md) для информации об адресах внутри сайта, [extend-module-find](./extend-module-find.md) для поиска дополнительных модулей, и [extend-module-install](./extend-module-install.md) для загрузки и установки модулей.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vyvqiaaGM1k" title="Adding a Content Type" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Sree Veturi](https://www.drupal.org/u/sree),
[Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Перевод: [Игорь Шабальников](https://www.drupal.org/u/igorsh).
