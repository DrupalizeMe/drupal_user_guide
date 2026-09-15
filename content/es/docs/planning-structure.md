---
title: "Planificar la estructura de su contenido"
description: "Cómo planificar una estructura de contenido que asigna tipos de entidad de contenido a contenido específico del sitio web."
id: "planning-structure"
translation_key: "planning-structure"
source_locale: "es"
---
## Objetivo { #planning-structure }

Hacer un plan para la estructura de contenido del sitio (qué tipo y subtipo de
entidad usar para cada contenido) y qué páginas contendrán listados de
contenido.
## Conocimientos previos

* [planning-data-types](./planning-data-types.md)
* [planning-modular](./planning-modular.md)
* [preface-scenario](./preface-scenario.md)
## Pasos

1. Haga una lluvia de ideas sobre qué contenido debe contener su sitio, que
    podría incluir contenido que los visitantes estarían buscando, así como
    contenido que usted quiere mostrarles. El resultado podría ser la descripción
    de [preface-scenario](./preface-scenario.md).
1. Para cada elemento de contenido identificado, decida qué tipo de entidad de
    contenido encajaría mejor. Al hacerlo, tendrá que considerar dónde y cómo se
    usará y editará el contenido en el sitio. Por ejemplo, en el escenario del
    sitio del mercado de agricultores, quizá quiera mostrar el horario y la
    ubicación del mercado en la barra lateral de cada página. Para ese contenido,
    un único bloque personalizado tiene sentido. Como otro ejemplo, puede decidir
    que las páginas que muestran información sobre cada vendor sean elementos de
    contenido gestionados por el módulo del núcleo Node, porque quiere que los
    vendors puedan editar sus propias fichas. El sistema de permisos del módulo del
    núcleo Node se lo permite hacer fácilmente.
    Estas decisiones no siempre tienen necesariamente una única respuesta correcta;
    por ejemplo, podría decidir que las páginas de vendors fueran perfiles de
    usuario en lugar de elementos de contenido, pero si lo hiciera el contenido
    quedaría vinculado a una cuenta de usuario concreta y no sería tan fácil
    cambiar más adelante la propiedad de una página de vendor a otra cuenta de
    usuario.
1. Dentro de cada tipo de entidad de contenido que haya identificado, decida qué
    división en subtipos de entidad tendría sentido. Por ejemplo, en el ejemplo del
    sitio del mercado de agricultores, probablemente decidiría que, bajo el tipo de
    entidad Content item, debería haber un tipo de contenido para las páginas
    básicas (Inicio y Acerca de), uno para las páginas de vendors y otro para las
    páginas de recetas.
1. Para cada subtipo de entidad que haya decidido, decida qué campos son
    necesarios. Por ejemplo, el tipo de contenido Vendor podría necesitar campos
    para el nombre del vendor, la URL de la página web, la imagen y la descripción.
1. Decida qué listados de entidades son necesarios, que podrían ser páginas
    enteras o áreas más pequeñas de la página. Para cada listado, tendrá que
    determinar qué entidades deben listarse. Después tendrá que decidir en qué
    orden y con qué opciones de filtrado deben mostrarse; por ejemplo, quizá quiera
    dar al visitante del sitio la opción de buscar por palabra clave, de filtrar el
    listado hasta un subconjunto o de ordenarlo. También tendrá que decidir qué
    información de las entidades debe mostrarse, lo que podría añadir elementos a la
    lista de campos que determinó en el paso anterior. El sitio del mercado de
    agricultores, por ejemplo, necesita una página de listado de recetas que liste
    elementos de contenido de tipo Recipe, con la posibilidad de filtrar por
    ingredientes, lo que significa que el tipo de contenido Recipe necesita un
    campo Ingredients.
1. Para cada campo identificado en cada subtipo de entidad, identifique qué tipo
    de datos debe contener (como texto sin formato, texto con formato, una fecha,
    un archivo de imagen, etc.) y cuántos valores deben permitirse. La mayoría de
    los campos son de un solo valor, pero, por ejemplo, una receta debería permitir
    varios valores en su campo Ingredients.
