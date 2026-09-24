---
title: "Ручная установка файлов модуля или темы"
description: "Как вручную установить модуль или тему."
id: "extend-manual-install"
translation_key: "extend-manual-install"
source_locale: "ru"
---
## Цель { #extend-manual-install }

Пользовательские модули и темы могут быть недоступны через Composer, и их файлы
необходимо устанавливать вручную.
## Необходимые знания

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [understanding-themes](./understanding-themes.md)
* [extend-theme-find](./extend-theme-find.md)
## Требования к сайту

Используйте этот подход, если вы создали собственный модуль/тему или получили
файлы от кого-либо.

При установке или обновлении ядра, сторонних модулей и тем рекомендуется использовать Composer.
Смотрите [install-composer](./install-composer.md), [extend-module-install](./extend-module-install.md), и [extend-theme-install](./extend-theme-install.md) вместо этой темы.
## Шаги

Если вы устанавливаете модуль или тему с _Drupal.org_, следуйте инструкциям по загрузке,
а затем по загрузке/распаковке. Если вы сами создали модуль или тему — пропустите
шаг загрузки и просто создайте архив (который сможете разархивировать на сервере) и переходите к
шагу загрузки/распаковки, используя подходящий вам способ.
### Загрузка файлов на сайт и их распаковка

1. Если вы добавляете новый модуль или тему, создайте подкаталоги в ваших
    верхнеуровневых директориях _modules_ и _themes_ (если они ещё не существуют).
    Обычно для сторонних модулей и тем, скачанных с _Drupal.org_, создают подкаталог _contrib_,
    а для своих — подкаталог _custom_. Ваша директория _modules_ может выглядеть так:
    <img src="/images/extend-manual-install-directories.webp" alt="Рекомендуемая структура каталогов для модулей" width="174px" />
1. Если вы заменяете существующий модуль или тему новой версией, переведите
    сайт в режим обслуживания. Смотрите [extend-maintenance](./extend-maintenance.md).
1. Если вы заменяете существующий модуль или тему, найдите и удалите все старые файлы и папки
    модуля или темы. Обычно модули размещаются в подкаталогах верхнего уровня _modules_,
    темы — в _themes_.
1. Загрузите _.tar.gz_ файл (или другой архив) на ваш сайт. Поместите его либо в ту же папку,
    откуда удалили предыдущий модуль/тему (если обновляете), либо в нужный подкаталог
    в _modules_ или _themes_ (если добавляете новый модуль/тему).
1. Разархивируйте файлы из _.tar.gz_ (или другого архива), чтобы появился подкаталог
    в том же месте, где лежит архив. Если у вас нет терминального доступа, используйте
    файловый менеджер панели управления хостинга — там обычно есть функция распаковки.
    Если у вас есть терминальный доступ (Linux) и tar.gz-архив, используйте, например:
    ```text
    tar -xzf custom_toolbar-2.4.0.tar.gz
    ```
1. Удалите архивный файл с сервера, если ваша система распаковки этого не сделала автоматически.
1. Перейдите к [extend-module-install](./extend-module-install.md), [extend-theme-install](./extend-theme-install.md),
    [security-update-module](./security-update-module.md) или [security-update-theme](./security-update-theme.md), чтобы завершить
    установку или обновление. Начните с шага после автоматической загрузки.
## Расширьте понимание

* Если у вас несколько окружений (например, локальная разработка и продакшн),
вам нужно повторять эти действия на каждом окружении или склонировать его заново.
Смотрите [install-dev-making](./install-dev-making.md).
* Если вы добавили новую тему, в административном меню _Управление_ откройте
_Оформление_ (_admin/appearance_) и удалите старую тему.
## Видео

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/kOzQz9q3Kf8" title="Ручная загрузка файлов модуля или темы" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Дополнительные материалы

* [_Drupal.org_ документация: "Updating modules"](https://www.drupal.org/docs/extending-drupal/updating-modules)
* [_Drupal.org_ документация: "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* [_Drupal.org_ документация: "Installing themes"](https://www.drupal.org/docs/extending-drupal/installing-themes)

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), и
[Marc Isaacson](https://www.drupal.org/u/vegantriathlete).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
