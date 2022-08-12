<?php
require_once 'autoload.php';
/* require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php'; */

/* $usuario = new Usuario();
echo $usuario->nombre;

echo $usuario->email;
echo "<br>";

$categoria = new Categoria();
echo $categoria->nombre;
echo "<br>";
echo $categoria->descripcion;
echo "<br>";
$entrada = new Entrada();
echo $entrada->titulo;
echo "<br>";
echo $entrada->fecha;
 */

//espacios de nombre y paquetes 

use misClases\Usuario;
use misClases\Categoria;
use misClases\Entrada;
use panelAdministrador\Usuario as User;


class Principal
{

    public $usuario;
    public $categoria;
    public $entrada;

    public function __construct()
    {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
        //new misClases\Usuario();//esta seria otra forma usando los name spaces
    }

    public function getUsuario()
    {
        return $this->usuario;
    }


    public function informacion()
    {
        echo __METHOD__;
    }
}
//objeto principal
$principal = new Principal();
$principal->informacion();
var_dump($principal->usuario);

var_dump($principal->categoria);
var_dump($principal->entrada);

var_dump(get_class_methods($principal));

//obejeto de otro paquete
$usuario = new User();
var_dump($usuario);

//comprobar si existe una clase

$clase = class_exists('misClases\Usuario');
if ($clase) {
    echo "<h1>La clase si existe</h1>";
} else {
    echo "<h1>La clase no existe</h1>";
}
