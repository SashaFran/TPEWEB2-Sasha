<?php
require_once('libs/Smarty.class.php');


class AdmiView
{


  function MostrarAdmiView($Titulo, $Juegos, $Genero){
    //$Titulo = "Venta de VideoJugos";
    $smarty = new Smarty();
    $smarty->assign('Titulo', $Titulo);
    $smarty->assign('Juegos', $Juegos);
    $smarty->assign('Genero', $Genero);
    $smarty->debugging = true;

    $smarty->display('templates/Admin.tpl');
}
}

?>
