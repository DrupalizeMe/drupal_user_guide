---
title: "Webhelyfunkciók átvitele"
description: "Egy funkció átvitele ugyanannak a webhelynek a két példánya között."
id: "extend-deploy"
translation_key: "extend-deploy"
source_locale: "hu"
---
## Célkitűzés { #extend-deploy }

Ebben a részben át fogjuk vinni az egyik nézetet (másképpen listát) a helyi fejlesztési példányról az éles webhelyre.
## Szükséges előismeretek

* [install-dev-making](./install-dev-making.md)
* [extend-config-versions](./extend-config-versions.md)
* [install-dev-sites](./install-dev-sites.md)
## Webhely előfeltételei

* Az alaprendszeri _Configuration Manager_ modulnak engedélyezve kell lennie mindkét webhelypéldányon. A [config-install](./config-install.md) részben volt szó modulok telepítéséről.
* Az _Árus_ tartalomtípusnak már léteznie kell ugyanazokkal a mezőkkel szintén mindkét webhelypéldányon. Ehhez lásd a [structure-content-type](./structure-content-type.md) részt.
* Az _Árusok_ nevű nézetnek már léteznie kell a fejlesztési példányon, de még nem lehet jelen az éles webhelyen. A nézetekről a [views-create](./views-create.md) részben ejtettünk szót.
## Lépések

1. Nyissuk meg és lépjünk be adminisztrátori felhasználóval a fejlesztési példányon.
1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Fejlesztés_ > _Konfiguráció szinkronizálása_ > _Export_ > _Egyetlen elem_ oldalra (vagy a címsorban adjuk meg az _admin/config/development/configuration/single/export_ útvonalat).
1. A _Beállítás típusa_ legördülőből válasszuk a _Nézet_ lehetőséget.
1. Pár másodperc alatt frissül a második, _Beállításnév_ legördülő listája, amiből válasszuk az _Árusok (arusok)_ lehetőséget.
1. Ekkor megjelenik egy hosszú szöveg az _Ezek a beállítások_ felirat alatt, amit egészben másoljunk ki vágólapra.
    ![A konfiguráció egyetlen elemének kimentése](/images/extend-deploy-export-single.png)
1. Most menjünk át az éles webhelyre.
1. A _Kezelés_ adminisztrációs menüben menjünk a _Konfiguráció_ > _Fejlesztés_ > _Konfiguráció szinkronizálása_ > _Import_ > _Egyetlen elem_ oldalra (vagy a címsorban adjuk meg az _admin/config/development/configuration/single/import_ útvonalat).
1. A _Beállítás típusa_ legördülőből válasszuk a _Nézet_ lehetőséget.
1. A nagy szövegmezőbe illesszük be vágólapról az előbb kimásolt hosszú szöveget.
1. Kattintsunk az _Import_ gombra, mire megjelenik egy megerősítő képernyő, amit szintén fogadjunk el.
1. Ellenőrizzük a _Kezelés_ adminisztrációs menüben a _Felépítés_ > _Nézetek_ oldalon, hogy az újonnan felvitt nézet létrejött-e, és működik-e.
## Az ismeretek elmélyítése

Az itt bemutatott lépéssor a webhely teljes konfigurációjából csak egyetlen elem átvitelére való. Az általános gyakorlat szerint ez meglehetősen ritkán fordul elő, mivel a valós helyzetekben sokszor egyszerre több konfigurációelemet kell szinkronizálni két webhelypéldány között. Például ha a fejlesztési példányon egy új tartalomtípust hoztunk létre különféle mezőkkel, akkor máris fél tucat elemet (egyet magának a tartalomtípusnak, egyet-egyet minden mezőjéhez, és valószínűleg még továbbiakat a megjelenítési és beviteli módokhoz) kellene ezen a módon külön-külön átmásolni, ráadásul a kötött sorrendjükre pontosan ügyelve. Belátható, hogy ez nem lenne életképes megoldás.

Helyette exportálható és importálható a webhely teljes konfigurációkészlete. Ehhez a legjobb, ha az éles webhelyet egy lehetőleg (majdnem) mindenben hű másolatként klónozzuk a [install-dev-making](./install-dev-making.md) részben leírtakat követve, majd a [extend-config-versions](./extend-config-versions.md) útmutatása szerint szinkronizáljuk a két példányt.

További lehetőség még a [Features](https://www.drupal.org/project/features) közösségi modul használata, ami a csoportosítás fenti két (egyesével vagy egyben mindent) véglete között köztes lehetőségeket biztosít (például egy képgaléria valamennyi konfigurációjának – de csak annak – kimentése-beolvasása).

Ha nem látjuk azonnal a változtatásaink eredményét, akkor szükség lehet a gyorsítótár kiürítésére. Lásd: [prevent-cache-clear](./prevent-cache-clear.md).
## Kapcsolódó témák

* [install-dev-sites](./install-dev-sites.md)
* [planning-workflow](./planning-workflow.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/hysqVDIfLTA" title="Webhelyfunkciók átvitele" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
