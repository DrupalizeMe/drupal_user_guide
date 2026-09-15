---
title: "Habilitar y deshabilitar el modo de mantenimiento"
description: "Cómo habilitar el modo de mantenimiento para configurar un mensaje de \"Sitio en mantenimiento\" y cómo deshabilitarlo."
id: "extend-maintenance"
translation_key: "extend-maintenance"
source_locale: "es"
---
## Objetivo { #extend-maintenance }

Poner su sitio en modo de mantenimiento para permitir que los usuarios con los
permisos adecuados usen el sitio, mientras que a los usuarios sin ese permiso
se les muestra un mensaje de que el sitio está en mantenimiento.
## Conocimientos previos

[security-concept](./security-concept.md)
## Requisitos previos del sitio web

Si quiere usar Drush para habilitar o deshabilitar el modo de mantenimiento,
Drush debe estar instalado. Ver [install-tools](./install-tools.md).
## Pasos

Puede usar la interfaz administrativa o Drush para habilitar o deshabilitar el
modo de mantenimiento.
### Habilitar el modo de mantenimiento con la interfaz administrativa

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Development_ >
    _Maintenance mode_ (_admin/config/development/maintenance_). Aparece la página
    _Maintenance mode_.
1. Rellene los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Put site into maintenance mode</td>
          <td>Habilitar el modo de mantenimiento</td>
          <td></td>
        </tr>
        <tr>
          <td>Message to display when in maintenance mode</td>
          <td>La información que se muestra a los visitantes del sitio web cuando el modo está habilitado. En el mensaje se pueden usar variables como @site</td>
          <td>@site is currently under maintenance but should be back shortly. Thank you for your patience.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Haga clic en _Save configuration_.
1. Compruebe que el sitio está en modo de mantenimiento accediendo a él desde
    otro navegador en el que no haya iniciado sesión. Si no puede comprobarlo,
    intente borrar la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-enabled.png" alt="Maintenance mode enabled" width="100%" />

### Deshabilitar el modo de mantenimiento con la interfaz administrativa

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _Development_ >
    _Maintenance mode_ (_admin/config/development/maintenance_). Aparece la página
    _Maintenance mode_.
1. Rellene los campos como se muestra a continuación.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Put site into maintenance mode</td>
          <td>Deshabilitar el modo de mantenimiento</td>
          <td></td>
        </tr>
        <tr>
          <td>Message to display when in maintenance mode</td>
          <td>No se necesita ningún mensaje al deshabilitarlo. Puede dejar el campo en blanco.</td>
          <td></td>
        </tr>
      </tbody>
    </table>
1. Haga clic en _Save configuration_.
1. Compruebe que el sitio ya no está en modo de mantenimiento accediendo a él
    desde otro navegador en el que no haya iniciado sesión. Si no puede
    comprobarlo, intente borrar la caché. Ver [prevent-cache-clear](./prevent-cache-clear.md).
    <img src="/images/extend-maintenance-mode-disabled.png" alt="Maintenance mode disabled" width="100%" />

### Habilitar o deshabilitar el modo de mantenimiento con Drush

1. Siga los pasos de la interfaz de usuario anteriores para editar el mensaje de
    mantenimiento del sitio, si lo desea.
1. Ejecute los siguientes comandos de Drush para habilitar el modo de
    mantenimiento y borrar la caché:
    ```text
    drush config:set system.maintenance message "Optional message" -y
    drush state:set system.maintenance_mode 1 --input-format=integer
    drush cache:rebuild
    ```
1. Ejecute los siguientes comandos de Drush para deshabilitar el modo de
    mantenimiento y borrar la caché:
    ```text
    drush state:set system.maintenance_mode 0 --input-format=integer
    drush cache:rebuild
    ```
1. Después de ejecutar cualquiera de los dos conjuntos de comandos, compruebe si
    su sitio está dentro o fuera del modo de mantenimiento visitándolo en un
    navegador en el que no haya iniciado sesión.
## Ampliar conocimiento

* [security-update-core](./security-update-core.md)
* [security-update-theme](./security-update-theme.md)
* [security-update-module](./security-update-module.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IQbqQs5h03Q" title="Enabling and Disabling Maintenance Mode" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com) y
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
