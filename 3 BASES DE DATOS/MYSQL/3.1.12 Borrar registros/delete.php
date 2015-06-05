<?php

$conexion = mysql_connect("loclahost","rcrdo23","96042008203");


mysql_select_db("libreta",$conexion);

mysql_query("DELETE FROM directorio WHERE Nombre ='Alba Rocio' AND Apellido = 'Caseres'");


mysql_close($conexion);

?>