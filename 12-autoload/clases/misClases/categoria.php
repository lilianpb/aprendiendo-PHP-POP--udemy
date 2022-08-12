<?php

namespace misClases;

class Categoria
{

    public $nombre;
    public $descripcion;

    public function __construct()
    {
        $this->nombre = "Acción";
        $this->descripcion = "Enfocada en las reviews de videojuegos de acción jjj";
    }
}
