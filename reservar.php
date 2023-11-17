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
    <title>RapiBnB - Reserva</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<?php 

if (!isset($_SESSION['user'])) {
    ?>
    <script>
        alert("Debe estar logueado para estar en esta página - Pulse Aceptar para continuar");
        window.location.href='index.php';
    </script>
    <?php
}

?>

<?php

$idalquiler = $_GET['idalquiler'];
$solicitante = $_GET['solicitante'];
$duenio = $_GET['duenio'];

if (strcmp($solicitante, $duenio) != 0 ) {
    $sql_alquiler = "SELECT * FROM alquileres WHERE id='$idalquiler'";
    $consulta_alquiler = mysqli_query($conexion, $sql_alquiler);
    $mostrar_alquiler = mysqli_fetch_array($consulta_alquiler);
?>
<div class="container-lg">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
            <form class="form mt-2 mb-4" action="" method="post">
            <h3>Datos de reserva</h3>
            <p><b>Descripción</b>: <?php echo $mostrar_alquiler['descripcion']; ?></p>
            <p><b>Ubicación</b>: <?php echo $mostrar_alquiler['ubicacion']; ?></p>
            <p><b>Precio</b>: $<?php echo $mostrar_alquiler['costo']; ?></p>
            <p><b>Servicios</b>: <?php echo $mostrar_alquiler['servicios']; ?></p>
            <p><b>Fecha minima</b>: <?php echo $mostrar_alquiler['tminimo']; ?></p>
            <p><b>Fecha limite</b>: <?php echo $mostrar_alquiler['tmaximo']; ?></p>
            <p><b>Cupo</b>: <?php echo $mostrar_alquiler['cupo']; ?></p>
            <input type="submit" value="Confirmar" name="confirmar" class="btn btn-primary">
        </form>
        <?php
            if (isset($_POST['confirmar'])) {
                $insertar_reserva = "INSERT INTO reservas(id_alquiler, solicitante, duenio, estado) VALUES('$idalquiler', '$solicitante', '$duenio', '1')";
                $consulta_reserva = mysqli_query($conexion, $insertar_reserva);
                if ($consulta_reserva) {
                    ?>
                    <h4>Se realizo la reserva</h4>
                    <script>
                        alert("Se realizo la reserva - Pulse en 'Aceptar para continuar'");
                        window.location.href='index.php';
                    </script>
                <?php
                }else{
                    die("Ocurrio un error!");
                }
            }
        ?>
        </div>
    </div>
</div>
<?php
}else{
    ?>
    <script>
        alert("Usted posee esta propiedad - Pulse Aceptar para continuar");
        window.location.href='index.php';
    </script>
    <?php
    echo "Iguales, no puede alquilar lo que posee";
}

/*
-- TRAER POR GET ID DE ALQUILER Y NAMEUSER
-- MOSTRAR DATOS DEL ALQUILER
-- SOLICITAR CONFIRMACIÓN DE SOLICITUD
-- VOLVER AL INICIO
*/

//$modificar = "UPDATE reservas SET estado='3'";
//$consulta = mysqli_query($conexion, $modificar);

?>

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>