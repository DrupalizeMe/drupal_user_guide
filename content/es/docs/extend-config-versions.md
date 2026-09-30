---
title: "Sincronizar versiones de configuración"
description: "Cómo sincronizar la configuración entre un sitio de desarrollo y uno en producción usando el módulo del núcleo Configuration Manager."
id: "extend-config-versions"
translation_key: "extend-config-versions"
source_locale: "es"
---
## Objetivo { #extend-config-versions }

Sincronizar la configuración entre un sitio de desarrollo y uno en producción.
## Conocimientos previos

* [understanding-data](./understanding-data.md)
* [install-prepare](./install-prepare.md)
* [install-dev-sites](./install-dev-sites.md)
* [install-dev-making](./install-dev-making.md)
## Requisitos previos del sitio web

* Debe tener una copia de desarrollo de su sitio en producción. Ver
[install-dev-making](./install-dev-making.md).
* El módulo del núcleo Configuration Manager debe estar instalado tanto en el
sitio de desarrollo como en el de producción. Ver [config-install](./config-install.md) para
obtener instrucciones sobre cómo instalar módulos del núcleo.
* Debe haber cambiado la configuración en el sitio de producción o en el de
desarrollo (el _sitio de origen_) y querer sincronizar los cambios con el otro
sitio (el _sitio de destino_). Por ejemplo, puede desarrollar un nuevo tipo de
contenido, campos y vistas en su sitio de desarrollo y, cuando todo funcione
correctamente, desplegar los cambios en el sitio en producción.
* Toda la configuración que no deba sincronizarse entre el sitio de origen y el
de destino debe almacenarse como sobrescrituras de configuración en el archivo
_settings.php_ en lugar de en la base de datos. Ver [install-dev-making](./install-dev-making.md).
## Pasos

1. En el sitio de origen, en el menú administrativo _Manage_, vaya a
    _Configuration_ > _Development_ > _Configuration synchronization_ > _Export_
    (_admin/config/development/configuration/full/export_).
1. Haga clic en _Export_. Su sitio generará un archivo comprimido con toda la
    configuración del sitio. Guarde el archivo en su ordenador local.
1. En el sitio de destino, en el menú administrativo _Manage_, vaya a
    _Configuration_ > _Development_ > _Configuration synchronization_ > _Import_
    (_admin/config/development/configuration/full/import_).
1. Busque el archivo de configuración descargado y haga clic en _Upload_. Su
    archivo de configuración se subirá al sitio de destino y se le redirigirá a la
    página _Synchronize_ de configuración (_admin/config/development/configuration_)
    con un mensaje indicando que sus archivos se han subido.
1. Compruebe que las diferencias que se muestran en la página son las que
    esperaba. Puede que vea elementos de configuración que se han añadido,
    eliminado o modificado; en los elementos modificados, puede hacer clic en _View
    differences_ para ver cuáles son los cambios.
1. Cuando esté conforme, haga clic en _Import all_ para importar los cambios de
    configuración.
## Ampliar conocimiento

* Si los cambios que ha realizado afectan solo a un elemento de configuración
(como una única vista), puede usar la funcionalidad de exportación/importación
de una única configuración para desplegar el cambio entre sitios. Ver
[extend-deploy](./extend-deploy.md).
* Después del paso en el que exporta toda la configuración desde el sitio de
origen, quizá también quiera descomprimir el archivo y confirmarlo (_commit_) en
un sistema de control de versiones, como Git, para hacer un seguimiento de los
cambios en la configuración de su sitio. Ver [extend-git](./extend-git.md).
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/dLUGQk8GKa0" title="Synchronizing Configuration Versions" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Isaura Galafate](https://www.drupal.org/u/isaura).
