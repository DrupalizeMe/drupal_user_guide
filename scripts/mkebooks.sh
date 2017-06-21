# This script builds PDF, ePub, and Mobi output for the guide.
# See README.txt for notes about fonts and languages.

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make the output directories if they do not exist.
mkdir -p ../output
mkdir -p ../output/ebooks
mkdir -p ../ebooks

# Process each language. Add new languages to the languages.txt file.
for lang in `cat languages.txt`
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
  asciidoc -d book -b docbook -f std.conf -a docinfo -a lang=$lang $langconf -o ../output/ebooks/$lang/guide.docbook ../output/ebooks/$lang/guide.txt

  # Copy image files to e-book directory.
  cp ../source/$lang/images/*.png ../output/ebooks/$lang/images

  # Make PDF files. Which font to use depends on the language.
  cp fop-conf.xml ../output/ebooks/$lang

  if [ "$lang" = "fa" ]; then
      xmlto pdf -m pdf-arabic.xsl -p "-c fop-conf.xml" --with-fop -o ../output/ebooks/$lang ../output/ebooks/$lang/guide.docbook

  elif [ "$lang" = "zh-hans" ] || [ "$lang" = "ja" ] ; then
      xmlto pdf -m pdf-unifont.xsl -p "-c fop-conf.xml" --with-fop -o ../output/ebooks/$lang ../output/ebooks/$lang/guide.docbook

  else
      xmlto pdf -m pdf.xsl -p "-c fop-conf.xml" --with-fop -o ../output/ebooks/$lang ../output/ebooks/$lang/guide.docbook

  fi

  # Run the xmlto processor to convert from DocBook to ePub.
  # The syntax is:
  #   xmlto epub -o [output dir] [input docbook file]
  # And we need to do this for the regular and mobi styles.
  xmlto epub -m epub.xsl -o ../output/ebooks/$lang ../output/ebooks/$lang/guide.docbook
  cp ../output/ebooks/$lang/guide.docbook ../output/ebooks/$lang/guide-simple.docbook
  xmlto epub -m mobi.xsl -o ../output/ebooks/$lang ../output/ebooks/$lang/guide-simple.docbook

  # At this point, we need to CD to the output directory to do some more
  # processing, to add images to the epub files.
  cd ../output/ebooks/$lang
  mkdir -p OEBPS
  mkdir -p OEBPS/images
  cp images/* OEBPS/images
  zip guide.epub OEBPS/images/*
  zip guide-simple.epub OEBPS/images/*

  # Run the calibre processor to convert from ePub to Mobi, but on a modified
  # ePub format. The syntax is:
  #   ebook-convert [input epub file] [output file] [options]
  ebook-convert guide-simple.epub guide.mobi

  # Go back to the scripts directory to process the next language.
  cd ../../../scripts

  # Copy final output to ebooks directory.
  cp ../output/ebooks/$lang/guide.epub ../ebooks/guide-$lang.epub
  cp ../output/ebooks/$lang/guide.mobi ../ebooks/guide-$lang.mobi
  cp ../output/ebooks/$lang/guide.pdf ../ebooks/guide-$lang.pdf

done
