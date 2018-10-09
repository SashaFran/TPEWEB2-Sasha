<?php

class IndexModel{

  private $db;


function __construct(){

  $this->db = Connect();

  }

  //se coneecta, hace la consulta y retorna los juegos
private function Connect(){

  return new PDO('mysql:host=localhost;' . 'dbname=videojuegos;charset=utf8' , 'root' , '');

    }

Function GetJuegos(){
      $db = Connect();
      $Titulo = "Bienvenido Administrador: ";
      $sentencia = $db->prepare( "SELECT * FROM juego");
      $sentencia -> execute();
      $Juegos = $sentencia->fetchAll(PDO::FETCH_ASSOC)){
      echo ('<li class="list-group-item">'."Numero de 'ID': ". $Juegos["ID_Juego"]."</br>" ."Titulo: " . $Juegos["Titulo"]."</br>" . "Descripcion: ". $Juegos["Descripcion"]."</br>"."Precio: $" . $Juegos["Precio"]."</br>" .$Juegos["ID_Juego"]."</br>". $Juegos["Genero"]> . '</li>'");

      return $Juegos
      }
    }

  function GetGeneros()  {
    $sentencia= $this->db->prepare("SELECT * FROM genero");
    $sentencia->execute();
    $Genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    echo ('<li class="list-group-item">'."Numero de 'ID': ". $Genero["ID_Genero"]."</br>"."Genero: ".$Genero["Genero"]. "</li>");


    return $Genero;
  }

function InsertarJuego(){

      $Titulo =  isset($_POST["inputTITULO"]);
      $Descripcion = isset($_POST["inputDESCRIPCION"]);
      $Precio = isset($_POST["inputPRECIO"]);
      $ID_Genero  = isset($_POST["inputGENERO"]);
      $Consola = isset($_POST["inputCONSOLA"]);

      $db = Connect();
      $sentencia = $db->prepare("INSERT INTO juego(Titulo,ID_Genero,Descripcion,Precio,Consola) VALUES (?,?,?,?,?)" );
      $sentencia->execute(array($Titulo,$ID_Genero,$Descripcion,$Precio,$Consola));
    //  header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
    }//El header me tira error de linea.

function BorrarJuego($ID_Juego){
      $idJuego = $_GET['inputIDBorrar'];
      $db = Connect();
      $sentencia = $db->prepare( "DELETE FROM juego where ID_Juego=?");
      $sentencia -> execute(array($idJuego,$ID_Juego));

      //  if(['check1'] == true){
        //  BorrarJuego();
        //}
     header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
      }

function EditarJuego(){
        $Titulo =  isset($_GET["inputTITULOedit"]);
        $Descripcion = isset($_GET["inputDESCRIPCIONedit"]);
        $Precio = isset($_GET["inputPRECIOedit"]);
        $ID_Genero  = isset($_GET["inputGENEROedit"]);
        $Consola = isset($_GET["inputCONSOLAedit"]);
        $ID_Juego = isset($_GET["inputIDeditar"]);

        $db = Connect();
        $sentencia = $db->prepare("UPDATE juego SET Titulo=?, ID_Genero=?, Descripcion=?, Precio=? ,Consola=?, ID_Juego=?");
        $sentencia->execute(array($Titulo,$ID_Genero,$Descripcion,$Precio,$Consola,$ID_Juego));
        header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
      }

function EditarGenero(){

      $ID_Genero=$_GET['inputGENEROedit'];
      $Genero=$_GET['GenerodelJuego'];
      $sentencia = $this->db->prepare("UPDATE genero set Genero=? where ID_Genero=?");
      $sentencia->execute(array ($Genero,$ID_Genero));
      header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

function AgregarGenero(){

  $Genero=$_GET['inputGENEROagregar'];
  $sentencia = $this->db->prepare("INSERT INTO genero (Genero) VALUES (?)");
  $sentencia->execute (array ($Genero));
  header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

function BorrarGenero(){
  $Genero=$_GET['inputGENEROagregar'];
  $sentencia = $this->db->prepare("DELETE FROM Genero where genero=?");
  $sentencia -> execute(array ($Genero));
  header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}
}

 ?>
