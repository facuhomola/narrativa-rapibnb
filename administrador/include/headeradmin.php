<?php
  include('./../bd/cn.php');
  session_start();
  $user = $_SESSION['user'];

  $consulta = "SELECT * FROM administradores where nombre_admin='$user' ";
  $resultado = mysqli_query($conexion, $consulta);

?>

<nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/narrativa-rapibnb/administrador/admin.php">RAPIBNB</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link disabled">Usuario: <?php echo $user ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/narrativa-rapibnb/bd/logout.php">Cerrar Sessión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>