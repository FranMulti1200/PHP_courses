<?php

function calcular_area_tringulo($base, $altura){
    $resultado = ($base * $altura) / 2;
    return $resultado;
}

$area_triangulo = calcular_area_tringulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';


?>