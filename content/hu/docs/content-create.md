---
title: "Új tartalmi egység felvitele"
description: "E témakörben áttekintjük, hogyan lehet új tartalmi egységet felvinni a webhelyünkre."
id: "content-create"
translation_key: "content-create"
source_locale: "hu"
---
## Célkitűzés { #content-create }

Felviszünk és közzéteszünk egy új tartalmi egységet, amit később a webhelyünk címlapjaként használhatunk majd.
## Szükséges előismeretek

[content-paths](./content-paths.md)
## Webhely előfeltételei

Az _Egyszerű oldal_ tartalomtípusnak már léteznie kell. Nem kell félnünk, ez nem a mi dolgunk: a Drupal telepítésekor ez már automatikusan megtörtént.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ > _Tartalom hozzáadása_ > _Egyszerű oldal_ oldalra (vagy a címsorban adjuk meg a _node/add/page_ útvonalat). Megjelenik az _Egyszerű oldal beküldése_ oldal az általános tartalomszerkesztési űrlappal.
1. Kattintsunk az _Összefoglaló szerkesztése_ linkre.
1. Töltsünk ki minden mezőt a lent látható módon.
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
          <td>Cím</td>
          <td>Nevezzük el az éppen létrehozandó új oldalunkat. Amit ide beírunk, az fog megjelenni a böngészőlapokon, abból jön majd létre a webcímálnév és bekerül az oldalunk forráskódjába metatagként.</td>
          <td>Címlap</td>
        </tr>
        <tr>
          <td>Összefoglaló</td>
          <td>Egy tömör, pármondatos rövidítése az oldal tartalmának, amit bevezetőként lehet majd használni az áttekintő oldalakon.</td>
          <td>Termelői piacunk nyitvatartása és helyszíne.</td>
        </tr>
        <tr>
          <td>Törzs</td>
          <td>Az oldal tényleges teljes tartalma</td>
          <td>Üdvözöljük Termelői piacunkon!</td>
        </tr>
        <tr>
          <td>Útvonal beállításai > Webcímálnév</td>
          <td>Megadható egy alternatív útvonal, amelyen ez az oldal szintén elérhető lesz.</td>
          <td>/cimlap</td>
        </tr>
      </tbody>
    </table>

    A szövegszerkesztő eszközsorán a _Forráskód_ gombra kattintva elérjük közvetlenül a HTML forráskódját is az oldalunknak, amit éppen szerkesztünk.
    <img src="/images/content-create-create-basic-page.webp" alt="Egy egyszerű oldal beküldése űrlap" width="100%" />

1. Az _Előnézet_ gombra kattintva még elmentés előtt meggyőződhetünk róla, hogy minden úgy néz ki, ahogy szeretnénk.
1. Az előnézet bezárásához kattintsunk a _Vissza a tartalomszerkesztéshez_ gombra.
1. Ha tartalmunk elkészült, a _Mentés és publikálás_ gombbal küldhetjük be. Ekkor az új tartalmi egységünk létrejön, és listázódik a _Tartalom_ nevű áttekintőoldalon.
1. Ugyanígy hozzuk létre a _Rólunk_ oldalt ezzel a címmel, amelynek tartalma a termelői piac története lehet.
## Az ismeretek elmélyítése

* [menu-home](./menu-home.md)
* [menu-link-from-content](./menu-link-from-content.md)
* [language-content-translate](./language-content-translate.md)
## Kapcsolódó témák

* [language-concept](./language-concept.md)
* [content-paths](./content-paths.md)
* [content-edit](./content-edit.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/h312fekiSNE" title="Új tartalmi egység felvitele" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[About nodes](https://www.drupal.org/docs/8/core/modules/node/about-nodes) (azaz „A tartalmi csomópontokról”) közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

Írta: [Agnes Kiss](https://www.drupal.org/u/pixiekiss) és [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
