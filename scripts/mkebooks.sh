#!/usr/bin/env bash

# This script builds PDF and ePub output for the guide.
# See README.txt for notes about fonts and languages.

# Usage:
# "./mkebooks.sh" without parameters will build all the languages defined in languages.txt
# "./mkebooks.sh lang1 lang2 lang3" will build the documentation for all the languages passed as parameters.
# lang1 lang2 lang3 represent valid language codes.

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make the output directories if they do not exist.
mkdir -p ../output
mkdir -p ../output/ebooks
mkdir -p ../ebooks

if [[ $# -gt 0 ]]; then
    echo "Building specified languages in parameters"
    langs=$*
else
    echo "Building all languages in languages.txt"
    langs="$(cat languages.txt)"
fi

# Process each language. Add new languages to the languages.txt file.
for lang in $langs
do

  # Make output directories.
  mkdir -p ../output/ebooks/$lang
  mkdir -p ../output/ebooks/$lang/images

  langconf=''
  if [[ -s lang-$lang.conf ]] ; then
    langconf="-f lang-$lang.conf"
  fi

  # Run the preprocessor that fixes index entries.
  php preprocess._php ../source/$lang ../output/ebooks/$lang i
  cp ../source/$lang/guide-docinfo.xml ../output/ebooks/$lang

  # Run the AsciiDoc processor to convert to DocBook for ebooks.
  asciidoc -d book -b docbook -f std.conf -a docinfo -a lang=$lang $langconf -o ../output/ebooks/$lang/guide.docbook ../output/ebooks/$lang/guide.asciidoc

  # Copy image files and config files to e-book directory.
  cp ../source/$lang/images/*.png ../output/ebooks/$lang/images
  cp *.xsl ../output/ebooks/$lang
  cp fop-conf.xml ../output/ebooks/$lang
  cp foprocess._php ../output/ebooks/$lang

  # Run the rest of the script from the output directory.
  cd ../output/ebooks/$lang

  # Use dblatex to convert to PDF, except for Farsi, which doesn't work.
  if [[ "$lang" = "fa" ]] ; then
      xmlto fo -m pdf-farsi.xsl guide.docbook
      php foprocess._php guide.fo guide.fop
      fop -c fop-conf.xml -fo guide.fop -pdf guide.pdf
  else
      if [[ -s dblatex-$lang.xsl ]] ; then
          dblatex --pdf -b xetex -T db2latex -p dblatex.xsl -p dblatex-$lang.xsl -o guide.pdf guide.docbook
      else
          dblatex --pdf -b xetex -T db2latex -p dblatex.xsl -o guide.pdf guide.docbook
      fi
  fi

  # Run the xmlto processor to convert from DocBook to ePub.
  # The syntax is:
  #   xmlto epub [input docbook file]
  xmlto epub -m epub.xsl guide.docbook

  # Add images to the epub formats, which are actually zip files.
  mkdir -p OEBPS
  mkdir -p OEBPS/images
  cp images/* OEBPS/images
  zip guide.epub OEBPS/images/*

  # Go back to the scripts directory to process the next language.
  cd ../../../scripts

  # Copy final output to ebooks directory.
  cp ../output/ebooks/$lang/guide.epub ../ebooks/guide-$lang.epub
  cp ../output/ebooks/$lang/guide.pdf ../ebooks/guide-$lang.pdf

done
