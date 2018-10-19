<?php

class IndexModel{

  private $db;


function __construct()
  {
  $this->db = new PDO('mysql:host=localhost;' . 'dbname=videojuegos;charset=utf8' , 'root' , '');
  }

  //se coneecta, hace la consulta y retorna los juegos

  function Mostrar($Titulo){
    $Titulo = "Venta de VideoJugos";


  return $Titulo;
}

Function GetJuegos(){

      $Titulo = "Bienvenido Administrador: ";
      //explicacion
      $sentencia = $this->db->prepare( "SELECT juego.*, genero.* from juego, genero where juego.ID_Genero = genero.ID_Genero");
      $sentencia -> execute();
      $Juegos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
      //echo ('<li class="list-group-item">'."Numero de 'ID': ". $Juegos["ID_Juego"]."</br>" ."Titulo: " . $Juegos["Titulo"]."</br>" . "Descripcion: ". $Juegos["Descripcion"]."</br>"."Precio: $" . $Juegos["Precio"]."</br>" .$Juegos["ID_Juego"]."</br>". $Juegos["Genero"]> . '</li>'");

      return $Juegos;

}
  function GetGeneros()  {
    $sentencia= $this->db->prepare("SELECT * FROM genero");
    $sentencia->execute();
    $Genero = $sentencia->fetchAll(PDO::FETCH_ASSOC);
  //  echo ('<li class="list-group-item">'."Numero de 'ID': ". $Genero["ID_Genero"]."</br>"."Genero: ".$Genero["Genero"]. "</li>");


    return $Genero;
  }
//POST no necesita parametros
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
      header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
      }

function EditarJuego($Titulo,$ID_Genero,$Descripcion,$Precio,$Consola,$ID_Juego){
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

function EditarGenero($Generos,$ID_Genero){

      $ID_Genero = $_GET['inputGENEROedit'];
      $Generos = $_GET['GenerodelJuego'];
      $sentencia = $this->db->prepare("UPDATE genero set Genero=? where ID_Genero=?");
      $sentencia->execute(array ($Generos, $ID_Genero));
      header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

//POST no necesita parametros
function AgregarGenero(){

  $Generos = $_GET['inputGENEROagregar'];
  $sentencia = $this->db->prepare("INSERT INTO genero (Genero) VALUES (?)");
  $sentencia->execute (array ($Generos));
  header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

function BorrarGenero($Generos){
  $Generos = $_GET['inputGENEROagregar'];
  $sentencia = $this->db->prepare("DELETE FROM Genero where genero=?");
  $sentencia -> execute(array ($Generos));
  header("Location:http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

function GetDetalle($ID){
  //explicacion
  $sentencia = $this->db->prepare("SELECT juego.*, genero . Genero from juego, genero where juego . ID_Juego = ? and juego . ID_Genero = genero . ID_Genero");
  $sentencia->execute(array($ID));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

function FiltroGen($Categoria){
  $sentencia= $this->db->prepare("SELECT juego.*, genero . Genero from juego, genero WHERE  juego . ID_Genero = ? and juego . ID_Genero = genero . ID_Genero");
  $sentencia->execute(array($Categoria));
  return $sentencia->fetchAll(PDO::FETCH_ASSOC);
}

}

 ?>
