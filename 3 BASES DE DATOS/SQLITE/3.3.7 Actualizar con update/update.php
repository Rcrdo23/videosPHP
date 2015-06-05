<?php 

$conexion = sqlite_open('biblioteca.db');

$consulta = "UPDATE Discos SET Artista = 'ed sheeran L' WHERE Artista = 'Ed sheeran';";


$resultado = sqlite_query($conexion,$consulta);

sqlite_close($conexion);


 ?>