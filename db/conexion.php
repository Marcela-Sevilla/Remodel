<?php

$host = "localhost";
$usuario = "root";
$pw = "";
$host = "localhost";
$name = "remodel";

$enlace = mysqli_connect($host, $usuario, $pw, $name);

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    exit;
}

?>