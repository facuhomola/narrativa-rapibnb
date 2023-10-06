<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--  <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./../css/login.css">
    <title>Rapibnb - Inicio Sesión</title>
</head>
<body>
    
<header>
    <h3>Rapibnb</h3>
</header>

<h1>Iniciar Sesión</h1>

<form action="validarlogin.php" method="post">
    <input type="text" name="user" placeholder="Ingrese su usuario">
    <input type="password" name="pass" placeholder="Ingrese su contraseña">
    <input type="submit" value="Enviar">
</form>

<!--    <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>