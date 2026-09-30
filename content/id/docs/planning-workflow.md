---
title: "Konsep: Alur Kerja Editorial"
description: "Gambaran umum alur kerja editorial untuk mengelola konten di situs web."
id: "planning-workflow"
translation_key: "planning-workflow"
source_locale: "id"
---
## Pengetahuan prasyarat { #planning-workflow }

* [understanding-drupal](./understanding-drupal.md)
* [planning-data-types](./planning-data-types.md)
## Apa itu alur kerja editorial?

_Alur kerja editorial_ adalah proses yang diikuti organisasi untuk membuat,
meninjau, menyunting, dan menerbitkan konten. Beberapa orang dengan peran
berbeda
dalam organisasi dapat menjadi bagian dari proses ini. Misalnya, pembuat konten
dapat mengumpulkan informasi dan menulis konten. Editor dapat meninjau,
menyunting, meminta perubahan, dan menerbitkan konten setelah siap dibagikan
kepada audiens. Kemudian, revisi konten dapat melalui proses sederhana untuk
perubahan kecil atau proses yang lebih kompleks dengan peninjauan untuk
perubahan
yang lebih besar.
## Alat apa yang tersedia untuk mengelola alur kerja?

- **Status Diterbitkan/Tidak Diterbitkan:** Tipe entitas Item konten mendukung penandaan setiap item konten sebagai Diterbitkan atau Tidak Diterbitkan. Izin melihat konten diterbitkan dan tidak diterbitkan berbeda. Misalnya, semua pengunjung situs dapat melihat item konten yang diterbitkan, sedangkan hanya pembuat konten dan editor yang dapat melihat item konten yang tidak diterbitkan.
- **Pelacakan revisi:** Beberapa tipe entitas konten mendukung pelacakan revisi. Artinya, saat konten direvisi, perangkat lunak menyimpan revisi lama agar dapat dibandingkan atau dikembalikan.
- **Alur kerja:** Modul Workflows inti memungkinkan Anda menentukan status dan transisi alur kerja, bukan sekadar menerbitkan atau tidak menerbitkan konten. Modul Content Moderation inti pendamping memungkinkan Anda menetapkan izin dan peran pada transisi alur kerja. Keduanya dapat digunakan dengan tipe entitas Item konten dan Blok kustom.
- **Penempatan blok:** Entitas konten Blok kustom memungkinkan Anda membuat blok kustom dan menyuntingnya, tetapi hanya membuatnya terlihat di situs setelah siap.
## Topik terkait

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)
* [block-create-custom](./block-create-custom.md)
* [block-place](./block-place.md)

*Atribusi*

Ditulis dan disunting oleh [Diána Lakatos](https://www.drupal.org/u/dianalakatos)
di [Pronovix](https://pronovix.com//),
[Grant Dunham](https://www.drupal.org/u/gdunham), serta
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
