<?php
//error_reporting(E_ALL);

// Comprobar si existe un archivo.
// $resultado = file_exists('documento.txt');
// var_dump($resultado);

// if (file_exists('documento.txt')) {
//     echo 'Mi prima existe';
// }else{
//     echo 'Ni prima, ni primo';
// }

// Leer el contenido de un archivo.
//echo file_get_contents('documento.txt');

// Añadir contenido a un archivo.
//file_put_contents('documento.txt', " Hola Perico \n", FILE_APPEND);

// Añadir texto a un archivo con un bucle FOR
// file_put_contents('documento.txt', '');
// for ($i=1; $i <=10 ; $i++) { 
//     file_put_contents('documento.txt', "$i \n", FILE_APPEND);
// }

// Convierte el contenido de un archivo en un array
$archivo = file('documento.txt');
echo "<pre>";
print_r($archivo);

?>