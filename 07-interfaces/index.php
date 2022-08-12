<?php
interface Ordenador
{

    public function encender();
    public function apagar();
    public function reiniciar();
    public function desgragmentar();
}

class iMac implements Ordenador
{

    public $modelo;

    public function encender()
    {
        return "el ordenador esta encendido";
    }
    public function apagar()
    {
        return "el ordenador esta apagado";
    }
    public function reiniciar()
    {
        return "deseas reiniciar";
    }
    public function desgragmentar()
    {
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
}

$ordenador = new iMac();

var_dump($ordenador);
$ordenador->setModelo("Intel");
echo $ordenador->encender();
var_dump($ordenador);
