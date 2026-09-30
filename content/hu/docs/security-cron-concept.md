---
title: "Alapfogalom: az időzített feladatok"
description: "A cron parancs és annak Unix-elődjétől való különbségek áttekintése."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "hu"
---
## Mik az időzített feladatok? { #security-cron-concept }

Annak érdekében, hogy a webhely szoftvere mindig megfelelően működjön, bizonyos rendszerműveleteknek ismétlődően le kell futniuk. Tulajdonképpen ezeket nevezzük időzített, vagy angol megfelelőjük után _cron_ feladatoknak. Pár példa rájuk: a közösségi modulok és sminkek frissítéseinek lekérdezése a központi kiszolgálóról, a webhely nemrég felvitt tartalmainak beindexelése a saját kereső számára, vagy az ideiglenes, már szükségtelenné vált fájlok kitakarítása.
## Mi köze van mindennek a Unix rendszerek cron parancsához?

A Linux vagy Unix operációs rendszereket futtató számítógépeken létezik egy _cron_ parancs, ami feladatok előzetes beidőzítésére való. Mivel a világ webszervereinek többsége e két operációs rendszer valamelyik változatán fut, ezért a webhelyek szoftvereinek (mint amilyen a Drupal is) rendszeresen lefuttatandó műveleteit is ezzel a _cron_ paranccsal időzítik be. Innen ered tehát a nevek közötti összefüggés. Ettől függetlenül használható a Drupal alaprendszer beépített _Automated Cron_ modulja is e feladatok futtatására. Ha pedig arra vagyunk kíváncsiak, hogy mikor futottak le utoljára, akkor a webhely Állapotjelentése szolgál hasznos tudnivalókkal számunkra.
## Kapcsolódó témák

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Egyéb források

A [„Setting up cron”](https://www.drupal.org/docs/7/setting-up-cron/overview) című közösségi dokumentáció a _Drupal.org_-on (angol nyelven).

*Közreműködők*

Írta és szerkesztette: [Lakatos Diána](https://www.drupal.org/u/dianalakatos) ([Pronovix](https://pronovix.com/)), [Dave Hansen-Lange](https://www.drupal.org/u/dalin) ([Advomatic](https://www.advomatic.com/)) és [Boris Doesborg](https://www.drupal.org/u/batigolix). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum))
