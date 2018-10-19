<?php

require_once "./view/IndexView.php";
//solicita IndexView ya que vamos a trabajar en paralelo
require_once  "./Model/IndexModel.php";
require_once './View/DescripcionView.php';

class Indexcontroller
{
  private $view;
  //variable view
  private $model;
  private $Titulo;
  //declaramos la variable aca, donde aparece en el Index
  private $UsuarioModel;
  private $Categoria; // de donde salio
  private $ArregloCategoria; // ?
  private $GetAll; // ?
  private $Detalle;
  private $DescripcionView;

  function __construct()
  {
    //asignacion a $view. No se coloca parametros proque el contructor no lleva parametros, si los llevase se colocan aca tambien.
    $this->view = new IndexView();
    //yo objeto, busca mi propiedad View
    $this->model = new IndexModel();
    //inicializacion de model
    $this->Titulo = "Venta de VideoJuegos";
    //yo, objeto! Busca mi propiedad.

    $this->UsuarioModel = new UsuarioModel();
    $this->DescripcionView = new DescripcionView();
  }
  function Home(){
    $Genero = $this->model->GetGeneros();
    $Juegos = $this->model->GetJuegos();
    $this->view->Mostrar($Juegos,$Genero,$this->GetAll,$this->Categoria,$this->Detalle);
  //  $this->view->Mostrar($this->Categoria)
      }

  function Controlador(){
    if(isset($_POST['SeleccionGenero'])){
      $this->Categoria = $_POST['SeleccionGenero'];
      $this->ArregloCategoria = $this->model->FiltroGen($this->Categoria);
      $Juegos = $this->model->GetJuegos();
      $Genero = $this->model->GetGeneros();
      $this->view->Home($Juegos,$Genero,$this->GetAll, $this->Detalle, $this->Categoria);
    }elseif(isset($_POST['GetAll'])){
      $this->GetAll = $_POST['GetAll'];
      $Juegos = $this->model->GetJuegos();
      $Genero = $this->model->GetGeneros();
      $this->view->Home($Juegos,$Genero,$this->GetAll, $this->Categoria, $this->Detalle);
    }else{
      $Juegos = $this->model->GetJuegos();
      $Genero = $this->model->GetGeneros();
      $this->view->Home($Juegos,$Genero,$this->GetAll, $this->Detalle, $this->Categoria);
    }
  }
  function MostrarDetalle(){
  $ID= (isset($_POST['DetallesOk']));
  if (isset($ID)){
  $this->Detalle = $this->model->GetDetalle($ID);
  $this->DescripcionView->MostrarDetalle($this->Detalle,$ID);
}
}
}
 ?>
