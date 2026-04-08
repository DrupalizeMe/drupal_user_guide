---
title: "Az alaprendszer frissítése"
description: "Ebben a részben frissítjük az alaprendszert az adminfelületen keresztül vagy parancssorban a Drush eszközt használva."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "hu"
---
## Célkitűzés { #security-update-core }

Az a célunk, hogy a Drupal legújabb verziójú kiadásán fusson a webhelyünk, ezért vagy az adminfelületen keresztül, vagy pedig parancssorban a Drush eszközt használva frissítjük azt.
## Webhely előfeltételei

* A Drush használatához annak már telepítve kell lennie a számítógépünkön. Erről bővebben lásd a [install-tools](./install-tools.md) témakört.
* Ha webhelyünk már éles (látogatók számára megnyitott), akkor javasolt az alábbi folyamatot előbb egy helyi fejlesztői környezeten elvégezni, majd a frissített webhelyet ugyanott tesztelni. Ha mindent rendben találtunk, frissíthető az éles webhely is. Minderről bővebben a [install-dev-making](./install-dev-making.md) részben esett már szó.
## Lépések

1. Készítsünk teljes biztonsági mentést a webhelyünkről, melyhez segítség a [prevent-backups](./prevent-backups.md) szakaszban található.
1. Nyissuk meg a _settings.php_ (a fájlrendszerben a _/sites/default/settings.php_ útvonalon) PHP-fájlt egy egyszerű szövegszerkesztőben. Keressük meg a `$settings['update_free_access']` változót. Alapértelmezés szerint ennek értéke gyárilag „FALSE”, de mi most ideiglenesen állítsuk „TRUE” állapotúra:
    ```text
    $settings['update_free_access'] = TRUE;
    ```
1. Tiltsunk le minden külső gyorsítótárazási módszert (pl. Memcache, Varnish stb.), amit esetleg használunk.
1. Állítsuk a webhelyet karbantartási módba (lásd: [extend-maintenance](./extend-maintenance.md)).
1. Ha Composert használunk a függőségek kezelésére, akkor a következő hat lépés kihagyható. Helyette kövessük a [install-composer](./install-composer.md) szakaszban leírt útmutatást a friss kódbázis letöltésére. Ha azzal végeztünk, térjünk vissza ide, és folytassuk az _update.php_ lépéssel.
1. A Drupal.org webhely [letöltési oldalán](https://www.drupal.org/project/drupal) a _Downloads_ > _Recommended releases_ cím alól szerezzük be a Drupal 8 legújabb kiadását: először válasszuk a 8.x-es gombot, majd az így megnyíló oldalon kattintsunk a _tar.gz_ vagy _zip_ állományok gombjára tetszés szerint. A [install-prepare](./install-prepare.md) szakaszban már volt arról szó, hogyan szerezzük be a legfrissebb kiadásokat.
1. Töltsük fel a tömörített állományok egyikét a tárhelyünkre.
1. Csomagoljuk ki a _tar.gz_ vagy _zip_ fájlt a távoli szerver egy ideiglenes könyvtárába, aminek kívül kell esnie a webhely telepítési könyvtárán (másképpen „docroot”). Valószínűleg a tárhelyszolgáltató által biztosított adminfelületnek van a kicsomagolásra szolgáló funkciója. Ha van parancssori hozzáférésünk a távoli (Linuxon futó) szerverhez, akkor használhatjuk az alábbi parancsot is:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. Most a webhelyünk eredeti telepítési könyvtárában töröljük ki a _core_ és _vendor_ könyvtárakat, valamint minden fájlt, ami nem alkönyvtárban van (beleértve a _.htaccess_, _composer.json_ és _autoload.php_ fájlokat is). Csak azokat hagyjuk meg, amelyekben valami módosítást végeztünk.
1. Ezután az ideiglenes könyvtárból másoljuk/helyezzük át a _core_ és _vendor_ könyvtárakat, valamint a gyári (általunk nem módosított) fájlok friss példányait, amiknek a régi verzióit az előző lépésben töröltük. Például a _drupal-8.6.1_ nevű új könyvtárból a webhelyünk _8.6.0_ nevű könyvtárába.
1. Hívjuk meg az _update.php_ szkriptet az alábbi módok egyikén:
    * Nyissuk meg a _http://pelda.hu/update.php_ oldalt a webböngészőben, ahol a „pelda.hu” a webhelyünk doménje. Kattintsunk a _Folytatás_ gombra.
    * Vagy parancssori hozzáféréssel futtassuk a `drush updatedb` parancsot
1. Ha bármilyen üzenetet kaptunk a lefutást követően, akkor futtassuk újra mindaddig, amíg az adatbázis-frissítés teljes egészében sikeresen le nem zajlik.
1. A `$settings['update_free_access']` beállítás fenti, 2. lépésben tett ideiglenes engedélyezését állítsuk vissza letiltott értékre a _/sites/default/settings.php_ fájlban:
    ```text
    $settings['update_free_access'] = FALSE;
    ```
1. Az update.php oldalon az _Adminisztrációs oldalak_ hivatkozásra kattintva visszajutunk webhelyünk adminfelületére.
1. Kapcsoljuk ki a _Karbantartási módot_ (lásd: [extend-maintenance](./extend-maintenance.md)).
1. Ürítsük ki a gyorsítótárat (lásd: [prevent-cache-clear](./prevent-cache-clear.md)).
1. Engedélyezzük újra a külső gyorsítótárazási módszereket, amelyeket a 3. lépésnél letiltottunk.
1. Ha eddig minden rendben ment, akkor webhelyünk immár az alaprendszer friss verziójú kiadásán fut. Erről könnyen meggyőződhetünk az _Állapotjelentés_ oldalon (lásd: [prevent-status](./prevent-status.md)).
## Az ismeretek elmélyítése

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Kapcsolódó témák

[prevent-status](./prevent-status.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/eLzAD83a9BY" title="Az alaprendszer frissítése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

* [Drupal Core Downloads](https://www.drupal.org/project/drupal) (azaz „Drupal alaprendszer letöltése”) oldal a Drupal.org-on angol nyelven.
* [Registry Rebuild](https://www.drupal.org/project/registry_rebuild) útmutató a Drupal.org-on angol nyelven.
* Az _UPDATE.txt_ fájl a saját webhelyünk _/core_ könyvtárában.

*Közreműködők*

Írta és szerkesztette: [Surendra Mohan](https://www.drupal.org/u/surendramohan), [Boris Doesborgh](https://www.drupal.org/u/batigolix) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
