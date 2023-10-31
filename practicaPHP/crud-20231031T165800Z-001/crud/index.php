<?php
ini_set('display_errors',1);
include 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                   
                    Conf Bs As
                </a>
                
            </div>
        </nav>
    </header>
    <main>

        <!-- otrapersona -->
        <section id="descripcionCategoria" class="container">
            <div  class="row justify-content-center">
                <p>Buscar</p>

        
<table border="1">
<tr   >
    <td cellpadding="5"  colspan="7"><a style="float:rigth;" href="alta.php">Nuevo Orador</a>  </td>
</tr>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Tema</th>
    <th>Modificar</th>
    <th>Borrar</th>

</tr>
  <?php 

  $sql="select * from oradores";
  $result=mysqli_query($conexion, $sql);
    
  while ($row = mysqli_fetch_array($result)) {

    
  ?>
  
<tr>
     <td><?php echo $row["nombre"] ?></td>
     <td><?php echo $row["apellido"] ?></td>
     <td><?php echo $row["email"] ?></td>
     <td><?php echo $row["telefono"] ?></td>
     <td><?php echo $row["tema"] ?></td>
     <td> <a href="modificar.php?id=<?php echo $row["id"] ?>">Modificar</a></td>
     <td><a href="borrar.php?id=<?php echo $row["id"] ?>">borrar</a></td>
</tr>
<?php  } ?>
</table>
<div class="pagination pagination-centered">
						  <ul>
							
						  </ul>
						</div>     
<br><br>

                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>


    </main>

    <footer>
        
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
   
   
</body>

</html>