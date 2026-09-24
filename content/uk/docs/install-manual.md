---
title: "Завантаження Drupal вручну"
description: "Як завантажити ядро Drupal або дистрибутив з веб-сайту."
id: "install-manual"
translation_key: "install-manual"
source_locale: "uk"
---
## Мета { #install-manual }

Завантажити ядро Drupal або дистрибутив вручну. Пропустіть цю тему якщо ви
використовуєте інший метод завантаження.
## Необхідні знання

* [understanding-distributions](./understanding-distributions.md)
* [install-decide](./install-decide.md)
## Кроки

1. Зайдіть на _https://www.drupal.org_ і перейдіть до _Build_ > _Download & Extend_
    в верхньому меню.
    <img src="/images/install-prepare-downloads.webp" alt="Сторінка завантаження _Drupal.org_" width="100%" />
1. Якщо ви хочете просто завантажити Drupal ядро, натисніть на _Download Drupal
    zip_ або _download tar.gz_ посилання, а потім збережіть його на вашому комп'ютері.
1. Якщо ви хочете скачати дистрибутив, натисніть на _Distributions_ іконку або
    посилання, виберіть дистрибутив зі списку, перейдіть на сторінку проекту,
    і натисніть на посилання завантаження zip або tar.gz файлу на ваш комп'ютер. Посилання
    виглядає так:
    ![Пошук URL для завантаження](/images/extend-module-install-download.webp)
1. Завантажте скачаний дистрибутив на ваш хостинг. Увійдіть в управління
    панеллю і перейдіть в _HTML_ директорію. Збережіть файл тут.
1. Розпакуйте tar.gz або zip файл, який створить нову директорію. Якщо у вас
    немає доступу до терміналу або ваш сервер хостингу не працює на Linux, ваш
    файловий менеджер панелі управління хостингом повинен надати спосіб розархівації
    файлів. Якщо у вас є термінальний доступ до вашого хостинг-сервера (працює на Linux), ви
    можете використовувати команду як:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. Видаліть архівний файл на сервері, якщо тільки ваш метод розпакування
    його ще не видалив.
1. Переіменуйте директорію або змініть конфігурацію веб-хостингу так, щоб ім'я директорії
    відповідало директорії вашого веб-хостингу, яка налаштована для використання вашого сайту.
## Поліпшіть своє розуміння

Як тільки ви завантажили ядро ​​Drupal, ви можете встановити тимчасовий демонстраційний сайт
(Дивіться [install-decide](./install-decide.md)) запустивши таку команду з вашої кореневої
директорії ядра Drupal:

```text
php core/scripts/drupal quick-start standard
```

Демо сайт буде встановлений, і ваш веб браузер повинен відкрити вхід на
на новий сайт, який буде працювати тільки до тих пір, поки команда PHP активна. Щоб дізнатися
більше про цю функціональность, використовуйте команду:

```text
php core/scripts/drupal quick-start --help
```

*Автори*

Написано і відредаговано [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) із
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
і [Jojy Alphonso](https://www.drupal.org/u/jojyja) із
[Red Crackle](http://redcrackle.com).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
