---
title: "Konsep: Penerjemahan Antarmuka Pengguna, Konfigurasi, dan Konten"
description: "Gambaran umum bahasa dan penerjemahan pada situs."
id: "language-concept"
translation_key: "language-concept"
source_locale: "id"
---
## Pengetahuan prasyarat { #language-concept }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
* [planning-data-types](./planning-data-types.md)
## Bahasa apa yang didukung perangkat lunak?

Bahasa dasar perangkat lunak yang digunakan situs Anda (perangkat lunak inti,
modul, dan tema) adalah bahasa Inggris. Namun, menggunakan perangkat lunak ini,
Anda dapat membuat situs dengan bahasa bawaan selain bahasa Inggris. Dalam
hal ini,
setiap orang yang melihat situs seharusnya hanya melihat bahasa tersebut (dengan
asumsi situs telah diterjemahkan sepenuhnya). Anda juga dapat menggunakan
perangkat lunak ini untuk membuat situs multibahasa, dengan pengalih bahasa yang
dapat digunakan pengunjung situs untuk beralih ke bahasa pilihan mereka. Anda
harus menginstal modul Language inti untuk menggunakan bahasa selain bahasa
Inggris di situs.
## Apa yang dapat diterjemahkan di situs Anda?

Ada tiga jenis informasi yang dapat diterjemahkan, masing-masing dengan metode
penerjemahannya sendiri:

- **Teks antarmuka pengguna:** Teks bawaan yang ada dalam perangkat lunak inti, modul, dan tema. Teks ini dapat diterjemahkan dari bahasa Inggris dasar perangkat lunak ke bahasa situs Anda. Biasanya, Anda dapat mengunduh terjemahan alih-alih harus menerjemahkan teks ini sendiri. Anda harus menginstal modul Interface Translation inti untuk menerjemahkan teks ini, serta modul Update Manager inti untuk mengunduh terjemahan secara otomatis.
- **Teks konfigurasi:** Teks dengan struktur dan nilai awal yang ditentukan oleh perangkat lunak inti, modul, dan tema, tetapi dapat Anda sunting. Contohnya mencakup label kolom pada tipe konten, teks header dalam view, nama situs, serta isi pesan email otomatis yang dikirimkan situs. Setelah membuat teks konfigurasi dalam bahasa bawaan situs, Anda dapat menerjemahkannya ke bahasa lain. Untuk konfigurasi bawaan yang disediakan perangkat lunak inti, modul, dan tema, terjemahan disertakan bersama unduhan terjemahan teks antarmuka pengguna. Anda harus menginstal modul Configuration Translation inti untuk menerjemahkan teks ini.
- **Teks dan berkas konten:** Jika situs Anda multibahasa, Anda dapat mengonfigurasi kolom konten di situs agar dapat diterjemahkan. Setelah membuat konten dalam satu bahasa, Anda dapat menerjemahkannya ke bahasa lain. Kolom dapat berisi informasi tekstual atau berkas yang diunggah. Untuk setiap kolom pada setiap subtipe entitas, Anda dapat mengonfigurasinya sebagai dapat diterjemahkan atau tidak dapat diterjemahkan. Anda harus menginstal modul Content Translation inti untuk menerjemahkan teks ini.
## Informasi apa yang akan tetap berbahasa Inggris di situs saya?

Bahkan jika bahasa bawaan situs bukan bahasa Inggris, Anda tetap akan melihat
teks bahasa Inggris pada halaman administratif tertentu yang digunakan untuk
mengelola konfigurasi. Alasannya, saat menyunting konfigurasi, Anda menyunting
nilai konfigurasi dasar yang belum diterjemahkan; menerjemahkan konfigurasi
merupakan operasi terpisah. Misalnya, jika mengunjungi halaman administrasi
_Menu_, Anda akan melihat nama menu dalam bahasa Inggris (untuk menu yang
disiapkan saat menginstal situs). Jika mengeklik tautan _Sunting menu_, Anda
akan menyunting nama dan deskripsi menu dalam bahasa Inggris. Untuk menyunting
nama menu dalam bahasa lain, Anda perlu menginstal modul Configuration
Translation inti dan menggunakan tautan _Terjemahkan_ untuk menyunting
informasi menu yang diterjemahkan.
## Topik terkait

* [language-add](./language-add.md)
* [language-content-config](./language-content-config.md)
* [language-content-translate](./language-content-translate.md)
* [language-config-translate](./language-config-translate.md)

*Atribusi*

Ditulis oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
