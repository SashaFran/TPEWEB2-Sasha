
"use strict";
document.addEventListener('DOMContentLoaded', Inicio);
document.getElementById('Home').addEventListener('click', Inicio);
document.getElementById('Accion').addEventListener('click', Accion);
document.getElementById('Aventura').addEventListener('click', Aventura);
document.getElementById('Terror').addEventListener('click', Terror);

function Inicio(){
  let contenedor = document.querySelector('.contenedor');
  fetch("HTML/Inicio.html",{
  })
  .then(function (response){
      response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
      console.log(response);
  })
  .catch(function(response){
    contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
  })
}

function Accion(){
  let contenedor = document.querySelector('.contenedor');
  fetch("Route/Accion.php",{
  })
  .then(function (response){
      response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
      console.log(response);
  })
  .catch(function(response){
    contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
  })
}
function Aventura(){
  let contenedor = document.querySelector('.contenedor');
  fetch("Route/Aventura.php",{
  })
  .then(function (response){
      response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
      console.log(response);
  })
  .catch(function(response){
    contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
  })
}
function Terror(){
  let contenedor = document.querySelector('.contenedor');
  fetch("Route/Terror.php",{
  })
  .then(function (response){
      response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
      console.log(response);
  })
  .catch(function(response){
    contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
  })
}
