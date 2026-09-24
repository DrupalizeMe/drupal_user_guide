---
title: "Actualización de un módulo"
description: "Cómo actualizar un módulo contribuido utilizando Composer y la interfaz administrativa para ejecutar el script de actualizaciones de la base de datos."
id: "security-update-module"
translation_key: "security-update-module"
source_locale: "es"
---
## Objetivo { #security-update-module }

Actualizar un módulo contribuido y ejecutar el script _Database updates_.
## Conocimientos previos

* [security-concept](./security-concept.md)
* [security-cron-concept](./security-cron-concept.md)
## Requisitos previos del sitio web

* Se ha instalado un módulo contribuido y hay una actualización disponible para
él. Ver [extend-module-install](./extend-module-install.md) y [security-announce](./security-announce.md).
* Si su sitio está en producción, debería probar este proceso en un entorno de
desarrollo antes de ejecutarlo en su sitio de producción. Ver
[install-dev-making](./install-dev-making.md).
* Ha creado una copia de seguridad completa del sitio. Ver [prevent-backups](./prevent-backups.md).
* Si quiere usar la interfaz de usuario para comprobar si hay actualizaciones,
debe estar instalado el módulo del núcleo Update Manager. Ver [config-install](./config-install.md)
para obtener instrucciones sobre la instalación de módulos del núcleo.
## Pasos

Antes de empezar, compruebe si hay instrucciones de actualización específicas
del módulo. Lea y comprenda todos los requisitos específicos del módulo antes
de continuar con las actualizaciones. Para encontrar las instrucciones,
consulte el enlace _Read Documentation_ de la página del proyecto del módulo.

Para ver más instrucciones, después de descargar los archivos actualizados,
busque los archivos _README.txt_, _INSTALL.txt_ y _UPGRADE.txt_ que vienen con
el módulo. Además, revise las notas de la versión en la página del proyecto
haciendo clic en el número de versión que está descargando.

![Release notes link](/images/security-update-module-release-notes.webp)

Actualizar un módulo requiere primero poner su sitio en modo de mantenimiento,
después obtener los nuevos archivos de código y aplicar las actualizaciones de
base de datos necesarias y, por último, sacar el sitio del modo de
mantenimiento.

Puede actualizar el código de un módulo contribuido utilizando Composer. Si
está actualizando un módulo personalizado en lugar de un módulo contribuido,
obtenga los nuevos archivos del módulo y después continúe con las instrucciones
para ejecutar las actualizaciones de base de datos mediante la interfaz
administrativa que se indican más abajo.

Esto asume que está utilizando Composer para gestionar los archivos de su
sitio; ver [install-composer](./install-composer.md).
### Actualizar un módulo contribuido con Composer

1. Ponga su sitio en modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. En el menú administrativo _Manage_, vaya a _Reports_ >
    _Available updates_ > _Update_ (_admin/reports/updates_).
1. Busque y marque el módulo en la lista. Haga clic en _Download these updates_
    para el módulo.
    <img src="/images/security-update-module-updates.webp" alt="Available updates" width="100%" />
1. Determine el nombre corto del proyecto que quiere actualizar. Para los
    módulos y temas contribuidos, es la última parte de la URL de la página del
    proyecto; por ejemplo, el módulo Geofield, en
    https://www.drupal.org/project/geofield, tiene el nombre corto `geofield`.
1. Si quiere actualizar a la última versión estable, utilice el siguiente
    comando, sustituyendo `geofield` por el nombre corto del proyecto que se va a
    actualizar:
    ```text
    composer update drupal/geofield --with-dependencies
    ```

    Para saber cómo descargar versiones concretas, ver [install-composer](./install-composer.md).

1. Después de obtener los nuevos archivos del módulo, ejecute las
    actualizaciones de base de datos escribiendo la URL _example.com/update.php_ en
    su navegador.
1. Haga clic en _Continue_ para ejecutar las actualizaciones. Se ejecutarán los
    scripts de actualización de la base de datos.
1. Haga clic en _Administration pages_ para volver a la sección de
    administración de su sitio.
1. Saque su sitio del modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. Borre la caché de Drupal (consulte [prevent-cache-clear](./prevent-cache-clear.md)).
## Ampliar conocimiento

* Revise el registro del sitio (consulte [prevent-log](./prevent-log.md)) una vez completadas
las actualizaciones para comprobar si hay errores.
* [security-update-theme](./security-update-theme.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/wxWW-lPQ_Pc" title="Updating a Module" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Adaptado por [Boris Doesborgh](https://www.drupal.org/u/batigolix) y
[Sarah German](https://www.drupal.org/u/hey_germano) en
[Advomatic](https://www.advomatic.com), y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en [Drupalize.Me](https://drupalize.me)
de ["Update modules"](https://www.drupal.org/docs/7/update/updating-modules),
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
