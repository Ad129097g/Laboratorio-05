<?php
    $importe = $_POST['importe'];
    $nhijos = $_POST['nhijos'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
    <div class="container">
        <?php
            $bono = $nhijos * 50;
            $bruto = 600 + ($importe * 0.075);
            $desc = $bruto * 0.11;
            $paga = ($bono + $bruto) - $desc;
            
            echo '<div class="alert my-3 alert-success" role="alert"> Has recibido una bonificación de: S/' . $bono . ' soles <br> Tu sueldo total es de: S/' . $bruto . '  soles <br> Se aplicara un descuento de S/' . $desc . ' soles <br> El pago total es de: S/' . $paga . ' soles</div>';
        ?>
    </div>
</body>
</html>