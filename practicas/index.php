<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <img src = "../media/images/1.jpg">
<?php
//

$animal1= "Ave";
$animal2= "Perro";
$aqua =43;
$perro ="22";
$cantidad = $aqua+$perro;
$colorAve= "Rojo";

if ($perro >= $aqua){
    echo "2 es ,mayor ";
} else {
    echo "<br>";
    echo "<hr>";
    echo $cantidad . "<h1>Si funcionó el IF pero lo multiplicamos</h1>";
    echo "<hr>";
    echo "<h2> Probamos agregando imagenes </h2>";
    echo "<hr>";
    echo '<img src="../media/1.png" alt="Descripción de la imagen">';
}

if ($animal1 != $animal2) {
    echo "<p> No es igual el animal 1 " .$animal1. " al 2 " .$animal2. ",</p>";
} else {
    echo "<p> Son iguales </p>";
};


$lineas = 0;

for ($i = 0; $i <10; $i++) { 
    echo "linea ".$lineas." <br> ";
    $lineas++;
};
echo "<br> <hr> ";

if( ($animal1 == "Ave") && ($colorAve == "blanco") )  {
    echo "<p> El animal es un " . $animal1 . " y su color es: " .$colorAve. "</p> ";
}else{
    echo "<p> El color no es blanco pero si es un Ave</p>";
    echo "<p> El animal es un Anilazo";
}



function writeMsg(){
    echo " <br> Usamos la funcion para mandar u mensaje en pantalla" . "<hr>";
}


writeMsg();

require 'funciones/funcionesString.php';
require 'funciones/funcionSuma.php';

$SumaDeEnteros = sumaEnteros(5,9);


echo"<br> Suma de enteros es " . $SumaDeEnteros;

addName('Santiago', 'Bergerat --->>');




?>

</body>
</html>