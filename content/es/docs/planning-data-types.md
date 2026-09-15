---
title: "Concepto: entidades de contenido y campos"
description: "Descripción general de las entidades de contenido y los campos."
id: "planning-data-types"
translation_key: "planning-data-types"
source_locale: "es"
---
## Conocimientos previos { #planning-data-types }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
## ¿Qué es una entidad de contenido?

Una _entidad de contenido_ (o, más habitualmente, _entidad_) es un elemento de
datos de contenido, que puede consistir en texto, marcado HTML, imágenes,
archivos adjuntos y otros datos que se pretende mostrar a las personas que
visitan el sitio. Las entidades de contenido pueden estar definidas por el
software del núcleo o por módulos.

Las entidades de contenido se agrupan en _tipos de entidad_, que tienen
propósitos distintos y se muestran de formas muy diferentes en el sitio. La
mayoría de los tipos de entidad se dividen además en _subtipos de entidad_, que
son divisiones dentro de un tipo de entidad que permiten pequeñas variaciones en
la forma de usar y mostrar las entidades. Esta es una tabla con algunos tipos
habituales de entidad de contenido:

| Tipo de entidad | Subtipo de entidad | Módulo que lo define | Usos principales |
| --- | --- | --- | --- |
| Elemento de contenido | Tipo de contenido | Módulo Node | Contenido pensado para ser el área principal de la página en las páginas del<br><br>*Ejemplo:* en el sitio de ejemplo del mercado agrícola, podrías tener tipos de contenido para páginas básicas, páginas de vendedores y páginas de recetas. |
| Comentario | Tipo de comentario | Módulo Comment | Comentarios añadidos a entidades de contenido (normalmente a entidades de tipo<br><br>*Ejemplo:* en un sitio de blog, las entradas podrían tener comentarios. No hacen falta en el sitio de ejemplo del mercado agrícola. |
| Perfil de usuario | (ninguno) | Módulo User | Datos relacionados con una persona que tiene una cuenta de usuario (acceso con<br><br>*Ejemplo:* todos los sitios tienen al menos perfiles de usuario básicos con nombres de usuario y direcciones de correo electrónico; los sitios de redes sociales pueden tener perfiles de usuario más complejos con más información. |
| Bloque personalizado | Tipo de bloque | Módulo Custom Block | Texto e imágenes en fragmentos más pequeños, que a menudo se muestran en la<br><br>*Ejemplo:* en el sitio de ejemplo del mercado agrícola, podrías poner el horario y la ubicación en un bloque de la barra lateral. |
| Término de taxonomía | Vocabulario | Módulo Taxonomy | Se usa para clasificar otros tipos de contenido<br><br>*Ejemplo:* en el sitio de ejemplo del mercado agrícola, podrías clasificar el contenido de Recetas con un vocabulario de taxonomía de Ingredientes, con términos de taxonomía como Zanahorias y Tomates. En un sitio de blog, las entradas podrían clasificarse con un vocabulario de Etiquetas y quizá también con un vocabulario de Categorías. |
| Archivo | (ninguno) | Módulo File | Un archivo de imagen o adjunto que el sitio registra y gestiona, a menudo<br><br>*Ejemplo:* en el sitio de ejemplo del mercado agrícola, tanto las páginas de Recetas como las de Vendedores podrían tener imágenes adjuntas, que (entre bastidores) el sitio gestionaría como entidades de tipo Archivo. |
| Formulario de contacto | Tipo de formulario | Módulo Contact | Un formulario que permite a las personas que visitan el sitio ponerse en<br><br>*Ejemplo:* en el sitio de ejemplo del mercado agrícola hace falta un formulario de contacto. |
## ¿Qué es un campo?

Dentro de las entidades, los datos se almacenan en _campos_ individuales, cada
uno de los cuales contiene un tipo de dato, como texto con formato o sin
formato, imágenes u otros archivos, o fechas. Los tipos de campo pueden estar
definidos por el software del núcleo o por módulos.

Una persona administradora puede añadir campos a los subtipos de entidad, de modo
que todas las entidades de un subtipo de entidad dado tengan disponible el mismo
conjunto de campos. Por ejemplo, el tipo de contenido Vendor del ejemplo del
mercado agrícola podría tener campos para el nombre del vendedor, una imagen de
logo, la URL del sitio web y una descripción, mientras que el tipo de contenido
_Basic page_ podría tener solo campos para el título y el cuerpo de la página.
Cuando creas o editas entidades, especificas los valores de los campos de la
entidad.
## Temas relacionados

* [planning-structure](./planning-structure.md)
* [content-create](./content-create.md)
* [structure-content-type](./structure-content-type.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [user-concept](./user-concept.md)
* [block-concept](./block-concept.md)

*Atribuciones*

Escrito y editado por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
y [Grant Dunham](https://www.drupal.org/u/gdunham).

Traducido por [Alvaro Hurtado](https://www.drupal.org/u/alvar0hurtad0).
