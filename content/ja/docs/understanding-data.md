---
title: "概念: データのタイプ"
description: "サイトで使用される一般的なデータタイプの概要。"
id: "understanding-data"
translation_key: "understanding-data"
source_locale: "ja"
---
## データタイプとは何ですか? { #understanding-data }

サイトのデータや情報は、編集、翻訳、保存の仕方が異なる4つのタイプに分類されます。
以下は、それらの4つのデータタイプです:

- **コンテンツ:** サイト訪問者に表示される情報(テキスト、画像など)。 このタイプの情報は比較的永続的ですが、通常は編集することができます。
- **設定:** コンテンツではない比較的永続的なサイトに関する情報で、サイトの動作や表示方法を定義するために使用されます。 サイト訪問者に表示されることもありますが、通常はコンテンツといえるほど大きな塊ではなく、 フィールドラベルやサイト名などの部分的なテキストとなる傾向があります。
- **状態:** cronジョブが最後に実行された時刻など、サイトの現在の状態に関する一時的な情報です。
- **セッション:** 個々のサイト訪問者とサイトとの間のやり取りに関する情報です。 ユーザーがログインしているかどうかの情報やユーザーのクッキー情報などを含みます。 これは一時的な情報であるため、技術的には状態データタイプのサブタイプとなります。
## 関連トピック

* [planning-data-types](./planning-data-types.md)
* [security-cron-concept](./security-cron-concept.md)
* [user-concept](./user-concept.md)
* [language-concept](./language-concept.md)

*帰属情報*

Adapted by [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) from
["Overview of Configuration (vs. other types of information)"](https://www.drupal.org/node/2120523),
copyright 2000-2017 by the individual contributors to the
[Drupal Community Documentation](https://www.drupal.org/documentation).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
