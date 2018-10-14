<?php

require_once "./Model/IndexModel.php";
require_once "./view/AdmiView.php";
require_once "./Controller/SecuredController.php";
//define('Administrador', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]. '/Administrador'));
//define('Home', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]));
//define('Logout', 'Location:  http://".$_SERVER["SERVER_NAME"]'. dirname($_SERVER["PHP_SELF"]). '/logout');

//solicita IndexView ya que vamos a trabajar en paralelo

class AdmiController extends SecuredController
{
//programacion orientada a Objetos
  private $view;
  private $model;
  private $Titulo;
  //declaramos la variable aca, donde aparece en el Index

  function __construct()
  {
    //es hacer base.
    parent::__construct();
    //llama el construct del SecuredController. Si esta correto sigue si no, va al home.
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->view = new AdmiView();
    //yo objeto, busca mi propiedad View
    $this->model = new IndexModel();
    //inicializacion de model
    $this->Titulo = "Venta de VideoJuegos";
    //yo, objeto! Busca mi propiedad.
  }

      function Home(){
        //agarra cookkie, id, envia la consulta y vuelve

          $this->view->MostrarAdmiView($this->Titulo);

}
    function TraerHome(){
          $Juegos = $this->model->GetJuegos();
          $Genero = $this->model->GetGeneros();
          $this->model->MostrarAdmiView($this->titulo,$Juegos,$Genero);
        }

//aca param no porque es con post
    function InsertarJuego(){
          $this->model->InsertarJuego();
          header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
        }

    function BorrarJuego($param){
        $this->model->BorrarJuego($param[0]);
         header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
        }

    function EditarJuego($param){
        $this->model->EditarJuego($param[0]);
         header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
        }

    function EditarGenero($param){
        $this->model->EditarGenero($param[0]);
         header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
        }

//aca param no porque es con post
    function AgregarGenero(){
        $this->model->AgregarGenero();
         header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
        }

    function BorrarGenero($param){
          $this->model->BorrarGenero($param[0]);
           header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
          }

    }
 ?>
