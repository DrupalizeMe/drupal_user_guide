#!/usr/bin/env bash

# This script takes the ebooks created by mkebooks.sh, and makes zip files.
# Usage: ./mkzips.sh version
# Example: ./mkzips.sh 8.x-7.1

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

# Make output directory if it does not exist.
mkdir -p ../ebooks/zips
mkdir -p ../ebooks/zips/$1

cd ../ebooks

# Process each language. Add new languages to the languages.txt file.
for lang in `cat ../scripts/languages.txt`
do
  tar cvzf zips/$1/ebooks-$lang-$1.tgz guide-$lang.*
done
