<?php

//conectar a la base de datos
include('./../bd/cn.php');

//almacenar valores
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
$fotos = $_POST['fotos'];
$servicios = $_POST['servicios'];
$costo = $_POST['costo'];
$tminimo = $_POST['tminimo'];
$tmaximo = $_POST['tmaximo'];
$cupo = $_POST['cupo'];

//traer id de usuario que realiza publicación

session_start();
$usuario = $_SESSION['user'];

$sql="SELECT * from usuarios WHERE user = '$usuario'";
$result=mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($result);
$id_user = $mostrar['id_user'];

//insertar valores en tabla alquileres
$insertar = "INSERT INTO alquileres(titulo, descripcion, ubicacion, fotos, servicios, costo, tminimo, tmaximo, cupo, id_user) VALUES('$titulo', '$descripcion', '$ubicacion', '$fotos', '$servicios', '$costo', '$tminimo', '$tmaximo', '$cupo', '$id_user')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Error en la consulta");
}else{
    ?>
    <h4>Se realizo la publicación correctamente</h4>
    <a href="./../index.php">Volver al Inicio</a>
<?php    
}

if (!$_FILES["fotos"]) {
    echo "Error al cargar archivo";
}else{
    $ruta = './../files/'.$usuario.'/';
    $archivo = $ruta . $_FILES["fotos"]["name"];

    if (!file_exists($archivo)) {
        $resultado = @move_uploaded_file($_FILES["fotos"]["tmp_name"], $archivo);
        if ($resultado) {
            echo "Fotos guardadas";
        }else{
            echo "Error al guardar fotos";
        }
    }else{
        echo "La foto ya existe";
    }

}
?>