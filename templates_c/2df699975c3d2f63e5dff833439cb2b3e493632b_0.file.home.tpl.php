<?php
/* Smarty version 3.1.33, created on 2018-10-13 17:43:34
  from 'C:\xampp\htdocs\Proyectos\PaginaJuegos\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc212a6c912a2_95802547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df699975c3d2f63e5dff833439cb2b3e493632b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\PaginaJuegos\\templates\\home.tpl',
      1 => 1539445413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc212a6c912a2_95802547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
   <form action="VerificarLogin" method="post">
   <li>Usuario: <input  type="number" name="Usuario" /></li>
   <li>Contraseña: <input  type="text" name="Contraseña" /></li>
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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
