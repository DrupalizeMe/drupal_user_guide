---
title: "Actualización de un tema"
description: "Cómo actualizar un tema contribuido utilizando Composer y la interfaz administrativa para ejecutar el script de actualizaciones de la base de datos."
id: "security-update-theme"
translation_key: "security-update-theme"
source_locale: "es"
---
## Objetivo { #security-update-theme }

Actualizar un tema contribuido en su sitio y ejecutar el script _Database
Updates_.
## Conocimientos previos

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Requisitos previos del sitio web

* Se ha instalado un tema contribuido y hay una actualización disponible para
él. Ver [extend-theme-install](./extend-theme-install.md) y [security-announce](./security-announce.md).
* Si su sitio está en producción, debería probar este proceso en un entorno de
desarrollo antes de ejecutarlo en su sitio de producción. Ver
[install-dev-making](./install-dev-making.md).
* Ha creado una copia de seguridad completa del sitio. Ver [prevent-backups](./prevent-backups.md).
* Si desea utilizar la interfaz de usuario para comprobar si hay
actualizaciones, debe estar instalado el módulo Update Manager del núcleo. Ver
[config-install](./config-install.md) para obtener instrucciones sobre la instalación de módulos
del núcleo.
## Pasos

Actualizar un tema contribuido requiere primero poner su sitio en modo de
mantenimiento, después obtener los nuevos archivos de código y aplicar las
actualizaciones de base de datos necesarias y, por último, sacar el sitio del
modo de mantenimiento.

Puede actualizar el código de un tema contribuido utilizando Composer. Si está
actualizando un tema personalizado en lugar de un tema contribuido, obtenga los
nuevos archivos del tema y después continúe con las instrucciones para ejecutar
las actualizaciones de base de datos mediante la interfaz administrativa que se
indican más abajo.

Esto asume que está utilizando Composer para gestionar los archivos de su
sitio; ver [install-composer](./install-composer.md).
### Actualizar un tema contribuido con Composer

1. Ponga su sitio en modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. En el menú administrativo _Manage_, vaya a _Reports_ >
    _Available updates_ > _Update_ (_admin/reports/updates_).
1. Busque en la lista los temas que necesiten actualizarse.
    <img src="/images/security-update-theme-updates.webp" alt="Available updates" width="100%" />
1. Determine el nombre corto del proyecto que quiere actualizar. Para los
    módulos y temas contribuidos, es la última parte de la URL de la página del
    proyecto; por ejemplo, el tema Honey, en https://www.drupal.org/project/honey,
    tiene el nombre corto `honey`.
1. Si quiere actualizar a la última versión estable, utilice el siguiente
    comando, sustituyendo `honey` por el nombre corto del proyecto que se va a
    actualizar:
    ```text
    composer update drupal/honey --with-dependencies
    ```

    Para saber cómo descargar versiones concretas, ver [install-composer](./install-composer.md).

1. Después de obtener los nuevos archivos del tema, ejecute las actualizaciones
    de base de datos escribiendo la URL _example.com/update.php_ en su navegador.
1. Haga clic en _Continue_ para ejecutar las actualizaciones. Se ejecutarán los
    scripts de actualización de la base de datos.
1. Haga clic en _Administration pages_ para volver a la sección de
    administración de su sitio.
1. Saque su sitio del modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. Borre la caché de Drupal (consulte [prevent-cache-clear](./prevent-cache-clear.md)).
## Ampliar conocimiento

* Revise el registro del sitio, ver [prevent-log](./prevent-log.md), una vez completadas las
actualizaciones para comprobar si hay errores.
* [security-update-module](./security-update-module.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/elVnWoaQMkk" title="Updating a Theme" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito por [Boris Doesborg](https://www.drupal.org/u/batigolix) y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en [Drupalize.Me](https://drupalize.me).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
