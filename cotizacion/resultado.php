<?php
require('db/conexion.php');

function consulta_precio($elemento){
    require('db/conexion.php');
    $consulta ="SELECT precio FROM elementos_cocina WHERE id_elemento = '$elemento'";
    $query = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_array($query)){
        $precio = $row['precio'];
    }
    return $precio;
}

function consulta_descripcion($elemento){
    require('db/conexion.php');
    $consulta ="SELECT modelo FROM elementos_cocina WHERE id_elemento = '$elemento'";
    $query = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_array($query)){
        $modelo = $row['modelo'];
    }
    return $modelo;
}

$consulta = "SELECT * FROM cotizaciones ORDER BY id_cotizacion DESC LIMIT 1";
$query = mysqli_query($enlace, $consulta);
while($row = mysqli_fetch_array($query)){
    $gabinetes = $row['gabinetes'];
    $nevera = $row['nevera'];
    $estufa = $row['estufa'];
    $ventana = $row['ventana'];
    $lavaplatos = $row['lavaplatos'];
    $mano_obra = $row['mano_obra'];
    $costo_total = $row['costo_total'];
}
 // PRECIOS MATERIALES
 $precioGabinete = consulta_precio($gabinetes);
 $precioNevera = consulta_precio($nevera);
 $precioEstufa = consulta_precio($estufa);
 $precioVentana = consulta_precio($ventana);
 $precioLavaplatos = consulta_precio($lavaplatos);

 // DESCRIPCIÓN MATERIALES
 $descripcionGabinete = consulta_descripcion($gabinetes);
 $descripcionNevera = consulta_descripcion($nevera);
 $descripcionEstufa = consulta_descripcion($estufa);
 $descripcionVentana = consulta_descripcion($ventana);
 $descripcionLavaplatos = consulta_descripcion($lavaplatos);

// DATOS CLIENTE
$consulta = "SELECT nombre, correo, numero_celular FROM clientes ORDER BY id_cliente DESC LIMIT 1";
$query = mysqli_query($enlace, $consulta);
while($row = mysqli_fetch_array($query)){
    $nombre = $row['nombre'];
    $correo = $row['correo'];
    $numero_celular = $row['numero_celular'];
}
?>