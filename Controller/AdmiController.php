<?php
require_once "./Model/IndexModel.php";
require_once "../view/AdmiView.php"
//solicita IndexView ya que vamos a trabajar en paralelo

class Admicontroller
{
  private $view;
  //variable view
  private $model;
  private $Titulo = "Venta de VideoJugos";
  //declaramos la variable aca, donde aparece en el Index
  function __construct()
  {
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->view = new AdmiView();
    //yo objeto, busca mi propiedad View
    $this->model = new IndexModel();
    //inicializacion de model
    $this->Titulo = "Venta de VideoJuegos"
    //yo, objeto! Busca mi propiedad.
  }

      function Home(){
          $this->view->MostrarAdmiView($this->Titulo);
        }

    function TraerHome(){
          $Juegos = $this->model->GetJuegos();
          $Genero = $this->model->GetGeneros();
          $this->model->MostrarAdmiView($this->titulo,$Juegos,$Genero);
        }

    function InsertarJuego(){
          $this->model->InsertarJuego();
        }

    function BorrarJuego(){
        $this->model->BorrarJuego();
        }

    function EditarJuego(){
        $this->model->EditarJuego();
        }

    function EditarGenero(){
        $this->model->EditarGenero();
        }

    function AgregarGenero(){
        $this->model->AgregarGenero();
        }

    function BorrarGenero(){
          $this->model->BorrarGenero();
          }

    }
 ?>
