---
title: "Alapfogalom: fejlesztői környezet"
description: "A fejlesztői másolat fontosságának megértése egy példa élesítési folyamaton keresztül."
id: "install-dev-sites"
translation_key: "install-dev-sites"
source_locale: "hu"
---
## Mit nevezünk egy webhely fejlesztői környezetének? { #install-dev-sites }

A fejlesztők a látogatók által használt, úgynevezett _éles_ webhelyről egy azzal lehetőleg majdnem mindenben megegyező másolatot (vagy többet) üzemeltetnek párhuzamosan, hogy a folyamatos módosítások, változtatások, frissítések és mindezek tesztelése ne veszélyeztesse a valódi felhasználók tevékenységét, vagy az éles webhely megfelelő működését.

Az alábbiakban bemutatjuk a webfejlesztési munkafolyamat talán leggyakoribb felállását, amelyben ugyanannak a webhelynek nem egy, hanem rögtön három másolata létezhet párhuzamosan:

- **Helyi gépen futó webhelymásolat:** Mielőtt a fejesztők bármilyen módosítást hajtanának végre a webhely forráskódján vagy konfigurációján, előtte lemásolják azt a saját számítógépükre, és egy azon futó helyi webkiszolgálón (lokálhoszt) futtatják azt.
- **Fejlesztés alatt álló webhelymásolat:** Amikor a változtatásuk elérte a kívánt célt, a módosított kódrészletet visszateszik ennek a webhelymásolatnak a forráskódjába. Ha egynél több fejlesztő vesz részt a közös munkában, akkor a változtatások könnyebb átláthatósága érdekében szinte mindig használnak valamilyen verziókövető rendszert. Ilyen például a Drupal világában szintén elterjedt Git, amely folyamatosan nyomon követi egy adott könyvtárban lévő fájlok minden módosítását. Így a kiválasztott változtatások bármikor beküldhetőek a nyilvántartásba. Ez lehetővé teszi a programozócsapatok számára, hogy tagjaik úgy dolgozzanak ugyanazon a fejlesztés alatt álló webhelymásolaton, hogy nem írják felül egymás munkáját. Szintén a Git nyilvántartásának köszönhetően szükség esetén bármikor könnyen visszaállítható egy korábbi állapot.
- **Élesítésre váró webhelymásolat:** Amikor elegendő új funkció készült el, vagy hiba lett kijavítva, akkor azt leklónozzák egy következő szintű másolatra, ahol tesztelni lehet a friss fejlesztéseket, majd a megrendelőnek bemutatni őket. A minőségbiztosítási (angolul Quality Assurance, rövidítve QA) és megrendelőoldali átvételi (User Acceptance Testing, UAT) teszteket leggyakrabban ezen a már élesítésre kész másolaton végzik el. Éppen ezért ez alá (de sokszor még az ez előtti munkafázisnak helyt adó fejlesztői másolat alá is) az éles webhely lehetőleg valamennyire friss adatbázisát szokás betölteni. Így biztosítható annak ellenőrzése, hogy a nemrég elvégzett fejlesztések nem fognak majd gondot okozni az elmúlt időszakban végzett tartalommódosításokkal.
- **Éles webhely:** Ez már nem másolat, hanem maga az igazi webhely, amit a látogatók elérhetnek a nyílt interneten keresztül. Ez már kizárólag csak olyan új módosításokat tartalmaz, amelyekről egyszer már meggyőződtek az üzemeltetők, hogy valóban jól működnek és biztonságosak.

Amit bemutattunk, csak egy általános modell, azonban a projekt nagyságától, az elvárások kiterjedtségétől, vagy a műszaki bonyolultságtól függően a fenti munkafázisok némelyike elhagyható, vagy éppen továbbiak is közbeiktathatóak. Például elképzelhető olyan helyzet, ahol a fejlesztői és élesítésre váró munkafázisok között fenntartanak egy negyedik webhelymásolatot is, amin kizárólag csak az automata teszteket futtatják.
## Kapcsolódó témák

* [install-dev-making](./install-dev-making.md)
* [planning-workflow](./planning-workflow.md)

*Közreműködők*

Írta és szerkesztette: [Lakatos Diána](https://www.drupal.org/u/dianalakatos) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
