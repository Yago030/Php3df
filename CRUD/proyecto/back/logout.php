<?php
session_name('BACK');
session_start();
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

//include 'config/conectar.php';

unset($_SESSION['IDUsuario']);
   		unset($_SESSION['Usuario']);
   		unset($_SESSION['Nombre']);
   		unset($_SESSION['is_logged']);
   		session_destroy();

header("Location: login.php?mensaje=Se ha desconectado del sistema");  
?>
