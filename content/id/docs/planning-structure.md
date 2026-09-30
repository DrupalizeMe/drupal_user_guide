---
title: "Merencanakan Struktur Konten Anda"
description: "Cara merencanakan struktur konten yang menetapkan tipe entitas konten untuk konten tertentu di situs web."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "id"
---
## Tujuan { #planning-structure }

Membuat rencana struktur konten situs (tipe dan subtipe entitas yang digunakan
untuk setiap konten), serta halaman yang berisi daftar konten.
## Pengetahuan prasyarat

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Langkah-langkah

1. Curah pendapat tentang konten yang perlu ada di situs. Konten ini dapat
    mencakup konten yang dicari pengunjung maupun konten yang ingin ditampilkan
    kepada pengunjung. Hasilnya dapat berupa deskripsi dalam [preface-scenario](./preface-scenario.md).
1. Untuk setiap konten yang telah diidentifikasi, tentukan tipe entitas konten
    yang paling sesuai. Dalam menentukan hal ini, Anda perlu mempertimbangkan tempat
    dan cara konten digunakan serta disunting di situs. Misalnya, dalam skenario
    situs pasar petani, Anda mungkin ingin menampilkan jam operasional dan lokasi
    pasar petani pada sidebar setiap halaman. Untuk konten tersebut, satu blok
    kustom masuk akal. Sebagai contoh lain, Anda mungkin memutuskan bahwa halaman
    yang menampilkan informasi setiap vendor sebaiknya berupa item konten yang
    dikelola oleh modul Node inti karena Anda ingin vendor dapat menyunting daftar
    mereka sendiri. Sistem izin modul Node inti memudahkan Anda melakukan hal ini.
    Keputusan ini tidak selalu hanya memiliki satu jawaban yang benar. Misalnya,
    Anda dapat memutuskan halaman vendor sebagai profil pengguna, bukan item konten.
    Jika demikian, konten akan terikat pada akun pengguna tertentu dan nantinya
    tidak semudah itu untuk mengubah kepemilikan halaman vendor ke akun pengguna
    lain.
1. Dalam setiap tipe entitas konten yang telah diidentifikasi, tentukan pembagian
    menjadi subtipe entitas yang masuk akal. Misalnya, dalam contoh situs pasar
    petani, Anda mungkin memutuskan bahwa di bawah tipe entitas Item konten, perlu
    ada satu tipe konten untuk halaman dasar (Home dan About), satu untuk halaman
    vendor, serta satu untuk halaman resep.
1. Untuk setiap subtipe entitas yang diputuskan, tentukan kolom yang diperlukan.
    Misalnya, tipe konten Vendor mungkin memerlukan kolom untuk nama vendor,
    URL
    halaman web, gambar, dan deskripsi.
1. Tentukan daftar entitas yang diperlukan, yang dapat berupa halaman utuh atau
    area halaman yang lebih kecil. Untuk setiap daftar, Anda perlu menentukan
    entitas yang harus dicantumkan. Kemudian, tentukan urutan dan opsi pemfilteran
    untuk menampilkannya. Misalnya, Anda mungkin ingin memberi pengunjung situs
    pilihan mencari berdasarkan kata kunci, memfilter daftar menjadi subset, atau
    mengurutkan daftar. Anda juga perlu menentukan informasi dari entitas yang harus
    ditampilkan. Hal ini mungkin mengharuskan Anda menambahkan daftar kolom yang
    ditentukan pada langkah sebelumnya. Sebagai contoh, situs pasar petani
    membutuhkan halaman daftar Recipes yang mencantumkan item konten tipe Recipe
    dengan kemampuan memfilter berdasarkan bahan. Jadi, tipe konten Recipe
    memerlukan kolom Ingredients.
1. Untuk setiap kolom yang diidentifikasi pada setiap subtipe entitas, tentukan
    tipe data yang harus dikandungnya (seperti teks biasa, teks berformat, tanggal,
    berkas gambar, dan sebagainya) serta jumlah nilai yang diizinkan. Sebagian besar
    kolom bernilai tunggal, tetapi Recipe harus mengizinkan beberapa nilai dalam
    kolom Ingredients-nya.
1. Pertimbangkan kolom yang paling sesuai sebagai referensi ke entitas istilah
    taksonomi, yaitu kolom yang nilainya harus dipilih dari daftar nilai yang
    diizinkan. Nilai yang diizinkan dan diperkirakan berubah serta berkembang
    seiring
    waktu adalah kandidat yang baik. Contohnya adalah kolom Ingredients untuk tipe
    konten Recipe.
1. Pertimbangkan kolom yang harus merujuk ke entitas konten lain. Misalnya,
    karena vendor akan mengirimkan resep, tipe konten Recipe memerlukan kolom yang
    merujuk ke item konten Vendor untuk vendor yang mengirimkan resep.

    Berikut contoh struktur konten yang dihasilkan untuk situs contoh skenario pasar
    petani:

    <table>
      <thead>
        <tr>
          <th>Tipe entitas</th>
          <th>Subtipe entitas</th>
          <th>Contoh</th>
          <th>Kolom</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Item konten</td>
          <td>Basic page</td>
          <td>Halaman Home, halaman About</td>
          <td>Judul, isi halaman</td>
        </tr>
        <tr>
          <td>Item konten</td>
          <td>Vendor</td>
          <td>Halaman untuk setiap vendor di pasar</td>
          <td></td>
        </tr>
        <tr>
          <td>Item konten</td>
          <td>Recipe</td>
          <td>Halaman untuk setiap resep yang dikirimkan</td>
          <td></td>
        </tr>
        <tr>
          <td>Blok kustom</td>
          <td>(generik)</td>
          <td>Pemberitahuan hak cipta untuk footer, Jam operasional dan lokasi untuk sidebar</td>
          <td>Tidak ada kolom khusus</td>
          <td></td>
        </tr>
        <tr>
          <td>Istilah taksonomi</td>
          <td>Ingredients</td>
          <td>Carrots, tomatoes, dan bahan resep lain</td>
          <td></td>
        </tr>
        <tr>
          <td>Formulir kontak</td>
          <td>(generik)</td>
          <td>Formulir kontak umum</td>
          <td>Nama, email, subjek, pesan</td>
        </tr>
        <tr>
          <td>Profil pengguna</td>
          <td>(tidak ada)</td>
          <td>Tidak akan ditampilkan di situs</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    Berikut daftar yang diperlukan situs:

    <table>
      <thead>
        <tr>
          <th>Halaman atau area halaman</th>
          <th>Tipe dan subtipe entitas</th>
          <th>Filter/urutkan/paginasi</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Halaman Vendors</td>
          <td>Item konten Vendor</td>
          <td>Semua vendor, alfabetis, berhalaman</td>
          <td></td>
        </tr>
        <tr>
          <td>Halaman Recipes</td>
          <td>Item konten Recipe</td>
          <td>Filter berdasarkan bahan, alfabetis, berhalaman</td>
          <td>Gambar, nama resep</td>
          <td></td>
        </tr>
        <tr>
          <td>Sidebar resep terbaru</td>
          <td>Item konten Recipe</td>
          <td>Daftar 5 terbaru</td>
          <td></td>
        </tr>
      </tbody>
    </table>
## Perluas pemahaman Anda

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Konsep terkait

[structure-taxonomy](./structure-taxonomy.md)
## Video

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CaNt4DEeIgU" title="Merencanakan Struktur Konten Anda" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribusi*

Ditulis dan disunting oleh [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
dan [Grant Dunham](https://www.drupal.org/u/gdunham).
