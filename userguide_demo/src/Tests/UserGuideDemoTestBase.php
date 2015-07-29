<?php

/**
 * @file
 * Contains \Drupal\search\Tests\UserGuideDemoTestBase.
 */

namespace Drupal\userguide_demo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Base class for tests that build demo sites for User Guide and screenshots.
 *
 * See README.txt file in the module directory for more information about
 * making screenshots.
 *
 * To make a class for a new language:
 * - Extend this class.
 * - Override the $installLanguage and $demoInput member variables, translating
 *   the input into the target language.
 * - Add a method:
 *   @code
 *   public function testBuildSite() {
 *     $this->makeDemoSite();
 *   }
 *   @endcode
 */
abstract class UserGuideDemoTestBase extends WebTestBase {

  /**
   * The language to install in.
   *
   * @var string
   */
  protected $installLanguage = 'en';

  /**
   * Strings and other information to input into the demo site.
   *
   * @var array
   */
  protected $demoInput = array(
    'site_name' => 'Anytown Farmers Market',
    'site_slogan' => 'Farm Fresh Food',
    'site_mail' => 'info@example.com',
  );

  protected $profile = 'standard';

  // Set $strictConfigSchema to FALSE due to issue
  // https://www.drupal.org/node/2541800, which makes the foreign language
  // install fail with strict config checking in the standard profile.
  protected $strictConfigSchema = FALSE;

  /**
   * Sets up for an install in the specified language.
   *
   * This is an override of WebTestBase::installParameters(). See that for
   * full documentation.
   */
  protected function installParameters() {
    $params = parent::installParameters();
    if ($this->installLanguage != 'en') {
      $params['parameters']['langcode'] = $this->installLanguage;
      $params['download_translation'] = TRUE;
    }
    return $params;
  }

  /**
   * Counter for screenshot output, separate from regular verbose IDs.
   */
  protected $screenshotId = 0;

  /**
   * Makes the demo site.
   */
  public function makeDemoSite() {
    $this->drupalLogin($this->rootUser);

    // Topic: config-basic - Edit basic site information.
    $this->drupalGet('admin/config/system/site-information');
    $this->setUpScreenShot('config-basic-test1.png', array(550, 275, 30, 200));

    $this->drupalPostForm(NULL, array(
        'site_name' => $this->demoInput['site_name'],
        'site_slogan' => $this->demoInput['site_slogan'],
        'site_mail' => $this->demoInput['site_mail'],
      ), t('Save configuration'));
    // In this case, we want the screen shot made after we have entered the
    // information, because for a normal user, this information would have
    // been set up during the install.
    $this->setUpScreenShot('config-basic-test2.png', array(550, 275, 30, 200), 'admin/config/system/site-information');
  }

  /**
   * Makes clean screenshot output, and adds a note afterwards.
   *
   * Note: Unlike drupalGet(), meta refresh is not obeyed, and unlike verbose(),
   * it always makes these files.
   *
   * @param string $file
   *   Name of the screen shot file.
   * @param int[] $geometry
   *   Geometry of the screen shot, in pixels: width, height, and offset
   *   x and y.
   * @param \Drupal\Core\Url|string $path
   *   (optional) Drupal path or URL to make a screen shot of. Omit to keep
   *   the current page.
   * @param $options
   *   (optional) Options to be forwarded to the url generator.
   * @param $headers
   *   (optional) An array containing additional HTTP request headers, each
   *   formatted as "name: value".
   */
  protected function setUpScreenShot($file, $geometry, $path = '', $options = array(), $headers = array()) {
    if ($path) {
      // This is the line from WebTestBase::drupalGet() that does the URL
      // request. We don't want the stuff at the top of the screen, just a
      // clean output.
      $output = $this->curlExec(array(CURLOPT_HTTPGET => TRUE, CURLOPT_URL => $this->buildUrl($path, $options), CURLOPT_NOBODY => FALSE, CURLOPT_HTTPHEADER => $headers));
    }
    else {
      $output = $this->getRawContent();
    }

    // This is like TestBase::verbose() but just the bare HTML output, and
    // with a separate file counter so it doesn't interfere.
    $screenshot_filename =  $this->verboseClassName . '-screenshot-' . $this->screenshotId . '-' . $this->testId . '.html';
    if (file_put_contents($this->verboseDirectory . '/' . $screenshot_filename, $output)) {
      $url = $this->verboseDirectoryUrl . '/' . $screenshot_filename;
      $link = '<a href="' . $url . '" target="_blank">Screen shot output</a>';
      $this->error($link, 'User notice');
    }
    $this->screenshotId++;
    $this->pass('SCREENSHOT: ' . $file . ' ' . implode(' ', $geometry) . ' ' . $url);
  }

}
