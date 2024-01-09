<?php
// Genera un número aleatorio y muestralo en decimal, octal, binario y hexadecimal
$numeroAleatorio = rand(1, 100);
//Aquí genero el valor

// Muestra el número en diferentes representaciones

$deci = $numeroAleatorio "<br>";
$octa = decoct($numeroAleatorio) . "<br>";
$bin = decbin($numeroAleatorio) . "<br>";
$hexa = dechex($numeroAleatorio) . "<br>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../estilo.css">
</head>
<body>

<h1>
<!--    Aquí puedes visualizarlo -->
El número <?php echo "Decimal: $deci <br> Octal: $octa <br> Binario: $bin <br> Hexadecimal: $hexa"; ?>
</h1>
</body>
</html>