1. Considere qué campos serían mejores como referencias a entidades de término
    de taxonomía: campos cuyos valores deberían elegirse de una lista de valores
    permitidos. Los valores permitidos que se espera que cambien y crezcan con el
    tiempo son buenos candidatos. Un ejemplo es el campo Ingredients del tipo de
    contenido Recipe.
1. Considere qué campos deberían hacer referencia a otras entidades de
    contenido. Un ejemplo: dado que los vendors enviarán recetas, se necesitará un
    campo en el tipo de contenido Recipe que haga referencia al elemento de
    contenido Vendor del vendor que envió la receta.

    A continuación se muestra un ejemplo de la estructura de contenido resultante
    para el sitio de ejemplo del escenario del mercado de agricultores:

    <table>
      <thead>
        <tr>
          <th>Tipo de entidad</th>
          <th>Subtipo de entidad</th>
          <th>Ejemplos</th>
          <th>Campos</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Content item</td>
          <td>Basic page</td>
          <td>Página de inicio, página Acerca de</td>
          <td>Título, cuerpo de la página</td>
        </tr>
        <tr>
          <td>Content item</td>
          <td>Vendor</td>
          <td>Una página para cada vendor del mercado</td>
          <td></td>
        </tr>
        <tr>
          <td>Content item</td>
          <td>Recipe</td>
          <td>Una página para cada receta enviada</td>
          <td></td>
        </tr>
        <tr>
          <td>Custom block</td>
          <td>(genérico)</td>
          <td>Aviso de copyright para el pie de página, horario y ubicación para la barra lateral</td>
          <td>Sin campos especiales</td>
          <td></td>
        </tr>
        <tr>
          <td>Taxonomy term</td>
          <td>Ingredients</td>
          <td>Zanahorias, tomates y otros ingredientes de recetas</td>
          <td></td>
        </tr>
        <tr>
          <td>Contact form</td>
          <td>(genérico)</td>
          <td>Formulario de contacto genérico</td>
          <td>Nombre, correo, asunto, mensaje</td>
        </tr>
        <tr>
          <td>User profile</td>
          <td>(ninguno)</td>
          <td>No se mostrará en el sitio</td>
          <td>Sin campos especiales</td>
        </tr>
      </tbody>
    </table>

    Y estos son los listados que necesita el sitio:

    <table>
      <thead>
        <tr>
          <th>Página o área de página</th>
          <th>Tipo y subtipo de entidad</th>
          <th>Filtro/orden/paginación</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Página de vendors</td>
          <td>Elementos de contenido Vendor</td>
          <td>Todos los vendors, orden alfabético, paginado</td>
          <td></td>
        </tr>
        <tr>
          <td>Página de recetas</td>
          <td>Elementos de contenido Recipe</td>
          <td>Filtrar por ingredientes, orden alfabético, paginado</td>
          <td>Imagen, nombre de la receta</td>
          <td></td>
        </tr>
        <tr>
          <td>Barra lateral de recetas recientes</td>
          <td>Elementos de contenido Recipe</td>
          <td>Listar las 5 más recientes</td>
          <td></td>
        </tr>
      </tbody>
    </table>
## Ampliar conocimiento

* [structure-content-type](./structure-content-type.md)
* [structure-fields](./structure-fields.md)
* [structure-taxonomy-setup](./structure-taxonomy-setup.md)
## Temas relacionados

[structure-taxonomy](./structure-taxonomy.md)
## Vídeos

<div class="embedded-video">
  <iframe src="https://www.youtube-nocookie.com/embed/CaNt4DEeIgU" title="Planning Your Content Structure" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen referrerpolicy="strict-origin-when-cross-origin"></iframe>
</div>

*Atribuciones*

Escrito y editado por [Jennifer Hodgdon](https://www.drupal.org/u/jhodgdon)
y [Grant Dunham](https://www.drupal.org/u/gdunham).

Traducido por [Juan Santovenia](https://www.drupal.org/u/juancasantito).
