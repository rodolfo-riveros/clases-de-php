<?php

class Usuario{

    public $nombre, $correo;
    private $contraseña;

    function __construct($nombre, $correo, $contraseña){
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contraseña = $contraseña;
    }


    function getMostrar(){
        echo "El usuario es: " . $this->nombre;
        echo "<br>";
        echo "Su correo es: " . $this->correo;
        echo "<br>";
    }

    public function setCorreo($correo) {
    if (strpos($correo, "@") !== false) {
            $this->correo = $correo;
        }
    }
}


$usuario1 = new Usuario("Pepito el wapo", "pepitoellocaso@gmail.com", "123456789");

$usuario1->getMostrar();
echo "<br>";
$usuario1->setCorreo("pepitoelwapo@gmail.com");
echo "<br>";
$usuario1->getMostrar();