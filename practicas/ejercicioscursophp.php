<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "<h1> Probando variables interpoladas</h1>";
$nombre = "hola mi nombre es carlos <br>  ";
$edad= 73;
$mensaje= " Me gusta enseñar a programar <br> ";

echo "$nombre , mi edad es  $edad y $mensaje <br> <hr>";

echo" <h3> Comparacion</h3>";
echo" 3>5 <br>";
var_dump(5>3);


$meses = array("Enero","febrero","marzo","abril","mayo","junio","julio");


echo "<hr> <br>" .$meses[2]. "<hr> <br>";

for ($i=0 ;$i<6;$i++){
    echo "<br> " .$meses[$i];
}




echo    " <br> <hr> </br>";

$pisoTecleado = 1;
$pisoAnterio =0;


switch ($pisoTecleado) {

    
    case 1:
        if($pisoTecleado > $pisoAnterio){
            echo "El piso no corresponde";
        };
        echo " vamos al primer piso";
        break;
    case 2:
        if($pisoTecleado == 2 ){
            echo "vamos al al piso indicado.....<br>";
        };
        echo "segundo piso";
        break;
    case 3:
        if($pisoTecleado == 3 ){
            echo "vamos al piso indicado.....<br>";
        };
        echo "tercer piso";
        break;
    default:
        echo "No corresponde a un piso del edificio";
        break;

};

?>
</body>
</html>