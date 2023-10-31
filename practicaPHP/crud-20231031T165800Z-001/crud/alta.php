<?php
//ini_set('display_errors',1);
include 'conexion.php';

if  ( ( isset($_POST['Alta'])) ) {

     extract($_POST);

       
   
    $sql="INSERT INTO oradores(nombre, apellido, tema, email, telefono) VALUES ('$nombre', '$apellido', '$tema', '$email', '$telefono')";
    
    $result=mysqli_query($conexion, $sql);
 



}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <!-- CSS adicional -->
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                   
                </a>
                
            </div>
        </nav>
    </header>
    <main>
        
       
        <!-- Sección Ser un Orador -->
        <section id="serOrador" class="container" >
            <div class="row justify-content-center">
                <div class="col-lg-7 col-xl-8">
                    <p class="text-center">Conviértete en un</p>
                    <h2 class="text-center">ORADOR</h2>
                    <p class="text-center"></p>
                    <form action="alta.php" method="post" enctype="multipart/form-data" name="contact-form" >
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="nombre" id="nombreOrador" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
                                <label for="nombreOrador">Nombre</label>
                            </div>
                            <div class="form-floating col-md mb-3">
                                <input name="apellido" id="apellidoOrador" type="text" class="form-control" placeholder="Apellido" aria-label="Apellido" required>
                                <label for="apellidoOrador">Apellido</label>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="email" id="correoOrador" type="email" class="form-control" placeholder="Email" aria-label="Email" required>
                                <label for="correoOrador">Correo</label>
                            </div>
                        </div>
                        <div class="row gx-2">
                            <div class="form-floating col-md mb-3">
                                <input name="telefono" id="correoOrador" type="text" class="form-control" placeholder="Telefono" aria-label="Telefono" required>
                                <label for="correoOrador">Teléfono</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <textarea name="tema" class="form-control" id="exampleFormControlTextarea1" rows="4"
                                    placeholder="Sobre qué quieres hablar?" required></textarea>
                                <div id="emailHelp" class="form-text mb-3">Recuerda incluir un título para tu charla.</div>
                                 <div class="d-grid">
                                    <button type="submit" name="Alta" class="btn btn-success btn-lg btn-form">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                      <a href="index.php">Volver</a>
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

