<?php

Function Home(){
$db = new PDO('mysql:host=localhost;'
.'dbname=videojuegos;charset=utf8'
, 'root', '');

  $sentencia = $db->prepare( "select * FROM juego WHERE juego.ID_Genero = 1");
  $sentencia -> execute();


  while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
    //echo '<li>'.$traer['Titulo'].': '.$traer['Descripcion'].': '.$traer['Precio'].'</li>';
     echo ("Titulo: " . $array["Titulo"] . "<br>");
     echo ("Descripcion: " . $array["Descripcion"] . "<br>");
     echo ("Precio: $" . $array["Precio"] . "<br>" . "</br>");

    }
  }

//fetchAll(); trae todas las filas
//https://disenowebakus.net/llevando-datos-de-la-base-mysql-a-las-paginas-php.php
//$sentencia = $db->prepare( "select * from juego");

//$sentencia -> execute();
//$Juegos = $sentencia->fetch(PDO::FETCH_ASSOC);

//while($fila = $sentencia->fetch(PDO::FETCH_ASSOC))
//{
//echo '<li>'.$fila['Titulo'].': '.$fila['Descripcion'].': '.$fila['Precio'].'</li>';
//}
//}
 ?>
