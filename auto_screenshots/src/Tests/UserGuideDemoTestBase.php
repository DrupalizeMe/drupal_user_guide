<?php

namespace Drupal\auto_screenshots\Tests;

use Drupal\Component\Render\FormattableMarkup;
use Drupal\Core\Site\Settings;
use Drupal\Core\Database\Database;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;
use Drupal\Core\Url;
use Drupal\simpletest\WebTestBase;
use Drupal\user\Entity\User;
use BackupMigrate\Core\Config\Config;
use BackupMigrate\Core\Destination\DirectoryDestination;
use BackupMigrate\Core\File\TempFileAdapter;
use BackupMigrate\Core\File\TempFileManager;
use BackupMigrate\Core\Filter\CompressionFilter;
use BackupMigrate\Core\Filter\DBExcludeFilter;
use BackupMigrate\Core\Filter\FileExcludeFilter;
use BackupMigrate\Core\Filter\FileNamer;
use BackupMigrate\Core\Main\BackupMigrate;
use BackupMigrate\Core\Service\TarArchiveReader;
use BackupMigrate\Core\Service\TarArchiveWriter;
use BackupMigrate\Core\Source\FileDirectorySource;
use BackupMigrate\Core\Source\MySQLiSource;

require __DIR__ . '/../../vendor/autoload.php';

/**
 * Base class for tests that automate screenshots for the User Guide.
 *
 * To make a class for a new language:
 * - Extend this class.
 * - Override the $demoInput member variable, translating the input into the
 *   target language. Note that most of the text should not contain
 *   ' characters, as this will result in an error when generating the screen
 *   shots. If you have a spreadsheet with the array keys for $demoInput in
 *   column A, and the translated text in column C, you can use this formula
 *   to generate the array in row 2 (and then copy to the other rows):
 *   =IF(A2 <> "","'"&A2&"' => '"&C2&"',","")
 *   Then just copy this column of output into the $deomInput array in your
 *   new class.
 * - Override the $runList member variable to run the sections of interest.
 *
 * See README.txt file in the module directory for instructions for making
 * screenshot images from this test output.
 *
 * This script can also create/restore backups, to allow you to run only some
 * portion of the screenshots. See the documentation for the $runList member
 * variable for details.
 */
abstract class UserGuideDemoTestBase extends WebTestBase {

  /**
   * Which Drupal Core software version to use for the downloading screenshots.
   */
  protected $latestRelease = '8.1.8';

  /**
   * Strings and other information to input into the demo site.
   *
   * This information is translated into other languages in the
   * specific-language test classes.
   *
   * @var array
   */
  protected $demoInput = [
    // Default and second languages for the site.
    'first_langcode' => 'en',
    'second_langcode' => 'es',

    // Basic site information.
    'site_name' => 'Anytown Farmers Market',
    'site_slogan' => 'Farm Fresh Food',
    'site_mail' => 'info@example.com',
    'site_default_country' => 'US',
    'date_default_timezone' => 'America/Los_Angeles',

    // General note about machine names: All machine names must contain only
    // lower-case letters, numbers, and underscores. They should be lower-case,
    // ASCII version of the human-readable names from the line above. In an
    // interactive environment, these names will be created automatically, but
    // in this test, we have to supply them manually. Also be careful about
    // the directory names for image uploads, and URL paths.

    // Home page content item.
    'home_title' => 'Home',
    'home_body' => "<p>Welcome to City Market - your neighborhood farmers market!</p><p>Open: Sundays, 9 AM to 2 PM, April to September</p><p>Location: Parking lot of Trust Bank, 1st & Union, downtown</p>",
    'home_summary' => 'Opening times and location of City Market',
    'home_path' => '/home',
    'home_revision_log_message' => 'Updated opening hours',

    // Translation of Home page content item into second language.
    'home_title_translated' => 'Página principal',
    'home_body_translated' => "<p>Bienvenido al mercado de la ciudad - ¡el mercado de agricultores de tu barrio!</p></p>Horario: Domingos de 9:00 a 14:00. Desde Abril a Septiembre Lugar: parking del Banco Trust número 1. En el centro de la ciudad</p>",
    'home_path_translated' => '/pagina-principal',

    // About page content item.
    'about_title' => 'About',
    'about_body' => "<p>City Market started in April 1990 with five vendors.</p><p>Today, it has 100 vendors and an average of 2000 visitors per day.</p>",
    'about_path' => '/about',
    'about_description' => 'History of the market',

    // Vendor content type settings. Type name and machine name are also
    // used for the Vendor role.
    'vendor_type_name' => 'Vendor',
    'vendor_type_machine_name' => 'vendor',
    'vendor_type_description' => 'Information about a vendor',
    'vendor_type_title_label' => 'Vendor name',
    'vendor_field_url_label' => 'Vendor URL',
    'vendor_field_url_machine_name' => 'vendor_url',
    'vendor_field_image_label' => 'Main image',
    'vendor_field_image_machine_name' => 'main_image',
    'vendor_field_image_directory' => 'vendors',

    // Vendor 1 content item and user account.
    'vendor_1_title' => 'Happy Farm',
    'vendor_1_path' => '/vendors/happy_farm',
    'vendor_1_summary' => 'Happy Farm grows vegetables that you will love.',
    'vendor_1_body' => '<p>Happy Farm grows vegetables that you will love.</p><p>We grow tomatoes, carrots, and beets, as well as a variety of salad greens.</p>',
    'vendor_1_url' => 'http://happyfarm.com',
    'vendor_1_email' => 'happy@example.com',

    // Vendor 2 content item and user account.
    'vendor_2_title' => 'Sweet Honey',
    'vendor_2_path' => '/vendors/sweet_honey',
    'vendor_2_summary' => 'Sweet Honey produces honey in a variety of flavors throughout the year.',
    'vendor_2_body' => '<p>Sweet Honey produces honey in a variety of flavors throughout the year.</p><p>Our varieties include clover, apple blossom, and strawberry.</p>',
    'vendor_2_url' => 'http://sweethoney.com',
    'vendor_2_email' => 'honey@example.com',

    // Recipe content type settings.
    'recipe_type_name' => 'Recipe',
    'recipe_type_machine_name' => 'recipe',
    'recipe_type_description' => 'Recipe submitted by a vendor',
    'recipe_type_title_label' => 'Recipe name',
    'recipe_field_image_directory' => 'recipes',
    'recipe_field_ingredients_label' => 'Ingredients',
    'recipe_field_ingredients_machine_name' => 'ingredients',
    'recipe_field_ingredients_help' => 'Enter ingredients that site visitors might want to search for',
    'recipe_field_submitted_label' => 'Submitted by',
    'recipe_field_submitted_machine_name' => 'submitted_by',
    'recipe_field_submitted_help' => 'Choose the vendor that submitted this recipe',

    // Recipe ingredients terms added.
    'recipe_field_ingredients_term_1' => 'Butter',
    'recipe_field_ingredients_term_2' => 'Eggs',
    'recipe_field_ingredients_term_3' => 'Milk',
    'recipe_field_ingredients_term_4' => 'Carrots',

    // Recipe 1 content item.
    'recipe_1_title' => 'Green Salad',
    'recipe_1_path' => '/recipes/green_salad',
    'recipe_1_body' => 'Chop up your favorite vegetables and put them in a bowl.',
    'recipe_1_ingredients' => 'Carrots, Lettuce, Tomatoes, Cucumbers',

    // Recipe 2 content item.
    'recipe_2_title' => 'Fresh Carrots',
    'recipe_2_path' => '/recipes/carrots',
    'recipe_2_body' => 'Serve multi-colored carrots on a plate for dinner.',
    'recipe_2_ingredients' => 'Carrots',

    // Image style.
    'image_style_label' => 'Extra medium (300x200)',
    'image_style_machine_name' => 'extra_medium_300x200',

    // Hours and location block.
    'hours_block_description' => 'Hours and location block',
    'hours_block_title' => 'Hours and location',
    'hours_block_title_machine_name' => 'hours_location',
    'hours_block_body' => "<p>Open: Sundays, 9 AM to 2 PM, April to September</p><p>Location: Parking lot of Trust Bank, 1st & Union, downtown</p>",

    // Vendors view.
    'vendors_view_title' => 'Vendors',
    'vendors_view_machine_name' => 'vendors',
    'vendors_view_path' => 'vendors',

    // Recipes view.
    'recipes_view_title' => 'Recipes',
    'recipes_view_machine_name' => 'recipes',
    'recipes_view_path' => 'recipes',
    'recipes_view_ingredients_label' => 'Find recipes using...',
    'recipes_view_block_display_name' => 'Recent recipes',
    'recipes_view_block_title' => 'New recipes',

    // Recipes view translated.
    'recipes_view_title_translated' => 'Recetas',
    'recipes_view_submit_button_translated' => 'Applicar',
    'recipes_view_ingredients_label_translated' => 'Encontrar recetas usando...',

  ];

  /**
   * Which chapters to run, and which to save backups for.
   *
   * Each key in this array is the name of a method to run. The values are:
   * - run: Run normally. Assumes previous methods have been run or restored.
   *   This is the default in the base class, for all chapters.
   * - restore: Restore from the previous method's backup, and then run this
   *   method.
   * - backup: Run this method, and create a backup afterwards.
   * - restore_backup: Restore from previous method's backup, then run this
   *   method, then make a backup.
   * - skip: Do nothing.
   *
   * Created backups are stored in a temporary directory inside /tmp on your
   * local machine. There will be lines in the output telling you where they
   * are, saying:
   * "BACKUP MADE TO: ____".
   *
   * After verifying, save the backups for later restoration in the
   * auto_screenshots/backups/LANGUAGE_CODE/CHAPTER_METHOD directories.
   *
   * @var array
   */
  protected $runList = [
    'doPrefaceInstall' => 'run',
    'doBasicConfig' => 'run',
    'doBasicPage' => 'run',
    'doContentStructure' => 'run',
    'doUserAccounts' => 'run',
    'doBlocks' => 'run',
    'doViews' => 'run',
    'doMultilingualSetup' => 'run',
    'doTranslating' => 'run',
    'doExtending' => 'run',
    'doPreventing' => 'run',
    'doSecurity' => 'run',
  ];

  /**
   * For our demo site, start with the standard profile install.
   */
  protected $profile = 'standard';

  /**
   * Modules needed for this test.
   */
  public static $modules = ['update'];

  /**
   * We need verbose logging to be on.
   */
  public $verbose = TRUE;

  /**
   * We don't care about schema checking.
   */
  protected $strictConfigSchema = FALSE;

  /**
   * Counter for screenshot output, separate from regular verbose IDs.
   */
  protected $screenshotId = 0;

  /**
   * The directory where asset files can be found.
   *
   * This is set in the testBuildDemoSite() method.
   */
  protected $assetsDirectory;

  /**
   * The file name for exported translations, if any.
   *
   * @see UserGuideDemoTestBase::exportTranslations()
   */
  protected $translationFilename = '';

  /**
   * Builds the entire demo site and makes screenshots.
   *
   * Note that the method name starts with "test" so that it will be detected
   * as a "test" to run, in the specific-language classes.
   */
  public function testBuildDemoSite() {

    $this->drupalLogin($this->rootUser);

    // Figure out where the assets directory is.
    $dir_parts = explode('/', drupal_get_path('module', 'auto_screenshots'));
    array_pop($dir_parts);
    $this->assetsDirectory = implode('/', $dir_parts) . '/assets/';

    // Run all the desired chapters.
    $backup_write_dir = '/tmp/screenshots_backups/' . $this->getDatabasePrefix();
    $backup_read_dir = drupal_realpath(drupal_get_path('module', 'auto_screenshots') . '/backups/' . $this->demoInput['first_langcode']);
    $previous = '';
    foreach ($this->runList as $method => $op) {
      if (($op == 'restore' || $op == 'restore_backup') && $previous) {
        // Restore the database from the backup of the previous topic.
        $this->restoreBackup($backup_read_dir . '/' . $previous);
      }
      $previous = $method;

      if ($op != 'skip') {
        // Run this topic.
        call_user_func([$this, $method]);
      }

      if ($op == 'backup' || $op == 'restore_backup') {
        // Make a backup of this topic.
        $this->makeBackup($backup_write_dir . '/' . $method);
      }
    }
  }

  /**
   * Makes screenshots for the Preface and Install chapters.
   */
  protected function doPrefaceInstall() {

    // Add the first language, set the default language to that, and delete
    // English, to simulate having installed in a different language. No
    // screen shots for this!
    if ($this->demoInput['first_langcode'] != 'en') {
      // Note that the buttons should still be in English until after
      // the other language is set as the default language.
      // Turn on the language and locale modules.
      $this->drupalGet('admin/modules');
      $this->drupalPostForm(NULL, [
          'modules[Multilingual][language][enable]' => TRUE,
          'modules[Multilingual][locale][enable]' => TRUE,
        ], 'Install');

      // Add the other language.
      $this->drupalPostForm('admin/config/regional/language/add', [
          'predefined_langcode' => $this->demoInput['first_langcode'],
        ], 'Add language');
      // Rebuild the container. Translations are not working without this.
      $this->rebuildContainer();
      drupal_flush_all_caches();
      $this->refreshVariables();

      // Set the new language to default. After this, the UI should be
      // translated.
      $this->drupalPostForm('admin/config/regional/language', [
          'site_default_language' => $this->demoInput['first_langcode'],
        ], 'Save configuration');
      // Delete English.
      $this->drupalPostForm('admin/config/regional/language/delete/en', [], $this->callT('Delete'));
    }

    // Topic: preface-conventions: Conventions of the user guide.
    $this->drupalGet('admin/config');
    // Top navigation bar on any admin page, with Manage menu showing.
    // This same screenshot is also config-overview-toolbar.png in the
    // config-overview topic.
    $this->setUpScreenShot('preface-conventions-top-menu.png', 'onLoad="' . $this->addBorder('#toolbar-bar', '#ffffff') . $this->hideArea('header, .region-breadcrumb, .page-content, .toolbar-toggle-orientation') . $this->setWidth('#toolbar-bar, #toolbar-item-administration-tray', 1100) . 'jQuery(\'*\').css(\'box-shadow\', \'none\');' . $this->setBodyColor() . '"');

    // System section of admin/config page.
    $this->setUpScreenShot('preface-conventions-config-system.png', 'onLoad="' . $this->showOnly('.layout-column:odd .panel:first') . '"');

    // Topic: block-regions - postpone until after theme is configured.

    // Topic: install-prepare - Preparing to install.

    // English-only screenshots.
    if ($this->demoInput['first_langcode'] == 'en') {
      $this->drupalGet('https://www.drupal.org/project/drupal');
      // Recommended releases section of https://www.drupal.org/project/drupal.
      $this->setUpScreenShot('install-prepare-recommended.png', 'onLoad="' . $this->showOnly('#node-3060 .content') . $this->hideArea('.field-name-body') . $this->hideArea('.pane-project-downloads-development') . $this->hideArea('.pane-custom') . $this->hideArea('.pane-project-downloads-other') . $this->hideArea('.pane-download-releases-link') . '"');
      $this->drupalGet('https://www.drupal.org/project/drupal/releases/' . $this->latestRelease);
      // File section of a recent Drupal release download page, such as
      // https://www.drupal.org/project/drupal/releases/8.1.3.
      $this->setUpScreenShot('install-prepare-files.png', 'onLoad="' . $this->showOnly('#page-inner') . $this->hideArea('#page-title-tools, #nav-content, .panel-display .content, .panel-display .footer, .views-field-field-release-file-hash, .views-field-field-release-file-sha1, .views-field-field-release-file-sha256, .pane-custom') . '"');
    }

    // Topic install-run - Running the installer. Skip -- manual screenshots.

  }

