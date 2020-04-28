<?php

// Declaracion de variables

$a = "Hola mundo";
$b = 3;
$c = 2.5;

echo $a;

function miFuncion() {
  global $a, $b;
}

// Arreglos

$array_1 = array();
$array_2 = array();

$array_1[] = 1;
$array_1[] = 2;
$array_1[] = "Hola";

var_dump($array_1);

$array_2["Valor1"] = 1;
$array_2["Valor2"] = 2;

$json = '{"cve_unica": "258177"}';

$alumno_aux = json_decode($json);

// Clases
class Aux {
  public $x;
  public $y;
}

$aux = new Aux();

$aux->x = "Valor X";

?>
