---
title: "コンテンツアイテムの作成"
description: "ホームページとして使用する、コンテンツアイテムの作成方法。"
id: "content-create"
translation_key: "content-create"
source_locale: "ja"
---
## 目標 { #content-create }

サイトのホームページとして使用する、コンテンツアイテムを作成し、公開する。
## 前提知識

[content-paths](./content-paths.md)
## サイトの前提条件

コンテンツタイプ「基本ページ」が存在すること。
コアの「標準」インストールプロフィールでインストールした場合、これはすでに作成されている。
## 手順

1. 管理用メニューの「管理」から、「コンテンツ」 > 「コンテンツを追加」 > 「基本ページ」（ _node/add/page_ ）の順に進み、「基本ページの作成」フォームを表示します。
1. 「概要を編集」をクリックします。
1. 次のように、フィールドに入力します。
    <table>
      <thead>
        <tr>
          <th>フィールド名</th>
          <th>説明</th>
          <th>値（入力内容）</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>タイトル</td>
          <td>ページのタイトル。ソースコードのメタタグ、URL エイリアス、管理用ページでのコンテンツアイテムのラベルとして使用される。</td>
          <td>ホーム</td>
        </tr>
        <tr>
          <td>概要</td>
          <td>「本文」フィールドの値の概要。概要ページのティーザーとして使用できる。</td>
          <td>シティマーケットの営業時間と場所。</td>
        </tr>
        <tr>
          <td>本文</td>
          <td>ページの本文</td>
          <td>あなたの近所の農産物市場、シティマーケットへようこそ！</td>
        </tr>
        <tr>
          <td>URL パス設定 > URL エイリアス</td>
          <td>コンテンツの代替相対パス</td>
          <td>/home</td>
        </tr>
      </tbody>
    </table>

    リッチテキストエディターのツールバーにある「ソース」をクリックすると、編集中テキストの HTML ソースコードを表示できます。 
    <img src="/images/content-create-create-basic-page.webp" alt="基本ページの作成" width="100%" />

1. 「プレビュー」をクリックし、すべてが期待どおりに表示されることを確認します。
1. 「コンテンツの編集に戻る」をクリックします。
1. 「保存して掲載」をクリックします。コンテンツが保存され、「コンテンツ」のページで検索できるようになります。
1. 同じ手順で「About」ページを作ります。タイトルは「農産物市場について」とし、本文に農産物市場の歴史を記述します。
## 理解を深める

* [menu-home](./menu-home.md)
* [menu-link-from-content](./menu-link-from-content.md)
* [language-content-translate](./language-content-translate.md)
## 関連概念

* [language-concept](./language-concept.md)
* [content-paths](./content-paths.md)
* [content-edit](./content-edit.md)
## その他のリソース

[_Drupal.org_ community documentation page "About nodes" (in English)](https://www.drupal.org/docs/8/core/modules/node/about-nodes)

*帰属情報*

Written by [Agnes Kiss](https://www.drupal.org/u/pixiekiss) and
[Boris Doesborg](https://www.drupal.org/u/batigolix).
Translated by [Hayato Goto](https://www.drupal.org/u/hgoto).
Reviewed by [Takafumi](https://www.drupal.org/u/takafumi).
