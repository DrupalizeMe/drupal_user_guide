---
title: "Actualizar el software del núcleo"
description: "Cómo actualizar el software del núcleo con la interfaz administrativa o con Drush."
id: "security-update-core"
translation_key: "security-update-core"
source_locale: "es"
---
## Objetivo { #security-update-core }

Actualizar el software del núcleo, ya sea a través de la interfaz administrativa
o usando Drush.
## Requisitos previos del sitio web

* Si quiere usar Drush, Drush debe estar instalado. Ver [install-tools](./install-tools.md).
* Si su sitio está en producción, debería probar este proceso en un entorno de
desarrollo antes de ejecutarlo en su sitio de producción. Ver
[install-dev-making](./install-dev-making.md).
## Pasos

1. Haga una copia de seguridad completa de su sitio. Consulte [prevent-backups](./prevent-backups.md).
1. Abra _settings.php_ (_/sites/default/settings.php_) en cualquier editor de
    texto plano. Busque la línea con la variable
    _$settings['update_free_access']_. De forma predeterminada, está establecida a
    "FALSE" por razones de seguridad. Cambie el valor a "TRUE":
    ```text
    $settings['update_free_access'] = TRUE;
    ```
1. Desactive cualquier técnica de caché (memcache, varnish, etc.) que pueda estar
    usando su aplicación.
1. Ponga su sitio en modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. Si está usando Composer para gestionar las dependencias, sáltese los seis
    pasos siguientes y consulte [install-composer](./install-composer.md) para obtener instrucciones
    sobre cómo descargar los archivos actualizados. Continúe con el paso de
    _update.php_.
1. Descargue el archivo comprimido tar.gz o zip de la última versión del núcleo
    de Drupal para la rama que esté usando actualmente (como 8.x o 9.x) desde
    [_Drupal.org_ Drupal Core Downloads](https://www.drupal.org/project/drupal). Ver
    [install-prepare](./install-prepare.md) para más detalles sobre cómo encontrar la última versión.
1. Suba el archivo comprimido a su servidor de alojamiento web.
1. Extraiga el archivo comprimido en un directorio temporal de su servidor (debe
    estar fuera del directorio donde se aloja el sitio). El administrador de
    archivos del panel de control de su alojamiento debería ofrecer una forma de
    extraer los archivos. O, si tiene acceso por terminal a su servidor de
    alojamiento (con Linux), puede usar un comando como:
    ```text
    tar -xzf drupal-8.3.2.tar.gz
    ```
1. En el directorio de alojamiento de su sitio, elimine los directorios _core_ y
    _vendor_, y todos los archivos que no estén en un subdirectorio, incluidos
    _.htaccess_, _composer.json_ y _autoload.php_. No elimine los archivos
    personalizados o modificados, porque podría acabar perdiendo la funcionalidad
    personalizada que contienen.
1. Copie los directorios _core_ y _vendor_ y los archivos no
    personalizados/no modificados que eliminó en el paso anterior desde el
    directorio temporal al directorio de su sitio.
1. Ejecute el script _update.php_ mediante una de estas opciones:
    * Visite _http://www.example.com/update.php_ en su navegador (donde
      _www.example.com_ es la URL de su sitio). Haga clic en _Continue_ en la
      primera pantalla para ejecutar las actualizaciones y completar el script
      correctamente.
    * Ejecute el siguiente comando de Drush: `drush updatedb`
1. Si obtiene algún error o aviso, vuelva a ejecutar el script _update.php_ hasta
    que todas las actualizaciones se hayan completado correctamente.
1. Abra _settings.php_ (_/sites/default/settings.php_) en un editor de texto.
    Busque la línea con la variable _$settings['update_free_access']_ y cámbiela a
    "FALSE":
    ```text
    $settings['update_free_access'] = FALSE;
    ```
1. Haga clic en _Administration pages_ para volver a la sección de administración
    de su sitio.
1. Saque su sitio del modo de mantenimiento. Ver [extend-maintenance](./extend-maintenance.md).
1. Borre la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
1. Vuelva a activar cualquier técnica de caché que desactivara en el paso 3.
1. Debería tener funcionando la versión actualizada. Puede comprobar la versión
    actual de su software consultando el _Status report_ (ver [prevent-status](./prevent-status.md)).
## Ampliar conocimiento

* [install-tools](./install-tools.md)
* [install-dev-making](./install-dev-making.md)
* [prevent-backups](./prevent-backups.md)
## Conceptos relacionados

[prevent-status](./prevent-status.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/DqYqxp4xByk" title="Updating the Core Software" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* ["Drupal Core Downloads" page on _Drupal.org_](https://www.drupal.org/project/drupal)
* ["Registry Rebuild" page on _Drupal.org_](https://www.drupal.org/project/registry_rebuild)
* The file _/core/UPDATE.txt_ within your installation.

*Atribuciones*

Escrito y editado por [Surendra Mohan](https://www.drupal.org/u/surendramohan),
[Boris Doesborgh](https://www.drupal.org/u/batigolix), y
[Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com).

Traducido por [Jesús Manuel García](https://www.drupal.org/u/skuark).
