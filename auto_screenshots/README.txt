This module does not do anything directly. All it contains is tests that:
- Verify that the user interface text that is used in the User Guide and the
  steps for the tasks are present and work.
- Generates screen capture images
- Generates database dumps and files directories that you can use to clone the
  demo site that the User Guide builds, as it would be at the end of each
  chapter.

A list of images that could not be automated, and therefore need to be generated
manually, can be found in the source/en/images/README.txt file (under the main
project directory).

Also, text that comes from drupal.org pages cannot be tested in the current
testing framework, because drupal.org blocks access. So, periodically, the
following topic pages should be checked for accuracy with respect to changes
to drupal.org pages:
- extend-manual-install
- extend-module-find
- extend-module-install
- extend-theme-find
- extend-theme-install
- install-prepare
- security-update-module
- security-update-theme

SETTING UP THE ENVIRONMENT
--------------------------

The tests are run using Drupal Core's PHPUnit test framework from the
command line. They generate HTML files, which can be processed using command-
line image tools to make screenshot images. This section details how to set up
the tools; some steps may need to be repeated if you update software on your
local computer. Here are the steps:

1. Install Firefox and Chrome or Chromium browser, if you do not already have
   them installed.

2. Install a local test Drupal site, running the version of Drupal you want to
   generate screen shots for (Drupal 8.0.2, 8.1.0, etc. -- make sure it is the
   latest actual release, not a development branch, so that translations are
   downloaded correctly).

3. Apply patches for two core issues:

   a. https://www.drupal.org/node/2886904
   This makes the open/closed icons for details elements on admin
   forms go away in Firefox. To fix this, edit your local copy of file
     core/assets/vendor/normalize-css/normalize.css
   and remove "summary" from getting CSS display: block around line 47.

   b. https://www.drupal.org/project/drupal/issues/2905295
   At this time, the issue has no patch. But it can be gotten around by
   editing
     core/modules/locale/locale.module
   and commenting out the call to locale_system_set_config_langcodes() in the
   function locale_modules_installed() around line 316.

4. Copy the entire User Guide project directory into the top-level 'modules'
   directory of your local Drupal site. (Alternatively, if your operating
   system supports it, you can instead make a symbolic link.)

5. Edit the top-level Drupal site composer.json file. Add the following to
   the "extra" / "merge-plugin" section:

     "require": [
       "modules/user_guide/auto_screenshots/composer.json"
     ],

6. Run the command
     composer update
   to install dependencies of this project. If you do not have Composer
   installed, see https://getcomposer.org/

   This will install a Backup Migrate library from Github. You will need to
   make sure that this issue has been fixed in the version you download:

   https://github.com/backupmigrate/backup_migrate_core/issues/7

   If not, you'll need to edit the file
   vendor/backupmigrate/core/src/Source/MySQLiSource.php
   to put in the fix shown in that issue.

7. Follow the steps in core/tests/README.md to set up the testing environment,
   including the parts that are specific to running tests that use
   chromedriver and WebDriverTestBase.

8. At the command line, make sure the "import" command from ImageMagick is
   installed. On Linux, use one of the following commands to install it, if it
   is not present:

   sudo apt-get install imagemagick
   sudo yum install imagemagick

9. Download a near-current 8.x version of the Mayo theme to the /themes
   directory in your test site (for instance, if the current version is
   8.x-1.15, get 8.x-1.14). It is used for some of the screenshots.
   https://www.drupal.org/project/mayo

10. Do the same for a near-current version of the Admin Toolbar module
    from https://www.drupal.org/project/admin_toolbar


MAKING SCREENSHOTS
------------------

Once you are set up for screenshots, you can make a set of screen shots for
a particular language as follows:

1. Start chromedriver and keep it running:

   chromedriver --port=4444


2. Run the test for that language with a command like this, from the core
   directory under your Drupal root:

   sudo -u www-data ../vendor/bin/phpunit -v -c /path/to/phpunit.xml \
   ../modules/user_guide/auto_screenshots/tests/src/FunctionalJavascript/UserGuideDemoTestEn.php

   If your web user is something other than www-data, modify the command
   appropriately, and change the language near the end of the command if
   necessary. You will also need to change the path to your phpunit.xml file.

   Note that you can edit the test file that you are running, to make it run
   just a subset of the screenshots and tests. To do this, find the member
   variable $notRunList, change its name to $runList, and change 'skip' to
   another value to run it (see the definitions in the UserGuideDemoTestBase.php
   file).

3. Assuming the test run succeeds, you should see some output that tells you
   where the backups and screenshot HTML files have been stored. You can copy
   the .gz files in these directories into the "backups" directory under this
   directory, in the subdirectory for the appropriate language, and commit
   them to Git.

4. To make images from the screenshot files, open Firefox, and set the browser
   width to 1200 pixels, and height to 800 pixels. Make sure the zoom level
   is set to normal.

   Then run the mkshots.sh file in this directory. It takes 4 arguments:

   - The directory where the HTML files are.
   - The base URL for that directory within the Drupal site.
   - The output directory where you'd like the screen shots to be saved,
     as either absolute path or relative to where you plan to run the scripts.
   - The window ID for your Firefox window. You can find this by running the
     xwininfo command and clicking in the Firefox window.  It should be
     something like 0x3200078. Or you can use the window name (if you can figure
     out what that would be).

   You may need to edit the timeout (3 seconds) or the Y offset (125) in the
   script if it doesn't run correctly.


BACKUP AND RESTORE
------------------

The screenshot script also has the ability to make database and public files
backups at intermediate points (at the end of each chapter, roughly), so that
you can restore to those points and make only a subset of the screenshots (to
save time). See the documentation for the $runList member variable in the
UserGuideDemoTestBase class for details, and override the $runList variable in
the class for the language you are running.

The backups from the tests have been saved in the repository for this project,
for each language, in subdirectories of the "backups" directory under this
directory. They could also be used to set up demo sites, by restoring the
database and files manually. The database table prefix is
'generic_simpletest_prefix'.


MORE DETAILS FOR THE CURIOUS
----------------------------

You can look at the output before you make screen shots. In the test results,
there are lines like:

SCREENSHOT filename.png http://example.com/long_url_here

The file name in this line is the image file that will be created by the
script. The URL is the HTML for making the image.

For developers... The screen shot output is generated by a custom method
in the UserGuideDemoTest class called setUpScreenShot(). It generates a
clean output file (without the headers that are usually on a drupalGet()),
as well as the SCREENSHOT line.

Also, the code that generates each screenshot adds JavaScript commands to each
page's HTML output, which do things like clicking buttons, opening up vertical
tabs, and drawing boxes around highlighted items on the page. The JavaScript
also hides irrelevant areas of the page, which allows the ImageMagick commands
to trim the images down to their final sizes automatically.
