---
title: "Egy modul frissítése"
description: "Így frissítsünk egy közösségi modult, és futtassuk az adatbázis-karbantartó szkriptet adminfelületről."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "hu"
---
## Célkitűzés { #security-update-module }

Frissítjük webhelyünk egyik közösségi modulját az elavult verziójáról a legújabbra, majd lefuttatjuk az adatbázis-karbantartó szkriptet.
## Szükséges előismeretek

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Webhely előfeltételei

* Legalább egy közösségi modulnak telepítve kell lennie, és kell, hogy legyen hozzá elérhető frissítés. Előbbihez lásd a [extend-module-install](./extend-module-install.md) leírást, míg utóbbihoz a [security-announce](./security-announce.md) lehet hasznos.
* Ha webhelyünk már éles, látogatók előtt megnyitott, akkor ezt a folyamatot javasolt előbb egy tesztkörnyezeten elvégezni. Erről a [install-dev-making](./install-dev-making.md) részben volt szó.
* A webhelyről készítsünk egy tartalék másolatot (lásd: [prevent-backups](./prevent-backups.md)).
* Ha az adminfelületen keresztül szeretnénk elvégezni ezt a műveletet, akkor az alaprendszer _Update Manager_ moduljának engedélyezve kell lennie. Ennek módjáról a [config-install](./config-install.md) szakaszban már esett szó.
## Lépések

Mielőtt elkezdjük, körültekintően olvassuk el a modulhoz adott frissítési útmutatót, amit általában a projektoldalukon, a _Read Documentation_ (azaz „Dokumentáció elolvasása”) hivatkozáson találunk. Ez kifejezetten akkor szükséges, amikor valamilyen külső függvénykönyvtárat vagy harmadik fél általi szolgáltatást integráló modulról van szó. További tudnivalókat szerezhetünk még, ha letöltjük a számítógépünkre és kicsomagoljuk _tar.gz_ vagy _zip_ fájljukat, és megnyitjuk bennük a _README.txt_, _INSTALL.txt_ vagy _UPGRADE.txt_ dokumentumokat. Mindezen túl pedig érdemes vetni egy pillantást a modul telepíteni tervezett verziójának kiadási jegyzékére is, amit a projektoldalán a verziószámra kattintva nyithatunk meg:

![Hivatkozás a kiadási jegyzékre](/images/security-update-module-release-notes.webp)

Itt most az egyszerűbb, az adminfelületen keresztül történő frissítést mutatjuk be. Ha viszont közösségi helyett egy egyedileg fejlesztett modult frissítenénk, vagy FTP-hozzáférés hiányára utaló üzenetet kapunk, esetleg az alábbi lépések nem működnének, akkor még mindig követhetjük a [extend-manual-install](./extend-manual-install.md) szakasz útmutatásait.

Szintén fontos figyelmeztetés, hogy néhány (manapság egyre több) közösségi modul már a Composer eszközzel kezeli a függőségeit, ezért ha erre utaló felhívást látunk a modul projektoldalán, akkor az itt leírtak helyett kövessük inkább a [install-composer](./install-composer.md) szakaszban leírt lépéseket. Ha azzal végeztünk, visszatérhetünk ide, és folytathatjuk az 5. lépéstől tovább ugyanúgy.
### Az adminfelület használatával

1. Állítsuk a webhelyet karbantartási módba (lásd: [extend-maintenance](./extend-maintenance.md)).
1. A _Kezelés_ adminisztrációs menüben menjünk a _Jelentések_ > _Elérhető frissítések_ > _Frissítés_ oldalra (vagy a címsorban adjuk meg az _admin/reports/updates/update_ útvonalat).
1. Keressük meg a felsorolásban a frissíteni kívánt modult és pipáljuk be a jelölőnégyzetet a sorában, majd kattintsunk a _Frissítések letöltése_ gombra.
    <img src="/images/security-update-module-updates.webp" alt="Elérhető frissítések" width="100%" />
1. Kattintsunk a _Folytatás_ gombra.
1. Kattintsunk az _Adatbázis-frissítések futtatása_ elemre. Ha a modul fájljait kézzel másoltuk fel, akkor innentől folytatjuk, és az adatbázis-frissítés oldal megnyitásához írjuk be böngészőnk címsorába: _http://pelda.hu/update.php_.
1. A _Folytatás_ gombra kattintva lefut a szkript, ami elvégez minden szükséges módosítást az adatbázison.
1. Az _Adminisztrációs oldalak_ hivatkozásra kattintva visszajutunk az adminfelületre.
1. Kapcsoljuk ki a _Karbantartási módot_ (lásd: [extend-maintenance](./extend-maintenance.md)).
1. Ürítsük ki a gyorsítótárat (lásd: [prevent-cache-clear](./prevent-cache-clear.md)).
## Az ismeretek elmélyítése

* Mint minden komolyabb beavatkozás után, modulfrissítést követően is javasolt megnézni a rendszernaplót ([prevent-log](./prevent-log.md)) esetleges rejtett hibák felfedezése érdekében.
* [security-update-theme](./security-update-theme.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ZYFJ_OJaK4M" title="Egy modul frissítése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Egyéb források

[Updating modules](https://www.drupal.org/node/250790) (azaz „Modulok frissítése”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Boris Doesborgh](https://www.drupal.org/u/batigolix) és [Sarah German](https://www.drupal.org/u/hey_germano) ([Advomatic](https://www.advomatic.com)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Updating modules](https://www.drupal.org/node/250790) (azaz „Modulok frissítése”) című szócikkéből vették át és szerkesztették, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
