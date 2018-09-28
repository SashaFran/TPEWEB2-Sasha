
"use strict";
document.addEventListener('DOMContentLoaded', Inicio);
document.getElementById('Home').addEventListener('click', Inicio);
document.getElementById('Accion').addEventListener('click', Accion);
document.getElementById('Aventura').addEventListener('click', Aventura);
document.getElementById('Terror').addEventListener('click', Terror);
document.getElementById('Traertodo').addEventListener('click', TraerTodo);
document.getElementById('Traertodo1').addEventListener('click', Traertodo1);
document.getElementById('PS4').addEventListener('click', playcuatro);
document.getElementById('PS3').addEventListener('click', playtres);
document.getElementById('PC').addEventListener('click', pc);
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

  function TraerTodo(){
    let contenedor = document.querySelector('.contenedor');
    fetch("Route/traertodo.php",{
    })
    .then(function (response){
        response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
        console.log(response);
    })
    .catch(function(response){
      contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
    })

  }
  function Traertodo1(){
    let contenedor = document.querySelector('.contenedor');
    fetch("Route/traertodo.php",{
    })
    .then(function (response){
        response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
        console.log(response);
    })
    .catch(function(response){
      contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
    })

  }
  function playcuatro(){
    let contenedor = document.querySelector('.contenedor');
    fetch("Route/PS4.php",{
    })
    .then(function (response){
        response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
        console.log(response);
    })
    .catch(function(response){
      contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
    })

  }
  function playtres(){
    let contenedor = document.querySelector('.contenedor');
    fetch("Route/PS3.php",{
    })
    .then(function (response){
        response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
        console.log(response);
    })
    .catch(function(response){
      contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
    })

  }
  function pc(){
    let contenedor = document.querySelector('.contenedor');
    fetch("Route/PC.php",{
    })
    .then(function (response){
        response.text().then(text=> document.querySelector(".contenedor").innerHTML = text);
        console.log(response);
    })
    .catch(function(response){
      contenedor.innerHTML= "<h1>Error - Conection Failed!</h1>"
    })

  }
