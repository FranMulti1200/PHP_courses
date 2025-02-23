<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona {
    public $nombre;
    public $edad;
    public $pais;

    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }
    
    public function mostrarInformación(){
        echo $this->nombre .' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

$carlos = new Persona('Johnny MeLavo', 23, 'Barbate');
$carlos -> mostrarInformación();

echo '<br/>';

$perico = new Persona('Perico', 22, 'Alcorcon');
$perico -> mostrarInformación();