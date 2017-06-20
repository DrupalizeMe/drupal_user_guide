This directory contains the build scripts for the manual:
- mkoutput.sh - builds the HTML output for use in the AsciiDoc Display Direct
  module. See https://www.drupal.org/project/asciidoc_display
- mkfeeds.sh - builds the HTML output for use in the AsciiDoc Display Feeds
  module. See https://www.drupal.org/project/asciidoc_display
- mkebooks.sh - builds e-book and PDF output.

The scripts were derived from the build scripts in:
  https://www.drupal.org/project/asciidoc_display
See that project's README.txt file for more information.

LANGUAGES

A note on languages and configuration files: Each language has a file
lang-lc.conf, where lc is the language code. This file contains three
lines that give the translations for the words Preface, Index, and Glossary.
They need to match the corresponding chapter/section headings in the guide.txt
and glossary.txt files, in order for the document structure to build properly.

There are also three files containing lists of languages to build:
- languages.txt -- all languages
- languages-left-right.txt -- left-to-right languages -- PDF files cannot be
  built for right-to-left languages at this time; see issue
  https://www.drupal.org/node/2887064
- languages-unifont.txt -- languages whose characters are not covered well by
  the Noto font and need to use GNU Unifont instead (Chinese, Japanese, etc.)

FONTS

In order to build PDF files, you need to have the Noto and GNU Unifont fonts
installed. On Linux, try one of the following:
  apt-get install fonts-noto unifont
  yum install fonts-noto unifont
For other operating systems, see https://www.google.com/get/noto/ and
http://unifoundry.com/unifont.html

Once you have downloaded the fonts, you may need to edit the fop-conf.xml file
in this directory to find them. On Linux systems, fonts should be located in
  /usr/share/fonts/truetype
but if they are somewhere else, you will need to edit the fop-conf.xml file to
point to your location for the fonts.
