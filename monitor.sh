#!/bin/bash

INPUT_FILE="template.html"
OUTPUT_FILE="index.html"
cp $INPUT_FILE $OUTPUT_FILE

#Numero de nucleos
NUCLEOS=$(cat /proc/cpuinfo | grep "cpu cores" | cut -d':' -f2)

#Uso del procesador
PROCESSOR=$(top -bn2 | grep '%Cpu' | tail -1 |awk '{print $8 }' | cut -d',' -f1)
USE_PROCESSOR=$((100-$PROCESSOR / $NUCLEOS))
sed -i 's/<%=valor_procesador>/'$USE_PROCESSOR'/g' $OUTPUT_FILE

#Memoria libre
MEMORY_FREE=$(free -m | head -2 | tail -n 1 | awk ' {print $4 }')
#Memoria total
TOTAL_MEMORY=$(free -m | head -2 | tail -n 1 | awk ' {print $2 }')
sed -i 's/<%=valor_memoria>/'$MEMORY_FREE'/g' $OUTPUT_FILE
sed -i 's/<%=valor_total_memoria>/'$TOTAL_MEMORY'/g' $OUTPUT_FILE

#Uso de disco por directorios montados, usar el grafico de tabla que se especifica mejor el punto de montaje, procentaje de carga
USE_DISK=$(df | tail -n+2 | awk {' print "['\''" $6 "'\'',"$3"],"'})
# sed -i 's/<%=valor_disco>/'$USE_DISK'/g' $OUTPUT_FILE

CONTAINERS_INFO=`docker stats --no-stream -a --format "{\"containerID\":\"{{ .Container }}\",\"containerName\":\"{{ .Name }}\",\"memory\":{\"percent\":\"{{ .MemPerc }}\"},\"cpu\":\"{{ .CPUPerc }}\"},"`
echo "$CONTAINERS_INFO" >> start.html


