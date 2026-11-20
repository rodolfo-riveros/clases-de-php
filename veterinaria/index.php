<?php

require_once('Mascota.php');
require_once('Cliente.php');


$mascota1 = new Mascota("Boby", "Canino", "Chuzco", "macho");
$mascota2 = new Mascota("Cintia", "Felina", "Chuzca", "hembra");


echo $mascota1->atender();
echo "<br>";
echo $mascota1->mostrar();
echo "<br>";
echo $mascota2->atender();
echo "<br>";
echo $mascota2->mostrar();
echo "<br>";


$cliente1 = new Cliente("Juancho El pegriloso", "89745632");
$cliente2 = new Cliente("Maria tu terror", "98765432");



echo $cliente1->mostrar();
echo "<br>";
echo $cliente2->mostrar();
echo "<br>";

