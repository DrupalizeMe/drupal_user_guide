---
title: "インストーラーの実行"
description: "コアソフトウェアをインストールするためのインストーラーの使用方法。"
id: "install-run"
translation_key: "install-run"
source_locale: "ja"
---
## 目標 { #install-run }

標準のインストーラーを実行してコアソフトウェアをインストールし、管理者アカウントを作成する。
## 前提知識

[install-requirements](./install-requirements.md)
## サイトの前提条件

[install-prepare](./install-prepare.md)
## 手順

1. もしホスティングプロバイダーやデモサイトの1クリックインストールを使用する場合は、
    次に続く画面はインストールプロセスの一部として見ることでしょう。
    コアファイルを手動でアップロードした場合は、
    ブラウザを起動してホスティング環境に設定したURLにアクセスしてインストールを開始してください。
1. インストールの最初の画面で、例えば「日本語」のように言語を選択してください。
    ここでは、リストで選択可能なすべての言語を選択することが出来ます。
    後に続くインストールプロセスが選択された言語で表示されるように、
    選択された言語の言語ファイルがダウンロードされインストールされます。
    言語を選択した後に「Save and continue」をクリックしてください。
    <img src="/images/install-run-1.webp" alt="言語を選択する" width="100%" />
1. インストールプロフィールを選択してください。
    インストールプロフィールは、コアソフトウェア、拡張モジュール、テーマ、
    事前定義された設定を一度にダウンロードし、特定の種類のサイトに特徴的な機能を提供します。
    コアソフトウェアは2つのインストールプロフィールを持っています。
    「標準」インストールプロフィールを選択して、「保存して次へ」をクリックしてください。
    <img src="/images/install-run-2.webp" alt="インストールプロフィールを選択する" width="100%" />
1. インストーラーは、次のステップでシステムが最低限の要件を満たしているかの検証を行います。
    もし満たしていない場合は、続行するために必要な修正の概要が表示されます。
    問題がない場合は、自動的に次のステップに進みます。
1. [install-prepare](./install-prepare.md) の章で作成したデータベースの情報を入力し、「保存して次へ」をクリックします。
    <table>
      <thead>
        <tr>
          <th>フィールド名</th>
          <th>説明</th>
          <th>値</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>データベース名</td>
          <td>作成したデータベース名</td>
          <td>drupal8</td>
        </tr>
        <tr>
          <td>データベースのユーザー名</td>
          <td>作成したユーザー名</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>データベースのパスワード</td>
          <td>選択したパスワード</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.webp" alt="データベース設定フォーム" width="100%" />

1. 次のステップでは、 「Drupalのインストール」の見出しの下にプログレスバーが表示されます。
    インストールが完了すると、自動的に次のステップに進みます。
    <img src="/images/install-run-4.webp" alt="インストールプログレスバー" width="100%" />
1. 最後のステップは、新しく作成したサイトの基本情報の設定です。
    このステップで作成したユーザーアカウントがサイト管理者のアカウントになることにご注意ください。
    この特殊なアカウントの重要な情報については、 [user-admin-account](./user-admin-account.md) を参照してください。
    ユーザー名は"admin"という名前で構いませんが、パスワードは、安全でユニークなものを選択します。
    入力フォームに次の情報を入力してください:
    <table>
      <thead>
        <tr>
          <th>フィールド名</th>
          <th>説明</th>
          <th>値</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>サイト名</td>
          <td>このサイトのサイト名</td>
          <td>ヒルズファーマーズマーケット</td>
        </tr>
        <tr>
          <td>サイトのメールアドレス</td>
          <td>このサイトのメールアドレス</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>ユーザー名</td>
          <td>サイト管理者のユーザー名</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>パスワード</td>
          <td>選択したパスワード</td>
          <td>************</td>
        </tr>
        <tr>
          <td>パスワードの確認</td>
          <td>パスワードの再入力</td>
          <td>************</td>
        </tr>
        <tr>
          <td>メールアドレス</td>
          <td>ユーザーのメールアドレス</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    残りのフィールドは、初期値のままで良いでしょう。
    <img src="/images/install-run-5.webp" alt="設定フォーム" width="100%" />

1. 「保存して次へ」をクリックします。
1. 新しく作成したサイトのトップページにリダイレクトされ、
    「おめでとうございます。Drupalのインストールが完了しました。」のメッセージがページ最上部に表示されるでしょう。
    <img src="/images/install-run-6.webp" alt="インストール成功" width="100%" />

## 理解を深める

「サイトの状態」を調べて、インストールに問題がないかどうかを確認します。
参照 [prevent-status](./prevent-status.md)
## 関連概念

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## その他のリソース

[_Drupal.org_ community documentation page "Create A Database"(in English)](https://www.drupal.org/docs/8/install/step-3-create-a-database)

*帰属情報*

Written and edited by [Joe Shindelar](https://www.drupal.org/u/eojthebrave) at
[Drupalize.Me](https://drupalize.me),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
