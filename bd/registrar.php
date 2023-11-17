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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./../css/style.css" type="text/css">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Rapibnb - Registro</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('./../includes/header.php');
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" enctype="multipart/form-data" autocomplete="on" action="validar.php" method="post" name="form" id="form">
  <h4>Formulario Registro - Complete los campos solicitados</h4>
  <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido">
    <input class="controls" type="number" name="edad" id="edad" placeholder="Edad">
    <input type="text" class="controls" name="telefono" id="telefono" placeholder="Teléfono">
    <textarea class="controls" name="descripcion" id="descripcion" placeholder="Descripción" cols="30" rows="5"></textarea>
    Archivo <input type="file" class="controls" name="archivo" id="archivo">
    <input type="text" name="user" placeholder="Usuario" class="controls">
    <input type="password" name="pass" placeholder="Contraseña" class="controls">
    <input class="botons" type="submit" value="Registrar">  
  </form>  
</section>
    

<!--Pie de pagina-->
<?php    
    require('./../includes/footer.php');
?>
<!--Fin pie de pagina-->

<script src="./../js/bootstrap.bundle.min.js"></script>
</body>
</html>