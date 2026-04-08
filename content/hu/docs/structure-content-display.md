---
title: "A tartalom megjelenítési módjának alakítása"
description: "Így lehet ugyanazt a tartalmat többféleképpen tálalni a látogatóknak."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "hu"
---
## Célkitűzés { #structure-content-display }

E témakörben megismerjük, hogy a tartalomtípusok mezőinek csak a kimenetét, és nem a tartalmát módosítva azok mennyire más benyomást keltenek a látogatóban.
## Szükséges előismeretek

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Webhely előfeltételei

Az _Árus_ tartalomtípusnak már léteznie kell, valamint már hozzá kell, hogy legyenek rendelve a _Fő kép_ és _Árus webcíme_ mezők, végül pedig már léteznie kell legalább egy ilyen _Árus_ típusú tartalomnak. Ezen állapot eléréséhez segítséget a [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) és [content-create](./content-create.md) témakörök nyújtanak.
## Lépések

1. Keressük meg, és nyissuk meg a [structure-fields](./structure-fields.md) témakörnél létrehozott _Árus_ típusú tartalmunkat. Valószínűleg rögtön megakad a szemünk pár dolgon, amit javítani lehetne ezen az oldalon:
    * A _Fő kép_ és _Árus webcíme_ mezők felett felesleges a mező címkéjét kiírni.
    * A web mai látogatóit a képek jobban érdeklik, mint a szövegek, ezért jó lenne, ha a fotó jönne először, majd utána a többi mező tartalma.
    * Bár jó, hogy a kereskedők tölthetnek fel magukról fotót a bemutatkozásukhoz, de azt kisebb méretben is elég lenne megjeleníteni.
1. Az első két pontot ugyanott tudjuk javítani: a _Kezelés_ adminisztrációs menüben menjünk a _Felépítés_ > _Tartalomtípusok_ (vagy a címsorba gépelve: _admin/structure/types_) oldalra. Aztán az _Árus_ tartalomtípus sorának végén kattintsunk a lenyíló gomb _Megjelenés beállítása_ lehetőségére.
    <img src="/images/structure-content-display_manage_display.png" alt="Megjelenés beállítása" width="100%" />
1. A _Fő kép_ mező sorában a _Felirat_ oszlopban válasszuk a _Rejtett_ lehetőséget. Majd ismételjük meg ugyanezt az _Árus webcíme_ mező sorában is.
    <img src="/images/structure-content-display_main_image_hidden.png" alt="Két mező feliratának elrejtése" width="100%" />
1. Az _Árus webcíme_ mező sorában kattintsunk még a fogaskerék ikonra is.
1. Töltsük ki az alább felsorolt mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Mező neve</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hivatkozásszöveg hosszának csonkolása</td>
          <td>Ha töröljük e beállítás értékét, akkor a linkek szövegének (nem céljának!) hossza nem lesz korlátozva.</td>
          <td>_(üres)_</td>
        </tr>
        <tr>
          <td>A hivatkozás megnyitása új ablakban</td>
          <td>Ha bepipáljuk, akkor a linkre kattintva az új böngészőfülön vagy -ablakban nyílik majd meg.</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.png" alt="Linkszöveg hosszának korlátozása" width="100%" />

1. Kattintsunk a _Frissítés_ gombra.
1. Keresztnyíl ikonjukra kattintva a mezők fogd-és-vidd módszerrel áthúzhatók egymás fölött. Ha valami miatt ez nem működne, akkor a _Sorok súlyának mutatása_ hivatkozásra kattintva megjelennek a sorszámaik: míg a nagyobb súlyúak (képzeletben „nehezebbek”) lesüllyednek, addig a kisebb súlyúak („könnyebbek”) feljebb kerülnek. Helyezzük tehát az elemeket a következő sorrendbe: Fő kép, Törzs, Árus webcíme és Hivatkozások.
    <img src="/images/structure-content-display_change_order.png" alt="Mezők sorrendjének átrendezése" width="100%" />
1. Kattintsunk a _Mentés_ gombra.
1. Nyissuk meg újra az árus 1. lépésnél megtekintett adatlapját, és ellenőrizzük, hogy iménti módosításaink valóban megváltoztatták a kinézetét az oldalnak.
1. A fentiekhez hasonló módon ugyanezen lépésekkel testreszabhatjuk a _Recept_ típusú tartalmaink megjelenítését is.
## Az ismeretek elmélyítése

* Állítsuk kisebb méretűre a _Fő kép_ mezőben tárolt fotót. Ehhez segítségképpen lásd a [structure-image-style-create](./structure-image-style-create.md) témakört.
* Ha nem látjuk azonnal a változtatásaink eredményét, akkor szükség lehet a gyorsítótár kiürítésére. Lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Kapcsolódó témák

* [structure-image-styles](./structure-image-styles.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="A tartalom megjelenítési módjának alakítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Specify how fields are displayed](https://www.drupal.org/node/774798) (azaz „Mezők megjelenítésének szabályozása”) című közösségi dokumentáció a Drupal.org-on (angol nyelven).
* [Rearrange the order of fields](https://www.drupal.org/node/774744) (azaz „Mezők sorrendjének átrendezése”) című közösségi dokumentáció a Drupal.org-on (angol nyelven).
* [View modes](https://www.drupal.org/node/1577752) (azaz „Nézetmódok”) című közösségi dokumentáció a Drupal.org-on (angol nyelven).

*Közreműködők*

Írta: [Ann Greazel](https://www.drupal.org/u/AnnGreazel) és [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
