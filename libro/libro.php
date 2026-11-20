<?php

class Libro{
    private $stock, $precio, $pago, $vuelto;

    public function __construct($stock, $precio, $pago){
        $this->stock = $stock;
        $this->precio = $precio;
        $this->pago = $pago;
    }

    public function setStock($stock){
        if($stock > 0){
            $this->stock = $stock;
        }
    }

    public function setPagar(){
        if($this->precio == $this->pago ){
            echo "No tiene vuelto";
        }else{
            $this->vuelto = $this->pago - $this->precio;
            echo "Su vuelto es: " . $this->vuelto;
        }
    }

    public function getMostrar(){
        echo "El stock del libro es: " . $this->stock;
        echo "<br>";
        echo "El precio del libro es: " . $this->precio;
        echo "<br>";
        echo "Pago con un billete de: " . $this->pago;
        echo "<br>";
    }
}

$l = new Libro(1, 10, 50);
$l->setStock(2);
$l->getMostrar();
echo "<hr>";
$l->setPagar();
