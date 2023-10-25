<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo enviando Datos por METODO GET</title>
</head>
<body>
    

    <form action="procesando.php" method="GET">
        <!--
        <label for="">Teclea tu nombre: </label>
        <input type="text" name="nombre" ><br>
        <label for="">Teclea tu Apellido: </label>
        <input type="text" name="apellido" ><br>
       

        <select name="pais" id="">
            <option value="mx">Mexico</option>
            <option value="es">España</option>
            <option value="ar">Argentina</option>
            <option value="eu">Estates of burguers</option>
        </select>-->

        <label for="">Intereses </label>
        <label for="">Autos</label>
        <input type="checkbox" name="interes[]" value= "autos">
        <label for="">Cocina</label>
        <input type="checkbox" name="interes[]" value= "Cocina">
        <label for="">Cocina</label>
        <input type="checkbox" name="interes[]" value= "Cocina">
        <label for="">Cocina</label>
        <input type="checkbox" name="interes[]" value= "Cocina">
        <input type="submit" value="Enviar" >
    </form>


</body>
</html>