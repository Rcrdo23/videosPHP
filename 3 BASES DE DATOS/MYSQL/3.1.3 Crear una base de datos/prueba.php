<html>
<head>
	<title>Hola Mundo</title>
</head>
<body>

<?php

$conexion = mysql_connect("localhost","Rcrdo23","96042008203");
/*$result = mysql_query("CREATE DATABASE nueva",$conexion);
echo "Hola";
var_dump($result);
if ($result) {
	echo "SE HA CREADO LA BASE DE DATOS";

}
else {
	echo "no se ha podido crear la base de datos".mysql_error();
}
*/

//Preparo esta peticion

mysql_select_db("agenda",$conexion);
$sql = " CREATE TABLE Agenda(
	Nombre varchar(15),
	Apellido varchar(15),
	Edad int,
	Telefono int
	)";
 mysql_query($sql,$conexion);

mysql_close($conexion);
 ?>

</body>
</html>