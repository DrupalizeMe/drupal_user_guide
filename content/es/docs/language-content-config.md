---
title: "Configuración de la traducción de contenido"
description: "Cómo configurar los elementos de contenido para que sean traducibles."
id: "language-content-config"
translation_key: "language-content-config"
source_locale: "es"
---
## Objetivo { #language-content-config }

Hacer traducibles los tipos de entidad _Custom block_, _Custom menu link_ y
_Content_. Seleccionar subtipos concretos y definir qué campos de estos se
pueden traducir.
## Conocimientos previos

* [planning-data-types](./planning-data-types.md)
* [language-concept](./language-concept.md)
## Requisitos previos del sitio web

El módulo del núcleo Content Translation debe estar instalado y su sitio debe
tener al menos dos idiomas. Ver [language-add](./language-add.md).
## Pasos

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Regional
    and language_ > _Content language and translation_
    (_admin/config/regional/content-language_).
1. En _Custom language settings_, marque _Content_, _Content block_ y _Custom
    menu link_ para hacer traducibles estos tipos de entidad.
    <img src="/images/language-content-config_custom.png" alt="Custom language settings checklist" width="193px" />
1. Aparecen opciones de configuración para _Content_, _Content block_ y _Custom
    menu link_. Elija los subtipos que quiere traducir para cada tipo de entidad.
    Marque _Basic page_ para _Content_, _Basic block_ para _Content block_ y
    _Custom menu link_ para _Custom menu link_.
1. Compruebe la configuración de los tipos de entidad como se muestra a
    continuación:
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
          <td>Default language</td>
          <td>El idioma predeterminado para el subtipo de entidad</td>
          <td>Site's default language (English)</td>
        </tr>
        <tr>
          <td>Show language selector on create and edit pages</td>
          <td>Si se debe mostrar o no el selector de idioma al editar y crear contenido</td>
          <td>Marcado</td>
        </tr>
      </tbody>
    </table>

    ![Default language and translatability for content types](/images/language-content-config_content.png)

1. Elija los campos que deben ser traducibles para _Basic page_ como se muestra
    en la tabla siguiente. Si un campo no depende de la traducción, déjelo sin
    marcar.
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
          <td>El título del contenido</td>
          <td>Marcado</td>
        </tr>
        <tr>
          <td>Authored by</td>
          <td>El autor</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>Published</td>
          <td>Si el contenido se ha publicado o no</td>
          <td>Marcado</td>
        </tr>
        <tr>
          <td>Authored on</td>
          <td>Fecha de publicación</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>Changed</td>
          <td>Fecha de la última actualización</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>Promoted to front page</td>
          <td>Si el contenido se incluirá en algunas vistas de contenido</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>Sticky at top of lists</td>
          <td>Si el contenido se mostrará primero en algunas vistas de contenido</td>
          <td>Sin marcar</td>
        </tr>
        <tr>
          <td>URL alias</td>
          <td>URL más amigable para el contenido</td>
          <td>Marcado</td>
        </tr>
        <tr>
          <td>Body</td>
          <td>El contenido principal de la página</td>
          <td>Marcado</td>
        </tr>
      </tbody>
    </table>

    ![Translatable content entity subtypes' fields checklist](/images/language-content-config_basic_page.png)

1. Del mismo modo, marque las casillas correspondientes a los campos traducibles
    que pertenecen a _Basic block_ y _Custom menu link_.
1. Haga clic en _Save configuration_.
## Ampliar conocimiento

* [language-config-translate](./language-config-translate.md)
* [language-content-translate](./language-content-translate.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/b_w904_pcTY" title="Configuring Content Translation" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* [Blog post "Multilingual Drupal 8 tidbits, part 5"](http://hojtsy.hu/blog/2013-jun-21/drupal-8-multilingual-tidbits-5-almost-limitless-language-assignment)
* [Blog post "Multilingual Drupal 8 tidbits, part 17"](http://hojtsy.hu/blog/2015-jan-27/drupal-8-multilingual-tidbits-17-content-translation-basics)

*Atribuciones*

Escrito y editado por [Laura Vass](https://www.drupal.org/u/lolk) en
[Pronovix](https://pronovix.com/),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com),
y [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
