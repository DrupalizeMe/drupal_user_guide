---
title: "Concepte: Contingut modular"
description: "Informació general del contingut modular i com el contingut d'una pàgina es pot obtenir a partir del contingut d'altres elements."
id: "planning-modular"
translation_key: "planning-modular"
source_locale: "ca"
---
## Coneixements previs { #planning-modular }

* [planning-data-types](./planning-data-types.md)
* [planning-layout](./planning-layout.md)
## Què és el contingut modular?

Donat que el contingut del vostre lloc està emmagatzemat en una base de dades, és desitjable fer el contingut _modular_, el que significa que certes pàgines del vostre lloc, en comptes de ser totalment editades, es generen automàticament des del contingut d'altres elements. Per exemple, en el mercat de grangers, heu de crear el contingut d'un element per a les receptes. Si hi ha un camp que conté el contingut dels elements de la recepta, llavors el vostre lloc pot incloure una pàgina composada que llisti les vostres receptes i permetrà als visitants buscar receptes a partir d'algun ingredient en particular que han comprat al mercat.

També es poden generar seccions més petites de pàgines de forma composada. Per exemple, els elements del contingut d'una recepta poden tenir un camp per a fer el seguiment del proveïdor que ha enviat la recepta (aneu a [structure-reference-fields](./structure-reference-fields.md)), amb els detalls del proveïdor editats en elements de contingut separats. Això us permetrà fer el següent al vostre lloc:

* A cada pàgina de receptes, hi pot haver una àrea que proporcioni informació sobre el proveïdor que ha enviat la recepta, com ara el seu nom o el número de la seva paradeta en el mercat.
* Cada pàgina de proveïdor pot tenir una secció que llista totes les receptes que ha enviat.

La clau d'aquesta idea és que cada peça d'informació només s'edita en un únic lloc. Quan es puja informació d'un proveïdor, s'actualitza automàticament a totes les pàgines de receptes on ell hi és; quan un proveïdor envia una recepta, automàticament s'actualitza a la pàgina pròpia del proveïdor. El mòdul Views del nucli és la manera habitual de crear pàgines composades i pàgines de seccions; aneu a [views-concept](./views-concept.md) per a més informació. Els _modes de visualització_ també són útils per a definir les diferents formes de mostrar els elements de contingut; aneu a [structure-view-modes](./structure-view-modes.md) per a més informació.
## Temes relacionats

* [planning-structure](./planning-structure.md)
* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-view-modes](./structure-view-modes.md)
* [views-concept](./views-concept.md)

*Atribucions*

Escrit per [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
Traduït per [Meritxell Camps](https://www.drupal.org/u/mericamps) i revisat per [Ramon Vilar](https://www.drupal.org/u/rvilar)
