<?php

if (isset($_COOKIE['font-size'])) {
    $tamaño = $_COOKIE['font-size'];
} else{
    $tamaño = '15px';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texto</title>
    <style>
        p {
            font-size: <?php echo $tamaño; ?>;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui natus, sint eligendi rerum earum quae neque! Nostrum blanditiis sunt earum, magni laboriosam facere molestiae quis dicta, quibusdam, nemo ab laudantium?</p>
</body>

</html>