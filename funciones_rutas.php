<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



	// * PATHINFO_DIRNAME // Devuelve el directorio padre del archivo
	// * PATHINFO_BASENAME // Devuelve el nombre del archivo con su extension
	// * PATHINFO_EXTENSION // Devuelve la extension del archivo
	// * PATHINFO_FILENAME // Devuelve el nombre del archivo

//echo pathinfo('/opt/lampp/htdocs/CursoPHP/documento.txt', PATHINFO_DIRNAME);
//echo pathinfo('documento.txt', PATHINFO_EXTENSION);
//echo pathinfo('documento.txt', PATHINFO_FILENAME);

// Devuelve todos los archivos, según parametro, almacenados en un array
// $resultado= glob('*.{php,html,txt}', GLOB_BRACE);
// print_r($resultado);

// Devuelve el nombre de un archivo, con extensión o sin ella, dada una ruta
// echo basename('/opt/lampp/htdocs/CursoPHP/documento.txt', '.txt');

// Devuelve el directorio padre de una ruta.
echo dirname('/opt/lampp/htdocs/CursoPHP/documento.txt');



?>