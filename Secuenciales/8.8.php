<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio</title>
</head>
<body>
    <?php
    if (isset($_POST['radio'])) {
        $radio = floatval($_POST['radio']);
        $area = 3.1416 * $radio ** 2;
        $perimetro = 2 * 3.1416 * $radio;
        echo "El área del círculo es: " . $area . "<br>";
        echo "El perímetro del círculo es: " . $perimetro . "<br>";
    }
    ?>
    <form method="post">
        Introduce el valor del radio: <input type="text" name="radio">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>