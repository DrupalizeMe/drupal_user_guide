---
title: "Основи: Адаптивні Стилі зображень"
description: "Огляд адаптивних стилів зображення, які дозволяють вам виводити різні зображення для різних розмірів екрану."
id: "structure-image-responsive"
translation_key: "structure-image-responsive"
source_locale: "uk"
---
## Необхідні знання { #structure-image-responsive }

* [understanding-themes](./understanding-themes.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Що таке адаптивні стилі зображення?

Модуль ядра Drupal Responsive Image надає стилі адаптивного зображення. Це дозволяє
виводити зображення на вашому сайті, які підлаштовуються під різні
розміри екрану. Це корисно, наприклад, для прискорення завантаження вашого сайту на
мобільних пристроях, тому що розміри зображень оптимізовані для маленьких екранів.

Адаптивний стиль зображення - це відображення стилю зображення яке залежить від точки переходу.
Точки переходу - це точки, де адаптивний дизайн повинен змінюватися і
реагуючи на екрани різних розмірів. Адаптивні стилі зображень можуть працювати
з точками переходу, визначеними у вашій темі, або з точками переходу, визначеними в
налаштуваннях стилів адаптивного зображення.

Коли стиль адаптивного зображення визначено, його можна використовувати в налаштуваннях відображення
для полів зображення. Це дозволяє сайту відображати адаптивні зображення, використовуючи
HTML5 _picture_ тег або використовуючи атрибути _srcset_ і _sizes_ в тезі _img_,
в залежності від того, як налаштований стиль адаптивного зображення.
## Схожі теми

[structure-fields](./structure-fields.md)
## Додаткові ресурси

* [_Drupal.org_ сторінка документації спільноти "Responsive web design"](https://www.drupal.org/docs/mobile-guide/responsive-web-design)
* [_Drupal.org_ сторінка документації спільноти "Responsive images"](https://www.drupal.org/docs/mobile-guide/responsive-images)
* [_Drupal.org_ сторінка документації спільноти "Working with breakpoints in Drupal"](https://www.drupal.org/docs/theming-drupal/working-with-breakpoints-in-drupal)
* [Пост в блозі "Responsive Images in Drupal 8 using 'srcset'"](https://chromatichq.com/blog/responsive-images-drupal-8-using-srcset)

*Автори*

Адаптовано [Boris Doesborg](https://www.drupal.org/u/batigolix) з
[Responsive images](https://www.drupal.org/docs/mobile-guide/responsive-images),
авторські права 2000-2026 за окремими вкладниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переклав [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із [Mazaltov](https://drupal.org/mazaltov).
