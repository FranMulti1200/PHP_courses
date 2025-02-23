<?php

// Regresa 1 si el valor en l izquierda es mayor que el de la derecha
// Regresa 0 si los valores en ambos lados son iguales.
// Regresa -1 si el valor de derecha es mayor que el de la izquierda.

// <   =   >
// 1   0  -1

//echo 1 <=> 1;


$arreglo = [3,1,5,2,4];
//sort($arreglo);

// function comparar ($a, $b){
//     if($a == $b){
//         return 0;
//     }elseif ($a > $b) {
//         return 1;
//     }else{
//         return -1;
//     }
// }

function comparar($a, $b){
    return $a <=> $b;
}

//Función para ordenar array con un función del usuaio
usort($arreglo, 'comparar');


//Función que muestra el array separado por un simbolo como parámetro.
echo implode(' - ', $arreglo);