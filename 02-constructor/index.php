<?php
require_once 'coche.php';

$coche = new Coche('Seat', 'amarillo', 'Panda', 150, 200, 5);
$coche2 = new Coche('Renault', 'rojo', 'Clio', 150, 200, 2);


var_dump($coche);
var_dump($coche2);


$coche->setMarca("Mercedes");
$coche->setColor("Azul");
$coche->velocidad = 1000;
var_dump($coche);

echo $coche->mostrarInformacion($coche);
echo $coche->mostrarInformacion($coche2);
