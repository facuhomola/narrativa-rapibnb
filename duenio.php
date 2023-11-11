<?php

include('bd/cn.php');

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


<?php

//Datos de usuario
$name_user = $_GET['duenio'];

$sql = "SELECT * FROM usuarios WHERE user='$name_user'";
$result=mysqli_query($conexion,$sql);
$usuario=mysqli_fetch_array($result);
$id_user = $usuario['id_user']; 
$nombre = $usuario['nombre'];
$edad = $usuario['edad'];
$telefono = $usuario['telefono'];
$descripcion = $usuario['descripcion'];
$imagen = $usuario['imagen'];

?>

<!--Perfil-->
<div class="container-lg">

    <div class="row min-vh-95 mt-2 mb-2 align-items-center align-content-center">
        <div class="col-md-3">
            <div class="text-center">
              <img src="files/<?php echo $name_user."/".$imagen;?>" class="rounded-circule mw-50" alt="imagen perfil" style="border-radius: 30%;" height="240px">
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

    <?php
        $sql_alquiler = "SELECT * FROM alquileres WHERE id_user = '$id_user'";
        $result_alquiler = mysqli_query($conexion, $sql_alquiler);
        while ($mostrar_alquiler = mysqli_fetch_array($result_alquiler)) {
        $id_alquiler = $mostrar_alquiler['id'];
    ?>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <?php
                                $sql_foto = "SELECT * FROM fotos WHERE id_alquiler = '$id_alquiler'";
                                $result_foto = mysqli_query($conexion, $sql_foto);
                                $mostrar_foto = mysqli_fetch_array(($result_foto));
                                $img = $mostrar_foto['nombre'];
                            ?>
                            <img src=" <?php echo "files/$user/$id_alquiler/$img"; ?>" class="img-fluid rounded-start" alt="">
                        </div>
                        <div class="m-3 col-md-4">
                            <h5 class="card-title"> <?php echo $mostrar_alquiler['titulo']; ?> </h5>
                            <p class="card-text"> <?php echo $mostrar_alquiler['descripcion']; ?> </p>
                            <p class="card-text"> <?php echo $mostrar_alquiler['ubicacion']; ?> </p>
                            <h5 class="card-title"> <?php echo $mostrar_alquiler['costo']; ?> </h5>
                            <a href="propiedad.php?idalquiler=<?php echo $id_alquiler; ?>" class="btn btn-primary">Ver propiedad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        }
    ?>
    
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
