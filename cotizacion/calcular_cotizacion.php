<?php
// CONSTANTE MANO DE OBRA
$mano_obra = 2500000;

//CONSULTAR ID DEL CLIENTE
require('../db/conexion.php');
$consulta ="SELECT id_cliente FROM clientes 
            ORDER BY id_cliente DESC
            LIMIT 1";
$query = mysqli_query($enlace, $consulta);
while($row = mysqli_fetch_array($query)){
    $cliente = $row['id_cliente'];
}

//FUNCIONES PARA CONSULTA PRECIO Y ID PRODUCTO
function consulta_precio($elemento){
    require('../db/conexion.php');
    $consulta ="SELECT precio FROM elementos_cocina WHERE nombre = '$elemento'";
    $query = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_array($query)){
        $precio = $row['precio'];
    }
    return $precio;
}
function consulta_id($elemento){
    require('../db/conexion.php');
    $consulta ="SELECT id_elemento FROM elementos_cocina WHERE nombre = '$elemento'";
    $query = mysqli_query($enlace, $consulta);
    while($row = mysqli_fetch_array($query)){
        $id_elemento = $row['id_elemento'];
    }
    return $id_elemento;
}

if(isset($_POST['cotizar'])){
    // NOMBRE MATERIALES
    $gabinete = $_POST['gabinetes'];
    $nevera = $_POST['neveras'];
    $estufa = $_POST['estufas'];
    $ventana = $_POST['ventanas'];
    $lavaplatos = $_POST['lavaplatos'];

    // PRECIOS MATERIALES
    $precioGabinete = consulta_precio($gabinete);
    $precioNevera = consulta_precio($nevera);
    $precioEstufa = consulta_precio($estufa);
    $precioVentana = consulta_precio($ventana);
    $precioLavaplatos = consulta_precio($lavaplatos);

    // ID MATERIALES
    $idGabinete = consulta_id($gabinete);
    $idNevera = consulta_id($nevera);
    $idEstufa = consulta_id($estufa);
    $idVentana = consulta_id($ventana);
    $idLavaplatos = consulta_id($lavaplatos);

    // SUMA DE LOS PRECIOS
    $sumaPrecios = $precioGabinete + $precioNevera + $precioEstufa + $precioVentana + $precioLavaplatos;

    // PRECIO TOTAL DE LA COTIZACIÓN
    $precioTotal = $sumaPrecios + $mano_obra;

    // INSERCIÓN A LA TABLA DE COTIZACIONES
    $insert ="INSERT INTO `cotizaciones`(`id_clienete`, `gabinetes`, `nevera`, `estufa`, `ventana`, `lavaplatos`, `mano_obra`,`costo_total`) 
                VALUES ('$cliente','$idGabinete','$idNevera','$idEstufa','$idVentana','$idLavaplatos','$mano_obra','$precioTotal')";
    $query = mysqli_query($enlace, $insert);

    if($query){
        header('location:../resultado_cotizacion.php');
    }else{
        echo "<script> alert('Lo sentimos no se pudo realizar la cotizacion vuelva a intertar.');
            location.href = '../index.php";
    }
}

?>