<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operaciones</title>
</head>
<body>
    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3']) && isset($_POST['numero4'])) {
        $numero1 = intval($_POST['numero1']);
        $numero2 = intval($_POST['numero2']);
        $numero3 = intval($_POST['numero3']);
        $numero4 = intval($_POST['numero4']);
        echo "La suma del primer y el segundo número es: " . ($numero1 + $numero2) . "<br>";
        echo "El producto del tercer número por el cuarto es: " . ($numero3 * $numero4) . "<br>";
    }
    ?>
    <form method="post">
        Introduce tu primer número: <input type="text" name="numero1"><br>
        Introduce tu segundo número: <input type="text" name="numero2"><br>
        Introduce tu tercer número: <input type="text" name="numero3"><br>
        Introduce tu cuarto número: <input type="text" name="numero4"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
