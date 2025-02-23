<?php

// Cuando usamos clases abstractas estamos protegiendo la clase padre de modo que solo se puede acceder a los métodos y/o variables del padre.
// mediate clases heredadas.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Saludador
{

    public function saludo()
    {
        return 'Hola';
    }
}

class Putero extends Saludador {}

$johnny = new Putero;

echo $johnny->saludo();
