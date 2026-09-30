---
title: "Konsep: Situs Pengembangan"
description: "Ikhtisar situs pengembangan dengan contoh alur kerja deployment untuk membangun situs."
id: "install-dev-sites"
translation_key: "install-dev-sites"
source_locale: "id"
---
## Apa Itu Situs Pengembangan? { #install-dev-sites }

Situs Pengembangan adalah salinan berbeda dari situs yang sama, digunakan untuk
mengembangkan, memperbarui, dan menguji situs tanpa membahayakan integritas
situs aktif.

Contoh alur kerja deployment untuk membangun situs biasanya mencakup
situs-situs berikut:

- **Lingkungan lokal:** Proses pengembangan dimulai dengan pengembang yang mengerjakan fitur baru, perbaikan bug, tema, dan konfigurasi di lingkungan lokal mereka. Alat yang direkomendasikan untuk menyiapkan lingkungan lokal adalah DDEV. Lihat [install-ddev](./install-ddev.md).
- **Situs pengembangan:** Pengembang mengirim perubahan yang telah mereka kerjakan ke situs pengembangan. Untuk tim yang terdiri atas lebih dari satu pengembang, kontrol versi biasanya digunakan. Git adalah sistem kontrol versi yang melacak setiap perubahan pada berkas Anda. Anda kemudian dapat melakukan commit perubahan tersebut ke repositori. Menggunakan Git memungkinkan anggota tim mengerjakan situs yang sama tanpa menimpa pekerjaan satu sama lain. Git juga memudahkan Anda mengembalikan pengembangan ke tahap sebelumnya.
- **Situs staging:** Situs staging dapat digunakan untuk pengujian atau mempresentasikan perubahan kepada klien untuk mendapatkan persetujuan. QA (Quality Assurance) dan UAT (User Acceptance Testing) paling sering dilakukan di situs staging. Direkomendasikan untuk memiliki konten aktif di situs pengembangan dan situs staging, sehingga Anda dapat menguji cara fitur baru bekerja dengan konten yang ada.
- **Situs produksi:** Situs aktif di web yang tersedia bagi pengunjung. Situs ini berisi fitur baru yang telah terbukti aman untuk ditayangkan.

Berdasarkan ukuran, cakupan, persyaratan, atau pemangku kepentingan proyek,
tahap dari alur kerja di atas dapat dihapus atau tahap tambahan dapat
ditambahkan. Misalnya, situs pengujian sebelum staging dapat ditambahkan untuk
memisahkan proses pengujian dan penerimaan pengguna.
## Topik terkait

* [install-dev-making](./install-dev-making.md)
* [install-ddev](./install-ddev.md)
* [planning-workflow](./planning-workflow.md)
* [extend-git](./extend-git.md)

*Atribusi*

Ditulis dan disunting oleh [Diána Lakatos](https://www.drupal.org/u/dianalakatos),
dan [Jojy Alphonso](https://www.drupal.org/u/jojyja) di
[Red Crackle](http://redcrackle.com), serta
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) di
[Drupalize.Me](https://drupalize.me).
