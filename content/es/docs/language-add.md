---
title: "Añadir un idioma"
description: "Cómo añadir un idioma, instalar los módulos necesarios y activar el bloque _Language switcher_."
id: "language-add"
translation_key: "language-add"
source_locale: "es"
---
## Objetivo { #language-add }

Añadir uno o varios idiomas a su sitio y definir cuál se usa de forma
predeterminada.
## Conocimientos previos

[language-concept](./language-concept.md)
## Pasos

1. Instale los cuatro módulos multilingües del núcleo (Language, Interface
    Translation, Content Translation y Configuration Translation) siguiendo los
    pasos de [config-install](./config-install.md).
1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Region and
    language_ > _Languages_ (_admin/config/regional/language_).
1. Haga clic en _Add language_.
1. Seleccione _Spanish_ (o el idioma que prefiera) en la lista de selección
    _Language name_. Haga clic en _Add language_. Después de esperar a que
    terminen de descargarse las traducciones, volverá a la página _Languages_, con
    un mensaje de confirmación y el nuevo idioma en la lista.
    <img src="/images/language-add-list.webp" alt="List of available languages in the website" width="100%" />
1. Siga los pasos de [block-place](./block-place.md) para colocar el bloque _Language switcher_
    en la región _Sidebar second_. Esto permitirá a los visitantes del sitio
    cambiar de idioma, una vez que el sitio se haya traducido.
## Ampliar conocimiento

* [language-content-config](./language-content-config.md)
* [language-content-translate](./language-content-translate.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/8Yu0G4gJ0f4" title="Adding a Language" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

[_Drupal.org_ community documentation page "Multilingual guide"](https://www.drupal.org/docs/multilingual-guide)

*Atribuciones*

Escrito y editado por [Leila Tite](https://www.drupal.org/u/yrvyn),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) y
[Boris Doesborg](https://www.drupal.org/u/batigolix).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
