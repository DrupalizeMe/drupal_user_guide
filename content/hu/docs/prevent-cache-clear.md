---
title: "A gyorsítótár kiürítése"
description: "Hogyan tudjuk kiüríteni webhelyünk gyorsítótárát akár az adminfelületen keresztül, akár a Drush segítségével."
id: "prevent-cache-clear"
translation_key: "prevent-cache-clear"
source_locale: "hu"
---
## Célkitűzés { #prevent-cache-clear }

Az adminfelület vagy a Drush segítségével kiürítjük webhelyünk belső gyorsítótárát, hogy ezzel a tartalmak legfrissebb változatának kiszolgálására kényszerítsük.
## Szükséges előismeretek

* [prevent-cache](./prevent-cache.md)
* [install-tools](./install-tools.md)
## Webhely előfeltételei

Ha szeretnénk Drush eszközt használni a gyorsítótár kiürítéséhez, akkor azt telepíteni kell. Lásd: [install-tools](./install-tools.md).
## Lépések

E feladat végrehajtására két lehetőségünk is van: vagy a Drupal adminfelületét használjuk webböngészőnkben, vagy pedig a Drush nevű eszközt parancssorban. Szintén hasznos lehet megismernünk az újraépítő szkript (`rebuild.php`) használatát.
### Adminfelületen keresztül

1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Fejlesztés_ > _Teljesítmény_ oldalra (vagy a címsorban adjuk meg az _admin/config/development/performance_ útvonalat). Ha bármi oknál fogva nem töltődik be az adminfelület, ne essünk kétségbe, próbáljuk meg a következő módok valamelyikét.
1. Kattintsunk a _Gyorsítótár teljes törlése_ gombra.
1. Kis idő elteltével az oldal újratöltődik, immár egy rendszerüzenettel a tetején, ami tájékoztat minket a művelet eredményéről.
1. Ha ez esetleg mégsem oldaná meg a gondot, ami a gyorsítótár ürítése előtt fennállt, akkor próbáljuk meg a következő módok valamelyikét.
### Az újraépítő szkript használatával

1. Ha elérjük, nyissuk meg a webhelypéldányunk helyi beállításait tartalmazó _settings.php_ fájlt (amit a gyökérkönyvtártól kiindulva a _/sites/default/settings.php_ útvonalon találjuk a fájlrendszerben) egy szövegszerkesztőben és másoljuk be ezt a sort a legvégére:
    ```text
    $settings['rebuild_access'] = TRUE;
    ```

    Ezzel ez egy fontos biztonsági védelmet iktatunk ki ideiglenesen, a művelet végeztével vissza fogjuk állítani letiltott módba. Emlékeztetőként akár nyitva is hagyhatjuk a szerkesztőt.

1. Miután elmentettük a fájlt (lehet, hogy írásvédett), látogassuk meg webhelyünkön ezt a fájlt a böngésző címsorában ehhez hasonló módon megadva: _http://www.pelda.hu/core/rebuild.php_. Kis idő elteltével betöltődik a webhely címlapja, miután a Drupal valamennyi gyorsítótára teljesen újraépült.
1. Visszatérve a _settings.php_ fájlhoz a szövegszerkesztőben, töröljük ki az egész `$settings['rebuild_access']` kezdetű sort és mentsük el a fájlt.
### Drush használata ürítésre vagy újraépítésre

A következő két parancs valamelyikét használhatjuk e célra:

* A `drush cache:rebuild` parancs kiadása a webhely valamennyi gyorsítótárát kiüríti, majd újraépíti. A parancs sikeres lefutását követően egy „Cache rebuild complete” visszajelzést kapunk a kijelzőn.
* A `drush cache:clear` paranccsal viszont először lekérjük a webhely gyorsítótárainak listáját, amiből csak a kiválasztottat ürítjük ki. E parancs kiadása a következőhöz hasonló eredményt ad vissza:
```text
> drush cache:clear
Enter a number to choose which cache to clear.
 [0]  :  Cancel
 [1]  :  drush
 [2]  :  theme-registry
 [3]  :  menu
 [4]  :  css-js
 [5]  :  block
 [6]  :  module-list
 [7]  :  theme-list
 [8]  :  render
 [9]  :  views
```

A képernyőnkön megjelenő felsorolásból válasszuk ki a kiüríteni kívánt gyorsítótár sorszámát, írjuk be, majd nyomjunk Entert a végrehajtásához.
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/-evRieC6Y3U" title="A gyorsítótár kiürítése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Clearing or rebuilding Drupal's cache](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache) (azaz „A Drupal gyorsítótárának kiürítése és újraépítése”) közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Joe Shindelar](https://www.drupal.org/u/eojthebrave) és [Jack Haas](https://www.drupal.org/u/jerseycheese) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Clearing or rebuilding Drupal's cache](https://www.drupal.org/docs/7/administering-drupal-7-site/clearing-or-rebuilding-drupals-cache) (azaz „A Drupal gyorsítótárának kiürítése és újraépítése”) című szócikkéből vették át és szerkesztették, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
