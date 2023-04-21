<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BONIFICACION</title>
</head>
<body>
    <form method="post" action="">
        Ingresar cantidad de hijos: <br> <input type="text" name="valor1"><br>
        Ingresar importe total: <br> <input type="text" name="valor2"><br>
        Resultado :<br>
        <input type="submit" name="Calcular" value="Calcular">
    </form>
<?php
    $bonificacion=$_POST ["valor1"]*50;
    $comision= $_POST ["valor2"]*0.75;
    $sueldobruto=600+$comision+$bonificacion;
    $descuento=$sueldobruto*0.11;
    $sueldonedo=$sueldobruto-$descuento;
    echo "La comision es: ",$comision."<br>";
    echo "La bonificacion es:", $bonificacion."<br>";
    echo "El sueldo bruto es de:", $sueldobruto."<br>";
    echo "El descuento es de:", $descuento."<br>";
    echo "El sueldo neto es de:", $sueldonedo."<br>";
?>
</body>
</html>