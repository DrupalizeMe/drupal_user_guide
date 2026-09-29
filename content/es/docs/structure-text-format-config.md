---
title: "Configuración de formatos de texto y editores"
description: "Cómo hacer un cambio en un formato de texto y en la configuración de su editor."
id: "structure-text-format-config"
translation_key: "structure-text-format-config"
source_locale: "es"
---
## Objetivo { #structure-text-format-config }

Añadir una etiqueta de regla horizontal al formato de texto _Basic HTML_ y un
botón correspondiente a la configuración de su editor.
## Conocimientos previos

[structure-text-formats](./structure-text-formats.md)
## Requisitos previos del sitio web

* Los módulos del núcleo Filter, Editor y CKEditor deben estar instalados. Se
instalan en su sitio cuando instala con el perfil de instalación Standard del
núcleo.
* El formato de texto _Basic HTML_ debe existir. Se crea en su sitio cuando
instala con el perfil de instalación Standard del núcleo.
## Pasos

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Content
    authoring_ > _Text formats and editors_ (_admin/config/content/formats_).
    Aparece la página _Text formats and editors_. Tenga en cuenta que los nombres
    de los formatos de texto que venían con su perfil de instalación se muestran en
    inglés en esta página; ver [language-concept](./language-concept.md) para una explicación.
1. Haga clic en _Configure_ en el formato de texto _Basic HTML_. Aparece la
    página _Basic HTML_.
1. Observe que _CKEditor_ está seleccionado en el campo _Text editor_. Esto le
    permite configurar la barra de herramientas del editor.
1. Arrastre el botón _horizontal line_ desde _Available buttons_ a la _Active
    toolbar_. Los elementos de la barra de herramientas se pueden agrupar
    visualmente mediante un separador vertical. Como alternativa a arrastrar, puede
    tabular para seleccionar botones y moverlos con las teclas de flecha del
    teclado.
    <img src="/images/structure-text-format-config-editor-config.png" alt="Configuring the editor" width="100%" />
1. Observe que puede cambiar el _Filter processing order_.
1. En _Filter settings_ > _Limit allowed HTML tags and correct faulty HTML_, en
    el campo _Allowed HTML tags_, compruebe que `<hr>` está presente (al añadir su
    botón del editor se actualizan automáticamente las etiquetas permitidas).
    <img src="/images/structure-text-format-config-allowed-html.png" alt="Configuring the HTML tags" width="100%" />
1. Haga clic en _Save configuration_. Volverá a la página _Text formats and
    editors_. Se mostrará un mensaje indicando que el formato de texto se ha
    actualizado.
    ![Confirmation message for text format configuration](/images/structure-text-format-config-summary.png)
## Ampliar conocimiento

Si no ve el efecto de estos cambios en su sitio, puede que tenga que borrar la
caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/T9RD6PTxe9U" title="Configuring Text Formats and Editors" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix) y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
