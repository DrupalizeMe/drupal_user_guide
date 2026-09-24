---
title: "Adición de un campo de referencia"
description: "Cómo añadir un campo de referencia que conecte dos tipos de contenido."
id: "structure-adding-reference"
translation_key: "structure-adding-reference"
source_locale: "es"
---
## Objetivo { #structure-adding-reference }

Agregar un campo de referencia para que las recetas se puedan vincular al
proveedor que las ha enviado.
## Conocimientos previos

* [structure-fields](./structure-fields.md)
* [structure-reference-fields](./structure-reference-fields.md)
* [structure-content-type](./structure-content-type.md)
## Requisitos previos del sitio web

Los tipos de contenido receta y proveedor deben existir. Consultar
[structure-content-type](./structure-content-type.md).
## Pasos

1. En el menú administrativo _Administrar_, vaya a _Estructura_ > _Tipos de contenido_
    (_admin / structure / types_). A continuación, haga click en _Gestionar campos_
    en el botón desplegable para el tipo de contenido Receta. Aparece la página
    _Gestionar campos_.
1. Haga click en _Añadir un campo_. La página _Añadir un campo_ aparecerá. Rellene los
    campos como se muestra a continuación. Haga click en Guardar y continuar.
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
          <td>Añadir un nuevo campo</td>
          <td>Opción para especificar el tipo de campo</td>
          <td>Referencia > Contenido</td>
        </tr>
        <tr>
          <td>Etiqueta</td>
          <td>El título que quiere dar campo</td>
          <td>Presentado por</td>
        </tr>
      </tbody>
    </table>

    ![Adding a reference field to a content type](/images/structure-adding-reference-add-field.webp)

1. Aparecerá la página presentado por, que le permite establecer el número de
    valores permitido. Rellene los campos como se muestra a continuación. Haga
    click en _Guardar opciones de campo_.
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
          <td>Tipo de articulo a referenciar</td>
          <td>Opción para seleccionar el tipo de artículo referenciado</td>
          <td>Contenido</td>
        </tr>
        <tr>
          <td>Número de valores permitidos</td>
          <td>Especificar el recuento de valores asociados con el campo</td>
          <td>Límite, 1</td>
        </tr>
      </tbody>
    </table>

    ![Storage configuration of a reference field ](/images/structure-adding-reference-set-field-basic.webp)

1. Aparecerá la página _Configuración de Submitted by para Receta_ que le permite
    configurar el campo. Rellene los campos como se muestra a continuación. Haga
    click en _Guardar configuración_ .
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
          <td>Etiqueta</td>
          <td>Título mostrado por este campo en la página</td>
          <td>Presentado por</td>
        </tr>
        <tr>
          <td>Texto de ayuda</td>
          <td>Breve texto de ayuda para la persona que crea el contenido</td>
          <td>Elegir al proveedor que presentó la receta</td>
        </tr>
        <tr>
          <td>Campo requerido</td>
          <td>Si un valor tiene que ser proporcionado o no</td>
          <td>Comprobado</td>
        </tr>
        <tr>
          <td>Método de referencia</td>
          <td>Opción para seleccionar el metodo de referencia</td>
          <td>Por defecto</td>
        </tr>
        <tr>
          <td>Tipos de contenido</td>
          <td>Especificar el tipo de contenido</td>
          <td>Proveedor</td>
        </tr>
        <tr>
          <td>Ordenar por</td>
          <td>Orden del campo</td>
          <td>Título</td>
        </tr>
        <tr>
          <td>Dirección de clasificación</td>
          <td>Orden de clasificación</td>
          <td>Ascendente</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/structure-adding-reference-field-settings.webp" alt="Settings for a reference field " width="100%" />

1. El campo Presentado por se ha agregado al tipo de contenido.
    <img src="/images/structure-adding-reference-manage-fields.webp" alt="Manage fields page for the Recipe content type" width="100%" />

    *Atribuciones*

    Escrito y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix) y [Jojy Alphonso](https://www.drupal.org/u/jojyja) para [Red Crackle](http://redcrackle.com).
    Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito) y [Guiu Rocafort Ferrer](https://www.drupal.org/u/guiurocafortferrer) para [Indra](https://www.drupal.org/indra-sistemas-sa).
