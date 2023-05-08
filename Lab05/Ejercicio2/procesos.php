<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio2</title>
</head>
<body>
    <div class="container">
        <?php
            $nuevo = $precio - ($precio * 0.05);
            
            $importe = $nuevo * $cantidad;
            
            $descuento = $importe * 0.07;
            
            $total = $importe - $descuento;
            
            $obsequio = $cantidad * 2;

            echo '<div class="alert alert-warning my-5" role="alert"> Tus gaseosas ahora cuestan: S/' . $nuevo . ' por unidad. <br> El importe es de: S/' . $importe . ' y el descuento es de: S/' . $descuento . ' <br> El pago total es de: S/' . $total . '. <br> Y tendrás un obsequio de: ' . $obsequio . '</div>';
        ?>
    </div>
</body>
</html>