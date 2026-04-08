---
title: "Основы: Адаптивные стили изображений"
description: "Обзор адаптивных стилей изображений, которые позволяют использовать разные изображения для разных размеров экрана."
id: "structure-image-responsive"
translation_key: "structure-image-responsive"
source_locale: "ru"
---
## Необходимые знания { #structure-image-responsive }

* [understanding-themes](./understanding-themes.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Что такое адаптивные стили изображений?

Модуль ядра Drupal Responsive Image предоставляет возможность использовать адаптивные стили изображений. Это позволяет вашему сайту подставлять изображения оптимального размера для разных устройств и размеров экранов. Такой подход помогает ускорить загрузку сайта на мобильных устройствах, поскольку изображения подгружаются с меньшим разрешением для маленьких экранов.

Адаптивный стиль изображения — это сопоставление между стилями изображений и точками перехода (breakpoints). Точки перехода — это значения ширины экрана, при достижении которых дизайн сайта или параметры изображений должны меняться для адаптации под новое устройство. Адаптивные стили изображений могут работать с точками перехода, определёнными в вашей теме, или с точками перехода, заданными в настройках самого стиля.

Когда адаптивный стиль изображения создан, его можно выбрать в настройках отображения для полей изображений. Благодаря этому сайт будет выводить адаптивные изображения с помощью HTML5 тега _picture_ или с помощью атрибутов _srcset_ и _sizes_ в теге _img_, в зависимости от вашей конфигурации.
## Похожие темы

[structure-fields](./structure-fields.md)
## Дополнительные ресурсы

* [_Drupal.org_ страница "Responsive web design"](https://www.drupal.org/docs/mobile-guide/responsive-web-design)
* [_Drupal.org_ страница "Responsive images"](https://www.drupal.org/docs/mobile-guide/responsive-images)
* [_Drupal.org_ страница "Working with breakpoints in Drupal"](https://www.drupal.org/docs/theming-drupal/working-with-breakpoints-in-drupal)
* [Пост в блоге "Responsive Images in Drupal 8 using 'srcset'"](https://chromatichq.com/blog/responsive-images-drupal-8-using-srcset)

*Авторы*

Адаптировано [Boris Doesborg](https://www.drupal.org/u/batigolix) из
[Responsive images](https://www.drupal.org/docs/mobile-guide/responsive-images),
авторские права 2000-2026 за отдельными участниками
[Drupal Community Documentation](https://www.drupal.org/documentation).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
