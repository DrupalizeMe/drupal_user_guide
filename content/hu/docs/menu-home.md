---
title: "Webhely címlapjának kiválasztása"
description: "Hogyan kell úgy beállítani egy tartalomelemet, hogy az a webhelynek azonnal a címlapján jelenjen meg."
id: "menu-home"
translation_key: "menu-home"
source_locale: "hu"
---
## Célkitűzés { #menu-home }

Beállítjuk, hogy a webhelynek a címlapján melyik tartalomelem jelenjen meg.
## Webhely előfeltételei

Már léteznie kell legalább egy tartalmi egységnek. Ehhez lásd az [content-create](./content-create.md) szakaszt.
## Lépések

1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Konfiguráció_ > _Rendszer_ > _Alapvető webhelybeállítások_ menüpontot (vagy a címsorban adjuk meg az _admin/config/system/site-information_ útvonalat).
1. Itt a _Címlap_ mezőben írhatjuk át a _/node_ értéket az általunk használni kívánt oldal útvonalára, egy per (/) jelet követően. Ha például az előző témakörnél létrehozott _Címlap_ tartalmat szeretnénk itt megadni, akkor írjuk be azt, amit ott webcímálnévnek választottunk: _/cimlap_. Kattintsunk a _Beállítások mentése_ gombra.
    ![A Címlap keret, benne az éppen aktuális útvonalálnév](/images/menu-home_new_text_field.webp)
1. Ellenőrzésképpen most menjünk webhelyünk címlapjára, hogy meggyőződhessünk arról, hogy valóban az töltődik-e be, amit beállítottunk.
    <img src="/images/menu-home_final.webp" alt="A webhely címlapjaként a Címlap nevű tartalom jelenik meg" width="100%" />

## Az ismeretek elmélyítése

* [menu-link-from-content](./menu-link-from-content.md)
* Az [content-create](./content-create.md) témakörben leírtak szerint hozzunk létre egy-egy új oldalt „Nem található” és „Nincs kellő jogosultság” néven. Majd pedig ugyanezen az oldalon állítsuk be őket a 404-es és 403-as hibaoldalakként.
## Kapcsolódó témák

[menu-concept](./menu-concept.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/qOL8arBYpJ4" title="Webhely címlapjának kiválasztása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta és szerkesztette: [Ann Greazel](https://www.drupal.org/u/AnnGreazel), [Jack Haas](https://www.drupal.org/u/jerseycheese) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
