{include file = "header.tpl" }
<body>
  <div class="Navegador">
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link" href="" id="Home">Home</a>
  </li>
  <li class="nav-item">
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Juegos </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <form action="Filtro" name="GetAll" method="post">
        <button type="submit" class="dropdown-item" href="Filtro" name="GetAll" id="Traertodo"  value="1">Traer todo</button>
        <!-- No logro que me traiga los generos de la tabla generos-->
     {foreach from=$Genero item=generos}
        <button type="submit" class="dropdown-item" name="SeleccionGenero" value="{$generos['ID_Genero']}">  {$generos['Genero']}  </button>
      {/foreach}
</form>
  </div>
</div>

</li>
<li class="nav-item">
  <div class="dropdown">
<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Categorias </button>
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
   <form action="VerificarLogin" method="post">
   <li>Usuario: <input  type="text" name="Usuario" /></li>
   <li>Contraseña: <input  type="password" name="Contraseña" /></li>
   <li><input type="submit" value="Sign in"></li>
 </form>
 </div>
</div>
</li>
</ul>
</div>
<div class="row">
  <div class="col-12 col-md-8" id="Cuerpo">
    <div class="contenedor">

<!-- Tuve que sacar el !==, si no, no lo reconocia) -->
{if $Categorias !== null}
  {include file="GenerosIndex.tpl"}
    {elseif $GetAll !== null}
      {include file="TraerTodo.tpl"}
        {else}
          {include file="Contenedor.tpl"}
{/if}


    </div>
</div>
  <div class="col-6 col-md-4" class="foto">
      <div class="text-center">

      <img src="image\propaganda3.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="foto1">
      <img src="image\propaganda2.jpg" class="img-fluid" class="img-thumbnail" alt="Responsive image" id="fotodos">
    </div></div>
</div>

<div class="container">

</div>

{include file="footer.tpl"};
