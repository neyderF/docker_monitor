#!/bin/bash

INPUT_FILE="template.html"
OUTPUT_FILE="index.html"
cp $INPUT_FILE $OUTPUT_FILE

#Memoria libre
MEMORY_FREE=$(free -m | head -2 | tail -n 1 | awk ' {print $4 }')

#Informacion de contenedores en formato JSON
CONTAINERS_INFO=$(docker stats --no-stream -a --format "{\"containerID\":\"{{ .Container }}\",\"containerName\":\"{{ .Name }}\",\"memory\":{\"raw\":\"{{ .MemUsage }}\",\"percent\":\"{{ .MemPerc }}\"},\"cpu\":\"{{ .CPUPerc }}\"},")

sed -i 's/<%=valor_memoria>/'$MEMORY_FREE'/g' $OUTPUT_FILE


