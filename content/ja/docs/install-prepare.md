---
title: "インストールの準備"
description: "コアソフトウェアのインストール方法を選択し、インストールの前提条件を整える。"
id: "install-prepare"
translation_key: "install-prepare"
source_locale: "ja"
---
## 目標 { #install-prepare }

コアソフトウェアをインストールする適切な方法を選択し、インストールの前提条件を整える。
## 前提知識

* [install-requirements](./install-requirements.md)
* [install-tools](./install-tools.md)
## サイトの前提条件

コアソフトウェアのインストールにDrushを使用する場合は、Drushをインストールしておく必要があります。
参照 [install-tools](./install-tools.md)
## 手順

1. コアソフトウェアをインストールする方法を選択します。
    - **無料のオンラインデモを試行する:** オンラインプロバイダーでコアソフトウェアのインストールデモを試行します。 通常20分かそれ以下で済みます。 参照 [_Drupal.org_ "Try Drupal"ページ](https://www.drupal.org/try-drupal)
    - **ホスティングプロバイダーのワンクリックインストーラーを使用する:** ホスティング環境にコアソフトウェアをインストールする場合は、 ホスティングプロバイダーが特別なドキュメントまたはワンクリックインストーラーを提供しているかもしれません。 参照 [_Drupal.org_ のDrupalをサポートするホスティングプロバイダー一覧](https://www.drupal.org/association/supporters/hosting)
    - **Drushを使用する:** Drushがインストール済みで、サイトのコマンドラインアクセス権限が必要です。 参照 [install-tools](./install-tools.md)
    - **Webインストーラーを使用する:** ローカルPCまたはホスティングされているWebサーバー上にコアソフトウェアをインストールするための空き容量が必要になります。
    - **事前設定された環境を使用する:** Drupalをローカルにインストールするための必要なソフトウェアが事前設定された環境またはVM(仮想マシン)を使用する。 利用可能な選択肢ついては、以下のページの使用しているOSのセクションを参照してください。 [_Drupal.org_ のローカルサーバーセットアップガイド](https://www.drupal.org/docs/develop/local-server-setup) --
1. DrushまたはWebインストーラーを使用してインストールする場合は、
    外部ホスティングプロバイダーまたは自分のコンピュータのいずれかにWeb公開環境をセットアップします。
    そしてWeb公開環境のルートディレクトリに単純なHTMLファイルを置き、
    サイトのURLにアクセスして正しく動作していることを確認します。
1. DrushまたはWebインストーラーを使用してインストールする場合は、データベースを作成し、
    全アクセス権限を持ったユーザーアカウントを準備します。
1. Drushを使用してインストールする場合は、次のDrushコマンドをタイプします。
    「example」はコアソフトウェアがダウンロードされるディレクトリ、「DB_NAME」、
    「DB_USR」、「DB_PASS」はデータベースアクセス情報です。
    ```text
    drush dl drupal --drupal-project-rename=example
    cd example
    drush site-install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site- name=example
    ```
1. Webインストーラーを使用してインストールする場合は、コアソフトウェアのファイルを手動でアップロードします。
    もしGitまたはComposerを使用して圧縮アーカイブをダウンロードしてファイルを設置する場合は、
    [install-composer](./install-composer.md) を参照してください。

    .. 「https://www.drupal.org」にアクセスし、トップレベルメニューの「Download & Extend」をクリックします。
    <img src="/images/install-prepare-downloads.webp" alt="_Drupal.org_ ダウンロードページ" width="100%" />

    .. 適切なバージョンの「Download Drupal」ボタンをクリックしてダウンロードページを表示します。
    ![_Drupal.org_ ダウンロードページの推奨リリースセクション](/images/install-prepare-recommended.webp)

    .. 「Recommended releases」の下のダウンロードしたいバージョンをクリックします。
    ![_Drupal.org_ コアダウンロードページのダウンロードファイルセクション](/images/install-prepare-files.webp)

    .. tar.gzまたはzipファイルをローカルマシンにダウンロードします。

    .. ダウンロードしたファイルをホスティング環境にアップロードし、
    コントロールパネルにログインして 「HTML」ディレクトリに移動し、ファイルを保存します。

    .. tar.gzまたはzipファイルを解凍します。うまく解凍できると新しいディレクトリが作成されます。
    もし端末アクセス権がなかったり、サーバーがLinuxでなかった場合は、
    ご使用のホスティング環境のコントロールパネルのファイル解凍機能を使用してください。
    もしサーバーがLinuxで端末アクセス権があった場合は次のようなコマンドを使用します。
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```

    .. ファイル解凍機能が圧縮ファイルを削除していない場合は、圧縮ファイルをサーバーから削除してください。

    .. サイトを使用できるように、ディレクトリ名を変更するかWebホスティング環境を再設定して、
    対象のディレクトリがサイトに使用されるディレクトリとなるようにしてください。
## 理解を深める

Webインストーラーを使用してコアソフトウェアをインストールする方法を選択した場合は、
インストーラーを実行してください。
参照
[install-run](./install-run.md)
## その他のリソース

[Drush (in English)](http://www.drush.org)

*帰属情報*

Written and edited by [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) at
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
and [Jojy Alphonso](https://www.drupal.org/u/jojyja) at
[Red Crackle](http://redcrackle.com).
Translated by [Takashi Kabetani](https://www.drupal.org/u/kabetani).
Reviewed by [Hayato Goto](https://www.drupal.org/u/hgoto).
