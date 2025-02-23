<?php

$id = $_GET['id'];

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try{
    $conexion = new PDO('mysql:host=localhost;dbname=pruebaDatos', 'root', '');
    #echo "Conexion Ok";

    // Metodo Query
    /*$resultados = $conexion->query("SELECT * FROM Usuarios WHERE id = $id");
    // $resultados = $conexion->query('INSERT INTO Usuarios VALUES(null,"Perico")');

    foreach($resultados as $fila){
        // print_r($fila);
        echo $fila['ID'] . ' - ' . $fila['nombre'] . '<br />';
    }*/

    // Prepared Statements
    // $statement = $conexion->prepare('SELECT * FROM Usuarios WHERE id = :id');
    // $statement->execute(
    //     array(':id' => $id)
    //     );

    $statement = $conexion->prepare('INSERT INTO Usuarios VALUES(null, "Pancracio")');
    $statement->execute();

    // $resultado = $statement->fetch();
    // echo '<pre>';
    // print_r($resultado);
    // echo '</pre>';


}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}


?>