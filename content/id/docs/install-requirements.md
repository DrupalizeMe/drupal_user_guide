---
title: "Konsep: Persyaratan Server"
description: "Gambaran umum persyaratan server untuk memasang dan menjalankan perangkat lunak inti."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "id"
---
## Apa saja persyaratan untuk menjalankan perangkat lunak inti? { #install-requirements }
### Ruang disk

Jumlah total ruang disk yang diperlukan situs Anda tidak tetap karena bergantung
pada situs Anda. Berkas dasar perangkat lunak inti menggunakan sekitar 100 MB
di server web. Anda akan membutuhkan lebih banyak ruang jika memasang modul atau
tema tambahan, serta memerlukan ruang untuk media, cadangan, dan berkas lain
yang dibuat oleh dan diunggah ke situs Anda. Basis data juga menggunakan ruang
disk, meskipun biasanya tidak di area yang sama (atau, dalam beberapa kasus,
bahkan tidak di server yang sama) dengan yang digunakan oleh berkas situs.
### PHP

PHP 8.3 atau versi PHP 8 yang lebih tinggi. PHP harus dikonfigurasi dengan
memori minimal 64MB; jika Anda menjalankan banyak modul di situs atau
menggunakan
alat baris perintah berbasis PHP yang membutuhkan banyak memori (seperti
Composer), Anda mungkin memerlukan memori yang jauh lebih besar.

Ekstensi PHP tertentu juga diperlukan; daftar pasti ekstensi PHP yang diperlukan
bergantung pada cara Anda memasang perangkat lunak inti dan modul yang digunakan
di situs Anda. Umumnya, penyedia layanan hosting telah memasang semua ekstensi
PHP yang Anda perlukan. Jika Anda menghosting sendiri atau menjalankan situs di
komputer lokal, Anda akan menerima pesan kesalahan selama pemasangan jika ada
ekstensi PHP yang diperlukan tidak tersedia. Anda seharusnya dapat memasangnya
lalu melanjutkan. Lihat
[Persyaratan PHP](https://www.drupal.org/docs/getting-started/system-requirements/php-requirements)
untuk daftar lengkap persyaratan.
### Server web

- **Apache (Direkomendasikan):** Apache adalah server web yang paling umum digunakan. Perangkat lunak inti akan berfungsi pada Apache 2.4.7 atau yang lebih tinggi yang dihosting di UNIX/Linux, OS X, atau Windows dengan modul Apache mod_rewrite telah dipasang dan diaktifkan. Konfigurasi Apache VirtualHost harus memuat direktif _AllowOverride All_ agar berkas _.htaccess_ dapat digunakan.
- **Server Lokal PHP:** Anda dapat menjalankan sementara situs demo lokal di komputer hanya dengan menggunakan PHP, tanpa memasang perangkat lunak server web.
- **Nginx:** Nginx adalah server web yang umum digunakan dengan fokus pada konkurensi tinggi, kinerja, dan penggunaan memori rendah. Perangkat lunak inti akan berfungsi pada Nginx 0.7 atau yang lebih tinggi yang dihosting di UNIX/Linux, OS X, atau Windows. ngx_http_rewrite_module harus dipasang dan diaktifkan.
### Basis data

Gunakan salah satu basis data berikut:

* MySQL - 8.0+ (MariaDB 10.6+, Percona 8.0+) atau lebih tinggi dengan mesin
penyimpanan utama yang kompatibel dengan InnoDB
* PostgreSQL - 16 atau lebih tinggi dengan ekstensi pg_trgm
* SQLite - 3.45 atau lebih tinggi. Situs demo lokal sementara menggunakan
SQLite,
yang didistribusikan sebagai bagian dari PHP dan tidak memerlukan pemasangan
perangkat lunak basis data terpisah, tetapi pastikan versi PHP Anda menyertakan
versi minimum SQLite.
## Sumber daya tambahan

* [Halaman dokumentasi komunitas _Drupal.org_ "Persyaratan sistem"](https://www.drupal.org/docs/system-requirements)
* [Konfigurasi Runtime PHP (batas memori PHP dan pengaturan lainnya)](https://secure.php.net/manual/en/configuration.php)
* [Memasang aplikasi Drupal baru di komputer lokal Anda](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Membuat aplikasi demo Drupal untuk tujuan evaluasi](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Attributions*

Diadaptasi oleh [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987), dan
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), serta
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) di [Drupalize.Me](https://drupalize.me)
dari ["Persyaratan sistem"](https://www.drupal.org/docs/system-requirements),
hak cipta 2000-2026 oleh para kontributor individu untuk
[Dokumentasi Komunitas Drupal](https://www.drupal.org/documentation).
