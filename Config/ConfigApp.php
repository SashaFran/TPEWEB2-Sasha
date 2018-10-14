<?php

define('Administrador', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]. '/Administrador'));
define('Home', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]));
define('Logout', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]). '/logout');

class ConfigApp
{

  public static $ACTION = 'action';
  //consatnte action ; todo en la url es una accion: editar, borrar, etc
    public static $PARAMS = 'params';
    //parametros son las tareas: borrar/3.
      public static $ACTIONS = [
        //lista de action segun la accion, si va a Home, tra el index.
        ''=> 'Indexcontroller#Home',

        'Home'=> 'Indexcontroller#Home',

        'Administrador'=> 'AdmiController#Home',

        'index'=> 'AdmiController#TraerHome',

        'Borrar'=> 'AdmiController#BorrarJuego',
        //esta borrar? dividilo en 2, traeme el metodo y el parametro

        'Editar'=> 'AdmiController#EditarJuego',

        'Agregar'=> 'AdmiController#InsertarJuego',

        'EditarGenero'=> 'AdmiController#EditarGenero',

        'AgregarGenero'=> 'AdmiController#AgregarGenero',

        'BorrarGenero'=> 'AdmiController#BorrarGenero',

        'Logout'=> 'LoginController#logout',
        //  'Login'=>'LoginController#VerificarLogin',

        'VerificarLogin'=> 'LoginController#VerificarLogin',
      ];

}

 ?>
