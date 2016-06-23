<?php

namespace Drupal\auto_screenshots\Tests;

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
 * - Override the $demoInput member variable, translating the input into the
 *   target language. Note that most of the text should not contain
 *   ' characters, as this will result in an error when generating the screen
 *   shots.
 */
abstract class UserGuideDemoTestBase extends WebTestBase {

  /**
   * There is a screenshot of the Drupal Core download page for this release.
   */
  protected $latestRelease = '8.1.3';

  /**
   * Strings and other information to input into the demo site.
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

    // Home page content item.
    'home_title' => 'Home',
    'home_body' => "<p>Welcome to City Market - your neighborhood farmers market!</p>\n<p>Open: Sundays, 9 AM to 2 PM, April to September</p>\n<p>Location: Parking lot of Trust Bank, 1st & Union, downtown</p>",
    'home_path' => '/home',
    'home_revision_log_message' => 'Updated opening hours',

    // About page content item.
    'about_title' => 'About',
    'about_body' => "<p>City Market started in April 1990 with five vendors.</p>\n<p>Today, it has 100 vendors and an average of 2000 visitors per day.</p>",
    'about_path' => '/about',
    'about_description' => 'History of the market',

    // Vendor content type settings.
    'vendor_type_name' => 'Vendor',
    'vendor_type_description' => 'Information about a vendor',
    'vendor_type_title_label' => 'Vendor name',
    'vendor_field_url_label' => 'Vendor URL',
    'vendor_field_image_label' => 'Main image',
    'vendor_field_image_directory' => 'vendors',

    // Vendor 1 content item.
    'vendor_1_title' => 'Happy Farm',
    'vendor_1_path' => '/vendors/happy_farm',
    'vendor_1_summary' => 'Happy Farm grows vegetables that you will love.',
    'vendor_1_body' => '<p>Happy Farm grows vegetables that you will love.</p>\n
<p>We grow tomatoes, carrots, and beets, as well as a variety of salad greens.</p>',
    'vendor_1_url' => 'http://happyfarm.com',

    // Vendor 2 content item.
    'vendor_2_title' => 'Sweet Honey',
    'vendor_2_path' => '/vendors/sweet_honey',
    'vendor_2_summary' => 'Sweet Honey produces honey in a variety of flavors throughout the year.',
    'vendor_2_body' => '<p>Sweet Honey produces honey in a variety of flavors throughout the year.</p>\n<p>Our varieties include clover, apple blossom, and strawberry.</p>',
    'vendor_2_url' => 'http://sweethoney.com',

    // Recipe content type settings.
    'recipe_type_name' => 'Recipe',
    'recipe_type_description' => 'Recipe submitted by a vendor',
    'recipe_type_title_label' => 'Recipe name',
    'recipe_field_image_label' => 'Main image',
    'recipe_field_image_directory' => 'recipes',
    'recipe_field_ingredients_label' => 'Ingredients',

    // Recipe ingredients terms added.
    'recipe_field_ingredients_term_1' => 'Butter',
    'recipe_field_ingredients_term_2' => 'Eggs',
    'recipe_field_ingredients_term_3' => 'Milk',
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
    $this->drupalLogin($this->rootUser);

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
      // Set it to default. After this, the buttons should be translated.
      $this->drupalPostForm('admin/config/regional/language', [
          'site_default_language' => $this->demoInput['first_langcode'],
        ], 'Save configuration');
      // Delete English.
      $this->drupalPostForm('admin/config/regional/language/delete/en', [], $this->callT('Delete'));
    }

    // Figure out where the assets directory is.
    $dir_parts = explode('/', drupal_get_path('module', 'auto_screenshots'));
    array_pop($dir_parts);
    $assets_directory = implode('/', $dir_parts) . '/assets/';

    // Set up a red border CSS style for outlining portions of images.
    $red_border = '2px solid #e62600;';

    // Topic: preface-conventions - screen shot of the top navigation bar.
    $this->drupalGet('admin/config');
    $this->setUpScreenShot('preface-conventions-top-menu.png', [550, 275, 30, 200]);

    // Screen shot of System section of the page.
    $this->setUpScreenShot('preface-conventions-config-system.png', [550, 275, 30, 200]);

    // Topic: block-regions - screen shot of region preview.
    $this->drupalGet('admin/structure/block/demo/bartik');
    $this->setUpScreenShot('block-regions-bartik.png', [550, 275, 30, 200]);

    // Topic: install-prepare - screen shots of downloading from drupal.org.
    $this->drupalGet('https://www.drupal.org/download');
    $this->setUpScreenShot('install-prepare-downloads.png', [550, 275, 30, 200]);
    $this->drupalGet('https://www.drupal.org/project/drupal');
    $this->setUpScreenShot('install-prepare-recommended.png', [550, 275, 30, 200]);
    $this->drupalGet('https://www.drupal.org/project/drupal/releases/' . $this->latestRelease);
    $this->setUpScreenShot('install-prepare-files.png', [550, 275, 30, 200]);

    // Topic: config-overview - screen shot of the top navigation bar.
    $this->drupalGet('admin/config');
    $this->setUpScreenShot('config-overview-toolbar.png', [550, 275, 30, 200]);
    // Use JQuery to orient it vertically and take another screenshot.
    $this->setUpScreenShot('config-overview-vertical.png', [550, 275, 30, 200], 'onLoad="jQuery(\'.toolbar-toggle-orientation button\').click();"');

    // Screen shot of contextual links, after clicking pencil icon.
    $this->drupalGet('<front>');
    $this->setUpScreenShot('config-overview-pencils.png', [550, 275, 30, 200], 'onLoad="jQuery(\'.contextual-toolbar-tab button.toolbar-icon-edit\').click();"');

    // Topic: config-basic - Edit basic site information.
    $this->drupalGet('admin/config/system/site-information');
    $this->drupalPostForm(NULL, [
        'site_name' => $this->demoInput['site_name'],
        'site_slogan' => $this->demoInput['site_slogan'],
        'site_mail' => $this->demoInput['site_mail'],
      ], $this->callT('Save configuration'));
    $this->assertText($this->callT('The configuration options have been saved.'));

    // In this case, we want the screen shot made after we have entered the
    // information, because for a normal user, this information would have
    // been set up during the install.
    $this->drupalGet('admin/config/system/site-information');
    $this->setUpScreenShot('config-basic-SiteInfo.png', [550, 275, 30, 200]);

    // Date and time configuration, same topic.
    $this->drupalGet('admin/config/regional/settings');
    $this->drupalPostForm(NULL, [
      'site_default_country' => $this->demoInput['site_default_country'],
      'date_default_timezone' => $this->demoInput['date_default_timezone'],
      'configurable_timezones' => FALSE,
      ], $this->callT('Save configuration'));
    $this->assertText($this->callT('The configuration options have been saved.'));

    // In this case, we want the screen shot made after we have entered the
    // information, because for a normal user, this information would have
    // been set up during the install.
    $this->drupalGet('admin/config/regional/settings');
    $this->setUpScreenShot('config-basic-TimeZone.png', [550, 275, 30, 200]);

    // Topic: config-install -- Installing a module.
    $this->drupalGet('admin/modules');
    // For this screenshot, check the Activity Tracker module checkbox.
    $this->setUpScreenShot('config-install-check-modules.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-modules-core-tracker-enable\').attr(\'checked\', 1);"');
    $this->drupalPostForm(NULL, [
        'modules[Core][tracker][enable]' => TRUE,
      ], $this->callT('Install'));

    // Topic: config-uninstall - Uninstall unused modules.
    $this->drupalGet('admin/modules/uninstall');
    // For this screen shot, make sure the Search, History, and Activity
    // Tracker checkboxes are checked, using JavaScript.
    $this->setUpScreenShot('config-uninstall_searchModUninstall.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,2000); jQuery(\'#edit-uninstall-tracker\').attr(\'checked\', 1); jQuery(\'#edit-uninstall-search\').attr(\'checked\', 1); jQuery(\'#edit-uninstall-history\').attr(\'checked\', 1);"');
    $this->drupalPostForm(NULL, [
        'uninstall[tracker]' => TRUE,
        'uninstall[search]' => TRUE,
        'uninstall[history]' => TRUE,
      ], $this->callT('Uninstall'));
    $this->assertText($this->callT('Would you like to continue with uninstalling the above?'));
    // Module names are not translated.
    $this->assertText('Activity Tracker');
    $this->assertText('Search');
    $this->assertText('History');
    $this->setUpScreenShot('config-uninstall_confirmUninstall.png', [550, 275, 30, 200]);
    $this->drupalPostForm(NULL, [], $this->callT('Uninstall'));
    $this->assertText($this->callT('The selected modules have been uninstalled.'));

    // Topic config-user: Configuring user account settings.
    $this->drupalGet('admin/config/people/accounts');
    $this->drupalPostForm(NULL, [
        'user_register' => 'admin_only',
      ], $this->callT('Save configuration'));
    $this->assertText($this->callT('The configuration options have been saved.'));
    // For this screen shot, scroll down 500px.
    $this->setUpScreenShot('config-user_account_reg.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,500);"');
    // For this screen shot, scroll down to the bottom and open the Account
    // activation vertical tab.
    $this->setUpScreenShot('config-user_email.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,5000); jQuery(\'#edit-email-activated\').click();"');

    // Topic config-theme: Configuring the theme.
    $this->drupalGet('admin/appearance');
    $this->assertText('Bartik');
    $this->assertLink($this->callT('Settings'));
    $this->setUpScreenShot('config-theme_bartik_settings.png', [550, 275, 30, 200]);
    $this->drupalGet('admin/appearance/settings/bartik');
    // For this screenshot, before the setting are changed, use JavaScript to
    // scroll down to the bottom, uncheck Use the default logo, and outline
    // the logo upload box.
    $this->setUpScreenShot('config-theme_logo_upload.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,5000); jQuery(\'#edit-default-logo\').click(); jQuery(\'#edit-logo-upload\').css(\'border\', \'' . $red_border . '\');"');

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
        'logo_path' => $assets_directory . 'AnytownFarmersMarket.png',
      ], $this->callT('Save configuration'));
    $this->assertText($this->callT('The configuration options have been saved.'));
    $this->assertRaw($assets_directory);

    // For this screen shot, scroll down so the color wheel is in view.
    $this->setUpScreenShot('config-theme_color_scheme.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,600);"');
    // For this screen shot, scroll down to the bottom so the preview is in
    // view.
    $this->setUpScreenShot('config-theme_color_scheme_preview.png', [550, 275, 30, 200], 'onLoad="window.scroll(0,5000);"');

    $this->drupalGet('<front>');
    $this->setUpScreenShot('config-theme_final_result.png', [550, 275, 30, 200]);

    // Topic: content-create - Creating a Content Item
    $this->drupalGet('node/add/page');
    // Screen shot with title, body, and alias filled in, and alias area
    // expanded. The body is in an editor that is an iframe, so for the screen
    // shot, replace the iframe with a text area.
    $this->setUpScreenShot('content-create-create-basic-page.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-title-0-value\').val(\'' . $this->demoInput['home_title'] . '\'); jQuery(\'iframe\').replaceWith(\'<textarea rows=10 cols=200>' . $this->demoInput['home_body'] . '</textarea>\'); jQuery(\'#edit-path-settings\').show(); jQuery(\'#edit-path-0-alias\').val(\'' . $this->demoInput['home_path'] . '\');');
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['home_title'],
        'body[0][value]' => $this->demoInput['home_body'],
        'path[0][alias]' => $this->demoInput['home_path'],
      ], $this->callT('Save and publish'));

    // Last step: create About page. No screenshots.
    $this->drupalPostForm('node/page/add', [
        'title[0][value]' => $this->demoInput['about_title'],
        'body[0][value]' => $this->demoInput['about_body'],
        'path[0][alias]' => $this->demoInput['about_path'],
      ], $this->callT('Save and publish'));

    // Topic: content-edit - Editing a content item
    $this->drupalGet('admin/content');
    // Simple screenshot of content list.
    $this->setUpScreenShot('content-edit-admin-content.png', [550, 275, 30, 200]);
    $this->drupalGet('node/1/edit');
    // Screen shot of the revision area of the edit page, with revision
    // information filled in.
    $this->setUpScreenShot('content-edit-revision.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-revision\').attr(\'checked\', 1); jQuery(\'#edit-revision-log-wrapper\').show(); jQuery(\'#edit-revision-log-0-val\').val(\'' . $this->demoInput['home_revision_log_message'] . '\');');
    // Submit the revision.
    $this->drupalPostForm(NULL, [
        'revision_log[0][value]' => $this->demoInput['home_revision_log_message'],
      ], $this->callT('Save and keep published'));
    // Simple screenshot of top of page with updated message.
    $this->setUpScreenShot('content-edit-message.png', [550, 275, 30, 200]);

    // Topic: content-in-place-edit - Editing with the In-Place Editor
    $this->drupalGet('node/2');
    // @todo: Determine whether the screen shots in this topic can be
    // auto-generated or not, since they are heavily JavaScript dependent.
    // Possibly all the clicks and hovers can be simulated? Not sure.
    $this->setUpScreenShot('test-in-place-edit.png', [550, 275, 30, 200]);

    // Topic: menu-home - Designating a Front Page for your Site
    $this->drupalGet('admin/config/system/site-information');
    $this->drupalPostForm(NULL, [
        'site_frontpage' => '/home',
      ], $this->callT('Save configuration'));
    // Take the screenshot after posting the form.
    $this->setUpScreenShot('menu-home_new_text_field.png', [550, 275, 30, 200]);
    $this->drupalGet('<front>');
    $this->setUpScreenShot('menu-home_final.png', [550, 275, 30, 200]);

    // Topic: menu-link-from-content: Adding a page to the navigation.
    $this->drupalGet('admin/content');
    $this->setUpScreenShot('menu-link-from-content_edit_page.png', [550, 275, 30, 200], 'onLoad="jQuery(\'table.views-view-table tr:eq(0) .dropbutton-widget).css(\'border\', \'' . $red_border . '\');"');

    $this->drupalGet('node/2/edit');
    $this->drupalPostForm(NULL, [
        'menu[enabled]' => TRUE,
        'menu[title]' => $this->demoInput['about_title'],
        'menu[description]' => $this->demoInput['about_description'],
        'menu[weight]' => -3,
      ], $this->callT('Save and keep published'));
    // Make this screenshot after the menu information is submitted.
    $this->drupalGet('node/2/edit');
    $this->setUpScreenShot('menu-link-from-content.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-menu .details-wrapper).show();"');
    $this->drupalGet('<front>');
    $this->setUpScreenShot('menu-link-from-content-result.png', [550, 275, 30, 200]);

    // Topic: menu-reorder - Changing the order of navigation.
    $this->drupalGet('admin/structure/menu');
    $this->setUpScreenShot('menu-reorder_menu_titles.png', [550, 275, 30, 200], 'onLoad="jQuery(\'tr:eq(2) .dropbutton-widget).css(\'border\', \'' . $red_border . '\');"');
    $this->drupalGet('admin/structure/menu/manage/main');
    $this->setUpScreenShot('menu-reorder_edit_menu.png', [550, 275, 30, 200]);

    // @todo - can we make the after-drag screenshot? Maybe not.
    // menu-reorder_reorder.png

    // Actually figuring out what to submit on the editing page is difficult,
    // because the field name has some config hash in it. So instead, to make
    // the change in the test, go back to the about page and edit the weight
    // there.
    $this->drupalGet('node/2/edit');
    $this->drupalPostForm(NULL, [
        'menu[weight]' => 10,
      ], $this->callT('Save and keep published'));
    $this->drupalGet('<front>');
    $this->setUpScreenShot('menu-reorder_final_order.png', [550, 275, 30, 200]);

    // Topic: structure-content-type - Adding a Content Type
    // Create the Vendor content type.
    $this->drupalGet('admin/structure/types');
    $this->drupalGet('admin/structure/types/add');
    // For this one, get the Name and Description fields, and the top of page.
    $this->setUpScreenShot('structure-content-type-add.png', [550, 275, 30, 200]);
    // For this one, get just the Submission form settings section.
    $this->setUpScreenShot('structure-content-type-add-submission-form-settings.png', [550, 275, 30, 200]);
    // For this one, expand Publishing options and check boxes.
    $this->setUpScreenShot('structure-content-type-add-Publishing-Options.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-workflow .details-wrapper).show(); jQuery(\'.vertical-tabs li:eq(0)).toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(1)).toggleClass(\'is-selected\');" jQuery(\'#edit-options-promote\').attr(\'checked\', 0); jQuery(\'#edit-options-revision\').attr(\'checked\', 1);');
    // For this one, expand Display settings and uncheck boxes.
    $this->setUpScreenShot('structure-content-type-add-Display-Settings.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-display .details-wrapper).show(); jQuery(\'.vertical-tabs li:eq(0)).toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(2)).toggleClass(\'is-selected\');" jQuery(\'#edit-display-submitted\').attr(\'checked\', 0);');
    // For this one, expand Menu settings and uncheck boxes.
    $this->setUpScreenShot('structure-content-type-add-Menu-Settings.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-menu .details-wrapper).show(); jQuery(\'.vertical-tabs li:eq(0)).toggleClass(\'is-selected\'); jQuery(\'.vertical-tabs li:eq(3)).toggleClass(\'is-selected\');" jQuery(\'#edit-menu-options-main\').attr(\'checked\', 0);');

    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['vendor_type_name'],
        'description' => $this->demoInput['vendor_type_description'],
        'title_label' => $this->demoInput['vendor_type_title_label'],
        'options[promote]' => FALSE,
        'options[revision]' => TRUE,
        'display_submitted' => FALSE,
        'menu_options[main]' => FALSE,
        'language_configuration[content_translation]' => TRUE,
      ], $this->callT('Save and manage fields'));
    $this->setUpScreenShot('structure-content-type-add-confirmation.png', [550, 275, 30, 200]);

    // Final task for structure-content-type - Add content type for Recipe.
    // No screen shots.
    $this->drupalGet('admin/structure/types');
    $this->drupalGet('admin/structure/types/add');
    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['recipe_type_name'],
        'description' => $this->demoInput['recipe_type_description'],
        'title_label' => $this->demoInput['recipe_type_title_label'],
        'options[promote]' => FALSE,
        'display_submitted' => FALSE,
        'menu_options[main]' => FALSE,
        'language_configuration[content_translation]' => TRUE,
      ], $this->callT('Save and manage fields'));


    // Topic: structure-content-type-delete - Deleting a Content Type
    // Delete the Article content type.
    $this->drupalGet('admin/structure/types');
    $this->setUpScreenShot('structure-content-type-delete-dropdown.png', [550, 275, 30, 200], 'onLoad="jQuery(\'tr.odd .dropbutton-toggle button\').click();');

    $this->drupalGet('admin/structure/types/manage/article/delete');
    $this->setUpScreenShot('structure-content-type-delete-confirmation.png', [550, 275, 30, 200]);

    $this->drupalPostForm(NULL, [], $this->callT('Delete'));
    $this->setUpScreenShot('structure-content-type-delete-confirm.png', [550, 275, 30, 200]);

    // Topic: structure-fields - Adding basic fields to a content type.
    // Add Vendor URL field to Vendor content type.
    $this->drupalGet('admin/structure/types/manage/vendor/fields/add-field');
    // Fill in the form in the screenshot: choose Link for field type and
    // type in Vendor URL for the Label.
    $this->setUpScreenShot('structure-fields-add-field.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-new-storage-type\').val(\'link\'); jQuery(\'#new-storage-wrapper\').show(); jQuery(\'#edit-label\').val(\'' . $this->demoInput['vendor_field_url_label'] . '\');');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'link',
        'label' => $this->demoInput['vendor_field_url_label'],
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'settings[link_type]' => 16,
        'settings[title]' => 0,
      ], $this->callT('Save settings'));
    // To make the screen shot, go back to the edit form for this field.
    $this->drupalGet('admin/structure/types/manage/vendor/fields/node.vendor.field_vendor_url');
    $this->setUpScreenShot('structure-fields-vendor-url.png', [550, 275, 30, 200]);

    // Add Main Image field to Vendor content type.
    $this->drupalGet('admin/structure/types/manage/vendor/fields/add-field');
    $this->drupalPostForm(NULL, [
        'new_storage_type' => 'image',
        'label' => $this->demoInput['vendor_field_image_label'],
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [], $this->callT('Save field settings'));
    $this->drupalPostForm(NULL, [
        'required' => 1,
        'settings[file_directory]' => $this->demoInput['vendor_field_image_directory'],
        'settings[min_resolution][x]' => 800,
        'settings[min_resolution][y]' => 600,
        'settings[max_filesize]' => '5 MB',
      ], $this->callT('Save settings'));
    $this->setUpScreenShot('structure-fields-result.png', [550, 275, 30, 200]);
    // To make the screen shot, go back to the edit form for this field.
    $this->drupalGet('admin/structure/types/manage/vendor/fields/node.vendor.field_main_image');
    $this->setUpScreenShot('structure-fields-main-img.png', [550, 275, 30, 200]);
    // Add the main image field to Recipe. No screenshots.
    $this->drupalGet('admin/structure/types/manage/recipe/fields/add-field');
    $this->drupalPostForm(NULL, [
        'existing_storage_name' => 'field_main_image',
        'label' => $this->demoInput['recipe_field_image_label'],
      ], $this->callT('Save and continue'));
    $this->drupalPostForm(NULL, [
        'required' => 1,
        'settings[file_directory]' => $this->demoInput['recipe_field_image_directory'],
        'settings[min_resolution][x]' => 800,
        'settings[min_resolution][y]' => 600,
        'settings[max_filesize]' => '5 MB',
      ], $this->callT('Save settings'));

    // Create two Vendor content items. No screenshots.
    $this->drupalGet('node/add/vendor');
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['vendor_1_title'],
        'files[field_main_image_0]' => $assets_directory . 'farm.jpg',
        'body[0][summary]' => $this->demoInput['vendor_1_summary'],
        'body[0][value]' => $this->demoInput['vendor_1_body'],
        'path[0][alias]' => $this->demoInput['vendor_1_path'],
        'field_vendor_url[0][uri]' => $this->demoInput['vendor_1_url'],
      ], $this->callT('Save and publish'));
    $this->drupalGet('node/add/vendor');
    $this->drupalPostForm(NULL, [
        'title[0][value]' => $this->demoInput['vendor_2_title'],
        'files[field_main_image_0]' => $assets_directory . 'honey_bee.jpg',
        'body[0][summary]' => $this->demoInput['vendor_2_summary'],
        'body[0][value]' => $this->demoInput['vendor_2_body'],
        'path[0][alias]' => $this->demoInput['vendor_2_path'],
        'field_vendor_url[0][uri]' => $this->demoInput['vendor_2_url'],
      ], $this->callT('Save and publish'));

    // The next topic with screenshots is structure-taxonomy, but the
    // screenshot is generated later.

    // Topic: structure-taxonomy-setup - Setting Up a Taxonomy.
    $this->drupalGet('admin/structure/taxonomy');
    $this->setUpScreenShot('structure-taxonomy-setup-taxonomy-page.png', [550, 275, 30, 200]);
    // Add Ingredients taxonomy vocabulary.
    $this->drupalGet('admin/structure/taxonomy/add');
    // Fill in the form in the screenshot, with the vocabulary name.
    $this->setUpScreenShot('structure-taxonomy-setup-add-vocabulary.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-name\').val(\'' . $this->demoInput['recipe-field-ingredients-label'] . '\');');
    $this->drupalPostForm(NULL, [
        'name' => $this->demoInput['recipe-field-ingredients-label'],
      ], $this->callT('Save'));
    $this->setUpScreenShot('structure-taxonomy-setup-vocabulary-overview.png', [550, 275, 30, 200]);
    // Add 3 sample terms.
    $this->drupalGet('admin/structure/taxonomy/manage/ingredients/add');
    // Fill in the form in the screenshot, with the term name Butter.
    $this->setUpScreenShot('structure-taxonomy-setup-add-term.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-name-0-value\').val(\'' . $this->demoInput['recipe-field-ingredients-term_1'] . '\');');
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe-field-ingredients-term_1'],
      ], $this->callT('Save'));
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe-field-ingredients-term_2'],
      ], $this->callT('Save'));
    $this->drupalPostForm(NULL, [
        'name[0][value]' => $this->demoInput['recipe-field-ingredients-term_3'],
      ], $this->callT('Save'));

    // Add the Ingredients field to Recipe content type.

    // @todo Finish the structure-taxonomy-setup topic.


    // @todo Ready to add more topics here!


    // Topic (out of order): structure-taxonomy - Concept: Taxonomy.
    // Screen shot of Carrots taxonomy page after adding Recipe content items.
    // @todo make this screenshot.

    // Topic: language-add - Adding a language.
    // For non-English versions, locale and language will already be enabled.
    // For English, not yet. In both cases, we need config/content translation
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

    $this->drupalGet('admin/config/regional/language');
    $this->drupalGet('admin/config/regional/language/add');
    $this->drupalPostForm(NULL, [
        'predefined_langcode' => $this->demoInput['second_langcode'],
      ], $this->callT('Add language'));
    $this->setUpScreenShot('language-add-list.png', [550, 275, 30, 200]);

    // Topic: language-content-config - Configuring Content Translation
    $this->drupalGet('/admin/config/regional/content-language');
    // Simple screenshot of top section.
    $this->setUpScreenShot('language-content-config_custom.png', [550, 275, 30, 200]);
    // For this screenshot, we need to check Content, and then under
    // Article and Basic Page, click the Show language selector button. Also
    // under Basic page, simulate expanding the drop-down for default language
    // by setting the 'size' attribute.
    $this->setUpScreenShot('language-content-config_content.png', [550, 275, 30, 200], 'onLoad="jQuery(\'#edit-entity-types-node\').attr(\'checked\', 1); jQuery(\'#edit-entity-types-block-content\').attr(\'checked\', 1); jQuery(\'#edit-entity-types-menu-link-content\').attr(\'checked\', 1); jQuery(\'#edit-settings-node\').show(); jQuery(\'#edit-settings-node-article-settings-language-language-alterable\').attr(\'checked\', 1); jQuery(\'#edit-settings-node-page-settings-language-langcode\').attr(\'size\', 7);"');

    $this->drupalPostForm(NULL, [
        'entity_types[node]' => TRUE,
        'entity_types[block_content]' => TRUE,
        'entity_types[menu_link_content]' => TRUE,

        'settings[node][page][translatable]' => TRUE,
        'settings[node][page][fields][title]' => TRUE,
        'settings[node][page][fields][uid]' => FALSE,
        'settings[node][page][fields][status]' => FALSE,
        'settings[node][page][fields][created]' => FALSE,
        'settings[node][page][fields][changed]' => FALSE,
        'settings[node][page][fields][promote]' => FALSE,
        'settings[node][page][fields][uid]' => FALSE,
        'settings[node][page][fields][sticky]' => FALSE,
        'settings[node][page][fields][path]' => TRUE,
        'settings[node][page][fields][body]' => TRUE,

        'settings[block_content][basic][translatable]' => TRUE,
        'settings[block_content][basic][fields][info]' => TRUE,
        'settings[block_content][basic][fields][changed]' => FALSE,
        'settings[block_content][basic][fields][body]' => TRUE,

        'settings[menu_link_content][menu_link_content][translatable]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][title]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][description]' => TRUE,
        'settings[menu_link_content][menu_link_content][fields][changed]' => FALSE,
      ], $this->callT('Save configuration'));
    // Screenshot of the Basic page area after saving the configuration.
    $this->setUpScreenShot('language-content-config_custom.png', [550, 275, 30, 200]);

  }

  /**
   * Clears the Drupal cache.
   *
   * @todo Remove this if it is not used.
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
   *
   * @return string
   *   Original string, translated string, or a wrapper object that can be used
   *   like a string.
   */
  protected function callT($text, $first = TRUE) {
    if ($first) {
      $langcode = $this->demoInput['first_langcode'];
    }
    else {
      $langcode = $this->demoInput['second_langcode'];
    }

    if ($langcode == 'en') {
      return $text;
    }

    return t($text, [], ['langcode' => $langcode]);
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
