---
title: "Concepto: Sitios de desarrollo"
description: "Descripción general de los sitios de desarrollo con un ejemplo de flujo de trabajo de despliegue para la construcción de un sitio."
id: "install-dev-sites"
translation_key: "install-dev-sites"
source_locale: "es"
---
## ¿Qué son los sitios de desarrollo? { #install-dev-sites }

Los sitios de desarrollo son distintas copias del mismo sitio que se utilizan
para desarrollar, actualizar y probar un sitio sin arriesgar la integridad del
sitio en producción.

Un ejemplo de flujo de trabajo de despliegue para la construcción de un sitio
suele incluir los sitios que se mencionan a continuación:

- **Entorno local:** El proceso de desarrollo comienza con los desarrolladores trabajando en nuevas funcionalidades, correcciones de errores, tematización y configuración en su entorno local. La herramienta recomendada para preparar un entorno local es DDEV.
- **Sitio de desarrollo:** Los desarrolladores suben (_push_) al sitio de desarrollo los cambios en los que han estado trabajando. Para un equipo de más de un desarrollador, normalmente se utiliza el control de versiones. Git es un sistema de control de versiones que hace un seguimiento de cualquier cambio en sus archivos. Después puede confirmar (_commit_) esos cambios en un repositorio. Usar Git permite a los miembros del equipo trabajar en el mismo sitio sin sobrescribir el trabajo de los demás. También hace posible volver fácilmente a etapas anteriores del desarrollo.
- **Sitio de ensayo (_staging_):** El sitio de ensayo puede usarse para probar o para presentar los cambios al cliente para su aprobación. El QA (_Quality Assurance_, aseguramiento de la calidad) y el UAT (_User Acceptance Testing_, pruebas de aceptación del usuario) se realizan con mayor frecuencia en el sitio de ensayo. Se recomienda tener contenido de producción tanto en el sitio de desarrollo como en el de ensayo, de modo que pueda probar cómo funcionarán las nuevas funcionalidades con el contenido existente.
- **Sitio de producción:** El sitio en producción, disponible en la web para los visitantes. Contiene las nuevas funcionalidades que se ha comprobado que son seguras para pasar a producción.

En función del tamaño, el alcance, los requisitos o las partes interesadas del
proyecto, se pueden eliminar etapas del flujo de trabajo anterior o añadir
etapas adicionales. Por ejemplo, se puede añadir un sitio de pruebas antes del
de ensayo para separar los procesos de pruebas y de aceptación del usuario.
## Temas relacionados

* [install-dev-making](./install-dev-making.md)
* [planning-workflow](./planning-workflow.md)
* [extend-git](./extend-git.md)

*Atribuciones*

Escrito y editado por [Diána Lakatos](https://www.drupal.org/u/dianalakatos)
y [Jojy Alphonso](https://www.drupal.org/u/jojyja) en
[Red Crackle](http://redcrackle.com), y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en
[Drupalize.Me](https://drupalize.me).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
