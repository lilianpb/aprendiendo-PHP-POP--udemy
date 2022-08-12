<?php
function autoCargarClases($class)
{
    require_once 'clases/' . $class . '.php';
}

spl_autoload_register('autoCargarClases');
