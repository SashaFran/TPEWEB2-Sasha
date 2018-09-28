<?php
require_once 'index.php';
require_once 'admi.php';
require_once 'Route/Edicion.php'
require_once "Controller/IndexController.php"



$controller = new IndexController();
$partesURL = explote ('/', $_GET['action']);


if ($partesURL[0] == '']) {
  //Home(); //Si agrego Home en el Index, se me caga todo y no me aparece nada
  $controller->Home();
}else {
  if ($partesURL[0] == 'Agregar') {
    InsertarJuego();
    }elseif ($partesURL[0] == 'Borrar'){
      BorrarJuego($partesURL [1]);
    }elseif ($partesURL [0] == 'Editar') {
      EditarJuego($partesURL [1]);
    }
}
?>
