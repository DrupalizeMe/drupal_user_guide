---
title: "Concepto: requisitos del servidor"
description: "Descripción general de los requisitos del servidor para instalar y ejecutar el software del núcleo."
id: "install-requirements"
translation_key: "install-requirements"
source_locale: "es"
---
## ¿Cuáles son los requisitos para ejecutar el software del núcleo? { #install-requirements }
### Espacio en disco

La cantidad total de espacio en disco que necesita su sitio no es una cifra
fija, ya que depende de su sitio. Los archivos base del software del núcleo
ocupan unos 100 MB en el servidor web. Necesitará más espacio si instala
módulos o temas adicionales, y también necesitará espacio para los archivos
multimedia, las copias de seguridad y otros archivos que su sitio genera y que
se suben a él. La base de datos también usa espacio en disco, aunque
normalmente no está en la misma zona (y en algunos casos, ni siquiera en el
mismo servidor) que la que usan los archivos del sitio.
### PHP

PHP 8.3 o una versión de PHP 8 superior. PHP debe configurarse con un tamaño
mínimo de memoria de 64 MB; si ejecuta varios módulos en su sitio o usa
herramientas de línea de comandos basadas en PHP que consumen mucha memoria
(como Composer), puede que necesite bastante más memoria que esa.

También se requieren ciertas extensiones de PHP; la lista exacta de extensiones
de PHP necesarias depende de cómo instale el software del núcleo y de qué
módulos use en su sitio. Por lo general, los proveedores de alojamiento tienen
instaladas todas las extensiones de PHP que necesitará. Si se autoaloja o
ejecuta su sitio en su ordenador local, recibirá mensajes de error durante la
instalación si falta alguna extensión de PHP necesaria, y debería poder
instalarlas y continuar. Ver
[PHP requirements](https://www.drupal.org/docs/getting-started/system-requirements/php-requirements)
para una lista completa de requisitos.
### Servidor web

- **Apache (recomendado):** Apache es el servidor web más utilizado. El software del núcleo funciona en Apache 2.4.7 o superior alojado en UNIX/Linux, OS X o Windows que tenga el módulo Apache mod_rewrite instalado y habilitado. La configuración del VirtualHost de Apache debe contener la directiva _AllowOverride All_ para permitir el uso del archivo _.htaccess_.
- **Servidor local de PHP:** Puede ejecutar temporalmente un sitio de demostración local en su ordenador usando solo PHP, sin instalar software de servidor web.
- **Nginx:** Nginx es un servidor web de uso habitual que se centra en la alta concurrencia, el rendimiento y el bajo consumo de memoria. El software del núcleo funciona en Nginx 0.7 o superior alojado en UNIX/Linux, OS X o Windows. El módulo ngx_http_rewrite_module debe estar instalado y habilitado.
### Base de datos

Use una de las siguientes bases de datos:

* MySQL - 8.0+ (MariaDB 10.6+, Percona 8.0+) o superior con un motor de
almacenamiento primario compatible con InnoDB
* PostgreSQL - 16 o superior con la extensión pg_trgm
* SQLite - 3.45 o superior. Los sitios de demostración locales temporales usan
SQLite, que se distribuye como parte de PHP y no requiere instalar software de
base de datos por separado, pero asegúrese de que su versión de PHP incluye la
versión mínima de SQLite.
## Recursos adicionales

* [_Drupal.org_ community documentation page "System requirements"](https://www.drupal.org/docs/system-requirements)
* [PHP Runtime Configuration (PHP memory limit and other settings)](https://secure.php.net/manual/en/configuration.php)
* [Installing a new Drupal application on your local machine](https://www.drupal.org/docs/official_docs/en/_local_development_guide.html)
* [Creating a Drupal demo application for evaluation purposes](https://www.drupal.org/docs/official_docs/en/_evaluator_guide.html)

*Atribuciones*

Adaptado por [Karl Kedrovsky](https://www.drupal.org/u/KarlKedrovsky),
[Brian Emery](https://www.drupal.org/u/bemery987),
[Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon) y
[Joe Shindelar](https://www.drupal.org/u/eojthebrave) en [Drupalize.Me](https://drupalize.me)
de ["System requirements"](https://www.drupal.org/docs/system-requirements),
copyright 2000-2026 por los colaboradores individuales de la
[Documentación de la Comunidad de Drupal](https://www.drupal.org/documentation).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
