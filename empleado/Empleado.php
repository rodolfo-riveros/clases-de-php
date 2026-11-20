<?php

class Empleado{
    public $nombre;
    private $sueldo;


    //metodo constructor
    public function __construct($nombre, $sueldo){
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function verSueldo(){
        echo "El sueldo de mi empleado es: s/. " . $this->sueldo;
    }

    public function aumentarSueldo($monto){
        $this->sueldo += $monto;
    }
}

$empleado1 = new Empleado("Juancho tu terror", 1000);

$empleado1->verSueldo();
echo "<br>";
$empleado1->aumentarSueldo(300);
echo "<br>";
$empleado1->verSueldo();