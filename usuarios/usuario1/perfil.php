<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../../css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <title>RapiBnB - Usuario 1 - Perfil</title>
</head>
<body>
    
<!--Cabecera-->
<?php 
    require('./../../includes/header.php');
?>
<!--Fin cabecera-->

<!--Perfil-->
<div class="container-lg">
    <div class="row min-vh-95 mt-2 mb-2 align-items-center align-content-center">
        <div class="col-md-3">
            <div class="text-center">
              <img src="img-perfil.jpg" class="rounded-circule mw-50" alt="imagen perfil" style="border-radius: 30%;" height="240px">
            </div>
        </div>
        <div class="col-md-9 mt-md-0">
            <div class="home-text">
              <h2 class="fs-4">Tobey Maguire</h2>
              <p class="mt-4 text-muted">Hola, un cordial saludo, soy Tobey Maguire.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis fugiat aperiam reiciendis aspernatur. Nobis eligendi illo aspernatur! Suscipit cum consectetur vel praesentium omnis error nesciunt culpa autem. Laborum, molestias ipsum.
              </p> 
            </div>          
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <h3 class="mb-4 fs-3 font-weight-bold">Mis Propiedades</h3>
        </div>
    </div>
    

    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="post-1/img-1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Departamento ciudad de San Luis</h5>
                            <h5 class="card-title">$25000</h5>
                            <p class="card-text">Alquiler Depto 2 Habitaciones Electrico, Balcon, Garage Para 1 Auto, No Mascotas.</p>
                            <p class="card-text"><small class="text-body-secondary">2 habitaciones - 1 cocina - cochera</small></p>
                            <a href="post-1/post1.php" class="btn btn-primary">Ver propiedad</a>
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
                        <img src="post-2/img-1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Villa Mercedes - Monoambiente</h5>
                            <h5 class="card-title">$22000</h5>
                            <p class="card-text">Alquiler Depto 1 Habitación Electrico, Garage Para 1 Auto, No Mascotas.</p>
                            <p class="card-text"><small class="text-body-secondary">1 habitación - 1 cocina - cochera</small></p>
                            <a href="" class="btn btn-primary">Ver propiedad</a>
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
                        <img src="post-3/img-1-merlo.jpeg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Merlo - Monoambiente</h5>
                            <h5 class="card-title">$32000</h5>
                            <p class="card-text">Alquiler Depto 3 Habitación Electrico, Garage Para 1 Auto, No Mascotas.</p>
                            <p class="card-text"><small class="text-body-secondary">1 cocina - cochera</small></p>
                            <a href="" class="btn btn-primary">Ver propiedad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!--Fin perfil-->

<!--Pie de pagina-->
<?php    
    require('./../../includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="./../../js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>