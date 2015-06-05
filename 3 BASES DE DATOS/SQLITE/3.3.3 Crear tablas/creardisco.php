<?php 

$conexion = sqlite_open('bibliotecacd.db') or die('ah sido imposible establecer la conexion')

$consulta  = 

<<<SQL 

CREATE TABLE Discos(

Artistas Char(20) not null,
Disco Char(40),
Anio Integer 


);

SQL;

$resultado = sqlite_exec($conexion, $consulta);



 ?>