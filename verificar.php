<?php
/*
session_start();
//Conectar a la base de datos
include('bd/cn.php');

$user = $_SESSION['user'];
if (!isset($user)) {
    header("location:login.php");
}
*/

include('bd/cn.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Rapibnb - Cuenta Verificada</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
    $user = $_SESSION['user'];
    if (!isset($user)) {
        header("location: index.php");
    }else{ //Almacena datos del usuario en sesión
        $sql = "SELECT * FROM usuarios WHERE user='$user'";
        $result=mysqli_query($conexion,$sql);
        $usuario=mysqli_fetch_array($result);
        $id_user = $usuario['id_user']; 
        $nombre = $usuario['nombre'];
        $edad = $usuario['edad'];
        $telefono = $usuario['telefono'];
        $descripcion = $usuario['descripcion'];
        $imagen = $usuario['imagen'];
    }
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" enctype="multipart/form-data" autocomplete="on" action="" method="post" name="form" id="form">
  <h4>Formulario Registro - Complete los campos solicitados</h4>
    <input class="controls" type="number" name="dni" id="dni" placeholder="DNI">
    Foto de DNI <input type="file" class="controls" name="archivo" id="archivo">
    <input class="botons" type="submit" name="enviar" id="enviar" value="Solicitar">  
  </form>  
</section>
    
<?php

if (isset($_POST['enviar'])) {
    $idusuario = $id_user;
    $dni = $_POST['dni'];
    $fotodni = $_FILES['archivo']['name'];
    $sql_insertar = "INSERT INTO verificadas(id_user, dni, fotodni, estado_cuenta) VALUES('$idusuario', '$dni', '$fotodni', '1')";
    $result_insertar = mysqli_query($conexion, $sql_insertar);
    if ($result_insertar) {
        ?>
        <h4>Se realizo el pedido de forma exitosa</h4>
        <a href="index.php">Volver a Inicio</a>
    <?php
    }else{
        die("Ocurrio un error");
    }
}

?>

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>