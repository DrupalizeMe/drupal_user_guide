---
title: "Konvensi Panduan"
description: "Memahami konvensi yang digunakan dalam panduan ini."
id: "preface-conventions"
translation_key: "preface-conventions"
source_locale: "id"
---
## Asumsi dan prasyarat { #preface-conventions }

Panduan ini memiliki asumsi dan prasyarat berikut:

* Panduan ini mencakup versi mayor terkini dari perangkat lunak inti.
* Panduan ini disusun dalam topik; lihat [preface-organization](./preface-organization.md) untuk
  perinciannya. Banyak topik menyertakan bagian _Pengetahuan prasyarat_, yang
  memuat topik lain dengan pengetahuan konten yang diperlukan untuk memahami
  topik yang sedang Anda baca. Beberapa pengetahuan dasar yang tidak dicakup
  dalam panduan ini juga diasumsikan sudah Anda miliki; lihat
  [preface-audience](./preface-audience.md) untuk perinciannya.
* Banyak topik tugas mencantumkan _Prasyarat situs_, yaitu tugas yang harus
  sudah Anda selesaikan di situs sebelum dapat melakukan tugas dalam topik yang
  sedang dibaca.
* Perincian prasyarat situs terkait dengan skenario yang digunakan di seluruh
  panduan ini, yaitu membangun situs untuk pasar petani (lihat
  [preface-scenario](./preface-scenario.md) untuk perinciannya). Anda dapat menyesuaikan tugas dengan
  skenario sendiri, tetapi juga perlu mengingat perubahan yang dibuat ketika
  menentukan apakah situs memenuhi prasyarat situs untuk suatu tugas.
* Untuk semua topik tugas setelah [install-run](./install-run.md), terdapat pula prasyarat
  tersirat: Anda harus telah menginstal versi stabil terbaru perangkat lunak
  manajemen konten di situs dan masuk ke akun pengguna dengan izin yang cukup
  untuk melakukan tugas (misalnya, akun pengguna yang dibuat saat menginstal
  situs, yang secara otomatis memiliki izin penuh).
* Jika membaca semua topik secara berurutan dan menjalankan semua langkah dalam
  topik tugas sambil membacanya (tetap masuk), Anda seharusnya memiliki
  pengetahuan dasar dan prasyarat situs yang diperlukan untuk setiap topik saat
  membacanya.
* Panduan ini menunjukkan cara melakukan tugas menggunakan antarmuka pengguna
  administratif dan, jika memungkinkan, juga menggunakan versi stabil terbaru
  alat baris perintah Drush (lihat [install-tools](./install-tools.md)). Anda bebas hanya
  menggunakan antarmuka administratif, sesuai preferensi.
## Konvensi teks

Konvensi berikut digunakan dalam teks panduan ini:

* URL _example.com_ berarti URL dasar situs web Anda. Lihat bagian Navigasi di
  bawah untuk perincian lebih lanjut tentang cara menunjukkan URL internal
  situs.
* Teks yang seharusnya Anda lihat di antarmuka pengguna situs ditampilkan dalam
  _cetak miring_, misalnya: Klik _Simpan konfigurasi_. Hal ini hanya berlaku
  untuk teks di antarmuka pengguna yang berasal dari perangkat lunak, bukan teks
  yang dimasukkan pada topik sebelumnya. Misalnya, dalam topik tentang
  penyuntingan, Anda mungkin melihat instruksi ini: Klik _Sunting_ pada baris
  halaman About (_Sunting_ akan dicetak miring, tetapi About tidak, karena
  halaman About dibuat pada topik sebelumnya).
* URL, nama berkas, dan terminologi yang baru diperkenalkan juga ditampilkan
  dalam _cetak miring_.
* Teks yang harus diketik pada baris perintah shell ditampilkan dalam huruf
  monospace, misalnya:
