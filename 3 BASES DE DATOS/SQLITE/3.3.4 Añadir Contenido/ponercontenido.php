<?php 

$conexion = sqlite_open('bibliotecacd.db') or die('ah sido imposible establecer la conexion');

$consulta = 

<<<SQL 

INSERT INTO Discos VALUES ('little','stole the show','2014');

INSERT INTO Discos VALUES ('Ed Sheeran','Lego house','2014');

INSERT INTO Discos VALUES ('Tom odell','Another Love','2013');

INSERT INTO Discos VALUES ('Shawn Mendez','Imagination','2014');
SQL;

sqlite_close($conexion);


?>