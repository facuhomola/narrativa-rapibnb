<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <title>RapiBnB - Inicio</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('includes/header.php');
?>
<!--Fin cabecera-->

<div class="container-fluid" style="background-color: #042397; padding: 25px; margin-bottom: 2%; color: #fff; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div class="row">
        <div class="col-md-4 col-lg-4">
            <h2>Encontrá tu lugar para alojarte</h2>
        </div>
    </div>
</div>

<section class="container-lg" id="posts"> <!--Post de usuarios-->

<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="usuarios/usuario1/post-1/img-1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Departamento ciudad de San Luis</h5>
                        <h5 class="card-title">$25000</h5>
                        <p class="card-text">Alquiler Depto 2 Habitaciones Electrico, Balcon, Garage Para 1 Auto, No Mascotas.</p>
                        <p class="card-text"><small class="text-body-secondary">2 habitaciones - 1 cocina - cochera</small></p>
                        <a href="usuarios/usuario1/post-1/post1.php" class="btn btn-primary">Ver propiedad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="usuarios/usuario2/post1/img-mdz-1.jpeg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Departamento para turismo MaryBer</h5>
                        <h5 class="card-title">$34000</h5>
                        <p class="card-text">Ubicación privilegiada a 150 mts del Km0 (peatonal principal de Capital). Sin mascotas</p>
                        <p class="card-text"><small class="text-body-secondary">Capacidad hasta 3 personas como maximo, en caso de 4 personas: 2 adultos 1 menor y 1 bebe.</small></p>
                        <a href="usuarios/usuario2/post1/post1.php" class="btn btn-primary">Ver propiedad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="usuarios/usuario1/post-1/img-1.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Departamento · 35m² · 2 Ambientes - Córdoba Capital</h5>
                        <h5 class="card-title">$45000</h5>
                        <p class="card-text">Capacidad 1 habitación</p>
                        <p class="card-text"><small class="text-body-secondary">1 cocina - aire acondicionado</small></p>
                        <a href="usuarios/usuario3/post1/post1.php" class="btn btn-primary">Ver propiedad</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>    

<!--Pie de pagina-->
<?php    
    require('includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>