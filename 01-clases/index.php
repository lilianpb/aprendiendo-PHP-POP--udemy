<?php
class Auto
{
    //propiedades del objeto
    public  $modelo = 'aventador';
    public $color = 'rojo';
    public $marca = 'ferrari';
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;

    //metodos antes eran funciones y son acciones que hace el objeto


    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function acelerar()
    {

        $this->velocidad++;
    }

    public function frenar()
    {
        $this->velocidad--;
    }


    public function getVelocidad()
    {

        return $this->velocidad;
    }
} //fin definicion clases

$coche = new Auto(); //creamos o instaciamos objetos


echo $coche->getColor();
echo $coche->getVelocidad();
echo $coche->acelerar();
echo $coche->getVelocidad();
echo $coche->marca;
