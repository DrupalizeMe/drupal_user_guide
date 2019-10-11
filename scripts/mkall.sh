#!/usr/bin/env bash

# This script builds all the mk scripts for the different types of docs.
# Usage: ./mkall.sh version [ lang1 lang2 lang3 ]
# Example: ./mkall.sh 8.x-7.1 es ca de

# Exit immediately on uninitialized variable or error, and print each command.
set -uex

if [[ $# -lt 1 ]]; then
  echo "You must specify at least one parameter indicating the version"
  echo "# Usage: ./mkall.sh version [ lang1 lang2 lang3 ]"
  echo "# Example: ./mkall.sh 8.x-7.1 es ca de"
  exit -1
fi


if [[ $# -gt 1 ]]; then
    echo "Building specified languages in parameters"
    langs=${@:2}      # This gets all the parameters except the first one ( version )
else
    echo "Building all languages in languages.txt"
    langs="$(cat ../scripts/languages.txt)"
fi

./mkoutput.sh $langs
./mkfeeds.sh $langs
./mkebooks.sh $langs
./mkzips.sh $1 $langs