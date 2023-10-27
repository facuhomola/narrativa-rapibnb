<?php



//Conectar a la base de datos
include('./../bd/cn.php');

session_start();
$user = $_SESSION['user'];
if (!isset($user)) {
    header("location:/narrativa-rapibnb/bd/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="./../css/style.css" type="text/css">
    <link href="./../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <title>Rapibnb - Nuevo Alquiler</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('./../includes/header.php');
?>
<!--Fin cabecera-->

<section>
  <form class="form-register" enctype="multipart/from-data" autocomplete="off" action="validaralquiler.php" method="post" name="form" id="form">
  <h4>Complete los campos solicitados</h4>
  <input class="controls" type="text" name="titulo" id="titulo" placeholder="Título">
  <textarea class="controls" name="descripcion" id="descripcion" placeholder="Descripción" cols="30" rows="5"></textarea>
    <input class="controls" type="text" name="ubicacion" id="ubicacion" placeholder="Ubicación">
    Fotos <input type="file" class="controls" name="fotos" id="fotos">
    <input type="text" name="servicios" placeholder="Servicios" class="controls">
    <input type="number" name="costo" placeholder="$Costo" class="controls">
    <input type="number" name="tminimo" placeholder="Tiempo minimo" class="controls">
    <input type="number" name="tmaximo" placeholder="Tiempo máximo" class="controls">
    <input type="number" name="cupo" placeholder="Cupo" class="controls">
    <input class="botons" type="submit" value="Publicar">  
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