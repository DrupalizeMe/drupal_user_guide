# This script builds the AsciiDoc Display module output for the guidelines
# and user guide, as well as e-book formats.

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
mkdir -p ../output/ebooks
mkdir -p ../output/ebooks/en
mkdir -p ../output/ebooks/en/images


# Run the preprocessor that puts file names into the files under each header.
# Only for the special HTML output.
php addnames._php ../source/en ../output/html/en
cp ../source/en/guide-docinfo.xml ../output/html/en
php addnames._php ../guidelines ../output/html/guidelines

# Run the AsciiDoc processor to convert to DocBook format, for the special
# HTML output. The syntax is:
#  asciidoc -d book -b docbook -f [config file] -o [output file] [input file]
asciidoc -d book -b docbook -f std.conf -a docinfo -o ../output/html/en/guide.docbook ../output/html/en/guide.txt
asciidoc -d book -b docbook -f std.conf -o ../output/html/guidelines/guidelines.docbook ../output/html/guidelines/guidelines.txt

# Run the xmlto processor to convert from DocBook to bare XHTML, using a custom
# style sheet that makes output this module can recognize.  The syntax is:
#   xmlto -m bare.xsl xhtml -o [output dir] [input docbook file]
xmlto -m bare.xsl xhtml -o ../output/html/en ../output/html/en/guide.docbook
xmlto -m bare.xsl xhtml --stringparam section.autolabel.max.depth=2 -o ../output/html/guidelines ../output/html/guidelines/guidelines.docbook

# Copy image files to output directory.
cp ../source/en/images/*.png ../output/html/en/images
cp ../guidelines/images/*.png ../output/html/guidelines/images


# Exit if first argument is --no-ebooks.
[ "${1-}" = "--no-ebooks" ] && exit

# Run the AsciiDoc processor to convert to DocBook for ebooks.
asciidoc -d book -b docbook -f std.conf -a docinfo -o ../output/ebooks/en/guide.docbook ../source/en/guide.txt

# Copy image files to e-book directory.
cp ../source/en/images/*.png ../output/ebooks/en/images

# Run the xmlto processor to convert from DocBook to PDF.
# The syntax is:
#   xmlto pdf --with-fop -o [output dir] [input docbook file]
xmlto pdf  -m pdf.xsl --with-fop -o ../output/ebooks/en ../output/ebooks/en/guide.docbook

# Run the xmlto processor to convert from DocBook to ePub.
# The syntax is:
#   xmlto epub -o [output dir] [input docbook file]
# And we need to do this for the regular and mobi styles.
xmlto epub -m epub.xsl -o ../output/ebooks/en ../output/ebooks/en/guide.docbook
cp ../output/ebooks/en/guide.docbook ../output/ebooks/en/guide-simple.docbook
xmlto epub -m mobi.xsl -o ../output/ebooks/en ../output/ebooks/en/guide-simple.docbook

# At this point, we need to CD to the output directory to do some more
# processing, to add images to the epub files.
cd ../output/ebooks/en
mkdir -p OEBPS
mkdir -p OEBPS/images
cp images/* OEBPS/images
zip guide.epub OEBPS/images/*
zip guide-simple.epub OEBPS/images/*

# Run the calibre processor to convert from ePub to Mobi, but on a modified
# ePub format. The syntax is:
#   ebook-convert [input epub file] [output file] [options]
ebook-convert guide-simple.epub guide.mobi
