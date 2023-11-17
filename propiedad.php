<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <title>RapiBnB - Propiedad </title>
</head>
<body>

<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<?php

include('bd/cn.php'); //conexión a base de datos

//consultar si hay sesion iniciada, para poder reservar
if (isset($_SESSION['user'])) {
  $user = $_SESSION['user'];
}else{
  $user = 0;
}

//Datos del alquiler
$idalquiler = $_GET['idalquiler'];
$sql_alquiler = "SELECT * FROM alquileres WHERE id = '$idalquiler'";
$result_alquiler = mysqli_query($conexion, $sql_alquiler);
$mostrar_alquiler = mysqli_fetch_array($result_alquiler);
$titulo = $mostrar_alquiler['titulo'];  
$descripcion = $mostrar_alquiler['descripcion'];
$ubicacion = $mostrar_alquiler['ubicacion'];
$servicios = $mostrar_alquiler['servicios'];
$costo = $mostrar_alquiler['costo'];
$tminimo = $mostrar_alquiler['tminimo'];
$tmaximo = $mostrar_alquiler['tmaximo'];
$cupo = $mostrar_alquiler['cupo'];
$iduser = $mostrar_alquiler['id_user'];

//datos de usuario del alquiler
$sql_users = "SELECT * FROM usuarios WHERE id_user = '$iduser'";
$result_user = mysqli_query($conexion, $sql_users);
$mostrar_user = mysqli_fetch_array($result_user);
$name_user = $mostrar_user['user'];
$nombre = $mostrar_user['nombre'];

//fotos del alquiler
$sql_foto = "SELECT * FROM fotos WHERE id_alquiler = '$idalquiler'";
$result_foto = mysqli_query($conexion, $sql_foto);

//ruta de las fotos
$ruta = "files/" . $name_user . "/" . "$idalquiler" . "/";

?>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <?php
    $mostrar_foto = mysqli_fetch_array($result_foto);
    $foto_nombre = $mostrar_foto['nombre'];
    ?>
    <div class="carousel-item active">
      <img src=" <?php echo $ruta . $foto_nombre; ?> " class="d-block w-100" alt="...">
    </div>
    <?php
    while ($mostrar_foto = mysqli_fetch_array($result_foto)) {
      $foto_nombre = $mostrar_foto['nombre'];
      ?>
      <div class="carousel-item">
        <img src="<?php echo $ruta . $foto_nombre; ?>" class="d-block w-100" alt="...">
      </div>
    <?php
    }
    ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-lg">
    <div class="row">
        <div class="col-12 col-md-9 col-lg-9 col-sm-12 mt-2 mb-2">
            <div class="container p-3">
                <h2> <?php echo $titulo; ?> </h2>
                <p>
                    <b>Descripción: </b>
                </p>
                <p> <?php echo $descripcion; ?> </p>
                <p>
                  <b>Ubicación: </b> <?php echo $ubicacion; ?> 
                </p>
                <p>
                  <b>Precio: </b> <?php echo $ubicacion; ?>
                </p>
                <p>
                  <b>Servicios: </b> <?php echo $servicios; ?> 
                </p>
                <p class="text-muted">Fecha de inicio: <?php echo $tminimo; ?> </p> 
                <p class="text-muted">Fecha de fin: <?php echo $tmaximo; ?> </p>
                <p><b>Cupo: </b> <?php echo $cupo; ?> </p>
                <p><b>Dueño/a</b> Dueño/a: <?php echo $nombre; ?> - <a href="duenio.php?duenio=<?php echo $name_user; ?>">Ver Perfil</a> </p> 
                <?php
                  if ($user != 0) {
                    ?>
                    <a class="btn btn-primary" href="reservar.php?idalquiler=<?php echo $idalquiler; ?>&solicitante=<?php echo $user; ?>&duenio=<?php echo $name_user; ?>">Reservar</a>
                  <?php
                  }else{
                    ?>
                    <button class="btn btn-primary" onclick="novalido();">Reservar</button>
                  <?php
                  }
                ?>
            </div>
        </div>
    </div>
</div>

<script>
  function novalido(){
    alert("Debe iniciar sesión para reservar esta propiedad - Pulse Aceptar para continuar");
  }
</script>

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>