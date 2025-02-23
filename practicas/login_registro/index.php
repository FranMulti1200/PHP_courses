<?php session_start();

// Para mostrar errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['usuario'])) {
    header('Location: contenido.php');
}else {
    header('Location: registrate.php');
}


?>