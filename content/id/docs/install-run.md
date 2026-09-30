---
title: "Menjalankan Pemasang Interaktif"
description: "Cara menggunakan pemasang interaktif untuk menginstal perangkat lunak inti."
id: "install-run"
translation_key: "install-run"
source_locale: "id"
---
## Tujuan { #install-run }

Instal perangkat lunak inti dan buat akun admin dengan menjalankan pemasang yang
disertakan.
## Prasyarat situs

[install-prepare](./install-prepare.md)

Perhatikan bahwa jika Anda mengikuti petunjuk di [install-ddev](./install-ddev.md), perangkat
lunak inti sudah diinstal. Jika ingin menginstal perangkat lunak inti kembali,
Anda dapat menjalankan perintah `ddev drush sql:drop` lalu mengikuti petunjuk di
bawah ini.
## Langkah-langkah

1. Jika Anda menggunakan instalasi 1-klik dari penyedia hosting atau situs demo,
    kemungkinan besar Anda akan melihat sebagian atau seluruh layar berikut sebagai
    bagian dari proses instalasi. Jika mengunggah berkas inti secara manual atau
    menggunakan Composer, untuk memulai pemasang, buka peramban dan kunjungi URL
    yang Anda siapkan untuk hosting Anda.
1. Pilih bahasa pada halaman pertama pemasang; misalnya, bahasa Inggris. Anda
    juga dapat memilih salah satu bahasa lain yang tercantum. Berkas bahasa untuk
    bahasa
    yang dipilih akan diunduh dan diinstal sehingga sisa proses instalasi dapat
    diselesaikan dalam bahasa tersebut. Setelah memilih bahasa, klik _Simpan dan
    lanjutkan_.
    <img src="/images/install-run-1.png" alt="Pilih bahasa" width="100%" />
1. Pilih profil instalasi. Profil instalasi menyediakan fitur dan fungsi situs
    untuk jenis situs tertentu sebagai satu unduhan yang berisi perangkat lunak
    inti,
    modul kontribusi, tema, dan konfigurasi yang telah ditentukan. Inti memiliki dua
    profil instalasi. Pilih profil instalasi Standard dari inti. Klik _Simpan dan
    lanjutkan_.
    <img src="/images/install-run-2.png" alt="Pilih profil instalasi" width="100%" />
1. Langkah berikutnya dalam pemasang akan memverifikasi bahwa sistem Anda
    memenuhi persyaratan minimum. Jika tidak, Anda akan melihat ringkasan hal-hal
    yang perlu diperbaiki agar dapat melanjutkan. Jika ya, pemasang akan otomatis
    melanjutkan ke
    langkah berikutnya.
1. Masukkan rincian basis data yang Anda buat dalam bab [install-prepare](./install-prepare.md).
    Lalu, klik _Simpan dan lanjutkan_.
    <table>
      <thead>
        <tr>
          <th>Nama bidang</th>
          <th>Penjelasan</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nama basis data</td>
          <td>Nama khusus yang diberikan untuk basis data</td>
          <td>drupal</td>
        </tr>
        <tr>
          <td>Nama pengguna basis data</td>
          <td>Nama pengguna yang dibuat</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Kata sandi basis data</td>
          <td>Kata sandi yang dipilih</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.png" alt="Formulir konfigurasi basis data" width="100%" />

1. Langkah berikutnya akan menampilkan bilah kemajuan di bawah judul _Menginstal
    Drupal_. Setelah pemasang selesai, pemasang akan otomatis melanjutkan ke langkah
    berikutnya.
    <img src="/images/install-run-4.png" alt="Bilah kemajuan instalasi" width="100%" />
1. Langkah berikutnya adalah mengonfigurasi beberapa informasi dasar tentang
    situs baru Anda (perhatikan juga jika ada peringatan tentang izin berkas, untuk
    langkah selanjutnya). Perhatikan bahwa akun pengguna yang dibuat dalam langkah
    ini adalah
    akun admin situs. Lihat [user-admin-account](./user-admin-account.md) untuk informasi penting tentang
    akun unik ini. Anda dapat dengan aman menamai akun ini "admin", dan pastikan
    untuk memilih kata sandi yang aman dan unik.
    Isi formulir dengan informasi berikut:
    <table>
      <thead>
        <tr>
          <th>Nama bidang</th>
          <th>Penjelasan</th>
          <th>Nilai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nama situs</td>
          <td>Nama yang dipilih untuk situs</td>
          <td>Anytown Farmers Market</td>
        </tr>
        <tr>
          <td>Alamat email situs</td>
          <td>Email yang terkait dengan situs</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>Nama pengguna</td>
          <td>Kredensial pengguna yang ditetapkan</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Kata sandi</td>
          <td>Kata sandi yang dipilih</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Konfirmasi kata sandi</td>
          <td>Ulangi kata sandi</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Alamat email</td>
          <td>Email pengguna</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    Kolom lainnya kemungkinan dapat dibiarkan dengan nilai bawaannya.
    <img src="/images/install-run-5.png" alt="Formulir konfigurasi" width="100%" />

1. Klik _Simpan dan lanjutkan_.
1. Anda akan dialihkan ke halaman depan situs baru Anda dan akan melihat pesan
    _Selamat, Anda telah menginstal Drupal!_ ditampilkan di bagian atas halaman.
    <img src="/images/install-run-6.png" alt="Instalasi berhasil" width="100%" />
1. Anda mungkin melihat peringatan pada langkah Konfigurasi tentang izin berkas,
    dan mungkin terus melihat peringatan ini hingga Anda memperbaiki izinnya. Untuk
    menghindari peringatan dan membuat situs lebih aman, ubah izin pada direktori
    _sites/default_ dan berkas _sites/default/settings.php_ menjadi hanya-baca (Anda
    mungkin perlu melihat dokumentasi perusahaan hosting untuk mengetahui caranya).
## Perluas pemahaman Anda

Sebagai alternatif, Anda dapat menginstal perangkat lunak menggunakan Drush,
bukan UI. Gunakan perintah Drush berikut, dari dalam direktori tempat Anda
mengunduh perangkat lunak, dengan _DB_NAME_, _DB_USER_, dan _DB_PASS_ sebagai
kredensial basis data Anda:

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```

Periksa Laporan Status untuk mengetahui apakah ada masalah dengan instalasi.
Lihat [prevent-status](./prevent-status.md).
## Konsep terkait

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Video

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/LGfRKKKDjv8" title="Menjalankan Pemasang" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Sumber daya tambahan

* [Halaman dokumentasi komunitas _Drupal.org_ "Membuat basis data"](https://www.drupal.org/docs/installing-drupal/step-3-create-a-database)
* [Bagian dokumentasi komunitas _Drupal.org_ "Masalah webhosting"](https://www.drupal.org/server-permissions)

*Atribusi*

Ditulis dan disunting oleh [Joe Shindelar](https://www.drupal.org/u/eojthebrave) di
[Drupalize.Me](https://drupalize.me),
dan [Jojy Alphonso](https://www.drupal.org/u/jojyja) di
[Red Crackle](http://redcrackle.com).
