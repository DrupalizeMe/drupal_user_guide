---
title: "Alapfogalom: Nézetek használata"
description: "A nézetek, mint a Drupal listázási lehetőségeinek áttekintése. A legyűjthető adatok fajtái és a kimenetük befolyásolása."
id: "views-concept"
translation_key: "views-concept"
source_locale: "hu"
---
## Szükséges előismeretek { #views-concept }

* [planning-modular](./planning-modular.md)
* [planning-data-types](./planning-data-types.md)
## Mit nevezünk nézetnek?

A Drupal szaknyelvében a webhely tartalmának bizonyos szempontok szerint szűrt részét nevezzük egy _nézetnek_. Az alaprendszer _Views_ modulja felelős a kért nézetek megjelenítéséért, míg annak egy kiegészítője, a _Views UI_ modul pedig egy felhasználói felületet biztosít, amin adminisztrátorként szerkeszthetjük a már létező nézeteket, vagy akár újakat adhatunk hozzá tetszés szerint. Egy nézet szerkesztésekor tulajdonképpen nem csinálunk mást, mint megmondjuk a Drupalnak, hogy milyen fajta adatokból melyikeket, mennyit, hogyan formázva és milyen sorrendben jelenítsen meg a felhasználóknak.
## Milyen adatokat tudunk így kilistázni?

Tulajdonképpen majdnem mindenfajta adatot ki tudunk nyerni nézeteken keresztül. A termelői piac webhelyünkön például könnyen elkészíthetjük az alábbi listákat:

* Árusok felsorolása
* Receptek felsorolása
* A webhelyen éppen legfrissebb tartalmak listája
* A webhelyen regisztrált felhasználók névsora
## Milyen módok közül választhatunk?

A nézet által megjelenített kimenet nem csupán egy szöveges felsorolás lehet, sőt! Ennél sokkal többet tud:

* Táblázat dinamikusan rendezhető oszlopokkal
* Rácsos oldalelrendezés
* Képek vagy bevezetők a feltételnek megfelelő cikkekből
* Kimenet megjelenítése egy külön blokkban
* JSON szabvány szerint formázott adatcsomag
* RSS hírcsatorna, amire fel lehet iratkozni
* Naptárként megjelenített események (közösségi modul által)
* Lapozható képvetítések
## Kapcsolódó témák

* [views-parts](./views-parts.md)
* [views-create](./views-create.md)

*Közreműködők*

Írta és szerkesztette: [Michael Lenahan](https://www.drupal.org/u/michaellenahan) ([erdfisch](https://erdfisch.de)) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum/))
