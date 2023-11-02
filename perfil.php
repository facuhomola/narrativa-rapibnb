<?php

include('bd/cn.php');

session_start();
$user = $_SESSION['user'];
if (!isset($user)) {
    header("location: index.php");
}else{ //Almacena datos del usuario en sesión
    $sql = "SELECT * FROM usuarios WHERE user='$user'";
    $result=mysqli_query($conexion,$sql);
    $usuario=mysqli_fetch_array($result);
    $id_user = $usuario['id_user']; 
    $nombre = $usuario['nombre'];
    $edad = $usuario['edad'];
    $telefono = $usuario['telefono'];
    $descripcion = $usuario['descripcion'];
    $imagen = $usuario['imagen'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Rapibnb - Mi Perfil</title>
</head>
<body>

<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<!--Perfil-->
<div class="container-lg">

    <div class="row min-vh-95 mt-2 mb-2 align-items-center align-content-center">
        <div class="col-md-3">
            <div class="text-center">
              <img src="files/<?php echo $user."/".$imagen;?>" class="rounded-circule mw-50" alt="imagen perfil" style="border-radius: 30%;" height="240px">
            </div>
        </div>
        <div class="col-md-9 mt-md-0">
            <div class="home-text">
              <h2 class="fs-4">
                <?php 
                    echo $nombre;
                ?>
              </h2>
              <p class="mt-4 text-muted">
                Edad
                <?php echo $edad; ?>
              </p>
              <p class="mt-4 text-muted">
                Teléfono
                <?php echo $telefono; ?>
              </p>
              <p class="mt-4 text-muted">
                <?php
                    echo $descripcion;
                ?>
              </p> 
            </div>          
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="mb-4 fs-3 font-weight-bold">Alquileres Disponibles</h3>
        </div>
    </div>
    
</div>
<!--Fin perfil-->

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>