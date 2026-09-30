---
title: "Menggunakan Composer untuk Mengunduh dan Memperbarui Berkas"
description: "Cara menggunakan alat Composer untuk mengelola berkas dalam perangkat lunak inti serta modul dan tema tambahan."
id: "install-composer"
translation_key: "install-composer"
source_locale: "id"
---
## Tujuan { #install-composer }

Gunakan Composer untuk mengunduh atau memperbarui berkas dan dependensi dalam
perangkat lunak inti, atau dalam modul dan tema tambahan.
## Pengetahuan prasyarat

[install-tools](./install-tools.md)
## Prasyarat situs

Jika ingin menggunakan Composer, Composer harus diinstal pada server
pengembangan lokal atau situs langsung Anda. Lihat [install-tools](./install-tools.md).
## Langkah-langkah

Jika Anda tidak dapat menginstal alat Composer pada server langsung, Anda dapat
mengikuti langkah-langkah di salah satu bagian di bawah ini pada server lokal,
lalu memindahkan berkas yang diperbarui atau ditambahkan ke server langsung.
Prosedur yang direkomendasikan adalah membuat arsip atau berkas zip dari
direktori baru dan yang berubah, memindahkan arsip tersebut ke server langsung,
menghapus direktori yang berubah, lalu mengekstrak arsip. Pastikan untuk
memeriksa pembaruan dan penambahan pada berkas berikut, di akar instalasi Anda:

* direktori _vendor_
* _autoload.php_
* _composer.json_
* _composer.lock_
### Menggunakan Composer untuk mengunduh perangkat lunak inti

Ikuti langkah-langkah ini jika Anda belum mengunduh atau menginstal perangkat
lunak inti, dan ingin menggunakan Composer untuk mengunduh perangkat lunak inti
beserta dependensi eksternalnya:

1. Pada baris perintah, pindah ke satu tingkat di atas direktori tempat perangkat
    lunak akan berada.
1. Masukkan perintah ini, dengan _mydir_ sebagai direktori yang ingin Anda buat:
    ```text
    composer create-project drupal/recommended-project mydir
    ```
1. Rilis terbaru perangkat lunak inti akan diunduh ke subdirektori _mydir/web_.
### Menggunakan Composer untuk mengunduh modul atau tema

Ikuti langkah-langkah ini jika Anda sudah menggunakan Composer untuk mengelola
perangkat lunak inti dan ingin menggunakan Composer untuk menambahkan modul
atau tema kontribusi beserta dependensinya.

1. Setiap kali ingin menambahkan modul atau tema kontribusi, tentukan nama
    singkat proyeknya. Nama ini adalah bagian terakhir URL halaman proyek; misalnya,
    modul Geofield di https://www.drupal.org/project/geofield memiliki nama singkat
    `geofield`.
1. Untuk mengunduh modul atau tema kontribusi beserta dependensi eksternalnya,
    masukkan perintah berikut di akar situs Anda (ganti `geofield` dengan nama
    singkat
    modul atau tema):
    ```text
    composer require drupal/geofield
    ```
### Menggunakan Composer untuk memperbarui berkas yang telah diunduh

Ikuti langkah-langkah ini untuk memperbarui berkas perangkat lunak inti atau
modul atau tema kontribusi, setelah mulai mengelola dependensi dengan Composer:

1. Tentukan nama singkat proyek yang ingin diperbarui. Untuk perangkat lunak
    inti, namanya adalah _core_. Untuk modul dan tema kontribusi, nama ini adalah
    bagian terakhir URL halaman proyek; misalnya, modul Geofield di
    https://www.drupal.org/project/geofield memiliki nama singkat `geofield`.
1. Jika ingin memperbarui ke rilis stabil terbaru, gunakan perintah berikut,
    dengan `geofield` diganti nama singkat proyek yang akan diperbarui:
    ```text
    composer update drupal/geofield --with-dependencies
    ```
1. Jika membutuhkan versi tertentu, tentukan cara memasukkan nomor versi yang
    ingin Anda gunakan untuk memperbarui. Misalnya, untuk versi 8.x-1.16 dari modul
    kontribusi, cukup masukkan 1.16, dan untuk perangkat lunak inti versi 9.0.7,
    masukkan 9.0.7. Kemudian, masukkan perintah berikut di akar situs Anda (ganti
    `geofield` dengan nama singkat proyek dan nomor versi yang benar):
    ```text
    composer require drupal/geofield:1.16
    ```
## Perluas pemahaman Anda

Anda dapat mempelajari lebih lanjut tentang perintah Composer dengan menggunakan
sistem bantuan bawaan Composer. Misalnya, untuk mempelajari lebih lanjut tentang
perintah `create-project`, masukkan `composer help create-project` di jendela
perintah Anda.
## Video

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/v-WeFthdmD4" title="Menggunakan Composer dan Git untuk Mengunduh Berkas" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Sumber daya tambahan

* [Halaman dokumentasi komunitas _Drupal.org_ "Menggunakan Composer untuk mengelola dependensi situs Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies)
* [Halaman dokumentasi komunitas _Drupal.org_ "Memperbarui inti Drupal melalui Composer"](https://www.drupal.org/docs/updating-drupal/update-drupal-core-via-composer)
* [Halaman dokumentasi komunitas _Drupal.org_ "Menambahkan Composer ke situs yang sudah ada"](https://www.drupal.org/docs/installing-drupal/add-composer-to-an-existing-site)

*Atribusi*

Diadaptasi oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
[Hans Fredrik Nordhaug](https://www.drupal.org/u/hansfn), dan
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) di
[Drupalize.Me](https://drupalize.me) dari
["Menggunakan Composer untuk mengelola dependensi situs Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-to-manage-drupal-site-dependencies),
hak cipta 2000-2026 oleh para kontributor individu pada
[Dokumentasi Komunitas Drupal](https://www.drupal.org/documentation).
