<?php 

// print_r($_POST);

// if (!$_POST) {
//     header('Location: http://localhost/CursoPHP/formularios/');
// }

// $nombre = $_POST['nombre'];
// $sexo = $_POST['sexo'];
// $year = $_POST['year'];
// $terminos = $_POST['terminos'];

// echo 'Hola, ' . $nombre . ' y eres ' . $sexo;

//print_r($_GET);

if (!$_GET) {
    header('Location: http://localhost/CursoPHP/formularios/');
}

$nombre = $_GET['nombre'];
$sexo = $_GET['sexo'];
$year = $_GET['year'];
$terminos = $_GET['terminos'];

if ($nombre) {
    echo $nombre . '<br />';
} else {
    echo "El usuario no establecio su nombre <br />";
}




echo $sexo . '<br />';
echo $year . '<br />';
echo $terminos . '<br />';

?>
