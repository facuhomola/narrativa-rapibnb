<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../css/style.css" rel="stylesheet">
    <title>Rapibnb - Registro de Usuarios</title>
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

$sql_usuarios = "SELECT * FROM usuarios";
$consulta_usuarios = mysqli_query($conexion, $sql_usuarios);
if ($consulta_usuarios) {
    ?>
    <table class="table">
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Descripción</th>
            <th scope="col">Imagen</th>
            <th scope="col">Nombre de usuario</th>
        </tr>
    <?php
    while ($mostrar_usuario = mysqli_fetch_array($consulta_usuarios)) {
        $foto = "./../files/" . $mostrar_usuario['user'] . "/" . $mostrar_usuario['imagen'];
    ?>
        <tr>
            <td> <?php echo $mostrar_usuario['nombre']; ?> </td>
            <td> <?php echo $mostrar_usuario['edad']; ?> </td>
            <td> <?php echo $mostrar_usuario['telefono']; ?> </td>
            <td> <?php echo $mostrar_usuario['descripcion']; ?> </td>
            <td> <img src="<?php echo $foto; ?>" class="rounded-circule mw-50" alt=""> </td>
            <td> <?php echo $mostrar_usuario['user']; ?> </td>
        </tr>
        <?php
    }
    ?>
    </table>
    <?php
}else{
    die("Ocurrio un error");
}

?>

</body>
</html>