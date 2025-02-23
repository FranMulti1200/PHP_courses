<?php

//Metodo para comprobar si se han enviado los datos
// if ($_SERVER['REQUEST_METHOD'] == 'GET'){
//     echo "Se enviaron por GET";
// }else {
//     echo "Se enviaron por POST";
// }

//Metodo 2 para comprobar si se han enviado los datos
if (isset($_POST['submit'])) {
    echo "Se han enviado los datos correctamente";
    print_r($_POST['submit']);
}


?>