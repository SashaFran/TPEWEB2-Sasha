<?php
//PS3
$db = new PDO('mysql:host=localhost;'.'dbname=videojuegos;charset=utf8' , 'root', '');

  $sentencia = $db->prepare( "select * FROM juego WHERE juego.ID_Consola = 2");
  $sentencia -> execute();


  while($array = $sentencia->fetch(PDO::FETCH_ASSOC)){
    echo ('<li class="list-group-item">'."Titulo: " . $array["Titulo"]."<br>" . "Descripcion: ". $array["Descripcion"]."</br>"."Precio: $" . $array["Precio"] ."</br>".'</li>'."</br>");
    }


//fetchAll(); trae todas las filas
//https://disenowebakus.net/llevando-datos-de-la-base-mysql-a-las-paginas-php.php
 ?>
