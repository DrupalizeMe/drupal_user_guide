---
title: "概念: サーバー要件"
description: "コアソフトウェアのインストールと実行のためのサーバー要件の概要。"
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "ja"
---
## コアソフトウェアを実行するための要件は何ですか？ { #install-requirements }
### ディスク容量

最小インストールには15MB、多くの拡張モジュールやテーマをインストールするには60MBが必要です。
データベース、ユーザーによりアップロードされるファイル、メディア、バックアップ、その他のファイルの為にさらに多くの容量が必要になることにも留意ください。
### Webサーバー

- **Apache (推奨):** Apacheは最も一般的に使用されているWebサーバーです。 コアソフトウェアは、 mod_rewriteモジュールがインストールされ有効になっているUNIX/Linux、OS X、またはWindows上のApache 2.xで動作します。 「.htaccess」ファイルを使用するには、Apache VirtualHost設定で「AllowOverride All」ディレクティブを含める必要があります。
- **Nginx:** Nginxは高い同時実行性とパフォーマンスにフォーカスした一般的に使用されているWebサーバーです。 コアソフトウェアは、UNIX/Linux、OS X、またはWindows上のNginx 1.1またはそれ以上のバージョンで動作します。 「ngx_http_rewrite_module」をインストールして有効にする必要があります。
- **Hiawatha:** Hiawathaはセキュリティに重点を置いたWebサーバーです。また使いやすく軽量であることを目指しています。 独立した研究者の調査によると、通常環境でも他のWebサーバーに匹敵するパフォーマンスですが、攻撃下の環境では、 はるかに優れたパフォーマンスを発揮するとされています。 URLを書き換えるためには、URLツールキットをインストールして構成する必要があります。
- **Microsoft IIS:** Microsoft IISはMicrosoft Windows上で動作する機能拡張モジュールを持ったWebサーバーです。 コアソフトウェアは、PHPが正しく設定されていればIIS 5、IIS 6、またはIIS 7で動作します。 クリーンURLが必要なため、サードパーティの製品を使用する必要があります。例えばIIS 7では、 Microsoft URL Rewriteモジュールやサードパーティのソリューションを使用できます。
### データベース

次のいずれかのデータベースを使用してください:

* MySQL - 5.5.3 (MariaDB 5.5.20, Percona 5.5.8) 以上でInnoDB互換のプライマリーストレージエンジン
* PostgreSQL - 9.1.2 以上
* SQLite - 3.4.2 以上
### PHP

PHP 5.5.9 以上
## その他のリソース

[_Drupal.org_ community documentation page "System requirements" (in English)](https://www.drupal.org/docs/8/system-requirements)

*帰属情報*

Adapted by [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky) and
[Brian Emery](https://www.drupal.org/u/bemery987) from
["System requirements"](https://www.drupal.org/docs/8/system-requirements),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Ken Taguchi](https://www.drupal.org/u/ken_taguchi) at [Digital Circus](https://www.dgcircus.com/).
