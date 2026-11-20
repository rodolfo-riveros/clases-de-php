<?php

class Animal{
    public $especie, $sexo, $patas, $sonido;

    public function getInformacion(){
        echo "La especie del animal es: " . $this->especie;
        echo "<br>";
        echo "El sexo del animal es: " . $this->sexo;
        echo "<br>";
        echo "La cantidad de patas del animal es: " . $this->patas;
        echo "<br>";
    }

    public function onomatopella(){
        echo "El animal hace: " . $this->sonido;
    }
}


class Carnivoro extends Animal{
    public $comida;

    public function __construct($especie, $sexo, $patas, $sonido, $comida){
        $this->especie = $especie;
        $this->sexo = $sexo;
        $this->patas = $patas;
        $this->sonido = $sonido;
        $this->comida = $comida;
    }

    public function Alimento(){
        echo "Se alimenta de: " . $this->comida;
    }
    
}

class herbivoro extends Animal{
    
}

class onibovoro extends Animal{
    
}

$leon = new Carnivoro("Felino", "Todo los dias", 5, "GRRRRRRRR", "carnecita tierna");
$leon->getInformacion();
$leon->onomatopella();
$leon->Alimento();