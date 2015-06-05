<?php

$conexion = mysql_connect("loclahost","rcrdo23","96042008203");

if (!$conexion) {
	
	die ("No eh podido conectar con base de datos por la siguiente razon. ".msql_error());
}

mysql_select_db("libreta",$conexion);

mysql_query("INSERT INTO directorio(Nombre, Apellido, Edad, Telefono) VALUES ('Miguel Alfonso','Benabides','32','00001')");

mysql_query("INSERT INTO directorio(Nombre, Apellido, Edad, Telefono) VALUES ('Alba Rocio','Caseres','24,'00002')");

mysql_close($conexion);

?>