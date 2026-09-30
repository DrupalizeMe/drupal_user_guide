---
title: "Concepto: cron"
description: "Descripción general de cron y en qué se diferencia del cron de Unix."
id: "security-cron-concept"
translation_key: "security-cron-concept"
source_locale: "es"
---
## ¿Qué son las tareas de cron? { #security-cron-concept }

Para asegurar que su sitio y sus módulos sigan funcionando bien, se debe
ejecutar periódicamente un grupo de operaciones administrativas. Estas
operaciones se llaman tareas de _cron_. Algunos ejemplos de tareas de cron son:
comprobar si hay actualizaciones de módulos y temas, indexar contenido para las
búsquedas o limpiar archivos temporales.
## ¿Cuál es la relación entre las tareas de cron del sitio y el cron de Unix?

Los sistemas operativos basados en Linux/Unix tienen un programador cron que se
puede usar para ejecutar tareas periódicas. Puede usar el programador cron del
servidor para programar la ejecución de las tareas de cron del sitio. Como
alternativa, puede usar el módulo del núcleo Automated Cron para ejecutar
tareas. Puede comprobar el estado de las tareas de cron del sitio en el informe
de estado.
## Temas relacionados

* [security-cron](./security-cron.md)
* [prevent-status](./prevent-status.md)
## Recursos adicionales

[_Drupal.org_ community documentation page "Setting up cron"](https://www.drupal.org/docs/7/setting-up-cron/overview)

*Atribuciones*

Escrito y editado por
[Diána Lakatos](https://www.drupal.org/u/dianalakatos) en
[Pronovix](https://pronovix.com/),
[Dave Hansen-Lange](https://www.drupal.org/u/dalin) en
[Advomatic](https://www.advomatic.com/),
y [Boris Doesborg](https://www.drupal.org/u/batigolix).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
