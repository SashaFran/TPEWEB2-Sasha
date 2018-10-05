<?php
echo phpinfo();
 //Es una buena practica que la clase se llame
 //igual al archivo
class IndexView{

//Como viene de la clase "Juegos", no es necesario aclarar que se va a mostrar los juegos.
  function Mostrar($Titulo){
      //$Titulo = "Venta de VideoJugos";
      ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8" />
      <title> <?php echo $Titulo ?></title>
      <link rel="stylesheet" type="text/css" href="CSS\estilo.css" >
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <meta charset="utf-8">

    </head>
    <body>
      <div class="Navegador">
        <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="index.php" id="Home">Home</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#" id="Accion">Accion</a>
        <a class="dropdown-item" href="#" id="Aventura">Aventura</a>
        <a class="dropdown-item" href="#" id="Terror">Terror</a>
        <a class="dropdown-item" href="#" id="Traertodo">Traer todo</a>
      </div>
    </div>
    </li>
    <li class="nav-item">
      <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Consola </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#" id="PS3">PS3</a>
      <a class="dropdown-item" href="#" id="PS4">PS4</a>
      <a class="dropdown-item" href="#" id="PC">PC</a>
        <a class="dropdown-item" href="#" id="Traertodo1">Traer todo</a>
    </div>
    </div>
    </li>
     <li class="nav-item">
       <div class="dropdown">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Sign In</i> </button>
     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
       <form action="./View/AdmiView.php" method="get">
       <li>Documento: <input id="input" type="number" name="Documento" /></li>
       <li>Contraseña: <input type="text" name="Contraseña" /></li>
       <li><input type="submit" value="Sign in"></li>
     </div>
    </div>
    </li>
    </ul>
    </div>
    <div class="row">
      <div class="col-12 col-md-8" id="Cuerpo">
        <div class="contenedor">

        </div>
    </div>
      <div class="col-6 col-md-4" class="foto">
          <div class="text-center">
          <img src="Image/propaganda3.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="foto1">
          <img src="Image/propaganda2.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="fotodos">
        </div></div>
    </div>

    <div class="container">

    </div>
    <div class="footer">
    <nav class="nav nav-pills nav-fill">
      <p class="nav-item nav-link" class="pie">Siguenos en nuestras redes sociales: </p>
      <a class="nav-item nav-link" class="pie" href="http://facebook.com">Facebook <img src="Image/Facebook.png" id="Redsocial"/></a>
      <a class="nav-item nav-link" class="pie" href="http://twitter.com">Twitter <img src="Image/Twitter.jpg" id="Redsocial"/></a>
      <a class="nav-item nav-link" class="pie" href="http://Instagram.com">Instagram <img src="Image/Instagram.png" id="Redsocial"/></a>
    </nav>
    </div>
    <script src="JS/PartialRender.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>
    <?php
  }
}

 ?>
