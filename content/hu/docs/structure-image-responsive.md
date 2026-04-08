---
title: "Alapfogalom: alkalmazkodó képstílusok"
description: "Annak áttekintése, hogy miként lehet különböző kijelzőméretekhez a megfelelő méretű képeket szolgáltatni."
id: "structure-image-responsive"
translation_key: "structure-image-responsive"
source_locale: "hu"
---
## Szükséges előismeretek { #structure-image-responsive }

* [understanding-themes](./understanding-themes.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Mit nevezünk alkalmazkodó képstílusnak?

Az _alkalmazkodó képstílus_ tulajdonképpen nem más, mint a korábban meghatározott képstílusok összepárosítása adott töréspontokkal. Ez lehetővé teszi számunkra, hogy webhelyünk automatikusan létrehozza ugyanannak a képnek a különböző méretváltozatait, így bármekkora felbontással rendelkező kijelzőn nézik meg oldalunkat, mindig az optimális (azaz nem túl nagy és nem túl kicsi) méretben kapják meg őket. Ez azért nagyon hasznos, mert mobileszközökre a kisebb képernyők miatt amúgy is elég egy fotó kisebb méretű változatait használni, ezáltal kisebb adatforgalommal jár, így gyorsabban töltenek be oldalaink. Mindezt az alaprendszer _Responsive Image_ modulja biztosítja.

Töréspontnak azt a számszerű értéket nevezzük, amihez képest ha szélesebb vagy keskenyebb a képernyő vízszintes dimenziója, átvált a weboldal sminkje egy másik elrendezésbe. Ilyen rugalmas képstílusokat vagy azoknál a sminkeknél tudunk használni, amelyeknek vannak beállított töréspontjaik, vagy pedig ha az alkalmazkodó képstílusok beállításainál megadtunk töréspontokat.

Ha viszont sikeresen felvettünk egy alkalmazkodó képstílust, akkor utána azt már kiválaszthatjuk a _Kép_ típusú mezők megjelenítési beállításai között. Ez lehetővé teszi, hogy a Drupal kihasználja a korszerű HTML5-ös _<picture>_ elemben, valamint az _<img>_ elem _srcset_ és _sizes_ tulajdonságaiban (beállításainktól függően) rejlő lehetőségeket.
## Kapcsolódó témák

[structure-fields](./structure-fields.md)
## Egyéb források

* [Responsive web design](https://www.drupal.org/node/1388492) (azaz „Alkalmazkodó webdizájn”) című közösségi dokumentáció a Drupal.org-on angol nyelven.
* [Responsive images in Drupal 8](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8) (azaz „Alkalmazkodó képek a Drupal 8-ban”) című közösségi dokumentáció a Drupal.org-on angol nyelven.
* [Working with breakpoints in Drupal 8](https://www.drupal.org/docs/8/theming-drupal-8/working-with-breakpoints-in-drupal-8) (azaz „Töréspontok használata a Drupal 8-ban”) című közösségi dokumentáció a Drupal.org-on angol nyelven.
* [Responsive Images in Drupal 8 using 'srcset'](https://chromatichq.com/blog/responsive-images-drupal-8-using-srcset) című blogbejegyzés angol nyelven.

*Közreműködők*

E témakör szövegét [Boris Doesborg](https://www.drupal.org/u/batigolix) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Responsive images in Drupal 8](https://www.drupal.org/docs/8/mobile-guide/responsive-images-in-drupal-8) (azaz „Alkalmazkodó képek a Drupal 8-ban”) című szócikkéből vette át, melynek szerzői joga 2000–2026 között annak egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
