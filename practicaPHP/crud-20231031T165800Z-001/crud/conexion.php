<?php
$servidor = "localhost";
$usuario = "martes19";
$contrasena = "Martes2023";
$basededatos = "phpmartes";

$conexion = mysqli_connect($servidor, $usuario, $contrasena) or die ("No se conecto al servidor");

$db = mysqli_select_db($conexion, $basededatos) or die ("No se conecto a la base");
?>