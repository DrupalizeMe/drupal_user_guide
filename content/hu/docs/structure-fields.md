---
title: "Egyszerű mezők tartalomtípushoz adása"
description: "Így lehet mezőket adni egy tartalomtípushoz."
id: "structure-fields"
translation_key: "structure-fields"
source_locale: "hu"
---
## Célkitűzés { #structure-fields }

Hozzáadunk egy _Kép_ és egy _Webcím_ típusú mezőt az _Árus_ tartalomtípushoz.
## Szükséges előismeretek

[planning-data-types](./planning-data-types.md)
## Webhely előfeltételei

Talán szükségtelen mondani, hogy az _Árus_ nevű tartalomtípusnak, amihez e két mezőt hozzá tervezzük adni, már léteznie kell. Ha még nincs, akkor a [structure-content-type](./structure-content-type.md) rész kínál segítséget a létrehozásához.
## Lépések
### Mező hozzáadása az árus saját honlapjára mutató hivatkozás tárolására

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ menüpontot (vagy a címsorban adjuk meg az _admin/structure/types_ útvonalat). Az _Árus_ sor jobb végén a lenyíló gombról válasszuk ki a _Mezők kezelése_ lehetőséget. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt mégis találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
1. Kattintsunk a _Mező hozzáadása_ gombra, majd a megjelenő oldalon választhatunk, hogy új mezőt szeretnénk létrehozni e célra, vagy újrahasznosítjuk a webhelyen korábban létrehozott mezők valamelyikét.
1. Töltsük ki az alább felsorolt beviteli mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Beviteli mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Új mező hozzáadása</td>
          <td>Itt kell kiválasztani, hogy a felsoroltak közül milyen fajtájú mezőt kívánunk használni e célra.</td>
          <td>Hivatkozás</td>
        </tr>
        <tr>
          <td>Felirat</td>
          <td>Az új mező adminisztrációs oldalakon megjelenő felirata.</td>
          <td>Árus webcíme</td>
        </tr>
      </tbody>
    </table>

    Mellette a _Programok által használt név_ automatikusan jelenik meg a _Felirat_ mezőbe beírtak alapján. Ahogy a neve is mutatja, ezzel nem sok dolgunk van, de ha nem tetszik, akkor a _Szerkesztés_ hivatkozásra kattintva felülírhatjuk.
    ![Mező hozzáadása oldal](/images/structure-fields-add-field.webp)

1. A _Mentés és folytatás_ gombra kattintva már az _Árus webcíme_ oldal _Mező beállításai_ fülén találjuk magunkat. Itt egyetlen, de fontos dolgot kell megadnunk: hány darab ilyen mezőt lehessen ugyanarra a tartalmi elemre rátenni? Ahogy a legördülőt kinyitva látjuk, számuk lehet korlátlan és korlátozott. Nekünk az utóbbi kell, írjunk be az _Értékek megengedett száma_ mezőbe egy egyes számjegyet.
1. Kattintsunk a _Mező beállításainak mentése_ gombra, ekkor a – kissé félreérthető – _Árus Árus webcíme beállításai_ című oldalra jutunk, ahol már kifejezetten csak az ezen a tartalomtípuson való működését tudjuk beállítani az új mezőnek. Töltsük ki az alább felsorolt beviteli mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Beviteli mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Címke</td>
          <td>Az _Árus_ típusú tartalmak szerkesztésekor a mező felett megjelenő felirat.</td>
          <td>Árus webcíme</td>
        </tr>
        <tr>
          <td>Súgó szöveg</td>
          <td>Ezt a mezőt nemcsak képzett adminisztrátortársaink, de maguk az árusok is kitölthetik majd a saját adatlapjukon, ezért itt tudunk nekik további tanácsokat adni, hogy milyen webcímet tehetnek ebbe a mezőbe.</td>
          <td>_(üresen is hagyható)_</td>
        </tr>
        <tr>
          <td>Kötelező mező</td>
          <td>Engedje-e a rendszer elmenteni az árus adatlapját akkor is, ha nincs megadva rajta webcím?</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Engedélyezett hivatkozástípusok</td>
          <td>E mező célja, hogy az árusok adatlapjaikon elhelyezhessenek egy-egy honlapjukra mutató linket. Mivel az egy másik, jelen _Termelői Piac_ webhelyünktől független oldal, ezért külső hivatkozásnak számít.</td>
          <td>Csak külső hivatkozások</td>
        </tr>
        <tr>
          <td>Hivatkozásszöveg engedélyezése</td>
          <td>Lehessen-e egyéni felirattal testreszabni a kifelé mutató hivatkozást?</td>
          <td>Tiltott</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-vendor-url.webp" alt="Mezőbeállítások az Árus tartalomtípushoz" width="100%" />

1. A _Beállítások mentése_ gombra kattintva végeztünk is az árus saját honlapjára mutató hivatkozás tárolására szolgáló mező hozzáadásával. Jöhet a következő!
### Mező hozzáadása az árus fotójának vagy logójának tárolására

1. Ismét kattintsunk a _Mező hozzáadása_ gombra, majd a megjelenő oldalon töltsük ki az alább felsorolt beviteli mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Beviteli mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Új mező hozzáadása</td>
          <td>Itt kell kiválasztani, hogy a felsoroltak közül milyen fajtájú mezőt kívánunk használni e célra.</td>
          <td>Kép</td>
        </tr>
        <tr>
          <td>Felirat</td>
          <td>Az új mező adminisztrációs oldalakon megjelenő felirata.</td>
          <td>Fő kép</td>
        </tr>
      </tbody>
    </table>
