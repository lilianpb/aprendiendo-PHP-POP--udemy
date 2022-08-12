<?php
class Persona
{
    private $nombre;
    private $edad;
    private $ciudad;

    public function  __construct($nombre, $edad, $ciudad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }

    public function __call($name, $arguments)
    {
        $prefix_metodo = substr($name, 0, 3);
        return $prefix_metodo;
        if ($prefix_metodo == 'get') {
            $nombreMetodo = substr(strtolower($name), 3);
        }
        return  $this->nombreMetodo;
    }
}
$persona = new Persona("Riri", 26, "Madrid");

echo $persona->getNombre();
