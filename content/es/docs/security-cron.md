---
title: "Configuración de las tareas de mantenimiento de Cron"
description: "Cómo ejecutar las tareas de mantenimiento de cron mediante el módulo del núcleo Automated Cron, o ejecutándolas desde fuera del sitio."
id: "security-cron"
translation_key: "security-cron"
source_locale: "es"
---
## Objetivo { #security-cron }

Comprobar si las tareas de mantenimiento de cron se ejecutan con regularidad y,
si no, instalar el módulo del núcleo Automated Cron o ejecutar las tareas de
mantenimiento de cron desde fuera del sitio web.
## Conocimientos previos

[security-cron-concept](./security-cron-concept.md)
## Pasos

1. Revise el _Status report_ (ver [prevent-status](./prevent-status.md)) para ver cuándo se
    ejecutaron por última vez las tareas de mantenimiento de cron.
    Si instaló el sitio web utilizando el perfil de instalación Standard del núcleo
    (o similar), las tareas de mantenimiento de cron podrían estar ejecutándose ya
    a través del módulo del núcleo Automated Cron. De forma predeterminada, estas
    tareas se ejecutan cada tres horas aproximadamente.
1. Elija si ejecutar las tareas de mantenimiento de cron mediante el módulo del
    núcleo Automated Cron o por otros medios. El módulo del núcleo Automated Cron
    podría no ser adecuado para algunos sitios web porque:
    * Cada vez que alguien accede a una página del sitio, el módulo comprueba
      cuánto tiempo ha pasado desde la última ejecución de las tareas de
      mantenimiento de cron y luego las ejecuta si es necesario. Si nadie visita el
      sitio web durante mucho tiempo, las tareas de mantenimiento de cron no se
      ejecutarán.
    * Las tareas de mantenimiento de cron se ejecutan después de que se haya
      generado la página. Esto significa que hay menos tiempo para ejecutar las
      tareas antes de que se alcancen los distintos tiempos de espera del servidor
      (por ejemplo, el tiempo de espera de ejecución de PHP). Si esto ocurre, los
      registros (ver [prevent-log](./prevent-log.md)) mostrarán mensajes de error indicando que
      cron no puede completarse.
    * Hay un pequeño coste de [escalabilidad](https://en.wikipedia.org/wiki/Scalability)
      asociado al módulo del núcleo Automated Cron. Esto se debe a que uno de los
      procesos del servidor web queda ocupado (y no puede servir otras páginas web)
      hasta que las tareas de mantenimiento de cron terminan.
1. Si quiere usar el módulo del núcleo Automated Cron, primero asegúrese de que
    está instalado (se instala con el perfil de instalación Standard del núcleo;
    ver [config-install](./config-install.md) si no lo está).
    A continuación, configure el módulo para controlar con qué frecuencia se
    ejecutan las tareas de mantenimiento de cron. En el menú administrativo
    _Manage_, vaya a _Configuration_ > _System_ > _Cron_
    (_admin/config/system/cron_). Seleccione el intervalo deseado en el campo _Run
    cron every_, dentro de _Cron settings_, y haga clic en _Save configuration_.
    ![Configure the core Automated Cron module](/images/security-cron.png)
1. Si quiere ejecutar las tareas de mantenimiento de cron desde fuera del sitio
    web, desinstale el módulo del núcleo Automated Cron (ver [config-uninstall](./config-uninstall.md)).
    A continuación, busque la URL de cron. Esta URL se muestra en el _Status
    report_ (ver [prevent-status](./prevent-status.md)) y en la página de administración de _Cron_
    (ver el paso anterior). La URL tiene este aspecto:
    _http://www.example.com/cron/0MgWtfB33FYbbQ5UAC3L0LL3RC0PT3RNUBZILLA0Nf1Re_
    Siempre que se visite esta URL, se ejecutarán las tareas de mantenimiento de
    cron. Configure uno de los siguientes programadores para acceder a esta URL con
    regularidad:
    * [The Cron daemon](https://www.drupal.org/docs/7/setting-up-cron/configuring-cron-jobs-using-the-cron-command) (Linux, OS X, Solaris, BSD)
    * [Scheduled Tasks](https://www.drupal.org/docs/7/setting-up-cron-for-drupal/configuring-cron-jobs-with-windows) (Windows)
    * Un proveedor de cron SaaS (software as a service)
    * Un gestor de cron proporcionado por su proveedor de alojamiento web (ver la
      documentación que facilite su proveedor)
## Conceptos relacionados

[security-concept](./security-concept.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/ts4g1jTEAt4" title="Configuring Cron Maintenance Tasks" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* [Drush page "Running Drupal cron tasks from Drush"](https://www.drush.org/latest/cron/)
* [_Drupal.org_ community documentation page "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Atribuciones*

Escrito y editado por [Dave Hansen-Lange](https://www.drupal.org/u/dalin) en
[Advomatic](https://www.advomatic.com/),
[Boris Doesborg](https://www.drupal.org/u/batigolix),
y [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
