<?php

include('bd/cn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <title>RapiBnB - Inicio</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<div class="container-fluid" style="background-color: #042397; padding: 25px; margin-bottom: 2%; color: #fff; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <h2>Encontrá tu lugar para alojarte</h2>
        </div>
    </div>
</div>

<section class="container-lg" id="posts"> <!--Post de usuarios-->

<?php
    $sql_alquiler = "SELECT * FROM alquileres WHERE estado_alquiler = 0";
    $result_alquiler = mysqli_query($conexion, $sql_alquiler);
    while ($mostrar_alquiler = mysqli_fetch_array($result_alquiler)) {
        $id_alquiler = $mostrar_alquiler['id'];
        $id_user = $mostrar_alquiler['id_user'];
?>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <?php
                            $sql_user = "SELECT * FROM usuarios WHERE id_user = '$id_user'";
                            $result_user = mysqli_query($conexion, $sql_user);
                            $mostrar_user = mysqli_fetch_array($result_user);
                            $usuario = $mostrar_user['user'];
                        ?>
                        <?php
                            $sql_foto = "SELECT * FROM fotos WHERE id_alquiler = '$id_alquiler'";
                            $result_foto = mysqli_query($conexion, $sql_foto);
                            $mostrar_foto = mysqli_fetch_array(($result_foto));
                            $img = $mostrar_foto['nombre'];
                            $ruta = "files/" . $usuario . "/" . $id_alquiler . "/". $img;
                        ?>
                        <img src=" <?php echo $ruta; ?> " class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="m-3 col-md-4">
                        <h5 class="card-title"> <?php echo $mostrar_alquiler['titulo']; ?> </h5>
                        <p class="card-text"> <?php echo $mostrar_alquiler['descripcion']; ?> </p>
                        <p class="card-text"> <?php echo $mostrar_alquiler['ubicacion']; ?> </p>
                        <h5 class="card-title"> $<?php echo $mostrar_alquiler['costo']; ?> </h5>
                        <form action="propiedad"></form>
                        <a href="propiedad.php?idalquiler=<?php echo $id_alquiler; ?>" class="btn btn-primary">Ver propiedad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

</section>    

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>