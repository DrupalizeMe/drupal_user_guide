#!/usr/bin/env bash

# This script takes the ebooks created by mkebooks.sh, and makes zip files.
# Usage: ./mkzips.sh version [ lang1 lang2 lang3 ]
# Example: ./mkzips.sh 8.x-7.1 es de it

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

if [[] $# -lt 1 ]]; then
  echo "You must specify at least one parameter indicating the version"
  echo "Usage: ./mkzips.sh version [ lang1 lang2 lang3 ]"
  exit -1
fi

# Make output directory if it does not exist.
mkdir -p ../ebooks/zips
mkdir -p ../ebooks/zips/$1

cd ../ebooks

if [[ $# -gt 1 ]]; then
    echo "Building specified languages in parameters"
    langs=${@:2}      # This gets all the parameters except the first one ( version )
else
    echo "Building all languages in languages.txt"
    langs="$(cat ../scripts/languages.txt)"
fi

# Process each language. Add new languages to the languages.txt file.
for lang in $langs
do
  tar cvzf zips/$1/ebooks-$lang-$1.tgz guide-$lang.*
done
