<?php

@$tuip = getenV(REMOTE_ADDR);

echo "Tu IP ES : ".$tuip;

echo "<br>";
$tunavegador = $_SERVER["HTTP_USER_AGENT"];

echo "Y tu sistema operativo y navegador es ".$tunavegador;
?>
