---
title: "Modulok telepítése"
description: "Így adhatunk hozzá alaprendszeri, közösségi modulokat webhelyünkhöz adminfelületen keresztül vagy a Drush használatával."
id: "config-install"
translation_key: "config-install"
source_locale: "hu"
---
## Célkitűzés { #config-install }

Adjunk hozzá webhelyünkhöz új alaprendszeri vagy közösségi modulokat (amelyek fájljai már fel vannak töltve a tárhelyre) az adminfelületen keresztül vagy a Drush használatával.
## Szükséges előismeretek

[understanding-modules](./understanding-modules.md)
## Webhely előfeltételei

Ha szeretnénk Drush eszközt használni az alaprendszer telepítéséhez, akkor a Drusht telepíteni kell. Lásd: [install-tools](./install-tools.md).
## Lépések

E feladat végrehajtására két lehetőségünk is van: vagy a Drupal adminfelületét használjuk webböngészőnkben, vagy pedig a Drush nevű eszközt parancssorban.
### Adminfelületen keresztül

1. A _Kezelés_ adminisztrációs menüben menjünk a _Bővítés_ oldalra (vagy a címsorban adjuk meg az _admin/modules_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi modult.
1. Ha már tudjuk, hogy melyik modulra van szükségünk, akkor a neve melletti jelölőnégyzettel engedélyezhetjük. Például jelöljük most be az alaprendszer _Activity Tracker_ moduljának négyzetét.
    <img src="/images/config-install-check-modules.webp" alt="Az alaprendszeri Activity Tracker modul bekapcsolása" width="100%" />
1. Kattintsunk a _Telepítés_ gombra. Az így megjelölt modulok ekkor működésbe lépnek a webhelyen.
### Drush használatával

1. A _Kezelés_ adminisztrációs menüben menjünk a _Bővítés_ oldalra (vagy a címsorban adjuk meg az _admin/modules_ útvonalat). A megjelenő oldal felsorolja a webhelyünkön pillanatnyilag elérhető valamennyi modult.
1. Keressük ki az engedélyezni kívánt modult, majd nyissuk le a részletes információit tartalmazó dobozát. Itt megtaláljuk a modul programok által olvasható nevét. Például az előbb említett _Activity Tracker_ modulé „tracker”.
1. Ennek ismeretében már le tudjuk futtatni a következő Drush-parancsot:
    ```text
    drush pm:enable tracker
    ```
## Az ismeretek elmélyítése

Ha nem látjuk azonnal a változtatásaink eredményét, szükség lehet a gyorsítótár kiürítésére. Lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/HymQsDOcT3E" title="Modulok telepítése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

Hivatalos dokumentáció és segítség a Drush használatához annak [weboldalán](http://www.drush.org) található.

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
