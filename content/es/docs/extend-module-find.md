---
title: "Encontrar módulos"
description: "Cómo buscar y evaluar módulos en Drupal.org."
id: "extend-module-find"
translation_key: "extend-module-find"
source_locale: "es"
---
## Objetivo { #extend-module-find }

Encontrar y evaluar módulos en _Drupal.org_.
## Conocimientos previos

* [understanding-drupal](./understanding-drupal.md)
* [understanding-modules](./understanding-modules.md)
## Pasos

1. Vaya a [_Drupal.org_](https://www.drupal.org) y navegue a _Download &
    Extend_ > _Modules_ (https://www.drupal.org/project/project_module).
1. Filtre su búsqueda usando las categorías de la página de búsqueda de módulos.
    Rellene los campos como se muestra a continuación.
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
          <td>Maintenance status</td>
          <td>¿Con qué nivel de actividad debería mantenerse el módulo?</td>
          <td>Actively maintained</td>
        </tr>
        <tr>
          <td>Development status</td>
          <td>¿Qué tipo de desarrollo debería tener el módulo?</td>
          <td>Any</td>
        </tr>
        <tr>
          <td>Module categories</td>
          <td>El área temática del módulo.</td>
          <td>Administration</td>
        </tr>
        <tr>
          <td>Core compatibility</td>
          <td>La versión del software del núcleo con la que es compatible el módulo.</td>
          <td>9.x</td>
        </tr>
        <tr>
          <td>Status</td>
          <td>Estado del proyecto: los _Sandbox projects_ son proyectos experimentales. Los _Full projects_ ya han pasado por un proceso de aprobación, pero aún pueden estar en desarrollo.</td>
          <td>Full projects</td>
          <td>Stability</td>
          <td>Si la persona que mantiene el proyecto ha creado una versión lista para producción.</td>
        </tr>
        <tr>
          <td>Has a supported stable release</td>
          <td>Security advisory coverage</td>
          <td>Si la persona que mantiene el proyecto ha aceptado seguir los procedimientos</td>
        </tr>
        <tr>
          <td>Search modules</td>
          <td>Busque _Admin Toolbar_, un módulo que se tratará en detalle más adelante. Como alternativa, puede dejar el campo en blanco si no está seguro de qué módulo buscar.</td>
          <td>Admin Toolbar</td>
        </tr>
        <tr>
          <td>Sort by</td>
          <td>Ordene los resultados de la búsqueda por criterios como _Most installed_ (módulos populares que usan muchos sitios) o _Last release_ (fecha de la última versión publicada).</td>
          <td>Most installed</td>
          <td></td>
        </tr>
      </tbody>
    </table>

    ![Filters on the module search page on _Drupal.org_](/images/extend-module-find_module_finder.webp)

1. Haga clic en _Search_. Aparecerán los resultados de la búsqueda.
    ![Module search results page on _Drupal.org_](/images/extend-module-find_search_results.webp)
1. Para evaluar un módulo con más detalle, haga clic en su título en la lista de
    resultados de la búsqueda para visitar la página de su proyecto.

    Algunos aspectos a los que prestar atención al evaluar módulos:

    * Project description: la descripción del módulo en la página de su proyecto
    debería ser clara y útil. Debería hacerse una idea de sus funcionalidades y
    requisitos.
    * Project information: puede haber avisos en esta zona de la página, por
    ejemplo si un módulo ya no se desarrolla o no está cubierto por la política de
    avisos de seguridad.
    * Project information > Reported installs, downloads: puede ver cuántas personas
    lo han descargado y cuántos sitios usan el módulo. Si solo lo usan unos pocos
    sitios, podría ser una solución específica que no mucha gente necesita, o podría
    ser una señal de alerta de que usted tampoco debería usarlo.
    * Maintainers: ¿cuándo fue el último commit (la última vez que alguien
    actualizó algo del módulo) o la última versión? Si el proyecto tiene pocas
    incidencias abiertas, que haya pasado mucho tiempo desde los commits o
    versiones puede ser aceptable, pero si tiene muchas incidencias abiertas y no
    hay commits ni versiones, sería una pista de que podría estar abandonado.
    * Issues: compruebe si hay incidencias abiertas, posibles problemas con el
    módulo. Consulte las Statistics para ver con qué frecuencia se responde a las
    incidencias.
    * Documentation, Resources: compruebe si el módulo tiene documentación o un
    archivo README que pueda ayudarle a instalarlo, configurarlo, explorarlo y
    probarlo.
    ![Information on the project page to look for when evaluating a module](/images/extend-module-find_project_info.webp)
## Ampliar conocimiento

[extend-module-install](./extend-module-install.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/G-XUuSj9xYA" title="Finding Modules" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito por [Diána Lakatos](https://www.drupal.org/u/dianalakatos) en
[Pronovix](https://pronovix.com//).

Traducido por [Isaura Galafate](https://www.drupal.org/u/isaura).
