<?php

include('bd/cn.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Rapibnb - Busqueda</title>
</head>
<body>

<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<div class="container-lg">
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <h3>Resultados de la busqueda</h3>
            <?php

                if (!isset($_POST['buscar'])) {
                    echo "<h5>No se ingreso texto de busqueda</h5>";
                }else{
                    $busqueda = $_POST['buscar'];
                    $sql_buscar = "SELECT * FROM `alquileres` WHERE titulo LIKE '$busqueda%';";
                    $consulta_buscar = mysqli_query($conexion, $sql_buscar);
                    if ($consulta_buscar) {
            ?>
                <?php
                        while ($mostrar = mysqli_fetch_array($consulta_buscar)) {
                ?>
                            <ul class="list-group">
                                <li class="list-group-item"><p>Titulo: <?php echo $mostrar['titulo'] ?>
                                - <a href="propiedad.php?idalquiler=<?php echo $mostrar['id']; ?>">Ver Propiedad </p></a>
                                </li>
                        <?php
                        }
                        ?>
                        </ul>
                        <?php
                    }
                }

                ?>
        </div>
    </div>
</div>

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

<script src="js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>