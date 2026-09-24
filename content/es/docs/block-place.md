---
title: "Colocar un bloque en una región"
description: "Cómo colocar un bloque en una región."
id: "block-place"
translation_key: "block-place"
source_locale: "es"
---
## Objetivo { #block-place }

Colocar el bloque Hours and location en la barra lateral del sitio web.
## Conocimientos previos

[block-concept](./block-concept.md)
## Requisitos previos del sitio web

* El tema del núcleo Olivero debe estar instalado y establecido como
predeterminado. Ver [config-theme](./config-theme.md).
* El bloque Hours and location debe existir. Ver [block-create-custom](./block-create-custom.md).
## Pasos

1. En el menú administrativo _Manage_, vaya a _Structure_ > _Block layout_
    (_admin/structure/block_). Aparece la página _Block layout_, que lista las
    regiones del tema.
1. Asegúrese de que en la pestaña secundaria esté seleccionado el tema del
    núcleo Olivero. La colocación de bloques se define por tema.
1. Localice la región _Sidebar_ en la lista y haga clic en _Place block_ junto a
    ella. Aparece la ventana _Place block_, que lista todos los bloques.
1. Localice el bloque Hours and location y haga clic en _Place block_ junto a
    él. Aparece la ventana _Configure block_. Rellene los campos como se muestra a
    continuación.
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
          <td>Title</td>
          <td>Título que se mostrará para el bloque</td>
          <td>Hours and location</td>
        </tr>
        <tr>
          <td>Display title</td>
          <td>Si se muestra o no el título con el bloque</td>
          <td>Marcado</td>
        </tr>
        <tr>
          <td>Region</td>
          <td>En qué región del tema mostrarlo</td>
          <td>Sidebar</td>
        </tr>
      </tbody>
    </table>

    También puede ocultar o mostrar el bloque en páginas específicas. En el caso
    del sitio web del mercado de agricultores no establece ninguna de estas
    opciones de configuración porque quiere mostrar el bloque en todas partes.
    <img src="/images/block-place-configure-block.webp" alt="Block configuration page" width="100%" />

1. Haga clic en _Save block_. Aparece la página _Block layout_. Puede arrastrar
    los tiradores en cruz de los bloques para cambiar su orden dentro de cada
    región. Como alternativa a arrastrar, puede hacer clic en el enlace _Show row
    weights_ situado en la parte superior de la tabla y seleccionar pesos numéricos
    (los bloques con pesos menores o más negativos se mostrarán primero).
1. Compruebe que el bloque Hours and location aparece en la región _Sidebar_ y
    haga clic en _Save blocks_.
    El bloque se ha colocado en la barra lateral de todas las páginas que utilizan
    el tema del núcleo Bartik.
    <img src="/images/block-place-sidebar.webp" alt="Page with a block placed on the Sidebar region" width="100%" />

## Ampliar conocimiento

* Quite el bloque _Powered by Drupal_ de la región _Footer Bottom_ haciendo
clic en _Disable_ o _Remove_ en el botón desplegable _Operations_. Al hacer
clic en _Disable_ podrá volver a activar el bloque fácilmente más adelante con
la misma configuración; si hace clic en _Remove_ y quiere recuperar el bloque,
tendría que seguir de nuevo los pasos de este tema para colocarlo en una
región. Tenga en cuenta que los nombres de los bloques que proporciona el
software del núcleo, como _Powered by Drupal_ y _User login_, se muestran en
inglés en esta página; ver [language-concept](./language-concept.md) para una explicación.
* Coloque el bloque _User login_ en una región.
* Si no ve el efecto de estos cambios en su sitio, puede que tenga que borrar
la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/iWW7Ja5p0hA" title="Placing a Block in a Region" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
