<?php

// Se pueden encadenar métodos de la misma Clase si al final del método añadimos "return this".

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo 'Su nombre es: ' . $this->nombre . '<br/>';
        return $this;
    }

    public function mostrarCorreo(){
        echo 'Su correo es: ' . $this->correo . '<br/>';
        return $this;
    }

}

$pepe = new Usuario('Pepe', 'pepetronico@correo.com');

// Encadenando métodos.
$pepe->mostrarNombre()->mostrarCorreo();
echo '<br/>';
//$pepe->mostrarCorreo();