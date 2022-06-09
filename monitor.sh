#!/bin/bash

INPUT_FILE="template.html"
OUTPUT_FILE="index.html"
cp $INPUT_FILE $OUTPUT_FILE

#Numero de nucleos
NUCLEOS=$(cat /proc/cpuinfo | grep "cpu cores" | cut -d':' -f2)

#Uso del procesador
PROCESSOR=$(top -n1 | head -3 | tail  -n1  | awk '{print $4}' | cut -d',' -f1)
USE_PROCESSOR=$(($PROCESSOR * $NUCLEOS))
sed -i 's/<%=valor_procesador>/'$USE_PROCESSOR'/g' $OUTPUT_FILE

#Uso de disco por directorios montados, usar el grafico de tabla que se especifica mejor el punto de montaje, procentaje de carga
USE_DISK=$(df -Bm | head -25 | tail -n 24 | sed '/snap/d' | sed 's/M//g ' | sed 's/%// ' | awk {' print "['\''"  $6 "'\''"  "," "'\''" "Volumenes" "'\''"  ","$5","$4"]," '} )
#sed -i 's/<%=valor_disco>/'$USE_DISK'/g' $OUTPUT_FILE

#Memoria libre
MEMORY_FREE=$(free -m | head -2 | tail -n 1 | awk ' {print $4 }')
sed -i 's/<%=valor_memoria>/'$MEMORY_FREE'/g' $OUTPUT_FILE

#Al final no pude hacer lo de los docker reemplazando, entonces toca partir el documento en un unico punto
#Pero eso se hace al final
#OJO En el template.html hacer TODO encima del metodo loadDockersInfo
CONTAINERS_INFO=`docker stats --no-stream -a --format "{\"containerID\":\"{{ .Container }}\",\"containerName\":\"{{ .Name }}\",\"memory\":{\"percent\":\"{{ .MemPerc }}\"},\"cpu\":\"{{ .CPUPerc }}\"},"`
echo "$CONTAINERS_INFO" >> start.html


