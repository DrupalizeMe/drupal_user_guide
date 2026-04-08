---
title: "Подготовка к установке"
description: "Как загрузить ядро Drupal и выполнить необходимые предварительные требования для установки."
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "ru"
---
## Цель { #install-prepare }

Изложить этапы загрузки ядра Drupal и выполнения всех обязательных предварительных условий.
## Необходимые знания

* Как установить и настроить серверное программное обеспечение (если вы устанавливаете на свой компьютер)
* Как настроить хостинг для стандартного веб-сайта
* Как создать базу данных
## Требования сайта

Серверное программное обеспечение должно быть установлено на компьютере, где вы планируете разместить свой сайт. Смотрите [install-requirements](./install-requirements.md) для перечня требований.

Для локального запуска Drupal рекомендуется использовать DDEV — смотрите [install-ddev](./install-ddev.md).

В зависимости от того, как вы планируете загружать ядро, может потребоваться предварительно установить дополнительные инструменты. Смотрите [install-decide](./install-decide.md) и [install-tools](./install-tools.md).
## Этапы

1. Выберите метод загрузки и установки ядра, исходя из списка в [install-decide](./install-decide.md). Остальные инструкции относятся к вариантам с Composer и ручной загрузкой; если вы выбрали другие способы (например, установку в один клик у хостинг-провайдера), обратитесь к соответствующей документации для дополнительных шагов.
1. Настройте URL и хостинг для вашего сайта на сервере. Проверьте, что хостинг работает, поместив простой HTML-файл в веб-корневую папку и открыв URL вашего сайта в браузере.
1. Создайте базу данных и пользователя базы данных с полными правами.
1. Загрузите файлы ядра Drupal в веб-корневой каталог, используя выбранный вами метод. Смотрите [install-decide](./install-decide.md) для ссылок на подробные инструкции.
## Расширьте своё понимание

Смотрите [install-run](./install-run.md) для запуска интерактивной установки.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/7Aib3y9DM80" title="Подготовка к установке" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные ресурсы

[Drush](http://www.drush.org)

*Авторы*

Написано и отредактировано [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) на
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
и [Jojy Alphonso](https://www.drupal.org/u/jojyja) на
[Red Crackle](http://redcrackle.com).

Переведено [Карина Масалова](https://www.drupal.org/u/karina-masalova).
