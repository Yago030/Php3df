<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
</head>
<body>
    
<?php 

    $autos = array("Mustang", "Ferrari", "Polo", "Mercedes Benz");


    echo  " <br>" .count($autos)." <br>" ;

    for ($i = 0; $i < count($autos); $i++){
        echo "<br> ".$autos[$i]."<br>";
    }


    echo " <br> usando <H1>FOREACH</H1> <BR>"; 

    foreach ($autos as $cars){
        echo $cars;
        echo "<br>";
    }



    echo " <br> <h2>Arrays asociativos</h2> </br>";

    $ferrari = array (
        'color' => 'rojo',
        'tipo' => 'velocidad',
        'km '=> 10000
    );
    
    foreach ($ferrari as $propiedad =>$valor ){
       echo "Propiedad : $propiedad, Valor : $valor";
       echo " <br>"; 
    }

    echo " <br> <h3> Array y arreglo multidimencional mas</h3> <<br>";

    $vehiculos = array (
        'mustang' => array(
            'color' => 'Rojo',
            'KM' => 243300,
            'Vendedor' => 'Rafael Perez' 
        ),

        'Corvete' => array(
            'color' => 'Negro',
            'KM' => 23255,
            'Vendedor' => 'Carlos Guillen' 
        ),
        'ford' => array(
            'color' => 'Blanca',
            'KM' => 243300,
            'Vendedor' => 'Macarena Puritano' 
        )
        );

        foreach ($vehiculos as $propiedad => $valor ){
            echo $propiedad . "";
            foreach ($valor as $valor2 => $valores){
                echo $valores ."<br>";
            };
            echo "<hr>";
        };

?>
</body>
</html>