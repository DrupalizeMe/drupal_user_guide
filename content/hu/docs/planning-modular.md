---
title: "Alapfogalom: a tartalmi építőelemek"
description: "Miért jó a tartalmat feldarabolni kisebb építőelemekre, majd hogyan lehet azokból újra összeállítani több másik oldalt."
id: "planning-modular"
translation_key: "planning-modular"
source_locale: "hu"
---
## Szükséges előismeretek { #planning-modular }

* [planning-data-types](./planning-data-types.md)
* [planning-layout](./planning-layout.md)
## Mit nevezünk moduláris tartalomnak?

A kezdeti időkben a weboldalak nagy, összefüggő HTML-fájlok voltak, melyek önmagukban jelentették a webhelyek egy-egy aloldalát. A tartalomkezelő rendszerekkel (mint amilyen a Drupal is) megvalósított dinamikus webhelyeken azonban már minden oldal sok kisebb, adatbázisban tárolt részletből áll össze. Éppen ezért annak érdekében, hogy a legjobban kiaknázzuk a CMS-ek képességeit, a webhely egyes oldalaira szánt tartalmainkat érdemes a lehető legkisebb részegységekre feldarabolnunk. Egy termelői piac webhelyén például a receptek részére készíthetünk egy külön tartalomtípust. Ha ez a „Recept” elnevezésű tartalomtípusunkban van mondjuk egy „Hozzávalók” részegység (Drupal-nyelven _mezőnek_ nevezzük), akkor ezután könnyűszerrel ki tudjuk listázni azokat a recepteket, amelyek elkészítéséhez például „sárgarépa” szükséges.

Ehhez hasonló módon a weboldalak más szakaszai is összeállíthatók automatikusan előállított részekből. Maradva a termelői piac webhelyünk példájánál, minden egyes recepttel együtt eltárolhatjuk egy _mezőben_, hogy melyik árus küldte be (ehhez lásd: [structure-reference-fields](./structure-reference-fields.md)), miközben magának az árusnak az adatait egy másik tartalomtípusba mentjük. Ezzel a következőkre nyílik lehetőségünk:

* Minden egyes recept oldalán egy kis oldaldobozban megjeleníthetjük az azt beküldő árus nevét és standjának számát.
* Hasonló módon, az árusok saját bemutatkozó oldalain megjeleníthetünk egy másik kis dobozt, amelyben az általa legutóbb feltöltött öt receptet soroljuk fel.

A legfontosabb az egészben, hogy minden egyes tartalmat (receptet és árust) csak egyetlen helyen kell módosítanunk, mégis sok más oldalán is megjelenhet a webhelynek. Ha például egy árus másik standra költözik és ezt átállítja a profiloldalán, onnantól minden receptjének az oldalán is már a friss információ fog megjelenni. Ha pedig egy új receptet tölt fel, akkor az automatikusan kikerül a saját profiloldalára is. Az ehhez hasonló, kereszthivatkozások mentén felépülő oldalak létrehozása leggyakrabban az alaprendszer _Views_ moduljával a legegyszerűbb. Erről bővebben a [views-concept](./views-concept.md) témakörben található további tudnivaló. Meg kell még említenünk a _nézetmódokat_ ([structure-view-modes](./structure-view-modes.md)) is, amelyek nagyszerű lehetőséget kínálnak ugyanannak a tartalomtípusnak a különböző környezetben való eltérő megjelenítésére.
## Kapcsolódó témák

* [planning-structure](./planning-structure.md)
* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-view-modes](./structure-view-modes.md)
* [views-concept](./views-concept.md)

*Közreműködők*

Írta: [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
