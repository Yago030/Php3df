<html>
  <head>
  </head>
  <body>


    <?php

    include_once("conexion.php");


    $nombre = $_POST['nombre'];
    $apellido =$_POST['apellido'];
    $empresa = $_POST['empresa'];

    $sql = ("INSERT INTO clientes (nombre_cliente,apellido_cliente,empresa_cliente)  VALUES ('$nombre','$apellido','$empresa')");
  	$result = $conexion_servidor->query($sql);

      ?>

    <script type="text/javascript">
          function redirect() {
              window.location = "http://localhost/PruebasAlumnos/formulario.php";
          }
          window.onload = redirect;
          </script>




</body>
</html>
