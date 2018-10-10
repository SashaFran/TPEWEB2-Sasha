{include file="Header.tpl"}

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
  <!--{foreach from=$generos item=genero}
     <a class="dropdown-item" href="#" value="{$genero['ID_Genero']}">  {genero['Genero']}  </a>
   {/foreach} -->
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
<!--GetJuegos();-->
<table class='table'>
{foreach from=$juegos item=juego}
  <li> ID: {$juego['ID_Juego']} | Consola: {$juego['Consola']} | Titulo: {$juego['Titulo']} | Genero: {$juego['ID_Genero']} | Descripcion: {$juego['Descripcion']} | Precio: ${$juego['Precio']}</li>;
{/foreach}
</table>;
<table class='table'>
<!--No se si poner "genero" o "juego". Porque genero esta en ambas.-->
{foreach from=$generos item=genero}
  <li> ID: {$genero['ID_Genero']} | Genero: {$genero['Genero']} </li>;
{/foreach}
</table>;
<!--InsertarJuego();-->
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
             {foreach from=$generos item=genero}
              <option value="{$genero['ID_Genero']}">  {genero['Genero']}  </opcion>
            {/foreach}
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
            {foreach from=$generos item=genero}
             <option value="{$genero['ID_Genero']}">  {genero['Genero']}  </opcion>
           {/foreach}
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
{include file="Footer.tpl"}
