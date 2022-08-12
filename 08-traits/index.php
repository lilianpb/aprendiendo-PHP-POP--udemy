<?php

/*metodos para compartir enrtre clases */
trait Utilidades
{

    public function mostrarNombre()
    {
        echo "<h1>El nombre es:" . $this->nombre . "</h1>";
    }
}
class Carro
{

    public $nombre;
    public $apellidos;
    use Utilidades;

    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }
}

class Persona
{
    public $nombre;
    public $apellidos;
    use Utilidades;
    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }
}

class VideoJuego
{
    use Utilidades;
    public function setNombre($nombre)
    {

        $this->nombre = $nombre;
    }
    public $nombre;
    public $año;
}

$coche = new Carro();
$coche->setNombre('Citroen');
$coche->mostrarNombre();
var_dump($coche);
$persona = new Persona();
$persona->setNombre('Lili');
$persona->mostrarNombre();
var_dump($persona);
$video = new VideoJuego();
$video->setNombre('Fifa');
$video->mostrarNombre();
var_dump($video);
