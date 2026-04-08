---
title: "Основы: Стили изображений"
description: "Обзор стилей изображений и способов их использования для отображения одного изображения в разных вариантах."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "ru"
---
## Необходимые знания { #structure-image-styles }

[structure-fields](./structure-fields.md)
## Что такое стили изображений?

Стили изображений позволяют загрузить одно изображение и отображать его разными способами: каждый вариант отображения, или _стиль изображения_, формируется за счёт применения одного или нескольких _эффектов_ к исходному изображению.

Например, вы можете загрузить изображение с высоким разрешением (например, с соотношением сторон 4:3) и затем показывать его на сайте уменьшенным, обрезанным до квадрата, преобразованным в чёрно-белый вариант или с любым другим сочетанием эффектов. Ядро Drupal позволяет реализовать это эффективно:

1. Настройте стиль изображения с нужными эффектами на странице _Стили изображения_ (_admin/config/media/image-styles_).
1. При первом запросе изображения в определённом стиле к нему применяются эффекты.
1. Полученное (обработанное) изображение сохраняется.
1. При последующих запросах в этом же стиле возвращается уже готовое изображение, без повторного применения эффектов.

    В ядре Drupal есть несколько стандартных эффектов, которые можно использовать для создания стилей. Дополнительные эффекты могут предоставляться сторонними модулями.

    Посмотреть доступные стили изображений можно через административное меню _Управление_, выбрав _Конфигурация_ > _Медиа_ > _Стили изображения_ (_admin/config/media/image-styles_).
## Похожие темы

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Дополнительные ресурсы

[_Drupal.org_ страница документации сообщества "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Авторы*

Адаптировано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix) и
[Jojy Alphonso](https://www.drupal.org/u/jojyja) из
[Red Crackle](http://redcrackle.com), по материалам
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation)

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
