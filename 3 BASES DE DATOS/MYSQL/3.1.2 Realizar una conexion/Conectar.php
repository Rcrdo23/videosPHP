<?php

$conexion = mysql_connect("localhost","Rcrdo23","96042008203");

if (!$conexion) {
	
	die('No eh podido conectar : '.mysql_error());

}

$variable = 1;
 mysql_close($conexion);

 ?>