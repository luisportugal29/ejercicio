<?php
require_once("conexion.php");

$ide = $_POST['identi'];
$nombre = trim($_POST['nombre']);
$direccion = $_POST['direccion']
$telefono = trim($_POST['telefono']);
$fechaNacimiento = $_POST['fechaNacimiento'];


$statement = "update empleados set nombre='{$nombre}', direccion= '{$direccion}', telefono= '{$telefono}', fechaNacimiento= '{$fechaNacimiento}' where id={$ide}";

if($conn->query($statement)){
    $conn->close();
    return header("location:Consultas.php");
}else{
    echo "update empleados set nombre='{$nombre}', direccion= '{$direccion}', telefono= '{$telefono}', fechaNacimiento= '{$fechaNacimiento}' where id={$ide}";
    $conn->close();
}



?>