---
title: "Ручне завантаження модулів і тем оформлення"
description: "Ручне завантаження модулів і тем оформлення"
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "uk"
---
[](){ #extend-manual-install }

[Role = "summary"]
Як вручну завантажити чи закачати модуль або тему.
## Мета

Ручне завантаження файлів модуля або теми і їх закачування на ваш сайт, якщо
сайт або Drush методи для установки або оновлення модуля або теми не
працюють, або якщо ви розміщуєте розроблений користувачем модуль або тему.
## Необхідні знання

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Вимоги до сайту

Для виконання завантаження вручну повинно бути виконано одну з наступних умов,
описаних в цьому розділі:

* Проблеми з правами доступу до файлів
* Проблеми з дозволом FTP
* Ви створили власний модуль/тему або отримали ці файли від когось
* Ви не могли успішно виконати інструкції в
[extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
[security-update-module](./security-update-module.md), або [security-update-theme](./security-update-theme.md)

Пропустіть цей розділ, якщо все вищесказане не відноситься до вас. Якщо ви використовуєте Composer
для управління файлами на вашому сайті, дотримуйтесь інструкцій з оновлення файлів в
[install-composer](./install-composer.md) замість цієї теми.
## Кроки

Якщо ви встановлюєте модуль або тему з _Drupal.org_, дотримуйтесь
інструкцій по установці, а потім інструкцій щодо завантаження/розпакування. якщо
ви створили модуль або тему, пропустіть крок завантаження. Замість цього створіть
архівний файл (який ви знаєте, як витягти на сервері) і продовжуйте
кроки по завантаженню/розпакуванню, використовуйте будь-який метод, що підходить для
створення архівного файлу.
### Завантаження файлів

1. Відкрийте сторінку проекту модуля або теми на drupal.org; наприклад, сторінка _admin toolbar_ (https://www.drupal.org/project/admin_toolbar).
1. Скрольте до розділу _Downloads_ внизу сторінки.
    ![Завантаження файлів модулів](/images/extend-manual-install-download.png)
1. Натисніть _tar.gz_ щоб завантажити файл на комп'ютер. Іншим способом, якщо у вас
    є доступ до командного рядка на вашому сервері (що працбє на Linux), ви можете скопіювати
    адресу посилання для _tar.gz_ файлу з вашого браузера і використовувати цю комануд
    для скачування файлу (з заміною потрібного URL):

    ```text
    wget https://ftp.drupal.org/files/projects/admin_toolbar-8.x-1.26.tar.gz
    ```
### Завантаження файлів на ваш сайт і їх розпакування

1. При додаванні нового модуля або теми, створіть підкаталог у вашій
    верхній _modules_ і _themes_ директорії (якщо вони ше не
    існують). Як правило, люди роблять _contrib_ підкаталог для додаткових модулів
    і тем, які завантажуються з _Drupal.org_, і _custom_ підкаталог для
    модулів і тем, які вони створили. Ваша директорія _modules_ може виглядати як
    це:
    ![Пропонована структура каталогів для модулів](/images/extend-manual-install-directories.png)
1. Якщо ви замінюєте існуючий модуль або тему на оновлену версію, переведіть
    сайт в режим обслуговування. Дивіться [extend-maintenance](./extend-maintenance.md).
1. Якщо ви замінюєте існуючий модуль або тему на оновлену версію, знайдіть
    і видаліть всі існуючі файли і каталоги для існуючого модуля
    або теми. Модулі зазвичай розташовані під директоріями верхнього рівня
    _modules_, і теми зазвичай розташовані під директоріями верхнього рівня
    _themes_.
1. Завантажте _.tar.gz_ файл (або будь-який інший архів, який ви створили) на ваш сайт.
    Помістіть його в те саме місце, з якого ви видалили директорію
    (При заміні існуючого модуля або теми) або відповідний підкаталог
    з _modules_ або _themes_ (якщо додається новий модуль або тема).
1. Розархівайте файли з _.tar.gz_ архіву (або будь-який інший
    створений архів), створіть підкаталог в тому ж місці, що і файл архіву.
    Якщо у вас немає доступу до терміналу, або ваш хостинг сервер не працює на
    Linux, ваш файловий менеджер панелі управління хостингом повинен давати можливість
    витягти файли. Якщо у вас є доступ до терміналу для вашого хостинг сервера
    (що працює на Linux) і ви використовуєте tar.gz файл, ви можете використовувати таку команду як:
    ```text
    tar -xzf admin_toolbar-8.x-1.17.tar.gz
    ```
1. Видаліть стислий файл з сервера, якщо ваш метод розпакування
    ще не видалив його.
1. Зверніться до [extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
    [security-update-module](./security-update-module.md), або [security-update-theme](./security-update-theme.md) для завершення
    установки або оновлення модуля або теми. Почніть з кроку після того, як
    автоматичне завантаження буде здійснене.
## Поліпшіть свої знання

* Якщо ви працюєте з декількома оточеннями (наприклад, сайт локальної розробки
і робочий сайт) вам доведеться повторити кроки в кожному оточенні, або
склонувати оточення. Дивіться [install-dev-making](./install-dev-making.md).
* Якщо ви додали нову тему, перейдіть в _Керування_ адміністративного меню в
_Оформленя_ (_admin/appearance_) і видаліть стару тему.
## Відео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Manually Downloading Module or Theme Files" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Додаткові матеріали

* [_Drupal.org_ сторінка документації спільноти "Updating modules"](https://www.drupal.org/docs/extending-drupal/updating-modules)
* [_Drupal.org_ сторінка документації спільноти "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* [_Drupal.org_ сторінка документації спільноти "Installing themes"](https://www.drupal.org/docs/extending-drupal/installing-themes)

*Автори*

Написано і відредаговано [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), і
[Marc Isaacson](https://www.drupal.org/u/vegantriathlete).

Перекладено [Олексій Бондаренко](https://www.drupal.org/u/alexmazaltov) із
[Mazaltov](https://www.drupal.org/mazaltov).
