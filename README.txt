The files in this project can be used to build a User Guide to Drupal. The
source uses AsciiDoc markdown format, which can be compiled into DocBook format,
which in turn can be compiled into HTML, PDF, and various e-book formats. The
AsciiDoc Display module (https://www.drupal.org/project/asciidoc_display) can be
used to display special HTML output in a Drupal site.

To build the User Guide, use the scripts in the scripts directory; see the
README.txt in the AsciiDoc Display module for more information on what they do.
The output the scripts produces lands in the output directory, which can then be
displayed by the AsciiDoc Display module.

Guidelines and templates for contributors to this project are in the guidelines
and templates directories, respectively. The guidelines are in the form of
another AsciiDoc manual, and are also built with the build scripts. There are
templates for two types of topics: Tasks and Concepts.
