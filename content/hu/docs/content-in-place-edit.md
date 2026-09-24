---
title: "Tartalom szerkesztése helyben"
description: "Tartalom szerkesztése helyi szerkesztővel."
id: "content-in-place-edit"
translation_key: "content-in-place-edit"
source_locale: "hu"
---
## Célkitűzés { #content-in-place-edit }

E feladat célja, hogy a helyi szerkesztő segítségével különböző információkat adjunk hozzá a Rólunk oldalhoz anélkül, hogy a szerkesztőoldalát külön megnyitnánk.
## Szükséges előismeretek

* [planning-data-types](./planning-data-types.md)
* [content-create](./content-create.md)
* [content-edit](./content-edit.md)
* [config-overview](./config-overview.md)
## Webhely előfeltételei

A szerkeszteni kívánt Rólunk példaoldalnak már léteznie kell. Lásd: [content-create](./content-create.md).
## Lépések

A helyi szerkesztő használatához menjünk el a Rólunk oldalra. Ha az oldalt még nem adtuk hozzá a navigációhoz, ezt a következő lépésekkel tudjuk megtenni:

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ (_admin/content_) oldalra.
1. Ha a szerkeszteni kívánt tartalomelem nemrég jött létre, vagy frissült, a tartalomlista tetején jelenik meg. Ha régebbi, akkor a _Típus_, a  _Cím_ vagy egyéb szűrők használatával is kereshetjük.
1. Keressük meg a Rólunk oldalt, és kattintsunk rá.

    Ha a szerkeszteni kívánt tartalom megjelent a böngészőben, a gyorsszerkesztőt az alábbi lépéseket követve használhatjuk:

1. Keressük meg azt a részét az oldalnak, ahol megjelenik a szerkeszteni kívánt tartalom, és kapcsoljuk be a gyorsszerkesztő módot a _Gyorsszerkesztés_ szövegkörnyezeti hivatkozás használatával (a szövegkörnyezeti hivatkozások hozzáférésével kapcsolatos utasításokat lásd itt: [config-overview](./config-overview.md)). Ennek a tartalomelemnek az összes szerkeszthető mezője kékkel keretezve jelenik meg, továbbá egy lebegő párbeszédablak is felugrik.
    <img src="/images/content-in-place-edit-hover-box.webp" alt="Képernyőkép a gyorsszerkesztő módról" width="100%" />
1. Mivel a _Törzs_ mező támogatja a szövegszerkesztőt, ezért kattintsunk a _Törzs_ szövegrészre a szerkesztés elkezdéséhez. A szerkesztő eszköztár a lebegő párbeszédablakban jelenik meg.
1. Adjunk meg további információt a Termelői Piacról. A _Mentés_ gomb a lebegő dobozban jelenik meg, és a mező keretének színe megváltozik.
    <img src="/images/content-in-place-edit-save-box.webp" alt="Képernyőkép a gyorsszerkesztő módról a szerkesztés után" width="100%" />
1. Ha megelégedtünk az elvégzett módosításokkal, a párbeszédablakban található _Mentés_ gombbal jóváhagyjuk. Ha tovább szeretnénk szerkeszteni, kattintsunk az „X”-re a változtatások elvetéséhez. A gyorsszerkesztő mód mindkét esetben kikapcsolódik.
## Az ismeretek elmélyítése

Ha a teljes szerkesztőt használjuk ugyanazon a tartalmi elemen (lásd: [content-edit](./content-edit.md)), akkor láthatjuk, hogy így a gyorsszerkesztőben megjelentekhez képest sokkal többféle információt módosíthatunk.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/6A6kbceIKKw" title="Tartalom szerkesztése helyben" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [David Lee](https://www.drupal.org/u/davidlee55) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Zsófi Major](https://www.drupal.org/u/zsofimajor) ([Cheppers](https://www.drupal.org/cheppers))
