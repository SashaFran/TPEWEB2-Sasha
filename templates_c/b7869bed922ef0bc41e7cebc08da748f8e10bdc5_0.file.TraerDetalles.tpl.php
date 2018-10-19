<?php
/* Smarty version 3.1.33, created on 2018-10-19 13:23:30
  from 'C:\xampp\htdocs\Proyectos\PaginaJuegos\templates\TraerDetalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc9beb289e6d5_86246014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7869bed922ef0bc41e7cebc08da748f8e10bdc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\PaginaJuegos\\templates\\TraerDetalles.tpl',
      1 => 1539948208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_5bc9beb289e6d5_86246014 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <div class="cuerpoDetalle" id="Cuerpo">

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Detalles']->value, 'Detalle');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Detalle']->value) {
?>

      <div class="infoTitulo">
        <h2><?php echo $_smarty_tpl->tpl_vars['Detalle']->value['Titulo'];?>
</h2>
      </div>
      <div class="descripcion">
      <div class="info">
        <h5 class="infoGame">Genero: <?php echo $_smarty_tpl->tpl_vars['Detalle']->value['Genero'];?>
 |</h5>
        <h5 class="infoGame">Consola: <?php echo $_smarty_tpl->tpl_vars['Detalle']->value['Consola'];?>
 |</h5>
        <h5 class="infoGame">Precio: $ <?php echo $_smarty_tpl->tpl_vars['Detalle']->value['Precio'];?>
</h5>
      </div>
        <h5>Descripcion:</h5>
        <?php echo $_smarty_tpl->tpl_vars['Detalle']->value['Descripcion'];?>
<br>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      </div>

      <div class="footer">
      <nav class="nav nav-pills nav-fill">
        <p class="nav-item nav-link" class="pie">Siguenos en nuestras redes sociales: </p>
        <a class="nav-item nav-link" class="pie" href="http://facebook.com">Facebook <img src="image/Facebook.png" id="Redsocial"/></a>
        <a class="nav-item nav-link" class="pie" href="http://twitter.com">Twitter <img src="image/Twitter.jpg" id="Redsocial"/></a>
        <a class="nav-item nav-link" class="pie" href="http://Instagram.com">Instagram <img src="image/Instagram.png" id="Redsocial"/></a>
      </nav>
      </div>
      <?php echo '<script'; ?>
 src="JS/PartialRender.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"><?php echo '</script'; ?>
>
      </body>
      </html>
<?php }
}
