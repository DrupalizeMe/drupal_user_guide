---
title: "Concepto: traducción de la interfaz de usuario, la configuración y el contenido"
description: "Visión general de los idiomas y la traducción en un sitio."
id: "language-concept"
translation_key: "language-concept"
source_locale: "es"
---
## Conocimientos previos { #language-concept }

* [understanding-data](./understanding-data.md)
* [understanding-modules](./understanding-modules.md)
* [planning-data-types](./planning-data-types.md)
## ¿Qué idiomas admite el software?

El idioma base del software que ejecuta su sitio (el software del núcleo, los
módulos y los temas) es el inglés. Sin embargo, con este software puede crear
un sitio cuyo idioma predeterminado no sea el inglés, en cuyo caso cualquiera
que vea el sitio debería ver únicamente ese idioma (suponiendo que el sitio
esté totalmente traducido). También puede usar este software para crear un
sitio multilingüe, con un selector de idioma que los visitantes del sitio
pueden usar para cambiar a su idioma preferido. Necesita tener instalado el
módulo del núcleo Language para poder usar un idioma distinto del inglés en el
sitio.
## ¿Qué se puede traducir en su sitio?

Hay tres tipos de información que puede traducir, cada uno con su propio método
de traducción:

- **Texto de la interfaz de usuario:** Texto incorporado presente en el software del núcleo, los módulos y los temas. Se puede traducir desde el idioma base inglés del software a los idiomas de su sitio. Normalmente, en lugar de tener que traducir este texto usted mismo, puede descargar traducciones. Necesita tener instalado el módulo del núcleo Interface Translation para poder traducir este texto, y el módulo del núcleo Update Manager para descargar traducciones automáticamente.
- **Texto de configuración:** Texto cuya estructura y valores iniciales están definidos por el software del núcleo, los módulos y los temas, pero que usted puede editar. Algunos ejemplos son las etiquetas de los campos de sus tipos de contenido, el texto de cabecera en las vistas, el nombre de su sitio y el contenido de los mensajes de correo automáticos que envía su sitio. Después de crear el texto de configuración en el idioma predeterminado de su sitio, puede traducirlo a otros idiomas. Para la configuración predeterminada que proporcionan el software del núcleo, los módulos y los temas, la traducción se incluye con las descargas de traducciones del texto de la interfaz de usuario. Necesita tener instalado el módulo del núcleo Configuration Translation para poder traducir este texto.
- **Texto y archivos de contenido:** Si su sitio es multilingüe, puede configurar los campos de contenido de su sitio para que sean traducibles. Después de crear contenido en un idioma, puede traducirlo a otros idiomas. Los campos pueden contener información textual o archivos subidos y, para cada campo de cada subtipo de entidad, puede configurarlo como traducible o no traducible. Necesita tener instalado el módulo del núcleo Content Translation para poder traducir este texto.
## ¿Qué información seguirá en inglés en mi sitio?

Aunque el idioma predeterminado de su sitio no sea el inglés, seguirá viendo
texto en inglés en determinadas páginas administrativas que se usan para
gestionar la configuración. La razón es que, cuando edita la configuración,
está editando los valores de configuración base sin traducir; traducir la
configuración es una operación aparte. Por ejemplo, si visita la página de
administración de _Menus_, verá los nombres de los menús en inglés (para los
menús que se crearon al instalar su sitio), y si hace clic en un enlace _Edit
menu_, estará editando el nombre y la descripción en inglés del menú. Para
editar el nombre del menú en otro idioma, necesitaría tener instalado el módulo
del núcleo Configuration Translation y usar el enlace _Translate_ para editar
la información traducida del menú.
## Temas relacionados

* [language-add](./language-add.md)
* [language-content-config](./language-content-config.md)
* [language-content-translate](./language-content-translate.md)
* [language-config-translate](./language-config-translate.md)

*Atribuciones*

Escrito por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
