<?php

/**
 * @file
 * Contains \Drupal\search\Tests\UserGuideDemoTestBase.
 */

namespace Drupal\userguide_demo\Tests;

use Drupal\Core\Site\Settings;
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

  /**
   * For our demo site, start with the standard profile install.
   */
  protected $profile = 'standard';

  /**
   * Add this module to the modules list, so we can get the assets directory.
   */
  public static $modules = array('userguide_demo', 'update');

  /**
   * We need verbose logging to be on.
   */
  public $verbose = TRUE;

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
   * Builds the entire demo site and makes screenshots.
   *
   * Note that the method name starts with "test" so that it will be detected
   * as a "test" to run.
   */
  public function testBuildDemoSite() {

    // Figure out where the assets directory is.
    $dir_parts = explode('/', drupal_get_path('module', 'userguide_demo'));
    array_pop($dir_parts);
    $assets_directory = implode('/', $dir_parts) . '/assets/';

    // Set up a red border CSS style.
    $red_border = '2px solid #e62600;';

    $this->drupalLogin($this->rootUser);

    // Topic: config-basic - Edit basic site information.
    // @todo Replace with actual screen shots of this topic.
    $this->drupalGet('admin/config/system/site-information');
    $this->setUpScreenShot('config-basic-test1.png', array(550, 275, 30, 200));

    $this->drupalPostForm(NULL, array(
        'site_name' => $this->demoInput['site_name'],
        'site_slogan' => $this->demoInput['site_slogan'],
        'site_mail' => $this->demoInput['site_mail'],
      ), t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));

    // In this case, we want the screen shot made after we have entered the
    // information, because for a normal user, this information would have
    // been set up during the install.
    $this->drupalGet('admin/config/system/site-information');
    $this->setUpScreenShot('config-basic-test2.png', array(550, 275, 30, 200));

    // Topic: config-uninstall - Uninstall unused modules.
    $this->drupalGet('admin/modules/uninstall');
    // For this screen shot, scroll to the bottom and make sure the
    // Search checkbox is checked, using JavaScript.
    $this->setUpScreenShot('config-uninstall_searchModUninstall.png', array(550, 275, 30, 200), 'onLoad="window.scroll(0,2000); jQuery(\'#edit-uninstall-search\').attr(\'checked\', 1);"');
    $this->drupalPostForm(NULL, array(
        'uninstall[search]' => TRUE,
      ), t('Uninstall'));
    $this->assertText(t('Would you like to continue with uninstalling the above?'));
    $this->assertText('Search');
    $this->setUpScreenShot('config-uninstall_confirmUninstall.png', array(550, 275, 30, 200));
    $this->drupalPostForm(NULL, array(), t('Uninstall'));
    $this->assertText(t('The selected modules have been uninstalled.'));

    // Follow-on task: also uninstall Comment and History. No screen shots.
    // Before removing Comment, we have to remove the Comment field.
    $this->drupalPostForm('admin/structure/types/manage/article/fields/node.article.comment/delete', array(), t('Delete'));
    $this->drupalPostForm('admin/structure/comment/manage/comment/delete', array(), t('Delete'));
    $this->drupalGet('admin/modules/uninstall');
    $this->drupalPostForm(NULL, array(
        'uninstall[comment]' => TRUE,
        'uninstall[history]' => TRUE,
      ), t('Uninstall'));
    $this->assertText(t('Would you like to continue with uninstalling the above?'));
    $this->assertText('History');
    $this->assertText('Comment');
    $this->drupalPostForm(NULL, array(), t('Uninstall'));
    $this->assertText(t('The selected modules have been uninstalled.'));

    // Topic config-user: Configuring user account settings.
    // @todo Screen shots not defined yet.
    $this->drupalGet('admin/config/people/accounts');
    $this->drupalPostForm(NULL, array(
        'user_register' => 'admin_only',
      ),
      t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));

    // Topic config-theme: Configuring the theme.
    $this->drupalGet('admin/appearance');
    $this->assertText('Bartik');
    $this->assertLink(t('Settings'));
    $this->setUpScreenShot('config-theme_bartik_settings.png', array(550, 275, 30, 200));
    $this->drupalGet('admin/appearance/settings/bartik');
    $this->drupalPostForm(NULL, array(
        'scheme' => '',
        'palette[top]' => '#7db84a',
        'palette[bottom]' => '#2a3524',
        'palette[bg]' => '#ffffff',
        'palette[sidebar]' => '#f8bc65',
        'palette[sidebarborders]' => '#e96b3c',
        'palette[footer]' => '#2a3524',
        'palette[titleslogan]' => '#ffffff',
        'palette[text]' => '#000000',
        'palette[link]' => '#2a3524',
      ), t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));

    $this->drupalGet('admin/appearance/settings/bartik');
    $this->assertText(t('Color scheme'));
    $this->assertText(t('Header background top'));
    $this->setUpScreenShot('config-theme_color_scheme.png', array(550, 275, 30, 200));
    // For this screen shot, scroll down so the Preview is in view.
    $this->assertText(t('Preview'));
    $this->setUpScreenShot('config-theme_color_scheme_preview.png', array(550, 275, 30, 200), 'onLoad="window.scroll(0,600);"');

    $this->drupalGet('admin/appearance/settings');
    $this->assertText(t('Use the default logo supplied by the theme'));
    $this->assertText(t('Upload logo image'));
    $this->setUpScreenShot('config-theme_logo_upload.png', array(550, 275, 30, 200), 'onLoad="jQuery(\'#edit-default-logo\').click(); jQuery(\'#edit-logo-upload\').css(\'border\', \'' . $red_border . '\');"');

    $this->drupalPostForm(NULL, array(
        'default_logo' => FALSE,
        'logo_path' => $assets_directory . 'AnytownFarmersMarket.png',
      ), t('Save configuration'));
    $this->assertText(t('The configuration options have been saved.'));
    $this->assertRaw($assets_directory);

    $this->drupalGet('<front>');
    $this->setUpScreenShot('config-theme_final_result.png', array(550, 275, 30, 200));

  }

  /**
   * Clears the Drupal cache.
   */
  protected function clearCache() {
    $this->drupalPostForm('admin/config/development/performance', array(), t('Clear all caches'));
  }

  /**
   * Makes clean screenshot output, and adds a note afterwards.
   *
   * The screen shot is of the current page.
   *
   * @param string $file
   *   Name of the screen shot file.
   * @param int[] $geometry
   *   Geometry of the screen shot, in pixels: width, height, and offset
   *   x and y.
   * @param string $body_addition
   *   Additional text to add into the HTML body tag. Example:
   *   'onLoad="window.scroll(0,500);"'.
   */
  protected function setUpScreenShot($file, $geometry, $body_addition = '') {
    $output = str_replace('<body ', '<body ' . $body_addition . ' ', $this->getRawContent());

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

  /**
   * Prepares site settings and services before installation.
   *
   * Overrides WebTestBase::prepareSettings() so that we can store public
   * files in a directory that will not get removed until the verbose output
   * is gone.
   */
  protected function prepareSettings() {
    parent::prepareSettings();

    $this->publicFilesDirectory = $this->verboseDirectory . '/' . $this->databasePrefix;
    $settings['settings']['file_public_path'] = (object) [
      'value' => $this->publicFilesDirectory,
      'required' => TRUE,
    ];
    $this->writeSettings($settings);
    Settings::initialize(DRUPAL_ROOT, $this->siteDirectory, $this->classLoader);
  }

}
