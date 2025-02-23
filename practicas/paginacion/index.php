<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
} catch (PDOException $e) {
    echo "ERROR: " . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;

$inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("
    SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
    LIMIT $inicio, $postPorPagina
    ");

$articulos->execute();
$resultado = $articulos->fetchAll();

if (!$resultado) {
    header('Location: index.php');
}

$totalArticulos = $conexion->query('SELECT FOUND_ROWS() as total');
$totalArticulos = $totalArticulos->fetch()['total'];

$numeroPaginas = ceil($totalArticulos / $postPorPagina);


require 'index.view.php';

?>