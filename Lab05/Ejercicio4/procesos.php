<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio4</title>
</head>
<body>
    
    <div class="container">
    <?php
            $importe = $precio * $cantidad;
            $descuento = ($importe * 0.05) + (($importe - ($importe * 0.05)) * 0.05);
            $total = $importe - $descuento;

            echo '<div class="alert alert-danger my-5" role="alert">El importe total sera de: S/' . $importe . '<br> El descuento que se aplicara sera de: S/' . $descuento . '<br> El total a pagar sera de: S/' . $total . '</div>';
        ?>
    </div>

</body>
</html>

