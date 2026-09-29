---
title: "Asignación de permisos a un rol"
description: "Cómo asignar un permiso a un rol."
id: "user-permissions"
translation_key: "user-permissions"
source_locale: "es"
---
## Objetivo { #user-permissions }

Cambiar los permisos del rol Vendor para que los usuarios puedan crear, editar
y eliminar contenido Recipe y Vendor, dar formato al contenido y ponerse en
contacto entre sí.
## Conocimientos previos

* [user-concept](./user-concept.md)
## Requisitos previos del sitio web

El rol Vendor debe existir en su sitio. Ver [user-new-role](./user-new-role.md).
## Pasos

1. En el menú administrativo _Manage_, vaya a _People_ > _Roles_
    (_admin/people/roles_). Aparece la página _Roles_.
1. Haga clic en _Edit permissions_ en el desplegable del rol Vendor. Aparece la
    página _Edit role_, donde puede ver todas las acciones disponibles para el
    sitio web como, por ejemplo, _Post comments_ o _Administer blocks_. Los
    permisos disponibles dependen de los módulos que estén instalados en el sitio.
    Nota: algunos permisos pueden tener implicaciones de seguridad. Sea prudente al
    asignar permisos a los roles.
1. Marque las casillas de los siguientes permisos, enumerados por módulo:
    <table>
      <thead>
        <tr>
          <th>Module</th>
          <th>Permission</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Contact</td>
          <td>Use users' personal contact forms</td>
        </tr>
        <tr>
          <td>Filter</td>
          <td>Use the Restricted HTML text format</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Create new content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Edit own content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Recipe: Delete own content</td>
        </tr>
        <tr>
          <td>Node</td>
          <td>Vendor: Edit own content</td>
        </tr>
      </tbody>
    </table>

    <img src="/images/user-permissions-check-permissions.png" alt="Granting users with the Vendor role the rights to create, delete and edit Recipes" width="100%" />

1. Haga clic en _Save permissions_. Recibirá un mensaje indicando que sus
    cambios se han guardado.
    ![Confirmation message after updating permissions](/images/user-permissions-save-permissions.png)
## Ampliar conocimiento

* Inicie sesión como uno de los nuevos usuarios que creó en [user-new-user](./user-new-user.md).
Compruebe si tiene los permisos correctos.
* [user-roles](./user-roles.md)
## Conceptos relacionados

[user-admin-account](./user-admin-account.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/IlVh9f4BHVw" title="Assigning Permissions to a Role" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

## Recursos adicionales

[_Drupal.org_ community documentation page "Managing Users"](https://www.drupal.org/docs/7/managing-users)

*Atribuciones*

Adaptado y editado por [Boris Doesborg](https://www.drupal.org/u/batigolix),
[Brian Emery](https://www.drupal.org/u/bemery987),
y [Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com),
y [Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me), de
["User Roles"](https://www.drupal.org/docs/7/managing-users/user-roles),
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
