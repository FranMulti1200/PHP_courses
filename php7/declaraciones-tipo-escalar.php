<?php
declare(strict_types = 1);


/* A partir de PHP 7 se añade las declaraciones de tipo, asi
pues si en una función especificamos el tipo de dato el 
parámetro de entrada, fallara si le pasamos un tipo de dato
distinto */
function cuadrado(string $numero){
    return $numero * $numero;
}

$numero = '3';
echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);
