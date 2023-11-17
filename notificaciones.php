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
    <title>RapiBnB - Perfil - Notificaciones</title>
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

<!--Solicitudes-->
<div class="container-lg">
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12 col-lg-12">
            <h3 class="text-center">Solicitudes recibidas</h3>
            <?php
                $sql_reservas = "SELECT * FROM reservas WHERE duenio = '$user'";
                $result_reservas = mysqli_query($conexion, $sql_reservas);
                $mostrar_reserva = mysqli_fetch_array($result_reservas);
                if ($mostrar_reserva == NULL) {
                    ?>
                    <h4 class="text-center">No hay solicitudes</h4>
                <?php
                }else{
                ?>
                    <table class="table">
                        <tr>
                            <th scope="col">Usuario solicitante</th>
                            <th scope="col">Publicación</th>
                            <th scope="col">Estado</th>
                        </tr>
                    <?php
                    $result_reservas = mysqli_query($conexion, $sql_reservas);
                    while ($mostrar_reserva = mysqli_fetch_array($result_reservas)) {
                        $idalquiler = $mostrar_reserva['id_alquiler'];
                        $solicitante = $mostrar_reserva['solicitante'];
                        $estado_reserva = $mostrar_reserva['estado'];
                        $idreserva = $mostrar_reserva['id'];
                        switch ($estado_reserva) {
                            case '0':
                                $estado_reserva = "Disponible";
                                break;
                            case '1':
                                $estado_reserva = "Solicitado";
                                break;
                            case '2':
                                $estado_reserva = "Ocupado";
                                break;
                            case '3':
                                $estado_reserva = "Cancelado";
                                break;
                            default:
                                $estado_reserva = "Error";
                                break;
                        }
                        $sql_alquiler = "SELECT * FROM alquileres WHERE id = '$idalquiler'";
                        $result_alquiler = mysqli_query($conexion, $sql_alquiler);
                        $mostrar_alquiler = mysqli_fetch_array($result_alquiler);
                        $titulo_alquiler = $mostrar_alquiler['titulo'];
                    ?>
                        <tr>
                            <td> <?php echo $solicitante; ?> </td>
                            <td> <?php echo $titulo_alquiler; ?> </td>
                            <td> <?php echo $estado_reserva; ?>
                            <a class="btn btn-primary" href="confirmar.php?idreserva=<?php echo $idreserva; ?>&alquiler=<?php echo $idalquiler; ?>&solicitante=<?php echo $solicitante; ?>">Revisar</a> 
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                    </table>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<!--Fin Solicitudes-->

<!--Reservas-->
<div class="container-lg">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-sm-12">
        <h3 class="text-center">Reservas realizadas</h3>
            <?php
            $sqlreservas = "SELECT * FROM reservas WHERE solicitante = '$user'";
            $consultareservas = mysqli_query($conexion, $sqlreservas);
            $mostrarreserva = mysqli_fetch_array($consultareservas);
            if ($mostrarreserva == NULL) {
                ?>
                <h4 class="text-center">No hay reservas</h4>
            <?php
            }else{
            ?>
            <table class="table">
                <tr>
                    <th scope="col">Alquiler</th>
                    <th scope="col">Dueño</th>
                    <th scope="col">Estado</th>
                </tr>
            <?php
            $consultareservas = mysqli_query($conexion, $sqlreservas);
                while ($mostrarreserva = mysqli_fetch_array($consultareservas)) {
                    $id_alquiler = $mostrarreserva['id_alquiler'];
                    $sqlalquiler = "SELECT * FROM alquileres WHERE id = '$id_alquiler'";
                    $consultaalquiler = mysqli_query($conexion, $sqlalquiler);
                    $mostraralquiler = mysqli_fetch_array($consultaalquiler);
                    $estado = $mostrarreserva['estado'];
                    switch ($estado) {
                        case '0':
                            $estado = "Disponible";
                            break;
                        case '1':
                            $estado = "Solicitado";
                            break;
                        case '2':
                            $estado = "Reservado";
                            break;
                        case '3':
                            $estado = "Rechazado";
                            break;
                        default:
                            $estado = "Error";
                            break;
                    }
            ?>
                <tr>
                    <td> <?php echo $mostraralquiler['titulo']; ?> </td>
                    <td> <?php echo $mostrarreserva['duenio']; ?> </td>
                    <td> <?php echo $estado; ?> </td>
                </tr>
            <?php
                }
            ?>
            </table>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Fin Reservas-->

<!--Pie de pagina-->
<?php    
   // require('includes/footer.php');
?>
<!--Fin pie de pagina-->


<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>