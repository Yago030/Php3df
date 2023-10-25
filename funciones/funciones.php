<?php 

function saludar() {
 echo "Hola buen dia ¿Como estaS ? <br> ";
}

saludar();


function saludarConParametros($nombre) {
    echo "Hola buen dia ¿Como estaS ? $nombre ";
   }
   
   saludarConParametros('Pepito <br>');


function multi($a, $b) {
    return $a * $b;
};

$resultado = multi(5, 5);

echo "el rsultado es : ".$resultado;

?>