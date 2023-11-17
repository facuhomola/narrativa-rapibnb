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
    <title>RapiBnB - Reserva - Confirmar</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header("location: index.php");
    }
?>
<!--Fin cabecera-->

<?php

$idreserva = $_GET['idreserva'];
$idalquiler = $_GET['alquiler'];
$solicitante = $_GET['solicitante'];

//Datos del alquiler solicitado
$sql_alquiler = "SELECT * FROM alquileres WHERE id = '$idalquiler'";
$result_alquiler = mysqli_query($conexion, $sql_alquiler);
$mostrar_alquiler = mysqli_fetch_array($result_alquiler);

//Datos del usuario que solicita
$sql_user = "SELECT * FROM usuarios WHERE user = '$solicitante'";
$result_user = mysqli_query($conexion, $sql_user);
$mostrar_user = mysqli_fetch_array($result_user);

?>

<div class="container-lg">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <form class="form" action="" method="post">
                <h4>Datos del alquiler solicitado</h4>
                <p><?php echo $mostrar_alquiler['titulo']; ?></p>
                <p><?php echo $mostrar_alquiler['descripcion']; ?></p>
                <p><?php echo $mostrar_alquiler['ubicacion']; ?></p>
                <p><?php echo $mostrar_alquiler['servicios']; ?></p>
                <p><?php echo $mostrar_alquiler['costo']; ?></p>
                <p><?php echo $mostrar_alquiler['tminimo']; ?></p>
                <p><?php echo $mostrar_alquiler['tmaximo']; ?></p>
                <p><?php echo $mostrar_alquiler['cupo']; ?></p>
                <h4>Datos de usuario solicitante</h4>
                <p> <?php echo $mostrar_user['user'] ?> </p>
                <p> <?php echo $mostrar_user['nombre'] ?> </p>
                <p> <?php echo $mostrar_user['edad'] ?> </p>
                <p> <?php echo $mostrar_user['telefono'] ?> </p>
                <input type="submit" value="Confirmar" name="confirmar" class="btn btn-primary p-2">
                <input type="submit" value="Cancelar" name="cancelar" class="btn btn-primray p-2">
            </form>
        </div>
    </div>
</div>

<?php

    if (isset($_POST['confirmar'])) {
        $modificar_reserva = "UPDATE reservas SET estado = 2 WHERE id = '$idreserva'";
        $consulta_reserva = mysqli_query($conexion, $modificar_reserva);
        if ($consulta_reserva) {
            $modificar_alquiler = "UPDATE alquileres SET estado_alquiler = 2 WHERE id = '$idalquiler'";
            $consulta_alquiler = mysqli_query($conexion, $modificar_alquiler);
            ?>
            <h4>Se confirmo la solicitud exitosamente</h4>
            <script>
                alert("Se confirmo la solicitud exitosamente - Pulse en 'Aceptar para continuar'");
                window.location.href='index.php';
            </script>
        <?php
        }else{
            die("Ocurrio un error en la consulta");
        }
    }

    if (isset($_POST['cancelar'])) {
        $modificar_reserva = "UPDATE reservas SET estado = 3 WHERE id = '$idreserva'";
        $consulta_reserva = mysqli_query($conexion, $modificar_reserva);
        if ($consulta_reserva) {
            $modificar_alquiler = "UPDATE alquileres SET estado_alquiler = 3 WHERE id = '$idalquiler'";
            $consulta_alquiler = mysqli_query($conexion, $modificar_alquiler);
            ?>
            <h4>Se cancelo la solicitud exitosamente</h4>
            <script>
                alert("Se cancelo la solicitud exitosamente - Pulse en 'Aceptar para continuar'");
                window.location.href='index.php';
            </script>
        <?php
        }else{
            die("Ocurrio un error en la consulta");
        }
    }

?>

<!--Pie de pagina-->
<?php    
   // require('includes/footer.php');
?>
<!--Fin pie de pagina-->


<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>