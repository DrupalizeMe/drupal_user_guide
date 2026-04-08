---
title: "Oldalaink elrendezésének megtervezése"
description: "Megtervezzük a webhely navigációját és elrendezzük a különböző tartalmakat az oldalak nagy- és kisképernyős változatain."
id: "planning-layout"
translation_key: "planning-layout"
source_locale: "hu"
---
## Célkitűzés { #planning-layout }

A szakasz végére képesek leszünk megtervezni egy webhely navigációját és oldalelrendezését asztali és mobilképernyőkre egyaránt.
## Szükséges előismeretek

* [understanding-themes](./understanding-themes.md)
* [block-regions](./block-regions.md)
* [preface-scenario](./preface-scenario.md)
## Lépések

Építkezés előtt tervezni szokás, nincs ez másképp a webhelyek létrehozásakor sem: mielőtt elkezdenénk írni az első cikkünket, érdemes átgondolnunk, nagyjából hogyan fogjuk elmenteni. Első nekifutásra elegendő csak nagyjából, mivel a későbbiekben tervünk részletei még változhatnak akár a megvalósítás során jövő újabb ötletek, akár idő- vagy pénzszűke miatt.

1. Szedjük össze, hogy milyen információkat fogunk közzétenni a webhelyünkön. A termelői piac példánkban ezek a következők lehetnek:
    * A piac címe, helye és megközelíthetősége egy térképpel
    * A piac nyitvatartásának ideje
    * A piac története, múltja
    * Árusok felsorolása
    * Részletek az egyes árusokról
    * Receptek kereshető listája
    * Részletek az egyes receptekről
    * A legutóbb feltöltött receptek listája
1. Döntsük el, hogy az egyes információkat melyik oldalon, vagy oldaltípuson akarjuk megjeleníteni:
    - **Minden oldalon megjelenő információk:** A helyszín, a nyitvatartás és a legutóbbi receptek
    - **Árusok adatlapjai:** Tudnivalók az egyes kereskedőkről a saját oldalaikon
    - **Receptek oldalai:** Az ételek elkészítésének részletei önálló oldalakon
    - **Címlap:** Helyszín, térkép, megközelíthetőség és nyitvatartás
    - **Rólunk oldal:** A piac története, múltja
    - **Árusok listája oldal:** A piac kereskedőinek felsorolása, hivatkozásokkal az adatlapjaikra
    - **Receptek listája oldal:** Egy kereshető felsorolása a recepteknek, szintén hivatkozásokkal a receptek saját oldalára
1. Döntsük el, hogy melyik információ a legfontosabb az egyes oldalakon. Ez azért fontos, mert a mobileszközöket használó látogatók a kis képernyő miatt sokszor csak az oldal legtetejét látják, nem mindig görgetnek lejjebb oda, ahol a többi tartalom jelenik meg.
1. Határozzuk meg, hogy ezen oldalak közül melyiknek kell szerepelnie a webhely fő navigációjában. Így például a menüsor állhat a Címlap, Rólunk, Árusok és Receptek menüpontokból.
1. Rajzoljunk fel egy megközelítőleges vázlatot arról, hogyan képzeljük el a kinézetet amikor kis és nagy képernyőn tekintik meg webhelyünket. Feltételezzük, hogy a legtöbb látogató mobileszközökön fogja látni oldalainkat, ezért a legfontosabb, hogy elsősorban számukra tegyük kényelmessé a szükséges információk könnyű megtalálását.
    Már ennél a lépésnél előfordulhat, hogy azonnal újra kell gondolnunk a fenti, 2. pontban megfogalmazott terveinket. Például dönthetünk úgy, hogy az utcai cím, a nyitvatartás és a legfrissebb receptek mind kényelmesen elférnek az oldalak jobb oldalsávján, ha asztali – nagyobb felbontású – monitoron tekintik meg őket. Viszont a mobilkészülékek kisebb kijelzőin csak az utcai címet és nyitvatartást tesszük az oldal tetejére (azt is rövidített formában), míg a legutóbb beküldött receptek felsorolását a lap aljára, de csak a címlapon.
## Az ismeretek elmélyítése

[planning-structure](./planning-structure.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/35e16QDFE7k" title="Oldalaink elrendezésének megtervezése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
