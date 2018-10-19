<?php
/* Smarty version 3.1.33, created on 2018-10-17 20:32:00
  from 'C:\xampp\htdocs\Proyectos\PaginaJuegos\templates\TraerTodo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bc780202b3947_90052114',
  'has_nocache_code' => false,
  'file_dependency' =>
  array (
    '6c8088adee5da2b780842bf837008c5fed4146af' =>
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\PaginaJuegos\\templates\\TraerTodo.tpl',
      1 => 1539801117,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_5bc780202b3947_90052114 (Smarty_Internal_Template $_smarty_tpl) {
?><h2>Todos los juegos</h2>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Juego']->value, 'juego');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
?>
          <tr>
            <td><button class="btn btn-primary" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['ID_Juego'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Titulo'];?>
</button></td>
            <td><?php echo $_smarty_tpl->tpl_vars['juego']->value['Consola'];?>
</td>
            <td><button class="btn btn-primary" type="submit" name="SeleccionGenero" formaction="Filtro" value="<?php echo $_smarty_tpl->tpl_vars['juego']->value['ID_Genero'];?>
"><?php echo $_smarty_tpl->tpl_vars['juego']->value['Genero'];?>
</button></td>
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
