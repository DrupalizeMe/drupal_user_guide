---
title: "Mengelola Revisi Berkas dan Konfigurasi dengan Git"
description: "Cara mengelola revisi berkas dan konfigurasi dengan alat kontrol revisi Git."
id: "extend-git"
translation_key: "extend-git"
source_locale: "id"
---
## Tujuan { #extend-git }

Gunakan alat kontrol revisi Git untuk mengelola revisi berkas dan konfigurasi
pada situs Anda.
## Pengetahuan prasyarat

* [install-tools](./install-tools.md)
* [install-decide](./install-decide.md)
* [install-dev-sites](./install-dev-sites.md)
* Cara menyiapkan repositori Git dan menemukan URL _clone_-nya. Sebagai contoh,
  jika Anda ingin menggunakan GitLab untuk meng-host repositori Anda, lihat
  [halaman GitLab "Membuat proyek"](https://docs.gitlab.com/ee/gitlab-basics/create-project.html)
  dan
  [halaman GitLab "Perintah dasar Baris Perintah"](https://docs.gitlab.com/ee/gitlab-basics/command-line-commands.html).
  Jika Anda ingin menggunakan GitHub untuk meng-host repositori Anda, lihat
  [halaman GitHub "Membuat repositori"](https://help.github.com/en/articles/create-a-repo)
  dan
  [halaman GitHub "URL remote mana yang harus saya gunakan"](https://help.github.com/en/articles/which-remote-url-should-i-use).
* Cara membuka dan menggunakan jendela terminal perintah serta editor teks
  biasa.
* Untuk mengelola konfigurasi, cara mengekstrak dan membuat arsip berkas
  (seperti _.zip_ dan _.tar.gz_).
## Prasyarat situs

* Anda harus telah mengunduh perangkat lunak untuk situs menggunakan salah satu
  metode di [install-decide](./install-decide.md). Jika ingin mengelola konfigurasi, Anda harus
  telah menginstal perangkat lunak dan memiliki situs yang berjalan.
* Perangkat lunak klien Git harus terinstal pada server situs Anda. Lihat
  [Git](https://git-scm.com/) untuk petunjuk.
* Anda harus memiliki repositori baru yang telah dibuat dan mengetahui URL clone
  Git-nya.
## Langkah-langkah
### Menginisialisasi repositori

Lakukan langkah-langkah ini sekali saja, setelah membuat repositori Git, untuk
menghubungkan direktori lokal Anda dengan repositori dan menambahkan berkas awal
ke dalamnya.

1. Buka jendela terminal perintah dan pindah ke direktori tempat berkas situs
    Anda berada. Ini adalah direktori "teratas" Anda.
1. Tentukan lokasi akar web Anda. Jika direktori _core_, _modules_, dan _themes_
    berada langsung di direktori ini, berarti Anda berada di akar web. Jika Anda
    telah menggunakan Composer untuk mengunduh perangkat lunak, berkas-berkas ini
    berada di dalam subdirektori _web_ (yang merupakan akar web Anda).
1. Dalam editor teks biasa, buat berkas baru bernama _.gitignore_ di direktori
    teratas (atau edit jika sudah ada). Berkas ini berisi daftar berkas dan
    direktori yang harus diabaikan oleh Git (tidak ditambahkan ke repositori).
    Sebagai contoh,
    berkas _settings.php_ untuk situs Anda tidak boleh ditambahkan ke Git karena
    berisi informasi akun database Anda, dan berkas media yang diunggah ke situs
    Anda (biasanya di _sites/default/files_) juga tidak boleh ada di Git --
    tujuannya adalah menyimpan perangkat lunak di repositori, bukan konten situs.
1. Pastikan baris berikut ada dalam berkas _.gitignore_. Jika akar web bukan
    direktori teratas, periksa masing-masing untuk mengetahui apakah memerlukan
    awalan. Sebagai contoh, _sites_ mungkin perlu diganti dengan _web/sites_.
    ```text
    sites/*/settings*.php
    sites/*/files
    config
    ```
1. Masukkan perintah berikut:
    ```text
    git init
    git add -A
    ```
1. Secara opsional, verifikasi daftar berkas yang akan Anda tambahkan ke
    repositori Git dengan memasukkan perintah ini dan menggulir daftar (yang sangat
    panjang):
    ```text
    git status
    ```
1. Masukkan perintah berikut. Anda dapat mengganti "Initial file add" dengan
    _pesan commit_ Anda sendiri jika diinginkan, dan Anda harus mengganti URL clone
    Git Anda sendiri dengan URL pada perintah kedua:
    ```text
    git commit -m "Initial file add"
    git remote add origin https://gitlab.com/example-name/example-repo.git
    git push -u origin master
    ```
1. Jika Anda menggunakan GitLab, GitHub, atau host lain dengan akses daring,
    Anda kini dapat membuka halaman repositori dan melihat bahwa berkasnya ada di
    sana.
### Memperbarui berkas dalam repositori

Gunakan langkah-langkah ini setelah Anda memperbarui, menambahkan, atau
menghapus satu atau beberapa berkas di situs Anda untuk mengirim perubahan
(_push_) ke repositori.

1. Buka jendela terminal perintah dan pindah ke direktori tempat berkas situs
    Anda berada.
1. Periksa daftar berkas yang telah ditambahkan, diubah, atau dihapus:
    ```text
    git status
    ```
1. Secara opsional, untuk berkas teks yang telah diubah (bukan gambar), lihat
    perbedaan antara versi baru dan lama berkas:
    ```text
    git diff path/to/file.txt
    ```
1. Stage semua perubahan untuk commit berikutnya dan verifikasi bahwa perubahan
    tersebut telah di-stage:
    ```text
    git add -A
    git status
    ```
1. Anda dapat menghilangkan berkas tertentu dari commit yang telah Anda stage,
    atau menambahkan berkas lain ke berkas yang telah Anda stage. Jika berkas atau
    direktori tertentu terus ditambahkan secara tidak sengaja, pertimbangkan untuk
    menambahkannya ke berkas _.gitignore_ agar diabaikan oleh Git. Perintah
    menghilangkan/menambahkan:
    ```text
    git reset HEAD path/to/file.txt
    git add path/to/file.txt
    ```
1. Commit dan push perubahan Anda. Ganti pesan commit dengan sesuatu yang
    bermakna:
    ```text
    git commit -m "commit message here"
    git push
    ```
1. Jika Anda memiliki salinan lain dari repositori, perbarui salinan tersebut
    dengan membuka jendela perintah di direktori setiap salinan dan menjalankan
    perintah berikut:
    ```text
    git pull
    ```
### Membuat salinan berkas dalam repositori Anda

Ikuti langkah-langkah ini jika Anda ingin menyalin semua berkas dalam repositori
ke lokasi baru. Sebagai contoh, Anda mungkin memiliki salinan pengembangan lokal
dan situs produksi, atau beberapa anggota tim mungkin semuanya memiliki salinan
lokal situs.

1. Buka jendela perintah di lokasi tempat Anda ingin meletakkan berkas.
1. Masukkan perintah berikut, dengan mengganti URL clone repositori Anda untuk
    URL dan nama subdirektori tempat Anda ingin menyimpan berkas untuk _dirname_:
    ```text
    git clone https://gitlab.com/example-name/example-repo.git dirname
    ```
### Mengelola konfigurasi dalam repositori

1. Ikuti petunjuk di [extend-config-versions](./extend-config-versions.md) untuk mengekspor arsip lengkap
    konfigurasi situs Anda.
1. Jika belum menginisialisasi konfigurasi dalam repositori, ekstrak arsip
    konfigurasi ke direktori baru, sebaiknya di atas direktori akar web, dan ikuti
    petunjuk di atas untuk menambahkan berkas ini ke repositori.
1. Setelah inisialisasi, setiap kali konfigurasi situs berubah, ekspor dan
    ekstrak arsip konfigurasi di lokasi yang sama. Ikuti petunjuk di atas untuk
    memperbarui berkas ini dalam repositori.
1. Untuk mengimpor konfigurasi yang diperbarui ke situs lain, buat arsip
    direktori konfigurasi dari repositori. Kemudian ikuti petunjuk di
    [extend-config-versions](./extend-config-versions.md) untuk mengunggah dan mengimpor arsip ini ke dalam
    situs.
## Konsep terkait

[install-dev-sites](./install-dev-sites.md)

*Atribusi*

Diadaptasi dan disunting oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
dari ["Membangun situs Drupal dengan Git"](https://www.drupal.org/node/803746),
hak cipta 2000-2026 oleh kontributor individu pada
[Dokumentasi Komunitas Drupal](https://www.drupal.org/documentation).
