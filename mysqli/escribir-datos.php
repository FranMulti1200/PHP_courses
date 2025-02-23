<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');
}else{
    $sql = "INSERT INTO usuarios(id, nombre, edad) VALUES(null, 'Ermenegildo', 33)";
    $conexion->query($sql);
    if($conexion->affected_rows >= 1){
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }
}