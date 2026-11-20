<?php

require_once('Estudiante.php');


//objeto o instancia

$estudiante = [];

$estudiante[] = new Estudiante("Ana", 17);
$estudiante[] = new Estudiante("Juancho", 07);


foreach ($estudiante as $est) {
    $est->MostrarEstudiante();
}