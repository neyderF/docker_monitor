#!/bin/bash

INPUT_FILE="template.html"
OUTPUT_FILE="index.html"
cp $INPUT_FILE $OUTPUT_FILE

#Memoria libre
MEMORY_FREE=$(free -m | head -2 | tail -n 1 | awk ' {print $4 }')
sed -i 's/<%=valor_memoria>/'$MEMORY_FREE'/g' $OUTPUT_FILE

#Al final no pude hacer lo de los docker reemplazando, entonces toca partir el documento en un unico punto
#Pero eso se hace al final
#OJO En el template.html hacer TODO encima del metodo loadDockersInfo
CONTAINERS_INFO=`docker stats --no-stream -a --format "{\"containerID\":\"{{ .Container }}\",\"containerName\":\"{{ .Name }}\",\"memory\":{\"percent\":\"{{ .MemPerc }}\"},\"cpu\":\"{{ .CPUPerc }}\"},"`
echo "$CONTAINERS_INFO" >> start.html


