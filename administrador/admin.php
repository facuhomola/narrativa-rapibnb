<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - ADMINISTRADOR</title>
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
    header("location:/narrativa-rapibnb/administrador/loginadmin.php");
}else{
    if ( strcmp($filas['nombre_admin'], "administrador") != 0 ) {
        header("location: /narrativa-rapibnb/administrador/loginadmin.php");
    }
}


?>

<div class="container-lg">
    <div class="row">
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="./../icons/registros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="usuarios.php" class="btn btn-primary">Ver Registros de Usuarios</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="./../icons/registros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="publicaciones.php" class="btn btn-primary">Ver Registros de Publicaciones</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="./../icons/registros.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="reservas.php" class="btn btn-primary">Ver Reservas Registradas</a>
                </div>
            </div>
        </div>
        <div class="col-3 col-md-3 col-sm-12">
            <div class="card" style="width: 75%;">
                <img src="./../icons/registrar.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <a href="verificarcuenta.php" class="btn btn-primary">Verificar Cuentas</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>