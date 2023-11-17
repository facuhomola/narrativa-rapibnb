<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - Registro de Reservas</title>
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

<?php

$sql_reservas = "SELECT * FROM reservas";
$consulta_reservas = mysqli_query($conexion, $sql_reservas);
if ($consulta_reservas) {
    ?>
    <table class="table">
        <tr>
            <th scope="col">Alquiler</th>
            <th scope="col">Solicitante</th>
            <th scope="col">Dueño</th>
            <th scope="col">Estado de alquiler</th>
        </tr>
    <?php
    while ($mostrar_reserva = mysqli_fetch_array($consulta_reservas)) {
        $idalquiler = $mostrar_reserva['id_alquiler'];
        $sql_alquiler = "SELECT * FROM alquileres WHERE id = '$idalquiler'";
        $consulta_alquiler = mysqli_query($conexion, $sql_alquiler);
        ?>
        <tr>
        <?php
        if ($consulta_alquiler) {
            $mostrar_alquiler = mysqli_fetch_array($consulta_alquiler);
            $nombrealquiler = $mostrar_alquiler['titulo'];
            ?>
            <td> <?php echo $nombrealquiler; ?> </td>
        <?php
        }
        switch ($mostrar_reserva['estado']) {
            case '0':
                $estado = "Disponible";
                break;
            case '1':
                $estado = "Solicitado";
                break;
            case '2':
                $estado = "Confirmado";
                break;
            case '3':
                $estado = "Cancelado";
                break;
            default:
                $estado = "error";
                break;
        }
        ?>
        <td> <?php echo $mostrar_reserva['solicitante'] ?> </td>
        <td> <?php echo $mostrar_reserva['duenio'] ?> </td>
        <td> <?php echo $estado ?> </td>
        </tr>
    <?php
    }
}else{
    die("Ocurrio un error");
}

?>

</body>
</html>