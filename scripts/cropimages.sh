#!/bin/bash

# This script processes image output from the auto_screenshots tests, cropping
# out the whitespace. It reads in each *.jpg file in a directory, crops the
# whitespace out of the image, and writes it out as a .png file.
#
# Usage:
# ./cropimages.sh /path/to/directory
#

for f in $1/*.jpg
do
    bname=${f%.jpg}
    convert $bname.jpg -trim +repage $bname.png
done
