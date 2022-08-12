<?php
class Usuario
{
    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;


    public function  getEmail()
    {
        return $this->email;
    }

    public function  getPassword()
    {
        return $this->password;
    }


    public function  setEmail($email)
    {
        $this->email = $email;
    }

    public function  setPassword($password)
    {
        return $this->password;
    }
}
$usuario = new Usuario();
echo $usuario::URL_COMPLETA; //para acceder a la constante tambien puedo acceder a ella a traves de la clase sein instanciar objeto
var_dump($usuario);
