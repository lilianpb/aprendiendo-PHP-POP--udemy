<?php
require_once 'configuracion.php';

Configuracion::setColor('amarillo');
Configuracion::setEntorno('localhost');
Configuracion::setNewsLetter(true);


echo Configuracion::$color . "<br>";
echo Configuracion::$entorno . "<br>";
echo Configuracion::$newsLetter . "<br>";
echo Configuracion::getColor() . "<br>";


$configuracion = new Configuracion();
echo $configuracion::$color = "Blue";
var_dump($configuracion);
