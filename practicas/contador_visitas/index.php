<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function contar_usuarios(){
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $cuenta = (integer)file_get_contents($archivo) + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de visitas</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:700,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios(); ?></p>
        <p class="text">Visitas</p>
    </div>
    
</body>
</html>