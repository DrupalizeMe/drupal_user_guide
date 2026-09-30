---
title: "概念: その他のツール"
description: "サイト構築者がサイトを作成するのに便利なその他のツールの概要。"
id: "install-tools"
translation_key: "install-tools"
source_locale: "ja"
---
## サイト構築者はどのようなツールを利用できますか？ { #install-tools }

より素早く、より正確に、少ない労力でサイトを作成するためのツールがいくつかあります。

- **Drush:** Drushの詳細については、以下を参照してください。
- **Git:** [Git](https://git-scm.com/)は、サイト全体または使用しているモジュールやテーマに関連したファイルの変更を追跡可能にするバージョン管理システムです。 Gitは変更を試行することができ、必要に応じて以前のバージョンに戻すことができます。 設定ファイルの変更を追跡したり、異なるサイトの設定を同期させるためにも使用できます。 GitはWeb開発プロジェクトの標準となっています。
- **Composer:** Composerの詳細については、以下を参照してください。
- **Devel:** [Devel拡張モジュール](https://www.drupal.org/project/devel)は、デバッグやコードの調査、 データベースクエリーの分析、ダミーコンテンツの生成のような開発時の作業を支援します。
## Drushの優れたところは何ですか？

[Drush](http://www.drush.org)は、管理画面を使って行うサイト構築や保守操作を代替するコマンドラインツールです。
多くのサイト構築者やメンテナーは可能な限りDrushを使用することを好み、
Drushをインストールして学習することは良い投資であると考えています。
Drushを使用する理由：

* Drushは、基本ソフトウェア、モジュール、テーマのインストール、ソフトウェアの更新、
コピーやクエリーなどのデータベース操作、パスワードのリセット、キャッシュクリアなど、
多くのコマンドを提供します。
また拡張モジュールやテーマの中には独自のDrushコマンドを提供するものもあります。
* Drushを使用して管理タスクを実行するのは、管理インターフェイスを使用して同じタスクを実行するよりも早くてより簡単です。
* Drushはコマンドラインインターフェイスなので、Drushコマンドと他のコマンドを組み合わせてスクリプトを作成し、
サーバー上でより複雑な作業を自動化することができます。
* Drushは管理インターフェイス経由では利用できない追加の機能を提供します。
たとえば、データベースクエリの実行などです。

Drushを使用するには、ウェブサイトがホストされるサーバーのコマンドラインアクセス権限が必要です。
また、そのサーバー上に互換性のあるバージョンのDrushツールがインストールされている必要があります。
インストール方法とバージョンの互換性については、
[Drushウェブサイト](http://www.drush.org)をチェックしてください。
そのサイトには、利用可能なDrushコマンドについてのドキュメントもあります。
## Composerは何のために使用されていますか？

[Composer](https://getcomposer.org/)は、PHPの依存関係を管理するためのツールです。
開発者は、外部ライブラリについてそれぞれどのバージョンが必要かという依存関係を指定し、
Composerは、その指定されたライブラリのダウンロードとインストールのプロセスを管理します。

コアソフトウェアはComposerの主なユーザーです。
なぜならコアソフトウェアを動作させるために、
複数の外部で開発されたソフトウェアライブラリをダウンロードしてインストールする必要があるからです。
コアソフトウェアをインストールする際は、外部ライブラリの互換バージョンを含むアーカイブをダウンロードするか、
初期ダウンロード後に外部ライブラリをダウンロードするためにComposerを実行する必要があります。

拡張モジュールの中には、外部で開発されたソフトウェアライブラリを利用するものもあります。
例えば、Facebook統合モジュールはモジュールが動作するためにFacebookの統合ライブラリをインストールする必要があり、
ジオグラフィックモジュールはジオグラフィック機能の標準ライブラリを利用することがあります。
そのような外部依存関係を持つモジュールをインストールするには、Composerを実行する必要があります。
## モジュールやテーマの開発者はどのようなツールを利用できますか？

上記のサイト構築ツールに加えて、モジュールやテーマ開発者にとって有用な以下のツールがあります。

- **Drupal Console:** [Drupal Console](https://drupalconsole.com)は、ボイラープレートコードの生成やDrupalサイトの操作を行うコマンドラインツールです。 たとえば、ブロックやフォームのコードを生成したり、モジュールやテーマをインストールしたり、 ダミーコンテンツを作成したりすることができます。 Drupal ConsoleはSymfony Consoleを使用します。
- **Coder:** [Coder](https://www.drupal.org/project/coder)は、 モジュールやテーマがコーディング規約やその他のベストプラクティスに準拠しているかどうかをチェックするコマンドラインツールです。 また、規約違反のコードを修正することもできます。
- **ブラウザデバッキングツール:** FirefoxやChromeのようなWebブラウザには、CSS、HTML、およびJavaScriptの表示、編集、デバッグ、および監視を可能にするツールが含まれています。 デバッグペインまたはウィンドウを開くには、ウィンドウのある領域でマウスを右クリックし、 「検証」(Chrome)または「要素を調査」(Firefox)を選択します。
## 関連トピック

[install-composer](./install-composer.md)
## その他のリソース

* [「Drupal.org」community documentation page "Development tools" (in English)](https://www.drupal.org/node/147789)
* [「Drupal.org」community documentation page "Using Composer with Drupal" (in English)](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)

*帰属情報*

Written and edited by [Boris Doesborg](https://www.drupal.org/u/batigolix)
and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
