#!/bin/bash

filedir=$1
baseurl=$2
outdir=$3
winid=$4

for fname in $(ls $filedir)
do
    firefox $baseurl'/'$fname
    sleep 3
    iname=$outdir'/'${fname%.*}'.png'
    echo $iname
    import -window $winid $iname
    convert $iname -chop '0x126' -trim +repage $iname
done
