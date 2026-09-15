export const guide = {
  locale: "uk",
  title: "Drupal 8 Посібник користувача",
  chapters: [
    {
      id: "preface",
      label: "Вступ",
      summary: "Огляд вступних тем, що допоможуть зробити читання цього посібника більш ефективним.",
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
      label: "Порозуміння з Drupal-ом",
      summary: "Огляд основних концепцій Drupal на зразок модулів, тем, дистрибутивів та типів даних.",
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
      label: "Планування сайту",
      summary: "Огляд концепцій планування сайту і детально про макет сайту. Сутності матеріалів та структура данних теж розглянуті в цьому розділі.",
      items: [
        "block-regions",
        "planning-layout",
        "planning-data-types",
        "planning-modular",
        "planning-structure",
        "planning-workflow"
      ]
    },
    {
      id: "installation-chapter",
      label: "Встановлення",
      summary: "Огляд вимог до сервера та подробиці поширених способів установки",
      items: [
        "install-requirements",
        "install-tools",
        "install-decide",
        "install-prepare",
        "install-composer",
        "install-manual",
        "install-run"
      ]
    },
    {
      id: "config-chapter",
      label: "Основні налаштування сайту",
      summary: "Огляд концепцій основних налаштувань сайту. Розглянуто способи встановлення модулів та тем, налаштувань облікових записів.",
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
      label: "Основи керування сторінками",
      summary: "Огляд концепцій керування сторінками. Розглянуто способи використання матеріалів, редагування на місці та меню.",
      items: [
        "content-paths",
        "content-create",
        "content-edit",
        "content-in-place-edit",
        "menu-home",
        "menu-concept",
        "menu-link-from-content",
        "menu-reorder"
      ]
    },
    {
      id: "content-structure-chapter",
      label: "Налаштування структури матеріалів",
      summary: "Огляд концепцій структури матеріалів. Розглянуто способи використання типів матеріалів, таксономій та полів посилань.",
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
      label: "Керування обліковими записами користувачів",
      summary: "Огляд основних концепцій облікових записів користувачів та подробиць основних способів їх використання.",
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
      summary: "Огляд основних концепцій блоків та подробиць основних способів їх використання.",
      items: [
        "block-concept",
        "block-create-custom",
        "block-place"
      ]
    },
    {
      id: "views-chapter",
      label: "Створення списків за допомогою видів",
      summary: "Огляд основних концепцій видів та подробиць основних способів їх використання.",
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
      label: "Багатомовність",
      summary: "Огляд концепцій багатомовності сайту та подробиць способу увімкнення багатомовності на сайті.",
      items: [
        "language-concept",
        "language-add",
        "language-content-config",
        "language-content-translate",
        "language-config-translate"
      ]
    },
    {
      id: "extend-chapter",
      label: "Розширення та персоналізація сайту",
      summary: "Огляд персоналізації та розробки сайту. Розглянуто основні способи завантаження модулів та тем.",
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
      label: "Запобігання помилок та їх виправлення",
      summary: "Огляд концепцій кешування, резервних копій даних та журналювання. Розглянуто основні способи очищення кешу.",
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
      label: "Безпека та підтримка",
      summary: "Огляд концпецій безпеки та підтримки. Розглянуто основні способи оновлення ядра, модулів та тем.",
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
      label: "Прикінцеві думки",
      summary: "Огляд спільноти Drupal та способів зв'язку з іншими користувачами.",
      items: [
        "thoughts-connecting",
        "thoughts-support",
        "thoughts-learn-more",
        "glossary"
      ]
    }
  ]
};
