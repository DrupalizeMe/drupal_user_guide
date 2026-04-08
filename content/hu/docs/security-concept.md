---
title: "Alapfogalom: A rendszeres frissítések és webhelyünk biztonsága"
description: "A biztonsági és az általános frissítések, valamint a hibák kezelésének áttekintése."
id: "security-concept"
translation_key: "security-concept"
source_locale: "hu"
---
## Szükséges előismeretek { #security-concept }

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
* [understanding-themes](./understanding-themes.md)
* [understanding-project](./understanding-project.md)
## Mik azok a biztonsági frissítések?

Bármely szoftver tartalmazhat hibát, amiknek sokszor biztonsági következményei is lehetnek. A Drupal alaprendszer, a közösségi modulok és sminkek ilyen hibáinak javítását mindig _biztonsági frissítésként_ teszik közzé. Ezért annak érdekében, hogy webhelyünk soha ne legyen veszélynek kitéve, mindig telepítenünk kell az újonnan érkező biztonsági frissítéseket. A [security-announce](./security-announce.md) témakörben megtudhatjuk, hogyan szerezzünk tudomást a legutóbb megjelent kiadásokról, a [security-update-core](./security-update-core.md), [security-update-module](./security-update-module.md), valamint [security-update-theme](./security-update-theme.md) témáknál pedig azt is, hogyan alkalmazzuk őket webhelyünkre.
## Kikből áll a Biztonsági Munkacsoport?

A Drupal közösségen belül létezik egy kifejezetten a webhelyek biztonságára összpontosító csapat, akik a Drupal alaprendszer mellett a közösségi projektek (tehát modulok, sminkek és disztribúciók) réseit is kutatják, a feltárt hiányosságokra pedig órákon belül megoldást (úgynevezett _foltokat_) tesznek közzé. Emellett tanácsadással segítik a fejlesztőket, hogyan írjanak minél biztonságosabb kódot, ezáltal megbízhatóbb szoftvert, továbbá a webhely-üzemeltető adminisztrátorok számára tájékoztató anyagokat állítanak össze, hogy bennük is növeljék az online biztonság tudatossági szintjét. A Drupal Biztonsági Munkacsoportról bővebben a [webhelyükön](https://www.drupal.org/drupal-security-team/general-information) olvasható további tudnivaló angol nyelven.
## Hogyan kell biztonsági rést jelenteni?

Fontos tudni, hogy egy új, addig ismeretlen biztonsági rés felfedezésekor nem szabad rögtön világgá kürtölni a hírt, hanem minél gyorsabban megoldást kell találni a kiküszöbölésére, és csak azután lehet felfedni a nagy nyilvánosság előtt, hogy rögtön gyógyírt is tudunk adni a bajra. Ha mindenki ilyen előrelátóan jár el, akkor szinte nullára szorítható le annak a veszélye, hogy egy frissen megtalált biztonsági hiba sok ezer webhelyet kockázatnak tegyen ki indokolatlanul. Nem szabad azonban, hogy ez a bölcs óvatosság bárkit is visszatartson a hibajelentéstől, ha esetleg valami szokatlant tapasztalna. Bátran kövessük tehát a [Biztonsági Munkacsoport](https://www.drupal.org/drupal-security-team/general-information) útmutatását egy új hiba bejelentéséhez, mintsem legyintve otthagyjuk.
## Mik a hibajavító frissítések?

Az előbb tárgyalt biztonsági frissítések közzététele kiszámíthatatlan: akkor jelennek meg, amikor sikerült megoldást találni egy újonnan felfedezett résre. (Ez lehet félévente egyszer, de akár egyetlen héten kétszer is.) Ezzel szemben rendszeres időközönként, előre bejelentett napokon adnak ki javítócsomagokat az alaprendszerhez és annak beépített moduljaihoz, sminkjeihez. Bár ezek a frissítések is hasznosak, de nem annyira kritikusak a webhely biztonsága szempontjából. Általánosságban elmondható, mintegy örök jótanácsként, hogy e frissítéseket mindig úgy telepítsük, hogy azok ne okozzanak további gondokat a már működő webhelyen. Éppen ezért mindig ajánlatos először webhelyünk egy tesztkörnyezeten futó másolatán kipróbálni ezeket, és csak elfogadható eredmény esetén alkalmazni őket az éles Drupal-telepítésünkön. Ennek oka egyszerűen az, hogy a frissítések természetüknél fogva módosításokat hajtanak végre webhelyünk kódján, és nem garantált, hogy hibátlanul működnek együtt a többi telepített modullal és sminkkel.
## Kapcsolódó témák

* [security-announce](./security-announce.md)
* [security-update-core](./security-update-core.md)
* [security-update-module](./security-update-module.md)
* [security-update-theme](./security-update-theme.md)
* [install-dev-making](./install-dev-making.md)
## Egyéb források

* [„Webhelyünk bebiztosítása”](https://www.drupal.org/security/secure-configuration) – közösségi dokumentáció a _Drupal.org-on_ angol nyelven.
* [„Biztonsági tanácsok”](https://www.drupal.org/security) – a Drupal.org webhelyen angol nyelven.
* [Drupal Biztonsági Munkacsoport](https://www.drupal.org/drupal-security-team/general-information) bemutatása angol nyelven.

*Közreműködők*

Írta és szerkesztette: [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
