<?php

class ConfigApi
{
//a diferencia del otro config, este no es un action! Es un Resource, por consiguiente se cambai el static
  public static $RESOURCE = 'resource';
  //consatnte action ; todo en la url es una accion: editar, borrar, etc
    public static $PARAMS = 'params';
    //parametros son las tareas: borrar/3.
      public static $RESOURCES = [
        //lista de action segun la accion, si va a Home, tra el index.
        'Juego#GET'=> 'ApiController#GetJuegos',


}

 ?>
