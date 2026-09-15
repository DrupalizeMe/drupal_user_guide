---
title: "Concepto: módulos"
description: "Descripción general de los módulos y de la funcionalidad para la que se pueden usar."
id: "understanding-modules"
translation_key: "understanding-modules"
source_locale: "es"
---
## Conocimientos previos { #understanding-modules }

[understanding-drupal](./understanding-drupal.md)
## ¿Qué es un módulo?

Un módulo es un paquete de archivos que amplía la funcionalidad del núcleo de
Drupal. Los módulos suelen contener código PHP y configuración (YAML), y pueden
incluir archivos JavaScript, CSS y de plantilla Twig.

Puede activar las características y la funcionalidad _instalando_ el módulo, y
puede desactivarlas _desinstalando_ el módulo; antes de desinstalarlo, puede que
necesite eliminar los datos y la configuración relacionados con esa
característica o funcionalidad.

Cada módulo que se instala aumenta el tiempo necesario para generar las páginas
de su sitio, así que es buena idea desinstalar los módulos que no se necesitan.

La descarga del núcleo incluye módulos para funcionalidades como:

* Gestionar cuentas de usuario (el módulo del núcleo User)
* Gestionar el contenido básico (el módulo del núcleo Node) y los campos (los
módulos del núcleo Field y Field UI; también hay módulos del núcleo que
proporcionan tipos de campo)
* Gestionar los menús de navegación (el módulo del núcleo Menu UI)
* Crear listas, cuadrículas y bloques a partir del contenido existente (los
módulos del núcleo Views y Views UI)

Puede descargar _módulos contribuidos_ adicionales desde
[_Drupal.org_ Module Downloads](https://www.drupal.org/project/project_module), o
crear sus propios _módulos personalizados_.
## Temas relacionados

* [understanding-themes](./understanding-themes.md)
* [understanding-distributions](./understanding-distributions.md)
* [config-uninstall](./config-uninstall.md)
* [extend-module-find](./extend-module-find.md)
* [extend-module-install](./extend-module-install.md)
* [security-concept](./security-concept.md)
* [security-update-module](./security-update-module.md)
## Recursos adicionales

[_Drupal.org_ community documentation page "Module developer's guide"](https://www.drupal.org/developing/modules)

*Atribuciones*

Escrito por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon).
