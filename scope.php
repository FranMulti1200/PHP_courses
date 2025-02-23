<?php

//$numero = 7;

/*Para poder usar $numero dentro de la función
se tiene que pasar como parámetro a la función,
la función no puede acceder a las variables 
que están fuera de la función.*/
// function mostrarNumero($numero){
//     echo $numero;
// }

/*Supuesto 2: No se puede acceder a una variable
de una función desde fuera de la fúnción, para 
usarla es necesario hacer return.*/

function mostrarNumero(){
     $numero = 10;
     return $numero;
}

echo mostrarNumero();

//echo $numero;




?>