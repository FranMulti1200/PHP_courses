<?php

/*
$amigo = array('telefono' => 654589658, 'edad' => 20, 'pais' => 'México');

// Función para extraer los datos de un array funcional
extract($amigo);

echo($telefono);*/

$semana = array(
    'Lunes', 'Martes', 'Miercoles',
    'Jueves', 'Viernes', 'Sábado', 'Domingo'
);

//Función para extraer el último elemento de un array
//$ultimo_dia = array_pop($semana);

// foreach($semana as $dia){
//     echo $dia . '<br />';
// }

// echo $ultimo_dia;

//Función que muestra el array separado por un simbolo como parámetro.
//echo join(' - ', $semana);
//echo join('<br />', $semana);

//Función para mostrar el número de elementos del array
// echo count($semana);

//Función para ordenar alfabéticamente un array
// sort($semana);
// echo join(', ',$semana);

//Funcion cotraria a sort()
// rsort($semana);
// echo join(', ',$semana);

//Función invertir elementos array.

$semana_reverse = array_reverse($semana);
echo join(', ',$semana_reverse);






?>