# This script builds the AsciiDoc Display Feeds module output for the
# guidelines and user guide.

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make the output directories if they do not exist. Make sure you have a
# separate directory for each book you want to display, and each language.
mkdir -p ../output
mkdir -p ../output/html_feed
mkdir -p ../output/html_feed/en
mkdir -p ../output/html_feed/en/images
mkdir -p ../output/html_feed/guidelines
mkdir -p ../output/html_feed/guidelines/images

# Run the preprocessor that puts file names into the files under each header.
php addnames._php ../source/en ../output/html_feed/en
cp ../source/en/guide-docinfo.xml ../output/html_feed/en
php addnames._php ../guidelines ../output/html_feed/guidelines

# Run the AsciiDoc processor to convert to DocBook format. Syntax:
#  asciidoc -d book -b docbook -f [config file] -o [output file] [input file]
asciidoc -d book -b docbook -f std.conf -a docinfo -o ../output/html_feed/en/guide.docbook ../output/html_feed/en/guide.txt
asciidoc -d book -b docbook -f std.conf -f guidelines.conf -o ../output/html_feed/guidelines/guidelines.docbook ../output/html_feed/guidelines/guidelines.txt

# Run the xmlto processor to convert from DocBook to bare XHTML, using a custom
# style sheet that makes output for the AsciiDoc Display Direct module, plus
# a chunking parameter for Feeds that outputs all topics on their own pages
# instead of having the first one on the chapter page. Syntax:
#   xmlto -m feeds.xsl xhtml [parameters] -o [output dir] [input docbook file]
xmlto -m feeds.xsl xhtml -o ../output/html_feed/en ../output/html_feed/en/guide.docbook
xmlto -m feeds.xsl xhtml --stringparam section.autolabel.max.depth=2 -o ../output/html_feed/guidelines ../output/html_feed/guidelines/guidelines.docbook

# Copy image files to output directory.
cp ../source/en/images/*.png ../output/html_feed/en/images
cp ../guidelines/images/*.png ../output/html_feed/guidelines/images
