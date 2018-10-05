<?php
class AdmiView
{


  function MostrarAdmiView($Titulo, $Juegos, $Genero){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="UTF-8" />
      <title> <?php echo $Titulo  ?></title>
      <link rel="stylesheet" type="text/css" href="CSS\estilo.css" >
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
      <div class="Principio">
      </div>
      <div class="Navegador">
        <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link" href="indexView.php">Home</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categoria </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">Accion</a>
        <a class="dropdown-item" href="#">Aventura</a>
        <a class="dropdown-item" href="#">Terror</a>
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
       <form action="usuario.php" method="get">
       <li>Documento: <input id="input" type="number" name="Documento" /></li>
       <li>Contraseña: <input type="text" name="Contraseña" /></li>
       <li><input type="submit" value="Sign in"></li></form>
     </div>
    </div>
    </li>
    </ul>
    </div>
    <div class="container">
    <?php
    //GetJuegos();
    echo "<table class='table'>";
    foreach ($juegos as $juego) {
      echo "<li> ID: ".$juego['ID_Juego']." | Consola: ".$juego['Consola']." | Titulo: ".$juego['Titulo']." | Genero: ".$juego['ID_Genero']." | Descripcion: ".$juego['Descripcion']." | Precio: $".$juego['Precio']."</li>";
    }
    echo "</table>";

    echo "<ul class='table'>";
    //No se si poner "genero" o "juego". Porque genero esta en ambas.
    foreach ($generos as $genero) {
      echo   "<li> ID:".$genero['ID_Genero']." | Genero:".$genero['Genero']."</li>";
    }
    echo "</table>";

  //  InsertarJuego();
    ?>
    </div>
    </br>
    <div class="container">
      <div class="row align-items-start">
        <div class="col">
          <form method="post" action="Agregar">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputTITULO">Titulo</label>
            <input type="email" class="form-control" name="inputTITULO" placeholder="Titulo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputDESCRIPCION">Descripcion</label>
            <textarea type="text" class="form-control" name="inputDESCRIPCION" placeholder="Descripcion">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPRECIO">Precio</label>
          <input type="number" class="form-control" name="inputPRECIO" placeholder="Precio">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputGENERO">Categoria: </label>
              <select class="filtro" name="inputGENERO">
                <option selected>Selecciona...</option>
                <?php foreach ($generos as $genero) {
                  echo "<option value=".$genero['ID_Genero'].">".$genero['Genero']."</opcion>";
                }
                ?>
                <!--<option>Accion</option>
                <option>Aventura</option>
                <option>Terror</option>-->
               </select>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCONSOLA">Consola: </label>
            <select class="filtro" name="inputCONSOLA">
              <option selected>Selecciona...</option>
              <option>PS4</option>
              <option>PS3</option>
              <option>PC</option>
             </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" value="Agregar">Agregar</button>
        </form>
        </div>
        <div class="col">
          <form method="get" action="Editar">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputTITULOedit">Titulo</label>
            <input type="email" class="form-control" name="inputTITULOedit" placeholder="Titulo">
          </div>
          <div class="form-group col-md-6">
            <label for="inputDESCRIPCIONedit">Descripcion</label>
            <textarea type="text" class="form-control" name="inputDESCRIPCIONedit" placeholder="Descripcion">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPRECIOedit">Precio</label>
          <input type="number" class="form-control" name="inputPRECIOedit" placeholder="Precio">
        </div>
        <div class="form-group">
          <label for="inputPRECIO">ID del Juego</label>
          <input type="number" class="form-control" name="inputIDeditar" placeholder="Precio">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="inputGENERO">Categoria: </label>
              <select class="filtro" name="inputGENERO">
                <option selected>Selecciona...</option>
                <option>Accion</option>
                <option>Aventura</option>
                <option>Terror</option>
               </select>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="inputCONSOLA">Consola: </label>
            <select class="filtro" name="inputCONSOLA">
              <option selected>Selecciona...</option>
              <option>PS4</option>
              <option>PS3</option>
              <option>PC</option>
             </select>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" value="Editar">Editar</button>
        </form>
        </div>
        <div class="col">
          <form  method="get" action="Borrar">
            <div class="form-group">
              <label for="inputIDeditar">ID del Juego</label>
              <input type="number" class="form-control" name="inputIDeditar" placeholder="ID del Juego">
            </div>
                  <button type="submit" class="btn btn-primary" value="Borrar">Borrar</button>
          </form>
        </div>
      </div>
      <div class="container">
  <div class="row align-items-start">
    <div class="col">
      <label for="inputGENEROedit">Editar Genero</label>
        <form  action="GENEROeditar" method="get">
          <input class="form-control" type="number" name="inputGENEROedit" value="" placeholder="ID del Juego">
          <label for="GenerodelJuego">Editar Genero</label>
          <input class="form-control" type="text" name="GenerodelJuego" value="" placeholder="Genero del Juego">
          <button class="btn btn-primary" type="submit" name="button">Editar</button>
        </form>
    </div>
    <div class="col">
      <label for="inputGENEROagregar">Agregar/Borrar Genero</label>
        <form action="GENEROagregar" method="get">
        <input class="form-control" type="text" name="inputGENEROagregar" placeholder="Genero del Juego">
        <button class="btn" type="submit" name="button">Cargar</button>
        <button class="btn" type="submit" name="button"formaction="GENEROborrar">Borrar</button>
      </form>
    </div>
    <div class="col">
      One of three columns
    </div>
  </div>
</div>
</div>
    </br>
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
    <?php
  }
}



?>
