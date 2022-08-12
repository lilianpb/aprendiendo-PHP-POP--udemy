<?php

class Coche
{


    //propiedades del objeto

    //podemos acceder desde cualquier lugar, clase actual, clases que hereden de esta clases y fuera de clases
    public  $modelo;

    //solo se pueden usar desde la clase que los define y de clase que hereden esta clase
    protected $color;

    //solo se puede acceder desde esta clase
    private $marca;
    public $velocidad;
    public $caballaje;
    public $plazas;

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

    public function setMarca($marca)
    {

        $this->marca = $marca;
    }

    public function mostrarInformacion(Coche $miObjeto)
    {

        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "Modelo: " . $miObjeto->modelo . "<br>";
        $informacion .= "Color: " . $miObjeto->color . "<br>";
        $informacion .= "Marca: " . $miObjeto->marca . "<br>";
        $informacion .= "Velocidad: " . $miObjeto->velocidad . "<br>";
        $informacion .= "Caballaje: " . $miObjeto->caballaje . "<br>";
        $informacion .= "Plazas: " . $miObjeto->plazas . "<br>";


        return $informacion;
    }

    //constructor dan valor a los atributos que se le dan al objeto

    public  function __construct($modelo, $color, $marca, $velocidad, $caballaje, $plazas)
    {
        $this->modelo = $modelo;
        $this->color = $color;
        $this->marca = $marca;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }



    /* public  function __construct()
    {
        $this->modelo = "Aventador";
        $this->color = "rojo";
        $this->marca = "ferrari";
        $this->velocidad = 300;
        $this->caballaje = 600;
        $this->plazas = 2;
    } */
}
