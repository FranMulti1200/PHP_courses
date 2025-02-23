<?php

// Public
// Pueden ser accedidos desde cualquier parte, ya sea dentro o fuera de la clase.

// Protected
// Pueden ser acceddidos desde dentro de la clase y otras clases heredadas. Pero no fuera de estas.

// Private
// Solo pueden ser accedidos desde dentro de la clase en la que fueron creados.
// Es decir que no podemos acceder a ellos desde otra clase que heredo y tampoco podemos acceder desde fuera de las clases.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Usuario {
    public $nombre;
    protected $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario {

    public function mostrarCorreo(){
        return 'Este es el correo ' . $this->correo;
    }

}



$perico = new Miembro('perico', 'pericoXXL@correo.com');

echo $perico->mostrarCorreo();