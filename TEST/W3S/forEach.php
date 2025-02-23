<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// No cambia colors
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors);
echo '<br/>';

// Cambia colors por referencia
$colors2 = array("red", "green", "blue", "yellow");

foreach ($colors2 as &$x) {
  if ($x == "blue") $x = "pink";
}

var_dump($colors2);

// Sintaxis alternativa.

$colors3 = array("red", "green", "blue", "yellow");

foreach ($colors3 as $x) :
  echo "$x <br>";
endforeach;

function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight();