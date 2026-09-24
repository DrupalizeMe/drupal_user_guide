---
title: "Alapfogalom: taxonómia"
description: "A taxonómia fogalmának megismerése, és annak áttekintése, hogyan tudjuk ezt a tartalmaink kategorizálására használni."
id: "structure-taxonomy"
translation_key: "structure-taxonomy"
source_locale: "hu"
---
## Szükséges előismeretek { #structure-taxonomy }

* [planning-data-types](./planning-data-types.md)
* [structure-reference-fields](./structure-reference-fields.md)
## Mit jelent a taxonómia szó?

E kifejezés eredetileg a fajok rendszertanának csoportosítását jelenti, a Drupalba is ilyen értelemben került át. Az egyik leggyakoribb példa a használatára a webhely tartalmainak kategorizálása azok felcímkézésével. A termelői piac webhelyünkön például készíthetünk egy zöldségek neveit tartalmazó szótárat, melynek segítségével összetevőik szerint rendszerezhetjük a recepteket. Az egymástól független taxonómiaelemeket _kifejezéseknek_ hívjuk (például a recept hozzávalói vagy a blogok címkéi), a kifejezések csoportját pedig _szótárnak_ (az összes blog címkéi, a receptek összes hozzávalója) nevezzük. A háttérben való működés, vagyis ahogyan a Drupal mindezt tárolja és kezeli, némiképp fordított: maguk a kifejezések az _entitástípusok_, melyeknek _entitásaltípusai_ a szótárak. Tekintve, hogy a taxonómiakifejezések is rendes entitások, ezért természetesen ugyanúgy lehet hozzájuk további mezőket adni, például egy kép típusú mező hozzáadásával ikonokat tudunk feltölteni valamennyi címkéhez.

Egy szótár a címkéit alá-fölé rendelt hierarchiában és egyetlen szintű szerkezetben is tartalmazhatja. Például egy személyes blogon használt címkék általában simán csak egy szintet képeznek, ám az előbb említett zöldségek szótára lehet hierarchikus: legfelső szinten gyümölcsök és zöldségek – utóbbiba tartozik a répa, melynek két alcsoportja a sárga- és fehérrépa.

A szótárak ezen kifejezései hozzárendelhetők a webhely más típusú entitásaihoz, így kategorizálhatóak egy közös szempont szerint. Ehhez azonban először erre a szótárra mutató hivatkozott mezőket kell felvenni az adott entitásaltípushoz, aminek a kitöltési módja kétféle is lehet:

- **Szabadszavas címkézés:** Az ilyen hivatkozási mezőbe bármilyen szöveg beírható, ami az űrlap beküldésekor automatikusan egy új címkét hoz létre a szótárban, ha az még nem létezett korábban.
- **Címkék rögzített listája:** Ebben az esetben a hivatkozott mezőbe csak a szótárba már előre felvett kifejezések választhatók ki.

Ilyen taxonómia-szótárakra mutató hivatkozott mezők bármelyik entitástípushoz hozzáadhatóak (például felhasználói fiókokhoz, egyedi blokkokhoz vagy sima tartalmakhoz). Ezután ha ilyen taxonómia-szótárakat használunk csoportosításra, akkor minden egyes kifejezéshez automatikusan létrejön egy listaoldal is, ami felsorolja az azzal a kifejezéssel megcímkézett elemeket. Tehát ha már vannak receptjeink felvéve a webhelyünkön, amiknek az összetevőit a fent vázolt módon összelinkeltük a _Zöldségek_ szótárral, akkor a _Répa_ listaoldalán két ételt látunk megjelenni:

![A répa címke listaoldala](/images/structure-taxonomy_listingPage_carrots.webp)
## Kapcsolódó témák

* [structure-taxonomy-setup](./structure-taxonomy-setup.md).
* A címkék előbb említett listaoldalai tulajdonképpen _nézetek_, amikkel részletesebben a [views-chapter](./index.md#views-chapter) szakasz foglalkozik.

*Közreműködők*

E témakör szövegét [Surendra Mohan](https://www.drupal.org/u/surendramohan), [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)) a Drupal közösségi [dokumentációjának](https://www.drupal.org/documentation) [Organizing content with taxonomies](https://www.drupal.org/docs/7/organizing-content-with-taxonomies/organizing-content-with-taxonomy) (azaz „Tartalomszervezés taxonómiával”) és [About taxonomies](https://www.drupal.org/node/774892) (azaz „A taxonómiáról”) című szócikkeiből vették át és szerkesztették, melynek szerzői joga 2000–2026 között azok egyéni közreműködőié. Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
