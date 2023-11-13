<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparación de Números</title>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    if ($numero1 == $numero2) {
        echo "Los números $numero1 y $numero2 son iguales.";
    } else {
        $menor = ($numero1 < $numero2) ? $numero1 : $numero2;
        echo "El número menor entre $numero1 y $numero2 es: $menor";
    }
}
?>

<form method="post" action="">
    <label for="numero1">Número 1:</label>
    <input type="number" name="numero1" required>
    <br>
    <label for="numero2">Número 2:</label>
    <input type="number" name="numero2" required>
    <br>
    <input type="submit" value="Comparar Números">
</form>

</body>
</html>
