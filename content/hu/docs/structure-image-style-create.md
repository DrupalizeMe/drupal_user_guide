---
title: "Képstílus létrehozása"
description: "Új képformátumok felvétele a képek automatikus módosításához."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "hu"
---
## Célkitűzés { #structure-image-style-create }

Ebben a témakörben megismerjük, hogyan lehet a Drupalra bízni a látogatóknak kiszolgált képek automatikus formázását. A cél, hogy az _Árusok_ adatlapjain a bemutatkozó fotóik egységesen jelenjenek meg, ne mindig ugyanabban a formátumban, ahogy fel lettek töltve.
## Szükséges előismeretek

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Webhely előfeltételei

* A _Recept_ és _Árus_ tartalomtípusoknak már létezniük kell. Ehhez lásd a [structure-content-type](./structure-content-type.md) témakört.
* Mind a két tartalomtípushoz hozzá kell, hogy legyen rendelve a _Fő kép_ nevű mező. A mezőkről bővebben a [structure-fields](./structure-fields.md) témakörben van szó.
* Mindkét típusban legyenek már beküldött tartalmak. Lásd:
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) és [content-create](./content-create.md) témakörök.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Média_ > _Képstílusok_ (vagy a címsorba gépelve: _admin/config/media/image-styles_) oldalra.
1. Kattintsunk a _Képstílus hozzáadása_ gombra.
1. Írjuk be az új képstílus nevét: _Közepesen nagy (300x200)_
1. Mentéshez kattintsunk az _Új stílus létrehozása_ gombra. Megjelenik a _Közepesen nagy (300x200) stílus szerkesztése_ című oldal.
1. A _Hatás_ táblázatban a legördülő listából válasszuk az _Arányos átméretezés és méretre vágás_ lehetőséget. Kattintsunk a _Hozzáadás_ gombra.
1. Töltsünk ki minden mezőt a lent látható módon:
    <table>
      <thead>
        <tr>
          <th>Mezőnév</th>
          <th>Érték</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Szélesség</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Magasság</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Kattintsunk a _Hatás hozzáadása_ gombra. Ezzel sikeresen elmentettük első saját képstílusunkat, ami még csak egy hatásból (arányos átméretezés-kivágás) áll.
    <img src="/images/structure-image-style-create-add-style.webp" alt="Egy képstílus hozzáadása" width="100%" />
1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ menüpontot (vagy gépeljük a címsorba: _admin/structure/types_).
    (_admin/structure/types_).
1. Az _Árus_ tartalomtípus sorának végén, a _Műveletek_ oszlopban kattintsunk a lenyíló gomb _Megjelenés beállítása_ lehetőségére. Betöltődik a _Megjelenés beállítása_ oldal (_admin/structure/types/manage/vendor/display_).
1. Győződjünk meg arról, hogy a másodlagos fülek közül az első, _Alapértelmezett_ (angolul „Default”) van kiválasztva.
1. A _Fő kép_ mező sorában kattintsunk a fogaskerék ikonra a további beállítási lehetőségek eléréséhez.
1. Töltsünk ki minden mezőt a lent látható módon:
    <table>
      <thead>
        <tr>
          <th>Mezőnév</th>
          <th>Magyarázat</th>
          <th>Érték</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Képstílus</td>
          <td>Kiválaszthatjuk a már létezők közül, hogy itt melyik legyen alkalmazva.</td>
          <td>Közepesen nagy (300x200)</td>
        </tr>
        <tr>
          <td>Kép hivatkozása erre</td>
          <td>Hová legyen a látogató átirányítva, ha rákattint a képre?</td>
          <td>Semmi</td>
        </tr>
      </tbody>
    </table>

    ![Egy képmező formázójának módosítása](/images/structure-image-style-create-manage-display.webp)

1. Kattintsunk a _Frissítés_ gombra.
1. Kattintsunk a _Mentés_ gombra. Innentől már az új képstílus lesz használatban, amikor egy _Árus_ típusú tartalmat megnyitunk.
1. Nyissuk meg az egyik, korábban már felvitt, ilyen típusú tartalmunkat, és ellenőrizzük, hogy valóban ilyen méretben jelenik-e meg a bemutatkozó fotó. Ha még segítség szükséges egy tartalomegység megtalálásához, akkor az [content-edit](./content-edit.md) témakör hasznos lehet.
1. Végül ismételjük meg a folyamatot a 8.-tól a 15. lépésig a _Recept_ tartalomtípuson is.
## Kapcsolódó témák

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Képstílus létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Working with images in Drupal 7 and 8](https://www.drupal.org/docs/8/core/modules/image/working-with-images) (azaz „Munka a képekkel D7-en és D8-on”) című közösségi dokumentáció a Drupal.org-on (angol nyelven).

*Közreműködők*

E témakör szövegét [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) ["Working with images in Drupal 7 and 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images) (azaz „Munka a képekkel D7-en és D8-on”) című szócikkéből vette át és szerkesztette, melynek szerzői joga 2000–2026 között annak egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
