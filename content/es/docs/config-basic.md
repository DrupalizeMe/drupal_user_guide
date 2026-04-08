---
title: "Editando la información básica del sitio web"
description: "Como editar la configuración básica del sitio web (nombre del sitio, lema, y zona horaria predefinida)."
id: "config-basic"
translation_key: "config-basic"
source_locale: "es"
---
## Objetivo { #config-basic }

Modificar información básica del sitio web como _Nombre del sitio_, _Lema_,
_Zona horaria predefinida_.
## Conocimientos previos

[config-overview](./config-overview.md)
## Pasos
### Configurando la información básica del sitio web

1. En el menú de administración _Administrar_, navegar hacia _Configuración_ >
    _Sistema_ > _Configuraciones básicas del sitio_
    (_admin/config/system/site-information_) para modificar el _Nombre del sitio_,
    _Lema_, _Dirección de correo electrónico_ administrativo, o la ruta de la
    _Página inicial predeterminada_.
1. Rellenar los campos disponibles según corresponda para el sitio web.
    <table>
      <thead>
        <tr>
          <th>Nombre del campo</th>
          <th>Explicación</th>
          <th>Valor de ejemplo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nombre del sitio</td>
          <td>Utilizado para identificar el sitio y mostrarlo en los navegadores</td>
          <td>Mercado Cualquiera de agricultores</td>
          <td>Lema</td>
          <td>Generalmente mostrado en todo el sitio web</td>
          <td>Granja de alimentos frescos</td>
        </tr>
        <tr>
          <td>Dirección de correo electrónico</td>
          <td>Utilizado como dirección _De_ en mensajes de correo automáticos (registros, restablecer contraseñas, etc)</td>
          <td>info@example.com</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Información del sitio](/images/config-basic-SiteInfo.png)

1. Después de editar los campos, hacer clic en _Guardar configuración_ para ver
    los cambios aplicados al sitio web.
### Configurando parámetros Regionales predeterminados

1. En el menú administrativo _Administrar_, navegar hacia _Configuración_ >
    _Regional e idioma_ > _Opciones regionales_ (_admin/config/regional/settings_).
1. Seleccionar el país apropiado desde la lista seleccionable _País predefinido_
    en la sección _Regionalización_, y establecer que día se mostrará como _Primer
    día de la semana_ en el sitio web.
1. En la sección _Zonas horarias_, seleccionar la _Zona horaria predefinida_ de
    la lista y configurar la zona horaria específica para usuarios.
    ![Zonas horarias](/images/config-basic-TimeZone.png)
1. Después de editar los campos, hacer clic en _Guardar configuración_ para ver
    los cambios aplicados al sitio web.
## Recursos adicionales

[Página de documentación de la comunidad en _Drupal.org_ "Getting started with Drupal 8 administration"](https://www.drupal.org/node/1896670)

*Atribuciones*

Escrito y editado por [Sree Veturi](https://www.drupal.org/u/sree),
[Michael Lenahan](https://www.drupal.org/u/michaellenahan) de
[erdfisch](https://erdfisch.de), y [Antje Lorch](https://www.drupal.org/u/ifrik).

Traducido por [Leandro Luvigne](https://www.drupal.org/u/lluvigne).
