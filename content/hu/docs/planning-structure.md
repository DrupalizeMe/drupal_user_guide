---
title: "A tartalmi szerkezet kitalálása"
description: "Kidolgozunk egy tervet arra, hogyan feleltessük meg a különböző fajtájú tartalmainkat a Drupal entitásaltípusaival."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "hu"
---
## Célkitűzés { #planning-structure }

A témakör végére képesek leszünk megtervezni a webhelyünk tartalmi szerkezetét, azaz hozzá tudjuk rendelni a különbözőféle közzétenni kívánt információinkat a Drupal adott entitástípusaihoz és -altípusaihoz. Valamint eldöntjük azt is, hogy webhelyünk mely oldalai fognak csak más tartalmak felsorolásából állni (ezek a _listaoldalak_).
## Szükséges előismeretek

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Lépések

1. Először is tartsunk egy szabad ötletbörzét társainkkal arról, hogy egyáltalán milyenféle információkat szeretnénk közzétenni leendő webhelyünkön, és hogy látogatóink mire lesznek várhatóan kiváncsiak. Az ötletelés végén gyűjtsük össze eredményeinket, körülbelül úgy, ahogy az [preface-scenario](./preface-scenario.md) témakörnél látható.
1. E felsorolás elemein haladjunk végig egyesével, és döntsük el, hogy valószínűleg melyik entitástípus lenne a legmegfelelőbb számukra. Bár ez nem könnyű elsőre, de segítségünkre lehet pár alapelv szem előtt tartása. Tegyük fel a kérdést, hogy a webhelyünk mely pontjain szeretnénk, hogy feltűnjön egy bizonyos tartalom? Például egy termelői piac esetén kiemelten fontos a nyitvatartási idő szerepeltetése a webhely lehető legtöbb aloldalán, valahol az oldalsávon mondjuk. Erre tökéletesen alkalmas a _blokkok_ használata. Vagy vegyünk egy másik példát: ugyanitt azt szeretnénk, hogy a piacunk árusainak lehessen egy-egy saját bemutatkozó oldala a webhelyen, amit bejelentkezve ők maguk tudnak szerkeszteni. Ehhez viszont jól használható az alaprendszer _Node_ modulja, amelynek részletes jogosultságkezelő képességével ezt könnyen megvalósíthatjuk.
    Ezekre a kérdésekre azonban nem csak egy helyes válasz létezhet. Dönthetünk úgy, hogy árusaink előbb említett bemutatkozó oldalait nem önálló tartalomtípusként hozzuk létre, hanem a felhasználói fiókjuk profiloldalát bővítjük ki további információkkal. Ekkor azonban gondolnunk kell arra, hogy a jövőben nem fogja tudni másik felhasználó – például egy kereskedő alkalmazottja – frissíteni a cég adatlapját, ha az felettesének a személyes profiloldala.
