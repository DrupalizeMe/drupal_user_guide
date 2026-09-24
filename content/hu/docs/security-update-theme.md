---
title: "Egy smink frissítése"
description: "Így frissítsünk egy közösségi sminket, és futtassuk az adatbázis-karbantartó szkriptet adminfelületről."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "hu"
---
## Célkitűzés { #security-update-theme }

Frissítjük webhelyünk egyik közösségi sminkjét az elavult verziójáról a legújabbra, majd lefuttatjuk az adatbázis-karbantartó szkriptet.
## Szükséges előismeretek

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Webhely előfeltételei

* Legalább egy közösségi sminknek telepítve kell lennie, és kell, hogy legyen hozzá elérhető frissítés. Előbbihez lásd a [extend-theme-install](./extend-theme-install.md) leírást, míg utóbbihoz a [security-announce](./security-announce.md) lehet hasznos.
* Ha webhelyünk már éles, látogatók előtt megnyitott, akkor ezt a folyamatot javasolt előbb egy tesztkörnyezeten elvégezni. Erről a [install-dev-making](./install-dev-making.md) részben volt szó.
* A webhelyről készítsünk egy tartalék másolatot (lásd: [prevent-backups](./prevent-backups.md)).
* Ha az adminfelületen keresztül szeretnénk elvégezni ezt a műveletet, akkor az alaprendszer _Update Manager_ moduljának engedélyezve kell lennie. Ennek módjáról a [config-install](./config-install.md) szakaszban már esett szó.
## Lépések

Itt most az egyszerűbb, az adminfelületen keresztül történő frissítést mutatjuk be. Ha viszont közösségi helyett egy egyedileg fejlesztett sminket frissítenénk, vagy FTP-hozzáférés hiányára utaló üzenetet kapunk, esetleg az alábbi lépések nem működnének, akkor még mindig követhetjük a [extend-manual-install](./extend-manual-install.md) szakasz útmutatásait.

Szintén fontos figyelmeztetés, hogy néhány közösségi smink Composer eszközzel kezelheti a függőségeit, ezért ha erre utaló felhívást látunk a smink projektoldalán, akkor az itt leírtak helyett kövessük inkább a [install-composer](./install-composer.md) szakaszban leírt lépéseket. Ha azzal végeztünk, visszatérhetünk ide, és folytathatjuk az 5. lépéstől tovább ugyanúgy.
### Az adminfelület használatával

1. Állítsuk a webhelyet karbantartási módba (lásd: [extend-maintenance](./extend-maintenance.md)).
1. A _Kezelés_ adminisztrációs menüben menjünk a _Jelentések_ > _Elérhető frissítések_ > _Frissítés_ oldalra (vagy a címsorban adjuk meg az _admin/reports/updates/update_ útvonalat).
1. Keressük meg a felsorolásban a frissíteni kívánt sminket, és pipáljuk be a jelölőnégyzetet a sorában, majd kattintsunk a _Frissítések letöltése_ gombra.
    <img src="/images/security-update-theme-updates.webp" alt="Elérhető frissítések" width="100%" />
1. Kattintsunk a _Folytatás_ gombra.
1. Kattintsunk az _Adatbázis-frissítések futtatása_ elemre. Ha a smink fájljait kézzel másoltuk fel, akkor innentől folytatjuk, és az adatbázis-frissítés oldal megnyitásához írjuk be böngészőnk címsorába: _http://pelda.hu/update.php_.
1. A _Folytatás_ gombra kattintva lefut a szkript, ami elvégez minden szükséges módosítást az adatbázison.
1. Az _Adminisztrációs oldalak_ hivatkozásra kattintva visszajutunk az adminfelületre.
1. Kapcsoljuk ki a _Karbantartási módot_ (lásd: [extend-maintenance](./extend-maintenance.md)).
1. Ürítsük ki a gyorsítótárat (lásd: [prevent-cache-clear](./prevent-cache-clear.md)).
## Az ismeretek elmélyítése

* Mint minden komolyabb beavatkozás után, sminkfrissítést követően is javasolt megnézni a rendszernaplót ([prevent-log](./prevent-log.md)) az esetleges rejtett hibák felfedezése érdekében.
* [security-update-module](./security-update-module.md)
## Videó

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/2jihIuY91vs" title="Egy smink frissítése" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Közreműködők*

Írta: [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
