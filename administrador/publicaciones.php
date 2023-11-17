<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - Registro de Publicaciones</title>
</head>
<body>
    
<?php

require('include/headeradmin.php');
//Conectar a la base de datos
include('./../bd/cn.php');

$user = $_SESSION['user'];

$consulta = "SELECT * FROM administradores where nombre_admin='$user' ";
$resultado = mysqli_query($conexion, $consulta); 

$filas = mysqli_fetch_array($resultado);

if (!isset($user)) {
    header("location:loginadmin.php");
}


?>

<section class="container-lg" id="posts"> <!--Post de usuarios-->

<?php
    $sql_alquiler = "SELECT * FROM alquileres";
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
                            $ruta = "./../files/" . $usuario . "/" . $id_alquiler . "/". $img;
                        ?>
                        <img src=" <?php echo $ruta; ?> " class="img-fluid rounded-start" alt="">
                    </div>
                    <div class="m-3 col-md-4">
                        <h5 class="card-title"> <?php echo $mostrar_alquiler['titulo']; ?> </h5>
                        <p class="card-text"> <?php echo $mostrar_alquiler['descripcion']; ?> </p>
                        <p class="card-text"> <?php echo $mostrar_alquiler['ubicacion']; ?> </p>
                        <h5 class="card-title"> $<?php echo $mostrar_alquiler['costo']; ?> </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
    }
?>

</section>    


</body>
</html>