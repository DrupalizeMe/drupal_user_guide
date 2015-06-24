The files in this project can be used to build a User Guide to Drupal. The
source uses AsciiDoc markdown format, which can be compiled into DocBook format,
which in turn can be compiled into HTML, PDF, and various e-book formats. The
AsciiDoc Display module (https://www.drupal.org/project/asciidoc_display) can be
used to display special HTML output in a Drupal site.


COPYRIGHT AND LICENSE
---------------------

See the ASSETS.yml file in this directory, and files it references, for
copyright and license information for the text source files in this
project. Output files produced and displayed by this project also must contain
copyright/license information.

Code (scripts) in this project are licensed under the GNU/GPL version 2 and
later license.


ORGANIZATION
------------

This project contains the following directories:

source

The AsciiDoc source for the manual is in language subdirectories of the source
directory. The index file is called "guide.txt", and it has include statements
for the other files that make up the manual.

guidelines / templates

Guidelines and templates for contributors to this project are in the guidelines
and templates directories, respectively. The guidelines are in the form of
another AsciiDoc manual, with guidelines.txt as the index file.

scripts / output

To build both the User Guide and Guidelines, use the scripts in the scripts
directory; see the README.txt in the AsciiDoc Display module for more
information on what they do. Currently the Guidelines document scripts only
produce HTML output for the AsciiDoc Display module, and the User Guide scripts
produce HTML output as well as PDF and other e-books.

The output the scripts produces lands in the output directory. Subdirectory html
of that is the output for the AsciiDoc Display module; e-books land in the
ebooks subdirectory.