1. A _Mentés és folytatás_ gombra kattintva az új mező további beállításait kérő oldalra jutunk. Mint látjuk, az előbbi, webcím típusú mezőhöz képest ennek több konfigurációs lehetősége van, nem csak az _Értékek megengedett száma_. Beállíthatunk például alapértelmezett képet, ami akkor jelenik meg, ha valahol egy ilyen mezőnek nem adtak még értéket. Ha elfogadjuk az alapértelmezett beállításokat, akkor kattintsunk a _Mező beállításainak mentése_ gombra.
1. Ekkor a – valamivel már érthetőbb – _Árus Fő kép beállításai_ című oldalra jutunk, ahol már kifejezetten csak az ezen a tartalomtípuson való működését tudjuk beállítani az új mezőnek. Töltsük ki az alább felsorolt beviteli mezőket ezekkel az értékekkel:
    <table>
      <thead>
        <tr>
          <th>Beviteli mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Címke</td>
          <td>Az _Árus_ típusú tartalmak szerkesztésekor az e mező felett megjelenő felirat.</td>
          <td>Fő kép</td>
        </tr>
        <tr>
          <td>Súgószöveg</td>
          <td>Ezt a mezőt nemcsak képzett adminisztrátortársaink, de maguk az árusok is kitölthetik majd a saját adatlapjukon, ezért itt tudunk nekik további tanácsokat adni, hogy milyen képet tölthetnek fel ebbe a mezőbe.</td>
          <td>_(üresen is hagyható)_</td>
        </tr>
        <tr>
          <td>Kötelező mező</td>
          <td>Engedje-e a rendszer elmenteni az árus adatlapját akkor is, ha nincs feltöltve hozzá kép?</td>
          <td>Nincs bejelölve</td>
        </tr>
        <tr>
          <td>Megengedett fájlkiterjesztések</td>
          <td>Milyen típusú képfájlokat fogadjon el a rendszer?</td>
          <td>png, gif, jpg, jpeg</td>
        </tr>
        <tr>
          <td>Fájlkönyvtár</td>
          <td>Tárhelyünk azon könyvtára a kiszolgálón, ahol szeretnénk, ha együtt lennének tárolva az árusok képei.</td>
          <td>arusok</td>
        </tr>
        <tr>
          <td>Legkisebb képfelbontás</td>
          <td>Az itt képpontokban megadott négyzetnek rá kell férnie a feltölteni kívánt képre. Ha nem fér rá, mert a kép valamelyik irányú kiterjedése kisebb, akkor a rendszer nem fogja engedni feltölteni.</td>
          <td>600 × 600</td>
        </tr>
        <tr>
          <td>A legnagyobb feltölthető méret</td>
          <td>Érdemes korlátozni, hiszen a mai korszerű digitális fényképezőgépek és okostelefonok akár óriási fájlméretű fotókat is készíthetnek.</td>
          <td>5 MB</td>
        </tr>
        <tr>
          <td>Altmező engedélyezése</td>
          <td>Lehessen-e megadni a képhez leírást?</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>Altmező kötelező</td>
          <td>Legyen-e kötelező megadni ezt a szöveget?</td>
          <td>Bejelölve</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-main-img.webp" alt="Képmező beállításai az Árus tartalomtípuson" width="100%" />

1. A _Beállítások mentése_ gombra kattintva végeztünk is az árus fotójának vagy logójának tárolására szolgáló mező hozzáadásával. Ha mindent jól csináltunk, akkor az alábbihoz hasonló látvány fogad az _Árus_ tartalomtípus mezőinek listáján:
    <img src="/images/structure-fields-result.webp" alt="Árus tartalomtípus mezőinek listája" width="100%" />
1. Próbaképpen hozzunk létre két tartalmat az _Árus_ típussal (ehhez lásd az [content-create](./content-create.md) részt), és mindenképpen adjunk meg nekik külső honlapcímet, valamint töltsünk fel hozzájuk képet is.
### Már létező mezők újrahasznosítása

Jogos lehet a felvetés, hogy mire való a korábbi 2. lépésnél említett mezők újrahasznosíthatósága, ha az árus honlapcímét és fotóját is vadonatúj mezőként vittük fel.

Szintén érdekelheti az Olvasót, hogy a későbbi 1. lépésnél a kép mező létrehozásakor miért ilyen általános nevet („Fő kép”) adtunk a kép típusú mezőnek, amikor adhattunk volna „Árus logója” vagy „Árus fotója” nevet is neki.

Hogy biztosan megértsük az e mögött húzódó logikát – ami egyben a Drupal mezőkezelésének egyik legnagyobb erőssége is –, most adjunk hozzá egy _Fő kép_ típusú mezőt a _Recept_ tartalomtípushoz is! A lépések nagyon hasonlóak lesznek az eddigiekhez, azzal a fontos különbséggel, hogy amikor a _Recept_ tartalomtípus _Mezők kezelése_ oldalára érkezünk, akkor már látni fogunk egy választási lehetőséget: a képernyő jobb oldalán megjelenik egy új, _Egy már létező mező újbóli használata_ legördülő lista, amiből könnyedén ki tudjuk választani az imént felvitt _Kép: field_fo_kep_ mezőnket. Ennek már adhatunk például _Ételfotó_ nevet, hiszen az már csak a receptoldalakat befolyásolja, az árusokéit már nem.
## Az ismeretek elmélyítése

* [structure-image-styles](./structure-image-styles.md)
* [structure-content-display](./structure-content-display.md)
* [structure-form-editing](./structure-form-editing.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CZpfR9WbVcQ" title="Egyszerű mezők tartalomtípushoz adása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Add a field to a content type](https://www.drupal.org/node/774742) (azaz „Egy mező hozzáadása egy tartalomtípushoz”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

Írta: [Sree Veturi](https://www.drupal.org/u/sree) és [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
