---
title: "Tartalomlista-nézet létrehozása"
description: "Megismerjük, miként lehet listáztatni a webhely tartalmait."
id: "views-create"
translation_key: "views-create"
source_locale: "hu"
---
## Célkitűzés { #views-create }

Ebben a témakörben azt tűzzük ki célként, hogy legyen egy olyan oldala a városi piac webhelyünknek, ahol az összes árus fel van sorolva, és valahányszor egy új árust töltenek fel vagy törölnek a szerkesztők, ez a lista mindig automatikusan frissül.
## Szükséges előismeretek

* [views-concept](./views-concept.md)
* [views-parts](./views-parts.md)
## Webhely előfeltételei

* Az alaprendszer _Views_ és _Views UI_ moduljainak telepítve és engedélyezve kell lenniük. Nem kell félnünk, ez nem a mi dolgunk: a Drupal telepítésekor ez már automatikusan megtörtént.
* Az _Árus_ tartalomtípusnak már léteznie kell, és a _Fő kép_ és _Árus webcíme_ mezőknek már hozzá kell lenniük rendelve. Ezenkívül már kell lennie pár ilyen típusú feltöltött tartalomnak. Ezen állapot eléréséhez a [structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) és [content-create](./content-create.md) témakörök nyújtanak segítséget.
* A _Közepes (220×220 képpont)_ képstílusnak már léteznie kell. Ez szintén automatikusan létrejött, ha a webhelyet az _Általános_ telepítési profillal hoztuk létre, de ha esetleg mégsem, akkor könnyen beállítható újra. Ehhez segítségképpen lásd a [structure-image-style-create](./structure-image-style-create.md) témakört.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Nézetek_ > _Új nézet_ menüpontot (vagy a címsorban adjuk meg az _admin/structure/views_ útvonalat). Megjelenik a _Nézet hozzáadása_ varázsló.
1. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Nézet alapinformációi > Nézet neve</td>
          <td>Egy összefoglaló elnevezés, ami csak a szerkesztőknek lesz látható az adminfelületen.</td>
          <td>Árusok</td>
        </tr>
        <tr>
          <td>Nézet beállításai > Megjelenítés:</td>
          <td>Ki kell választani, hogy milyen típusú adatokat fogunk szűrni ezzel a nézettel.</td>
          <td>Tartalom</td>
        </tr>
        <tr>
          <td>Nézet beállításai > Típus:</td>
          <td>Mivel a _Tartalom_ entitástípusnak vannak altípusai (ezek az _Árus_ és _Recept_), ezért ebben az esetben meg kell határoznunk egy második szinten is, hogy melyiket szeretnénk listáztatni.</td>
          <td>Árus</td>
        </tr>
        <tr>
          <td>Nézet beállításai > Rendezés szempontja:</td>
          <td>A listát a könnyebb áttekintés érdekében ábécérendbe sorolva lehet előállítatni. Itt lehet kiválasztani, hogy ez milyen szempont szerint történjen.</td>
          <td>Cím</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Oldal létrehozása</td>
          <td>Kérhetünk egy külön webcímútvonalat az új nézetünknek, ami így önálló oldalként is elérhető lesz, nem csak oldalsávi blokként.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Oldal címe</td>
          <td>Ennek a külön oldalnak mi legyen a címe.</td>
          <td>Árusok listája</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Útvonal</td>
          <td>Milyen webcímálnéven legyen elérhető ez az oldal.</td>
          <td>/arusok-listaja</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Oldalmegjelenítési beállítások > Megjelenítési formátum</td>
          <td>Milyen szerkezetben legyenek a listázott tartalmak elrendezve.</td>
          <td>Táblázat</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Megjelenő elemek száma</td>
          <td>Sok tartalom esetén hány darab elem legyen egyszerre látható a nézet első eredményoldalán.</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Lapozó használata</td>
          <td>Ha az előbb megadott értéknél több elem van összesen, akkor megjelenjen-e hivatkozás a második és további eredményoldalakra.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Menühivatkozás létrehozása</td>
          <td>A most létrehozandó új nézet _oldal_ típusú megjelenítője szerepeljen-e a webhely valamelyik menüjében hivatkozásként.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Menü</td>
          <td>Ha igen, akkor melyik menünek legyen az alpontja.</td>
          <td>Fő navigáció</td>
        </tr>
        <tr>
          <td>Oldalbeállítások > Hivatkozás szövege</td>
          <td>Mi legyen a menüpont szövege.</td>
          <td>Árusok</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/views-create-wizard.webp" alt="Új nézet hozzáadása varázsló" width="100%" />

