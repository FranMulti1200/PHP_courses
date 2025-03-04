<?php session_start();

// Para mostrar errores en el navegador
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $statement = $conexion->prepare('
        SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
    );

    $statement->execute(array(
        ':usuario' => $usuario,
        ':password' => $password
    ));

    $resultado = $statement->fetch();
    if ($resultado !== false) {
        $_SESSION['usuario']=$usuario;
        header('Location: index.php');
    }else{
        $errores .= '<li>Datos incorrectos</li>';
    }
    
    
}

require 'views/login.view.php';

?>