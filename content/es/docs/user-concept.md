---
title: "Concepto: usuarios, roles y permisos"
description: "Descripción general de las cuentas de usuario, los permisos y los roles."
id: "user-concept"
translation_key: "user-concept"
source_locale: "es"
---
## ¿Qué son los usuarios? { #user-concept }

Cualquiera que visite su sitio web es un _usuario_, incluido usted. Hay tres
grupos de usuarios:

* Usuarios que no han iniciado sesión, o _usuarios anónimos_
* Usuarios que han iniciado sesión, o _usuarios autenticados_
* La cuenta de usuario administrativa que se creó automáticamente cuando
instaló su sitio, o Usuario 1. Ver [user-admin-account](./user-admin-account.md).
## ¿Qué son los permisos?

La capacidad de realizar acciones en su sitio (incluyendo ver contenido,
editar contenido y cambiar la configuración) se rige por _permisos_. Cada
permiso tiene un nombre (como _View published content_) y abarca una acción o
un pequeño subconjunto de acciones. A un usuario se le debe conceder un permiso
para poder realizar la acción correspondiente en el sitio; los permisos los
definen los módulos que proporcionan las acciones.
## ¿Qué son los roles?

En lugar de asignar permisos individuales directamente a cada usuario, los
permisos se agrupan en _roles_. Puede definir uno o varios roles en su sitio y
después conceder permisos a cada rol. Los permisos concedidos a los usuarios
autenticados y anónimos están contenidos en los roles _Authenticated user_ y
_Anonymous user_ y, según el perfil de instalación que usara al instalar su
sitio, también puede haber un rol _Administrator_ al que se le asignan
automáticamente todos los permisos de su sitio.

A cada cuenta de usuario de su sitio se le asigna automáticamente el rol
_Authenticated user_ y, opcionalmente, se le pueden asignar uno o varios roles
adicionales. Cuando asigna un rol a una cuenta de usuario, el usuario tendrá
todos los permisos del rol al iniciar sesión.

Es una buena práctica crear varios roles en su sitio. En el ejemplo del sitio
del mercado de agricultores, podría querer los siguientes roles:

* Un rol Vendor que permita a los vendors editar su propia página de ficha de
vendor
* Un rol Content editor para editar las páginas generales del mercado de
agricultores
* Un rol User manager para gestionar las cuentas de los vendors
* El rol _Administrator_ que se instaló con su sitio, para que los usuarios
expertos gestionen la configuración del sitio
## Temas relacionados

* [user-new-role](./user-new-role.md)
* [user-permissions](./user-permissions.md)
* [user-roles](./user-roles.md)
* [user-new-user](./user-new-user.md)
* [user-admin-account](./user-admin-account.md)
* [user-content](./user-content.md)
## Recursos adicionales

* [_Drupal.org_ community documentation page "Managing Users"](https://www.drupal.org/docs/7/managing-users)
* [_Drupal.org_ community documentation page "User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles)

*Atribuciones*

Adaptado por [Mark LaCroix](https://www.drupal.org/u/mark-lacroix),
[Boris Doesborg](https://www.drupal.org/u/batigolix) y
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) de
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
