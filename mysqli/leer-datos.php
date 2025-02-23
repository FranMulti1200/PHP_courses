<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conexion = new mysqli('localhost', 'root', '', 'prueba_datos');

if($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');
}else{
    // $id = isset($_GET['id']) ? $_GET['id'] : 1;
    // $sql = "SELECT * FROM usuarios WHERE ID = $id";
    $sql = "SELECT * FROM usuarios";
    $resultados = $conexion->query($sql);
    

    if($resultados->num_rows){
        // echo '<pre>';
        // var_dump($resultados->fetch_assoc());
        // var_dump($resultados->fetch_assoc());
        // echo $resultados->fetch_assoc()['nombre'];
        // echo '</pre>';

        while($fila = $resultados->fetch_assoc()){
            echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br/>';
        }

        
    } else{
        echo 'No hay datos';
    }
}