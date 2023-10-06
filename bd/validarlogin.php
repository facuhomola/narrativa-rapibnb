<?php

include('cn.php');

$user = $_POST['user'];
$pass = $_POST['pass'];

session_start();
$_SESSION['user'] = $user;

$consulta = "SELECT * FROM usuarios where user='$user' and pass='$pass' ";
$resultado = mysqli_query($conexion, $consulta); 

$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:./../index.php");
}else{
    ?>
    <?php
    include('login.php');
    ?>
    <h2>Error de autenticación</h2>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>