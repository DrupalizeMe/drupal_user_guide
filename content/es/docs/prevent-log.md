---
title: "Concepto: log"
description: "Descripción general de los logs y dónde encontrar los mensajes de registro recientes."
id: "prevent-log"
translation_key: "prevent-log"
source_locale: "es"
---
## ¿Qué es un log? { #prevent-log }

Su sitio captura los eventos del sistema en un log para que una persona
autorizada los revise más adelante. El log es una lista de eventos registrados
que contiene datos de uso, datos de rendimiento, errores, avisos e información
operativa. Es vital revisar el log de forma periódica, ya que a menudo es la
única manera de saber qué está ocurriendo.

Puede encontrar los mensajes de registro recientes de su sitio en el menú
administrativo _Manage_ navegando a _Reports_ > _Recent log messages_
(_admin/reports/dblog_). Estos logs pueden ser borrados por los
administradores y por las tareas de cron automatizadas, así que no deberían
usarse para el [registro forense](https://en.wikipedia.org/wiki/Audit_trail).
Para fines forenses, use el módulo Syslog.

<img src="/images/prevent-log.webp" alt="Recent log messages of a basic site" width="100%" />

*Atribuciones*

Adaptado por [Diána Lakatos](https://www.drupal.org/u/dianalakatos)
de ["Reports"](https://www.drupal.org/docs/7/monitoring-a-site/reports)
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation)

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito)
