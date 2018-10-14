<?php

require_once "Api.php";
require_once "./../Model/IndexModel.php"
//la idea seria tenerla en la carpeta api para que quede todo junto.
//Solo que separado se entiende mejor


class ApiController extends Api{

  private $model;
  function __construct(){
    parent::__construct();
    $this->model = new IndexModel();
  }

  function GetJuegos($params){
    if(isset($params)){
    $ID_Juegos = $params[RESOURCE];

    $data = $this->model->GetJuegos($ID_Juegos);
  }else{
  $data = $this->model->GetJuegos();
  //trae todos los juegos;
}
  if(isset($data)){
    return $this->json_response($data, 200);
  }else{
    return $this->json_response(null, 404);
  }
  }
}
?>
