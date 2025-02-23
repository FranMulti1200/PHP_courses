<?php

class Persona {
    public $nombre;
    public $edad;
    public $pais;
    
    public function mostrarInformación(){
        echo 'Hola Mundo';
    }
}

$carlos = new Persona;
$carlos->nombre = 'Johnny MeLavo';
$carlos->edad = 23;
$carlos->pais = 'Barbate';

// $carlos->mostrarInformación();

echo $carlos->nombre . ' tiene ' . $carlos->edad . ' años de edad';

$perico = new Persona;
$perico->nombre = 'Perico';
$perico->edad = 22;
$perico->pais = 'Murcia';