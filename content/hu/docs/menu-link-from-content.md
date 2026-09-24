---
title: "Oldal hozzáadása egy menühöz"
description: "Röviden áttekintjük, hogyan lehet egy tartalmat elhelyezni a webhely navigációjában."
id: "menu-link-from-content"
translation_key: "menu-link-from-content"
source_locale: "hu"
---
## Célkitűzés { #menu-link-from-content }

Elhelyezünk egy tartalmat a webhely navigációjában. Legyen ez például a _Rólunk_ oldal.
## Szükséges előismeretek

* [menu-concept](./menu-concept.md)
* [content-edit](./content-edit.md)
## Webhely előfeltételei

Már léteznie kell a _Rólunk_ tartalomelemnek. Ehhez lásd az [content-create](./content-create.md) szakaszt.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ (címsorban _admin/content_) oldalra.
1. Keressük ki a _Rólunk oldalt_ és a sorának végén kattintsunk a _Szerkesztés_ gombra. Ekkor megjelenik a szokványos tartalomszerkesztési oldal.
    <img src="/images/menu-link-from-content_edit_page.webp" alt="Oldal szerkesztése hivatkozás" width="100%" />
1. A jobb oldalsávon a _Menübeállítások_ fülre kattintva nyissuk ki.
1. Jelöljük be a _Menüpontot hoz létre_ opciót, így további lehetőségek jelennek meg.
1. Töltsük ki a mezőket az alábbi táblázat szerint értelemszerűen:
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
          <td>Menüpont neve</td>
          <td>Az a szöveg, ami magának a menüpontnak a felirata lesz</td>
          <td>Rólunk</td>
        </tr>
        <tr>
          <td>Leírás</td>
          <td>Akkor jelenik meg, ha az egér a menühivatkozás fölé kerül.</td>
          <td>A piac története</td>
        </tr>
        <tr>
          <td>Szülőelem</td>
          <td>A menü hierarchiájában melyik elem alá tartozzon ez az új menüpont. Például ha a _<Fő navigáció>_ lehetőséget választjuk, akkor ez az oldal is a legfelső szintű menüpontok között fog szerepelni. Ellenben ha egy már létező menüpontot választunk ki szülőnek, akkor azzal máris elkezdhetünk többszintű menüszerkezetet építeni.</td>
          <td><Fő navigáció></td>
        </tr>
        <tr>
          <td>Súly</td>
          <td>Az azonos szintre kerülő menüpontok sorrendjét befolyásolja, a nagyobb súlyúak lesüllyednek, a kisebb súlyúak felemelkednek.</td>
          <td>-2</td>
        </tr>
      </tbody>
    </table>

    ![Menühivatkozás létrehozása a tartalomszerkesztési oldalon](/images/menu-link-from-content.webp)

1. A _Mentés és megtartás közzétettként_ gombra kattintva menthetjük el új változtatásainkat. Ekkor a _Címlap_ linkre vagy a _Vissza a webhelyre_ menüpontra kattintva ellenőrizhetjük, valóban megjelenik-e új menüpontunk, ahogy az alábbi képen is látszik:
    <img src="/images/menu-link-from-content-result.webp" alt="Az új Rólunk menüpont hozzáadva a főmenühöz" width="100%" />

## Az ismeretek elmélyítése

[menu-reorder](./menu-reorder.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/JE_3INtBcTw" title="Oldal hozzáadása egy menühöz" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Working with menus](https://www.drupal.org/docs/8/core/modules/block/overview) (azaz „Menük használata”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Boris Doesborg](https://www.drupal.org/u/batigolix) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) ["Working with Menus"](https://www.drupal.org/docs/8/core/modules/menu-ui) (azaz „Menük használata”) című szócikkéből vette át és szerkesztette, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
