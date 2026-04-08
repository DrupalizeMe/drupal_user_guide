---
title: "Основы: Безопасность и регулярные обновления"
description: "Обзор обновлений безопасности, способы обработки ошибок и обновлений, не связанных с безопасностью."
id: "security-concept"
translation_key: "security-concept"
source_locale: "ru"
---
## Необходимые знания { #security-concept }

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-project](./understanding-project.md)
## Что такое обновления безопасности?

Любое программное обеспечение иногда имеет ошибки, и иногда эти ошибки могут быть связаны с безопасностью.
Когда ошибки безопасности исправляются в ядре, модулях или темах, используемых на вашем сайте, выпускается _обновление безопасности_.
Когда критические обновления безопасности анонсируются, они будут отображаться на страницах администрирования вашего сайта.
Вам нужно применять обновления безопасности, чтобы ваш сайт оставался защищённым.
Смотрите [security-announce](./security-announce.md), чтобы узнать, как получать уведомления об обновлениях безопасности по электронной почте,
а также [security-update-core](./security-update-core.md), [security-update-module](./security-update-module.md) и [security-update-theme](./security-update-theme.md), чтобы узнать, как выполнять обновления.
## Что такое команда безопасности?

Проект с открытым исходным кодом Drupal имеет команду добровольцев, которые отслеживают ошибки, связанные с безопасностью,
и выпускают обновления безопасности. Они также помогают другим разработчикам исправлять ошибки и поддерживают информацию для пользователей о том, как защищать свои сайты.
Подробнее о команде безопасности и их процессах вы можете узнать на странице
[_Drupal.org_ Security Team](https://www.drupal.org/drupal-security-team/general-information).
## Как сообщать об ошибках безопасности?

Важно, чтобы проблемы безопасности оставались конфиденциальными до их исправления, чтобы снизить риск компрометации сайтов до их защиты.
Если вы обнаружили потенциальную проблему безопасности в любом программном обеспечении, скачанном с _Drupal.org_,
следуйте инструкциям на странице
[_Drupal.org_ Security Team](https://www.drupal.org/drupal-security-team/general-information), чтобы отправить отчёт.
## Что такое регулярные (не связанные с безопасностью) обновления?

Ядро Drupal, модули и темы также периодически получают обычные обновления,
добавляющие новые функции и исправляющие ошибки. Эти обновления менее критичны, чем обновления безопасности.
В целом, рекомендуется применять такие обновления, если они не вызывают проблем на вашем сайте.
Перед установкой обновлений на рабочем сайте всегда полезно тестировать их на копии сайта,
так как некоторые обновления могут быть несовместимы с существующими модулями или темами,
или могут нарушить определённую функциональность.
## Похожие темы

* [security-announce](./security-announce.md)
* [security-update-core](./security-update-core.md)
* [security-update-module](./security-update-module.md)
* [security-update-theme](./security-update-theme.md)
* [install-dev-making](./install-dev-making.md)
## Дополнительные ресурсы

* [_Drupal.org_ страница документации сообщества "Securing your site"](https://www.drupal.org/security/secure-configuration)
* ["Советы по безопасности" на Drupal.org](https://www.drupal.org/security)
* [_Drupal.org_ Security Team](https://www.drupal.org/drupal-security-team/general-information)

*Авторы*

Написано и отредактировано [Boris Doesborg](https://www.drupal.org/u/batigolix)
и [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Переведено [Михаил Исмайлов](https://www.drupal.org/u/MishaIsmajlov).
