<?php 
echo $_POST['nombre']." ".$_POST['apellido']; // CON ESTO AVISAMOS QUE MANDAMOS 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo enviando Datos por METODO GET</title>
</head>
<body>
    

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!--nOS REENVIA A LA PAGINA DOND ESTABAMOS ANTES DE ENVIAR, SOLO ENVIA LA INFO... -->
 
        <label for="">Teclea tu nombre: </label>
        <input type="text" name="nombre" value="<?php echo $_POST['nombre'] ?>" ><br> <!-- muestra que hay en el campo enviado-->
        <label for="">Teclea tu Apellido: </label>
        <input type="text" name="apellido" value="<?php echo $_POST['apellido'] ?>" ><br><!-- muestra que hay en el campo enviado-->
       

       
        <input type="submit" value="Enviar" >
    </form>


</body>
</html>