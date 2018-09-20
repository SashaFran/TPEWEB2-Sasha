<?php

  Function Home(){
    $Titulo = "Bienvenido Administrador: ";
    $db = new PDO('mysql:host=localhost;' . 'dbname=videojuegos;charset=utf8' , 'root' , '');

    //variable sentencia
    //Prepara y pide traer todas las partes de la tabla "edicion"
    $sentencia = $db->prepare( "select * from juego");
    //Luego ejecuta la sentencia preparada.
    $sentencia -> execute();

    //Preparo, ejecuto, fetch.
    //se crea un arreglo y este trae todo.
    while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
      //echo '<li>'.$traer['Titulo'].': '.$traer['Descripcion'].': '.$traer['Precio'].'</li>';
       echo ('<li class="list-group-item">'."Titulo: " . $array["Titulo"]."<br>" . "Descripcion: ". $array["Descripcion"]."</br>"."Precio: $" . $array["Precio"] ."</br>" . '<a href="borrar/'.$array['ID_Juego'].'">BORRAR</a>'.'</li>');
      }
    }


//fetchAll(); trae todas las filas
 ?>
