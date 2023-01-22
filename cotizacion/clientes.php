<?php
require('../db/conexion.php');
if(isset($_POST['comenzar'])){
    $departamento = $_POST['departamento'];
    $ciudad = $_POST['ciudad'];
    $nombre = $_POST['nombre'];
    $celular = $_POST['celular'];
    $correo = $_POST['correo'];

    $insert = "INSERT INTO `clientes`(`departamento`, `ciudad`, `nombre`, `numero_celular`, `correo`) VALUES ('$departamento','$ciudad','$nombre','$celular','$correo')";
    $query = mysqli_query($enlace, $insert);

    if($query){
        header('location:../cotizar_cocina.php');
    }else{
        echo "<script> alert('Lo sentimos no pudimos guardar sus datos vuelva a intertar.');
            location.href = '../index.php";
    }
}
?>