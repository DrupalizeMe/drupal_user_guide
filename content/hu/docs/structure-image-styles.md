---
title: "Alapfogalom: képstílusok"
description: "Hogyan lehet egyetlen képnek számos másik változata, miközben továbbra is ugyanaz az egy kép marad."
id: "structure-image-styles"
translation_key: "structure-image-styles"
source_locale: "hu"
---
## Szükséges előismeretek { #structure-image-styles }

[structure-fields](./structure-fields.md)
## Mik azok a képstílusok?

A képstílusok lényege, hogy egy képet feltöltés után többféleképpen is meg lehet jeleníteni; minden megjelenítési variáció vagy _képstílus_ az eredeti képre alkalmazott hatások eredménye.

Például, az eredetileg 4:3 oldalarányú, nagy felbontású képet meg lehet jeleníteni lekicsinyítve, négyzet alakúra vágva vagy akár fekete-fehérben (vagy ezen hatások bármilyen más kombinációjában). Mindennek hatékony kezelését az alaprendszer végzi:

1. Állítsunk össze egy tetszőleges sorrendet az elérhető hatásokból a _Képstílusok_ (címsorban _admin/config/media/image-styles_) oldalon, és mentsük el.
1. Amikor legelső alkalommal érkezik kérés egy adott kép bizonyos stílusú változatára, akkor az effekteket a Drupal sorban alkalmazza.
1. Az ennek eredményeképpen kapott képet a rendszer eltárolja, az eredeti kép viszont érintetlenül megmarad.
1. Amikor a következő alkalommal ugyanerre a képre érkezik kérés ugyanebben a képstílusban elkészítve, akkor a már elmentett kép úgy használható újra, hogy nincs szükség az effektek újraillesztésére.

    A Drupal alaprendszere több, a stílusok meghatározására használható effektet is felkínál; további stílusok a kiegészítő modulokban találhatók.

    Érdemes megnézni a már gyárilag beállított hatásokat, melyek a _Kezelés_ adminmenü _Konfiguráció_ » _Média_ » _Képstílusok_ (címsorban _admin/config/media/image-styles_) útvonalon érhetők el.
## Kapcsolódó témák

* [structure-image-style-create](./structure-image-style-create.md)
* [structure-image-responsive](./structure-image-responsive.md)
* [structure-fields](./structure-fields.md)
## Egyéb források

[Working with images in Drupal 7 and 8](https://www.drupal.org/docs/8/core/modules/image/working-with-images) (azaz „Munka a képekkel D7-en és D8-on”) című közösségi dokumentáció a Drupal.org-on angol nyelven.

*Közreműködők*

E témakör szövegét [Boris Doesborg](https://www.drupal.org/u/batigolix) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) ["Working with images in Drupal 7 and 8"](https://www.drupal.org/docs/8/core/modules/image/working-with-images) (azaz „Munka a képekkel D7-en és D8-on”) című szócikkéből vette át és szerkesztette, melynek szerzői joga 2000–2026 között annak egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
