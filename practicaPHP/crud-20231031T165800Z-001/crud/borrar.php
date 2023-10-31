<?php
 //ini_set('display_errors',1);
include 'conexion.php';

 $id=$_REQUEST["id"];
 $sql="delete from oradores where id='$id'";
 $result=mysqli_query($conexion, $sql);
 
 echo "Orador Borrado ID= ".$id;
 echo "<a href=index.php>Volver</a>"
 ?>
