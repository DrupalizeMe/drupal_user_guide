---
title: "Alapfogalom: hivatkozásmezők"
description: "A hivatkozott mezők fogalmának megismerése, valamint néhány gyakran használt fajtájuk bemutatása."
id: "structure-reference-fields"
translation_key: "structure-reference-fields"
source_locale: "hu"
---
## Szükséges előismeretek { #structure-reference-fields }

[planning-data-types](./planning-data-types.md)
## Mit nevezünk hivatkozott mezőnek?

A mezőhivatkozás tulajdonképpen nem más, mint kapcsolat egy entitás és egy vagy több másik entitás között. Az összekapcsolt entitások akár egyforma, akár eltérő entitástípus alá is tartozhatnak. A gyakorlatban az alábbi három mezőhivatkozás fordul elő a legtöbbször:

- **Tartalmi entitások hivatkozása:** Amikor a webhely egy tartalmi egységére történik a hivatkozás, például a termelői piac webhelyünkön összeköthetjük a recepteket az azokat feltöltő árusok bemutatkozó oldalaival. Ehhez nem kell mást tennünk, mint a _Recept_ tartalomtípushoz felvennünk egy mezőhivatkozást, amit elnevezhetünk „Beküldő árus adatlapja” néven.
- **Taxonómiakifejezésre hivatkozás:** A tartalmak címkézésére, kategorizálására használatos taxonómia-szótárak elemei ugyanígy hivatkozhatóak. Előbbi példánknál maradva a recepteket hozzákapcsolhatjuk az egyes összetevőikhez. Ezt úgy érhetjük el, hogy szintén a _Recept_ tartalomtípushoz felveszünk egy másik hivatkozott mezőt is, amit „Szükséges hozzávalóknak” nevezünk el. Ez pedig az _Összetevők_ nevű szótárra fog mutatni.
- **Felhasználóra való hivatkozás:** Olyan mező, ami a webhelyen regisztrált felhasználókra hivatkozik. Az említett recepteket hozzákapcsolhatjuk bizonyos szakácsokhoz is. Ez is könnyen megvalósítható, ha ugyanehhez a _Recept_ tartalomtípushoz felveszünk egy harmadik, felhasználókra hivatkozó mezőt is.
## Kapcsolódó témák

[structure-taxonomy](./structure-taxonomy.md)

*Közreműködők*

Írta és szerkesztette: [Surendra Mohan](https://www.drupal.org/u/surendramohan) és [Jojy Alphonso](https://www.drupal.org/u/jojyja) ([Red Crackle](http://redcrackle.com)). Fordította: [Balu Ertl](https://www.drupal.org/u/balu-ertl) ([Brainsum](https://www.drupal.org/brainsum)).
