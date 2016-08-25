This module does not do anything directly. All it contains is tests that can be
used to generate screen capture images and (eventually, maybe?) a database dump
and files directory so you can clone the demo site.

A list of images that could not be automated, and therefore need to be generated
manually, can be found in the source/en/images/README.txt file (under the main
project directory).


SETTING UP THE ENVIRONMENT
--------------------------

The screenshots can be generated using Firefox, the Greasemonkey plugin, a
local Drupal test site, and some command line image tools. This section
details how to set up the tools. Here are the steps:

1. Install Firefox if necessary.

2. Open up Firefox, and install the "Greasemonkey" add-on.

3. From the Tools / Greasemonkey menu, choose "New user script". Type in some
   name and click OK. It should pop up an editing window.

4. In place of the entire text in that window, copy in the contents of the
   greasemonkey_screenshot.js file in this directory. You may need to do
   something special to enable pasting into the editor. Save the file.

5. At the command line, make sure the "import" command from ImageMagick is
   installed. On Linux, use one of the following commands to install it, if it
   is not present:

   sudo apt-get install imagemagick
   sudo yum install imagemagick

6. Install a local test Drupal site, running the version of Drupal you want to
   generate screen shots for (Drupal 8.0.x, 8.1.x, etc.).

7. Copy either this directory or the entire User Guide project directory
   into the top-level 'modules' directory of your local Drupal site.
   (Alternatively, if your operating system supports it, you can instead make
   a symbolic link.)

8. Run the command
   composer install
   to install dependencies of this project. If you do not have Composer
   installed, see https://getcomposer.org/

9. Enable the Testing (simpletest) module in the Drupal site.
   Drush command:
   drush en simpletest

10. Download a current 8.x version of the Mayo theme to the /themes directory
    in your test site. It is used for some of the screenshots.
    https://www.drupal.org/project/mayo
    Drush command:
    drush dl mayo


MAKING SCREENSHOTS
------------------

Once you are set up for screenshots, you can make a set of screen shots for
a particular language as follows:

1. Go to admin/config/development/testing (Administration / Configuration /
   Development / Testing) in your local Drupal test site.

2. Run the "UserGuideDemoTestEn" test interactively and wait for it to
   finish (or the one for the language you want to generate). Just run one
   language at a time.

3. At the bottom of the page, you should see a form (from the Greasemonkey
   script). Enter the values and click the button. You'll need to supply:

- The output directory where you'd like the screen shots to be saved,
  as either absolute path or relative to where you plan to run the scripts.
- The window ID for your Firefox window. You can find this by running the
  xwininfo command and clicking in the Firefox window.  It should be something
  like 0x3200078. Or you can use the window name (if you can figure out what
  that would be).
- The Y offset - how many pixels to offset the images, to get past all of the
  Firefox toolbars in your Firefox window. A value of 128 seems to be about
  right if you have the menu bar, tabs, URL bar, and bookmarks showing. If you
  have fewer toolbars, use a smaller offset.
- The timeout - how long to wait for the page to load before taking the
  screenshot, in seconds. 2 is probably enough.

4. The screen shot commands should appear below the form. Copy and paste them
   into a script, and run the script at the command line. Then close up all
   the Firefox windows it opened up.

NOTE: You need to run the screen shot script before you leave the testing output
page. The Testing module will delete all HTML output once you leave the results
page or start another test.

NOTE 2: You may want to run just one screen shot command from the script to
begin with, to see how it works, and then adjust the Y offset and timeout.

NOTE 3: Some screenshots scroll the browser window. This may not work in a
foolproof way, and assumes the browser width is set to about 1200 pixels wide,
with normal text size settings.


BACKUP AND RESTORE
------------------

The screenshot script also has the ability to make database and public files
backups at intermediate points (at the end of each chapter, roughly), so that
you can restore to those points and make only a subset of the screenshots (to
save time). See the documentation for the $runList member variable in the
UserGuideDemoTestBase class for details, and override the $runList variable in
the class for the language you are running.

The backups themselves are in the source repository for this project, in
subdirectory "backups" under this directory. They could also be used to set up
demo sites, by restoring the database and files manually. The database table
prefix is 'generic_simpletest_prefix'.


MORE DETAILS FOR THE CURIOUS
----------------------------

You can look at the output before you make screen shots. In the test results
page, there are links that say "Screen shot output", and below each one is a
line like:

SCREENSHOT filename.png http://example.com/long_url_here

The file name in this line is the image file that will be created by the
script. The URL is the URL of the "Screen shot output" link from the line above.

The Greasemonkey script finds these SCREENSHOT lines in the output, and
parses them (along with the information you entered in the form) to make the
screen shot script.

For developers... The screen shot output is generated by a custom method
in the UserGuideDemoTest class called setUpScreenShot(). It generates a
clean output file (without the headers that are usually on a drupalGet()),
as well as the SCREENSHOT line for the Greasemonkey script to parse.

Also, the code that generates each screenshot adds JavaScript commands to each
page's HTML output, which do things like clicking buttons, opening up vertical
tabs, and drawing boxes around highlighted items on the page. The JavaScript
also hides irrelevant areas of the page, which allows the ImageMagick commands
to trim the images down to their final sizes automatically.
