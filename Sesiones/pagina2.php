<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SESSION) {
//    $nombre = $_SESSION['nombre'];
//    echo "<h1>Hola, $nombre</h1>";
    print_r($_SESSION);
} else{
    echo "No has iniciado session";
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h1>Hola, <?php echo $_SESSION['nombre']; ?></h1>-->
    <a href="cerrar.php">Cerrar session</a>
</body>
</html>