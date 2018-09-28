<?php

/**
 *
 */
class IndexModel
{

  function __construct(argument)
  {
    // code...
  }

  //se contecta, hace la consulta y retorna los juegos
  private function Connect(){
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
}

 ?>
