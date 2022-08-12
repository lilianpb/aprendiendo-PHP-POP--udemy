<?php

namespace panelAdministrador;

class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Antonio Pineda";
        $this->email = "antonio@gmail.com";
    }
}
