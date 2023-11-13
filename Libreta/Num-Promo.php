<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Número Primo</title>
</head>
<body>

<?php

function esPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $numero = $_POST['numero'];

    if (esPrimo($numero)) {
        echo "El número $numero es primo.";
    } else {
        echo "El número $numero no es primo.";
    }
}
?>

<form method="post" action="">
    <label for="numero">Ingrese un número:</label>
    <input type="number" name="numero" required>
    <br>
    <input type="submit" value="Verificar Primo">
</form>

</body>
</html>
