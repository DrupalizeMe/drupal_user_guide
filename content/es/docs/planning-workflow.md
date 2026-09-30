---
title: "Concepto: flujo de trabajo editorial"
description: "Descripción general del flujo de trabajo editorial para gestionar el contenido de un sitio web."
id: "planning-workflow"
translation_key: "planning-workflow"
source_locale: "es"
---
## Conocimientos previos { #planning-workflow }

* [understanding-drupal](./understanding-drupal.md)
* [planning-data-types](./planning-data-types.md)
## ¿Qué es un flujo de trabajo editorial?

Un _flujo de trabajo editorial_ es el proceso que siguen las organizaciones
para crear, revisar, editar y publicar contenido. En el proceso pueden
participar varias personas con distintos roles dentro de la organización. Por
ejemplo, quienes crean el contenido pueden recopilar información y redactarlo;
quienes lo editan pueden revisarlo, corregirlo, pedir cambios y publicarlo una
vez que está listo para compartirse con el público. Más adelante, las
revisiones del contenido pueden pasar por un proceso sencillo para cambios
pequeños, o por un proceso más complejo con revisiones para cambios más
grandes.
## ¿Qué herramientas hay disponibles para gestionar flujos de trabajo?

- **Estado publicado/no publicado:** El tipo de entidad Content item permite marcar cada elemento de contenido como publicado o no publicado. Los permisos de visualización son independientes para el contenido publicado y el no publicado; por ejemplo, todos los visitantes del sitio podrían ver los elementos de contenido publicados, mientras que solo quienes crean y editan contenido pueden ver los elementos de contenido no publicados.
- **Seguimiento de revisiones:** Algunos tipos de entidad de contenido admiten el seguimiento de revisiones, es decir, a medida que se revisa el contenido, el software almacena las revisiones anteriores, de modo que se pueden comparar o restaurar.
- **Flujos de trabajo:** El módulo del núcleo Workflows le permite definir estados de flujo de trabajo y transiciones, más allá de que el contenido esté simplemente publicado o no publicado. El módulo del núcleo complementario Content Moderation le permite asignar permisos y roles a las transiciones del flujo de trabajo. Ambos se pueden usar con los tipos de entidad Content item y Custom block.
- **Colocación de bloques:** La entidad de contenido Custom block le permite crear un bloque personalizado y editarlo, pero hacerlo visible en el sitio solo cuando esté listo.
## Temas relacionados

* [content-create](./content-create.md)
* [content-edit](./content-edit.md)
* [block-create-custom](./block-create-custom.md)
* [block-place](./block-place.md)

*Atribuciones*

Escrito y editado por [Diána Lakatos](https://www.drupal.org/u/dianalakatos) en
[Pronovix](https://pronovix.com//),
[Grant Dunham](https://www.drupal.org/u/gdunham),
y [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
