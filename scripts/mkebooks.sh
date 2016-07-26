# This script builds PDF, ePub, and Mobi output for the guide.

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make the output directories if they do not exist. Make sure you have a
# separate directory for each book you want to display, and each language.
mkdir -p ../output
mkdir -p ../output/ebooks
mkdir -p ../output/ebooks/en
mkdir -p ../output/ebooks/en/images

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
