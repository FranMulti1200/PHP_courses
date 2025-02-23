<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if(!$conexion){
    header('Location: error.php');
}

$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
if(!$posts){
    header('Location: error.php');
}

require 'views/index.view.php';
?>