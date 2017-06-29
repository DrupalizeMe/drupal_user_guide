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

Also, to build output you need the language to be in the languages.txt file.

FONTS

In order to build PDF files, you need to have several fonts installed:
 - Noto fonts, including Arabic https://www.google.com/get/noto/
 - GNU Unifont http://www.unifoundry.com/unifont.html
 - FreeFarsi https://fontlibrary.org/en/font/freefarsi

On Linux, try one of the following:
  apt-get install fonts-noto-hinted unifont fonts-freefarsi
  yum install fonts-noto-hinted unifont fonts-freefarsi
Use the links above for other operating systems. You can see which fonts
are installed on Linux by using the command:
  fc-list

When adding a new language, you may need to adjust the mkebooks.sh script so
that an appropriate font is used for the new language.

FOP VERSION

The current scripts for making ebooks depend on having FOP version 2.1 or
later installed.
