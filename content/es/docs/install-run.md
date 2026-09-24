---
title: "Ejecución del instalador interactivo"
description: "Cómo usar el instalador interactivo para instalar el software del núcleo."
id: "install-run"
translation_key: "install-run"
source_locale: "es"
---
## Objetivo { #install-run }

Instalar el software del núcleo y crear la cuenta de administrador ejecutando
el instalador incluido.
## Requisitos previos del sitio web

[install-prepare](./install-prepare.md)

Tenga en cuenta que si siguió las instrucciones de DDEV, el
software del núcleo ya se instaló. Si quiere volver a instalarlo, puede
ejecutar el comando `ddev drush sql:drop` y después seguir las instrucciones de
abajo.
## Pasos

1. Si está usando una instalación de un clic de un proveedor de alojamiento o un
    sitio de demostración, lo más probable es que vea algunas o todas las pantallas
    siguientes como parte del proceso de instalación. Si subió los archivos del
    núcleo manualmente o con Composer, para iniciar el instalador abra un navegador
    y visite la URL que configuró para su alojamiento.
1. Seleccione un idioma en la primera página del instalador; por ejemplo,
    inglés. Opcionalmente puede elegir cualquiera de los otros idiomas de la lista.
    Los archivos de idioma del idioma elegido se descargarán e instalarán para que
    el resto del proceso de instalación pueda completarse en ese idioma. Después de
    elegir un idioma, haga clic en _Save and continue_.
    <img src="/images/install-run-1.webp" alt="Choose a language" width="100%" />
1. Seleccione un perfil de instalación. Los perfiles de instalación proporcionan
    características y funcionalidades de sitio para un tipo específico de sitio a
    modo de una única descarga que contiene el software del núcleo, los módulos
    contribuidos, los temas y una configuración predefinida. El núcleo contiene dos
    perfiles de instalación. Seleccione el perfil de instalación Standard del
    núcleo. Haga clic en _Save and continue_.
    <img src="/images/install-run-2.webp" alt="Choose an installation profile" width="100%" />
1. El siguiente paso del instalador comprobará que su sistema cumple los
    requisitos mínimos. Si no los cumple, se le mostrará un resumen de lo que hay
    que corregir para poder continuar. Si los cumple, el instalador avanzará
    automáticamente al siguiente paso.
1. Proporcione los datos de la base de datos que creó en el capítulo
    [install-prepare](./install-prepare.md). Después haga clic en _Save and continue_.
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
          <td>Database name</td>
          <td>El nombre personalizado dado a la base de datos</td>
          <td>drupal</td>
        </tr>
        <tr>
          <td>Database username</td>
          <td>Usuario creado</td>
          <td>databaseUsername</td>
        </tr>
        <tr>
          <td>Database password</td>
          <td>Contraseña elegida</td>
          <td>************</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/install-run-3.webp" alt="Database configuration form" width="100%" />

1. El siguiente paso mostrará una barra de progreso bajo el encabezado
    _Installing Drupal_. Cuando el instalador termine, avanzará automáticamente al
    siguiente paso.
    <img src="/images/install-run-4.webp" alt="Installation progress bar" width="100%" />
1. El siguiente paso es configurar cierta información básica sobre su nuevo sitio
    (fíjese también si aparece un aviso sobre los permisos de archivos, para un
    paso posterior). Tenga en cuenta que la cuenta de usuario que cree en este paso
    es la cuenta de administrador del sitio. Ver [user-admin-account](./user-admin-account.md) para
    obtener información importante sobre esta cuenta única. Puede llamar a esta
    cuenta "admin" con total seguridad, y asegúrese de elegir una contraseña segura
    y única.
    Rellene el formulario con la siguiente información:
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
          <td>Site name</td>
          <td>El nombre elegido para el sitio</td>
          <td>Anytown Farmers Market</td>
        </tr>
        <tr>
          <td>Site email address</td>
          <td>El correo asociado al sitio</td>
          <td>info@example.com</td>
        </tr>
        <tr>
          <td>Username</td>
          <td>Las credenciales del usuario designado</td>
          <td>admin</td>
        </tr>
        <tr>
          <td>Password</td>
          <td>La contraseña elegida</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Confirm password</td>
          <td>Repetir la contraseña</td>
          <td>************</td>
        </tr>
        <tr>
          <td>Email address</td>
          <td>El correo del usuario</td>
          <td>admin@example.com</td>
        </tr>
      </tbody>
    </table>

    Los campos restantes pueden dejarse con sus valores predeterminados.
    <img src="/images/install-run-5.webp" alt="Configuration form" width="100%" />

1. Haga clic en _Save and continue_.
1. Se le redirigirá a la página de inicio de su nuevo sitio y debería ver el
    mensaje _Congratulations, you installed Drupal!_ en la parte superior de la
    página.
    <img src="/images/install-run-6.webp" alt="Installation success" width="100%" />
1. Puede que haya visto un aviso en el paso de configuración sobre los permisos
    de archivos, y puede que siga viéndolo hasta que corrija los permisos. Para
    evitar el aviso y hacer su sitio más seguro, cambie los permisos del directorio
    _sites/default_ y del archivo _sites/default/settings.php_ para que sean de solo
    lectura (puede que necesite consultar la documentación de su proveedor de
    alojamiento sobre cómo hacerlo).
## Ampliar conocimiento

Como alternativa, puede instalar el software con Drush en lugar de la interfaz.
Use el siguiente comando de Drush, desde dentro del directorio en el que
descargó el software, donde _DB_NAME_, _DB_USER_ y _DB_PASS_ son las
credenciales de su base de datos:

```text
drush site:install standard --db-url='mysql://DB_USER:DB_PASS@localhost/DB_NAME' --site-name=example
```

Revise el informe de estado para ver si hay algún problema con la instalación.
Ver [prevent-status](./prevent-status.md).
## Temas relacionados

* [install-dev-sites](./install-dev-sites.md)
* [install-tools](./install-tools.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/LGfRKKKDjv8" title="Running the Installer" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

* [_Drupal.org_ community documentation page "Create a database"](https://www.drupal.org/docs/installing-drupal/step-3-create-a-database)
* [_Drupal.org_ community documentation section "Webhosting issues"](https://www.drupal.org/server-permissions)

*Atribuciones*

Escrito y editado por [Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me),
y [Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
