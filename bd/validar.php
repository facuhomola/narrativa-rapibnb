<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar datos
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$user = $_POST['user'];
$pass = $_POST['pass'];

echo "Datos inbresados: <br>"; ?>

<p>Nombre: <?= $nombre; ?> </p> 
<p>Edad: <?= $edad; ?> </p> 
<p>Teléfono: <?= $telefono; ?> </p> 
<p>Usuario: <?= $user; ?> </p> 

<?php

//insertar datos en la tabla usuarios
$insertar = "INSERT INTO usuarios(nombre, edad, telefono, user, pass) VALUES('$nombre', '$edad', '$telefono', '$user', '$pass')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
    ?>
    <h4>Se registro el usuario exitosamente</h4>
    <a href="./../index.php">Volver al Inicio</a>
    <?php 
}
?>