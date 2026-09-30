---
title: "Konsep: Modul"
description: "Gambaran umum modul dan fungsionalitas yang dapat disediakannya."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "id"
---
## Pengetahuan prasyarat { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## Apa itu modul?

Modul adalah paket berkas yang memperluas fungsionalitas inti Drupal. Modul
umumnya berisi kode PHP, konfigurasi (YAML), dan dapat menyertakan berkas
JavaScript, CSS, serta templat Twig.

Anda dapat mengaktifkan fitur dan fungsionalitas dengan _menginstal_ modul serta
menonaktifkannya dengan _menghapus instalasi_ modul. Sebelum menghapus
instalasi,
Anda mungkin perlu menghapus data dan konfigurasi yang terkait dengan fitur atau
fungsionalitas tersebut.

Setiap modul yang diinstal menambah waktu yang diperlukan untuk menghasilkan
halaman di situs Anda. Oleh karena itu, sebaiknya hapus instalasi modul yang
tidak diperlukan.

Unduhan inti menyediakan modul untuk fungsionalitas seperti:

* Mengelola akun pengguna (modul User inti)
* Mengelola konten dasar (modul Node inti) dan kolom (modul Field serta Field UI
  inti; ada pula modul inti yang menyediakan tipe kolom)
* Mengelola menu navigasi (modul Menu UI inti)
* Membuat daftar, kisi, dan blok dari konten yang ada (modul Views serta Views
  UI inti)

Anda dapat mengunduh _modul kontribusi_ tambahan dari
[Unduhan Modul _Drupal.org_](https://www.drupal.org/project/project_module) atau
membuat _modul kustom_ sendiri.
## Topik terkait

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Sumber daya tambahan

[halaman dokumentasi komunitas _Drupal.org_ "Panduan pengembang modul"](https://www.drupal.org/developing/modules)

*Atribusi*

Ditulis oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
