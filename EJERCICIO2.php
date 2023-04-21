<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GASEOSAS</title>
</head>
<body>
    <form method="post" action="">
        Ingresar cantidad de gaseosas: <br> <input type="text" name="valor1"><br>
        Ingresar precio actual: <br> <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Calcular" value="Calcular">
    </form>
<?php
    $nuevoprecio=$_POST ["valor2"]*0.05;
    $compra_sin_descuento=$nuevoprecio*$_POST["valor1"];
    $descuentoespecial= $compra_sin_descuento*0.07;
    $pagar=$compra_sin_descuento-$descuentoespecial;
    $obseguio=$_POST["valor1"]*2;
    echo "Nuevo precio de la gaseosa: ",$nuevoprecio."<br>";
    echo "El importe de la compra es:", $compra_sin_descuento."<br>";
    echo "El importe de descuento es:", $descuentoespecial."<br>";
    echo "El importe a pagar es:", $pagar."<br>";
    echo "Obsequio:", $obseguio."caramelos","<br>";
?>
</body>
</html>