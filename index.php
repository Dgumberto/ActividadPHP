<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>TP PHP</title>
</head>
<body>
    
<?php
$informacion=["Diego S. Gumberto","40","Programacion","Visual Studio","Zorin"];
echo "<h1 class=titulo>".$informacion[0]."</h1>";
echo "<h2> Edad: ".$informacion[1]."<br>";
echo "Hobbie: ".$informacion[2]."<br>";
echo "Mi editor de texto preferido es ".$informacion[3]."<br>";
echo "Uso el SO ".$informacion[4]."</h2>";


?>

</body>
</html>