<?php

function suma($numero, $numero2){
    return $numero + $numero2;
}

/*Se puede usar include o require. Require es más restrictivo
y corta la ejecución si no encuentra el archivo solicitado, mientras 
que include sol avisa y sigue ejecutando código.*/
//include 'vista.php';

//include_once o requiere_once solo llama a la función una vez.
//include_once 'vista.php';
require 'vista.php';
//require_once 'vista.php';


?>