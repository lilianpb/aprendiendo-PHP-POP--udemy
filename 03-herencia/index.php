<?php
require_once 'clases.php';

$persona = new Persona();
var_dump($persona);
$programador = new Informatico();
echo $programador->setApellidos("Peña Bu");

var_dump($programador);
$diseñador = new Designer();
var_dump($diseñador);
echo $diseñador->auditoria();
