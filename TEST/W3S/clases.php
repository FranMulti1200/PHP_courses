<?php
/*

Hypertext Pre Procesor -----> PHP

Una clase es una plantilla para objetos, y un objeto es una instancia de una clase.

*/


class Coche {
    public $color;
    public $modelo;

    public function __construct($color, $modelo){
        $this->color = $color;
        $this->modelo = $modelo;        
    }

    public function mensaje(){
        return "Mi coche molón es un: $this->modelo de color: $this->color";
        
    }       
    
}

$miCoche = new Coche('verde','CagarroGT');

echo $miCoche->mensaje();