<?php

//Static nos permite acceder a los atributos y métodos de clase sin tener que crear una instancia.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Persona {
    public static $dia = '7 de Septiembre';

    public static function saludo($nombre = null){
        if ($nombre) {
            return 'Hola, tu prima ' . $nombre;
        }else{
            return 'Hola, tu prima ';
        }
        
    }
}

// $johnny = new Persona;
// echo $johnny->saludo('Johnny');
echo Persona::$dia;
echo '<br/>';
echo Persona::saludo('Puri');