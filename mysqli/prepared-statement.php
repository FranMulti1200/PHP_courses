<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');
}else{
    $statement = $conexion->prepare("INSERT INTO usuarios(id, nombre, edad) VALUES(?, ?, ?)");
    
    // Reemplazamos los placeholder ? con los valores que queremos usar.
        // Una S por placeholder que tengamos.
        // s = String
        // i = integer
        // d = double
    
    $statement->bind_param('ssi', $id, $nombre, $edad);
    
    if (isset($_GET['nombre']) && isset($_GET['edad'])) {
        $id = NULL;
        $nombre = $_GET['nombre'];
        $edad = $_GET['edad'];
    }

    $statement->execute();    
    //echo 'Filas agregadas: ' . $conexion->affected_rows;

    if($conexion->affected_rows >= 1){
        echo 'Filas agregadas: ' . $conexion->affected_rows;
    }else{
        echo 'No se agrego nada';
    }
    
}