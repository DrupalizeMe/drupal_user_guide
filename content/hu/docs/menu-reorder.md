---
title: "Navigáció sorrendjének átállítása"
description: "Áttekintjük, hogyan kell a navigáció sorrendjét átállítani."
id: "menu-reorder"
translation_key: "menu-reorder"
source_locale: "hu"
---
## Célkitűzés { #menu-reorder }

Átállítjuk a navigáció sorrendjét.
## Szükséges előismeretek

* [menu-concept](./menu-concept.md)
* [menu-link-from-content](./menu-link-from-content.md)
## Webhely előfeltételei

A _Címlap_ és _Rólunk_ oldalak menüpontjainak léteznie kell a főmenüben. Lásd az előző, [menu-link-from-content](./menu-link-from-content.md) témakört.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Felépítés_ > _Menük_ oldalra (vagy a címsorban adjuk meg az _admin/structure/menu_ útvonalat), ahol webhelyünk valamennyi menüjét látjuk felsorolva. A _Fő navigáció_ sorában válasszuk ki a legördülő listából a _Menü szerkesztése_ lehetőséget. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt mégis találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
    <img src="/images/menu-reorder_menu_titles.webp" alt="Menük listája, a Fő navigáció sora kiemelve" width="100%" />
1. Erre a _Menü szerkesztése_ oldalra eljuthatunk az adott menü környezeti hivatkozásán keresztül is, melyről lásd a [config-overview](./config-overview.md) témakört. Itt áttekinthetjük, hogy milyen menüpontok vannak jelenleg a kiválasztott menüben (példánknál maradva a _Fő navigáció_ nevűben).
    ![A Fő navigáció menüben lévő linkek](/images/menu-reorder_edit_menu.webp)
1. A menüelemek keresztirányú nyíl ikonjait megragadva fogd-és-vidd módszerrel új helyükre húzhatók. Ha valami miatt ez nem működne, akkor a _Sorok súlyának mutatása_ hivatkozásra kattintva megjelennek a sorszámaik: míg a nagyobb súlyúak (képzeletben „nehezebbek”) lesüllyednek, addig a kisebb súlyúak („könnyebbek”) feljebb kerülnek. Helyezzük tehát a _Címlap_ tételt a _Rólunk_ elé, így feljebb jelenik majd meg a sorban.
    ![Az immár átrendezett menüpontok, a figyelmeztető üzenet és a Mentés gomb](/images/menu-reorder_reorder.webp)
1. Kattintsunk a _Mentés_ gombra.
1. Ha most megnyitjuk webhelyünk valamelyik oldalát, azt fogjuk látni, hogy a főmenü fülei között a _Címlap_ az első helyre került.
    ![Az átrendezett menüelemek, első a Címlap, második a Rólunk](/images/menu-reorder_final_order.webp)
## Az ismeretek elmélyítése

Adjunk hozzá ehhez a menühöz egy új menüpontot _Kapcsolat_ néven, ami majd a _/contact_ oldalra fog vezetni. Ezt az oldalt ugyanis az alaprendszer _Contact_ modulja biztosítja, beállításairól bővebben pedig a [structure-form-editing](./structure-form-editing.md) témakörben olvashatunk.
## Kapcsolódó témák

[menu-concept](./menu-concept.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/OtT8e8lLx5E" title="Navigáció sorrendjének átállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Ann Greazel](https://www.drupal.org/u/AnnGreazel). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
