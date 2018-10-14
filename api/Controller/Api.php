<?php

/**
 *
 */
class Api
{

  function __construct()
  {
    // code...
  }

//recibe data que es el json en particular
//y un status (si anduvo bien o mal)
  public function json_response($data, $status){
    header("Content-Type: application/json");
    //esta funcion "_requestStatus"  que es la que trae el numero. (?)
    header("HTTP/1.1 " .$status . " " . $this->_requestStatus($status));
    return json_encode($data);
  }
  private function _requestStatus($code){
    $status = array(
      200=> "OK",
      404=> "Not found",
      500=< "Internal Server Error"
    );
    return ($status[$ccode])? $status[$code] = $status[500];
  }
}

 ?>
