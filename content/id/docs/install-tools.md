---
title: "Konsep: Alat Tambahan"
description: "Gambaran umum alat tambahan yang membantu pembuat situs membuat situs dengan mudah."
id: "install-tools"
translation_key: "install-tools"
source_locale: "id"
---
## Alat apa saja yang tersedia bagi pembuat situs? { #install-tools }

Tersedia beberapa alat tambahan yang membantu Anda membuat situs dengan lebih
cepat, lebih akurat, dan lebih sedikit usaha.

- **Drush:** Lihat di bawah untuk informasi lebih lanjut tentang alat baris perintah.
- **Git:** Lihat di bawah untuk informasi lebih lanjut tentang alat kontrol versi.
- **Composer:** Lihat di bawah untuk informasi lebih lanjut tentang Composer.
- **Devel:** [Modul kontribusi Devel](https://www.drupal.org/project/devel) membantu tugas pengembangan seperti melakukan debug dan memeriksa kode, serta menghasilkan konten tiruan.
## Apa itu alat baris perintah?

Alat baris perintah menjadi alternatif untuk menggunakan antarmuka administratif
bagi berbagai operasi di situs Anda. Banyak pembuat dan pemelihara situs telah
meluangkan waktu untuk memasang dan mempelajari alat baris perintah, karena:

* Tugas administratif biasanya lebih cepat dan tidak terlalu membosankan ketika
dilakukan pada baris perintah daripada di antarmuka pengguna.
* Anda dapat menulis skrip yang menggabungkan perintah terkait situs dengan
perintah lain di server, untuk mengotomatiskan tugas yang lebih rumit.
* Alat baris perintah menyediakan fungsionalitas tambahan yang tidak tersedia
melalui antarmuka administratif; misalnya, menjalankan kueri basis data.

Alat yang paling populer adalah [Drush](https://www.drush.org/). Drush adalah
antarmuka baris perintah dan alat pembuatan skrip yang dapat mempercepat tugas
umum
bagi pengembang, pembuat situs, dan tim DevOps. Panduan ini mendokumentasikan
perintah dari versi stabil terbaru Drush untuk banyak tugas; panduan ini tidak
mendokumentasikan perintah untuk versi Drush yang lebih lama, tetapi Anda dapat
mencarinya dalam dokumentasi Drush.

Untuk menggunakan alat ini, Anda harus memiliki akses terminal baris perintah ke
lingkungan tempat situs web Anda akan dihosting. Anda harus memasang Composer
terlebih dahulu agar dapat memasang Drush.

Untuk memasang Drush, pertama pastikan proyek Anda menggunakan Composer untuk
mengelola dependensi. Lihat di bawah untuk informasi lebih lanjut mengenai
Composer.
Kemudian gunakan perintah berikut:

```text
# Install Drush
composer require drush/drush
```
## Apa itu sistem kontrol versi?

Sistem kontrol versi adalah perangkat lunak yang menyimpan salinan berkas dan
riwayat revisi dalam sebuah _repositori_, serta memungkinkan Anda menambahkan,
menghapus, dan memperbarui berkas. Untuk proyek situs web, perangkat lunak
kontrol
revisi dapat membantu Anda:

* Menguji secara lokal sebelum menerapkan berkas di situs langsung
* Melihat, membandingkan dengan, dan mengembalikan ke versi berkas sebelumnya
* Melihat berkas yang ditambahkan, diubah, atau dihapus sebelum Anda melakukan
_commit_ perubahan (memperbarui repositori)
* Menggabungkan perubahan dari anggota tim yang berbeda
* Menjaga berkas dan konfigurasi tetap tersinkronisasi antara situs lokal dan
situs langsung

Ada banyak sistem kontrol versi proprieter dan sumber terbuka untuk dipilih;
pilihan yang populer adalah [Git](https://git-scm.com/), perangkat lunak sumber
terbuka yang berjalan pada sebagian besar platform komputer. Git adalah sistem
kontrol versi _terdistribusi_ yang memungkinkan Anda memiliki satu atau beberapa
salinan repositori. Dengan demikian, Anda dapat melakukan commit perubahan ke
sebuah salinan
dan hanya _push_ ke repositori yang Anda tetapkan sebagai _kanonis_ ketika Anda
siap membagikannya dengan orang lain. Repositori git kanonis dapat dihosting di
komputer lokal atau server di perusahaan Anda. Namun, banyak proyek perangkat
lunak
dan individu menghosting repositori Git mereka menggunakan layanan pihak ketiga
yang disediakan oleh [GitLab](https://about.gitlab.com/) atau
[GitHub](https://github.com/).
## Untuk apa Composer digunakan?

[Composer](https://getcomposer.org/) adalah alat untuk mengelola dependensi PHP,
di mana pengembang menentukan versi setiap pustaka eksternal yang diperlukan.
Composer mengelola proses pengunduhan dan pemasangan pustaka tersebut.
Composer mengelola proses pengunduhan dan pemasangan pustaka tersebut.

[Composer dapat dipasang](https://getcomposer.org/doc/00-intro.md) di lingkungan
pengembangan lokal atau server web, tetapi sering kali sudah tersedia dalam
[perangkat pengembangan Drupal](https://www.drupal.org/docs/develop/development-tools/development-tools-overview).

Perangkat lunak inti merupakan pengguna utama Composer karena menggunakan
beberapa pustaka perangkat lunak yang dikembangkan secara eksternal. Pustaka ini
harus diunduh dan dipasang agar perangkat lunak inti dapat berfungsi. Saat
memasang perangkat lunak inti, Anda perlu mengunduh arsip yang berisi versi
pustaka eksternal yang kompatibel, atau menjalankan Composer untuk mengunduh
pustaka eksternal setelah pengunduhan awal.
Alat baris perintah Drush juga diunduh menggunakan Composer.

Beberapa modul kontribusi juga menggunakan pustaka perangkat lunak yang
dikembangkan secara eksternal; misalnya, modul integrasi Facebook mungkin
memerlukan pustaka integrasi Facebook agar modul dapat berfungsi, dan modul
geografis mungkin menggunakan pustaka standar fungsi geografis. Untuk memasang
modul dengan dependensi eksternal, Anda perlu menjalankan Composer.
## Alat apa saja yang tersedia bagi pengembang modul dan tema?

Selain alat pembuat situs yang disebutkan di atas, alat berikut berguna bagi
pengembang modul dan tema.

- **Drush:** [Drush](https://www.drush.org/) adalah alat baris perintah yang dapat digunakan untuk menghasilkan kode boilerplate dan berinteraksi dengan situs Drupal. Alat ini dapat menghasilkan, misalnya, kode blok atau formulir, memasang modul dan tema, mengosongkan cache, serta membuat konten tiruan.
- **Coder:** [Coder](https://www.drupal.org/project/coder) adalah alat baris perintah yang memeriksa apakah modul dan tema Anda mematuhi standar pengodean serta praktik terbaik lainnya. Alat ini juga dapat memperbaiki pelanggaran standar pengodean.
- **Alat debug peramban:** Peramban web seperti Firefox dan Chrome menyertakan alat yang memungkinkan melihat, mengedit, melakukan debug, dan memantau CSS, HTML, serta JavaScript. Anda dapat membuka panel atau jendela debug dengan mengeklik kanan mouse di area jendela, lalu memilih "Inspect" atau "Inspect element".
## Topik terkait

[install-composer](./install-composer.md)
## Sumber daya tambahan

* [Halaman dokumentasi komunitas _Drupal.org_ "Ikhtisar alat pengembangan"](https://www.drupal.org/docs/develop/development-tools/development-tools-overview)
* [Halaman dokumentasi komunitas _Drupal.org_ "Menggunakan Composer dengan Drupal"](https://www.drupal.org/docs/develop/using-composer/using-composer-with-drupal)
* [Artikel Wikipedia "Kontrol versi terdistribusi"](https://en.wikipedia.org/wiki/Distributed_version_control)

*Attributions*

Ditulis dan disunting oleh [Boris Doesborg](https://www.drupal.org/u/batigolix)
dan [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon), serta
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) di [Drupalize.Me](https://drupalize.me).
Sebagian teks diadaptasi dari
["Pengantar Git"](https://www.drupal.org/node/991716),
hak cipta 2000-2026 oleh para kontributor individu untuk
[Dokumentasi Komunitas Drupal](https://www.drupal.org/documentation).
