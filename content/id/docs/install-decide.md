---
title: "Konsep: Metode untuk Mengunduh dan Menginstal Perangkat Lunak Inti"
description: "Gambaran umum metode yang dapat Anda gunakan untuk mengunduh perangkat lunak inti."
id: "install-decide"
translation_key: "install-decide"
source_locale: "id"
---
## Pengetahuan prasyarat { #install-decide }

* [install-tools](./install-tools.md)
* [install-requirements](./install-requirements.md)
* [understanding-distributions](./understanding-distributions.md)
## Metode apa yang tersedia untuk mengunduh perangkat lunak inti?

Sebelum dapat membangun situs, Anda harus terlebih dahulu mengunduh perangkat
lunak inti. Bergantung pada rencana Anda, ada beberapa cara untuk mengunduh
perangkat lunak inti:

- **Gunakan Composer:** Jika Anda berencana membangun situs dan terus mengembangkannya dari waktu ke waktu, sebaiknya gunakan Composer untuk mengunduh perangkat lunak inti karena Composer akan mengelola dependensi dengan tepat. Jika Anda berencana menggunakan alat Drush (lihat [install-tools](./install-tools.md)), penggunaan Composer diperlukan. Lihat [install-composer](./install-composer.md) untuk petunjuk.
- **Cobalah demo daring gratis:** Jika Anda sedang mengevaluasi apakah akan menggunakan Drupal untuk membangun situs, Anda dapat menggunakan penyedia daring untuk mendapatkan instalasi demo perangkat lunak inti dalam waktu 20 menit atau kurang. Lihat halaman [_Drupal.org_ "Coba Drupal"](https://www.drupal.org/try-drupal).
- **Gunakan penginstal sekali klik dari penyedia hosting Anda:** Jika Anda memilih untuk menginstal perangkat lunak inti di penyedia hosting, penyedia hosting tersebut mungkin memiliki dokumentasi khusus dan/atau penginstalan sekali klik yang dapat Anda gunakan. Lihat [daftar penyedia hosting yang mendukung Drupal di _Drupal.org_](https://www.drupal.org/hosting).
- **Gunakan lingkungan yang telah dikonfigurasi:** Gunakan lingkungan atau mesin virtual yang telah dikonfigurasi, yang berisi Drupal dan semua perangkat lunak pendukung yang diperlukan, untuk menginstal Drupal secara lokal. Lihat bagian untuk sistem operasi Anda di [halaman dokumentasi komunitas _Drupal.org_ "Panduan penyiapan server lokal"](https://www.drupal.org/docs/develop/local-server-setup) untuk mengetahui pilihan yang tersedia.
## Apa yang terjadi ketika saya menginstal perangkat lunak inti?

_Menginstal_ perangkat lunak inti berarti menyiapkan beberapa tabel database,
konfigurasi, dan akun pengguna administratif agar Anda dapat membangun dan
menggunakan situs.
## Metode apa yang tersedia untuk menginstal perangkat lunak inti?

Ada beberapa cara untuk menginstal perangkat lunak inti:

- **Penginstal di balik layar:** Jika Anda memilih menggunakan demo daring atau penginstal sekali klik dari penyedia hosting, perangkat lunak inti mungkin diinstal secara otomatis untuk Anda.
- **Penginstal interaktif:** Perangkat lunak inti memiliki penginstal interaktif yang menyajikan beberapa formulir daring, lalu menyelesaikan penginstalan menggunakan informasi yang Anda masukkan dalam formulir tersebut. Lihat [install-prepare](./install-prepare.md) dan [install-run](./install-run.md).
- **Alat baris perintah:** Alat baris perintah (lihat [install-tools](./install-tools.md)) juga dapat digunakan untuk melakukan langkah penginstalan.
- **Penginstal situs demo:** Buat situs demo sementara dengan cepat yang menggunakan server web bawaan dan database SQLite, yang merupakan bagian dari PHP, dengan menjalankan perintah berikut dari direktori akar proyek. Dalam kasus ini, Anda tidak akan menjalankan penginstal interaktif. Lihat [Panduan Evaluator](https://www.drupal.org/docs/official_docs/evaluator-guide) untuk mempelajari lebih lanjut.

```text
  php -d memory_limit=256M core/scripts/drupal quick-start demo_umami
```

*Atribusi*

Ditulis dan disunting oleh [Drew Gorton](https://www.drupal.org/u/dgorton),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) di
[erdfisch](https://erdfisch.de),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon),
dan [Jojy Alphonso](https://www.drupal.org/u/jojyja) di
[Red Crackle](http://redcrackle.com).
