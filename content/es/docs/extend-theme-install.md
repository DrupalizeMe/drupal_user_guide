---
title: "Descargar e instalar un tema desde _Drupal.org_"
description: "Cómo descargar e instalar un tema desde Drupal.org."
id: "extend-theme-install"
translation_key: "extend-theme-install"
source_locale: "es"
---
## Objetivo { #extend-theme-install }

Descargar e instalar un tema desde _Drupal.org_.
## Conocimientos previos

* [extend-theme-find](./extend-theme-find.md)
* [install-tools](./install-tools.md)
## Requisitos previos del sitio web

Composer debe estar instalado para descargar temas. Si quiere usar Drush, Drush
debe estar instalado. Ver [install-tools](./install-tools.md).
## Pasos

Para instalar un tema contribuido, primero descargue el tema con Composer.
Después instálelo usando la interfaz administrativa o Drush. Si está instalando
un tema personalizado en lugar de un tema contribuido que no está disponible a
través de Composer, omita los pasos de descarga del tema y consulte
[extend-manual-install](./extend-manual-install.md). Después vuelva aquí y siga los pasos para instalar el
tema con la interfaz administrativa o con Drush.
### Descargar el tema contribuido con Composer

1. En la página del proyecto del tema en drupal.org (por ejemplo,
    _https://www.drupal.org/project/honey_), desplácese hasta la sección _Releases_
    al final de la página.
1. Copie el comando de Composer que se proporciona para la versión del tema que
    quiere instalar.
    ![Finding the composer command for a theme](/images/extend-theme-install-download.png)
1. Como alternativa, escriba el siguiente comando (sustituyendo `honey:^1.0` por
    el nombre corto del tema y la versión deseada):
    ```text
    composer require 'drupal/honey:^1.0'
    ```
1. En la línea de comandos, sitúese en el directorio raíz de su proyecto. Pegue
    el comando de Composer y ejecútelo.
1. Debería ver un mensaje indicando que el tema se ha descargado correctamente.
### Instalar el tema con la interfaz administrativa

1. En el menú administrativo _Manage_, vaya a _Appearance_ (_admin/appearance_).
    Aparece la página _Appearance_.
1. Busque el nuevo tema en _Uninstalled themes_ y haga clic en _Install and set
    as default_ para usarlo. A partir de ahora, todas las páginas no
    administrativas del sitio usarán este nuevo tema.
    <img src="/images/extend-theme-install-appearance-page.png" alt="Uninstalled themes on Appearance page" width="286px" />

### Instalar el tema con Drush

1. Para instalar el tema y establecerlo como predeterminado, ejecute los
    siguientes comandos de Drush, pasando el nombre del proyecto (por ejemplo,
    _honey_) como parámetro:
    ```text
    drush theme:enable honey
    drush config:set system.theme default honey
    ```
1. Siga las instrucciones que aparezcan en pantalla.
## Ampliar conocimiento

* En el menú administrativo _Manage_, vaya a _Appearance_ (_admin/appearance_) y
desinstale los temas que no esté usando.
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* Si no ve el efecto de estos cambios en su sitio, puede que tenga que borrar
la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/UFgddj0F_bU" title="Downloading and Installing a Theme from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito y editado por [Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me), y
[Boris Doesborgh](https://www.drupal.org/u/batigolix).

Traducido por [Jesús Manuel García](https://www.drupal.org/u/skuark).
