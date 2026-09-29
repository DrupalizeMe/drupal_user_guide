---
title: "Egy hivatkozás mező hozzáadása"
description: "Két tartalomtípus összekötése egy egymásra mutató mező segítségével."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "hu"
---
## Célkitűzés { #structure-adding-reference }

Ebben a témakörben célunk, hogy a _Recept_ tartalmakat összekössük az azokat beküldő _Árusok_ adatlapjaival.
## Szükséges előismeretek

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Webhely előfeltételei

A _Recept_ és _Árus_ tartalomtípusoknak létezniük kell. Ehhez lásd a [structure-content-type](./structure-content-type.md) témakört.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ (_admin/structure/types_) menüpontot. Aztán kattintsunk a _Mezők kezelése_ lenyíló gombra a _Recept_ tartalomtípusnál. Ekkor megjelenik a _Mezők kezelése_ oldal.
1. Kattintsunk a _Mező hozzáadása_ gombra. Megjelenik a _Mező hozzáadása_ oldal. Töltsünk ki minden mezőt a lent látható módon. Miután végeztünk, mentsük el munkánkat a _Mentés és folytatás_ gombbal.
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
          <td>Lehetőségünk van kiválasztani a mező típusát.</td>
          <td>Referencia > Tartalom</td>
        </tr>
        <tr>
          <td>Felirat</td>
          <td>Adhatunk a mezőnek egy tetszőleges nevet.</td>
          <td>Beküldte</td>
        </tr>
      </tbody>
    </table>

    ![Egy hivatkozó mező hozzáadása a tartalomtípushoz](/images/structure-adding-reference-add-field.png)

1. Az ezt követően betöltődő oldal címe _Beküldte_, azaz az általunk előbb hozzáadott új mező neve. Itt lehet pár, kifejezetten ehhez a mezőhöz kapcsolódó beállítást megadni. Töltsünk ki minden mezőt a lent látható módon. Amikor végeztünk, kattintsunk a _Mező beállításainak mentése_ gombra.
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
          <td>Tartalom</td>
        </tr>
        <tr>
          <td>Értékek megengedett száma</td>
          <td>Az ebben a mezőben tárolható értékek számának felső határa.</td>
          <td>Korlátozott, 1</td>
        </tr>
      </tbody>
    </table>

    ![Egy hivatkozott mező tárolási beállításai](/images/structure-adding-reference-set-field-basic.png)

1. Az ezután megjelenő _Recept Beküldte beállításai_ oldalon már nem a mező általános, webhelyszerte használt beállításait, hanem már csak kifejezetten a _Recept_ tartalomtípuson belüli használatának módját szabályozhatjuk. Töltsünk ki minden mezőt a lent látható módon. Végezetül kattintsunk majd a _Beállítások mentése_ gombra.
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
          <td>Felirat</td>
          <td>Ez a cím fog megjelenni a látogatóknak az oldalon a mező értéke felett.</td>
          <td>Beküldte</td>
        </tr>
        <tr>
          <td>Súgó szöveg</td>
          <td>Egy rövid szöveges segítség a webhely tartalmait szerkesztő adminisztrátoroknak.</td>
          <td>Válaszd ki a receptet beküldő árust</td>
        </tr>
        <tr>
          <td>Kötelező mező</td>
          <td>Annak szabályozására való, hogy muszáj-e kitöltenie a szerkesztőnek ahhoz, hogy elmenthesse a tartalmat.</td>
          <td>Bejelölve</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ > _Hivatkozási mód_ legördülő lista</td>
          <td>Kiválasztható, hogy a mező kitöltésekor miként legyenek felsorolva a lehetséges értékek.</td>
          <td>Alapértelmezés</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ > _Tartalomtípusok_ jelölőnégyzetek</td>
          <td>A webhelyen párhuzamosan létező több tartalomtípus közül melyekből lehessen tartalmakat kiválasztani ebbe a mezőbe.</td>
          <td>Árus</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ > _Rendezés_ legördülő lista</td>
          <td>A mező kitöltésekor a lehetséges értékeket a könnyebb áttekintés érdekében ábécérendbe lehet sorolni. Itt lehet kiválasztani, hogy ez milyen szempont szerint történjen.</td>
          <td>Árus neve</td>
        </tr>
        <tr>
          <td>_Hivatkozás típusa_ > _Rendezés iránya_ legördülő lista</td>
          <td>Melyik végéről kezdődjön a sorba rendezett lista.</td>
          <td>Növekvő</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.png" alt="Egy tartalomra hivatkozó mező lehetséges beállításai" width="100%" />

1. Ekkor a _Beküldte_ mező hozzá lett adva a _Recept_ tartalomtípushoz.
    <img src="/images/structure-adding-reference-manage-fields.png" alt="A Recept tartalomtípus Mezők kezelése oldala" width="100%" />

## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hAhWiqPlKh0" title="Egy hivatkozás mező hozzáadása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
