---
title: "Egy taxonómia-szótár létrehozása"
description: "Címkeszótár (taxonómia) létrehozása és tartalomtípushoz való hozzáadása mezőként."
id: "structure-taxonomy-setup"
translation_key: "structure-taxonomy-setup"
source_locale: "hu"
---
## Célkitűzés { #structure-taxonomy-setup }

A célunk az, hogy legyen egy _Hozzávalók_ nevű szótárunk, amit mezőként hozzá tudunk rendelni a _Recept_ tartalomtípushoz, így annak tartalmai az ételek összetevőit korlátlan alkalommal hivatkozhatják a szótár kifejezéseihez a későbbiekben is.
## Szükséges előismeretek

* [planning-data-types](./planning-data-types.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-fields](./structure-fields.md)
## Webhely előfeltételei

A _Recept_ tartalomtípusnak léteznie kell. Ehhez lásd a [structure-content-type](./structure-content-type.md) témakört.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Taxonómia_ menüpontot (vagy gépeljük a címsorba: _admin/structure/taxonomy_). Az így megnyíló oldalon még csak egy _Tags_ nevű szótárat látunk felsorolva. Ez azért van már itt, mert a webhely létrehozásakor az _Általános_ telepítési profilt választottuk, ami bemutató céllal automatikusan definiálta ezt a példaszótárat. Ha webhelyünk többnyelvű, és adminfelületét nem angolul használjuk, akkor is angolul látjuk a szótár címét – ennek oka a [language-concept](./language-concept.md) témakörnél olvasható.
    <img src="/images/structure-taxonomy-setup-taxonomy-page.webp" alt="Taxonómia-szótárak listaoldala" width="100%" />
1. Kattintsunk a _Szótár hozzáadása_ gombra, és írjuk be az alábbi értékeket:
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
          <td>Név</td>
          <td>Adjunk egy beszédes megnevezést ennek a szótárnak.</td>
          <td>Hozzávalók</td>
        </tr>
        <tr>
          <td>Leírás</td>
          <td>Röviden összefoglalhatjuk, hogy milyen célra fogjuk használni ezt a szótárat, és milyen fajta kifejezésekből fog állni.</td>
          <td>(üresen hagyhatjuk)</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="Hozzávalók taxonómia-szótár mentése" width="100%" />

1. Kattintsunk a _Mentés_ gombra. Ekkor az újonnan létrejött _Hozzávalók_ szótár kifejezéslista-oldalára jutunk, ami egyelőre még üres:
    <img src="/images/structure-taxonomy-setup-add-vocabulary.webp" alt="Hozzávalók taxonómia-szótár kifejezéseinek listája" width="100%" />
1. Kattintsunk a _Kifejezés hozzáadása_ gombra. A _Név_ mezőbe írjuk be: „Vaj”. Kattintsunk a _Mentés_ gombra.
    <img src="/images/structure-taxonomy-setup-add-term.webp" alt="Kifejezés hozzáadása oldal" width="100%" />
1. A kifejezés sikeres mentéséről egy pozitív rendszerüzenetben kapunk visszajelzést. Ennek mintájára adjunk a szótárhoz további kifejezéseket is különböző élelmiszer-alapanyagokról. Lehetnek például „tojás” és „tej”.
1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ (_admin/structure/types_) menüpontot. A _Recept_ tartalomtípusunk sorának végén a legördülő gombon válasszuk a _Mezők kezelése_ lehetőséget.
1. Kattintsunk a _Mező hozzáadása_ gombra, és másoljuk be az alábbi értékeket a megfelelő helyekre. Miután végeztünk, mentsük munkánkat a _Mentés és folytatás_ gombbal.
    <table>
      <thead>
        <tr>
          <th>Mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Új mező hozzáadása</td>
          <td>Itt kell kiválasztanunk, hogy milyen típusú mezőt szeretnénk használni.</td>
          <td>Referencia > Taxonómiakifejezés</td>
        </tr>
        <tr>
          <td>Felirat</td>
          <td>Adjuk meg, hogy mi legyen a neve ennek az új mezőnek.</td>
          <td>Hozzávalók</td>
        </tr>
      </tbody>
    </table>

    ![Hozzávalók mező hozzáadása a Recept tartalomtípushoz](/images/structure-taxonomy-setup-add-field.webp)

1. A következő beállítási oldalon másoljuk be az alábbi értékeket a megfelelő helyekre.
    Amikor végeztünk, kattintsunk a _Mező beállításainak mentése_ gombra.
    <table>
      <thead>
        <tr>
          <th>Mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hivatkozó elem típusa</td>
          <td>A webhelyen létező entitástípusok közül ki kell választanunk, hogy pontosan melyikre fog hivatkozni ez a mező.</td>
          <td>Taxonómiakifejezés</td>
        </tr>
        <tr>
          <td>Értékek megengedett száma</td>
          <td>Az ebben a mezőben tárolható értékek számának felső határa.</td>
          <td>Korlátlan</td>
        </tr>
      </tbody>
    </table>

    ![A Hozzávalók mező tárolási beállításai](/images/structure-taxonomy-setup-field-settings.webp)

1. A következő beállítási oldalon másoljuk be az alábbi értékeket a megfelelő helyekre. Végül kattintsunk a _Beállítások mentése_ gombra.
    <table>
      <thead>
        <tr>
          <th>Mező felirata</th>
          <th>Magyarázat</th>
          <th>Javasolt kitöltés</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Súgószöveg</td>
          <td>A _Recept_ típusú tartalmakat szerkesztő adminisztrátorok számára egy tájékoztatás, hogy mire való ez a mező.</td>
          <td>répa, retek, burgonya</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ keretben _Hivatkozási mód_ legördülő lista</td>
          <td>Kiválasztható, hogy a mező kitöltésekor hogyan legyenek felsorolva a lehetséges értékek.</td>
          <td>Alapértelmezés</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ keretben _A hivatkozott entitások létrehozása, ha még nem léteznek_ jelölőnégyzet</td>
          <td>Ha ezt engedélyezzük, akkor nem kell előre létrehozni a lehetséges kifejezéseket. A _Recept_ szerkesztési oldalán a nevüket ebbe a mezőbe begépelve automatikusan létrejönnek.</td>
          <td>Bepipálva</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ keretben _Szótár_ jelölőnégyzetek</td>
          <td>A webhelyen párhuzamosan létező több taxonómiaszótár közül melyekből lehessen kifejezéseket kiválasztani ebbe a mezőbe.</td>
          <td>Hozzávalók</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-taxonomy-setup-field-settings-2.webp" alt="Mező hivatkozási beállításainak szerkesztése" width="100%" />

1. Kattintsunk a _Beállítások mentése_ gombra. Ekkor visszajutunk a _Recept_ tartalomtípus _Mezők kezelése_ oldalára, ahonnan korábban kiindultunk. Szintén a betöltődő oldalon egy pozitív rendszerüzenet tájékoztat minket a mező tartalomtípushoz való hozzárendelésének sikerességéről.
    <img src="/images/structure-taxonomy-setup-finished.webp" alt="A Recept tartalomtípus Mezők kezelése oldala" width="100%" />

## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/EbsXffnjsjc" title="Egy taxonómia-szótár létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Bob Snodgrass](https://www.drupal.org/u/bsnodgrass) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
