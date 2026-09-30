---
title: "Konsep: Entitas Konten dan Kolom"
description: "Gambaran umum entitas konten dan kolom."
id: "planning-data-types"
translation_key: "planning-data-types"
source_locale: "id"
---
## Pengetahuan prasyarat { #planning-data-types }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
## Apa itu entitas konten?

_Entitas konten_ (atau lebih umum disebut _entitas_) adalah item data konten
yang dapat terdiri dari teks, markup HTML, gambar, berkas terlampir, dan data
lain yang dimaksudkan untuk ditampilkan kepada pengunjung situs. Entitas konten
dapat didefinisikan oleh perangkat lunak inti atau modul.

Entitas konten dikelompokkan ke dalam _tipe entitas_ yang memiliki tujuan
berbeda dan ditampilkan dengan cara yang sangat berbeda di situs. Sebagian besar
tipe entitas juga dibagi menjadi _subtipe entitas_, yaitu pembagian dalam tipe
entitas
untuk memungkinkan variasi yang lebih kecil dalam penggunaan dan tampilan
entitas. Berikut adalah tabel beberapa tipe entitas konten yang umum:

| Tipe entitas | Subtipe entitas | Modul pendefinisi | Penggunaan utama |
| --- | --- | --- | --- |
| Item konten | Tipe konten | Modul Node | Konten yang dimaksudkan untuk menjadi area halaman utama pada halaman situs<br><br>*Contoh:* Dalam contoh situs pasar petani, Anda mungkin memiliki tipe konten untuk halaman dasar, halaman vendor, dan halaman resep. |
| Komentar | Tipe komentar | Modul Comment | Komentar yang ditambahkan ke entitas konten (biasanya ke entitas Item konten)<br><br>*Contoh:* Pada situs blog, postingan blog mungkin memiliki komentar. Komentar tidak diperlukan dalam contoh situs pasar petani. |
| Profil pengguna | (tidak ada) | Modul User | Data yang terkait dengan orang yang memiliki akun pengguna (akses masuk) di<br><br>*Contoh:* Setiap situs memiliki setidaknya profil pengguna dasar dengan nama pengguna dan alamat email; situs jejaring sosial mungkin memiliki profil pengguna yang lebih kompleks dengan lebih banyak informasi. |
| Blok kustom | Tipe blok | Modul Custom Block | Teks dan gambar dalam bagian-bagian kecil, yang sering ditampilkan di header,<br><br>*Contoh:* Dalam contoh situs pasar petani, Anda mungkin menempatkan jam operasional dan lokasi dalam blok sidebar. |
| Istilah taksonomi | Kosakata | Modul Taxonomy | Digunakan untuk mengklasifikasikan tipe konten lain<br><br>*Contoh:* Dalam contoh situs pasar petani, Anda mungkin mengklasifikasikan konten Recipe dengan kosakata taksonomi Ingredients, dengan istilah taksonomi seperti Carrots dan Tomatoes. Pada situs blog, postingan blog mungkin diklasifikasikan menggunakan kosakata Tags, dan mungkin juga kosakata Categories. |
| Berkas | (tidak ada) | Modul File | Berkas gambar atau lampiran yang dilacak dan dikelola oleh situs, sering kali<br><br>*Contoh:* Dalam contoh situs pasar petani, halaman Recipe dan Vendor mungkin memiliki lampiran gambar, yang (di balik layar) dikelola situs sebagai entitas File. |
| Formulir kontak | Tipe formulir | Modul Contact | Formulir yang memungkinkan pengunjung situs menghubungi pemilik situs<br><br>*Contoh:* Formulir kontak diperlukan dalam contoh situs pasar petani. |
## Apa itu kolom?

Di dalam entitas, data disimpan dalam _kolom_ individual, yang masing-masing
menyimpan satu tipe data, seperti teks berformat atau teks biasa, gambar atau
berkas lain, atau tanggal. Tipe kolom dapat didefinisikan oleh perangkat lunak
inti atau modul.

Administrator dapat menambahkan kolom pada subtipe entitas, sehingga semua
entitas dari subtipe entitas tertentu memiliki kumpulan kolom yang sama.
Misalnya,
tipe konten Vendor dalam contoh pasar petani mungkin memiliki kolom untuk nama
vendor, gambar logo, URL situs web, dan deskripsi, sedangkan tipe konten _Basic
page_ mungkin hanya memiliki kolom untuk judul dan isi halaman. Saat membuat
atau
menyunting entitas, Anda menentukan nilai untuk kolom pada entitas tersebut.
## Topik terkait

* [planning-structure](./planning-structure.md)
* [content-create](./content-create.md)
* [structure-content-type](./structure-content-type.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [user-concept](./user-concept.md)
* [block-concept](./block-concept.md)

*Atribusi*

Ditulis dan disunting oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
dan [Grant Dunham](https://www.drupal.org/u/gdunham).
