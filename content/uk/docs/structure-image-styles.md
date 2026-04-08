---
title: "Основи: Стилі зображень"
description: "Огляд стилів зображеннь і як вони використовуються для відображення одного зображення в декількох варіантах."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "uk"
---
## Необхідні знання { #structure-image-styles }

[structure-fields](./structure-fields.md)
## Що таке стилі зображення?

Стилі зображень дозволяють завантажувати одне зображення, але відображати його декількома способами;
кожен варіант відображення, або _стиль зображення_, є результатом застосування одного або декількох
_ефектів_ до вихідного зображення.

Наприклад, Ви можете завантажити зображення з високою роздільною здатністю з співвідношенням сторін 4:3,
і відобразити його зменшеним, квадратним або чорно-білим (або з будь-яким
іншим поєднанням кольорів). Drupal робить це
ефективно:

1. Налаштуйте стиль зображення з необхідними ефектами на сторінці _Стилі зображень_
    (_admin/config/media/image-styles_).
1. Ефекти будуть застосовані при першому запиті певної картинки в
    цьому стилі зображення.
1. Отримане зображення зберігається.
1. При наступному запиті того ж стилю збережене зображення буде відновлено
    без необхідності вираховувати ефекти.

    Ядро Drupal надає кілька ефектів, які ви можете використовувати для визначення стилів;
    інші можуть бути надані модулями.

    Відвідайте сторінку _Стилі зображень_ через _Керування_ адміністративного меню, перейдіть в
    _Конфігурація_ > _Медіа_ > _Стилі зображень_ (_admin/config/media/image-styles_),
    щоб побачити стилі зображеннь, які визначені за замовчуванням.
## Схожі теми

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Додаткові ресурси

[_Drupal.org_ сторінка документації спільноти "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Автори*

Адаптовано і змінено [Boris Doesborg](https://www.drupal.org/u/batigolix),
і [Jojy Alphonso](https://www.drupal.org/u/jojyja) в
[Red Crackle](http://redcrackle.com), з
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
авторські права 2000-2026 за окремими учасниками
[Drupal Community Documentation](https://www.drupal.org/documentation)

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
