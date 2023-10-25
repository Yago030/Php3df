<?php

function  sumaEnteros(int $x, int $y){
    if ($x == 0 || $y == 0) {
        echo '<hr> <div> Has agregado uno de los numeros que es nulo </div> <hr>';
        return $z = $x + $y ;
    }else if ($x < 0 || $y < 0) {
        echo '<hr> <div> Has agregado uno o varios numeros negativos, </div> <hr>';
       return $z = $x + $y;
    }else {
        echo 'Los numeros estan perfectos ';
        return $z = $x + $y;
    };
};


?>