<?php
/* Smarty version 3.1.33, created on 2018-10-18 21:09:03
  from 'C:\xampp\htdocs\Proyectos\PaginaJuegos\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc8da4f754b54_14822668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2df699975c3d2f63e5dff833439cb2b3e493632b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\PaginaJuegos\\templates\\home.tpl',
      1 => 1539889739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:GenerosIndex.tpl' => 1,
    'file:TraerTodo.tpl' => 1,
    'file:Contenedor.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5bc8da4f754b54_14822668 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Genero']->value, 'generos');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['generos']->value) {
?>
        <button type="submit" class="dropdown-item" name="SeleccionGenero" value="<?php echo $_smarty_tpl->tpl_vars['generos']->value['ID_Genero'];?>
">  <?php echo $_smarty_tpl->tpl_vars['generos']->value['Genero'];?>
  </button>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
<?php if ($_smarty_tpl->tpl_vars['Categorias']->value !== null) {?>
  <?php $_smarty_tpl->_subTemplateRender("file:GenerosIndex.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['GetAll']->value !== null) {?>
      <?php $_smarty_tpl->_subTemplateRender("file:TraerTodo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } else { ?>
          <?php $_smarty_tpl->_subTemplateRender("file:Contenedor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>


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

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>;
<?php }
}
