<?php

class Producto{
    public $nombre, $precio, $stock;

    function __construct($nombre, $precio, $stock){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    public function vender($cantidad) {
        if ($cantidad > $this->stock) {
            echo "No hay suficiente stock de " . $this->nombre . ".";
            return;
        }
        $this->stock = $this->stock - $cantidad;
        echo "Vendidas " . $cantidad . " unidades de " . $this->nombre . ". Stock restante: " . $this->stock;
    }

    public function mostrar() {
        echo $this->nombre . " | S/ " . $this->precio . " | Stock: " . $this->stock;
    }
   
}
