---
title: "Modificación de formularios de entrada de contenido"
description: "Cómo editar un formulario de entrada de contenido."
id: "structure-form-editing"
translation_key: "structure-form-editing"
source_locale: "es"
---
## Objetivo { #structure-form-editing }

Cambie el formulario Receta para usar un widget diferente y introducir
términos en el campo Ingredientes.
## Conocimientos previos

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy](./structure-taxonomy.md)
* [structure-widgets](./structure-widgets.md)
## Requisitos previos del sitio web

El tipo de contenido Recetas debe existir, y debe tener un campo de referencia
de términos de taxonomía de Ingredientes. Debe existir al menos un elemento de
contenido Proveedor. Véase [structure-content-type](./structure-content-type.md) y
[structure-taxonomy-setup](./structure-taxonomy-setup.md).
## Pasos

1. En el menú administrativo _Administrar_, vaya a _Contenido_ > _Añadir contenido_ >
    _Receta_ (_node/add/recipe_) para ver el formulario de entrada de contenido
    configurado por defecto. Observe cómo tiene que introducir los ingredientes
    uno por uno, en lugar de tener un formato más compacto.
1. En el menú administrativo _Administrar_, vaya a _Estructura_ > _Tipos de contenido_
    (_admin/structure/types_). A continuación, haga click en _Administrar la
    visualización del formulario_ en el botón desplegable para el tipo de contenido Receta.
    La página Administrar la visualización del formulario aparecerá.
1. Para el campo Ingredientes, seleccione _Autocompletar (estilo de etiquetado)_
    en la columna _Control_.
    <img src="/images/structure-form-editing-manage-form.webp" alt="Manage the Recipe form" width="100%" />
1. Haga click en _Guardar_.
1. En el menú administrativo _Administrar_, vaya a _Contenido_ > _Añadir contenido_ > Receta
    (_node/add/recipe_) para verificar el comportamiento cambiado del
    formulario de contenido. El campo Ingredientes es ahora un solo campo de texto
    que acepta varios valores.
    <img src="/images/structure-form-editing-add-recipe.webp" alt="Add a recipe" width="100%" />
1. Cree dos elementos de contenido Receta (véase [content-create](./content-create.md)), como las
    recetas de "Ensalada verde" y "Zanahorias frescas". Asegúrese de que
    todos los campos tienen valores, incluyendo imágenes, ingredientes y publicados
    por (defina esto como uno de los elementos de contenido del Proveedor que creó
    en [structure-fields](./structure-fields.md)).
## Ampliar conocimiento

Cambie el formulario de contacto del sitio principal navegando en el menú
administrativo _Administrar_ > _Estructura_ > _Formularios de contacto_. Por ejemplo, es posible
que desee ocultar los campos _Enviar una copia al emisor_ o _Idioma_.
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CELMGX93fjE" title="Changing Content Entry Forms" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Written by [Boris Doesborg](https://www.drupal.org/u/batigolix).
Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito) y [Guiu Rocafort Ferrer](https://www.drupal.org/u/guiurocafortferrer) para [Indra](https://www.drupal.org/indra-sistemas-sa).
