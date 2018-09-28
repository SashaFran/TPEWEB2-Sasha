<?php



function Connect(){
    return new PDO('mysql:host=localhost;' . 'dbname=videojuegos;charset=utf8' , 'root' , '');
}

  Function GetJuegos(){

    $db = Connect();
    $Titulo = "Bienvenido Administrador: ";
    $sentencia = $db->prepare( "select * from juego");
    $sentencia -> execute();
    while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
       echo ('<li class="list-group-item">'."Numero de 'ID': ". $array["ID_Juego"]."<br>" ."Titulo: " . $array["Titulo"]."<br>" . "Descripcion: ". $array["Descripcion"]."</br>"."Precio: $" . $array["Precio"] . "</br>" ."Selecciona para editar o eliminar: ". '<input name="check1" type="checkbox" value="'.$array["ID_Juego"].'"> . </li>');
      }
    }
    //variable sentencia
    //Prepara y pide traer todas las partes de la tabla "edicion"
    //Luego ejecuta la sentencia preparada.
    //Preparo, ejecuto, fetch.
    //se crea un arreglo y este trae todo.
 function InsertarJuego(){

   $Titulo =  isset($_POST["inputTITULO"]);
   $Descripcion = isset($_POST["inputDESCRIPCION"]);
   $Precio = isset($_POST["inputPRECIO"]);
   $ID_Genero  = isset($_POST["inputGENERO"]);
   $ID_Consola = isset($_POST["inputCONSOLA"]);

   $db = Connect();
   $sentencia = $db->prepare("INSERT INTO juego(Titulo,ID_Genero,Descripcion,Precio,ID_Consola) VALUES (?,?,?,?,?)" );
   $sentencia->execute(array($Titulo,$ID_Genero,$Descripcion,$Precio,$ID_Consola));
  // header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
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
  $Titulo =  isset($_POST["inputTITULOedit"]);
  $Descripcion = isset($_GET["inputDESCRIPCIONedit"]);
  $Precio = isset($_GET["inputPRECIOedit"]);
  $ID_Genero  = isset($_GET["inputGENEROedit"]);
  $ID_Consola = isset($_GET["inputCONSOLAedit"]);
  $ID_Juego = isset($_GET["inputIDeditar"]);

  $db = Connect();
  $sentencia = $db->prepare("UPDATE juego SET Titulo=?, ID_Genero=?, Descripcion=?, Precio=? ,ID_Consola=?, ID_Juego=?");
  $sentencia->execute(array($Titulo,$ID_Genero,$Descripcion,$Precio,$ID_Consola,$ID_Juego));
  header("Location:  http://".$_SERVER["SERVER_NAME"]. dirname($_SERVER["PHP_SELF"]));
}

?>
