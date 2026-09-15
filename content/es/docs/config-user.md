---
title: "Configuración de los ajustes de la cuenta de usuario"
description: "Cómo cambiar los ajustes de registro de cuentas de usuario."
id: "config-user"
translation_key: "config-user"
source_locale: "es"
---
## Objetivo { #config-user }

Desactivar la posibilidad de que la gente registre cuentas de usuario en el
sitio. Además, revisar o editar los mensajes de correo electrónico que genera
el sitio para eventos relacionados con las cuentas de usuario.
## Conocimientos previos

[config-overview](./config-overview.md)
## Pasos

1. En el menú administrativo _Manage_, vaya a _Configuration_ > _People_ >
    _Account settings_ (_admin/config/people/accounts_).
1. En _Registration and cancellation_, seleccione _Administrators only_ como las
    personas con permiso para registrar cuentas de usuario. Puede marcar _Require
    email verification when a visitor creates an account_ por si quiere cambiar los
    ajustes de registro de cuentas más adelante.
    ![Account registration only by admin](/images/config-user_account_reg.png)
1. Opcionalmente, cambie la dirección de correo electrónico predeterminada desde
    la que se enviarán las notificaciones de cuenta de usuario del sitio web del
    mercado de agricultores. Esto le ayudará a mantener una dirección de correo
    electrónico separada de la que se usa para el sitio web en general. Por
    ejemplo, esta dirección de correo para las notificaciones de cuenta de usuario
    será útil para el personal que se comunica con los vendors.
    ![Notification email from address](/images/config-user_from_email.png)
1. Opcionalmente, edite las plantillas de correo en _Emails_ para personalizar
    los correos automatizados. El software del núcleo proporciona varias plantillas
    de correo, pensadas para distintas situaciones relacionadas con el usuario.
    Todas se pueden personalizar y tres se pueden desactivar mediante casillas de
    verificación: activación, bloqueo y cancelación.
    Puede enviar su propio texto (por ejemplo, dando la bienvenida a los nuevos
    vendors para los que se acaban de crear cuentas) editando la plantilla
    _Welcome (new user created by administrator)_.
    <img src="/images/config-user_email.png" alt="Email notification on account events" width="100%" />
1. Haga clic en _Save configuration_ para guardar los cambios.
## Ampliar conocimiento

* [prevent-cache-clear](./prevent-cache-clear.md)
* [user-new-user](./user-new-user.md)
## Conceptos relacionados

Ver [user-chapter](./index.md#user-chapter) para más información sobre las cuentas de usuario y los
permisos.
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/POhQTAX93R8" title="Configuring User Account Settings" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

[Securing your site](https://www.drupal.org/security/secure-configuration) puede
ayudarle con un enfoque más centrado en la seguridad a la hora de configurar.

*Atribuciones*

Escrito y editado por [Laura Vass](https://www.drupal.org/u/lolk) en
[Pronovix](https://pronovix.com/), y
[Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
