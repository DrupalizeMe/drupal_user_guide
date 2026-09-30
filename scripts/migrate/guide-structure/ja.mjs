export const guide = {
  locale: "ja",
  title: "Drupal 8 ユーザーガイド",
  chapters: [
    {
      id: "preface",
      label: "まえがき",
      summary: "このガイドを効率的に活用するための入門トピック。",
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
      label: "Drupalについて",
      summary: "モジュール、テーマ、ディストリビューション、データタイプなどDrupalの概要。",
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
      label: "あなたのサイトを計画する",
      summary: "サイト計画の概要と一般的なサイトレイアウト作業の詳細。コンテンツエンティティと構造についての説明。",
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
      label: "インストール",
      summary: "サーバー要件の概要と一般的なインストールタスクの詳細。",
      items: [
        "install-requirements",
        "install-tools",
        "install-prepare",
        "install-run"
      ]
    },
    {
      id: "config-chapter",
      label: "基本的なサイト設定",
      summary: "基本的なサイト設定の概要。モジュールのインストール、ユーザーアカウントの設定、テーマに関する作業の説明。",
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
      label: "基本的なページ管理",
      summary: "ページ管理の概要。コンテンツアイテム、インプレース編集、およびメニューに関する作業の説明。",
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
      label: "コンテンツ構造の設定",
      summary: "コンテンツ構造の概要。コンテンツタイプ、タクソノミー、および参照フィールドに関する作業の説明。",
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
      label: "ユーザーアカウントの管理",
      summary: "ユーザーアカウントの概要と一般的なユーザーアカウントに関する作業の詳細。",
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
      label: "ブロック",
      summary: "ブロックの概要と共通ブロックに関する作業の詳細。",
      items: [
        "block-concept",
        "block-create-custom",
        "block-place"
      ]
    },
    {
      id: "views-chapter",
      label: "ビューによるリスティングの作成",
      summary: "ビューの概要と一般的なビューに関する作業の詳細。",
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
      label: "サイトを多言語化する",
      summary: "多言語サイトの概要とサイトを多言語化するために必要な作業の詳細。",
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
      label: "サイトの拡張とカスタマイズ",
      summary: "サイトのカスタマイズと開発の概要。モジュールとテーマのダウンロードに関する作業の説明。",
      items: [
        "extend-module-find",
        "extend-maintenance",
        "extend-module-install",
        "extend-theme-find",
        "extend-theme-install",
        "extend-manual-install",
        "install-dev-sites",
        "install-dev-making",
        "install-composer",
        "extend-deploy",
        "extend-config-versions"
      ]
    },
    {
      id: "prevent-chapter",
      label: "問題の予防と解決",
      summary: "キャッシュ、データバックアップ、およびログの概要。キャッシュをクリアする作業についての説明。",
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
      label: "セキュリティとメンテナンス",
      summary: "セキュリティとメンテナンスの概要。コアソフトウェア、モジュール、およびテーマの更新に関する作業の説明。",
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
      label: "おわりに",
      summary: "Drupalコミュニティの概要と他のユーザーとのコミュニケーション。",
      items: [
        "thoughts-connecting",
        "thoughts-support",
        "thoughts-learn-more",
        "glossary"
      ]
    }
  ]
};
