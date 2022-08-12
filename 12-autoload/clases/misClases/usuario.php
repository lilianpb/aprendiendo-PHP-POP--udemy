<?php

namespace misClases;

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Lilian Peña";
        $this->email = "pea.lili@gmail.com";
    }
}
