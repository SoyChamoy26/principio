<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrante del Punto</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $coordenadaX = $_POST['coordenadaX'];
    $coordenadaY = $_POST['coordenadaY'];

    if ($coordenadaX > 0 && $coordenadaY > 0) {
        echo "El punto ($coordenadaX, $coordenadaY) se encuentra en el primer cuadrante.";
    } elseif ($coordenadaX < 0 && $coordenadaY > 0) {
        echo "El punto ($coordenadaX, $coordenadaY) se encuentra en el segundo cuadrante.";
    } elseif ($coordenadaX < 0 && $coordenadaY < 0) {
        echo "El punto ($coordenadaX, $coordenadaY) se encuentra en el tercer cuadrante.";
    } elseif ($coordenadaX > 0 && $coordenadaY < 0) {
        echo "El punto ($coordenadaX, $coordenadaY) se encuentra en el cuarto cuadrante.";
    } else {
        echo "El punto ($coordenadaX, $coordenadaY) se encuentra en uno de los ejes.";
    }
}
?>

<form method="post" action="">
    <label for="coordenadaX">Coordenada X:</label>
    <input type="number" name="coordenadaX" required>
    <br>
    <label for="coordenadaY">Coordenada Y:</label>
    <input type="number" name="coordenadaY" required>
    <br>
    <input type="submit" value="Determinar Cuadrante">
</form>

</body>
</html>
