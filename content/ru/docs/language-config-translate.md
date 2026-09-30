---
title: "Перевод конфигурации"
description: "Как переводить подписи полей в представлении, а также другие элементы конфигурации."
id: "language-config-translate"
translation_key: "language-config-translate"
source_locale: "ru"
---
## Цель { #language-config-translate }

Перевести подписи (метки) в представлении "Рецепты" на испанский язык.
## Необходимые знания

* [language-concept](./language-concept.md)
* [views-create](./views-create.md)
## Требования к сайту

* Установлен модуль ядра Configuration Translation, и на сайте добавлено как минимум два языка. См. [language-add](./language-add.md).
* Создано представление "Рецепты". См. [views-create](./views-create.md) и [views-duplicate](./views-duplicate.md).
## Шаги

Базовые шаги для перевода любой конфигурации на сайте:

1. В административном меню _Управление_ перейдите в _Конфигурация_ > _Регион и язык_ > _Перевод конфигурации_ (_admin/config/regional/config-translation_).
1. Найдите нужный элемент конфигурации, который требуется перевести. Например, для перевода имени сайта — ищите _Системная информация_. Для элементов, сгруппированных по типу (например, представления или форматы дат), нажмите кнопку _Список_ (или _List_) для просмотра всех элементов этого типа и выберите нужный.
1. Нажмите _Перевести_ рядом с выбранным элементом.
1. Найдите кнопку, позволяющую добавить перевод на нужный язык, и нажмите её.
1. Заполните поля перевода и сохраните изменения.

    Обычно перевод конфигурации происходит интуитивно. Однако для представлений (Views) форма перевода гораздо сложнее, чем обычная форма редактирования — она иерархична и содержит множество полей.

    **Пример: перевод подписей в представлении "Рецепты" на испанский:**

1. В меню _Управление_ откройте _Конфигурация_ > _Регион и язык_ > _Перевод конфигурации_.
1. В строке _Views_ нажмите _Список_.
1. Найдите представление "Recipes" и нажмите _Перевести_.
1. В строке _Spanish_ нажмите _Добавить_. Откроется страница "Добавить испанский перевод для представления Recipes".
1. В разделе _Отображения_ > _Default Display settings_ > _Recipes default display options_ переведите _Display title_ с "Recipes" на "Recetas".
1. В _Default display settings_ > _Exposed form_ > _Reset options_ переведите _Submit button text_ с "Apply" на "Aplicar". Другие кнопки в этом разделе можно не трогать, если они не отображаются на вашей странице.
1. В _Default display settings_ > _Filters_ > _(Empty) taxonomy term ID_ > _Find recipes using... Expose_ переведите _Label_ с "Find recipes using..." на "Encontrar recetas usando...".
1. Нажмите _Сохранить перевод_.
1. Перейдите на страницу "Recipes", переключитесь на испанский язык через блок переключения языка и проверьте, что подписи переведены.
## Расширьте своё понимание

* Переведите название блока в разделе Recent recipes в настройках представления Recipes.
* Переведите заголовок страницы в представлении Vendors.
* Переведите другие элементы конфигурации. Примеры, где искать перевод:

** Имя сайта: _Конфигурация_ > _Система_ > _Основные настройки сайта_ > _Перевод информации о системе_ (_admin/config/system/site-information/translate_).
** Контактная форма: _Структура_ > _Контактные формы_ (_admin/structure/contact_), нажмите _Перевод_ рядом с нужной формой.
** Имя меню: _Структура_ > _Меню_ (_admin/structure/menu_), _Перевод_ для нужного меню.
** Ссылки в меню считаются контентом, не конфигурацией; для их перевода см. [language-content-config](./language-content-config.md). После включения перевода ссылок используйте кнопку _Редактировать меню_ и далее _Перевод_ рядом с нужной ссылкой.
** Подписи полей в типах материала: _Структура_ > _Типы материалов_ (_admin/structure/types_), _Управление полями_ для нужного типа материала, затем _Перевод_ для нужного поля.

* Для перевода материалов см. [language-content-translate](./language-content-translate.md).
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/j2GZdJIOo_I" title="Translating Configuration" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Абраменко Иван](https://www.drupal.org/u/levmyshkin) из [DrupalBook](https://drupalbook.org/ru).
