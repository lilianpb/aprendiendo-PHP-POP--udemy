<?php
/* herencia : la posibilidad de compartir atributos y metdos entre clases*/
class Persona
{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    //getters
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getAltura()
    {
        return $this->nombre;
    }
    public function getEdad()
    {
        return $this->nombre;
    }

    //setter

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura)
    {
        $this->nombre = $altura;
    }
    public function setEdad($edad)
    {
        $this->nombre = $edad;
    }

    //accion

    public function hablar()
    {

        return "estoy hablando";
    }

    public function caminar()
    {

        return "estoy caminando";
    }
}

class Informatico extends Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        $this->lenguajes = "HTML, CSS, PHP";
        $this->experienciaProgramador = 10;
    }
    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }

    public function programar()
    {

        return "Soy programadora";
    }

    public function repararOrdenador()
    {

        return "Puedo reparar ordenadores";
    }

    public function hacerOfimatica()
    {

        return "Estoy escribiendo en word";
    }
}

class Designer extends Informatico
{

    public $auditar;
    public $experienciaDiseñador;

    public function __construct()
    {
        parent::__construct(); //para heredar lo que hay en el constructor de la sclase padre
        $this->auditar = "experto";
        $this->experienciaDiseñador = 5;
    }

    public function auditoria()
    {

        return 'Estoy presentando un proyecto';
    }
}
