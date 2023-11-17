<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./../css/login.css">
    <title>Rapibnb - Inicio Sesión - Administrador</title>
</head>
<body>
    
<header>
    <h3>Rapibnb - Administrador</h3>
</header>

<h1>Iniciar Sesión</h1>

<form action="" method="post">
    <input type="text" name="user" placeholder="Ingrese su usuario">
    <input type="password" name="pass" placeholder="Ingrese su contraseña">
    <input type="submit" value="Enviar" name="enviar" id="enviar">
</form>

<?php

include('./../bd/cn.php');

if (isset($_POST['enviar'])) {

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    
    session_start();
    $_SESSION['user'] = $user;
    
    $consulta = "SELECT * FROM administradores where nombre_admin='$user' and contrasenia_admin='$pass' ";
    $resultado = mysqli_query($conexion, $consulta); 
    
    $filas = mysqli_num_rows($resultado);
    if ($filas) {
        header("location:admin.php");
    }else{
        ?>
        <?php
        ?>
        <h2>Error de autenticación</h2>
        <?php
        ?>
        <?php
    }
    
    mysqli_free_result($resultado);
    mysqli_close($conexion);   
}

?>

<!--    <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>