#!/bin/bash

LOCATION=$1
HOST=alexandragaag@students.a-level.com.ua

BACKUP=$(date +"%Y-%b-%d-%H-%M-%S").tgz;

tar -czv $LOCATION | ssh $HOST "cd ~/public_html/backup && cat > $BACKUP"

exit 0