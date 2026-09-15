---
title: "Glosario"
description: "Glosario"
id: "glossary"
translation_key: "glossary"
source_locale: "es"
---
[](){ #glossary }

## Ajax { #glossary-ajax }

Tecnología web usada para intercambiar datos con un servidor y actualizar dinámicamente partes de una página web (por ejemplo, formularios) sin necesidad de recargar la página entera.

## Alias { #glossary-alias }

Nombre fácil de recordar que reemplaza a la [path](./glossary.md#glossary-path) interna que el sistema asigna a una [URL](./glossary.md#glossary-url) del sitio. Por ejemplo, podría asignar el alias _/about_ a la página Acerca de de su sitio para reemplazar la ruta interna _/node/5_. Esto daría a la página la URL _http://example.com/about_ en lugar de _http://example.com/node/5_. Consultar [content-paths](./content-paths.md) para más información.

## Anónimo { #glossary-anonymous }

Persona ([user](./glossary.md#glossary-user)) que interactúa con el sitio sin haber iniciado sesión. Consultar [user-concept](./user-concept.md) para más información.

## Autenticado { #glossary-authenticated }

Persona ([user](./glossary.md#glossary-user)) que interactúa con el sitio habiendo iniciado sesión. Consultar [user-concept](./user-concept.md) para más información.

## Bloque { #glossary-block }

Fragmento de [content](./glossary.md#glossary-content) (texto, imágenes, enlaces, etc.) que se puede mostrar en una página de un sitio. Los bloques se muestran en [regions](./glossary.md#glossary-region). Consultar [block-concept](./block-concept.md) para más información.

## Breakpoint { #glossary-breakpoint }

Los breakpoints se usan para separar en pasos la altura o la anchura de las pantallas de los navegadores, las impresoras y otros tipos de salida. Un sitio [responsive](./glossary.md#glossary-responsive) ajusta su presentación en estos breakpoints. Consultar [structure-image-responsive](./structure-image-responsive.md) para más información.

## Bundle { #glossary-bundle }

Sinónimo de [Entity subtype](./glossary.md#glossary-entity-subtype).

## Caché { #glossary-cache }

La caché interna del sitio almacena la salida de cálculos costosos, como generar la salida de una petición de página HTML, y luego la recupera en lugar de recalcularla la siguiente vez que se necesita. También se pueden usar sistemas de caché externos en el servidor web para acelerar la respuesta de un sitio. Consultar [prevent-cache](./prevent-cache.md) para más información sobre la caché interna.

## Coding standards { #glossary-coder }

Los estándares de código (coding standards) son las reglas para los programadores que definen buenas prácticas, formato y otras normas, de modo que todo el mundo use las mismas convenciones y tenga las mismas expectativas al ver el código. Consultar [install-tools](./install-tools.md) para más información.

## Composer { #glossary-composer }

El gestor de dependencias de PHP que usan Drupal, [Drush](./glossary.md#glossary-drush), el framework Symfony y otros. Es la forma preferida de instalar proyectos de Drupal. Consultar [install-composer](./install-composer.md) para más información.

## CMS { #glossary-cms }

Acrónimo de [Content Management System](./glossary.md#glossary-content-management-system).

## Configuración { #glossary-configuration }

Información sobre su sitio que no es [content](./glossary.md#glossary-content) y que está pensada para ser más permanente que la información de [state](./glossary.md#glossary-state), como el nombre de su sitio, los [content types](./glossary.md#glossary-content-type) y las [views](./glossary.md#glossary-view) que ha definido, etc. Consultar [understanding-data](./understanding-data.md) para más información.

## Contenido { #glossary-content }

Información pensada para mostrarse en su sitio, como texto, imágenes, descargas, etc. Véase también [Configuration](./glossary.md#glossary-configuration) y [State](./glossary.md#glossary-state). Consultar [understanding-data](./understanding-data.md) para más información.

## Content item { #glossary-content-item }

Elemento de [content](./glossary.md#glossary-content) que normalmente está pensado para mostrarse como el contenido principal de una página de su sitio. Es un [entity type](./glossary.md#glossary-entity-type). Consultar [planning-data-types](./planning-data-types.md) para más información.

## Content Management System (CMS) { #glossary-content-management-system }

Conjunto de herramientas diseñadas para permitir la creación, modificación, organización, búsqueda, recuperación y eliminación de información en un sitio web. Consultar [understanding-drupal](./understanding-drupal.md) para más información.

## Content type { #glossary-content-type }

Un [entity subtype](./glossary.md#glossary-entity-subtype) para el [entity type](./glossary.md#glossary-entity-type) [content item](./glossary.md#glossary-content-item). Cada tipo de contenido se usa con un propósito concreto en el sitio y cada uno tiene sus propios campos. Por ejemplo, un sitio para un mercado de agricultores podría tener un tipo de contenido para páginas sencillas y otro para una página de listado de proveedores. Consultar [planning-data-types](./planning-data-types.md) para más información.

## Contextual Filter (in a View) { #glossary-contextual-filter }

Limita los datos que va a mostrar una [view](./glossary.md#glossary-view) en función del contexto del [display](./glossary.md#glossary-display) de la vista, como la URL completa de la página. Consultar [views-parts](./views-parts.md) para más información.

## Enlace contextual { #glossary-contextual-link }

Enlace a una página de administración para editar o configurar una funcionalidad del sitio, que se muestra en el contexto donde aparece esa funcionalidad. Ejemplo: un enlace para configurar un [menu](./glossary.md#glossary-menu) que se muestra al pasar el ratón por encima del menú. Consultar [config-overview](./config-overview.md) para más información.

## Contribuido { #glossary-contributed }

[Modules](./glossary.md#glossary-module), [themes](./glossary.md#glossary-theme) y [distributions](./glossary.md#glossary-distribution) que no forman parte de la descarga del [Drupal core](./glossary.md#glossary-drupal-core) y que se pueden descargar por separado desde el sitio web [_Drupal.org_](https://www.drupal.org).

## Cron { #glossary-cron }

En algunos sistemas operativos, _cron_ es una aplicación planificadora de comandos que ejecuta comandos o scripts periódicamente. Su sitio define tareas periódicas, también conocidas como tareas de cron, que deben lanzarse mediante un planificador cron del sistema operativo o internamente. Consultar [security-cron-concept](./security-cron-concept.md) para más información.

## Cross Site Scripting { #glossary-cross-site-scripting }

Vulnerabilidad de seguridad habitual en los sitios web. En un sitio que no está bien protegido, un usuario malicioso puede introducir código de script en páginas web que otros usuarios visualizan. Consultar [structure-text-formats](./structure-text-formats.md) para más información.

## Devel { #glossary-devel }

Módulo que ayuda con tareas de desarrollo como depurar e inspeccionar código, analizar consultas a la base de datos y generar contenido de prueba. Consultar [install-tools](./install-tools.md) para más información.

## Development site { #glossary-development-site }

Copia del sitio en producción que se usa para desarrollar, actualizar y probar el sitio. Consultar [install-dev-sites](./install-dev-sites.md) para más información.

## Display (in a View) { #glossary-display }

Tipo de salida de una [view](./glossary.md#glossary-view), por ejemplo una página, un [block](./glossary.md#glossary-block) o un feed. Consultar [views-parts](./views-parts.md) para más información.

## Distribución { #glossary-distribution }

Descarga única que proporciona un atajo para configurar un tipo concreto de sitio, como un sitio web para un club o para comercio electrónico. Una distribución contiene el [Drupal core](./glossary.md#glossary-drupal-core), junto con [contributed](./glossary.md#glossary-contributed) [modules](./glossary.md#glossary-module) y/o [themes](./glossary.md#glossary-theme); muchas distribuciones también preconfiguran el sitio o incluso crean contenido de ejemplo durante la [installation](./glossary.md#glossary-installing). Consultar [understanding-distributions](./understanding-distributions.md) para más información.

## Drupal Association { #glossary-drupal-association }

Organización sin ánimo de lucro dedicada a apoyar el proyecto y la comunidad Drupal. Consultar [understanding-project](./understanding-project.md) para más información.

## Drupal core { #glossary-drupal-core }

Los archivos, temas, perfiles y módulos que se incluyen en la descarga estándar del software del proyecto. Consultar [understanding-drupal](./understanding-drupal.md) para más información.

## Drush { #glossary-drush }

Shell de línea de comandos e interfaz de scripting para Drupal. Consultar [install-tools](./install-tools.md) para más información.

## Editorial Workflow { #glossary-editorial-workflow }

Proceso para crear, revisar, editar y publicar contenido. En el proceso pueden participar varias personas con distintos roles (por ejemplo, quienes crean el contenido y quienes lo editan). Consultar [planning-workflow](./planning-workflow.md) para más información.

## Entidad { #glossary-entity }

Elemento de datos de [content](./glossary.md#glossary-content) o de [configuration](./glossary.md#glossary-configuration), aunque en el uso habitual el término suele referirse a las entidades de contenido. Algunos ejemplos son los [content items](./glossary.md#glossary-content-item), los [blocks](./glossary.md#glossary-block) personalizados, los [taxonomy terms](./glossary.md#glossary-taxonomy-term) y las definiciones de [content types](./glossary.md#glossary-content-type); los tres primeros son entidades de contenido y la última es una entidad de configuración. Véase también [Entity type](./glossary.md#glossary-entity-type), [Entity subtype](./glossary.md#glossary-entity-subtype) y [Field](./glossary.md#glossary-field). Consultar [planning-data-types](./planning-data-types.md) para más información.

## Entity subtype { #glossary-entity-subtype }

Dentro de un [entity type](./glossary.md#glossary-entity-type) de [content](./glossary.md#glossary-content), agrupación de entidades que comparten los mismos [fields](./glossary.md#glossary-field). Por ejemplo, dentro del entity type [content item](./glossary.md#glossary-content-item), un sitio de mercado de agricultores podría tener subtipos (conocidos como [content types](./glossary.md#glossary-content-type)) para páginas estáticas y páginas de proveedores, cada uno con su propio grupo de campos. También puede encontrar el término _bundle_ (especialmente en la documentación para programadores) como sinónimo de subtipo de entidad. Consultar [planning-data-types](./planning-data-types.md) para más información.

## Entity type { #glossary-entity-type }

El tipo general de una [entity](./glossary.md#glossary-entity); en el uso habitual, solo se aplica a una entidad de [content](./glossary.md#glossary-content). Algunos ejemplos son los [content types](./glossary.md#glossary-content-type), los [taxonomy terms](./glossary.md#glossary-taxonomy-term) y los [blocks](./glossary.md#glossary-block) personalizados. Consultar [planning-data-types](./planning-data-types.md) para más información.

## Campo { #glossary-field }

Datos de un cierto tipo que se adjuntan a una [entity](./glossary.md#glossary-entity) de [content](./glossary.md#glossary-content). Por ejemplo, en el tipo de contenido de proveedor de un sitio de mercado de agricultores, podría tener campos para una imagen, la descripción del proveedor y un [taxonomy term](./glossary.md#glossary-taxonomy-term). Consultar [planning-data-types](./planning-data-types.md) para más información.

## Field bundle { #glossary-field-bundle }

Sinónimo de [Entity subtype](./glossary.md#glossary-entity-subtype).

## Field formatter { #glossary-field-formatter }

[Configuration](./glossary.md#glossary-configuration) que define cómo se muestran los datos de un [field](./glossary.md#glossary-field). Por ejemplo, un campo de texto se podría mostrar con un prefijo o un sufijo, y se le podrían eliminar o limitar sus etiquetas HTML. Véase también [View mode](./glossary.md#glossary-view-mode) y [Field widget](./glossary.md#glossary-field-widget). Consultar [structure-view-modes](./structure-view-modes.md) para más información.

## Field widget { #glossary-field-widget }

[Configuration](./glossary.md#glossary-configuration) que define cómo se introducen o editan los datos de un [field](./glossary.md#glossary-field) en un formulario de entrada de datos. Por ejemplo, un campo de texto podría usar una caja de entrada de una línea o de varias líneas, y podría haber un ajuste para el tamaño de la caja. Véase también [Field formatter](./glossary.md#glossary-field-formatter). Consultar [structure-widgets](./structure-widgets.md) para más información.

## Filter (in a View) { #glossary-filter }

Limita los datos que va a mostrar una [view](./glossary.md#glossary-view) en función de criterios como el estado de publicación, el tipo de contenido o el valor de un campo. Consultar [views-parts](./views-parts.md) para más información.

## Formatter { #glossary-formatter }

Consultar [Field formatter](./glossary.md#glossary-field-formatter).

## FOSS { #glossary-foss }

Acrónimo de _Free and Open Source Software_ (software libre y de código abierto), que hace referencia al software desarrollado por una comunidad de personas y publicado bajo una licencia no comercial. Véase también [GPL](./glossary.md#glossary-gpl). Consultar [understanding-project](./understanding-project.md) para más información.

## Git { #glossary-git }

[Sistema de control de versiones](./glossary.md#glossary-vcs) que usan las personas que desarrollan Drupal para coordinar sus cambios de código individuales. Git registra los cambios de todo el mundo en un proyecto dado en un árbol de directorios llamado [repository](./glossary.md#glossary-repository) de git. Consultar [install-tools](./install-tools.md) para más información.

## GPL { #glossary-gpl }

Acrónimo de _GNU General Public License_ (Licencia Pública General de GNU), una licencia de software no comercial. Todo el software descargado desde el sitio web [_Drupal.org_](https://www.drupal.org) está licenciado bajo la ["GNU General Public License, version 2"](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html). Véase también [FOSS](./glossary.md#glossary-foss). Consultar [understanding-gpl](./understanding-gpl.md) para más información.

## Image style { #glossary-image-style }

Conjunto de pasos de procesamiento que transforman una imagen base en una imagen nueva; el procesamiento típico incluye el escalado y el recorte. Consultar [structure-image-styles](./structure-image-styles.md) para más información.

## Installing { #glossary-installing }

Preparar el Drupal core o cualquier tema o módulo contribuido para su uso. En el caso del Drupal core, esto significa descargar los archivos necesarios, crear la base de datos y configurar y ejecutar el script de instalación. Consultar [install-decide](./install-decide.md) para más información.

## LAMP { #glossary-lamp }

Acrónimo de _Linux, Apache, MySQL y PHP_: el software del servidor web sobre el que se ejecutan habitualmente los scripts (aunque se pueden usar otros sistemas operativos, servidores web y bases de datos). Consultar [install-requirements](./install-requirements.md) para más información.

## Log { #glossary-log }

Lista de eventos registrados en el sitio, como datos de uso, datos de rendimiento, errores, avisos e información operativa. Consultar [prevent-log](./prevent-log.md) para más información.

## Menú { #glossary-menu }

Conjunto de enlaces usado para la navegación en un sitio, que puede organizarse jerárquicamente. Consultar [menu-concept](./menu-concept.md) para más información.

## Módulo { #glossary-module }

Software (normalmente PHP, JavaScript y/o CSS) que amplía las características del sitio y añade funcionalidad. El proyecto Drupal distingue entre módulos _[core](./glossary.md#glossary-drupal-core)_ y _[contributed](./glossary.md#glossary-contributed)_. Consultar [understanding-modules](./understanding-modules.md) para más información.

## Ruta { #glossary-path }

La última parte, única, de la [URL](./glossary.md#glossary-url) interna que el sistema asigna a una página del sitio, que puede ser una página orientada al visitante o una página de administración. Por ejemplo, la URL interna de la página Acerca de de su sitio podría ser _http://example.com/node/5_, y en ese caso la ruta es _node/5_. Véase también [Alias](./glossary.md#glossary-alias). Consultar [content-paths](./content-paths.md) para más información.

## Permiso { #glossary-permission }

La capacidad de realizar alguna acción en el sitio, como editar un tipo concreto de [content](./glossary.md#glossary-content) o ver los perfiles de usuario. Véase también [Role](./glossary.md#glossary-role). Consultar [user-concept](./user-concept.md) para más información.

## Reference field { #glossary-reference-field }

[Field](./glossary.md#glossary-field) que representa una relación entre una [entity](./glossary.md#glossary-entity) y una o varias entidades más, que pueden ser del mismo [entity type](./glossary.md#glossary-entity-type) o de otro tipo. Por ejemplo, en un sitio de mercado de agricultores, un content item de receta podría tener un campo de referencia al proveedor (también un content item) que publicó la receta. Los campos de [Taxonomy term](./glossary.md#glossary-taxonomy-term) también son campos de referencia. Consultar [structure-reference-fields](./structure-reference-fields.md) para más información.

## Región { #glossary-region }

Área definida de una página donde se puede colocar [content](./glossary.md#glossary-content), como la cabecera, el pie de página, el área principal de contenido, la barra lateral izquierda, etc. Las regiones las definen los [themes](./glossary.md#glossary-theme), y el contenido que se muestra en cada región está contenido en [blocks](./glossary.md#glossary-block). Consultar [block-regions](./block-regions.md) para más información.

## Relationship (in a View) { #glossary-relationship }

Ampliación de los datos que se muestran en una vista, relacionando el contenido base con otras entidades de contenido. Consultar [views-parts](./views-parts.md) para más información.

## Repositorio { #glossary-repository }

Ubicación donde un sistema de control de versiones almacena todos los archivos y directorios de un proyecto. Consultar [install-tools](./install-tools.md) para más información.

## Responsive { #glossary-responsive }

Se dice que un sitio o un [theme](./glossary.md#glossary-theme) es responsive si ajusta su presentación en respuesta al tamaño de la pantalla del navegador, la impresora u otro tipo de salida. Véase también [Breakpoint](./glossary.md#glossary-breakpoint). Consultar [structure-image-responsive](./structure-image-responsive.md) para más información.

## Revisión { #glossary-revision }

Registro del estado pasado o presente de una [entity](./glossary.md#glossary-entity) de [content](./glossary.md#glossary-content), a medida que se edita con el tiempo. Consultar [planning-workflow](./planning-workflow.md) para más información.

## Rol { #glossary-role }

Conjunto de [permissions](./glossary.md#glossary-permission) con nombre que se puede aplicar a una [user account](./glossary.md#glossary-user). Consultar [user-concept](./user-concept.md) para más información.

## Security update { #glossary-security-update }

[Update](./glossary.md#glossary-update) que corrige un error relacionado con la seguridad, como una vulnerabilidad. Consultar [security-concept](./security-concept.md) para más información.

## Sesión { #glossary-session }

Información sobre las interacciones de cada visitante con el sitio, como si ha iniciado sesión y sus cookies. Consultar [understanding-data](./understanding-data.md) para más información.

## Staging site { #glossary-staging-site }

Copia del sitio en producción que se puede usar para hacer pruebas o para presentar los cambios al cliente para su aprobación. Consultar [install-dev-sites](./install-dev-sites.md) para más información.

## Estado { #glossary-state }

Información de naturaleza temporal sobre el estado actual de su sitio, como el momento en que se ejecutó por última vez [cron](./glossary.md#glossary-cron), etc. Véase también [Content](./glossary.md#glossary-content) y [Configuration](./glossary.md#glossary-configuration). Consultar [understanding-data](./understanding-data.md) para más información.

## Taxonomía { #glossary-taxonomy }

El proceso de clasificar [content](./glossary.md#glossary-content). Consultar [structure-taxonomy](./structure-taxonomy.md) para más información.

## Taxonomy term { #glossary-taxonomy-term }

Término usado para clasificar [content](./glossary.md#glossary-content), como una etiqueta o una categoría. Véase también [Vocabulary](./glossary.md#glossary-vocabulary). Consultar [structure-taxonomy](./structure-taxonomy.md) para más información.

## Text format { #glossary-text-format }

[Configuration](./glossary.md#glossary-configuration) que define el procesamiento que se aplica al texto introducido por el usuario antes de mostrarlo en el navegador. Puede incluir eliminar o limitar etiquetas HTML, o convertir [URLs](./glossary.md#glossary-url) en enlaces. Consultar [structure-text-formats](./structure-text-formats.md) para más información.

## Tema { #glossary-theme }

Software y archivos de recursos (imágenes, CSS, código PHP y/o plantillas) que determinan el estilo y la disposición del sitio. El proyecto Drupal distingue entre temas _[core](./glossary.md#glossary-drupal-core)_ y _[contributed](./glossary.md#glossary-contributed)_. Consultar [understanding-themes](./understanding-themes.md) para más información.

## UI { #glossary-ui }

Acrónimo de [_User Interface_](./glossary.md#glossary-user-interface).

## Update { #glossary-update }

Una versión más reciente del software de su sitio, ya sea del [Drupal core](./glossary.md#glossary-drupal-core) o de un [module](./glossary.md#glossary-module) o [theme](./glossary.md#glossary-theme). Véase también [Security update](./glossary.md#glossary-security-update). Consultar [security-concept](./security-concept.md) para más información.

## URL { #glossary-url }

La dirección única de una página web en la web. Por ejemplo, https://example.com/node/7. Consultar [content-paths](./content-paths.md) para más información.

## Usuario { #glossary-user }

Persona que interactúa con el sitio, ya sea con la sesión iniciada o de forma [anonymous](./glossary.md#glossary-anonymous). Consultar [user-concept](./user-concept.md) para más información.

## User interface { #glossary-user-interface }

El texto, los estilos y las imágenes que son visibles en un sitio, separados lógicamente en la interfaz de usuario para los visitantes del sitio y la interfaz de usuario administrativa.

## User one (User 1) { #glossary-user-one }

La cuenta de [user](./glossary.md#glossary-user) inicial que se crea cuando [instala](./glossary.md#glossary-installing) el sitio (cuyo número de ID es 1). Automáticamente tiene todos los [permissions](./glossary.md#glossary-permission), aunque no se le asigne un [role](./glossary.md#glossary-role) administrativo. Consultar [user-admin-account](./user-admin-account.md) para más información.

## Version Control System { #glossary-vcs }

Software que guarda copias de los archivos y el historial de revisiones en un [repository](./glossary.md#glossary-repository) y le permite añadir, eliminar y actualizar archivos. Consultar [install-tools](./install-tools.md) para más información.

## Vista { #glossary-view }

Listado con formato de datos; normalmente, los datos provienen de [entities](./glossary.md#glossary-entity) de [content](./glossary.md#glossary-content). Por ejemplo, en un sitio de mercado de agricultores, podría crear un [content item](./glossary.md#glossary-content-item) para cada proveedor. Después podría crear una vista que genere una página de listado que muestre una imagen en miniatura y una descripción corta de cada proveedor, con un enlace al content item de la página completa. Con los mismos datos, también podría crear una vista que genere un bloque de proveedores nuevos, que mostraría información de los proveedores añadidos más recientemente. Consultar [planning-modular](./planning-modular.md) para más información.

## View mode { #glossary-view-mode }

Conjunto de [configuration](./glossary.md#glossary-configuration) de [field formatter](./glossary.md#glossary-field-formatter) para todos los [fields](./glossary.md#glossary-field) de una [entity](./glossary.md#glossary-entity) de [content](./glossary.md#glossary-content), algunos de los cuales pueden estar ocultos. Cada [entity subtype](./glossary.md#glossary-entity-subtype) puede tener uno o varios modos de visualización definidos; por ejemplo, los [content types](./glossary.md#glossary-content-type) normalmente tienen los modos de visualización _Full_ y _Teaser_, donde el modo _Teaser_ muestra menos campos o campos recortados. Consultar [structure-view-modes](./structure-view-modes.md) para más información.

## Vocabulario { #glossary-vocabulary }

Grupo de [taxonomy terms](./glossary.md#glossary-taxonomy-term) entre los que elegir al clasificar [content](./glossary.md#glossary-content) de una forma concreta, como la lista de todas las categorías de proveedores de un sitio de mercado de agricultores. Técnicamente, los vocabularios son el [entity subtype](./glossary.md#glossary-entity-subtype) del [entity type](./glossary.md#glossary-entity-type) de término de taxonomía. Consultar [structure-taxonomy](./structure-taxonomy.md) para más información.

## Widget { #glossary-widget }

Consultar [Field widget](./glossary.md#glossary-field-widget).

## Asistente { #glossary-wizard }

Formulario web que le permite rellenar unos pocos valores y crea algo con valores predeterminados razonables en función de los valores que haya elegido. Por ejemplo, hay asistentes para crear [views](./glossary.md#glossary-view) de distintos tipos. Consultar [views-create](./views-create.md) para más información.

## WYSIWYG { #glossary-wysiwyg }

Acrónimo de _What You See is What You Get_ ("lo que ves es lo que obtienes"), que hace referencia a un método de edición de [content](./glossary.md#glossary-content) en el que lo que se ve en la pantalla de edición se asemeja mucho al resultado final. Consultar [structure-text-format-config](./structure-text-format-config.md) para más información.

## Workflow { #glossary-workflow }

Consultar [Editorial Workflow](./glossary.md#glossary-editorial-workflow).

## XSS { #glossary-xss }

Acrónimo de [Cross Site Scripting](./glossary.md#glossary-cross-site-scripting).
