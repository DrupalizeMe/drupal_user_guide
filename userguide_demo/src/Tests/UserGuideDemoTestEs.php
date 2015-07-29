<?php

/**
 * @file
 * Contains \Drupal\search\Tests\UserGuideDemoTestEs.
 */

namespace Drupal\userguide_demo\Tests;

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
   * The language to install in.
   *
   * @var string
   */
  protected $installLanguage = 'es';

  /**
   * Strings and other information to input into the demo site.
   *
   * @var array
   */
  protected $demoInput = array(
    // Note: These need to be actually translated by a real Spanish speaker!
    'site_name' => 'Mercado de Fincas de Pueblo',
    'site_slogan' => 'Comida Fresca de Finca',
    'site_mail' => 'info@example.com',
  );

  /**
   * Makes the demo site.
   */
  public function testBuildSite() {
    $this->makeDemoSite();
  }

}
