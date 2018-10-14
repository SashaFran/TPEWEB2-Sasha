<?php

class SecuredController //extends AnotherClass
{

  function __construct()
  {
    session_start();
    if(isset($_SESSION["Usuario"])){
      //Si esta registrado correcto, te lleva al constructor, si no, lleva al Home
      //Tiempo de Logout

      if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 20)){
        //Si el tiempo es mayor a 2 segundos, logput
        $this->logout(); //Logra cerrar la sesion, y vuelve al Home.
      }
        $_SESSION['LAST_ACTIVITY'] = time();
    }else{
      header(Home);
    }
  }

        function logout(){

          session_start();
          session_destroy();
          header(Home);
    }
  }
 ?>
