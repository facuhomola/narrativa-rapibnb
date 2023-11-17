<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - Verificar Cuenta</title>
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

$sql_verificadas = "SELECT * FROM verificadas";
$consulta_verificadas = mysqli_query($conexion, $sql_verificadas);
if ($consulta_verificadas) {
    ?>
    <table class="table">
        <tr>
            <th scope="col">Usuario</th>
            <th scope="col">DNI</th>
            <th scope="col">Foto de dni</th>
            <th scope="col">Estado de cuenta</th>
        </tr>
    <?php
    while ($mostrar_reserva = mysqli_fetch_array($consulta_verificadas)) {
        $iduser = $mostrar_reserva['id_user'];
        $dniuser = $mostrar_reserva['dni'];
        $foto = $mostrar_reserva['fotodni'];
        $sql_user = "SELECT * FROM usuarios WHERE id_user='$iduser'";
        $consulta_user = mysqli_query($conexion, $sql_user);
        if ($consulta_user) {
            $mostraruser = mysqli_fetch_array($consulta_user);
            $nameuser = $mostraruser['user'];
        }
        switch ($mostrar_reserva['estado_cuenta']) {
            case '1':
                $estado_cuenta = "Solicitada";
                break;
            case '2':
                $estado_cuenta = "Confirmada";
                break;
            case '3':
                $estado_cuenta = "Rechazada";
                break;
            default:
                $estado_cuenta = "Error";
                break;
        }
        ?>
        <tr>
            <td> <?php echo $nameuser ?> </td>
            <td> <?php echo $mostrar_reserva['dni'] ?> </td>
            <td> <img src="<?php echo $mostrar_reserva['fotodni'] ?>" alt=""> </td>
            <td> <?php echo $estado_cuenta; ?> 
                <a href="confirmarcuenta.php?iduser=<?php echo $iduser; ?>&nameuser=<?php echo $nameuser?>&dni=<?php echo $dniuser ?>&fotodni=<?php echo $foto; ?>">Revisar</a>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}

?>

</body>
</html>