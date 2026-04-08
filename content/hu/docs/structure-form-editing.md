---
title: "Tartalomfelviteli űrlapok módosítása"
description: "Egy tartalmak beküldésére szolgáló oldal működésének megváltoztatása."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "hu"
---
## Célkitűzés { #structure-form-editing }

A célunk az, hogy megváltoztassuk a _Receptek_ beküldési oldalán azt a módot, ahogyan jelenleg a hozzávalókat ki lehet választani.
## Szükséges előismeretek

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Webhely előfeltételei

Már léteznie kell a _Recept_ tartalomtípusnak, és a mezői között már ott kell lennie a _Hozzávalók_ nevű hivatkozómezőnek is. Ha ez még nincs meg, akkor a [structure-content-type](./structure-content-type.md) és [structure-taxonomy-setup](./structure-taxonomy-setup.md) témaköröknél elolvasható, hogyan lehet ezt az állapotot elérni.
## Lépések

1. A _Kezelés_ adminisztrációs menüben menjünk a _Tartalom_ > _Tartalom hozzáadása_ > _Recept_ (vagy a címsorba begépelve: _node/add/recept_) oldalra, hogy megnézzük, hogyan fest most az alapértelmezett tartalombeküldési oldalunk. Külön figyeljük meg, hogyan működik jelenleg az összetevők felvitelére szolgáló rész: egyenként, külön sorokban lehet megadni egy-egy hozzávalót.
1. Válasszuk ki a _Kezelés_ adminisztrátori menüben a _Felépítés_ > _Tartalomtípusok_ (_admin/structure/types_) menüpontot. Aztán kattintsunk a _Recept_ tartalomtípus sorának végén a lenyíló gomb _Űrlap megjelenítésének beállítása_ lehetőségére. Megjelenik az _Űrlap megjelenítésének beállítása_ oldal.
1. Itt a _Hozzávalók_ mező sorában a _Felületi elem_ oszlopban a legördülő listából válasszuk az _Automatikusan kiegészített (címkézés)_ lehetőséget.
    <img src="/images/structure-form-editing-manage-form.png" alt="A Recept űrlap módosítása" width="100%" />
1. Kattintsunk a _Mentés_ gombra.
1. A _Kezelés_ adminisztrációs menüben ismét menjünk a _Tartalom_ > _Tartalom hozzáadása_ > _Recept_ (vagy a címsorba begépelve: _node/add/recept_) oldalra, hogy ellenőrizzük, hogyan változott meg az élelmiszer-alapanyagok kiválasztásának módja. A _Hozzávalók_ mező átváltozott egy (látszólag sima) szövegbeviteli mezővé, amibe gépelhetünk, ám a vessző leütésére felajánlja a már létező, egyező nevű kifejezések használatát.
    <img src="/images/structure-form-editing-add-recipe.png" alt="Recept hozzáadása" width="100%" />
1. Az így egyszerűsített adatbevitel kipróbálására küldjünk be két _Recept_ típusú tartalmat (ehhez lásd az [content-create](./content-create.md) témakört), amelyek neve lehet például „Zöldségsaláta” és „Friss répa”. Ügyeljünk rá, hogy minden mezőjük ki legyen töltve: legyen hozzájuk kép feltöltve, összetevők hozzárendelve, és a beküldő árusuk megnevezve (azok közül, akiknek adatlapjait a [structure-fields](./structure-fields.md) témakörben hoztuk létre).
## Az ismeretek elmélyítése

Nemcsak az adminisztrátorok által tartalomfeltöltésre használt űrlapok módosíthatóak, hanem a webhely látogatói által kitöltendő kapcsolatfelvételi űrlapok is. Ehhez menjünk a _Kezelés_ adminisztrációs menüben a _Felépítés_ > _Kapcsolatfelvételi űrlapok_ (vagy a címsorba begépelve: admin/structure/contact) oldalra. Például elrejthetjük a _Másolat küldése magamnak_ jelölőnégyzetet vagy a nyelvválasztót.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Tartalomfelviteli űrlapok módosítása" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