  /**
   * Makes screenshots for the Basic Site Configuration chapter.
   */
  protected function doBasicConfig() {

    // Topic: config-overview - Concept: Administrative overview.
    $this->drupalGet('admin/config');
    // Top navigation bar on any admin page, with Manage menu showing.
    // Same as preface-conventions-top-menu.png defined earlier.
    $this->setUpScreenShot('config-overview-toolbar.png', 'onLoad="' . $this->addBorder('#toolbar-bar', '#ffffff') . $this->hideArea('header, .region-breadcrumb, .page-content, .toolbar-toggle-orientation') . $this->setWidth('#toolbar-bar, #toolbar-item-administration-tray', 1100) . 'jQuery(\'*\').css(\'box-shadow\', \'none\');' . $this->setBodyColor() . '"');

    // The vertical orientation navigation screenshot could not be
    // successfully reproduced, unfortunately -- the buttons didn't show up.
    // So config-overview-vertical.png must be done manually.

    // Defer config-overview-pencils.png until after theme is configured.

    // Topic: config-basic - Editing basic site information.
    $this->drupalGet('admin/config/system/site-information');
    $this->drupalPostForm(NULL, [
        'site_name' => $this->demoInput['site_name'],
        'site_slogan' => $this->demoInput['site_slogan'],
        'site_mail' => $this->demoInput['site_mail'],
      ], $this->callT('Save configuration'));

    // In this case, we want the screen shot made after we have entered the
    // information, because for a normal user, this information would have
    // been set up during the install.
    $this->drupalGet('admin/config/system/site-information');
    // Site details section of admin/config/system/site-information.
    $this->setUpScreenShot('config-basic-SiteInfo.png', 'onLoad="' . $this->showOnly('#edit-site-information') . $this->setWidth('#edit-site-information') . '"');

    $this->drupalGet('admin/config/regional/settings');
    $this->drupalPostForm(NULL, [
      'site_default_country' => $this->demoInput['site_default_country'],
      'date_default_timezone' => $this->demoInput['date_default_timezone'],
      'configurable_timezones' => FALSE,
      ], $this->callT('Save configuration'));

    $this->drupalGet('admin/config/regional/settings');
    // Locale and Time Zones sections of admin/config/regional/settings.
    $this->setUpScreenShot('config-basic-TimeZone.png', 'onLoad="' . $this->showOnly('.page-content') . $this->setWidth('#edit-locale') . $this->setWidth('#edit-timezone') . '"');

    // Topic: config-install -- Installing a module.

    // Due to a Core bug, installing a module corrupts translations. So,
    // export them first.
    $this->exportTranslations();

    $this->drupalGet('admin/modules');
    // Top part of Core section of admin/modules, with Activity Tracker checked.
    $this->setUpScreenShot('config-install-check-modules.png', 'onLoad="jQuery(\'#edit-modules-core-tracker-enable\').attr(\'checked\', 1);' . $this->hideArea('#toolbar-administration, header, .region-pre-content, .region-highlighted, .help, .action-links, .region-breadcrumb, #edit-filters, #edit-actions') . $this->hideArea('#edit-modules-core-experimental, #edit-modules-field-types, #edit-modules-multilingual, #edit-modules-other, #edit-modules-administration, #edit-modules-testing, #edit-modules-web-services') . $this->hideArea('#edit-modules-core table tbody tr:gt(4)') . '"');
    $this->drupalPostForm(NULL, [
        'modules[Core][tracker][enable]' => TRUE,
      ], $this->callT('Install'));

    // Due to a core bug, installing a module corrupts translations. So,
    // import the saved translations. Then rebuild the cache/container.
    $this->importTranslations();
    $this->resetAll();
    $this->clearCache();

    // Topic: config-uninstall - Uninstalling unused modules.

    $this->drupalGet('admin/modules/uninstall');
    // Top part of admin/modules/uninstall, with Activity Tracker checked.
    $this->setUpScreenShot('config-uninstall_check-modules.png', 'onLoad="jQuery(\'#edit-uninstall-tracker\').attr(\'checked\', 1); ' . $this->showOnly('table thead, table tbody tr:lt(4)') . '"');
    $this->drupalPostForm(NULL, [
        'uninstall[tracker]' => TRUE,
        'uninstall[search]' => TRUE,
        'uninstall[history]' => TRUE,
      ], $this->callT('Uninstall'));
    // Uninstall confirmation screen, after checking Activity Tracker, History,
    // and Search modules from admin/modules/uninstall.
    $this->setUpScreenShot('config-uninstall_confirmUninstall.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.block-system-main-block') . $this->setWidth('header', 640) . '"');
    $this->drupalPostForm(NULL, [], $this->callT('Uninstall'));

    // Topic config-user: Configuring user account settings.
    $this->drupalGet('admin/config/people/accounts');
    $this->drupalPostForm(NULL, [
        'user_register' => 'admin_only',
      ], $this->callT('Save configuration'));
    // Registration and cancellation section of admin/config/people/accounts.
    $this->setUpScreenShot('config-user_account_reg.png', 'onLoad="window.scroll(0,500);' . $this->showOnly('#edit-registration-cancellation') . $this->setWidth('#edit-registration-cancellation') . '"');
    // Emails section of admin/config/people/accounts.
    $this->setUpScreenShot('config-user_email.png', 'onLoad="window.scroll(0,5000); ' . $this->showOnly('div.form-type-vertical-tabs') . $this->hideArea('div.form-type-vertical-tabs details:gt(0)') . '"');

    // Topic config-theme: Configuring the theme.
    $this->drupalGet('admin/appearance');
    // Bartik section of admin/appearance.
    $this->setUpScreenShot('config-theme_bartik_settings.png', 'onLoad="' . $this->showOnly('.system-themes-list-installed') . $this->hideArea('.theme-admin') . '"');
    $this->drupalGet('admin/appearance/settings/bartik');
    // For this screenshot, before the setting are changed, use JavaScript to
    // scroll down to the bottom, uncheck Use the default logo, and outline
    // the logo upload box.
    // Logo upload section of admin/appearance/settings/bartik.
    $this->setUpScreenShot('config-theme_logo_upload.png', 'onLoad="window.scroll(0,6000); jQuery(\'#edit-default-logo\').click(); ' . $this->addBorder('#edit-logo-upload') . $this->showOnly('#edit-logo') . $this->setWidth('#edit-logo') . '"');

    $this->drupalPostForm(NULL, [
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
        'default_logo' => FALSE,
        'logo_path' => $this->assetsDirectory . 'AnytownFarmersMarket.png',
      ], $this->callT('Save configuration'));

    $this->drupalGet('admin/appearance/settings/bartik');
    // Color settings section of admin/appearance/settings/bartik.
    $this->setUpScreenShot('config-theme_color_scheme.png', 'onLoad="window.scroll(0,200);' . $this->showOnly('#color_scheme_form') . $this->hideArea('h2') . $this->hideArea('.color-preview') . $this->setWidth('#color_scheme_form', 800) . '"');
    // Preview section of admin/appearance/settings/bartik.
    $this->setUpScreenShot('config-theme_color_scheme_preview.png', 'onLoad="window.scroll(0,1000);' . $this->showOnly('.color-preview') . $this->setWidth('#color_scheme_form', 700) . $this->removeScrollbars() . '"');

