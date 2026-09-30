---
title: "Cambiar la visualización del contenido"
description: "Cómo hacer que los elementos de contenido sean más presentables."
id: "structure-content-display"
translation_key: "structure-content-display"
source_locale: "es"
---
## Objetivo { #structure-content-display }

Hacer que los elementos de contenido sean más legibles, accesibles y
visualmente atractivos reordenando los campos, ocultando etiquetas y ajustando
la salida de los campos.
## Conocimientos previos

* [planning-data-types](./planning-data-types.md)
* [structure-view-modes](./structure-view-modes.md)
## Requisitos previos del sitio web

El tipo de contenido Vendor debe existir, debe tener los campos Main Image y
Vendor URL, y su sitio debe tener al menos un elemento de contenido Vendor. Ver
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) y [content-create](./content-create.md).
## Pasos

1. Busque y vea un elemento de contenido Vendor que creó en [structure-fields](./structure-fields.md).
    Observe que hay varias cosas que se podrían hacer para mejorar el aspecto de la
    página:
    * Los campos Main Image y Vendor URL no deberían tener etiquetas.
    * Habría que cambiar el orden de los campos para que la imagen aparezca
      primero.
    * La imagen debería ser más pequeña.
1. Para corregir los dos primeros problemas y actualizar algunos ajustes
    adicionales, en el menú administrativo _Manage_, vaya a _Structure_ > _Content
    types_ (_admin/structure/types_). Después haga clic en _Manage display_ en el
    botón desplegable del tipo de contenido Vendor.
    <img src="/images/structure-content-display_manage_display.png" alt="Manage display" width="100%" />
1. En la columna _Label_, seleccione _Hidden_ para Main image. Haga lo mismo con
    Vendor URL.
    <img src="/images/structure-content-display_main_image_hidden.png" alt="Selecting _main image title_ as _hidden_" width="100%" />
1. Haga clic en la rueda dentada del campo Vendor URL para abrir las opciones de
    configuración.
1. Rellene los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor de ejemplo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Trim link text length</td>
          <td>Longitud máxima que se muestra del texto del enlace</td>
          <td>En blanco (sin recorte)</td>
        </tr>
        <tr>
          <td>Open link in new window</td>
          <td>Si los enlaces deben abrirse en una ventana nueva o en la misma ventana</td>
          <td>Marcado</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-content-display_trim_length.png" alt="Link trim length" width="100%" />

1. Haga clic en _Update_.
1. Arrastre los tiradores en cruz de los campos para reordenarlos como Main
    image, _Body_, Vendor URL y _Links_. Como alternativa a arrastrar, puede hacer
    clic en el enlace _Show row weights_ situado en la parte superior de la tabla e
    introducir pesos numéricos (los campos con pesos menores o más negativos se
    mostrarán primero).
    <img src="/images/structure-content-display_change_order.png" alt="Changing order of fields" width="100%" />
1. Haga clic en _Save_.
1. Vuelva a buscar el elemento de contenido Vendor del paso 1 y compruebe que se
    han aplicado las actualizaciones.
1. Repita pasos similares para gestionar la visualización de los campos del tipo
    de contenido Recipe.
## Ampliar conocimiento

* Haga la imagen principal más pequeña. Ver [structure-image-style-create](./structure-image-style-create.md).
* Si no ve el efecto de estos cambios en su sitio, puede que tenga que borrar
la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
## Conceptos relacionados

[structure-image-styles](./structure-image-styles.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/myYI9rhF_4o" title="Changing Content Display" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* [_Drupal.org_ community documentation page "Specify how fields are displayed"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/specify-how-fields-are-displayed)
* [_Drupal.org_ community documentation page "Rearrange the order of fields"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/rearrange-the-order-of-fields)
* [_Drupal.org_ community documentation page "View modes"](https://www.drupal.org/node/1577752)

*Atribuciones*

Escrito por [Ann Greazel](https://www.drupal.org/u/AnnGreazel) y
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
