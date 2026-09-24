---
title: "Szövegformátumok és -szerkesztők beállítása"
description: "Így változtassuk meg egy szövegformátum működését és a hozzá tartozó gombokat a szerkesztő eszközsorán."
id: "structure-text-format-config"
translation_key: "structure-text-format-config"
source_locale: "hu"
---
## Célkitűzés { #structure-text-format-config }

Az a cél, hogy a vízszintes elválasztó HTML-elemet hozzáadjuk az _Alap HTML_ szövegformátum engedélyezési listájához, majd kitegyük ennek gombját az eszközsorra is.
## Szükséges előismeretek

[structure-text-formats](./structure-text-formats.md)
## Webhely előfeltételei

* A webhelyen telepítve és engedélyezve kell lenniük az alaprendszer _Filter_, _Editor_ és _CKEditor_ moduljainak. Nem kell félnünk, ez nem a mi dolgunk: a Drupal telepítésekor ez már automatikusan megtörtént.
* Az _Alap HTML_ szövegformátumnak léteznie kell. Ahogy előbb sem, úgy ez most sem a mi dolgunk: a Drupal telepítésekor az már automatikusan létrejött.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Tartalom készítése_ > _Szövegformátumok és -szerkesztők_ (vagy a címsorba gépelve: _admin/config/content/formats_) oldalra. Megjelenik a _Szövegformátumok és szerkesztők_ oldal. Megjegyzés: ha többnyelvű webhelyünk adminfelületét nem angolul használjuk, ne lepődjünk meg, ha itt mégis találkozunk angol feliratokkal a [language-concept](./language-concept.md) témakörnél leírtak miatt.
1. Az _Alap HTML_ sorában kattintsunk a _Beállítás_ gombra. Megjelenik az _Alap HTML_ oldal.
1. Figyeljük meg, hogy a _Szövegszerkesztő_ felirat alatt a _CKEditor_ van kiválasztva. Ez lehetővé teszi számunkra, hogy módosítsuk az eszközsorát.
1. Húzzuk a _Vízszintes elválasztó vonal_ (angolul „horizontal rule”) gombot a _Rendelkezésre álló gombok_ területről az _Aktív eszköztár_ szalagra. Ha valami miatt ez nem működne, akkor egy-egy gombot kijelölve a _Tab_ és nyíl billentyűk segítségével a kívánt helyre mozgathatóak. A _Csoportnevek mutatása_ linkre kattintva pedig megjeleníthetjük a gombcsoportok nevét.
    <img src="/images/structure-text-format-config-editor-config.webp" alt="A szövegszerkesztő beállítása" width="100%" />
1. Ne felejtsük el, hogy átrendezhetjük a _Szűrők feldolgozási sorrendjét_ is.
1. A gomb eszközsorra húzásakor a `<hr>` elem kódja automatikusan bekerült az _Engedélyezett HTML jelölők_ felsorolásába, ellenőrizzük a _Szűrő beállításai_ függőleges fülön, hogy valóban megjelent-e?
    <img src="/images/structure-text-format-config-allowed-html.webp" alt="HTML-elemek beállítása" width="100%" />
1. Kattintsunk a _Beállítások mentése_ gombra. Ekkor visszajutunk a _Szövegformátumok és szerkesztők_ oldalra. Egy pozitív rendszerüzenet tájékoztat minket az előbbi módosításaink sikeres elmentéséről.
    ![Visszajelzés a sikeres módosításról](/images/structure-text-format-config-summary.webp)
## Az ismeretek elmélyítése

Ha nem látjuk azonnal a változtatásaink eredményét, szükség lehet a gyorsítótár kiürítésére. Lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/T9RD6PTxe9U" title="Szövegformátumok és -szerkesztők beállítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
