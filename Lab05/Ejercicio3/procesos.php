<?php
    $tarifa = $_POST['tarifa'];
    $dias = $_POST['dias'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 3</title>
</head>
<body>
    <div class="container">
    <?php
        $bruto = $tarifa * $dias;
        $descuento = $bruto * 0.15;
        $neto = $bruto - $descuento;
        $lapiceros = $dias * 3;

        echo '<div class="alert alert-primary my-5" role="alert"> El importe bruto sera de : S/' . $bruto . '. <br> Se aplicara un descuento de: S/' . $descuento . '<br> El importe total sera de: S/' . $neto . '. <br> Y se le obsequiara: ' . $lapiceros . ' lapieceros</div>';
    ?>
    </div>
</body>
</html>