<?php

class Producto {
    private $precio;

    public function __construct($precio) {
        $this->precio = $precio;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function setPrecio($precio) {
        if ($precio > 0) {
            $this->precio = $precio;
        }
    }
}


$p = new Producto(4.5);
$p->setPrecio(-5);
echo $p->getPrecio(); 