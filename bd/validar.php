<?php

include 'cn.php'; //para conectar a la base de datos

//almacenar datos
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$descripcion = $_POST['descripcion'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$arch = $_FILES['archivo']['name'];

echo "Datos inbresados: <br>"; 

?>

<p>Nombre: <?= $nombre; ?> </p> 
<p>Edad: <?= $edad; ?> </p> 
<p>Teléfono: <?= $telefono; ?> </p> 
<p>Usuario: <?= $user; ?> </p> 

<?php

//revisar que el nombre de usuario no este registrado
$sql_consulta = "SELECT * FROM usuarios WHERE user = '$user'";
$result_consulta = mysqli_query($conexion, $sql_consulta);
$mostrar_consulta = mysqli_fetch_array($result_consulta);
if (strcmp($user, $mostrar_consulta['user']) == 0) { //son iguales, no puede registrarse con ese nombre
    ?>
    <script>
        alert("El nombre de usuario ya existe, ingrese otro nombre - Pulse en Aceptar");
        window.location.href='registrar.php';
    </script>
<?php
}
else{ //se registra el nuevo usuario
//insertar datos en la tabla usuarios
$insertar = "INSERT INTO usuarios(nombre, edad, telefono, descripcion, imagen, user, pass) VALUES('$nombre', '$edad', '$telefono', '$descripcion', '$arch', '$user', '$pass')";

$consulta = mysqli_query($conexion, $insertar);

if (!$consulta) {
    die("Ocurrio un error durante la consulta");
}else{
    ?>
    <h4>Se registro el usuario exitosamente</h4>
    <a href="./../index.php">Volver al Inicio</a>
    <a href="login.php">Iniciar Sesión</a>
    <?php 
}

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
}
?>


<?php

?>