```text
drush cache:rebuild
```
* Dalam panduan ini, kata _direktori_ selalu digunakan untuk merujuk ke
  direktori berkas (yang oleh sebagian orang lebih disukai disebut _folder_).
## Navigasi

Untuk melakukan sebagian besar topik tugas dalam panduan ini, Anda perlu
menavigasi ke satu atau beberapa halaman pada antarmuka administratif situs.
Anda mungkin melihat instruksi seperti ini (instruksi ini akan lebih masuk akal
setelah perangkat lunak dasar terinstal):

> Dalam menu administratif _Kelola_, buka
> _Struktur_ > _Taksonomi_ (_admin/structure/taxonomy_).

Petunjuk navigasi seperti ini mengasumsikan bahwa Anda telah menginstal modul
Toolbar inti. Contoh ini berarti bahwa pada bilah menu di bagian atas situs,
Anda perlu mengeklik _Kelola_ untuk menampilkan pilihan menu, lalu mengeklik
_Struktur_, kemudian _Taksonomi_. Pada akhirnya, Anda berada di halaman dengan
URL _http://example.com/admin/structure/taxonomy_ (jika URL dasar situs adalah
_http://example.com_).

<img src="/images/preface-conventions-top-menu.png" alt="Menu administratif" width="100%" />

Berikut contoh lainnya:

> Dalam menu administratif _Kelola_, buka
> _Konfigurasi_ > _Sistem_ > _Pengaturan situs dasar_
> (_admin/config/system/site-information_).

Dalam contoh ini, setelah mengeklik _Kelola_ dan _Konfigurasi_, Anda perlu
menemukan bagian _Sistem_ pada halaman, lalu mengeklik _Pengaturan situs dasar_
di dalamnya. Setelah itu, Anda akan berada di
_http://example.com/admin/config/system/site-information_.

![Bagian _Sistem_ pada halaman Konfigurasi](/images/preface-conventions-config-system.png)

Satu catatan lain: jika menggunakan tema Seven administratif inti standar,
banyak tombol "Tambah" pada antarmuka administratif ditampilkan dengan tanda +.
Misalnya, pada admin/content, tombol Tambah konten baru tampil sebagai
_&#43; Tambah konten baru_. Namun, hal ini bergantung pada tema dan sebenarnya bukan
bagian dari teks tombol (misalnya, belum tentu dibacakan oleh pembaca layar).
Oleh karena itu, dalam panduan ini, konvensinya adalah tidak menyebutkan tanda +
pada tombol.
## Mengisi formulir

Banyak topik tugas dalam panduan ini menyertakan langkah untuk mengisi formulir
web. Dalam kebanyakan kasus, gambar tangkapan layar formulir akan disertakan,
bersama tabel nilai yang perlu dimasukkan ke setiap kolom formulir. Misalnya,
Anda mungkin melihat tabel yang dimulai seperti ini, yang menjelaskan formulir
informasi situs yang terlihat jika membuka _Konfigurasi_ > _Sistem_ >
_Informasi situs_ (_admin/config/system/site-information_):

| Nama bidang | Penjelasan | Contoh nilai |
| --- | --- | --- |
| Detail situs > Nama situs | Nama situs Anda | Pasar Petani Anytown |

Untuk menggunakan tabel ini, temukan kolom berlabel _Nama situs_ di bagian
_Detail situs_ pada formulir, lalu masukkan nama situs Anda ke kolom tersebut.
Nama situs contoh "Pasar Petani Anytown" disarankan dalam tabel, yang terkait
dengan skenario membangun situs web untuk pasar petani yang ditemukan di seluruh
panduan ini (lihat [preface-scenario](./preface-scenario.md) untuk perinciannya). Perhatikan juga
bahwa pada beberapa formulir, Anda mungkin perlu mengeklik judul bagian (seperti
_Detail situs_ dalam contoh ini) untuk memperluas bagian dan menemukan kolom
yang dikandungnya.

*Atribusi*

Ditulis/disunting oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
