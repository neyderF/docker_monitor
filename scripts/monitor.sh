#!/bin/sh

#memoria libre   
free -m | head -2 | tail -n 1 | awk ' {print $4 }' >>./partials/RAM.php 
