---
title: "Nem használt modulok letiltása"
description: "A felesleg csökkentése webhelyünkön a használaton kívüli modulok kikapcsolásával."
id: "config-uninstall"
translation_key: "config-uninstall"
source_locale: "hu"
---
## Célkitűzés { #config-uninstall }

Hogy optimalizáljuk webhelyünk működését, ebben a témakörben letiltjuk az alaprendszer _Search_, _History_ és – ha az előző témakörben engedélyeztük volna – _Activity tracker_ moduljait.
## Szükséges előismeretek

[understanding-modules](./understanding-modules.md)
## Webhely előfeltételei

* A webhely legalább egy moduljának használaton kívül kell lennie, amin a letiltást kockázat nélkül kipróbálhatjuk.
* Ha szeretnénk Drush eszközt használni a modulok letiltásához, akkor azt telepíteni kell. Lásd: [install-tools](./install-tools.md).
## Lépések

E feladat végrehajtására két lehetőségünk is van: vagy a Drupal adminfelületét használjuk webböngészőnkben, vagy pedig a Drush nevű eszközt parancssorban.
### Adminfelületen keresztül

1. A _Kezelés_ adminisztrációs menüben menjünk a _Bővítés_ > _Modul eltávolítása_ oldalra (vagy a címsorban adjuk meg az _admin/modules/uninstall_ útvonalat), ahol csak azokat a modulokat látjuk felsorolva, amelyek nem szolgálnak feltételként más modulok működéséhez, ezáltal készen állnak arra, hogy letiltsuk őket.
1. Jelöljük be a letiltani kívánt modulok (_Search_, _History_ és _Activity Tracker_) négyzeteit. Kattinsunk az _Eltávolítás_ gombra a lap alján.
    <img src="/images/config-uninstall_check-modules.webp" alt="Egy modul kikapcsolása" width="100%" />
