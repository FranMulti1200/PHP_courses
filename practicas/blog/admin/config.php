<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define('RUTA', 'http://localhost/CursoPHP/practicas/blog');

$bd_config = array(
    'basedatos' =>'blog_practica',
    'usuario' => 'root',
    'pass' => ''
);

$blog_config = array(
    'post_por_pagina' => '2',
    'carpeta_imagenes' => 'imagenes/'
);

$blog_admin = array(
    'usuario' => 'Carlos',
    'password' => '123'
);

?>  