    $this->drupalGet('<front>');
    // Home page after theme settings are finished.
    $this->setUpScreenShot('config-theme_final_result.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .contextual') . $this->removeScrollbars() . '"');

    // Back to topic: block-regions.
    $this->drupalGet('admin/structure/block/demo/bartik');
    // Bartik theme region preview at admin/structure/block/demo/bartik,
    // after configuring the theme for the Farmers Market scenario.
    $this->setUpScreenShot('block-regions-bartik.png', 'onLoad="' . 'window.scroll(0,5000);' . $this->showOnly('#page-wrapper') . $this->removeScrollbars() . '"');

    // Back to screen shot: config-overview-pencils.jpg.
    $this->drupalGet('<front>');
    // This screen shot has been problematic. The pencil buttons are present,
    // but are turned off with some built-in JavaScript. To turn them back on,
    // there is a race condition. I found that if I forced the page to reload
    // once, it worked more reliably. Also note that unlike some other images,
    // we do want the toolbar in this screenshot, because that shows the toggle
    // button.
    // Home page with pencil icons showing, with configured theme.
    $this->setUpScreenShot('config-overview-pencils.png', 'onLoad="' . $this->reloadOnce() . $this->hideArea('footer') . $this->removeScrollbars() . $this->setBodyColor() . 'jQuery(\'.contextual button\').removeClass(\'visually-hidden\');' . '"');

  }

  /**
   * Makes screenshots for the Basic Page Management chapter.
   */
  protected function doBasicPage() {

    // Topic: content-create - Creating a Content Item
    // Create a Home page.
    $this->drupalGet('node/add/page');
    // General note: Filling in textarea fields -- use .append() in jQuery.
    // However, this does not work with ckeditor fields.
    // Partly filled-in node/add/page, with Summary section open.
    $this->setUpScreenShot('content-create-create-basic-page.png', 'onLoad="jQuery(\'#edit-title-0-value\').val(\'' . $this->demoInput['home_title'] . '\'); jQuery(\'#edit-path-settings, #edit-path-settings .details-wrapper\').show(); jQuery(\'#edit-path-0-alias\').val(\'' . $this->demoInput['home_path'] . '\');' . $this->hideArea('#toolbar-administration') . 'jQuery(\'.link-edit-summary\').click(); jQuery(\'.form-item-body-0-summary\').show();' . 'jQuery(\'#edit-body-0-summary\').append(\'' . $this->demoInput['home_summary'] . '\');' . '"');
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['home_title'],
        'body[0][value]' => $this->demoInput['home_body'],
        'path[0][alias]' => $this->demoInput['home_path'],
      ], $this->callT('Save and publish'));

    // Create About page. No screenshots.
    $this->drupalPostForm('node/add/page', [
        'title[0][value]' => $this->demoInput['about_title'],
        'body[0][value]' => $this->demoInput['about_body'],
        'path[0][alias]' => $this->demoInput['about_path'],
      ], $this->callT('Save and publish'));

    // Topic: content-edit - Editing a content item
    $this->drupalGet('admin/content');
    // Content list on admin/content, with filters above.
    $this->setUpScreenShot('content-edit-admin-content.png', 'onLoad="' . $this->showOnly('.block-system-main-block') . $this->hideArea('.secondary-action') . $this->setBodyColor() . '"');
    $this->drupalGet('node/1/edit');
    // Revision area of the content node edit page.
    $this->setUpScreenShot('content-edit-revision.png', 'onLoad="' . $this->showOnly('#edit-meta') . 'jQuery(\'#edit-revision\').attr(\'checked\', 1); jQuery(\'#edit-revision-log-0-value\').append(\'' . $this->demoInput['home_revision_log_message'] . '\');' . '"');
    // Submit the revision.
    $this->drupalPostForm(NULL, [
        'revision_log[0][value]' => $this->demoInput['home_revision_log_message'],
      ], $this->callT('Save and keep published'));
    // Updated content message.
    $this->setUpScreenShot('content-edit-message.png', 'onLoad="' . $this->showOnly('.highlighted') . $this->setWidth('.highlighted') . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Topic: content-in-place-edit - it does not seem possible to make these
    // screenshots automatically. Skip.

    // Topic: menu-home - Designating a Front Page for your Site
    $this->drupalGet('admin/config/system/site-information');
    $this->drupalPostForm(NULL, [
        'site_frontpage' => $this->demoInput['home_path'],
      ], $this->callT('Save configuration'));
    // Fix the prefix showing the site URL to say example.com.
    // Front page section of admin/config/system/site-information.
    $this->setUpScreenShot('menu-home_new_text_field.png', 'onLoad="' . $this->showOnly('#edit-front-page') . $this->setWidth('#edit-front-page') . 'jQuery(\'.form-item-site-frontpage .field-prefix\').text(\'http://example.com\');' . '"');

    $this->drupalGet('<front>');
    // Site front page after configuring it to point to the Home content item.
    $this->setUpScreenShot('menu-home_final.png', 'onLoad="' . $this->hideArea('#toolbar-administration, footer, .contextual') . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Topic: menu-link-from-content: Adding a page to the navigation.
    $this->drupalGet('admin/content');
    // Content table from admin/content page, with a red border around the Edit
    // button for the About page.
    $this->setUpScreenShot('menu-link-from-content_edit_page.png', 'onLoad="' . $this->showOnly('.views-table') . $this->addBorder('table.views-view-table tbody tr:last .dropbutton-widget') . $this->hideArea('.secondary-action') . '"');

    $this->drupalGet('node/2/edit');
    $this->drupalPostForm(NULL, [
        'menu[enabled]' => TRUE,
        'menu[title]' => $this->demoInput['about_title'],
        'menu[description]' => $this->demoInput['about_description'],
        'menu[weight]' => -2,
      ], $this->callT('Save and keep published'));
    $this->drupalGet('node/2/edit');
    // Menu settings section of content editing page.
    $this->setUpScreenShot('menu-link-from-content.png', 'onLoad="' . $this->showOnly('#edit-menu') . '"');
    $this->drupalGet('<front>');
    // Home page after adding About to the navigation.
    $this->setUpScreenShot('menu-link-from-content-result.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .contextual, footer') . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Topic: menu-reorder - Changing the order of navigation.
    $this->drupalGet('admin/structure/menu');
    // Menu list section of admin/structure/menu, with Edit menu button on Main
    // navigation menu highlighted.
    $this->setUpScreenShot('menu-reorder_menu_titles.png', 'onLoad="' . $this->showOnly('table') . $this->addBorder('tr:eq(3) .dropbutton-widget') . $this->hideArea('.secondary-action') . '"');

    $this->drupalGet('admin/structure/menu/manage/main');
    // Menu links section of admin/structure/menu/manage/main.
    $this->setUpScreenShot('menu-reorder_edit_menu.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, #block-seven-local-actions, .form-type-textfield, .tabledrag-toggle-weight') . $this->setWidth('table') . '"');

    // Simulating dragging on the ordering screen is a bit complex.
    // Menu links section of admin/structure/menu/manage/main, after
    // changing the order.
    $this->setUpScreenShot('menu-reorder_reorder.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, #block-seven-local-actions, .form-type-textfield, .tabledrag-toggle-weight-wrapper') . 'jQuery(\'table\').before(\'<div style=&quot;display: block; width: 600px;&quot; class=&quot;tabledrag-changed-warning messages messages--warning&quot; role=&quot;alert&quot;><abbr class=&quot;warning tabledrag-changed&quot;>*</abbr>' . $this->callT('You have unsaved changes.') . '</div>\');' . 'var r = jQuery(\'table tbody tr:last\').detach(); jQuery(\'table tbody\').prepend(r); jQuery(\'table tbody tr:first\').toggleClass(\'drag-previous\');' . $this->setWidth('table') . '"');

    // Actually figuring out what to submit on the editing page is difficult,
    // because the field name has some config hash in it. So instead, to make
    // the change in the test, go back to the about page and edit the weight
    // there.
    $this->drupalGet('node/2/edit');
    $this->drupalPostForm(NULL, [
        'menu[weight]' => 10,
      ], $this->callT('Save and keep published'));
    $this->drupalGet('<front>');
    // Header section of Home page with reordered menu items.
    $this->setUpScreenShot('menu-reorder_final_order.png', 'onLoad="' . $this->showOnly('header') . $this->hideArea('.visually-hidden, .contextual, .menu-toggle') . $this->setWidth('header') . $this->setBodyColor() . $this->removeScrollbars() . '"');

  }

  /**
   * Makes screenshots for the Content Structure chapter.
   */
  protected function doContentStructure() {
    // Set up some helper variables.
    $vendor = $this->demoInput['vendor_type_machine_name'];
    $recipe = $this->demoInput['recipe_type_machine_name'];
    $vendor_url = $this->demoInput['vendor_field_url_machine_name'];
    $vendor_url_hyphens = str_replace('_', '-', $vendor_url);
    $main_image = $this->demoInput['vendor_field_image_machine_name'];
    $main_image_hyphens = str_replace('_', '-', $main_image);
    $ingredients = $this->demoInput['recipe_field_ingredients_machine_name'];
    $submitted_by = $this->demoInput['recipe_field_submitted_machine_name'];

    // Topic: structure-content-type - Adding a Content Type.
    // Create the Vendor content type.

    $this->drupalGet('admin/structure/types/add');

    // Top of admin/structure/types/add, with Name and Description fields.
    $this->setUpScreenShot('structure-content-type-add.png', 'onLoad="' . 'jQuery(\'#edit-name\').val(\'' . $this->demoInput['vendor_type_name'] . '\'); jQuery(\'.form-item-name .field-suffix\').show(); jQuery(\'#edit-name\').change(); ' . $this->hideArea('.form-type-vertical-tabs, #toolbar-administration, #edit-actions, header, .region-breadcrumbs') . $this->setWidth('.layout-container') . 'jQuery(\'#edit-description\').append(\'' . $this->demoInput['vendor_type_description'] . '\');' . '"');

    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['vendor_type_name'],
        'type' => $vendor,
        'description' => $this->demoInput['vendor_type_description'],
        'title_label' => $this->demoInput['vendor_type_title_label'],
        'options[promote]' => FALSE,
        'options[revision]' => TRUE,
        'display_submitted' => FALSE,
        'menu_options[main]' => FALSE,
      ], $this->callT('Save and manage fields'));
    // Manage fields page after adding Vendor content type.
    $this->setUpScreenShot('structure-content-type-add-confirmation.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content', 800) . '"');

    // Go back to editing the content type to make screenshots with the
    // right values in the form.
    $this->drupalGet('admin/structure/types/manage/' . $vendor);
    // Submission form settings section of admin/structure/types/add.
    $this->setUpScreenShot('structure-content-type-add-submission-form-settings.png', 'onLoad="' . $this->setWidth('.layout-container') . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, .help, .form-item-name, .form-item-description, #edit-actions') . '"');
    // Publishing settings section of admin/structure/types/add.
    $this->setUpScreenShot('structure-content-type-add-Publishing-Options.png', 'onLoad="jQuery(\'#edit-workflow\').show(); jQuery(\'.vertical-tabs li:eq(0)\').toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(1)\').toggleClass(\'is-selected\'); ' . $this->setWidth('.layout-container') . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, .help, .form-item-name, .form-item-description, #edit-submission, #edit-actions') . '"');
    // Display settings section of admin/structure/types/add.
    $this->setUpScreenShot('structure-content-type-add-Display-settings.png', 'onLoad="jQuery(\'#edit-display\').show(); jQuery(\'.vertical-tabs li:eq(0)\').toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(2)\').toggleClass(\'is-selected\'); '. $this->setWidth('.layout-container') . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, .help, .form-item-name, .form-item-description, #edit-submission, #edit-actions') . '"');
    // Menu settings section of admin/structure/types/add.
    $this->setUpScreenShot('structure-content-type-add-Menu-settings.png', 'onLoad="jQuery(\'#edit-menu\').show(); jQuery(\'.vertical-tabs li:eq(0)\').toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(3)\').toggleClass(\'is-selected\'); ' . $this->setWidth('.layout-container') . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, .help, .form-item-name, .form-item-description, #edit-submission, #edit-actions') . '"');

    // Add content type for Recipe. No screen shots.
    $this->drupalGet('admin/structure/types/add');
    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['recipe_type_name'],
        'type' => $recipe,
        'description' => $this->demoInput['recipe_type_description'],
        'title_label' => $this->demoInput['recipe_type_title_label'],
        'options[promote]' => FALSE,
        'display_submitted' => FALSE,
        'menu_options[main]' => FALSE,
      ], $this->callT('Save and manage fields'));

    // Topic: structure-content-type-delete - Deleting a Content Type
    // Delete the Article content type.
    $this->drupalGet('admin/structure/types');
    // Content types list on admin/structure/types, with operations dropdown
    // for Article content type expanded.
    $this->setUpScreenShot('structure-content-type-delete-dropdown.png', 'onLoad="jQuery(&quot;a[href*=\'article/delete\']&quot;).parents(\'.dropbutton-wrapper\').addClass(\'open\'); ' . $this->hideArea('#toolbar-administration') . '"');

    $this->drupalGet('admin/structure/types/manage/article/delete');
    // Confirmation page for deleting Article content type.
    $this->setUpScreenShot('structure-content-type-delete-confirmation.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content', 800) . '"');
    $this->drupalPostForm(NULL, [], $this->callT('Delete'));
    // Confirmation message after deleting Article content type.
    $this->setUpScreenShot('structure-content-type-delete-confirm.png', 'onLoad="' . $this->showOnly('.messages') . $this->setWidth('.messages', 600) . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Topic: structure-fields - Adding basic fields to a content type.
    // Add Vendor URL field to Vendor content type.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/fields/add-field');

    // Fill in the form in the screenshot: choose Link for field type and
    // type in Vendor URL for the Label, triggering the "change" event to set
    // up the machine name.
    // Initial page for admin/structure/types/manage/vendor/fields/add-field.
    $this->setUpScreenShot('structure-fields-add-field.png', 'onLoad="' . 'jQuery(\'#edit-new-storage-type\').val(\'link\'); jQuery(\'#edit-label\').val(\'' . $this->demoInput['vendor_field_url_label'] . '\'); jQuery(\'#edit-label\').change(); jQuery(\'#edit-new-storage-wrapper, #edit-new-storage-wrapper input, #edit-new-storage-wrapper .field-suffix, #edit-new-storage-wrapper .field-suffix small\').show(); ' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content') . '"');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'link',
        'label' => $this->demoInput['vendor_field_url_label'],
        'field_name' => $vendor_url,
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'settings[link_type]' => 16,
        'settings[title]' => 0,
      ], $this->callT('Save settings'));
    // To make the screen shot, go back to the edit form for this field.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/fields/node.' . $vendor . '.field_' . $vendor_url);
    // Field settings page for adding vendor URL field.
    $this->setUpScreenShot('structure-fields-vendor-url.png', 'onLoad="window.scroll(0,100); ' . $this->hideArea('#toolbar-administration, #edit-actions') . $this->removeScrollbars() . '"');

    // Add Main Image field to Vendor content type.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/fields/add-field');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'image',
        'label' => $this->demoInput['vendor_field_image_label'],
        'field_name' => $main_image,
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'required' => 1,
        'settings[file_directory]' => $this->demoInput['vendor_field_image_directory'],
        'settings[min_resolution][x]' => 600,
        'settings[min_resolution][y]' => 600,
        'settings[max_filesize]' => '5 MB',
      ], $this->callT('Save settings'));
    // Manage fields page for Vendor, showing two new fields.
    $this->setUpScreenShot('structure-fields-result.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . '"');

    // To make the settings screen shot, go back to the edit form for this
    // field.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/fields/node.' . $vendor . '.field_' . $main_image);
    // Field settings page for adding main image field.
    $this->setUpScreenShot('structure-fields-main-img.png', 'onLoad="window.scroll(0,100); ' . $this->hideArea('#toolbar-administration, #edit-actions') . $this->removeScrollbars() . '"');
    // Add the main image field to Recipe. No screenshots.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/add-field');
    $this->drupalPostForm(NULL, [
        'existing_storage_name' => 'field_' . $main_image,
        'existing_storage_label' => $this->demoInput['vendor_field_image_label'],
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [
        'required' => 1,
        'settings[file_directory]' => $this->demoInput['recipe_field_image_directory'],
        'settings[min_resolution][x]' => 600,
        'settings[min_resolution][y]' => 600,
        'settings[max_filesize]' => '5 MB',
      ], $this->callT('Save settings'));

    // Create two Vendor content items. No screenshots.
    $this->drupalGet('node/add/' . $vendor);
    // Submit once.
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['vendor_1_title'],
        'files[field_' . $main_image . '_0]' => $this->assetsDirectory . 'farm.jpg',
        'body[0][summary]' => $this->demoInput['vendor_1_summary'],
        'body[0][value]' => $this->demoInput['vendor_1_body'],
        'path[0][alias]' => $this->demoInput['vendor_1_path'],
        'field_' . $vendor_url . '[0][uri]' => $this->demoInput['vendor_1_url'],
      ], $this->callT('Save and publish'));
    // This will cause an error about missing alt text. Submit again with the
    // alt text defined.
    $this->drupalPostForm(NULL, [
        'field_' . $main_image . '[0][alt]' => $this->demoInput['vendor_1_title'],
      ], $this->callT('Save and publish'));

    $this->drupalGet('node/add/' . $vendor);
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['vendor_2_title'],
        'files[field_' . $main_image . '_0]' => $this->assetsDirectory . 'honey_bee.jpg',
        'body[0][summary]' => $this->demoInput['vendor_2_summary'],
        'body[0][value]' => $this->demoInput['vendor_2_body'],
        'path[0][alias]' => $this->demoInput['vendor_2_path'],
        'field_' . $vendor_url . '[0][uri]' => $this->demoInput['vendor_2_url'],
      ], $this->callT('Save and publish'));
    $this->drupalPostForm(NULL, [
        'field_' . $main_image . '[0][alt]' => $this->demoInput['vendor_2_title'],
      ], $this->callT('Save and publish'));

    // The next topic with screenshots is structure-taxonomy, but the
    // screenshot is generated later.

    // Topic: structure-taxonomy-setup - Setting Up a Taxonomy.
    $this->drupalGet('admin/structure/taxonomy');
    // Taxonomy list page (admin/structure/taxonomy).
    $this->setUpScreenShot('structure-taxonomy-setup-taxonomy-page.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .layout-container', 800) . '"');
    // Add Ingredients taxonomy vocabulary.
    $this->drupalGet('admin/structure/taxonomy/add');
    // Add Ingredients vocabulary from admin/structure/taxonomy/add.
    $this->setUpScreenShot('structure-taxonomy-setup-add-vocabulary.png', 'onLoad="jQuery(\'#edit-name\').val(\'' . $this->demoInput['recipe_field_ingredients_label'] . '\');' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content') . '"');
    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['recipe_field_ingredients_label'],
        'vid' => $ingredients,
      ], $this->callT('Save'));
    // Ingredients vocabulary page
    // (admin/structure/taxonomy/manage/ingredients/overview).
    $this->setUpScreenShot('structure-taxonomy-setup-vocabulary-overview.png' , 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .layout-container', 800) . '"');
    // Add 3 sample terms.
    $this->drupalGet('admin/structure/taxonomy/manage/' . $ingredients . '/add');
    // Fill in the form in the screenshot, with the term name Butter.
    // Name portion of Add term page
    // (admin/structure/taxonomy/manage/ingredients/add).
    $this->setUpScreenShot('structure-taxonomy-setup-add-term.png', 'onLoad="jQuery(\'#edit-name-0-value\').val(\'' . $this->demoInput['recipe_field_ingredients_term_1'] . '\');' . $this->hideArea('#toolbar-administration') . $this->removeScrollbars() . $this->setWidth('header, .layout-container', 800) . '"');

    // Add the rest of the terms, with no screenshots.
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe_field_ingredients_term_1'],
      ], $this->callT('Save'));
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe_field_ingredients_term_2'],
      ], $this->callT('Save'));
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe_field_ingredients_term_3'],
      ], $this->callT('Save'));
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe_field_ingredients_term_4'],
      ], $this->callT('Save'));

    // Add the Ingredients field to Recipe content type.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/add-field');
    // Fill in the form in the screenshot: choose Taxonomy term for field type
    // and type in Ingredients for the Label.
    // Add field page to add Ingredients taxonomy reference field.
    $this->setUpScreenShot('structure-taxonomy-setup-add-field.png', 'onLoad="' . 'jQuery(\'#edit-new-storage-type\').val(\'field_ui:entity_reference:taxonomy_term\'); jQuery(\'#edit-label\').val(\'' . $this->demoInput['recipe_field_ingredients_label'] . '\');  jQuery(\'#edit-label\').change(); jQuery(\'#edit-new-storage-wrapper, #edit-new-storage-wrapper .field-suffix, #edit-new-storage-wrapper .field-suffix small\').show(); ' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content') . '"');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'field_ui:entity_reference:taxonomy_term',
        'label' => $this->demoInput['recipe_field_ingredients_label'],
        'field_name' => $ingredients,
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [
        'cardinality' => '-1',
      ], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'description' => $this->demoInput['recipe_field_ingredients_help'],
        'settings[handler_settings][target_bundles][' . $ingredients . ']' => 1,
        'settings[handler_settings][auto_create]' => 1,
      ], $this->callT('Save settings'));
    // Manage fields page showing Ingredients field on Recipe content type.
    $this->setUpScreenShot('structure-taxonomy-setup-finished.png', 'onLoad="' .  $this->hideArea('#toolbar-administration') . '"');

    // Go back and edit the field settings to make the next screenshot,
    // scrolling to the bottom.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/node.' . $recipe . '.field_' . $ingredients);
    // Reference type section of field settings page for Ingredients field.
    $this->setUpScreenShot('structure-taxonomy-setup-field-settings-2.png', 'onLoad="window.scroll(0,2000);' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb') . 'jQuery(\'#edit-default-value-input\').removeAttr(\'open\')' . '"');

    // Make the other screenshot from the edit settings page.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/node.' . $recipe . '.field_' . $ingredients . '/storage');
    // Field storage settings page for Ingredients field.
    $this->setUpScreenShot('structure-taxonomy-setup-field-settings.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb') . $this->setWidth('.page-content') . '"');

    // Topic: structure-adding-reference - Adding a reference field.
    // Add the Submitted by field to Recipe content type.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/add-field');

    // Fill in the form in the screenshot: choose content reference for
    // field type and type in Submitted by for the Label.
    // Add field page for adding a Submitted by field to Recipe.
    $this->setUpScreenShot('structure-adding-reference-add-field.png', 'onLoad="' . 'jQuery(\'#edit-new-storage-type\').val(\'field_ui:entity_reference:node\'); jQuery(\'#edit-label\').val(\'' . $this->demoInput['recipe_field_submitted_label'] . '\'); jQuery(\'#edit-label\').change(); jQuery(\'#edit-new-storage-wrapper, #edit-new-storage-wrapper .field-suffix, #edit-new-storage-wrapper .field-suffix small\').show(); ' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .page-content', 800) . '"');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'field_ui:entity_reference:node',
        'label' => $this->demoInput['recipe_field_submitted_label'],
        'field_name' => $submitted_by,
      ], $this->callT('Save and continue'));
    // Field storage settings page for Submitted by field.
    $this->setUpScreenshot('structure-adding-reference-set-field-basic.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header, .layout-container') . '"');
    $this->drupalPostForm(NULL, [], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'description' => $this->demoInput['recipe_field_submitted_help'],
        'required' => 1,
        'settings[handler_settings][target_bundles][' . $vendor . ']' => 1,
        'settings[handler_settings][sort][field]' => 'title',
      ], $this->callT('Save settings'));
    // Manage fields page for content type Recipe.
    $this->setUpScreenShot('structure-adding-reference-manage-fields.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . '"');
    // Go back and edit the field settings to make the next screenshot,
    // scrolling to the bottom.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/fields/node.' . $recipe . '.field_' . $submitted_by);
    // Field settings page for Submitted by field.
    $this->setUpScreenShot('structure-adding-reference-field-settings.png', 'onLoad="window.scroll(0,2000);' . $this->hideArea('#toolbar-administration') . '"');

    // Submit this form to set the sort direction to its default. It is not
    // set properly in the earlier submit, leading to exceptions in a later
    // test.
    $this->drupalPostForm(NULL, [], $this->callT('Save settings'));

    // Topic: structure-form-editing - Changing Content Entry Forms.

    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/form-display');
    // Manage form display page for Recipe, Ingredients field area, with
    // Widget drop-down outlined.
    // Note that ideally, the drop-down would be open, but this is not
    // apparently possible using JavaScript.
    $this->setUpScreenShot('structure-form-editing-manage-form.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, .help, .field-plugin-settings-edit-wrapper, .tabledrag-toggle-weight-wrapper') . 'jQuery(\'#edit-fields-field-' . $ingredients . '-type\').val(\'entity_reference_autocomplete_tags\');' . $this->addBorder('#edit-fields-field-' . $ingredients . '-type') . $this->setWidth('#field-display-overview', 800) . $this->removeScrollbars() . '"');

    // Set the Ingredients field to use tag-style autocomplete.
    $this->drupalPostForm(NULL, [
        'fields[field_' . $ingredients . '][type]' => 'entity_reference_autocomplete_tags',
      ], $this->callT('Save'));

    $this->drupalGet('node/add/' . $recipe);
    // Create recipe page (node/add/recipe).
    $this->setUpScreenShot('structure-form-editing-add-recipe.png', 'onLoad="window.scroll(0,100);' . $this->hideArea('#toolbar-administration') . $this->removeScrollbars() . '"');

    // Create two Recipe content items. No screenshots.
    $this->drupalGet('node/add/' . $recipe);
    // Submit once.
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['recipe_1_title'],
        'files[field_' . $main_image . '_0]' => $this->assetsDirectory . 'salad.jpg',
        'body[0][value]' => $this->demoInput['recipe_1_body'],
        'path[0][alias]' => $this->demoInput['recipe_1_path'],
        'field_' . $ingredients . '[target_id]' => $this->demoInput['recipe_1_ingredients'],
        'field_' . $submitted_by . '[0][target_id]' => $this->demoInput['vendor_1_title'],
      ], $this->callT('Save and publish'));
    // This will cause an error about missing alt text. Submit again with the
    // alt text defined.
    $this->drupalPostForm(NULL, [
        'field_' . $main_image . '[0][alt]' => $this->demoInput['recipe_1_title'],
      ], $this->callT('Save and publish'));

    $this->drupalGet('node/add/' . $recipe);
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['recipe_2_title'],
        'files[field_' . $main_image . '_0]' => $this->assetsDirectory . 'carrots.jpg',
        'body[0][value]' => $this->demoInput['recipe_2_body'],
        'path[0][alias]' => $this->demoInput['recipe_2_path'],
        'field_' . $ingredients . '[target_id]' => $this->demoInput['recipe_2_ingredients'],
        'field_' . $submitted_by . '[0][target_id]' => $this->demoInput['vendor_1_title'],
      ], $this->callT('Save and publish'));
    $this->drupalPostForm(NULL, [
        'field_' . $main_image . '[0][alt]' => $this->demoInput['recipe_2_title'],
      ], $this->callT('Save and publish'));


    // Topic (out of order): structure-taxonomy - Concept: Taxonomy.

    $this->drupalGet('taxonomy/term/4');
    // Carrots taxonomy page after adding Recipe content items.
    $this->setUpScreenShot('structure-taxonomy_listingPage_carrots.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header#header, nav.tabs, footer, .feed-icons, .region-sidebar-first, .region-breadcrumb') . $this->setWidth('.block-system-main-block') . $this->removeScrollbars() . $this->setBodyColor() . '"');


    // Topic: structure-content-display - Changing Content Display.

    $this->drupalGet('admin/structure/types');
    // Content types list on admin/structure/types, with operations dropdown
    // for Vendor content type expanded.
    $this->setUpScreenShot('structure-content-display_manage_display.png', 'onLoad="jQuery(&quot;a[href*=\'' . $vendor . '/delete\']&quot;).parents(\'.dropbutton-wrapper\').addClass(\'open\'); ' . $this->hideArea('#toolbar-administration') . '"');

    // Set the labels for main image and vendor URL to hidden.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/display');
    $this->drupalPostForm(NULL, [
        'fields[field_' . $main_image . '][label]' => 'hidden',
        'fields[field_' . $vendor_url . '][label]' => 'hidden',
      ], $this->callT('Save'));
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/display');

    // Manage display page for Vendor content type
    // (admin/structure/types/manage/vendor/display), with labels for Main
    // Image and Vendor URL hidden, and their select lists outlined in red.
    $this->setUpScreenShot('structure-content-display_main_image_hidden.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-pre-content, .region-breadcrumb, .help, #edit-modes, #edit-actions') . $this->removeScrollbars() . $this->addBorder('#edit-fields-field-' . $main_image_hyphens . '-label, #edit-fields-field-' . $vendor_url_hyphens . '-label') . '"');

    // Use Ajax to open the Edit area for the Vendor URL field.
    $this->drupalPostAjaxForm(NULL, [], 'field_' . $vendor_url . '_settings_edit');
    // Vendor URL settings form, with trim length cleared, and open link in
    // new window checked.
    $this->setUpScreenShot('structure-content-display_trim_length.png', 'onLoad="' . $this->removeScrollbars() . $this->showOnly('.field-plugin-settings-edit-form') . $this->setWidth('table', 400) . 'jQuery(\'.form-item-fields-field-' . $vendor_url_hyphens . '-settings-edit-form-settings-trim-length input\').val(\'\'); jQuery(\'.form-item-fields-field-' . $vendor_url_hyphens . '-settings-edit-form-settings-target input\').attr(\'checked\', \'checked\'); ' . '"');

    // Set the trim length to zero and set links to open in a new window.
    $this->drupalPostForm(NULL, [
        'fields[field_' . $vendor_url . '][settings_edit_form][settings][trim_length]' => '',
        'fields[field_' . $vendor_url . '][settings_edit_form][settings][target]' => '_blank',
      ], $this->callT('Save'));

    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/display');
    // Manage display page for Vendor content type, with order changed.
    $this->setUpScreenShot('structure-content-display_change_order.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-pre-content, .region-breadcrumb, .help, .tabledrag-toggle-weight-wrapper, #edit-modes, #edit-actions') . 'jQuery(\'table\').before(\'<div style=&quot;display: block; &quot; class=&quot;tabledrag-changed-warning messages messages--warning&quot; role=&quot;alert&quot;><abbr class=&quot;warning tabledrag-changed&quot;>*</abbr>' . $this->callT('You have unsaved changes.') . '</div>\');' . 'var img = jQuery(\'table tbody tr#field-' . $main_image_hyphens . '\').detach(); var bod = jQuery(\'table tbody tr#body\').detach(); var vurl = jQuery(\'table tbody tr#field-' . $vendor_url_hyphens . '\').detach(); jQuery(\'table tbody\').prepend(vurl).prepend(bod).prepend(img); jQuery(\'table tbody tr:first\').toggleClass(\'drag-previous\');' . '"');

    // Submit the changed order in the form.
    $this->drupalPostForm(NULL, [
        'fields[field_' . $main_image . '][weight]' => 10,
        'fields[body][weight]' => 20,
        'fields[field_' . $vendor_url . '][weight]' => 30,
        'fields[links][weight]' => 40,
      ], $this->callT('Save'));

    // Make similar changes for the Recipe content type. No screenshots.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/display');
    $this->drupalPostForm(NULL, [
        'fields[field_' . $main_image . '][weight]' => 10,
        'fields[field_' . $main_image . '][label]' => 'hidden',
        'fields[body][weight]' => 20,
        'fields[field_' . $ingredients . '][weight]' => 30,
        'fields[field_' . $submitted_by . '][weight]' => 40,
        'fields[field_' . $submitted_by . '][label]' => 'inline',
        'fields[links][weight]' => 50,
      ], $this->callT('Save'));

    // Topic: structure-image-style-create - Setting Up an Image Style.

    // Create the image style.
    $this->drupalGet('admin/config/media/image-styles');
    $this->clickLink($this->callT('Add image style'));
    $this->drupalPostForm(NULL, [
        'label' => $this->demoInput['image_style_label'],
        'name' => $this->demoInput['image_style_machine_name'],
      ], $this->callT('Create new style'));
    $this->drupalPostForm(NULL, [
        'new' => 'image_scale_and_crop',
      ], $this->callT('Add'));
    $this->drupalPostForm(NULL, [
        'data[width]' => 300,
        'data[height]' => 200,
      ], $this->callT('Add effect'));
    // Image style editing page, with effects added.
    $this->setUpScreenShot('structure-image-style-create-add-style.png', 'onLoad="' . $this->removeScrollbars() . $this->hideArea('#toolbar-administration') . $this->setWidth('.layout-container', 800) . $this->setWidth('header', 830) . '"');

    // Use the image style in Manage Display for the Vendor.
    $this->drupalGet('admin/structure/types/manage/' . $vendor . '/display');
    // Use Ajax to open the Edit area for the Main Image field.
    $this->drupalPostAjaxForm(NULL, [], 'field_' . $main_image . '_settings_edit');
    // Main image settings area of Vendor content type.
    $this->setUpScreenShot('structure-image-style-create-manage-display.png', 'onLoad="' . $this->removeScrollbars() . $this->showOnly('.field-plugin-settings-edit-form') . $this->setWidth('table', 400) . 'jQuery(\'.form-item-fields-field-' . $main_image_hyphens . '-settings-edit-form-settings-image-style select\').val(\'' . $this->demoInput['image_style_machine_name'] . '\');' . '"');
    $this->drupalPostForm(NULL, [
        'fields[field_' . $main_image . '][settings_edit_form][settings][image_style]' => $this->demoInput['image_style_machine_name'],
      ], $this->callT('Save'));

    // Repeat for Recipe content type, no screenshots.
    $this->drupalGet('admin/structure/types/manage/' . $recipe . '/display');
    $this->drupalPostAjaxForm(NULL, [], 'field_' . $main_image . '_settings_edit');
    $this->drupalPostForm(NULL, [
        'fields[field_' . $main_image . '][settings_edit_form][settings][image_style]' => $this->demoInput['image_style_machine_name'],
      ], $this->callT('Save'));


    // Topic: structure-text-format-config - Configuring Text Formats and
    // Editors.

    // Update the configuration for Basic HTML: add an HR tag.
    $this->drupalGet('admin/config/content/formats/manage/basic_html');
    // The button configuration for the editing toolbar uses drag-and-drop,
    // but has a text field behind the scenes. So, save the configuration and
    // then come back for the screenshot.
    $this->drupalPostForm(NULL, [
        'editor[settings][toolbar][button_groups]' => '[[{"name":"' . $this->callT('Formatting') . '","items":["Bold","Italic"]},{"name":"' . $this->callT('Links') . '","items":["DrupalLink","DrupalUnlink"]},{"name":"' . $this->callT('Lists') . '","items":["BulletedList","NumberedList"]},{"name":"' . $this->callT('Media') . '","items":["Blockquote","DrupalImage"]},{"name":"' . $this->callT('Tools') . '","items":["Source", "HorizontalRule"]}]]',
        'filters[filter_html][settings][allowed_html]' => '<hr> <a hreflang href> <em> <strong> <cite> <blockquote cite> <code> <ul type> <ol type start> <li> <dl> <dt> <dd> <h2 id> <h3 id> <h4 id> <h5 id> <h6 id> <p> <br> <span> <img width height data-caption data-align data-entity-uuid data-entity-type alt src> <hr>',
      ], $this->callT('Save configuration'));

    // Confirmation message after updating text format.
    $this->setUpScreenShot('structure-text-format-config-summary.png', 'onLoad="' . $this->showOnly('.messages') . $this->setWidth('.messages', 500) . $this->setBodyColor() . $this->removeScrollbars() . '"');
    $this->drupalGet('admin/config/content/formats/manage/basic_html');
    // Button configuration area on text format edit page.
    $this->setUpScreenShot('structure-text-format-config-editor-config.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .region-breadcrumb, .help, .form-type-textfield, .form-type-machine-name, #edit-roles--wrapper, .form-type-select, #filters-status-wrapper, .form-type-table, .form-type-vertical-tabs, #edit-actions') . 'jQuery(\'.ckeditor-toolbar\').addClass(\'ckeditor-group-names-are-visible\');' . $this->removeScrollbars() . '"');
    // Allowed HTML tags area on text format edit page.
    $this->setUpScreenShot('structure-text-format-config-allowed-html.png', 'onLoad="' . 'window.scroll(0,5000);' . $this->hideArea('#toolbar-administration, .content-header, .region-breadcrumb, .help, .form-item-name, .form-type-machine-name, fieldset, .form-type-select, #editor-settings-wrapper, #filters-status-wrapper, .form-type-table,  #edit-actions') . $this->setWidth('.form-type-vertical-tabs', 800) . $this->removeScrollbars() . '"');

  }

  /**
   * Makes screenshots for the User Accounts chapter.
   */
  protected function doUserAccounts() {
    $vendor = $this->demoInput['vendor_type_machine_name'];
    $recipe = $this->demoInput['recipe_type_machine_name'];

    // Topic: user-new-role - Creating a role.

    // Create vendor role.
    $this->drupalGet('admin/people/roles');
    // Roles page (admin/people/roles).
    $this->setUpScreenShot('user-new-role-roles-page.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header', 630) . $this->setWidth('.layout-container', 600) . '"');
    $this->clickLink($this->callT('Add role'));
    // Add role page (admin/people/roles/add).
    $this->setUpScreenShot('user-new-role-add-role.png', 'onLoad="' . 'jQuery(\'#edit-label\').val(\'' . $this->demoInput['vendor_type_name'] . '\'); jQuery(\'.form-item-label .field-suffix\').show(); jQuery(\'#edit-label\').change(); ' . $this->setWidth('.layout-container, header') . $this->hideArea('#toolbar-administration') . '"');
    $this->drupalPostForm(NULL, [
        'label' => $this->demoInput['vendor_type_name'],
        'id' => $vendor,
      ], $this->callT('Save'));
    // Confirmation message after adding new role.
    $this->setUpScreenShot('user-new-role-confirm.png', 'onLoad="' . $this->showOnly('.messages') . $this->setWidth('.messages', 500) . $this->setBodyColor() . $this->removeScrollbars() . '"');


    // Topic: user-new-user - Creating a User Account.

    // Create a user account for Sweet Honey.
    $this->drupalGet('admin/people/create');
    // Add new user form (/admin/people/create).
    $this->setUpScreenShot('user-new-user_form.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('header', 830) . $this->setWidth('.layout-container', 800) . $this->removeScrollbars() . '"');
    $password = $this->randomString();
    $this->drupalPostForm(NULL, [
        'mail' => $this->demoInput['vendor_2_email'],
        'name' => $this->demoInput['vendor_2_title'],
        'pass[pass1]' => $password,
        'pass[pass2]' => $password,
        'roles[' . $vendor . ']' => $vendor,
        'notify' => TRUE,
        'files[user_picture_0]' => $this->assetsDirectory . 'honey_bee.jpg',
      ], $this->callT('Create new account'));
    // Confirmation message after adding new user.
    $this->setUpScreenShot('user-new-user-created.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages', 800) . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Create a second user account for Happy Farms, no screenshots.
    $this->drupalGet('admin/people/create');
    $password = $this->randomString();
    $this->drupalPostForm(NULL, [
        'mail' => $this->demoInput['vendor_1_email'],
        'name' => $this->demoInput['vendor_1_title'],
        'pass[pass1]' => $password,
        'pass[pass2]' => $password,
        'roles[' . $vendor . ']' => $vendor,
        'notify' => TRUE,
        'files[user_picture_0]' => $this->assetsDirectory . 'farm.jpg',
      ], $this->callT('Create new account'));


    // Topic: user-permissions - Assigning permissions to a role.

    // Update the permissions for the Vendor role.
    $this->drupalGet('admin/people/permissions/' . $vendor);
    $this->drupalPostForm(NULL, [
        $vendor . '[access user contact forms]' => 1,
        $vendor . '[use text format restricted_html]' => 1,
        $vendor . '[create ' . $recipe . ' content]' => 1,
        $vendor . '[edit own ' . $recipe . ' content]' => 1,
        $vendor . '[delete own ' . $recipe . ' content]' => 1,
        $vendor . '[edit own ' . $vendor . ' content]' => 1,
        $vendor . '[access in-place editing]' => 1,
      ], $this->callT('Save permissions'));
    // Confirmation message after updating permissions.
    $this->setUpScreenShot('user-permissions-save-permissions.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages', 400) . $this->setBodyColor() . $this->removeScrollbars() . '"');
    // Permissions page for Vendor (admin/people/permissions/vendor).
    $this->setUpScreenShot('user-permissions-check-permissions.png', 'onLoad="window.scroll(0,3500);' . $this->hideArea('#toolbar-administration') . $this->setWidth('.layout-container, table.sticky-header', 800) . $this->removeScrollbars() . $this->setBodyColor() . '"');


    // Topic: user-roles - Changing a User's Roles.

    // Update the user 1 account via single user edit.
    $this->drupalGet('admin/people');
    // People page (admin/people), with user 1's Edit button outlined.
    $this->setUpScreenShot('user-roles_people-list.png', 'onLoad="' . $this->addBorder('a[href*=&quot;user/1/edit&quot;]') . $this->hideArea('#toolbar-administration') . '"');
    $this->drupalGet('user/1/edit');
    // Roles area on user editing page.
    $this->setUpScreenShot('user-roles_person-edit.png', 'onLoad="window.scroll(0,6000);' . $this->showOnly('#edit-roles--wrapper') . 'jQuery(\'#edit-roles-administrator\').attr(\'checked\', 1);' . $this->removeScrollbars() . $this->setBodyColor() . '"');
    $this->drupalPostForm(NULL, [
        'roles[administrator]' => 1,
      ], $this->callT('Save'));
    // Confirmation message after updating user.
    $this->setUpScreenShot('user-roles_message.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages', 500) . $this->setBodyColor() . '"');

    // Update two accounts using bulk edit.
    $this->drupalGet('admin/people');
    // Bulk editing form on People page (admin/people).
    $this->setUpScreenShot('user-roles_bulk.png', 'onLoad="' . $this->hideArea('#toolbar-administration, header, .region-breadcrumb, #block-seven-local-actions, .view-filters') . 'jQuery(\'#edit-user-bulk-form-0, #edit-user-bulk-form-1\').attr(\'checked\', 1).parents(\'tr\').addClass(\'selected\');' . 'jQuery(\'#edit-action\').val(\'user_add_role_action.' . $vendor . '\');' . $this->removeScrollbars() . $this->setBodyColor() . '"');
    $this->drupalPostForm(NULL, [
        'user_bulk_form[0]' => 1,
        'user_bulk_form[1]' => 1,
        'action' => 'user_add_role_action.' . $vendor,
      ], $this->callT('Apply to selected items'));
    // Confirmation message after bulk user update.
    $this->setUpScreenShot('user-roles_message_bulk.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages') . $this->setBodyColor() . '"');


    // Topic: user-content - Assigning Authors to Content.

    // Assign first vendor node to the corresponding vendor user.
    $this->drupalPostForm('node/3/edit', [
        'uid[0][target_id]' => $this->demoInput['vendor_1_title'],
      ], $this->callT('Save and keep published'));
    // Confirmation message after content update.
    $this->setUpScreenShot('user-content_updated.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages') . $this->setBodyColor() . $this->removeScrollbars() . '"');
    // Go back and take the screenshot of the authoring information.
    $this->drupalGet('node/3/edit');
    // Authoring information section of content edit page.
    $this->setUpScreenShot('user-content.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .region-breadcrumb, .help, .layout-region-node-main, .layout-region-node-footer') . $this->setBodyColor() . 'jQuery(\'#edit-author\').attr(\'open\', \'open\'); ' . $this->removeScrollbars() . '"');

    // Assign second vendor node to the corresponding vendor user, without
    // screenshots.
    $this->drupalPostForm('node/4/edit', [
        'uid[0][target_id]' => $this->demoInput['vendor_2_title'],
      ], $this->callT('Save and keep published'));

  }

  /**
   * Makes screenshots for the Blocks chapter.
   */
  protected function doBlocks() {

    // Topic: block-create-custom - Creating a Custom Block.

    // Create a block for hours and location.
    $this->drupalGet('block/add');
    // Block add page (block/add).
    $this->setUpScreenShot('block-create-custom-add-custom-block.png', 'onLoad="jQuery(\'#edit-info-0-value\').val(\'' . $this->demoInput['hours_block_description'] . '\');' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 800) . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [
        'info[0][value]' => $this->demoInput['hours_block_description'],
        'body[0][value]' => $this->demoInput['hours_block_body'],
      ], $this->callT('Save'));
    // In the test environment, saving a custom block takes you to the
    // configure page, which we need to be on for the next topic. Otherwise,
    // getting to that page involves some kind of obscured URL and is very
    // difficult to manage.

    // Topic: block-place - Placing a Block in a Region.

    // Configuration page for placing a custom block in the sidebar.
    $this->setUpScreenShot('block-place-configure-block.png', 'onLoad="jQuery(\'#edit-settings-label\').val(\'' . $this->demoInput['hours_block_title'] . '\'); jQuery(\'.machine-name-value\').html(\'' . $this->demoInput['hours_block_title_machine_name'] . '\');' . 'jQuery(\'#edit-region\').val(\'sidebar_second\');' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 800) . $this->removeScrollbars() . '"');

    // Place the block in Bartik, sidebar second.
    $this->drupalPostForm(NULL, [
        'settings[label]' => $this->demoInput['hours_block_title'],
        'id' => $this->demoInput['hours_block_title_machine_name'],
        'region' => 'sidebar_second',
      ], $this->callT('Save block'));
    $this->drupalGet('node/2');
    // About page with placed sidebar block.
    $this->setUpScreenShot('block-place-sidebar.png', 'onLoad="' . $this->hideArea('#toolbar-administration, footer') . $this->removeScrollbars() . '"');

  }

  /**
   * Makes screenshots for the Views chapter.
   */
  protected function doViews() {
    $vendor = $this->demoInput['vendor_type_machine_name'];
    $recipe = $this->demoInput['recipe_type_machine_name'];
    $main_image = $this->demoInput['vendor_field_image_machine_name'];
    $ingredients = $this->demoInput['recipe_field_ingredients_machine_name'];
    $vendors_view = $this->demoInput['vendors_view_machine_name'];
    $recipes_view = $this->demoInput['recipes_view_machine_name'];

    // Topic: views-create: Creating a Content List View.

    // Create a Vendors view.
    $this->drupalGet('admin/structure/views/add');
    // Add view wizard.
    $this->setUpScreenShot('views-create-wizard.png', 'onLoad="' . 'jQuery(\'#edit-label\').val(\'' . $this->demoInput['vendors_view_title'] . '\').change(); jQuery(\'#edit-label-machine-name-suffix\').show(); jQuery(\'.machine-name-value\').html(\'' . $this->demoInput['vendors_view_machine_name'] . '\').parent().show(); jQuery(\'#edit-show-type\').val(\'' . $vendor . '\'); jQuery(\'#edit-show-sort\').val(\'node_field_data-title:ASC\'); jQuery(\'#edit-page-create\').attr(\'checked\', \'checked\'); jQuery(\'#edit-page--2\').show(); jQuery(\'#edit-page-title\').val(\'' . $this->demoInput['vendors_view_title'] . '\'); jQuery(\'#edit-page-path\').val(\'' . $this->demoInput['vendors_view_path'] . '\'); jQuery(\'.form-item-page-style-style-plugin select\').val(\'table\'); jQuery(\'#edit-page-link\').attr(\'checked\', \'checked\'); jQuery(\'.form-item-page-link-properties-menu-name select\').val(\'main\');  jQuery(\'.form-item-page-link-properties-title select\').val(\'' . $this->demoInput['vendors_view_title'] . '\');' . $this->hideArea('#toolbar-administration, .messages') . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [
        'label' => $this->demoInput['vendors_view_title'],
        'id' => $vendors_view,
        'show[type]' => $vendor,
        'show[sort]' => 'node_field_data-title:ASC',
        'page[create]' => TRUE,
        'page[title]' => $this->demoInput['vendors_view_title'],
        'page[path]' => $this->demoInput['vendors_view_path'],
        'page[style][style_plugin]' => 'table',
        'page[link]' => TRUE,
        'page[link_properties][menu_name]' => 'main',
        'page[link_properties][title]' => $this->demoInput['vendors_view_title'],
      ], $this->callT('Save and edit'));
    // The next statements add parts to the view, using no-JS options for the
    // test.
    // Add the main image field.
    $this->clickLinkContainingUrl('add-handler');
    $this->drupalPostForm(NULL, [
        'name[node__field_' . $main_image . '.field_' . $main_image . ']' => 'node__field_' . $main_image . '.field_' . $main_image,
      ], $this->callT('Add and configure @types', TRUE, ['@types' => $this->callT('fields')]));
    $this->drupalPostForm(NULL, [
        'options[custom_label]' => FALSE,
        'options[settings][image_style]' => 'medium',
        'options[settings][image_link]' => 'content',
      ], $this->callT('Apply'));
    // Add the body field.
    $this->clickLinkContainingUrl('add-handler');
    $this->drupalPostForm(NULL, [
        'name[node__body.body]' => 'node__body.body',
      ], $this->callT('Add and configure @types', TRUE, ['@types' => $this->callT('fields')]));
    $this->drupalPostForm(NULL, [
        'options[custom_label]' => FALSE,
        'options[type]' => 'text_summary_or_trimmed',
      ], $this->callT('Apply'));
    // Fix the configuration for the Title field: remove the label.
    $this->clickLinkContainingUrl('field/title');
    $this->drupalPostForm(NULL, [
        'options[custom_label]' => FALSE,
      ], $this->callT('Apply'));
    // Fix the configuration for the Body field: change the trim length.
    $this->clickLinkContainingUrl('field/body');
    $this->drupalPostForm(NULL, [
        'options[settings][trim_length]' => 120,
      ], $this->callT('Apply'));
    // Reorder the fields.
    $this->clickLinkContainingUrl('rearrange');
    $this->drupalPostForm(NULL, [
        'fields[title][weight]' => 3,
        'fields[body][weight]' => 4,
      ], $this->callT('Apply'));
    // Fix the menu weight.
    $this->clickLinkContainingUrl('menu');
    $this->drupalPostForm(NULL, [
        'menu[weight]' => 20,
      ], $this->callT('Apply'));

    // Save the view.
    $this->drupalPostForm(NULL, [], $this->callT('Save'));
    // Completed vendors view administration page.
    $this->setUpScreenShot('views-create-view.png', 'onLoad="' . $this->hideArea('#toolbar-administration, #views-preview-wrapper, .messages') . $this->removeScrollbars() . '"');
    // View the output, with preloaded images.
    $this->drupalGetWithImagePreload($this->demoInput['vendors_view_path']);
    // Completed vendors view output.
    $this->setUpScreenShot('views-create-view-output.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .site-footer') . $this->removeScrollbars() . $this->setBodyColor() . '"');


    // Topic: views-duplicating - Duplicating a View.

    // Duplicate the Vendors view.
    $this->drupalGet('admin/structure/views');
    // Views page (admin/structure/views), with operations dropdown
    // for Vendor view open.
    $this->setUpScreenShot('views-duplicate_duplicate.png', 'onLoad="' . 'jQuery(&quot;a[href*=\'views/view/' . $vendors_view . '\']&quot;).parents(\'.dropbutton-wrapper\').addClass(\'open\'); ' . $this->hideArea('#toolbar-administration, .disabled') . 'jQuery(&quot;a[href*=\'views/view/content\'], a[href*=\'views/view/block_content\'], a[href*=\'views/view/files\'], a[href*=\'views/view/frontpage\'], a[href*=\'views/view/user_admin_people\'], a[href*=\'views/view/comments_recent\']&quot;).parents(\'tr\').hide();' . $this->removeScrollbars() . '"');
    $this->clickLinkContainingUrl('views/view/' . $vendors_view . '/duplicate');
    $this->drupalPostForm(NULL, [
        'label' => $this->demoInput['recipes_view_title'],
        'id' => $recipes_view,
      ], $this->callT('Duplicate'));

    // Modify various aspects of the view, and make screenshots of some of
    // the configuration forms.

    // Page title.
    $this->clickLinkContainingUrl('page_1/title');
    $this->drupalPostForm(NULL, [
        'title' => $this->demoInput['recipes_view_title'],
      ], $this->callT('Apply'));
    $this->clickLinkContainingUrl('page_1/title');
    // View title configuration screen.
    $this->setUpScreenShot('views-duplicate_title.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .breadcrumb') . $this->setWidth('layout-container') . '"');
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));

    // Grid style.
    $this->clickLinkContainingUrl('page_1/style');
    $this->drupalPostForm(NULL, [
        'style[type]' => 'grid',
      ], $this->callT('Apply'));
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));
    // In a real site, changing to Grid would also change the row style to
    // Fields, but for some reason this is not working in the test environment.
    $this->clickLinkContainingUrl('page_1/row');
    $this->drupalPostForm(NULL, [
        'row[type]' => 'fields',
      ], $this->callT('Apply'));
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));

    // Remove body field.
    $this->clickLinkContainingUrl('page_1/field/body');
    $this->drupalPostForm(NULL, [], $this->callT('Remove'));

    // Filter on Recipe content type.
    $this->clickLinkContainingUrl('page_1/filter/type');
    $this->drupalPostForm(NULL, [
        'options[value][' . $vendor . ']' => FALSE,
        'options[value][' . $recipe . ']' => $recipe,
      ], $this->callT('Apply'));

    // Add exposed filter for Ingredients.
    $this->clickLinkContainingUrl('add-handler/' . $recipes_view . '/page_1/filter');
    $this->drupalPostForm(NULL, [
        'name[node__field_' . $ingredients . '.field_' . $ingredients . '_target_id]' => 'node__field_' . $ingredients . '.field_' . $ingredients . '_target_id',
      ], $this->callT('Add and configure @types', TRUE, ['@types' => $this->callT('filter criteria')]));
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));
    $this->drupalPostForm(NULL, [
        'options[expose_button][checkbox][checkbox]' => 1,
      ], $this->callT('Expose filter'));
    $this->drupalPostForm(NULL, [
        'options[expose][label]' => $this->demoInput['recipes_view_ingredients_label'],
      ], $this->callT('Apply'));
    $this->clickLinkContainingUrl('/page_1/filter/field_');
    // Ingredients field exposed filter configuration.
    $this->setUpScreenShot('views-duplicate_expose.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .breadcrumb, .exposed-description, #edit-options-expose-button-button, .grouped-description, #edit-options-group-button-button, #edit-options-operator--wrapper, .form-item-options-value, .form-item-options-expose-use-operator,  .form-item-options-expose-operator-id,  .form-item-options-expose-multiple,  .form-item-options-expose-remember, #edit-options-expose-remember-roles--wrapper,  .form-item-options-expose-identifier,  .form-item-options-error-message,  .form-item-options-reduce-duplicates, #edit-options-admin-label, #edit-actions') . $this->setWidth('layout-container', 800) . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));

    // Path and menu link title.
    $this->clickLinkContainingUrl('page_1/path');
    $this->drupalPostForm(NULL, [
        'path' => $this->demoInput['recipes_view_path'],
      ], $this->callT('Apply'));
    $this->clickLinkContainingUrl('page_1/menu');
    $this->drupalPostForm(NULL, [
        'menu[title]' => $this->demoInput['recipes_view_title'],
      ], $this->callT('Apply'));

    // Use Ajax.
    $this->clickLinkContainingUrl('page_1/use_ajax');
    $this->drupalPostForm(NULL, [
        'use_ajax' => 1,
      ], $this->callT('Apply'));

    // Save the view.
    $this->drupalPostForm(NULL, [], $this->callT('Save'));

    $this->drupalGetWithImagePreload($this->demoInput['recipes_view_path']);
    // Completed recipes view output.
    $this->setUpScreenShot('views-duplicate_final.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .site-footer') . $this->removeScrollbars() . $this->setBodyColor() . '"');

    // Topic: views-block - Adding a Block Display to a View.

    // Add a block to the Recipes view.
    $this->drupalGet('admin/structure/views/view/' . $recipes_view);
    // Add display button on Recipes view edit page, with Block highlighted
    // (admin/structure/views/view/recipes).
    $this->setUpScreenShot('views-block_add-block.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .region-breadcrumb, .region-highlighted, #views-display-extra-actions, #edit-display-settings, #edit-actions, .views-preview-wrapper, .dropbutton-wrapper, .messages') . 'jQuery(\'#views-display-menu-tabs li.add ul\').show();' . $this->setWidth('.region-content') . '"');
    // Note: in the UI that you actually see in practice, the button looks
    // like a link, and the displayed name is just "Block". But if you look at
    // the HTML source of the page (before jQuery/Ajax processing), the
    // button actually asys "Add Block" (with that capitalization).
    $this->drupalPostForm(NULL, [],
      $this->callT('Add @type', TRUE, ['@type' => $this->callT('Block')]));

    // Update various settings for the block display.

    // Display title.
    $this->clickLinkContainingUrl('block_1/display_title');
    $this->drupalPostForm(NULL, [
        'display_title' => $this->demoInput['recipes_view_block_display_name'],
      ], $this->callT('Apply'));

    // Block title.
    $this->clickLinkContainingUrl('block_1/title');
    // Configuring the block title for this display only.
    $this->setUpScreenShot('views-block_title.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .region-breadcrumbs, .region-highlighted') . 'jQuery(\'#edit-override-dropdown\').val(\'block_1\'); jQuery(\'#edit-title\').val(\'' . $this->demoInput['recipes_view_block_title'] . '\');' . $this->setWidth('.content-header, .layout-container') . '"');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'title' => $this->demoInput['recipes_view_block_title'],
      ], $this->callT('Apply'));

    // Style - unformatted list.
    $this->clickLinkContainingUrl('block_1/style');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'style[type]' => 'default',
      ], $this->callT('Apply'));
    $this->drupalPostForm(NULL, [], $this->callT('Apply'));

    // Image field.
    $this->clickLinkContainingUrl('block_1/field/field_' . $main_image);
    // Configuring the image field for this display only.
    $this->setUpScreenShot('views-block_image.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .region_breadcrumbs, .region-highlighted') . 'jQuery(\'#edit-override-dropdown\').val(\'block_1\'); jQuery(\'#edit-options-settings-image-style\').val(\'thumbnail\');' . $this->addBorder('#edit-override-dropdown, #edit-options-settings-image-style') . $this->setWidth('.content-header, .layout-container') . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'options[settings][image_style]' => 'thumbnail',
      ], $this->callT('Apply'));


    // Remove ingredients filter.
    $this->clickLinkContainingUrl('block_1/filter/field_');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
      ], $this->callT('Remove'));

    // Add sort by authored date.
    $this->clickLinkContainingUrl('add-handler/' . $recipes_view . '/block_1/sort');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'name[node_field_data.created]' => 'node_field_data.created',
      ], $this->callT('Add and configure @types', TRUE, ['@types' => $this->callT('sort criteria')]));
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'options[order]' => 'DESC',
      ], $this->callT('Apply'));

    // Instead of pager, display 5 recipes.
    $this->clickLinkContainingUrl('block_1/pager');
    $this->drupalPostForm(NULL, [
        'override[dropdown]' => 'block_1',
        'pager[type]' => 'some',
      ], $this->callT('Apply'));
    $this->drupalPostForm(NULL, [
        'pager_options[items_per_page]' => 5,
      ], $this->callT('Apply'));

    // Save the view.
    $this->drupalPostForm(NULL, [], $this->callT('Save'));
    // View saved confirmation message.
    $this->setUpScreenShot('views-block_recipes.png', 'onLoad="' . $this->showOnly('.messages--status') . $this->setWidth('.messages', 600) . $this->setBodyColor() . $this->removeScrollbars() . '"');

    // Place the block on the sidebar.
    $this->placeBlock('views_block:' . $recipes_view . '-block_1', [
        'region' => 'sidebar_second',
        'theme' => 'bartik',
        'label' => $this->demoInput['recipes_view_block_title'],
      ]);
    $this->drupalGetWithImagePreload('<front>');
    // Home page with recipes sidebar visible.
    $this->setUpScreenShot('views-block_sidebar.png', 'onLoad="' . $this->hideArea('#toolbar-administration, footer') . $this->removeScrollbars() . '"');

  }

  /**
   * Makes screenshots for the Multilingual chapter, first topic only.
   *
   * The rest of the chapter is in the doTranslating() method. It was split
   * because the first topic is very time-consuming due to needing to
   * import the translations.
   */
  protected function doMultilingualSetup() {

    // Topic: language-add - Adding a Language.

    // Due to a Core bug, installing a module corrupts translations. So,
    // export them first.
    $this->exportTranslations();

    // Enable the 4 multilingual modules.
    // For non-English versions, locale and language will already be enabled;
    // for English, not yet. In both cases, we need config/content translation
    // though.
    $this->drupalGet('admin/modules');
    $values = [
      'modules[Multilingual][config_translation][enable]' => TRUE,
      'modules[Multilingual][content_translation][enable]' => TRUE,
    ];
    if ($this->demoInput['first_langcode'] == 'en') {
      $values += [
        'modules[Multilingual][language][enable]' => TRUE,
        'modules[Multilingual][locale][enable]' => TRUE,
      ];
    }
    $this->drupalPostForm(NULL, $values, $this->callT('Install'));

    // Due to a core bug, installing a module corrupts translations. So,
    // import the saved translations. Then rebuild the cache/container.
    $this->importTranslations();
    $this->resetAll();
    $this->clearCache();

    // Add the second language.
    $this->drupalGet('admin/config/regional/language/add');
    $this->drupalPostForm(NULL, [
        'predefined_langcode' => $this->demoInput['second_langcode'],
      ], $this->callT('Add language'));
    // Confirmation and language list after adding Spanish language.
    $this->setUpScreenShot('language-add-list.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->removeScrollbars() . '"');

    // Place the Language Switcher block in sidebar second (no screenshots).
    $this->placeBlock('language_block:language_interface', [
        'region' => 'sidebar_second',
        'theme' => 'bartik',
        'label' => $this->callT('Language'),
      ]);
  }

  /**
   * Makes screenshots for the Multilingual chapter, except first topic.
   *
   * The first topic is in the doMultilingualSetup() method.
   */
  protected function doTranslating() {

    $recipes_view = $this->demoInput['recipes_view_machine_name'];
    $ingredients = $this->demoInput['recipe_field_ingredients_machine_name'];

    // Topic: language-content-config - Configuring Content Translation

    // Set up content translation for Basic page nodes, Custom blocks, and
    // Custom menu links.
    $this->drupalGet('/admin/config/regional/content-language');
    // Top section of Content language settings page
    // (admin/config/regional/content-language).
    $this->setUpScreenShot('language-content-config_custom.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .content-header, .region-breadcrumb, .help, #edit-cations') . 'jQuery(\'#edit-entity-types-node\').attr(\'checked\', \'checked\'); jQuery(\'#edit-entity-types-block-content\').attr(\'checked\', \'checked\'); jQuery(\'#edit-entity-types-menu-link-content\').attr(\'checked\', \'checked\');' . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [
        'entity_types[node]' => 'node',
        'settings[node][page][translatable]' => TRUE,
        'settings[node][page][settings][language][language_alterable]' => TRUE,
        'settings[node][page][fields][title]' => TRUE,
        'settings[node][page][fields][uid]' => FALSE,
        'settings[node][page][fields][status]' => TRUE,
        'settings[node][page][fields][created]' => FALSE,
        'settings[node][page][fields][changed]' => FALSE,
        'settings[node][page][fields][promote]' => FALSE,
        'settings[node][page][fields][sticky]' => FALSE,
        'settings[node][page][fields][path]' => TRUE,
        'settings[node][page][fields][body]' => TRUE,

        'entity_types[block_content]' => 'block_content',
        'settings[block_content][basic][translatable]' => TRUE,
        'settings[block_content][basic][settings][language][language_alterable]' => TRUE,
        'settings[block_content][basic][fields][info]' => TRUE,
        'settings[block_content][basic][fields][changed]' => FALSE,
        'settings[block_content][basic][fields][body]' => TRUE,

        'entity_types[menu_link_content]' => 'menu_link_content',
        'settings[menu_link_content][menu_link_content][translatable]' => TRUE,
        'settings[menu_link_content][menu_link_content][settings][language][language_alterable]' => TRUE,
        'settings[menu_link_content][menu_link_content][translatable]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][title]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][description]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][changed]' => FALSE,
      ], $this->callT('Save configuration'));
    // Main settings area for Custom Block translations.
    $this->setUpScreenShot('language-content-config_content.png', 'onLoad="' . $this->showOnly('#edit-settings-block-content tr.bundle-settings') . $this->setWidth('#edit-settings-block-content', 600) . 'jQuery(\'tr\').css(\'border-bottom\', \'none\');' . $this->removeScrollbars() . '"');
    // Field settings area for Basic page translations.
    $this->setUpScreenShot('language-content-config_basic_page.png', 'onLoad="' . $this->hideArea('*') . 'jQuery(\'#edit-settings-node tr.field-settings\').has(\'input[name*=&quot;settings[node][page]&quot;]\').show().parents().show(); jQuery(\'#edit-settings-node tr.field-settings\').has(\'input[name*=&quot;settings[node][page]&quot;]\').find(\'*\').show();'  . $this->setWidth('#edit-settings-node', 400) . $this->setWidth('.language-content-settings-form .field', 350) . $this->setWidth('.language-content-settings-form .operations', 0) . $this->removeScrollbars() . '"');

    // Topic: language-content-translate - Translating Content.

    // Add a translation of the Home page.
    $this->drupalGet('node/1/translations');
    // Screen shot of the translations page for the Home page content item.
    $this->setUpScreenShot('language-content-translate-add.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . '"');
    $this->drupalPostForm('node/1/translations/add/' . $this->demoInput['first_langcode'] . '/' . $this->demoInput['second_langcode'], [
        'title[0][value]' => $this->demoInput['home_title_translated'],
        'body[0][value]' => $this->demoInput['home_body_translated'],
        'path[0][alias]' => $this->demoInput['home_path_translated'],
      ], $this->callT('Save and keep published (this translation)'));

    // Topic: language-config-translate - Translating Configuration.

    // Translate the Recipes view.
    $this->drupalGet('/admin/structure/views/view/' . $recipes_view . '/translate/' . $this->demoInput['second_langcode'] . '/add');
    // Exposed form options for Recipes view.
    $this->setUpScreenShot('language-config-translate-recipes-view.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . 'jQuery(\'#edit-default, #edit-display-options, #edit-exposed-form, #edit-options\').attr(\'open\', \'open\');' . $this->removeScrollbars() . '"');
    $this->drupalPostForm(NULL, [
        'translation[config_names][views.view.' . $recipes_view . '][display][default][display_options][title]' => $this->demoInput['recipes_view_title_translated'],
        'translation[config_names][views.view.' . $recipes_view . '][display][default][display_options][exposed_form][options][submit_button]' => $this->demoInput['recipes_view_submit_button_translated'],
        'translation[config_names][views.view.' . $recipes_view . '][display][default][display_options][filters][field_' . $ingredients . '_target_id][expose][label]' => $this->demoInput['recipes_view_ingredients_label_translated'],
      ], $this->callT('Save translation'));

  }

  /**
   * Makes screenshots for the Extending chapter.
   */
  protected function doExtending() {

    $vendors_view = $this->demoInput['vendors_view_machine_name'];

    // Topic: extend-module-find - Finding Modules

    // English-only screenshots.
    if ($this->demoInput['first_langcode'] == 'en') {

      // Search for Admin Toolbar in 8.x on drupal.org.
      $this->drupalGet('https://www.drupal.org/project/project_module?f[0]=im_vid_44%3A13028&f[1]=&f[2]=im_vid_3%3A53&f[3]=drupal_core%3A7234&f[4]=sm_field_project_type%3Afull&text=Admin+Toolbar&solrsort=iss_project_release_usage+desc&op=Search');
      // Module search box on https://www.drupal.org/project/project_module.
      $this->setUpScreenShot('extend-module-find_module_finder.png', 'onLoad="' . $this->showOnly('#project-solr-browse-projects-form') . $this->removeScrollbars() . '"');
      // Search results on https://www.drupal.org/project/project_module.
      $this->setUpScreenShot('extend-module-find_search_results.png', 'onLoad="' . $this->showOnly('#block-system-main .node-project-module') . $this->hideArea('img') . $this->removeScrollbars() . '"');
      $this->drupalGet('https://www.drupal.org/project/admin_toolbar');
      // Project page for Admin Toolbar module.
      $this->setUpScreenShot('extend-module-find_project_info.png', 'onLoad="' . $this->hideArea('#nav-header, #header, #page-title-tools, #nav-content, #banner') . $this->addBorder('#block-versioncontrol-project-project-maintainers, .issue-cockpit-categories, #block-drupalorg-project-resources, .project-info') . $this->removeScrollbars() . '"');
    }

    // Topic: extend-maintenance: Enabling and Disabling Maintenance Mode.
    $this->drupalPostForm('admin/config/development/maintenance', [
        'maintenance_mode' => 1,
      ], $this->callT('Save configuration'));
    $this->clearCache();
    $this->drupalLogout();
    $this->drupalGet('<front>');
    // Site in maintenance mode.
    $this->setUpScreenShot('extend-maintenance-mode-enabled.png', 'style="overflow: hidden;"');
    $this->drupalLogin($this->rootUser);
    $this->drupalPostForm('admin/config/development/maintenance', [
        'maintenance_mode' => FALSE,
      ], $this->callT('Save configuration'));
    $this->clearCache();
    $this->drupalLogout();
    $this->drupalGet('<front>');
    // Site no longer in maintenance mode.
    $this->setUpScreenShot('extend-maintenance-mode-disabled.png', 'onLoad="' . $this->removeScrollbars() . '"');
    $this->drupalLogin($this->rootUser);

    // Topic: extend-module-install - Downloading and Installing a Module from
    // drupal.org.

    // English-only screenshot.
    if ($this->demoInput['first_langcode'] == 'en') {
      $this->drupalGet('https://www.drupal.org/project/admin_toolbar');
      // Downloads section of the Admin Toolbar project page on drupal.org.
      $this->setUpScreenShot('extend-module-install-download.png', 'onLoad="window.scroll(0,6000);' . $this->hideArea('#header, #nav-header, #page-heading, #tabs, #sidebar-first, #banner, .submitted, .field-name-body, .field-name-field-supporting-organizations, h3:contains(&quot;Information&quot;), .project-info, .node-footer, #aside, #footer, img') . $this->addBorder('.view-display-id-recommended > .view-content td.views-field-extension a:first') . $this->removeScrollbars() . '"');
    }

    $this->drupalGet('admin/modules/install');
    // Install new module page (admin/modules/install).
    $this->setUpScreenShot('extend-module-install-admin-toolbar-do.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 600) . '"');

    // Topic: extend-theme-find - Finding Themes

    // English-only screenshots.
    if ($this->demoInput['first_langcode'] == 'en') {
      // Search for actively maintained 8.x themes on drupal.org.
      $this->drupalGet('https://www.drupal.org/project/project_theme?f[0]=im_vid_44%3A13028&f[1]=&f[2]=drupal_core%3A7234&f[3]=sm_field_project_type%3Afull&text=&solrsort=iss_project_release_usage+desc&op=Search');
      // Theme search box on https://www.drupal.org/project/project_theme.
      $this->setUpScreenShot('extend-theme-find_theme_finder.png', 'onLoad="' . $this->showOnly('#project-solr-browse-projects-form') . $this->removeScrollbars() . '"');
      // Search results on https://www.drupal.org/project/project_theme.
      $this->setUpScreenShot('extend-theme-find_search_results.png', 'onLoad="' . $this->showOnly('#block-system-main .node-project-theme') . $this->hideArea('img') . $this->removeScrollbars() . '"');
    }

    // Topic: extend-theme-install - Downloading and Installing a Theme from
    // drupal.org.

    $this->drupalGet('https://www.drupal.org/project/mayo');
    // Downloads section of the Mayo project page on drupal.org.
    $this->setUpScreenShot('extend-theme-install-download.png', 'onLoad="window.scroll(0,6000);' . $this->hideArea('#header, #nav-header, #page-heading, #tabs, #sidebar-first, #banner, .submitted, .field-name-body, .field-name-field-supporting-organizations, h3:contains(&quot;Information&quot;), .project-info, .node-footer, #aside, #footer, .field-name-field-project-images, img') . $this->addBorder('.view-display-id-recommended > .view-content td.views-field-extension a:first') . $this->removeScrollbars() . '"');

    $this->drupalGet('admin/theme/install');
    // Install new theme page (admin/theme/install).
    $this->setUpScreenShot('extend-theme-install-page.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 600) . '"');

    $this->drupalGet('admin/appearance');
    // Mayo theme on the Appearance page.
    $this->setUpScreenShot('extend-theme-install-appearance-page.png', 'onLoad="window.scroll(0,6000);' . $this->showOnly('.system-themes-list-uninstalled .theme-selector:contains(&quot;Mayo&quot;)') . 'jQuery(\'.system-themes-list-uninstalled\').css(\'border\', \'none\');' . '"');

    // Topic: extend-manual-install - Manually Downloading Module or Theme
    // Files.

    // English-only screenshot.
    if ($this->demoInput['first_langcode'] == 'en') {
      $this->drupalGet('https://www.drupal.org/project/admin_toolbar');
      // Downloads section of the Admin Toolbar project page on drupal.org.
      $this->setUpScreenShot('extend-manual-install-download.png', 'onLoad="window.scroll(0,6000);' . $this->hideArea('#header, #nav-header, #page-heading, #tabs, #sidebar-first, #banner, .submitted, .field-name-body, .field-name-field-supporting-organizations, h3:contains(&quot;Information&quot;), .project-info, .node-footer, #aside, #footer, img') . $this->addBorder('.view-display-id-recommended > .view-content td.views-field-extension a:first') . $this->removeScrollbars() . '"');
    }

    // Topic: extend-deploy - Deploying New Site Features.

    // Export the Vendors view configuration. In the UI, you can get the
    // export via Ajax, but Ajax post did not work in the test. Luckily,
    // it also has a direct URL.
    $this->drupalGet('admin/config/development/configuration/single/export/view/' . $vendors_view);
    // Single configuration export of the Vendors view from
    // admin/config/development/configuration/single/export.
    $this->setUpScreenShot('extend-deploy-export-single.png', 'onLoad="' . $this->hideArea('#toolbar-administration, .breadcrumb ol li:gt(4)') . $this->setWidth('.content-header, .layout-container', 600) . $this->removeScrollbars() . '"');

  }

  /**
   * Makes screenshots for the Preventing and Fixing Problems chapter.
   */
  protected function doPreventing() {

    // Topic: prevent-log - Concept: Log.

    $this->drupalGet('admin/reports/dblog');
    // Recent log messages report (admin/reports/dblog).
    $this->setUpScreenShot('prevent-log.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->removeScrollbars() . '"');

    // Topic: prevent-status - Concept: Status Report.

    $this->drupalGet('admin/reports/status');
    $this->useExampleHome();
    // Status report (admin/reports/status).
    $this->setUpScreenShot('prevent-status.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->removeScrollbars() . '"');
  }

  /**
   * Makes screenshots for the Security chapter.
   */
  protected function doSecurity() {
    // For these topics, we do not want to download translations.
    // They don't seem to get downloaded correctly within the test, and it
    // causes the test to hang.
    \Drupal::configFactory()->getEditable('locale.settings')
      ->set('translation.import_enabled', FALSE)
      ->save();
    $this->clearCache();

    // Topic: security-cron - Configuring Cron Maintenance Tasks.

    $this->drupalGet('admin/config/system/cron');
    $this->useExampleHome();
    // Cron configuration page (admin/config/system/cron).
    $this->setUpScreenShot('security-cron.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 600) . $this->removeScrollbars() . '"');

    // Topic: security-update-module - Updating a Module.

    $this->drupalGet('https://www.drupal.org/project/admin_toolbar');
    // Downloads section of the Admin Toolbar project page on drupal.org.
    $this->setUpScreenShot('security-update-module-release-notes.png', 'onLoad="window.scroll(0,6000);' . $this->hideArea('#header, #nav-header, #page-heading, #tabs, #sidebar-first, #banner, .submitted, .field-name-body, .field-name-field-supporting-organizations, h3:contains(&quot;Information&quot;), .project-info, .node-footer, #aside, #footer, img') . $this->addBorder('.view-display-id-recommended > .view-content td.views-field-field-release-version a') . $this->removeScrollbars() . '"');

    // Due to a Core bug, installing a module corrupts translations. So,
    // export them first.
    $this->exportTranslations();

    // Install an old version of the Admin Toolbar module, and visit the
    // Updates page.
    $this->drupalPostForm('admin/modules', [
        'modules[Administration][admin_toolbar][enable]' => TRUE,
      ], $this->callT('Install'));

    // Due to a core bug, installing a module corrupts translations. So,
    // import the saved translations. Then rebuild the cache/container.
    $this->importTranslations();
    $this->resetAll();
    $this->clearCache();

    $this->drupalGet('admin/reports/updates/update');
    // Update page for module (admin/reports/updates/update).
    $this->setUpScreenShot('security-update-module-updates.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 800) . $this->removeScrollbars() . '"');
    // Uninstall the module.
    $this->drupalPostForm('admin/modules/uninstall', [
        'uninstall[admin_toolbar]' => 1,
      ], $this->callT('Uninstall'));
    $this->drupalPostForm(NULL, [], $this->callT('Uninstall'));

    // Topic: security-update-theme - Updating a Theme.

    // Install an old version of the Mayo theme, and visit the Updates page.
    $this->drupalGet('admin/appearance');
    $this->clickLinkContainingUrl('theme=mayo');
    $this->drupalGet('admin/reports/updates/update');
    // Update page for theme (admin/reports/updates/update).
    $this->setUpScreenShot('security-update-theme-updates.png', 'onLoad="' . $this->hideArea('#toolbar-administration') . $this->setWidth('.content-header, .layout-container', 800) . $this->removeScrollbars() . '"');
    // As this is the last screenshot, do not bother to uninstall the theme.
  }

  /**
   * Clears the Drupal cache.
   */
  protected function clearCache() {
    $this->drupalPostForm('admin/config/development/performance', [], $this->callT('Clear all caches'));
  }

  /**
   * Calls t() in the user interface, with the site's first language.
   *
   * For some unknown reason, when running this in non-English languages, the
   * form submits etc. are not working because it is not looking for the
   * correct (translated) button text when you make a call like
   * @code
   * $this->drupalPostForm('url/here', [], t('Button name'));
   * @endcode
   * So this method wraps t() by passing in the language code to translate
   * to, which is easier than trying to figure out what the real problem is.
   *
   * @param string $text
   *   Text to pass into t(). Must have been defined by another module or it
   *   will not be in the translation database.
   * @param bool $first
   *   (optional) TRUE (default) to translate to the first language in the
   *   demoInput member variable; FALSE to use the second language.
   * @param array $args
   *   (optional) Arguments to substitute in for @vars etc. in the string.
   *
   * @return string
   *   Original string, translated string, or a wrapper object that can be used
   *   like a string.
   */
  protected function callT($text, $first = TRUE, $args = []) {
    if ($first) {
      $langcode = $this->demoInput['first_langcode'];
    }
    else {
      $langcode = $this->demoInput['second_langcode'];
    }

    if ($langcode == 'en') {
      return new FormattableMarkup($text, $args);
    }

    return new TranslatableMarkup($text, $args, ['langcode' => $langcode]);
  }

  /**
   * Makes clean screenshot output, and adds a note afterwards.
   *
   * The screen shot is of the current page. The HTML output for each screenshot
   * can be manipulated using JavaScript, so that it only shows a small area of
   * the page, with the rest hidden. The script that captures the images then
   * trims the images automatically down to the relevant area.
   *
   * @param string $file
   *   Name of the screen shot file.
   * @param string $body_addition
   *   Additional text to add into the HTML body tag. Example:
   *   'onLoad="window.scroll(0,500);"'. This code should blank out irrelevant
   *   portions of the page, so that the ImageMagick capture script can trim
   *   the image automatically down to the right size.
   *
   * @see UserGuideDemoTestBase::showOnly()
   * @see UserGuideDemoTestBase::hideArea()
   * @see UserGuideDemoTestBase::setWidth()
   * @see UserGuideDemoTestBase::setBodyColor()
   * @see UserGuideDemoTestBase::removeScrollbars()
   * @see UserGuideDemoTestBase::reloadOnce()
   * @see UserGuideDemoTestBase::addBorder()
   */
  protected function setUpScreenShot($file, $body_addition = '') {
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
    $this->pass('SCREENSHOT: ' . $file . ' ' . $url);
  }

  /**
   * Creates jQuery code to show only the selected part of the page.
   *
   * @param string $selector
   *   jQuery selector for the part of the page you want to be shown. Single
   *   quotes must be escaped.
   * @param bool $border
   *   (optional) If TRUE, also add a white border around $selector. This is
   *   needed as a buffer for trimming the image, if the part you are trimming
   *   to is along the edge of the page. Defaults to FALSE.
   *
   * @return string
   *   jQuery code that will hide everything else on the page. Also puts a
   *   white border around the page for trimming purposes. Note that everything
   *   inside $selector is also shown, which may not be what you want.
   *
   * @see UserGuideDemoTestBase::hideArea()
   */
  protected function showOnly($selector, $border = FALSE) {
    // Hide everything.
    $code = "jQuery('*').hide(); ";
    // Show the selected item and its children and parents.
    $code .= "jQuery('" . $selector . "').show(); ";
    $code .= "jQuery('" . $selector . "').parents().show(); ";
    $code .= "jQuery('" . $selector . "').find('*').show(); ";
    // Add border and remove box shadow, if indicated.
    if ($border) {
      $code .= $this->addBorder($selector, '#ffffff', TRUE);
    }
    return $code;
  }

  /**
   * Creates jQuery code to hide the selected part of the page.
   *
   * @param string $selector
   *   jQuery selector for the part of the page you want to hide. Single
   *   quotes must be escaped.
   *
   * @return string
   *   jQuery code that will hide this section of the page.
   *
   * @see UserGuideDemoTestBase::showOnly()
   */
  protected function hideArea($selector) {
    return "jQuery('" . $selector . "').hide(); ";
  }

  /**
   * Creates jQuery code to set the width of an area on the page.
   *
   * @param string $selector
   *   jQuery selector for the part of the page you want to set the width of.
   *   Single quotes must be escaped.
   * @param int $width
   *   (optional) Number of pixels. Defaults to 600.
   *
   * @return string
   *   jQuery code that will set the width of this area.
   */
  protected function setWidth($selector, $width = 600) {
    return "jQuery('" . $selector . "').css('width', '" . $width . "px'); ";
  }

  /**
   * Creates jQuery code to set the body background color.
   *
   * This is useful to aid in being able to trim the screenshot automatically.
   * On some pages, non-white body background color may interfere with being
   * able to trim the page effectively.
   *
   * @param string $color
   *   (optional) Color to set. Defaults to white.
   *
   * @return string
   *   jQuery code that will set the background color.
   */
  protected function setBodyColor($color = '#ffffff') {
    return "jQuery('body').css('background', '" . $color . "'); ";
  }

  /**
   * Creates jQuery code to omit scrollbars.
   *
   * This is useful to aid in being able to trim the screenshot automatically.
   * On some pages, the scrollbars may interfere with the process.
   *
   * @return string
   *   jQuery code that will set the body to not overflow.
   */
  protected function removeScrollbars() {
    return "jQuery('body').css('overflow', 'hidden');";
  }


  /**
   * Creates JavaScript code to reload the page, exactly once.
   *
   * This is useful for race conditions on some pages between built-in Ajax
   * and the added JavaScript code.
   *
   * @return string
   *   JavaScript code that will cause the page to reload once.
   */
  protected function reloadOnce() {
    return "if(window.location.href.substr(-2) !== '?r') window.location = window.location.href + '?r';";
  }

  /**
   * Creates jQuery code to put a 2px border around an area of a page.
   *
   * @param string $selector
   *   jQuery selector for the part of the page you want to add a border to.
   *   Single quotes must be escaped.
   * @param string $color
   *   A hex color code starting with #. Defaults to the standard red color.
   * @param bool $remove_shadow
   *   (optional) TRUE to also remove the box shadow. Defaults to FALSE.
   *
   * @return string
   *   jQuery code that adds the border.
   */
  protected function addBorder($selector, $color = '#e62600', $remove_shadow = FALSE) {
    $code = "jQuery('" . $selector . "').css('border', '2px solid " . $color . "'); ";
    if ($remove_shadow) {
      $code .= "jQuery('" . $selector . "').css('box-shadow', 'none'); ";
    }

    return $code;
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

  /**
   * Finds a link whose link contains the given URL substring, and clicks it.
   */
  protected function clickLinkContainingUrl($url, $index = 0) {
    $urls = $this->xpath('//a[contains(@href, :url)]', [':url' => $url]);
    if (isset($urls[$index])) {
      $url_target = $this->getAbsoluteUrl($urls[$index]['href']);
      $this->drupalGet($url_target);
    }
    else {
      $this->fail('Could not find link matching ' . $url);
    }
  }

  /**
   * Finds and preloads all images on the given path, and the the page itself.
   *
   * This is primarily useful if you have image styles in force on the page.
   */
  protected function drupalGetWithImagePreload($path) {
    $this->drupalGet($path);
    $imgs = $this->xpath('//img');
    foreach ($imgs as $img) {
      $source = $this->getAbsoluteUrl($img['src']);
      // Load the image.
      $this->drupalGet($source);
      // Reload the main page again so that getAbsoluteUrl() works right.
      $this->drupalGet($path);
    }
  }

  /**
   * Makes a backup of uploads and database, and stores it in a directory.
   *
   * @param string $directory
   *   Directory to store the backup in.
   *
   * @see UserGuideDemoTestBase::restoreBackup()
   */
  protected function makeBackup($directory) {
    $this->clearCache();
    \Drupal::service('file_system')->mkdir($directory, NULL, TRUE);
    $db_manager = $this->backupDBManager($directory);
    $db_manager->backup('database1', 'directory1');
    $file_manager = $this->backupFileManager($directory);
    $file_manager->backup('public1', 'directory1');
    $this->pass('BACKUP MADE TO: ' . $directory);
  }

  /**
   * Restores a backup of uploads and database.
   *
   * @param string $directory
   *   Directory the backup was saved in.
   *
   * @see UserGuideDemoTestBase::makeBackup()
   */
  protected function restoreBackup($directory) {
    // The User 1 account created in this session will not match the one in
    // the database we are restoring, so take care of this problem.
    $pass_raw = $this->rootUser->pass_raw;
    $this->drupalLogout();

    // Actually update the database and files.
    $db_manager = $this->backupDBManager($directory);
    $db_manager->restore('database1', 'directory1', 'database.mysql.gz');
    $file_manager = $this->backupFileManager($directory);
    $file_manager->restore('public1', 'directory1', 'public_files.tar.gz');
    $this->pass('BACKUP RESTORED FROM: ' . $directory);

    // Fix the configuration for temp files directory.
    \Drupal::configFactory()->getEditable('system.file')
      ->set('path.temporary', $this->tempFilesDirectory)
      ->save();

    // Clear out the container and cache.
    $this->rebuildContainer();
    drupal_flush_all_caches();
    $this->refreshVariables();

    // Update the root user, log in, and clear the cache again.
    $this->rootUser = User::load(1);
    // This line is needed for $this->drupalLogin().
    $this->rootUser->pass_raw = $pass_raw;
    // This line is needed for User::save().
    $this->rootUser->pass = $pass_raw;
    $this->rootUser->save();
    $this->drupalLogin($this->rootUser);
    $this->clearCache();
  }

  /**
   * Sets up and returns a database backup manager.
   *
   * @param string $directory
   *   Directory for the backup. The backup file name should be
   *   database.mysql.gz within this directory.
   *
   * @return BackupMigrate
   *   The database backup manager object.
   */
  protected function backupDBManager($directory) {
    // Figure out which tables to exclude: anything lacking the current
    // test prefix. Also do not save data for any table containing 'cache_'.
    $db_info = Database::getConnectionInfo()['default'];
    $prefix = $this->getDatabasePrefix();
    $exclude = [];
    $no_data = [];
    $all_tables = Database::getConnection()->query('SHOW TABLES')->fetchCol();
    foreach ($all_tables as $table) {
      if (strpos($table, $prefix) !== 0) {
        $exclude[] = $table;
      }
      elseif ((strpos($table, 'cache_') !== FALSE)) {
        $no_data[] = $table;
      }
    }

    // Set up the backup manager object.
    $config = new Config([
        'database1' => $db_info,
        'directory1' => [
          'directory' => $directory,
        ],
        'compressor' => [
          'compression' => 'gzip',
        ],
        'namer' => [
          'filename' => 'database',
          'timestamp' => FALSE,
        ],
        'excluder' => [
          'exclude_tables' => $exclude,
          'nodata_tables' => $no_data,
        ],
        'renamer' => [
          'source_prefix' => $prefix,
          'destination_prefix' => 'generic_simpletest_prefix_',
        ],
      ]);

    $manager = new BackupMigrate();
    $manager->services()->add('ArchiveReader', new TarArchiveReader());
    $manager->services()->add('ArchiveWriter', new TarArchiveWriter());
    $manager->services()->add('TempFileAdapter', new TempFileAdapter($this->getTempFilesDirectory()));
    $manager->services()->add('TempFileManager', new TempFileManager($manager->services()->get('TempFileAdapter')));

    $db_source = new MySQLiSource();
    $manager->services()->addClient($db_source);
    $manager->sources()->add('database1', $db_source);
    $manager->sources()->setConfig($config);

    $dir_dest = new DirectoryDestination();
    $manager->services()->addClient($dir_dest);
    $manager->destinations()->add('directory1', $dir_dest);
    $manager->destinations()->setConfig($config);

    $manager->plugins()->add('excluder', new DBExcludeFilter());
    $manager->plugins()->add('renamer', new DBTableRenameFilter());
    $manager->plugins()->add('namer', new FileNamer());
    $manager->plugins()->add('compressor', new CompressionFilter());
    $manager->plugins()->setConfig($config);

    return $manager;
  }

  /**
   * Sets up and returns a file backup manager.
   *
   * @param string $directory
   *   Directory for the backup. The backup file name should be
   *   public_files.tar within this directory.
   *
   * @return BackupMigrate
   *   The file backup manager object.
   */
  protected function backupFileManager($directory) {
    // Set up the backup manager object.
    $files_source = new FileDirectorySource();
    $config = new Config([
        'public1' => [
          'directory' => drupal_realpath('public://'),
        ],
        'directory1' => [
          'directory' => $directory,
        ],
        'compressor' => [
          'compression' => 'gzip',
        ],
        'namer' => [
          'filename' => 'public_files',
          'timestamp' => FALSE,
        ],
        'excluder' => [
          'source' => $files_source,
          'exclude_filepaths' => [
            '.htaccess',
            'php',
          ],
        ],
      ]);

    $manager = new BackupMigrate();
    $manager->services()->add('ArchiveReader', new TarArchiveReader());
    $manager->services()->add('ArchiveWriter', new TarArchiveWriter());
    $manager->services()->add('TempFileAdapter', new TempFileAdapter($this->getTempFilesDirectory()));
    $manager->services()->add('TempFileManager', new TempFileManager($manager->services()->get('TempFileAdapter')));

    $manager->services()->addClient($files_source);
    $manager->sources()->add('public1', $files_source);
    $manager->sources()->setConfig($config);

    $dir_dest = new DirectoryDestination();
    $manager->services()->addClient($dir_dest);
    $manager->destinations()->add('directory1', $dir_dest);
    $manager->destinations()->setConfig($config);

    $manager->plugins()->add('excluder', new FileExcludeFilter());
    $manager->plugins()->add('namer', new FileNamer());
    $manager->plugins()->add('compressor', new CompressionFilter());
    $manager->plugins()->setConfig($config);

    return $manager;
  }

  /**
   * Replaces the front URL with example.com in the current page.
   */
  protected function useExampleHome() {
    $front_url = Url::fromRoute('<front>')->setAbsolute()->toString();
    $this->content = str_replace($front_url, 'http://example.com/', $this->content);
  }

  /**
   * Overrides drupalLogin() so it will work in our multingual setup.
   *
   * Also skips some of the checks and logging out existing user.
   */
  protected function drupalLogin(AccountInterface $account) {
    $this->drupalGet('user/login');
    $this->drupalPostForm(NULL, [
        'name' => $account->getUserName(),
        'pass' => $account->pass_raw,
      ], $this->callT('Log in'));
    if (isset($this->sessionId)) {
      $account->session_id = $this->sessionId;
    }
    $this->loggedInUser = $account;
    $this->container->get('current_user')->setAccount($account);
  }

  /**
   * Exports the translations for the first language to a temporary file.
   *
   * @see UserGuideDemoBase::importTranslations()
   */
  protected function exportTranslations() {
    if ($this->demoInput['first_langcode'] != 'en') {
      $this->drupalPostForm('admin/config/regional/translate/export', [
          'langcode' => $this->demoInput['first_langcode'],
          'content_options[not_customized]' => 1,
          'content_options[customized]' => 1,
          'content_options[not_translated]' => 0,
        ], $this->callT('Export'));
      $directory = '/tmp/screenshots_backups/' . $this->getDatabasePrefix();
      \Drupal::service('file_system')->mkdir($directory, NULL, TRUE);
      $this->translationFilename = $directory . '/' . $this->demoInput['first_langcode'] . '_' . $this->randomMachineName() . '.po';
      file_put_contents($this->translationFilename, $this->getRawContent());
      $this->pass('TRANSLATIONS SAVED TO: ' . $this->translationFilename);
    }
  }

  /**
   * Imports the translations for the first language from the file, if any.
   *
   * @see UserGuideDemoBase::exportTranslations()
   */
  protected function importTranslations() {
    if ($this->translationFilename) {
      // The setting for translation path is likely incorrect, so fix it.
      \Drupal::configFactory()->getEditable('locale.settings')
        ->set('translation.path', $this->tempFilesDirectory)
        ->save();

      $this->drupalPostForm('admin/config/regional/translate/import', [
        'langcode' => $this->demoInput['first_langcode'],
        'overwrite_options[not_customized]' => 1,
        'overwrite_options[customized]' => 1,
        'customized' => 0,
        'files[file]' => $this->translationFilename,
      ], $this->callT('Import'));

      $this->pass('TRANSLATIONS READ FROM: ' . $this->translationFilename);
    }
  }

}
