---
title: "Настройка перевода содержимого"
description: "Как сделать материалы, пользовательские блоки и ссылки меню переводимыми."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "ru"
---
## Цель { #language-content-config }

Сделать типы сущностей _Пользовательский блок_, _Пользовательская ссылка меню_ и _Содержимое_ переводимыми. Отметить нужные подтипы и выбрать поля, доступные для перевода.
## Необходимые знания

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Требования к сайту

Модуль ядра Content Translation должен быть установлен, и на сайте должно быть как минимум два языка. См. [language-add](./language-add.md).
## Шаги

1. В административном меню _Управление_ перейдите в _Конфигурация_ > _Регион и язык_ > _Язык содержимого и перевод_ (_admin/config/regional/content-language_).
1. В разделе _Пользовательские языковые настройки_ отметьте _Содержимое_, _Пользовательский блок_ и _Пользовательская ссылка меню_, чтобы сделать эти типы сущностей переводимыми.
    <img src="/images/language-content-config_custom.png" alt="Чеклист пользовательских языковых настроек" width="193px" />
1. Появятся параметры конфигурации для _Содержимого_, _Пользовательского блока_ и _Пользовательской ссылки меню_. Выберите нужные подтипы для перевода. Например, отметьте _Basic page_ для _Содержимого_, _Basic block_ для _Пользовательского блока_ и _Custom menu link_ для _Пользовательской ссылки меню_.
1. Проверьте параметры для каждого подтипа сущности:
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Язык по умолчанию</td>
          <td>Язык по умолчанию для данного подтипа сущности</td>
          <td>Язык сайта по умолчанию (например, русский)</td>
        </tr>
        <tr>
          <td>Показывать выбор языка на страницах создания и редактирования</td>
          <td>Отображать ли переключатель языка при создании/редактировании</td>
          <td>Отмечено</td>
        </tr>
      </tbody>
    </table>

    ![Язык по умолчанию и переводимость для типов сущностей](/images/language-content-config_content.png)

1. Отметьте поля, которые должны быть переводимыми для _Basic page_ (Простая страница), как указано ниже. Если поле не зависит от языка, оставьте его неотмеченным.
    <table>
      <thead>
        <tr>
          <th>Название поля</th>
          <th>Описание</th>
          <th>Пример значения</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Заголовок</td>
          <td>Заголовок содержимого</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>Автор</td>
          <td>Автор материала</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Опубликовано</td>
          <td>Статус публикации</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>Дата создания</td>
          <td>Дата публикации</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Дата изменения</td>
          <td>Дата последнего изменения</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Продвижение на главную</td>
          <td>Включение в отдельные представления</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Закреплять вверху списков</td>
          <td>Приоритет в выводе материалов</td>
          <td>Не отмечено</td>
        </tr>
        <tr>
          <td>Синоним URL</td>
          <td>ЧПУ для содержимого</td>
          <td>Отмечено</td>
        </tr>
        <tr>
          <td>Основной текст</td>
          <td>Основной контент страницы</td>
          <td>Отмечено</td>
        </tr>
      </tbody>
    </table>

    ![Чеклист переводимых полей для подтипов сущностей](/images/language-content-config_basic_page.png)

1. Аналогичным образом отметьте переводимые поля для _Basic block_ и _Custom menu link_.
1. Нажмите _Сохранить конфигурацию_.
## Расширьте своё понимание

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Configuring Content Translation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные ресурсы

* [Блог "Multilingual Drupal 8 tidbits, part 5"](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [Блог "Multilingual Drupal 8 tidbits, part 17"](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*Авторы*

Написано и отредактировано [Laura Vass](https://www.drupal.org/u/lolk) (Pronovix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) (Red Crackle),
и [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
