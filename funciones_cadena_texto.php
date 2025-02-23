<?php

$texto = 'Hola Carlos';

// Conviert caracteres especiales
// echo htmlspecialchars($texto);

// Elimina espacios en blanco
//echo trim($texto);

// Muestra los caracteres de un string
// echo strlen($texto);

// Muestra subcadenas de texto primer valor desde donde empieza,
// segundo valor cuantos caracteres muestra.
// echo substr($texto, 0, 3);
// $texto2 = substr($texto, 0, 4);

// Pasar a mayusculas
//echo strtoupper($texto);

// Pasar a minúsculas
//echo strtolower($texto);

//Devuelve la posicion de un caracter dentro de una cadena
echo strpos($texto, 'o');
?>