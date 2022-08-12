<?php
class Usuario
{

    public $nombre;
    public $email;

    public function __construct()
    {
        $this->nombre = "Lilian" . "<br>";
        $this->email = "pea.@gmail.com" . "<br>";
        echo "instancia del objeto creada <br>";
    }



    public function __toString()
    {
        echo "Hola soy {$this->nombre}, esta regristrado con el email {$this->email}";
    }

    public function __destruct()/*sirve para cuando ya no se haya mas referencia de la clase desruye el objeto */
    {
        echo " <br> Destruyendo el objeto";
    }
}
$usuario = new Usuario();

echo $usuario->nombre;
echo $usuario->email;
echo $usuario;
