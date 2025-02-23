<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Persona {
    public $nombre;
    public $edad;
    public $pais;
    
    public function mostrarInformación(){
        echo $this->nombre .' tiene ' . $this->edad . ' años de edad y es de ' . $this->pais;
    }
}

$carlos = new Persona;
$carlos->nombre = 'Johnny MeLavo';
$carlos->edad = 23;
$carlos->pais = 'Barbate';
$carlos -> mostrarInformación();