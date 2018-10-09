<?php

define('ACTION', 0);
define('PARAMS', 1);

require_once "config/ConfigApp.php";
require_once "Controller/Admicontroller.php";

function parseURL($url){
  //"Parse": Analisala y devolveme algo
  //devuelve un arreglo de dos posiciones; 1:Accion, 2: Los parametros.
  $urlExploded = explode('/', $url);
  $arrayReturn [ConfigApp::$ACTION] = $utlExploted[ACTION];
  //en accion coloca lo que venga (la action a realizar) ej: borrar.
  $arrayReturn [ConfigApp::$PARAMS] = isset($urlExploted [PARAMS]) ? array_slice($urlExploded,1) : null;
  //en parametros, todos los parametros. Si estan seteados, entonces hace esto. Si no, pone null.
  //Slice: De todo lo que este posterior a la barra, agarralo y colocalo aca.
  //el otro route no soportaba mas de una barra y un parametro.
  return $arrayReturn;
}
//si esta seteada hace algo, si no, no muestra nada.
if(isset($_GET['action'])){
    $urlData = parseURL($_GET['action']);
    $action = $urlData[ConfigApp::$ACTION]; //home?

if(array_key_exists($action,ConfigApp::$ACTION)){
//si en array de actiones, existe esa action: hace algo. (configApp)
  $params = $urlData [ConfigApp::$PARAMS];
  //parametros que voy a pasar
  $action = explode('#', ConfigApp::$ACTIONS[$acction]);
//la action que voy a ejecutar
//hago un explote para separar con un # la accion y luego el parametro.
  $controller = new $action[0]();
  //el controlador esta en la posicion 0
  //new action = metaprogromacion (ej: "tareascontroller")
  //es metaprogromacion porque php lo permite.
  $metodo = $action[1];
  if(isset($params) && $params != null){
    //si tiene parametros, traigo el metodo con parametros.
    echo $controller->$metodo($params);
    //siempre llamo al metodo con un arreglo de parametros.
  }else{
    //si no, uso el metodo derecho.
    echo $controller->$metodo();
  }else{
    $controller = new Admicontroller()
    echo $controller->Home();
  }
}

}
//
//
//
//
 ?>
