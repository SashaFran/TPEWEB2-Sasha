<?php
require_once "./Model/IndexModel.php";
require_once "../view/IndexView.php"
//solicita IndexView ya que vamos a trabajar en paralelo

class Categoriascontroller
{
  private $view;
  //variable view
  private $model;
  private $Titulo = "Venta de VideoJugos";
  //declaramos la variable aca, donde aparece en el Index
  function __construct()
  {
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->view = new IndeView();
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
 ?>
