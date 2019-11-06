#!/bin/bash

HOST=$1
FILE=$2

if [ ! -f "$FILE" ]; then
	echo "File $FILE doesn't exist"
	exit 1
fi

scp $FILE $HOST:~

exit 0