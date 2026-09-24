---
title: "Настройка таксономии"
description: "Как создать словарь таксономии и добавить его в качестве поля к типу материала."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "ru"
---
## Цель { #structure-taxonomy-setup }

Создать словарь Ингредиенты и добавить его в тип материала Рецепт как поле, позволяющее вводить неограниченное количество значений и создавать новые термины прямо из формы.
## Необходимые знания

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Требования к сайту

Тип материала Рецепт должен быть создан. См. [structure-content-type](./structure-content-type.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Структура_ > _Таксономия_ (_admin/structure/taxonomy_). Вы увидите словарь _Теги_, созданный при установке стандартного профиля. (Обратите внимание, что название и описание словаря отображаются на английском; см. [language-concept](./language-concept.md).)
    <img src="/images/structure-taxonomy-setup-taxonomy-page.webp" alt="Страница таксономии" width="100%" />
1. Нажмите _Добавить словарь_ и заполните поля:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Объяснение</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Название</td>
          <td>Название словаря</td>
          <td>Ингредиенты</td>
        </tr>
        <tr>
          <td>Описание</td>
          <td>Краткое описание словаря</td>
          <td>(оставить пустым)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="Добавление словаря Ингредиенты" width="100%" />

1. Нажмите _Сохранить_. Откроется страница Ингредиенты с перечнем терминов в этом словаре.
    <img src="/images/structure-taxonomy-setup-vocabulary-overview.webp" alt="Список терминов таксономии Ингредиенты" width="100%" />
1. Нажмите _Добавить термин_. В поле _Название_ введите «Масло». Нажмите _Сохранить_.
    <img src="/images/structure-taxonomy-setup-add-term.webp" alt="Страница добавления термина" width="100%" />
1. Появится подтверждение о создании термина. Добавьте еще несколько терминов — например, «Яйца» и «Молоко».
1. В административном меню _Управление_ перейдите в _Структура_ > _Типы материалов_ (_admin/structure/types_). Для типа материала Рецепт нажмите _Управление полями_.
1. Нажмите _Добавить поле_. В открывшемся окне выберите тип поля _Ссылка_ и подтип _Термин таксономии_. Нажмите _Сохранить и продолжить_.
    ![Добавление поля Ингредиенты к типу материала Рецепт](/images/structure-taxonomy-setup-add-field.webp)
1. Заполните поля:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Объяснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Метка</td>
          <td>Название поля</td>
          <td>Ингредиенты</td>
        </tr>
      </tbody>
    </table>

    ![Настройки поля Ингредиенты](/images/structure-taxonomy-setup-add-field-label.webp)

1. На следующем экране настройки задайте параметры:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Объяснение</th>
          <th>Значение</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Тип элемента для ссылки</td>
          <td>Тип сущности, на которую ссылается поле</td>
          <td>Термин таксономии</td>
        </tr>
        <tr>
          <td>Допустимое количество значений</td>
          <td>Сколько значений может быть указано</td>
          <td>Неограниченно</td>
        </tr>
      </tbody>
    </table>

    ![Настройки поля для Ингредиентов](/images/structure-taxonomy-setup-field-settings.webp)

1. На следующем экране задайте:
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
          <td>Справочный текст</td>
          <td>Справка, показанная пользователям, создающим контент</td>
          <td>Введите ингредиенты, которые посетители сайта могут искать</td>
        </tr>
        <tr>
          <td>Тип связи > Тип ссылки</td>
          <td>Выберите метод, используемый для выбора допустимых значений</td>
          <td>По умолчанию</td>
        </tr>
        <tr>
          <td>Тип связи > Словарь</td>
          <td>Выберите словарь, чтобы выбрать из него допустимые значения</td>
          <td>Ингредиенты</td>
        </tr>
        <tr>
          <td>Тип связи > Создать сущности по ссылке, если они еще не созданы</td>
          <td>Можно ли создавать новые термины для ингредиентов из формы редактирования контента</td>
          <td>Выбрано</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.webp" alt="Настройки поля ссылки" width="100%" />

1. Нажмите _Сохранить настройки_. Вы вернетесь на страницу _Управление полями_. Появится сообщение, что настройка поля Ингредиенты завершена.
    <img src="/images/structure-taxonomy-setup-finished.webp" alt="Страница управления полями для типа материала Рецепт" width="100%" />

## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Setting up a Taxonomy" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Основано на тексте [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass) и [Jojy Alphonso](https://www.drupal.org/u/jojyja) с [Red Crackle](http://redcrackle.com).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
