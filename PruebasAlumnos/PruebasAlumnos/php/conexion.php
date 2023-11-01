<?php

$servidor = "localhost";
$usuario  = "root";
$contrasena = "";
$bd= "cyreweb";


$conexion_servidor= new mysqli($servidor,$usuario,$contrasena) or die ("No se puede conectar al servidor");
$conexion_bd= mysqli_select_db($conexion_servidor,$bd) or die ("No se pudo conectar a la base de datos");

?>
