<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <?php
    if (isset($_POST['precio']) && isset($_POST['cantidad'])) {
        $precio = floatval($_POST['precio']);
        $cantidad = floatval($_POST['cantidad']);
        $total = $precio * $cantidad;
        echo "El total de su compra es: " . $total;
    }
    ?>
    <form method="post">
        Introduce el precio del producto: <input type="text" name="precio"><br>
        ¿Cuantos productos quiere llevar? <input type="text" name="cantidad"><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>