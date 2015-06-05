<?php

$conexion = mysql_connect("loclahost","rcrdo23","96042008203");

if (!$conexion) {
	
	die ("No eh podido conectar con base de datos por la siguiente razon. ".msql_error());
}

mysql_select_db("libreta",$conexion);
$peticion = mysql_query("SELECT * FROM directorio ORDER BY Edad");

while ($fila = mysql_fetch_array($peticion)) {
	echo $fila['Nombre'];
	echo "<br>";
	echo $fila['Apellido'];
	echo "<br>";
	echo $fila['Edad'];
	echo "<br>";
	echo $fila['Telefono'];
	echo "<br>";
}
mysql_close($conexion);

?>