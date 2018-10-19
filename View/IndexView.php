<?php
require_once('libs/Smarty.class.php');

 //Es una buena practica que la clase se llame
 //igual al archivo
class IndexView {

  function Home($Juegos, $Genero, $GetAll, $Categoria, $Detalle){
      //$Titulo = "Venta de VideoJugos";
      $smarty = new Smarty();
      //$smarty->assign('Titulo', $Titulo);
      $smarty->assign('Juego', $Juegos);
      $smarty->assign('Genero', $Genero);
      $smarty->assign('GetAll', $GetAll);
      $smarty->assign('Categorias',$Categoria);
      $smarty->assign('Detalle',$Detalle);
    //  $smarty->debugging = true;

      $smarty->display('templates/home.tpl');
  }
  function Mostrar($Juegos, $Genero, $GetAll, $Categoria, $Detalle){
      //$Titulo = "Venta de VideoJugos";
      $smarty = new Smarty();
      //$smarty->assign('Titulo', $Titulo);
      $smarty->assign('Juego', $Juegos);
      $smarty->assign('Genero', $Genero);
      $smarty->assign('GetAll', $GetAll);
      $smarty->assign('Categorias',$Categoria);
      $smarty->assign('Detalle',$Detalle);
    //  $smarty->debugging = true;

      $smarty->display('templates/home.tpl');
}
}

 ?>
