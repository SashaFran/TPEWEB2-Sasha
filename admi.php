<?php include "Route/Edicion.php";
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
GetJuegos();
InsertarJuego();
?>
</div>
</br>
<div class="container" id="Formulario">
  <h3 class="destacado">Agrega, edita o borra un juego de nuestro mercado: </h3>
  <p class="destacado">Recuerda que podras encontrar el mismo en nuestra base de datos o buscandolo por categoria en nuestra pagina principal.</p>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      <form  method="post" action="Agregar">
        <div class="form-group">
          <label for="inputTITULO"> Titulo: </label>
          <input type="text" name="inputTITULO">
        </div>
        <div class="form-group">
          <label for="inputDESCRIPCION">Descripcion: </label>
          <textarea type="text" name="inputDESCRIPCION"></textarea>
        </div>
        <div class="form-group">
          <label for="inputPRECIO">Precio: </label>
          <input type="number" name="inputPRECIO">
        </div>

        <div class="form-group">
            <label for="inputGENERO"> Categoria:
                        <select class="filtro" name="inputGENERO">
                          <option>Accion</option>
                          <option>Aventura</option>
                          <option>Terror</option>
                         </select>
                   </div></label>
      <div class="form-group">
          <label for="inputCONSOLA"> Consola:
                            <select class="filtro" name="inputCONSOLA">
                              <option>PS4</option>
                              <option>PS3</option>
                              <option>PC</option>
                             </select>
                       </div>
                     </label>
      <hr/>
      <input type="submit" value="Agregar">
    </form>
    </div>
    <div class="col-sm">
      <div class="form-group">
      <form  method="get" action="Borrar">
        <label for="inputIDBorrar">Ingrese N° de ID: </label>
        <input type="number" name="inputIDBorrar">
        <hr/>
        <input type="submit" value="Borrar">
      </form>
    </div>
  </div>
    <div class="col-sm">
      <!--Esta bien que sea GET? -->
      <form  method="get" action="Editar">
        <div class="form-group">
          <label for="inputTITULOedit"> Titulo: </label>
          <input type="text" name="inputTITULOedit">
        </div>
        <div class="form-group">
          <label for="inputDESCRIPCIONedit">Descripcion: </label>
          <textarea type="text" name="inputDESCRIPCIONedit"></textarea>
        </div>
        <div class="form-group">
          <label for="inputPRECIOedit">Precio: </label>
          <input type="number" name="inputPRECIOedit">
        </div>
        <div class="form-group">
        <label for="inputIDeditar">Numero de ID: </label>
        <input type="number" name="inputIDeditar">
      </div>
          <div class="form-group">
              <label for="inputGENEROedit"> Categoria:
                          <select class="filtro" name="inputGENERO">
                            <option>Accion</option>
                            <option>Aventura</option>
                            <option>Terror</option>
                           </select>
                     </div></label>
        <div class="form-group">
            <label for="inputCONSOLAedt"> Consola:
                              <select class="filtro" name="inputCONSOLA">
                                <option>PS4</option>
                                <option>PS3</option>
                                <option>PC</option>
                               </select>
                         </div>
                       </label>
        <hr/>
        <input type="submit" name="InputEditar"value="Editar">
      </form>
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
