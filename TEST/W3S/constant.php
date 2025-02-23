<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Definicion con define
define("CONSTANTE", "Me mola tu rollo boyo");

echo CONSTANTE;
echo '<br/>';

// Definicion con const
const GÜEVOS = 2;

echo GÜEVOS;
echo '<br/>';

// Array constante
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
echo cars[0];
echo '<br/>';

// Constantes son globales
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}

myTest();
echo '<br/>';

// Constantes mágicas
// __CLASS__ If used inside a class, the class name is returned.

class Fruits {
    public function myValue(){
      return __CLASS__;
    }
  }
  $kiwi = new Fruits();
  echo $kiwi->myValue();
  echo '<br/>';

// __DIR__ The directory of the file.

echo __DIR__;
echo '<br/>';

// __FILE__ The file name including the full path.

echo __FILE__;
echo '<br/>';

// __FUNCTION__ If inside a function, the function name is returned.

function myValue(){
    return __FUNCTION__;
  }
  echo myValue();
echo '<br/>';

// __LINE__	The current line number.

echo __LINE__;
echo '<br/>';

// __METHOD__ If used inside a function that belongs to a class, both class and function name is returned.

class Fruits2 {
    public function myValue(){
      return __METHOD__;
    }
  }
  $kiwi = new Fruits2();
  echo $kiwi->myValue();
  echo '<br/>';
// __NAMESPACE__ If used inside a namespace, the name of the namespace is returned.

/*namespace myArea;

function myValue(){
  return __NAMESPACE__;
}

echo myValue();*/

// __TRAIT__ If used inside a trait, the trait name is returned.

trait message1 {
    public function msg1() {
      echo __TRAIT__; 
    }
  }
  
  class Welcome {
    use message1;
  }
  
  $obj = new Welcome();
  $obj->msg1();
  echo '<br/>';

// ClassName::class	Returns the name of the specified class and the name of the namespace, if any.

$i = 6;

if($i<5):
    $j=++$i;
    echo $j;
elseif($i>5):
    $i *= 5;
    echo $i;
endif;
