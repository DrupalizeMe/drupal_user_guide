# This script builds the AsciiDoc Display Direct module output for the
# guidelines and user guide.

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make the output directories if they do not exist. Make sure you have a
# separate directory for each book you want to display, and each language.
mkdir -p ../output
mkdir -p ../output/html
mkdir -p ../output/html/en
mkdir -p ../output/html/en/images
mkdir -p ../output/html/guidelines
mkdir -p ../output/html/guidelines/images

# Run the preprocessor that puts file names into the files under each header.
php addnames._php ../source/en ../output/html/en
cp ../source/en/guide-docinfo.xml ../output/html/en
php addnames._php ../guidelines ../output/html/guidelines

# Run the AsciiDoc processor to convert to DocBook format. Syntax:
#  asciidoc -d book -b docbook -f [config file] -o [output file] [input file]
asciidoc -d book -b docbook -f std.conf -a docinfo -o ../output/html/en/guide.docbook ../output/html/en/guide.txt
asciidoc -d book -b docbook -f std.conf -f guidelines.conf -o ../output/html/guidelines/guidelines.docbook ../output/html/guidelines/guidelines.txt

# Run the xmlto processor to convert from DocBook to bare XHTML, using a custom
# style sheet that makes output for the AsciiDoc Display Direct module. Syntax:
#   xmlto -m bare.xsl xhtml -o [output dir] [input docbook file]
xmlto -m bare.xsl xhtml -o ../output/html/en ../output/html/en/guide.docbook
xmlto -m bare.xsl xhtml --stringparam section.autolabel.max.depth=2 -o ../output/html/guidelines ../output/html/guidelines/guidelines.docbook

# Copy image files to output directory.
cp ../source/en/images/*.png ../output/html/en/images
cp ../guidelines/images/*.png ../output/html/guidelines/images
