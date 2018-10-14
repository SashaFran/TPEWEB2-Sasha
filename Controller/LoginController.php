<?php

require_once "./view/IndexView.php";
require_once "./model/UsuarioModel.php";

//me dice que ya esta definido.
//define('Administrador', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]. '/Administrador'));
//define('Home', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]));
//define('Logout', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]). '/logout');


class LoginController
{
  private $view;
  //variable view
  private $model;
  private $Titulo;
  //declaramos la variable aca, donde aparece en el Index

  function __construct()
  {
  $this->view = new IndexView();
  $this->model = new UsuarioModel();
  $this->Titulo = "Login";
  }

//mostrar pagina de login vacia. No es neceesaria ya que lo tengo en el index.
//  function Login(){
//    $this->view->MostrarLogin()

  function VerificarLogin(){
    $Usuario = $_POST["Usuario"];
    $Contraseña = $_POST["Contraseña"];
    $dbUsuario = $this->model->GetUsuario($Usuario);
    if(isset($dbUsuario)){
      if (password_verify($Contraseña, $dbUsuario[0]["Contraseña"])){
        session_start();
        $_SESSION["Usuario"] = $Usuario;


        //mostrar Juegos. Pagina adminitracion
        //redirijo
        header(Administrador);
      }else{
        header(Home);
        ?>
        <!-- Cacho de JS para mostrar mensaje Alert-->
        <script type="text/javascript">alert('Usuario o Contraseña invalido')</script>;
        <?php
      }
    }else{
      ?>
      <script type="text/javascript">alert('No existe el usuario')</script>;
      <?php
    }
  }


}
 ?>
