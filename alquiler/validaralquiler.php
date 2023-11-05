<?php

//conectar a la base de datos
include('./../bd/cn.php');

//almacenar valores
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$ubicacion = $_POST['ubicacion'];
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
$insertar = "INSERT INTO alquileres(titulo, descripcion, ubicacion, servicios, costo, tminimo, tmaximo, cupo, id_user) VALUES('$titulo', '$descripcion', '$ubicacion', '$servicios', '$costo', '$tminimo', '$tmaximo', '$cupo', '$id_user')";

$consulta = mysqli_query($conexion, $insertar);
if (!$consulta) {
    die("Error en la consulta");
}else{
?>
    <h4>Se realizo la publicación correctamente</h4>
    <a href="./../index.php">Volver al Inicio</a>
<?php    
}
?>

<?php
//SELECT MAX(id) FROM `alquileres` WHERE id_user = 28
$sql_alquiler = "SELECT MAX(id) FROM alquileres WHERE id_user = '$id_user'";
$result_alquiler = mysqli_query($conexion, $sql_alquiler);
$mostrar_alquiler = mysqli_fetch_array($result_alquiler);
$id_alquiler = $mostrar_alquiler['MAX(id)'];

foreach ($_FILES['archivo']['tmp_name'] as $key => $tmp_name) {
    if ($_FILES['archivo']['name'][$key]) {
        
        $filename = $_FILES['archivo']['name'][$key];
        $temporal = $_FILES['archivo']['tmp_name'][$key];

        $directorio = "./../files/$usuario/$id_alquiler/";

        if (!file_exists($directorio)) {
            mkdir($directorio, 0777);
        }

        $dir = opendir($directorio);
        $ruta = $directorio . "/" . $filename;

        if (move_uploaded_file($temporal, $ruta)) {
            echo "El archivo $filename se ha almacenado correctamente";
        }else{
            echo "Ocurrio un error";
        }

        closedir($dir);

    }
}

/*
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
*/
?>
