---
title: "Menyiapkan Lingkungan dengan DDEV"
description: "Cara menyiapkan situs pengembangan menggunakan DDEV, lingkungan pengembangan lokal untuk aplikasi PHP."
id: "install-ddev"
translation_key: "install-ddev"
source_locale: "id"
---
## Tujuan { #install-ddev }

Menyiapkan lingkungan pengembangan lokal menggunakan DDEV untuk menjalankan
aplikasi dan Composer untuk mengunduh berkas yang diperlukan.
## Pengetahuan prasyarat

[install-requirements](./install-requirements.md)
[install-composer](./install-composer.md)
## Mengapa menggunakan DDEV?

DDEV adalah lingkungan pengembangan lokal untuk aplikasi PHP yang dibangun di
atas Docker. Lingkungan ini mencakup semua komponen yang diperlukan untuk
menjalankan perangkat lunak inti dan digunakan oleh banyak pengembang dalam
komunitas Drupal.
## Langkah-langkah

1. Ikuti
    [petunjuk instalasi resmi DDEV](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/)
    untuk menginstal DDEV pada komputer lokal Anda. DDEV tersedia untuk Windows,
    Mac, dan Linux. Proses instalasinya berbeda untuk setiap sistem operasi, jadi
    pastikan Anda mengikuti petunjuk untuk OS Anda.
1. Setelah menginstal DDEV, ikuti
    [petunjuk Memulai Cepat Drupal](https://ddev.readthedocs.io/en/stable/users/quickstart/#drupal)
    untuk mengunduh perangkat lunak inti menggunakan Composer dan menginstalnya di
    lingkungan DDEV.
1. Jalankan perintah `ddev launch` dari direktori yang dibuat pada langkah
    sebelumnya untuk membuka situs di peramban web Anda dan memastikan lingkungan
    berfungsi dengan benar.
## Topik terkait

* [install-requirements](./install-requirements.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Sumber daya tambahan

* [Dokumentasi DDEV](https://ddev.readthedocs.io/en/stable/)
* [Menginstal Drupal menggunakan DDEV untuk pengembangan lokal](https://www.drupal.org/docs/getting-started/installing-drupal/install-drupal-using-ddev-for-local-development)

*Atribusi*

Ditulis dan disunting oleh
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) di
[Drupalize.Me](https://drupalize.me).
