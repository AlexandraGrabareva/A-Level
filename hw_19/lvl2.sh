#!/bin/bash

HOST=$1

SCREENSHOT=`date +%Y-%b-%d-%H-%M-%S.png`

scrot -d 5 -c $SCREENSHOT

scp $SCREENSHOT $HOST:~/public_html/screenshots/

echo "http://screenshots.$HOST/$SCREENSHOT" | sed "s/@students/.php/" | xclip;

exit 0