<?php
require_once('libs/Smarty.class.php');

 //Es una buena practica que la clase se llame
 //igual al archivo
class IndexView {

  function Mostrar($Titulo){
      //$Titulo = "Venta de VideoJugos";
      $smarty = new Smarty();
      $smarty->assign('Titulo', $Titulo);
      //aca deberia estar los juegos pero partialRender.
      //$smarty->assign(' ', $);
    //  $smarty->debugging = true;

      $smarty->display('templates/home.tpl');
  }
}

 ?>
