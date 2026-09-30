---
title: "Egy saját blokk létrehozása"
description: "Végigvesszük annak lépéseit, hogyan lehet egyéni, saját blokkot létrehozni."
id: "block-create-custom"
translation_key: "block-create-custom"
source_locale: "hu"
---
## Célkitűzés { #block-create-custom }

E témakör végére lesz egy saját definiált blokkunk, amiben a termelői piacunk nyitvatartási idejét és helyszínét tüntetjük fel.
## Szükséges előismeretek

* [block-concept](./block-concept.md)
* [block-regions](./block-regions.md)
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Blokk elrendezés_ > _Egyéni blokkok könyvtára_ menüpontot, vagy írjuk be a címsorba az _admin/structure/block/block-content_) útvonalat.
1. Kattintsunk az _Egyéni blokk hozzáadása_ gombra. Megnyílik az ugyanilyen nevű oldal.
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
          <td>Blokk leírása</td>
          <td>A csak az adminisztrátoroknak megjelenő összefoglalója a blokknak.</td>
          <td>Helyszín és nyitvatartás blokk</td>
        </tr>
        <tr>
          <td>Törzs</td>
          <td>A blokk látogatóknak megjelenített tartalma.</td>
          <td>Nyitva: vasárnap de. 9 órától du. 2 óráig április és szeptember között<br />Helyszín: Bárkifalva városközpontjában, a Bizalom Bank parkolójában.</td>
        </tr>
      </tbody>
    </table>

    ![Egy egyéni blokk hozzáadása](/images/block-create-custom-add-custom-block.png)

1. Kattintsunk a _Mentés_ gombra. Megjelenik egy rendszerüzenet, ami tájékoztat a blokkunk elmentésének sikerességéről.
## Az ismeretek elmélyítése

* A blokkunk tartalmának tetszőleges módosítása. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Blokk elrendezés_ > _Egyéni blokkok könyvtára_ menüpontot, vagy írjuk be a címsorba az _admin/structure/block/block-content_) útvonalat. Keressük meg a blokkunkat a listában, és a _Szerkesztés_ hivatkozásra kattintva írjuk át, amit változtatni szeretnénk.
* A most létrehozott blokkunk kihelyezése az oldalsávra. Ennek részleteit lásd a [block-place](./block-place.md) témakörnél.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/sI2wrbn3cPg" title="Egy saját blokk létrehozása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Working with blocks (content in regions)](https://www.drupal.org/docs/8/core/modules/block/overview) (azaz „Blokkok használata, tartalom a régiókban”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Jacob Redding](https://www.drupal.org/u/jredding) és [Boris Doesborg](https://www.drupal.org/u/batigolix) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Working with blocks (content in regions](https://www.drupal.org/docs/8/core/modules/block/overview) azaz „Blokkok használata, tartalom a régiókban”) című szócikkéből vették át és szerkesztették, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
