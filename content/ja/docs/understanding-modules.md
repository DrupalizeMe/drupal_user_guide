---
title: "概念: モジュール"
description: "モジュールの概要と提供する機能。"
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "ja"
---
## 前提知識 { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## モジュールとは何ですか?

モジュールは、サイトの特性を変更したり、機能を追加するPHP、JavaScript、CSSファイルの集合体です。
モジュールを「インストール」することによって機能を有効にし、「アンインストール」することによって無効にすることができます。
(ただし、アンインストールする前に関連するデータや設定を削除する必要があるかも知れません。)
サイトのページ表示時に、インストールされたモジュールそれぞれの処理時間が必要になるため、
必要でないモジュールはアンインストールした方がよいでしょう。

最初にダウンロードされるコアモジュールは、以下のような機能を提供します:

* ユーザー管理(コアユーザーモジュール)
* 基本コンテンツ管理(コアノードモジュール)とフィールド管理
(コアフィールド、フィールドUIモジュール、フィールドタイプを生成するコアモジュール)
* ナビゲーションメニュー管理(コアメニューUIモジュール)
* コンテンツのリスト、グリッド、ブロック作成(コアViews、Views UIモジュール)

追加の「拡張モジュール」は
[_Drupal.org_ Module Downloads](https://www.drupal.org/project/project_module)
からダウンロードできますし、自分自身の「カスタムモジュール」を作成することも可能です。
## 関連トピック

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## その他のリソース

[_Drupal.org_ community documentation page "Module developer's guide" (in English)](https://www.drupal.org/developing/modules)

*帰属情報*

Written by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
