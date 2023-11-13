<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar Números</title>
</head>
<body>

<?php

function ordenarNumeros($num1, $num2, $num3) {
    $numeros = array($num1, $num2, $num3);
    sort($numeros); 
    return $numeros;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $numero3 = $_POST['numero3'];

    $numerosOrdenados = ordenarNumeros($numero1, $numero2, $numero3);

    echo "Números ordenados de menor a mayor: ";
    foreach ($numerosOrdenados as $numero) {
        echo $numero . " ";
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
    <label for="numero3">Número 3:</label>
    <input type="number" name="numero3" required>
    <br>
    <input type="submit" value="Ordenar">
</form>

</body>
</html>