1. Miután nagyjából csoportosítottuk a közzétenni kívánt tartalmainkat fajtájuk szerint, a következő lépés azok további elkülönítése, de már egy-egy fajtán belül. Maradva a termelői piac webhelyünk példájánál, kitaláltuk, hogy háromféle aloldalt különböztetünk meg: egy teljesen általánosat (például a Címlap és Rólunk oldalakhoz), egy bemutatkozó oldalt az árusainknak és végül egy harmadik oldaltípust az általuk feltöltött recepteknek.
1. Erre az oldaltípusokra való csoportosításra az előző lépésben azért volt szükség, mert a most következő mezők megléte, száma, sorrendje, beállításaik stb. mind-mind eltérőek lehetnek az egyes aloldaltípusainknál. Például az árusok bemutatkozó oldalain szükség lehet egy webcím mezőre (amiben linkelni tudja a saját honlapját), ám ennek semmi értelme nem lenne egy recept aloldalán.
1. Aztán döntenünk kell arról is, hogy az eddig kitalált tartalomtípusainkat hol és hogyan fogjuk kilistázni? Melyeknek szükséges egy egész listaoldalt elfoglalniuk, és melyeknek elég, ha csak valahol mellékesen vannak felsorolva? Egy listázó (hivatalos nevén _nézet_) esetén a legelső kérdés, hogy milyen entitásokat listáz. Ha ez megvan, akkor jöhetnek a részletek: milyen szűréssel válogasson az összes elem közül és a leszűrt elemek melyik közös értékük alapján és milyen irányban legyenek sorba állítva. Ehhez persze előbb ki kell választanunk, hogy a listázó bemeneteként használt entitástípus tulajdonságai közül egyáltalán melyiket vegye figyelembe megjelenítéskor? Amikor például recepteket sorolunk majd fel a termelői piac webhelyünk erre szolgáló listaoldalán, és szeretnénk, ha azon lenne egy „Szükséges hozzávalók” szerinti szűrési lehetőség, akkor a Recept tartalomtípusnak kell, hogy legyen egy Összetevők nevű mezője, amire ez a kereső szűrni tud.
1. Miután így összegyűjtöttük, hogy milyen mezőkre lesz szükség az egyes tartalomtípusoknál (pontosabban fogalmazva _entitásaltípusoknál_), a következő feladatunk, hogy meghatározzuk, milyen fajta adatot (például formázatlan vagy HTML-formázott szöveget, dátumot, vagy képet stb.) fog egy-egy mező tárolni. A mezők legtöbbször egy értéket tudnak tárolni, de vannak kivételek: a Recept tartalomtípusunknál használt, fentebb is említett Összetevők mezőnk például több értéket is képes lesz majd tárolni (például a répa, krumpli, zeller 3 különböző érték lehet egyetlen mezőben).
1. Megvannak a mezőink, ez nagyszerű. De hogy ne kelljen majd a felhasználóinknak minden egyes recept beküldésekor kézzel begépelni a zöldségek neveit, sőt, az egyező zöldségnevek valahogy központilag kezelhetőek legyenek, ezért ki kell találnunk egy megoldást arra, hogyan alakítsunk ki kapcsolatot közöttük. E célra jó lehet valamilyen egységes címkézés (a későbbiekben _taxonómiaként_ említjük majd), ezért mezőink alakuló listája mentén gondoljuk át, melyeknél lehet majd hasznos egy ilyen hivatkozott értékadás? Az előbb csak egy példát említettünk a receptek összetevőivel, de hasonlóan működhet például az Árusok bemutatkozó oldalának szerkesztésekor a standjaik kiválasztása egy adminisztrátorok által előre felvitt listából.
1. Már majdnem kész vagyunk a tervezéssel: a mezők azonban nemcsak címkékre hivatkozhatnak, hanem más tartalmi egységekre is. Például az árusok fognak recepteket feltölteni a webhelyre, de jó lenne látni az egyes receptek megtekintésekor, hogy ki küldte be őket. Ehhez fel kell venni egy felhasználói fiókra hivatkozó mezőt, amiben ezt az információt majd eltároljuk.

    A könnyebb áttekintés kedvéért foglaljuk össze az alábbi táblázatban az eddig példaként említett tervünket:

    <table>
      <thead>
        <tr>
          <th>Entitástípus</th>
          <th>Entitásaltípus</th>
          <th>Példák</th>
          <th>Mezők</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Tartalmi egység</td>
          <td>Egyszerű oldal</td>
          <td>Címlap, Rólunk</td>
          <td>Cím, Törzs</td>
        </tr>
        <tr>
          <td>Tartalmi egység</td>
          <td>Árus</td>
          <td>A piac kereskedőinek bemutatkozó oldalai</td>
          <td></td>
        </tr>
        <tr>
          <td>Tartalmi egység</td>
          <td>Recept</td>
          <td>Beküldött receptek külön oldalakon</td>
          <td></td>
        </tr>
        <tr>
          <td>Egyéni blokk</td>
          <td>(nincs altípusa)</td>
          <td>Szerzői jogi megjegyzés a láblécben Nyitvatartási idő és helyszín az oldalsávra</td>
          <td>Nincsenek egyéni mezői</td>
          <td></td>
        </tr>
        <tr>
          <td>Taxonómiakifejezés</td>
          <td>Összetevők</td>
          <td>Répa, krumpli, zeller és más zöldségek</td>
          <td></td>
        </tr>
        <tr>
          <td>Kapcsolatfelvételi űrlap</td>
          <td>(nincs altípusa)</td>
          <td>Általános webhelyszintű</td>
          <td>Név, e-mail, tárgy, üzenet</td>
        </tr>
        <tr>
          <td>Felhasználói fiók</td>
          <td>(nincs altípusa)</td>
          <td>Nem lesz megjelenítve nyilvánosan</td>
          <td>Nincsenek egyéni mezői</td>
        </tr>
      </tbody>
    </table>

    Listaoldalakból (_nézetekből_) pedig ezekre lesz szükségünk:

    <table>
      <thead>
        <tr>
          <th>Oldal vagy oldalrégió</th>
          <th>Entitástípus és -altípus</th>
          <th>Szűrés, rendezés, lapozás</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Árusok listaoldal</td>
          <td>Árus tartalmakat listáz</td>
          <td>Mindegyik, ábécérendben, lapozóval</td>
          <td></td>
        </tr>
        <tr>
          <td>Receptek listaoldal</td>
          <td>Recept tartalmakat listáz</td>
          <td>Szűrés hozzávalók szerint, ábécérendben</td>
          <td>Étel fotója és neve</td>
          <td></td>
        </tr>
        <tr>
          <td>Legújabb receptek, oldalsávon</td>
          <td>Recept tartalmakat listáz</td>
          <td>Az öt legutóbb beküldött</td>
          <td></td>
        </tr>
      </tbody>
    </table>
## Az ismeretek elmélyítése

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Kapcsolódó témák

[structure-taxonomy](./structure-taxonomy.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CaNt4DEeIgU" title="A tartalmi szerkezet kitalálása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Grant Dunham](https://www.drupal.org/u/gdunham). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
