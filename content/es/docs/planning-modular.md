---
title: "Concepto: contenido modular"
description: "Descripción general del contenido modular y de cómo el contenido de una página puede obtenerse de otros elementos de contenido."
id: "planning-modular"
translation_key: "planning-modular"
source_locale: "es"
---
## Conocimientos previos { #planning-modular }

* [planning-data-types](./planning-data-types.md)
* [planning-layout](./planning-layout.md)
## ¿Qué es el contenido modular?

Dado que el contenido de su sitio se almacena en una base de datos, conviene
hacerlo _modular_, es decir, que ciertas páginas de su sitio, en lugar de
editarse como una página completa, se generen automáticamente a partir de otros
elementos de contenido. Por ejemplo, en el escenario del sitio del mercado de
agricultores, podría crear elementos de contenido individuales para las recetas.
Si los elementos de contenido de receta tienen un campo que registra los
ingredientes, su sitio podría incluir una página compuesta que liste las recetas
y permita a los visitantes buscar una receta que contenga algún ingrediente
concreto que hayan comprado en el mercado.

También se pueden generar como compuestas secciones más pequeñas de las páginas.
Por ejemplo, los elementos de contenido de receta podrían tener un campo que
registre qué vendor envió la receta (ver [structure-reference-fields](./structure-reference-fields.md)), con
los datos del vendor editados en elementos de contenido de vendor
independientes. Esto le permitiría hacer lo siguiente en su sitio:

* En cada página de receta podría haber un área que muestre información sobre el
vendor que envió la receta, como su nombre y su número de puesto en el mercado.
* La página de cada vendor podría tener una sección que liste las recetas que ha
enviado.

La idea clave es que cada dato se edita en un solo sitio. Cuando se actualiza la
información de un vendor, todas las páginas de recetas que muestran esa
información se actualizan automáticamente; cuando un vendor envía una receta,
esta se muestra automáticamente en la página del vendor. El módulo del núcleo
Views es la forma habitual de usar contenido modular para crear páginas
compuestas y secciones de páginas; ver [views-concept](./views-concept.md) para más información.
Además, los _modos de visualización_ son útiles para definir distintas formas de
mostrar cada elemento de contenido; ver [structure-view-modes](./structure-view-modes.md) para más
información.
## Temas relacionados

* [planning-structure](./planning-structure.md)
* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-view-modes](./structure-view-modes.md)
* [views-concept](./views-concept.md)

*Atribuciones*

Escrito por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
