<?php include ("Route/Edicion.php");

//pagina de administrador, ver tema del acceso, muestra todos los Juegos con un boton de borrar con id en cada <li>
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title> DigitalGames.com</title>
  <link rel="stylesheet" type="text/css" href="CSS\estilo.css" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <div class="Principio">
  </div>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Informacion</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Accion</a>
    <a class="dropdown-item" href="#">Aventura</a>
    <a class="dropdown-item" href="#">Terror</a>
  </div>
</div>
</li>
 <li class="nav-item">
   <div class="dropdown">
 <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In</i> </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
   <form action="usuario.php" method="get">
   <li>Documento: <input id="input" type="number" name="Documento" /></li>
   <li>Contraseña: <input type="text" name="Contraseña" /></li>
   <li><input type="submit" value="Sign in"></li>
 </div>
</div>
</li>
</ul>
</div>
<div class="container">
  <?php
Home();
   ?>
</div>
<div class="footer">
<nav class="nav nav-pills nav-fill" class="RedS">
  <p class="nav-item nav-link" >Siguenos en nuestras redes sociales: </p>
  <a class="nav-item nav-link" href="http://facebook.com">Facebook <img src="Image/Facebook.png" id="Redsocial"/></a>
  <a class="nav-item nav-link" href="http://twitter.com">Twitter <img src="Image/Twitter.jpg" id="Redsocial"/></a>
  <a class="nav-item nav-link" href="http://Instagram.com">Instagram <img src="Image/Instagram.png" id="Redsocial"/></a>
</nav>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
