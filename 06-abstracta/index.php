<?php
abstract class Ordenador
{
    public $encendido;

    abstract  public function encender();

    public function apagar()
    {
        $this->encendido = false;
    }
}

class PCAsus extends Ordenador
{

    public $sofware;
    public function arrancarSofware()
    {

        $this->sofware = true;
    }



    public function encender()
    {
        $this->encendido = true;
    }

    public function apagar()
    {
        $this->encendido = false;
    }
}

$ordenador = new PCAsus();

$ordenador->arrancarSofware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);
