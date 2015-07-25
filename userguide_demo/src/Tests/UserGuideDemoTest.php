<?php

/**
 * @file
 * Contains \Drupal\search\Tests\UserGuideDemoTest.
 */

namespace Drupal\userguide_demo\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Builds the demo site for the User Guide, with screenshots.
 *
 * See README.txt file in the module directory for more information about
 * making screenshots.
 *
 * @group UserGuide
 */
class UserGuideDemoTest extends WebTestBase {

  protected $profile = 'standard';

  /**
   * Counter for screenshot output, separate from regular verbose IDs.
   */
  protected $screenshotId = 0;

  /**
   * Makes the demo site.
   */
  public function testMakeDemoSite() {
    $this->drupalLogin($this->rootUser);

    // Topic: config-basic - Edit basic site information.
    $this->drupalGet('admin/config/system/site-information');
    $this->setUpScreenShot('config-basic-test1.png', array(550, 275, 30, 200));

    $this->drupalPostForm(NULL, array(
        'site_name' => t('Anytown Farmers Market'),
        'site_slogan' => t('Farm Fresh Food'),
        'site_mail' => t('info@example.com'),
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
