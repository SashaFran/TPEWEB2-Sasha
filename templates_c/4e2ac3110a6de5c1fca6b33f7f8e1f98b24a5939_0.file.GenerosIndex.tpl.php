<?php
/* Smarty version 3.1.33, created on 2018-10-18 09:15:17
  from 'C:\xampp\htdocs\Proyectos\PaginaJuegos\templates\GenerosIndex.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc83305bef4a0_40864089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e2ac3110a6de5c1fca6b33f7f8e1f98b24a5939' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\PaginaJuegos\\templates\\GenerosIndex.tpl',
      1 => 1539846914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bc83305bef4a0_40864089 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Juegos por genero</h2>
  <form action="MostrarDetalle" method="post">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'Categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Categoria']->value) {
?>
          <tr>
          <td>
            <button type="submit" class="btnDet" name="CheckDetalle" value="<?php echo $_smarty_tpl->tpl_vars['Categoria']->value['ID_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['Titulo'];?>

            </button>
          </td>
          <td><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['Consola'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['Categoria']->value['Genero'];?>
</td>
          </tr>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
</form>
<?php }
}
