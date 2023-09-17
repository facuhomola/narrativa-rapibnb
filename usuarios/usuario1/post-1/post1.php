<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./../../../css/bootstrap.min.css" rel="stylesheet">
    <link href="./../../../css/style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <title>RapiBnB - Usuarios - usuario1</title>
</head>
<body>

<!--Cabecera-->
<?php 
    require('./../../../includes/header.php');
?>
<!--Fin cabecera-->

<!--Carousel-->
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img-1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img-2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img-3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-lg">
    <div class="row">
        <div class="col-12 col-md-9 col-lg-9 col-sm-12 mt-2 mb-2">
            <div class="container p-3">
                <h2>Departamento San Luis Capital</h2>
                <p>
                  <b>Ubicación: </b> San Luis
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit laboriosam non dolorem dolores! Tenetur at eum dicta quod maiores quasi, magni harum laborum voluptas corrupti mollitia doloribus voluptatibus repellendus totam.
                </p>
                <p>
                  <b>Precio: </b> $25000
                </p>
                <p>
                  <b>Servicio: </b> Lavado de ropa, desayuno completo, garage. 
                </p>
                <p class="text-muted">Tiempo: 2 noches</p>
                <a href="./../perfil.php">Dueño: Tobey</a>
                <button type="button" class="ml-2 btn btn-primary">Alquilar</button>
            </div>
        </div>
    </div>
</div>


<!--Pie de pagina-->
<?php    
    require('./../../../includes/footer.php');
?>
<!--Fin pie de pagina-->

    <script src="./../../../js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> -->
</body>
</html>