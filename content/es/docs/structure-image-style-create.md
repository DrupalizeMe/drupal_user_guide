---
title: "Configuración de un estilo de imagen"
description: "Cómo añadir un estilo de imagen para reformatear una imagen."
id: "structure-image-style-create"
translation_key: "structure-image-style-create"
source_locale: "es"
---
## Objetivo { #structure-image-style-create }

Añadir un estilo de imagen y utilizarlo para mostrar imágenes en las páginas de
Vendor.
## Conocimientos previos

* [structure-fields](./structure-fields.md)
* [structure-content-display](./structure-content-display.md)
* [structure-image-styles](./structure-image-styles.md)
## Requisitos previos del sitio web

* Los tipos de contenido Vendor y Recipe deben existir. Ver
[structure-content-type](./structure-content-type.md).
* Deben existir campos de imagen principal para ambos tipos de contenido. Ver
[structure-fields](./structure-fields.md).
* Deben existir elementos de contenido para ambos tipos de contenido. Ver
[structure-content-type](./structure-content-type.md), [structure-fields](./structure-fields.md) y [content-create](./content-create.md).
## Pasos

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Media_ >
    _Image styles_ (_admin/config/media/image-styles_).
1. Haga clic en _Add image style_.
1. Introduzca el nombre _Extra medium (300x200)_.
1. Haga clic en _Create new style_. Aparece la página _Edit style Extra medium
    (300x200)_.
1. En la tabla _Effect_, seleccione _Scale and crop_. Haga clic en _Add_.
1. Rellene los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Width</td>
          <td>300</td>
        </tr>
        <tr>
          <td>Height</td>
          <td>200</td>
        </tr>
      </tbody>
    </table>
1. Haga clic en _Add effect_. El estilo de imagen se guarda con los efectos
    elegidos.
    <img src="/images/structure-image-style-create-add-style.png" alt="Add an image style" width="100%" />
1. En el menú administrativo _Manage_, vaya a _Structure_ > _Content types_
    (_admin/structure/types_).
1. Haga clic en _Manage display_ en el desplegable _Operations_ del tipo de
    contenido Vendor. Aparece la página _Manage display_
    (_admin/structure/types/manage/vendor/display_).
1. Asegúrese de que está seleccionada la pestaña secundaria _Default_.
1. Haga clic en la rueda dentada del campo _Main image_ para abrir las opciones
    de configuración.
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
          <td>Image style</td>
          <td>Qué estilo de imagen usar</td>
          <td>Extra medium (300x200)</td>
        </tr>
        <tr>
          <td>Link image to</td>
          <td>Página a la que ir si se hace clic en la imagen</td>
          <td>Nothing</td>
        </tr>
      </tbody>
    </table>

    ![Change field formatter settings of image field](/images/structure-image-style-create-manage-display.png)

1. Haga clic en _Update_.
1. Haga clic en _Save_. El nuevo estilo de imagen se utilizará al mostrar el
    contenido Vendor.
1. Abra un elemento de contenido Vendor y compruebe que ahora se muestra con la
    imagen a escala reducida. Ver [content-edit](./content-edit.md) para más información sobre cómo
    localizar un elemento de contenido existente.
1. Repita los pasos 8-15 para el tipo de contenido Recipe.
## Conceptos relacionados

* [structure-fields](./structure-fields.md)
* [structure-image-styles](./structure-image-styles.md)
* [structure-image-responsive](./structure-image-responsive.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DKIo7j19ulY" title="Setting up an Image Style" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

[_Drupal.org_ community documentation page "Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images)

*Atribuciones*

Adaptado y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix) y
[Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com), de
["Working with images"](https://www.drupal.org/docs/core-modules-and-themes/core-modules/image-module/working-with-images),
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
