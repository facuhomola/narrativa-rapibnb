<?php

$conexion = mysqli_connect("localhost", "root", "", "rapibnb"); //para conectar a la base de datos

session_start();

?>

<nav class="navbar navbar-dark bg-dark" id="navbarmenu">
  <div class="container-fluid">
    <a class="navbar-brand" href="/narrativa-rapibnb/index.php">RapiBnB - Alquileres</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">MENÚ</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/narrativa-rapibnb/index.php">Inicio</a>
          </li>
          <?php
          if (!isset($_SESSION['user'])) {
            ?>
            <li class="nav-item">
              <a class="nav-link" href="/narrativa-rapibnb/bd/login.php">Iniciar Sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/narrativa-rapibnb/bd/registrar.php">Registrarse</a>
            </li>
          <?php
          }else{
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Perfil
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="/narrativa-rapibnb/perfil.php">Mí Perfil</a></li>
              <li><a class="dropdown-item" href="/narrativa-rapibnb/notificaciones.php">Notificaciones</a></li>
              <li><a class="dropdown-item" href="/narrativa-rapibnb/alquiler/nuevoalquiler.php">Nueva Publicación</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="/narrativa-rapibnb/verificar.php">Verificar Perfil</a></li>
              <li><a class="dropdown-item" href="/narrativa-rapibnb/bd/logout.php">Cerrar Sesión</a></li>
            </ul>
          </li>
          <?php
          }
          ?>
          <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="nav-link" href="administrador/admin.php">Administrador</a></li>
        </ul>
        <form class="d-flex mt-3" role="search" action="/narrativa-rapibnb/buscar.php" method="post">
          <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
          <button class="btn btn-success" type="submit" name="buscar" id="buscar">Buscar</button>
        </form>
      </div>
    </div>
  </div>
</nav>
