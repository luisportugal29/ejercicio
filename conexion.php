<?php
    $conn = new mysqli('localhost','root','1234','Ejercicio');

    if($conn->connect_error){
        echo $error ->conn->connect_error;
    }
?>