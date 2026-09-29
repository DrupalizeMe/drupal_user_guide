---
title: "Descargar e instalar un módulo desde _Drupal.org_"
description: "Cómo descargar e instalar un módulo desde Drupal.org."
id: "extend-module-install"
translation_key: "extend-module-install"
source_locale: "es"
---
## Objetivo { #extend-module-install }

Descargar e instalar el
[módulo contribuido Admin Toolbar](https://www.drupal.org/project/admin_toolbar),
que le permite navegar fácilmente por la sección de administración del sitio
web.
## Conocimientos previos

* [understanding-modules](./understanding-modules.md)
* [extend-module-find](./extend-module-find.md)
* [install-tools](./install-tools.md)
## Requisitos previos del sitio web

Composer debe estar instalado para descargar módulos. Si quiere usar Drush,
Drush debe estar instalado. Ver [install-tools](./install-tools.md).
## Pasos

Para instalar un módulo contribuido, primero descargue el módulo con Composer.
Después instálelo usando la interfaz administrativa o Drush. Si está instalando
un módulo personalizado en lugar de un módulo contribuido que no está
disponible a través de Composer, omita los pasos de descarga del módulo y
consulte [extend-manual-install](./extend-manual-install.md). Después vuelva aquí y siga los pasos para
instalar el módulo con la interfaz administrativa o con Drush.
### Descargar el módulo contribuido con Composer

1. En la página del proyecto de _Admin toolbar_ en drupal.org
    (_https://www.drupal.org/project/admin_toolbar_), desplácese hasta la sección
    _Releases_ al final de la página.
1. Copie el comando de Composer que se proporciona para la versión del módulo
    que quiere instalar.
    ![Finding a module's composer install command](/images/extend-module-install-download.png)
1. Como alternativa, escriba el siguiente comando (sustituyendo
    `admin_toolbar:^3.5` por el nombre corto del módulo y la versión deseada):
    ```text
    composer require 'drupal/admin_toolbar:^3.5'
    ```
1. En la línea de comandos, sitúese en el directorio raíz de su proyecto. Pegue
    el comando de Composer y ejecútelo.
1. Debería ver un mensaje indicando que el módulo se ha descargado
    correctamente.
### Instalar el módulo con la interfaz administrativa

1. En el menú administrativo _Manage_, vaya a _Extend_ (_admin/modules_). Aparece
    la página _Extend_.
1. Busque el módulo _Admin toolbar_ y márquelo.
    ![Installing Admin Toolbar module](/images/extend-module-install-admin-toolbar-do.png)
1. Haga clic en _Install_ para activar el nuevo módulo.
### Instalar el módulo con Drush

1. Ejecute el siguiente comando de Drush, pasando el nombre del proyecto (por
    ejemplo, `admin_toolbar`) como parámetro:
    ```text
    drush pm:enable admin_toolbar
    ```
1. Siga las instrucciones que aparezcan en pantalla.
## Ampliar conocimiento

* Compruebe que el
[módulo contribuido Admin Toolbar](https://www.drupal.org/project/admin_toolbar)
funciona navegando por el menú de la sección de administración.
* Instale y configure el
[módulo contribuido Pathauto](https://www.drupal.org/project/pathauto) para que
las páginas de contenido de su sitio tengan URLs limpias de forma
predeterminada. Ver [content-paths](./content-paths.md) para más información sobre las URLs.
* Si no ve el efecto de estos cambios en su sitio, puede que tenga que borrar
la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/vx9nWJE1Kbk" title="Downloading and Installing a Module from Drupal.org" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* [_Drupal.org_ community documentation page "Installing Drupal modules"](https://www.drupal.org/docs/extending-drupal/installing-drupal-modules)
* ["Download and Extend" page on _Drupal.org_](https://www.drupal.org/download)
* [Admin Toolbar module on _Drupal.org_](https://www.drupal.org/project/admin_toolbar)

*Atribuciones*

Escrito y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me), y
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Jesús Manuel García](https://www.drupal.org/u/skuark).
