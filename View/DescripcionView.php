<?php
require_once('libs/Smarty.class.php');

class DescripcionView
{
  function MostrarDetalle($Detalle, $Titulo)
  {
    $smarty = new Smarty();
    $smarty->assign('Detalles',$Detalle);
    $smarty->assign('Titulo',$Titulo);
    $smarty->display('templates/TraerDetalles.tpl');
  }
}
 ?>
