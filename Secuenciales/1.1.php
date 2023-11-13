<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuadrado</title>
</head>
<body>
    <?php
    if (isset($_POST['numero'])) {
        $numero = intval($_POST['numero']);
        echo "El cuadrado del número es: " . $numero**2 . "<br>";
        echo "El cubo de tu número es: " . $numero**3 . "<br>";
    }
    ?>
    <form method="post">
        Introduce un Numero: <input type="text" name="numero">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>