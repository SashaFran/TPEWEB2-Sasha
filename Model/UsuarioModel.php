<?php

class UsuarioModel{

  private $db;


function __construct()
  {
  $this->db = $this->Connect();
  }

  //se coneecta, hace la consulta y retorna los juegos
private function Connect()
  {
  return new PDO('mysql:host=localhost;' . 'dbname=videojuegos;charset=utf8' , 'root' , '');
  }

  function GetUsuario($Usuario){

    $sentencia = $this->db->prepare("SELECT * from usuario WHEN Usuario=?");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function InsertarUsuario($Usuario, $Contraseña){

    $sentencia = $this->db->prepare("INSERT INTO Usuario(Usuario, Contraseña) VALUES(?,?)");
    $sentencia->execute(array($Usuario, $Contraseña));
  }

}
  ?>
