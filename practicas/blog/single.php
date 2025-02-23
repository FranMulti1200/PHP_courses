<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']);

if (!$conexion) {
    header('Location: error.php');
}

if (empty($id_articulo)) {
    header('Location: index.php');
}

$post = obtener_post_por_id($conexion, $id_articulo);

if (empty($post)) {
    header('Location: index.php');
}

$post = $post[0];


require 'views/single.view.php';

?>