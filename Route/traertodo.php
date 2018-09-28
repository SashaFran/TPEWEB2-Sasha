<?php

$db = new PDO('mysql:host=localhost;'
.'dbname=videojuegos;charset=utf8'
, 'root', '');

  $sentencia = $db->prepare( "select * FROM juego");
  $sentencia -> execute();


  while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
    echo ('<li class="list-group-item">'."Titulo: " . $array["Titulo"]."<br>" . "Descripcion: ". $array["Descripcion"]."</br>"."Precio: $" . $array["Precio"] ."</br>".'</li>'."</br>");
    }


//  while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
//    echo '<li>'.$traer['Titulo'].': '.$traer['Descripcion'].': '.$traer['Precio'].'</li>';
//   echo ("Titulo: " . $array["Titulo"] . "<br>");
//   echo ("Descripcion: " . $array["Descripcion"] . "<br>");
//  echo ("Precio: $" . $array["Precio"] . "<br>" . "</br>");
   ?>