1. Kattintsunk a _Mentés és szerkesztés_ gombra. Az előbbi varázsló után most megjelenik a teljes beállítási oldala az újonnan létrehozott nézetünknek.
1. Az alapvetően három függőleges részre tagolható oldalon a bal oszlop közepe táján a _Mezők_ szakasznál kattintsunk a _Hozzáadás_ lenyíló gombra, mire feltűnik a _Mezők hozzáadása_ párbeszédablak.
1. A _Keresés_ alatt írjuk be: „kép”.
1. A kapott eredmények között szerepelnie kell a _Fő kép_ nevű mezőnek, válasszuk ki.
1. A _Mezők hozzáadása és beállítása_ gombra kattintva elfogadjuk, majd megjelenik a _Mező: Tartalom: Fő kép_ párbeszédablak.
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
          <td>Címke létrehozása</td>
          <td>Megadhatunk egy tetszőleges feliratot, ami a mező értéke előtt jelenik majd meg.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Képstílus</td>
          <td>A kép megjelenítésekor rá alkalmazott formázás.</td>
          <td>Közepes (220×220 képpont)</td>
        </tr>
        <tr>
          <td>Kép hivatkozása erre</td>
          <td>Mi történjen, amikor a felhasználó a képre kattint.</td>
          <td>Tartalom</td>
        </tr>
      </tbody>
    </table>
1. Az _Alkalmaz_ gombra kattinva adjuk hozzá a kiválasztott mezőt ezekkel a beállításokkal, majd a párbeszédablak bezárultával ismét a nézetünk teljes beállítási oldalát látjuk, de a tetején egy sárga figyelmeztetéssel: _Nem mentett változások vannak_.
1. Még egy mezőt hozzá szeretnénk adni a nézethez, ezért az előbbi lépéssort megismételve kattinsunk újból a _Mezők_ szakasznál a _Hozzáadás_ lenyíló gombra.
1. Most azt írjuk a keresőmezőbe: „törzs”, majd válasszuk is ki az eredmények közül a _Törzs_ mezőt.
1. A _Mezők hozzáadása és beállítása_ gombra kattintva megint megjelenik a _Mező: Tartalom: Törzs_ párbeszédablak, de most némiképp más beállítási lehetőségekkel.
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
          <td>Címke létrehozása</td>
          <td>Megadhatunk egy tetszőleges feliratot, ami a mező értéke előtt jelenik majd meg.</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Formázó</td>
          <td>Annak kiválasztása, hogy a mezőben tárolt adat milyen formában legyen kiíratva.</td>
          <td>Összefoglalóval vagy a teljes szöveg eleje</td>
        </tr>
        <tr>
          <td>Csonkolási korlát</td>
          <td>A megjelenített írásjelek számának felső határa.</td>
          <td>120</td>
        </tr>
      </tbody>
    </table>
1. Végül az _Alkalmaz_ gombra kattinva adjuk hozzá ezt a mezőt is a nézethez.
1. Most ugyanitt a _Mezők_ szakasznál kattintsunk a _Tartalom: Cím (Cím)_ mezőre, mire megjelenik a _Mező: Tartalom: Cím beállítása_ párbeszédablak.
1. Töröljük ennek is a _Címke létrehozása_ jelölőnégyzetét, mivel nincs szükségünk a varázsló által korábban beállított címkére, majd véglegesítsük módosításainkat az _Alkalmaz_ gombra kattintással.
1. Most válasszuk az _Átrendezés_ lehetőséget a lenyíló gombról, majd az ekkor megjelenő _Mezők átrendezése_ párbeszédablakban a keresztnyíl ikonjukra kattintva fogd-és-vidd módszerrel húzzuk a három mezőt a következő sorrendbe: Fő kép, Cím, és Törzs. Ha valami miatt ez nem működne, akkor a _Sorok súlyának mutatása_ hivatkozásra kattintva megjelennek a sorszámaik: míg a nagyobb súlyúak (képzeletben „nehezebbek”) lesüllyednek, addig a kisebb súlyúak („könnyebbek”) feljebb kerülnek. Az _Alkalmaz_ gombbal bezárhatjuk ezt a panelt is.
1. Ha az oldal alján az _Automata előnézet_ jelölőnégyzet nem lenne bejelölve alapértelmezetten, akkor kézzel is frissíthetjük azt az _Előnézet frissítése_ gombbal.
1. Végül mentsük el az új nézetünk módosításait a _Mentés_ gombra kattintva.
    ![Az Árusok nézet teljes beállítási oldala](/images/views-create-view.webp)
1. Ha most meglátogatjuk a webhelyünk címlapját, a fő navigációban egy új, _Árusok_ menüpontot kell látnunk. Rákattintva az új nézetünk _oldal_ típusú megjelenítőjére érkezünk, amely felsorolja az eddig tárolt kereskedőinket.
    ![Vendors view output](/images/views-create-view-output.webp)
## Az ismeretek elmélyítése

Elképzelhető, hogy az imént az új nézettel együtt automatikusan létrehozott menüpont nem éppen olyan sorrendben következik a többi között, ahogy szeretnénk. Bátran rendezzük át a menüpontok sorrendjét a [menu-reorder](./menu-reorder.md) témakörnél leírtak alapján.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/aw02gXlte9I" title="Tartalomlista-nézet létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
