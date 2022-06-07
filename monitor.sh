#!/bin/bash

INPUT_FILE="template.html"
OUTPUT_FILE="index.html"
cp $INPUT_FILE $OUTPUT_FILE

#Memoria libre
MEMORY_FREE=$(free -m | head -2 | tail -n 1 | awk ' {print $4 }')

sed -i 's/<%=valor_memoria>/'$MEMORY_FREE'/g' $OUTPUT_FILE


