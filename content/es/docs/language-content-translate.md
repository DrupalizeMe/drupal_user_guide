---
title: "Traducir contenido"
description: "Cómo traducir una página a otro idioma."
id: "language-content-translate"
translation_key: "language-content-translate"
source_locale: "es"
---
## Objetivo { #language-content-translate }

Traducir la página de inicio al español.
## Conocimientos previos

[language-concept](./language-concept.md)
## Requisitos previos del sitio web

* El contenido Home debe existir. Ver [content-create](./content-create.md).
* El módulo del núcleo Content Translation debe estar instalado y su sitio debe
tener al menos dos idiomas. Ver [language-add](./language-add.md).
* El tipo de contenido _Basic page_ debe estar configurado como traducible. Ver
[language-content-config](./language-content-config.md).
## Pasos

1. En el menú administrativo _Manage_, vaya a _Content_ (_admin/content_).
1. Localice la página de inicio. Puede buscarla escribiendo "Home" en el campo
    de título.
1. Seleccione _Translate_ en el botón desplegable de la fila del elemento de
    contenido Home. Aparece la página _Translations of Home_.
1. Haga clic en _Add_ en la fila _Spanish_.
    <img src="/images/language-content-translate-add.webp" alt="Adding a content translation" width="100%" />
1. Tenga en cuenta que la interfaz de usuario ha cambiado al español. Para
    volver a cambiarla al inglés, elimine la primera aparición de _es_ en la URL
    del navegador. Por ejemplo, si su URL se parece a
    _example.com/es/node/5/translations/add/en/es_, elimine el _es_ que aparece
    inmediatamente después de _example.com_.
1. Rellene los campos como se muestra a continuación.
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
          <td>Title</td>
          <td>Título traducido de la página</td>
          <td>Página principal</td>
        </tr>
        <tr>
          <td>Body</td>
          <td>Cuerpo traducido de la página</td>
          <td></td>
        </tr>
        <tr>
          <td>URL alias > URL alias</td>
          <td>Dirección traducida de la página web</td>
          <td>pagina-principal</td>
        </tr>
      </tbody>
    </table>
1. Haga clic en _Save (this translation)_.
1. Vaya a la página de inicio de su sitio para ver la página recién traducida.
## Ampliar conocimiento

* Siga los pasos anteriores para traducir más contenido de su sitio.
* [language-config-translate](./language-config-translate.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/TOalcUYD5zM" title="Translating Content" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito por [Boris Doesborg](https://www.drupal.org/u/batigolix).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
