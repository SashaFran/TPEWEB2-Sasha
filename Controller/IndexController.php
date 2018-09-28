<?php

require_once "../view/IndexView.php"
//solicita IndexView ya que vamos a trabajar en paralelo
require_once  "../Model/IndexModel.php"


class Indexcontroller
{
  private $view;
  //variable view
  private $model;
  private $Titulo = "Venta de VideoJugos";
  //declaramos la variable aca, donde aparece en el Index
  function __construct()
  {
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->view = new IndexView();
    //yo objeto, busca mi propiedad View
    $this->model = new IndexModel();
    //inicializacion de model
    $this->Titulo = "Venta de VideoJuegos"
    //yo, objeto! Busca mi propiedad.
  }

  function Home(){
//use PartialRender, por consguiente mi index no tiene variables extras.

    ----- = $this->model->GetJuegos();
    $this->view->Mostrar($this->Titulo, ----);
  }
}

 ?>
