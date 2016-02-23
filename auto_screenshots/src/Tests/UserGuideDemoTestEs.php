<?php

namespace Drupal\auto_screenshots\Tests;

/**
 * Builds the demo site for the User Guide, Spanish, with screenshots.
 *
 * See README.txt file in the module directory for more information about
 * making screenshots.
 *
 * @group UserGuide
 */
class UserGuideDemoTestEs extends UserGuideDemoTestBase {

  /**
   * Strings and other information to input into the demo site.
   *
   * @var array
   */
  protected $demoInput = array(
    'first_langcode' => 'es',
    'second_langcode' => 'en',

    // @todo These need to be actually translated by a real Spanish speaker!
    // Current values are for a proof of concept.
    'site_name' => 'Mercado de Fincas de Pueblo',
    'site_slogan' => 'Comida Fresca de Finca',
    'site_mail' => 'info@example.com',

    'vendor_type_name' => 'Vendedor',
    'vendor_type_description' => 'Information sobre vendedor',
    'vendor_type_title_label' => 'Nombre del vendedor',

    'recipe_type_name' => 'Receta',
    'recipe_type_description' => 'Receta de un vendedor',
    'recipe_type_title_label' => 'Nombre de la receta',

    // @todo When the Base test is finalized, add the rest of the values
    // here. Until then, this test will not run to completion.
  );

}
