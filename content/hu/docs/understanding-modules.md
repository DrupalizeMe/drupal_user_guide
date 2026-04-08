---
title: "Alapfogalom: a modulok"
description: "A modulok és az általuk elérhető bővítési lehetőségek áttekintése."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "hu"
---
## Szükséges előismeretek { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## Mi az a modul?

Olyan PHP-, JavaScript- és/vagy CSS-programkód, amely kibővíti a webhely képességeit, és további funkciókat ad hozzá. A modulokat _telepíteni_ és engedélyezni kell használat előtt, kikapcsolásukhoz pedig letiltani vagy _eltávolítani_ őket a webhelyről. Ez utóbbi művelet előtt szükség lehet a letiltani kívánt modulok által kezelt adatok lementésére. Általános jó tanács: érdemes a modulok számát mindig a lehető legkisebbre szorítani egy éles webhelyen. Amire nincs szükségünk vagy nem használjuk, azt jobb, ha letiltjuk vagy eltávolítjuk.

Az alaprendszer is tartalmaz modulokat (ezeket _alapmoduloknak_ is szokták nevezni), melyek például a következő általános feladatokat látják el:

* Felhasználói fiókok kezelése (ez a _User_ modul)
* Alapvető tartalomkezelés (_Node_ modul) és mezők konfigurációja (_Field_ modul, valamint felülete a _Field UI_ modul – illetve számos alapmodul biztosít még mezőtípusokat)
* Navigáció a webhelyen (_Menu UI_ modul)
* A tartalmak listázása táblázatos, rácsos vagy egyszerű felsorolásokként (_Views_ modul, valamint felülete, a _Views UI_ modul)

Bármikor további, _közösség által fejlesztett modulok_ tölthetők le a [Drupal.org gyűjteményéből](https://www.drupal.org/project/project_module) ingyenesen, de némi hozzáértéssel és programozási tapasztalattal akár _egyedi modulok_ is készíthetőek.
## Kapcsolódó témák

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Egyéb források

[Module developer's guide](https://www.drupal.org/developing/modules): „Modulfejlesztők útmutatója” című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

Írta: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
