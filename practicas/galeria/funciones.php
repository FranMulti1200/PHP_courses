<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function conexion($tabla, $usuario, $pass){
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$tabla", $usuario, $pass);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}



?>