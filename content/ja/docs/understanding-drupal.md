---
title: "概念：コンテンツ管理システムとしてのDrupal"
description: "Drupalの概要と信頼できるコンテンツ管理システム(CMS)としてDrupalを選ぶ理由。"
id: "understanding-drupal"
translation_key: "understanding-drupal"
source_locale: "ja"
---
## コンテンツ管理システムとは何ですか? { #understanding-drupal }

コンテンツ管理システム(CMS)とは、スマートフォン、タブレット、デスクトップPCなどのブラウザを使って、
ウェブサイトのコンテンツの追加、公開、編集、削除操作を可能にするソフトウェアです。
通常CMSのソフトウェアはスクリプト言語で記述され、
データベースやWebサーバーがインストールされたコンピューター上で動作します。
Webサイトのコンテンツや設定は一般的にデータベース内に保存され、
Webサーバーにページ表示リクエストが届く度に、スクリプトはデータベースや「アセット」
(JavaScript、CSS、画像ファイルなどCMSの一部であったりアップロードされたもの)
から取得した情報を統合してページを表示します。

オペレーションシステム、スクリプト言語、データベース、Webサーバーの組み合わせは、
CMSが動作する「スタック」と呼ばれており、よく使用されるLinuxオペレーションシステムとApache Webサーバー、
MySQLデータベース、PHP言語の組み合わせは「LAMPスタック」と呼ばれています。
## Drupalとは?

Drupalは、LAMPスタック上で動作する柔軟なCMSです。
Drupalのモジュラーデザインでは、「モジュール」をインストールすることによって機能を追加したり、
「テーマ」をインストールしてWebサイトの外観を全く異なったものに変更することができます。
Drupalコアと呼ばれる基本のダウンロードファイルには、
CMSの基本機能を提供するPHPスクリプト、いくつかのオプションのモジュールやテーマ、
そして多くのJavaScript、CSS、画像アセットが含まれています。
また多くの追加モジュールやテーマは [_Drupal.org_](https://www.drupal.org) からダウンロードすることができます。

Drupalは、別のテクノロジースタック上でも動作します:

* オペレーティングシステムは、LinuxではなくWindowsまたはMac OSでも構いません。
* Webサーバーは、ApacheではなくNginxまたはIISにすることができます。
* データベースは、MySQLではなくPostgreSQL、SQLiteまたはMariaDBやPerconaのようなMySQL互換のものにすることができます。

オペレーションシステム、Webサーバー、データベースは変更可能ですが、
ソフトウェアが使用しているスクリプト言語のPHPは変更することができません。
## Drupalを使用する理由は?

Webサイトを構築する際に、既存のCMSパッケージやホスティングサービスを使用する、
自分自身のCMSを開発する、またはCMSを使用しないでサイトを構築するなど多くの選択肢が存在します。
その中で、Drupalを使用する理由のいくつかを以下に示します:

* 小さくて単純なサイトを静的HTMLで作成することは難しくないですし、素早くサイトを立ち上げることができるでしょう。
それに対し、CMSを使ったサイト構築は、一般的に始めにより多くの時間が必要となります。
しかしそれは、オンライン編集機能(あまり経験のないコンテンツ管理者にとってはより簡単)、
統一性(大きめのサイトを静的HTMLで維持管理するのは困難)、
データベースが必要なより複雑な機能を提供するなどの利点をもたらすでしょう。
* いくつかのCMSソフトウェアは、特定の目的のために使用されます。
例えばブログやクラブ会員Webサイトを構築するパッケージやホスティングサービスなどです。
対照的にDrupalは汎用目的のCMSです。
もし特定目的のサイトを構築するのであれば、特定目的のCMSを使用するべきでしょう。
しかし、もしサイトが特定の目的以上の機能を必要とするなら、
特定目的のCMSに適応させるよりは、汎用目的CMSを使用した方が良いでしょう。
* 自分自身のCMSタイプのソフトウェアを開発するのは魅力的に思えます。
しかしDrupalのような汎用目的CMSをそのスタート地点とするのは、より良いアイデアです。
なぜなら基本的なCMS機能(ユーザー管理やコンテンツ管理など)は、数千時間の開発者の時間を使って、
長年のユーザーテスト、バグ修正、セキュリティー強化がなされているからです。
* いくつかのCMSソフトウェアパッケージはライセンス購入費用がとても高価です。
あるものは無料または無料版が存在するかもしれませんが、
自由に改変したり拡張することを禁止する制限付きライセンスです。
Drupalのように、より制限の少ないソフトウェアライセンスで、
世界的なコミュニティにより開発されたパッケージを使用することをお勧めします。
このトピックについて、詳しくは [understanding-project](./understanding-project.md) を参照してください。
## 関連トピック

* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [understanding-project](./understanding-project.md)
## その他のリソース

* [The Drupal overview (in English)](https://www.drupal.org/docs/8/understanding-drupal-8/overview)
* [_Drupal.org_ page "FAQ" (Frequently Asked Questions) (in English)](https://www.drupal.org/about/faq)
* [_Drupal.org_ page "Case Studies" (in English)](https://www.drupal.org/case-studies)
* [Wikipediaページ "コンテンツマネージメントシステム"](https://ja.wikipedia.org/wiki/%E3%82%B3%E3%83%B3%E3%83%86%E3%83%B3%E3%83%84%E3%83%9E%E3%83%8D%E3%83%BC%E3%82%B8%E3%83%A1%E3%83%B3%E3%83%88%E3%82%B7%E3%82%B9%E3%83%86%E3%83%A0)
* [Wikipedia page "Modular design" (in English)](https://en.wikipedia.org/wiki/Modular_design)

*帰属情報*

Written and edited by [Kristof van Tomme](https://www.drupal.org/u/kvantomme)
at [Pronovix](https://pronovix.com/),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Michael Lenahan](https://www.drupal.org/u/michaellenahan)
at [erdfisch](https://erdfisch.de).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
