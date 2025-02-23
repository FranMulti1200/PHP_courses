<?php
/*

Hypertext Pre Procesor -----> PHP

Una clase es una plantilla para objetos, y un objeto es una instancia de una clase.

*/


$name = 'Linus';

// echo '<h1>Hello $name</h1>';
// echo "<h1>Hello $name</h1>";

print '<h1>Hello $name</h1>';
print "<h1>Hello " . $name . "</h1>";

// function myTest(){
//     global $name;
//     $name = 'Tobias';
// }

function myTest(){
    
    $GLOBALS['name'] = 'Tobias';
}


myTest();
echo $name;

// Obtener longitud de un string
echo '<br/>';
echo "El nombre de mi amigo $name, tiene " . strlen($name) . " letras.";
echo '<br/>';
echo phpversion();
echo '<br/>';


// Obtener el número de palabras de un string
$texto = "Una clase es una plantilla para objetos, y un objeto es una instancia de una clase.";

echo "Este '<b>$texto</b>' tiene " . str_word_count($texto) . " palabras";
echo '<br/>';


// Obtener la posición en un string de un caracter dado.
echo "La primera <i>p</i> de esta frase '<b>$texto</b>' está en la posición ". strpos($texto,'p');
echo '<br/>';

// Poner un texto en mayusculas o minuscular
$pelao = "mayusculas";
echo strtoupper($pelao);
echo '<br/>';
echo strtolower($pelao);
echo '<br/>';

// Sustituir una palabra por otra dada
$replace = "Tus Mulas";
echo $replace;
echo '<br/>';
echo str_replace("Mulas", "Muelas", $replace);
echo '<br/>';

// Revertir texto
$capicua = "luz azul";
echo $capicua;
echo '<br/>';
echo strrev($capicua);
echo '<br/>';

// Quitar espacios en blanco texto
$espacios = " Pecadorr ";
echo $espacios;
echo '<br/>';
echo trim($espacios);
echo '<br/>';
$separar = "Fistro Pecador";
$separado = explode(" ", $separar);

var_dump($separado);
echo '<br/>';

// Substring
$x = "Hello World!";
echo substr($x, 6, -1); // salida: World
echo '<br/>';
echo substr($x, 3); // salida: lo World!
echo '<br/>';
echo substr($x, -5, 3); // salida: orl
echo '<br/>';
$x = "Hi, how are you?";
echo substr($x, 5, -3); // salida: ow are y
echo '<br/>';
//Enteros

$variar = 34;
$variar = (float) $variar;
if (is_int($variar)) {
    echo "$variar es un integer";
    echo '<br/>';
}elseif(is_float($variar)){
    echo "$variar es un float";
}



echo '<br/>';
if (is_numeric($entero)) {
    echo "$entero es un numero";
}