export const guide = {
  locale: "ru",
  title: "Drupal Руководство пользователя",
  chapters: [
    {
      id: "preface",
      label: "Предисловие",
      summary: "Обзор вводных тем, которые помогут сделать прочтение руководства эффективным.",
      items: [
        "copyright",
        "preface-audience",
        "preface-organization",
        "preface-reporting",
        "preface-conventions",
        "preface-scenario"
      ]
    },
    {
      id: "understanding-chapter",
      label: "Основы Drupal",
      summary: "Обзор основных концепций Drupal, таких как модули, темы, дистрибутивы и типы данных.",
      items: [
        "understanding-drupal",
        "understanding-modules",
        "understanding-themes",
        "understanding-distributions",
        "understanding-data",
        "understanding-project",
        "understanding-gpl"
      ]
    },
    {
      id: "planning-chapter",
      label: "Проектирование сайта",
      summary: "Обзор концепций планирования сайта и типовых макетов. Описываются сущности и структура данных.",
      items: [
        "block-regions",
        "planning-layout",
        "planning-data-types",
        "planning-modular",
        "planning-structure",
        "planning-workflow",
        "language-concept"
      ]
    },
    {
      id: "installation-chapter",
      label: "Установка",
      summary: "Обзор требований к серверу и деталей основных задач по установке Drupal.",
      items: [
        "install-prepare",
        "install-requirements",
        "install-tools",
        "install-decide",
        "install-ddev",
        "install-composer",
        "install-run"
      ]
    },
    {
      id: "config-chapter",
      label: "Основные настройки сайта",
      summary: "Обзор основных понятий конфигурации сайта. Описаны задачи по установке модулей, настройке аккаунтов пользователей и тем.",
      items: [
        "config-overview",
        "config-basic",
        "config-install",
        "config-uninstall",
        "config-user",
        "config-theme"
      ]
    },
    {
      id: "content-chapter",
      label: "Управление страницами",
      summary: "Обзор управления страницами. Описаны задачи по работе с материалами, быстрым редактированием и меню.",
      items: [
        "content-paths",
        "content-create",
        "content-edit",
        "menu-home",
        "menu-concept",
        "menu-link-from-content",
        "menu-reorder"
      ]
    },
    {
      id: "content-structure-chapter",
      label: "Структура контента",
      summary: "Обзор структуры контента. Описаны типы материалов, таксономии и ссылочные поля.",
      items: [
        "structure-content-type",
        "structure-content-type-delete",
        "structure-fields",
        "structure-reference-fields",
        "structure-taxonomy",
        "structure-taxonomy-setup",
        "structure-adding-reference",
        "structure-widgets",
        "structure-form-editing",
        "structure-view-modes",
        "structure-content-display",
        "structure-image-styles",
        "structure-image-style-create",
        "structure-image-responsive",
        "structure-text-formats",
        "structure-text-format-config"
      ]
    },
    {
      id: "user-chapter",
      label: "Управление аккаунтами пользователей",
      summary: "Обзор концепций и задач по управлению аккаунтами пользователей.",
      items: [
        "user-concept",
        "user-admin-account",
        "user-new-role",
        "user-new-user",
        "user-permissions",
        "user-roles",
        "user-content"
      ]
    },
    {
      id: "blocks-chapter",
      label: "Блоки",
      summary: "Обзор блоков и основные задачи по их размещению.",
      items: [
        "block-concept",
        "block-create-custom",
        "block-place"
      ]
    },
    {
      id: "views-chapter",
      label: "Вывод материалов через Views",
      summary: "Обзор Views и создание списков через страницы и блоки.",
      items: [
        "views-concept",
        "views-parts",
        "views-create",
        "views-duplicate",
        "views-block"
      ]
    },
    {
      id: "multilingual-chapter",
      label: "Мультиязычность",
      summary: "Детали настройки мультиязычного сайта.",
      items: [
        "language-add",
        "language-content-config",
        "language-content-translate",
        "language-config-translate"
      ]
    },
    {
      id: "extend-chapter",
      label: "Расширение и настройка",
      summary: "Обзор разработки и настройки сайта. Установка модулей и тем.",
      items: [
        "extend-module-find",
        "extend-maintenance",
        "extend-module-install",
        "extend-theme-find",
        "extend-theme-install",
        "extend-manual-install",
        "install-dev-sites",
        "install-dev-making",
        "extend-deploy",
        "extend-config-versions",
        "extend-git"
      ]
    },
    {
      id: "prevent-chapter",
      label: "Предотвращение и решение проблем",
      summary: "Обзор кэша, резервного копирования и логов. Описан сброс кэша.",
      items: [
        "prevent-cache",
        "prevent-cache-clear",
        "prevent-backups",
        "prevent-log",
        "prevent-status"
      ]
    },
    {
      id: "security-chapter",
      label: "Безопасность и обслуживание",
      summary: "Обзор безопасности и обслуживания. Описано обновление ядра, модулей и тем.",
      items: [
        "security-cron-concept",
        "security-cron",
        "security-concept",
        "security-announce",
        "security-update-core",
        "security-update-module",
        "security-update-theme"
      ]
    },
    {
      id: "thoughts-chapter",
      label: "Заключение",
      summary: "Обзор Drupal-сообщества и как найти единомышленников.",
      items: [
        "thoughts-connecting",
        "thoughts-support",
        "thoughts-learn-more",
        "glossary"
      ]
    }
  ]
};
