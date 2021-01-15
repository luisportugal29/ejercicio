<?php

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];

$activo = true;
include_once("conexion.php");

$stm = "Insert into empleados(nombre,telefono,direccion,fechaNacimiento,activo) Values('{$nombre}','{$telefono}','{$direccion}','{$fechaNacimiento}',true)";
 if($conn->query($stm))
 {
     $conn->close();
    return header("Location:principal.php");
 }else{
     return "error";
 }


?>