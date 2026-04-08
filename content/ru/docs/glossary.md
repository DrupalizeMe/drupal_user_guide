---
title: "Словарь терминов"
description: "Словарь терминов"
id: "glossary"
translation_key: "glossary"
source_locale: "ru"
---
[](){ #glossary }

## Ajax { #glossary-ajax }

Веб-технология, позволяющая обмениваться данными с сервером для динамического обновления частей веб-страницы (например, форм) без необходимости полной перезагрузки страницы.

## Синоним { #glossary-alias }

Удобочитаемое имя, заменяющее внутренний [путь](./glossary.md#glossary-path), который система присваивает [URL](./glossary.md#glossary-url) на сайте. Например, вы можете назначить синоним _/about_ для страницы "О нас", чтобы заменить внутренний путь _/node/5_. Это даст странице адрес _http://example.com/about_ вместо _http://example.com/node/5_. Подробнее см. [content-paths](./content-paths.md).

## Анонимный { #glossary-anonymous }

Посетитель ([пользователь](./glossary.md#glossary-user)), который взаимодействует с сайтом, не будучи авторизованным. Подробнее см. [user-concept](./user-concept.md).

## Аутентифицированный { #glossary-authenticated }

Посетитель ([пользователь](./glossary.md#glossary-user)), который авторизован на сайте. Подробнее см. [user-concept](./user-concept.md).

## Блок { #glossary-block }

Фрагмент [контента](./glossary.md#glossary-content) (текст, изображения, ссылки и т.д.), который можно выводить на страницах сайта. Блоки размещаются в [регионах](./glossary.md#glossary-region). Подробнее см. [block-concept](./block-concept.md).

## Точка перехода { #glossary-breakpoint }

Точки, используемые для разделения высоты или ширины экранов браузеров, принтеров и других медиа-выходов на шаги. [Адаптивный](./glossary.md#glossary-responsive) сайт подстраивает отображение под эти точки. Подробнее см. [structure-image-responsive](./structure-image-responsive.md).

## Бандл { #glossary-bundle }

Синоним [подтипа сущности](./glossary.md#glossary-entity-subtype).

## Кэш { #glossary-cache }

Внутреннее хранилище сайта, в котором сохраняются результаты трудоемких вычислений, например, при обработке страницы. Это ускоряет повторные обращения к данным. Также могут использоваться внешние системы кэширования. Подробнее см. [prevent-cache](./prevent-cache.md).

## Стандарты кодирования { #glossary-coder }

Правила для программистов, определяющие лучшие практики, форматирование и другие соглашения, чтобы весь код был единообразным и ожидаемым. Подробнее см. [install-tools](./install-tools.md).

## Composer { #glossary-composer }

Менеджер зависимостей PHP, используемый Drupal, [Drush](./glossary.md#glossary-drush), Symfony и другими. Является предпочтительным способом установки проектов Drupal. Подробнее см. [install-composer](./install-composer.md).

## CMS { #glossary-cms }

Аббревиатура от [система управления содержимым](./glossary.md#glossary-content-management-system).

## Конфигурация { #glossary-configuration }

Информация о сайте, которая не является [контентом](./glossary.md#glossary-content), и предназначена для постоянного хранения (например, название сайта, [типы материалов](./glossary.md#glossary-content-type), [views](./glossary.md#glossary-view) и др.). Подробнее см. [understanding-data](./understanding-data.md).

## Контент { #glossary-content }

Информация, отображаемая на сайте: текст, изображения, файлы и пр. См. также [Конфигурация](./glossary.md#glossary-configuration) и [Состояние](./glossary.md#glossary-state). Подробнее см. [understanding-data](./understanding-data.md).

## Элемент контента { #glossary-content-item }

Единица [контента](./glossary.md#glossary-content), обычно предназначенная для вывода как основной материал страницы. Это вид [типа сущности](./glossary.md#glossary-entity-type). Подробнее см. [planning-data-types](./planning-data-types.md).

## Система управления содержимым (CMS) { #glossary-content-management-system }

Набор инструментов для создания, изменения, организации, поиска и удаления информации на сайте. Подробнее см. [understanding-drupal](./understanding-drupal.md).

## Тип материала { #glossary-content-type }

[Подтип сущности](./glossary.md#glossary-entity-subtype) для [элементов контента](./glossary.md#glossary-content-item) определенного [типа сущности](./glossary.md#glossary-entity-type). Каждый тип материала имеет свою задачу и собственные поля. Например, для ярмарки — отдельные типы для статических страниц и для карточки производителя. Подробнее см. [planning-data-types](./planning-data-types.md).

## Контекстный фильтр (в Представлении) { #glossary-contextual-filter }

Ограничивает выводимые данные в [представлении](./glossary.md#glossary-view) на основе контекста (например, полного URL страницы). Подробнее см. [views-parts](./views-parts.md).

## Контекстная ссылка { #glossary-contextual-link }

Ссылка на административную страницу настройки элемента, отображается в месте вывода этого элемента. Например, ссылка на настройку [меню](./glossary.md#glossary-menu), появляющаяся при наведении мыши на меню. Подробнее см. [config-overview](./config-overview.md).

## Дополнительный { #glossary-contributed }

[Модули](./glossary.md#glossary-module), [темы](./glossary.md#glossary-theme) и [дистрибутивы](./glossary.md#glossary-distribution), которые не входят в [ядро Drupal](./glossary.md#glossary-drupal-core), а загружаются отдельно с [_Drupal.org_](https://www.drupal.org).

## Крон { #glossary-cron }

Программа-расписание, которая периодически выполняет задания или скрипты. В Drupal задачи крона можно запускать как внешним расписанием, так и внутренним механизмом. Подробнее см. [security-cron-concept](./security-cron-concept.md).

## Кросс-сайтовый скриптинг { #glossary-cross-site-scripting }

Уязвимость безопасности, когда злоумышленник может внедрить скрипты на страницы сайта, которые просматривают другие пользователи. Подробнее см. [structure-text-formats](./structure-text-formats.md).

## Devel { #glossary-devel }

Модуль для разработки, помогает отладке, анализу запросов к базе, генерации фиктивного контента. Подробнее см. [install-tools](./install-tools.md).

## Сайт разработки { #glossary-development-site }

Копия основного сайта для разработки, обновления и тестирования. Подробнее см. [install-dev-sites](./install-dev-sites.md).

## Дисплей (в Представлении) { #glossary-display }

Тип вывода [представления](./glossary.md#glossary-view), например страница, [блок](./glossary.md#glossary-block) или лента. Подробнее см. [views-parts](./views-parts.md).

## Дистрибутив { #glossary-distribution }

Сборка, предоставляющая быстрый способ развернуть определённый тип сайта, включая ядро, дополнительные модули и темы, часто с демо-контентом. Подробнее см. [understanding-distributions](./understanding-distributions.md).

## Drupal Association { #glossary-drupal-association }

Некоммерческая организация, поддерживающая проект и сообщество Drupal. Подробнее см. [understanding-project](./understanding-project.md).

## Ядро Drupal { #glossary-drupal-core }

Файлы, темы, профили и модули, входящие в стандартный дистрибутив. Подробнее см. [understanding-drupal](./understanding-drupal.md).

## Drush { #glossary-drush }

Командная оболочка и инструмент для скриптового управления Drupal. Подробнее см. [install-tools](./install-tools.md).

## Редакционный процесс { #glossary-editorial-workflow }

Процесс создания, проверки, редактирования и публикации контента. В процессе могут участвовать разные роли (например, авторы и редакторы). Подробнее см. [planning-workflow](./planning-workflow.md).

## Сущность { #glossary-entity }

Элемент данных [контента](./glossary.md#glossary-content) или [конфигурации](./glossary.md#glossary-configuration); на практике обычно имеется в виду контент-сущность. Примеры: [элемент контента](./glossary.md#glossary-content-item), пользовательский [блок](./glossary.md#glossary-block), [термин таксономии](./glossary.md#glossary-taxonomy-term), описание [типа материала](./glossary.md#glossary-content-type). Первые три — сущности контента, последнее — конфигурационная сущность. См. также [Тип сущности](./glossary.md#glossary-entity-type), [Подтип сущности](./glossary.md#glossary-entity-subtype) и [Поле](./glossary.md#glossary-field). Подробнее см. [planning-data-types](./planning-data-types.md).

## Подтип сущности { #glossary-entity-subtype }

В [типе сущности](./glossary.md#glossary-entity-type) — группа сущностей с одинаковым набором [полей](./glossary.md#glossary-field). Например, у [элемента контента](./glossary.md#glossary-content-item) могут быть подтипы ([типы материала](./glossary.md#glossary-content-type)) — "Статическая страница", "Производитель", каждый со своими полями. Также может называться _bundle_ (бандл). Подробнее см. [planning-data-types](./planning-data-types.md).

## Тип сущности { #glossary-entity-type }

Общая категория для [сущности](./glossary.md#glossary-entity); обычно применяется к сущностям контента. Примеры: [типы материалов](./glossary.md#glossary-content-type), [термины таксономии](./glossary.md#glossary-taxonomy-term), пользовательские [блоки](./glossary.md#glossary-block). Подробнее см. [planning-data-types](./planning-data-types.md).

## Поле { #glossary-field }

Данные определенного типа, связанные с [сущностью контента](./glossary.md#glossary-entity). Например, у материала производителя — поля для изображения, описания, [термина таксономии](./glossary.md#glossary-taxonomy-term). Подробнее см. [planning-data-types](./planning-data-types.md).

## Набор полей { #glossary-field-bundle }

Синоним [подтипа сущности](./glossary.md#glossary-entity-subtype).

## Форматер поля { #glossary-field-formatter }

[Конфигурация](./glossary.md#glossary-configuration), определяющая, как данные [поля](./glossary.md#glossary-field) будут отображаться. Например, текстовое поле может выводиться с префиксом/суффиксом, очищаться от HTML-тегов и т.д. См. также [Режим просмотра](./glossary.md#glossary-view-mode), [Виджет поля](./glossary.md#glossary-field-widget). Подробнее см. [structure-view-modes](./structure-view-modes.md).

## Виджет поля { #glossary-field-widget }

[Конфигурация](./glossary.md#glossary-configuration), определяющая, как пользователь может вводить или редактировать данные для [поля](./glossary.md#glossary-field) в форме. Например, поле может быть однострочным или многострочным, может задаваться размер поля. См. также [Форматер поля](./glossary.md#glossary-field-formatter). Подробнее см. [structure-widgets](./structure-widgets.md).

## Фильтр (в Представлении) { #glossary-filter }

Ограничивает данные для вывода в [представлении](./glossary.md#glossary-view) на основе критериев, например, статус публикации, тип материала или значение поля. Подробнее см. [views-parts](./views-parts.md).

## Форматер { #glossary-formatter }

См. [Форматер поля](./glossary.md#glossary-field-formatter).

## FOSS { #glossary-foss }

Аббревиатура от _Free and Open Source Software_, свободное и открытое ПО, разрабатываемое сообществом и распространяемое под некоммерческой лицензией. См. также [GPL](./glossary.md#glossary-gpl). Подробнее см. [understanding-project](./understanding-project.md).

## Git { #glossary-git }

[Система управления версиями](./glossary.md#glossary-vcs), используемая разработчиками Drupal для координации изменений. Git хранит историю изменений проекта в дереве файлов — [репозитории](./glossary.md#glossary-repository). Подробнее см. [install-tools](./install-tools.md).

## GPL { #glossary-gpl }

Аббревиатура от _GNU General Public License_, некоммерческая лицензия для ПО. Вся загрузка с [_Drupal.org_](https://www.drupal.org) распространяется под ["GNU General Public License, version 2"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html). См. также [FOSS](./glossary.md#glossary-foss). Подробнее см. [understanding-gpl](./understanding-gpl.md).

## Стиль изображения { #glossary-image-style }

Набор шагов обработки, которые превращают исходное изображение в новое; обычно включают масштабирование и обрезку. Подробнее см. [structure-image-styles](./structure-image-styles.md).

## Установка { #glossary-installing }

Подготовка ядра Drupal, темы или модуля для использования. Для ядра включает загрузку файлов, создание БД, запуск установочного скрипта. Подробнее см. [install-decide](./install-decide.md).

## LAMP { #glossary-lamp }

Аббревиатура от _Linux, Apache, MySQL, PHP_: стандартный стек ПО для запуска сайтов Drupal, хотя возможны и другие ОС, серверы, СУБД. Подробнее см. [install-requirements](./install-requirements.md).

## Лог { #glossary-log }

Список зафиксированных событий на сайте: использование, производительность, ошибки, предупреждения и др. Подробнее см. [prevent-log](./prevent-log.md).

## Меню { #glossary-menu }

Набор ссылок для навигации по сайту, может быть иерархическим. Подробнее см. [menu-concept](./menu-concept.md).

## Модуль { #glossary-module }

ПО (обычно PHP, JS или CSS), расширяющее функционал сайта. В Drupal различают модули [ядра](./glossary.md#glossary-drupal-core) и [дополнительные](./glossary.md#glossary-contributed). Подробнее см. [understanding-modules](./understanding-modules.md).

## Путь { #glossary-path }

Уникальная последняя часть [URL](./glossary.md#glossary-url), назначенная системой для страницы на сайте, будь то публичная или административная. Например, для страницы "О нас" это может быть _node/5_. См. также [Синоним](./glossary.md#glossary-alias). Подробнее см. [content-paths](./content-paths.md).

## Права доступа { #glossary-permission }

Возможность выполнять действие на сайте, например, редактировать конкретный тип [контента](./glossary.md#glossary-content) или просматривать профили. См. также [Роль](./glossary.md#glossary-role). Подробнее см. [user-concept](./user-concept.md).

## Поле-ссылка { #glossary-reference-field }

[Поле](./glossary.md#glossary-field), представляющее связь между одной [сущностью](./glossary.md#glossary-entity) и другими сущностями, возможно других типов. Например, в материале-рецепте может быть ссылка на производителя. Поля [терминов таксономии](./glossary.md#glossary-taxonomy-term) — тоже ссылки. Подробнее см. [structure-reference-fields](./structure-reference-fields.md).

## Регион { #glossary-region }

Область страницы, в которой можно размещать [контент](./glossary.md#glossary-content), например, шапка, подвал, сайдбар. Регионы определяются [темой](./glossary.md#glossary-theme), а содержимое выводится с помощью [блоков](./glossary.md#glossary-block). Подробнее см. [block-regions](./block-regions.md).

## Связь (в Представлении) { #glossary-relationship }

Позволяет расширять выводимые данные за счёт связи с другими сущностями. Подробнее см. [views-parts](./views-parts.md).

## Репозиторий { #glossary-repository }

Место хранения файлов и истории изменений проекта в системе управления версиями. Подробнее см. [install-tools](./install-tools.md).

## Адаптивный { #glossary-responsive }

Сайт или [тема](./glossary.md#glossary-theme) называются адаптивными, если меняют отображение в зависимости от размера экрана. См. также [Точка перехода](./glossary.md#glossary-breakpoint). Подробнее см. [structure-image-responsive](./structure-image-responsive.md).

## Редакция { #glossary-revision }

Запись о прошлых/текущих состояниях [сущности контента](./glossary.md#glossary-entity), изменявшейся со временем. Подробнее см. [planning-workflow](./planning-workflow.md).

## Роль { #glossary-role }

Набор [прав доступа](./glossary.md#glossary-permission), назначаемый [аккаунту пользователя](./glossary.md#glossary-user). Подробнее см. [user-concept](./user-concept.md).

## Обновление безопасности { #glossary-security-update }

[Обновление](./glossary.md#glossary-update), исправляющее уязвимость. Подробнее см. [security-concept](./security-concept.md).

## Сессия { #glossary-session }

Информация о взаимодействии пользователя с сайтом: залогинен ли, его куки и т.д. Подробнее см. [understanding-data](./understanding-data.md).

## Сайт-стейджинг { #glossary-staging-site }

Копия основного сайта для тестирования или показа клиенту перед публикацией. Подробнее см. [install-dev-sites](./install-dev-sites.md).

## Состояние { #glossary-state }

Временная информация о текущем состоянии сайта, например, время последнего запуска [крона](./glossary.md#glossary-cron). См. также [Контент](./glossary.md#glossary-content) и [Конфигурация](./glossary.md#glossary-configuration). Подробнее см. [understanding-data](./understanding-data.md).

## Таксономия { #glossary-taxonomy }

Процесс классификации [контента](./glossary.md#glossary-content). Подробнее см. [structure-taxonomy](./structure-taxonomy.md).

## Термин таксономии { #glossary-taxonomy-term }

Классификатор (метка, категория) для [контента](./glossary.md#glossary-content). См. также [Словарь таксономии](./glossary.md#glossary-vocabulary). Подробнее см. [structure-taxonomy](./structure-taxonomy.md).

## Текстовый формат { #glossary-text-format }

[Конфигурация](./glossary.md#glossary-configuration), определяющая обработку пользовательского текста перед отображением (например, очистка HTML, автоссылки для URL и пр.). Подробнее см. [structure-text-formats](./structure-text-formats.md).

## Тема { #glossary-theme }

ПО и файлы (CSS, шаблоны, изображения и др.), определяющие внешний вид и верстку сайта. В Drupal темы бывают [ядра](./glossary.md#glossary-drupal-core) и [дополнительные](./glossary.md#glossary-contributed). Подробнее см. [understanding-themes](./understanding-themes.md).

## UI { #glossary-ui }

Сокращение от [пользовательский интерфейс](./glossary.md#glossary-user-interface).

## Обновление { #glossary-update }

Новая версия ПО сайта: [ядро](./glossary.md#glossary-drupal-core), [модуль](./glossary.md#glossary-module) или [тема](./glossary.md#glossary-theme). См. также [Обновление безопасности](./glossary.md#glossary-security-update). Подробнее см. [security-concept](./security-concept.md).

## URL { #glossary-url }

Уникальный адрес страницы в интернете, например, https://example.com/node/7. Подробнее см. [content-paths](./content-paths.md).

## Пользователь { #glossary-user }

Посетитель сайта (авторизованный или [анонимный](./glossary.md#glossary-anonymous)). Подробнее см. [user-concept](./user-concept.md).

## Пользовательский интерфейс { #glossary-user-interface }

Текст, стили и изображения, составляющие внешний вид сайта: для посетителей и для администраторов.

## Пользователь 1 (User one) { #glossary-user-one }

Первый [пользователь](./glossary.md#glossary-user), созданный при установке сайта (ID=1), имеющий все [права](./glossary.md#glossary-permission). Подробнее см. [user-admin-account](./user-admin-account.md).

## Система управления версиями { #glossary-vcs }

ПО для хранения файлов и истории изменений в [репозитории](./glossary.md#glossary-repository). Позволяет добавлять, удалять, обновлять файлы. Подробнее см. [install-tools](./install-tools.md).

## Представление { #glossary-view }

Отформатированный список данных (обычно из [контента](./glossary.md#glossary-content)), например, список производителей ярмарки. Можно создать представление в виде страницы или блока для отображения информации. Подробнее см. [planning-modular](./planning-modular.md).

## Режим просмотра { #glossary-view-mode }

Набор [форматеров полей](./glossary.md#glossary-field-formatter) для всех [полей](./glossary.md#glossary-field) сущности, часть которых может быть скрыта. Обычно у типов материалов есть режимы _Полный_ и _Анонс_. Подробнее см. [structure-view-modes](./structure-view-modes.md).

## Словарь { #glossary-vocabulary }

Группа [терминов таксономии](./glossary.md#glossary-taxonomy-term) для классификации контента, например, категории производителей. Словарь — это [подтип сущности](./glossary.md#glossary-entity-subtype) для терминов таксономии. Подробнее см. [structure-taxonomy](./structure-taxonomy.md).

## Виджет { #glossary-widget }

См. [Виджет поля](./glossary.md#glossary-field-widget).

## Мастер { #glossary-wizard }

Веб-форма для создания объектов с набором значений и настройками по умолчанию, например, мастера создания [представлений](./glossary.md#glossary-view). Подробнее см. [views-create](./views-create.md).

## WYSIWYG { #glossary-wysiwyg }

Аббревиатура от _What You See is What You Get_, то есть редактор, где итоговый результат похож на то, что вы видите при редактировании. Подробнее см. [structure-text-format-config](./structure-text-format-config.md).

## Workflow { #glossary-workflow }

См. [Редакционный процесс](./glossary.md#glossary-editorial-workflow).

## XSS { #glossary-xss }

Аббревиатура от [Кросс-сайтовый скриптинг](./glossary.md#glossary-cross-site-scripting).
