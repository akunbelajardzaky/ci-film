#!/bin/bash
echo "reload" > "writable/stream.txt"
while inotifywait -e modify app/* --recursive -e modify public/js/* -e modify public/css/*; do
    echo "reload" > "writable/stream.txt"
done