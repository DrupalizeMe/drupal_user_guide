---
title: "Concepto: campos de referencia"
description: "Descripción general de los campos de referencia y sus tipos de uso más común."
id: "structure-reference-fields"
translation_key: "structure-reference-fields"
source_locale: "es"
---
## Conocimientos previos { #structure-reference-fields }

[planning-data-types](./planning-data-types.md)
## ¿Qué es un campo de referencia?

Un _campo de referencia_ es un campo que representa una relación entre una
entidad y una o varias entidades más, que pueden pertenecer al mismo tipo de
entidad o a uno distinto. Los tres campos de referencia de uso más común son:

- **Referencia de contenido:** Una referencia a un elemento de contenido. Por ejemplo, quizá quiera conectar las recetas con los vendors que las enviaron. Configuraría un campo de referencia de contenido llamado Submitted by que hace referencia a elementos de contenido Vendor en el tipo de contenido Recipe.
- **Referencia de término de taxonomía:** Una referencia a un término de taxonomía. Por ejemplo, quizá quiera conectar las recetas con sus ingredientes. Configuraría un campo de referencia de término de taxonomía llamado Ingredients en el tipo de contenido Recipe. Este campo de referencia apuntará al vocabulario Ingredients.
- **Referencia de usuario:** Una referencia a una cuenta de usuario. Por ejemplo, quizá quiera conectar las recetas con sus chefs. Configuraría un campo de referencia de usuario llamado Chefs en el tipo de contenido Recipe.
## Temas relacionados

[structure-taxonomy](./structure-taxonomy.md)

*Atribuciones*

Escrito y editado por [Surendra Mohan](https://www.drupal.org/u/surendramohan)
y [Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
