<?php

require_once("Circulo.php");

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller de Figuras</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-4">

        <h1 class="text-primary">Taller de Figuras</h1>

        <table class="table table-bordered table-striped">
            <tr class="table-dark">
                <th>Radio</th>
                <th>Área</th>
            </tr>
            <?php foreach ($circulos as $circulo): ?>
            <tr>
                <td><?php echo $circulo->radio; ?></td>
                <td><?php echo round($circulo->calcularArea(), 2); ?></td>
            </tr>
            <?php endforeach; ?>
        </table>

        <div class="alert alert-info">
            Total de figuras creadas: <?php echo Circulo::obtenerContador(); ?>
        </div>

    </div>
</body>
</html>