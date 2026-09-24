---
title: "Añadir campos básicos a un tipo de contenido"
description: "Cómo añadir campos a un tipo de contenido."
id: "structure-fields"
translation_key: "structure-fields"
source_locale: "es"
---
## Objetivo { #structure-fields }

Añadir un campo de enlace y un campo de imagen al tipo de contenido Vendor.
## Conocimientos previos

[planning-data-types](./planning-data-types.md)
## Requisitos previos del sitio web

El tipo de contenido Vendor debe existir. Ver [structure-content-type](./structure-content-type.md).
## Pasos

Añade los campos Vendor URL e Main image al tipo de contenido Vendor.

1. En el menú administrativo _Manage_, ve a _Structure_ > _Content types_
    (_admin/structure/types_). A continuación, haz clic en _Manage fields_ en el
    botón desplegable del tipo de contenido Vendor. Aparece la página _Manage
    fields_. Desde aquí puedes crear un nuevo campo para el tipo de contenido o
    reutilizar un campo existente. Ten en cuenta que los nombres y descripciones de
    los tipos de contenido y campos que proporciona tu perfil de instalación se
    muestran en inglés en estas páginas; ver [language-concept](./language-concept.md) para una
    explicación.
1. Haz clic en _Create a new field_. Aparece la página _Add field_.
    ![Add field page to choose field type](/images/structure-fields-add-field.webp)
1. Elige el tipo de campo _Link_ en las opciones _Choose a field type_. Haz clic
    en _Continue_. Aparece la página _Add field_ con un formulario para configurar
    la etiqueta del campo.
1. Rellena los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Etiqueta visible en las páginas de administración</td>
          <td>Vendor URL</td>
        </tr>
        <tr>
          <td>Choose a type of field</td>
          <td>Tipo de campo</td>
          <td>Link</td>
        </tr>
      </tbody>
    </table>

    Se genera automáticamente un nombre de máquina basado en el valor de _Label_.
    Haz clic en _Edit_ si quieres anular el nombre por defecto.
    ![Add field page to set field label](/images/structure-fields-add-field-label.png)

1. Haz clic en _Continue_. Aparece la página _Vendor URL settings for Vendor_,
    que te permite configurar el campo. Rellena los campos como se muestra a
    continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Etiqueta visible en el formulario de contenido</td>
          <td>Vendor URL</td>
        </tr>
        <tr>
          <td>Allowed number of values</td>
          <td>El número de valores que se pueden introducir</td>
          <td>Limited, 1</td>
        </tr>
        <tr>
          <td>Help text</td>
          <td>La instrucción que se muestra debajo del campo</td>
          <td>(dejar en blanco)</td>
        </tr>
        <tr>
          <td>Required field</td>
          <td>Si el campo es obligatorio o no</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>Allowed link type</td>
          <td>El tipo de enlaces que se pueden introducir</td>
          <td>External links only</td>
        </tr>
        <tr>
          <td>Allow link text</td>
          <td>Si se puede introducir texto del enlace</td>
          <td>Disabled</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-vendor-url.webp" alt="Field settings page for Vendor URL" width="100%" />

1. Haz clic en _Save settings_. Se ha añadido Vendor URL al tipo de contenido.
    Continúa creando el campo Main image.
1. Haz clic en _Create a new field_. Aparece la página _Add field_.
1. Elige el tipo de campo _File upload_ en las opciones _Choose a field type_.
    Haz clic en _Continue_. Aparece la página _Add field_ con un formulario para
    configurar la etiqueta del campo.
1. Algunos tipos de campo requieren la selección de un subtipo. Rellena los
    campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Etiqueta visible en las páginas de administración</td>
          <td>Main image</td>
        </tr>
        <tr>
          <td>Choose an option below</td>
          <td>Subtipo de campo</td>
          <td>Image</td>
        </tr>
      </tbody>
    </table>
1. Haz clic en _Continue_. Aparece la página Main image settings for Vendor.
    Rellena los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Label</td>
          <td>Etiqueta visible en el formulario de contenido</td>
          <td>Main image</td>
        </tr>
        <tr>
          <td>Allowed number of values</td>
          <td>El número de valores que se pueden introducir</td>
          <td>Limited, 1</td>
        </tr>
        <tr>
          <td>Default image</td>
          <td>Puedes establecer una imagen por defecto aquí. Se usará cuando no proporciones una imagen al crear un elemento de contenido Vendor.</td>
          <td>(dejar en blanco)</td>
        </tr>
        <tr>
          <td>Help text</td>
          <td>La instrucción que se muestra debajo del campo</td>
          <td>(dejar en blanco)</td>
        </tr>
        <tr>
          <td>Required field</td>
          <td>Si el campo es obligatorio o no</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Allowed file extensions</td>
          <td>El tipo de imágenes que se pueden subir</td>
          <td>png, gif, jpg, jpeg</td>
        </tr>
        <tr>
          <td>File directory</td>
          <td>El directorio donde se almacenarán los archivos. Al proporcionar un valor de directorio de archivo, garantizas que todas las imágenes subidas a través del campo Main image se ubicarán en el mismo directorio.</td>
          <td>vendors</td>
        </tr>
        <tr>
          <td>Minimum image dimensions</td>
          <td>Las dimensiones mínimas de la imagen subida</td>
          <td>600 x 600</td>
        </tr>
        <tr>
          <td>Maximum upload size</td>
          <td>El tamaño máximo de archivo de la imagen subida</td>
          <td>5 MB</td>
        </tr>
        <tr>
          <td>Enable Alt field</td>
          <td>Si se puede introducir un texto alternativo</td>
          <td>Checked</td>
        </tr>
        <tr>
          <td>Alt field required</td>
          <td>Si el texto alternativo es obligatorio</td>
          <td>Checked</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-fields-main-img.webp" alt="Field settings page for Main Image" width="100%" />

1. Haz clic en _Save settings_. Se ha añadido Main image al tipo de contenido.
    <img src="/images/structure-fields-result.webp" alt="Manage fields page" width="100%" />
1. Añade un campo Main image al tipo de contenido Recipe, usando pasos similares.
    Comienza navegando a la página _Manage Fields_ del tipo de contenido Recipe.
    Luego usa el botón _Re-use an existing field_ para abrir el diálogo modal y
    presiona el botón _Re-use_ que corresponde al campo Main image en la tabla. A
    continuación salta al paso 7 y sigue los pasos restantes.
    <img src="/images/structure-fields-main-img-reuse.png" alt="Select a field to re-use" width="100%" />
1. Crea dos elementos de contenido Vendor (ver [content-create](./content-create.md)) llamados
    "Happy Farm" y "Sweet Honey". Asegúrate de que incluyen imágenes y URLs.
## Ampliar conocimiento

* [structure-image-styles](./structure-image-styles.md)
* [structure-content-display](./structure-content-display.md)
* [structure-form-editing](./structure-form-editing.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CZpfR9WbVcQ" title="Adding Basic Fields to a Content Type" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

[Página de documentación comunitaria de _Drupal.org_ "Add a field to a content type"](https://www.drupal.org/docs/7/nodes-content-types-and-fields/add-a-field-to-a-content-type)

*Atribuciones*

Escrito por [Sree Veturi](https://www.drupal.org/u/sree) y
[Boris Doesborg](https://www.drupal.org/u/batigolix), y [Joe Shindelar](https://www.drupal.org/u/eojthebrave) en [Drupalize.Me](https://drupalize.me).

Traducido por [Alvaro Hurtado](https://www.drupal.org/u/alvar0hurtad0).
