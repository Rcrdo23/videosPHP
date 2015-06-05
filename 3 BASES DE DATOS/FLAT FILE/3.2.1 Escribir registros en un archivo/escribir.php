<?php 

$archivo = "text.txt";
$contenido = "este es otro contenido";

$manejador = fopen($archivo, 'w+')
fwrite($manejador, $contenido);


 ?>