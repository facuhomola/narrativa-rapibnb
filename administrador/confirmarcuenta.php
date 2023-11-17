<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - Confirmar cuenta</title>
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

$iduser = $_GET['iduser'];
$nameuser = $_GET['nameuser'];
$dniuser = $_GET['dni'];
$fotodni = $_GET['fotodni'];

?>

<div class="container-lg">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3>Datos del usuario</h3>
            <?php
                $sql_user = "SELECT * FROM usuarios WHERE user = '$nameuser'";
                $consulta = mysqli_query($conexion, $sql_user);
                if ($consulta) {
                    $mostrar = mysqli_fetch_array($consulta);
                    ?>
                    <form action="" method="post">
                        Nombre: <?php echo $mostrar['nombre'] ?> <br>
                        Edad: <?php echo $mostrar['edad'] ?> <br>
                        Descripcion: <?php echo $mostrar['descripcion'] ?> <br>
                        DNI: <?php echo $dniuser ?> <br>
                        Foto: <img src="<?php echo $fotodni; ?>" class="img-fluid rounded-start" alt=""> <br>
                        <input type="submit" value="Confirmar" name="confirmar" class="btn btn-primary"> 
                        <input type="submit" value="Cancelar" name="cancelar" class="btn btn-primary">                    
                    </form>
                    <?php
                }
            ?>
        </div>
    </div>
</div>

<?php

if (isset($_POST['confirmar'])) {
    $sql_modificar = "UPDATE verificadas SET estado_cuenta = 2 WHERE id_user = '$iduser'";
    $consulta_modificar = mysqli_query($conexion, $sql_modificar);
    if ($consulta_modificar) {
        ?>
        <h4>Se cancelo la solicitud exitosamente</h4>
        <script>
            alert("Se confirmo la solicitud exitosamente - Pulse en 'Aceptar para continuar'");
            window.location.href='admin.php';
        </script>
        <?php
    }
}

if (isset($_POST['cancelar'])) {
    $sql_modificar = "UPDATE verificadas SET estado_cuenta = 3 WHERE id_user = '$iduser'";
    $consulta_modificar = mysqli_query($conexion, $sql_modificar);
    if ($consulta_modificar) {
        ?>
        <h4>Se cancelo la solicitud exitosamente</h4>
        <script>
            alert("Se confirmo la solicitud exitosamente - Pulse en 'Aceptar para continuar'");
            window.location.href='admin.php';
        </script>
        <?php
    }
}

?>

</body>
</html>