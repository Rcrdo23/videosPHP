<?php 

echo"<table
border=1><tr><td>Disco</td><td>Artista</td><td>Año</td></tr>";

$conexion = sqlite_open('biblioteca.db');

$consulta = "SELECT * FROM Discos;";

$resultado = sqlite_query($conexion,$consulta);

while ($fila =sqlite_fetch_array($resultado)) {
	
	echo "<tr><td>".$fila['Discos']."</td><td>".$fila['Artista']."</td><td>".$fila['Anio']."</td></tr>";

}

echo "</table>";

sqlite_close($conexion);

 ?>