<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    
<?php 

$numero = 0;
for ($i = 0; $i <=10; $i++){
    echo "El numero es : ".$i." <br> <hr> ";
    $i+=$numero;
}
echo "Finalizo el for  ";


$asteriscos = "*";

for ($y = 0; $y <=10; $y++){
    $indice=$y;
   for ($x = 1; $x <=$indice; $x++){
    
    echo $asteriscos ;
};
echo "<br>";
}






echo "<hr> <br> <h1> TABLAS DE MULTIPLICAR</h1>";
for ($i = 0; $i <= 10; $i++){

    echo "<br><h2> TABLA DEL $i</h2> <br>";
    for ($j = 0; $j<=10; $j++){
        $resultado = $j*$i ;
        echo "<br>".$j.  "x "   .$i.  "=" .$resultado." <br>";
    }
    echo "tabla del $i finalizada ";
  

}

?>
</body>
</html>