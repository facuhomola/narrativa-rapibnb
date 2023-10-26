<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar datos
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$arch = $_POST['archivo'];

echo "Datos inbresados: <br>"; 

?>

<p>Nombre: <?= $nombre; ?> </p> 
<p>Edad: <?= $edad; ?> </p> 
<p>Teléfono: <?= $telefono; ?> </p> 
<p>Usuario: <?= $user; ?> </p> 

<?php

//insertar datos en la tabla usuarios
$insertar = "INSERT INTO usuarios(nombre, edad, telefono, descripcion, imagen, user, pass) VALUES('$nombre', '$edad', '$telefono', '$descripcion', '$arch', '$user', '$pass')";

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

<?php

if (!$_FILES["archivo"]) {
    echo "Error al cargar archivo";
}else{
    $ruta = './../files/'.$user.'/';
    $archivo = $ruta . $_FILES["archivo"]["name"];

    if (!file_exists($ruta)) {
        mkdir($ruta);
    }

    if (!file_exists($archivo)) {
        $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);
        if ($resultado) {
            echo "Archivo guardado";
        }else{
            echo "Error al guardar archivo";
        }
    }else{
        echo "El archivo ya existe";
    }

}
?>