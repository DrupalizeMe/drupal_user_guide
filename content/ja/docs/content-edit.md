---
title: "コンテンツアイテムの編集"
description: "コンテンツアイテムの編集方法。"
id: "content-edit"
translation_key: "content-edit"
source_locale: "ja"
---
## 目標 { #content-edit }

ホームページのコンテンツアイテムにある「営業時間」を更新する。
## 前提知識

[content-create](./content-create.md)
## サイトの前提条件

ホームページのコンテンツアイテムが存在すること。[content-create](./content-create.md) を参照。
## 手順

1. 管理用メニューの「管理」から、「コンテンツ」（ _admin/content_ ）へ進みます。
1. 編集したいコンテンツアイテムが、最近作成されたか、更新された場合、そのページのコンテンツ一覧の上部に表示されているはずです。
    見当たらない場合は、「コンテンツタイプ」や「タイトル」などのフィルターを使用し、目的のコンテンツアイテムを検索できます。
    <img src="/images/content-edit-admin-content.webp" alt="コンテンツの管理ページ" width="100%" />
1. 編集したいコンテンツアイテム（「ホーム」）の行にある「編集」をクリックし、コンテンツ編集フォームを開き、「本文」フィールドに入力されている営業時間を更新します。
    フィールドの説明とスクリーンショットは、[content-create](./content-create.md) を参照してください。
1. 編集フォームの右側にあるボックスで、「新しいリビジョンの作成」にチェックを入れ、「リビジョンログメッセージ」に変更内容を入力します（たとえば「営業時間を更新」など）。
    このテキストは、ページのリビジョンログに表示されます。
    ![コンテンツ編集ページのリビジョン情報エリア](/images/content-edit-revision.webp)
1. 「保存して掲載のまま」をクリックし、変更を保存します。
1. 「コンテンツ」の管理ページにリダイレクトされ、コンテンツアイテムが更新されたことを示すメッセージが表示されるはずです。
    ![コンテンツ更新のメッセージ](/images/content-edit-message.webp)
## 理解を深める

上述した最初の 2 ステップの代わりに、次の方法でコンテンツ編集フォームを開くこともできます。

1. サイトのホームページから、サイトのナビゲーションメニューを使用し、編集したいコンテンツが訪問者に表示されるページを探します。
1. ほとんどのテーマでは、そのページの編集権限があるユーザーの場合、最上部付近に「編集」リンク（またはタブ）が表示されます。
    リンクをクリックすると、完全なコンテンツ編集フォームへ進みます。
1. また、リンクをクリックしないで、そのページからインプレースエディターを使用することもできます（[content-in-place-edit](./content-in-place-edit.md)を参照）。

    *帰属情報*

    Written by [Chris Dart](https://www.drupal.org/u/chris-dart)
    and [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
    Translated by [Hayato Goto](https://www.drupal.org/u/hgoto).
    Reviewed by [Takafumi](https://www.drupal.org/u/takafumi).
