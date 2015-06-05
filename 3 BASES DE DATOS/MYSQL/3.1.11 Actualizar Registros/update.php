<?php

$conexion = mysql_connect("loclahost","rcrdo23","96042008203");



mysql_select_db("libreta",$conexion);

mysql_query("UPDATE directorio SET Edad ='25 WHERE Nombre ='Alba Rocio' AND Apellido = 'Caseres'");

mysql_close($conexion);

?>