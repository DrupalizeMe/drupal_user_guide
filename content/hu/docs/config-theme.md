---
title: "A smink beállítása"
description: "A smink néhány beállításának szerkesztése, mint például a színséma módosítása és a logó cseréje."
id: "config-theme"
translation_key: "config-theme"
source_locale: "hu"
---
## Célkitűzés { #config-theme }

Módosítsuk az alaprendszer alapértelmezett _Bartik_ sminkjét azzal, hogy megváltoztatjuk a színsémáját és hozzáadunk egy logót.
## Szükséges előismeretek

[understanding-themes](./understanding-themes.md)
## Lépések

1. Webhelyünk _Kezelés_ adminisztrációs menüjében menjünk a _Megjelenés_ oldalra (vagy a címsorban adjuk meg az _admin/appearance_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi sminket.
1. A _Telepített sminkek_ cím alatt találjuk a Bartik sminket, a neve mellett zárójelben pedig valószínűleg az „alapértelmezés szerinti smink” megjegyzés olvasható. Ha igen, akkor kattintsunk a _Beállítások_ hivatkozásra.
    <img src="/images/config-theme_bartik_settings.webp" alt="Alapértelmezett smink, Bartik" width="100%" />
1. A _Színséma_ keretben kattintsunk bele minden egyes beviteli mezőbe és gépeljünk be tetszőlegesen választott színkódokat hexadecimális formában, de beírhatjuk a Kézikönyv során példaként használt _Termelői Piac_ webhelyünk színeit is az alábbi táblázatból:
    <table>
      <thead>
        <tr>
          <th>Terület</th>
          <th>Színkód</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Fejléc háttere fent</td>
          <td>`#7db84a` (zöld)</td>
        </tr>
        <tr>
          <td>Fejléc háttere lent</td>
          <td>`#2a3524` (sötétzöld)</td>
        </tr>
        <tr>
          <td>Általános háttér</td>
          <td>`#ffffff` (fehér)</td>
        </tr>
        <tr>
          <td>Oldalsáv háttere</td>
          <td>`#f8bc65` (világosnarancs)</td>
        </tr>
        <tr>
          <td>Oldalsáv keretei</td>
          <td>`#e96b3c` (narancssárga)</td>
        </tr>
        <tr>
          <td>Lábléc háttere</td>
          <td>`#2a3524` (sötétzöld)</td>
        </tr>
        <tr>
          <td>Cím és jelmondat</td>
          <td>`#ffffff` (fehér)</td>
        </tr>
        <tr>
          <td>Szövegszín</td>
          <td>`#000000` (fekete)</td>
        </tr>
        <tr>
          <td>Hivatkozás színe</td>
          <td>`#2a3524` (sötétzöld)</td>
        </tr>
      </tbody>
    </table>

    Megjegyzés: A színek kiválasztásához használhatjuk a jobb oldalon megjelenő színkereket is. A színkerékre kattintva a színkódok automatikusan kitöltődnek.
    <img src="/images/config-theme_color_scheme.webp" alt="Az alaprendszer Bartik sminkjének frissített színbeállításai" width="100%" />

1. A _Logókép_ keretben, tiltsuk le az _A smink által nyújtott logó használata_ jelölőnégyzetet.
1. A _Logókép feltöltése_ felirat alatti gombra kattintva keressük meg a logófájlt számítógépünkön:
    ![Új logó az alaprendszer Bartik sminkjének beállításainál](/images/config-theme_logo_upload.webp)

    Ha kiválasztottuk a fájlt a gépünk mappa ablakában, akkor annak neve megjelenik a gomb mellett. Jó tudni, hogy beállítható általános, sminktől független logókép is a _Megjelenítés_ > _Beállítások_ (vagy címsorban _admin/appearance/settings_) oldalon. A smink itt megadott egyéni logója azonban felülírja azt az általános logót.

1. Változtatásaink elmentéséhez és az új logónk feltöltéséhez kattintsunk a _Beállítások mentése_ gombra a lap alján.
    Megjegyzés: fentebb, a színkódok táblázata alatt egy _Előnézet_ látható, ami segít elképzelnünk nagyjából a választott színek összhatását.
    <img src="/images/config-theme_color_scheme_preview.png" alt="A Bartik smink előnézete" width="100%" />
1. Kattintsunk a _Vissza a webhelyre_ gombra az eszközsor bal végén, hogy ellenőrizzük a smink új beállításait a webhelyünkön.
    <img src="/images/config-theme_final_result.webp" alt="Végső eredmény az alaprendszer Bartik sminkjének beállítása – színek és logó – után" width="100%" />

## Az ismeretek elmélyítése

* [extend-theme-find](./extend-theme-find.md)
* [extend-theme-install](./extend-theme-install.md)
* Ha nem látjuk azonnal a változtatásaink eredményét, szükség lehet a gyorsítótár kiürítésére. Lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CEi3i1YGOs0" title="A smink beállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Ann Greazel](https://www.drupal.org/u/AnnGreazel), [Amanda Luker](https://www.drupal.org/u/mndonx) ([Advomatic](https://www.advomatic.com/)) és [Jack Haas](https://www.drupal.org/u/jerseycheese). Fordította: [Pandelon](https://www.drupal.org/u/pandelon).
