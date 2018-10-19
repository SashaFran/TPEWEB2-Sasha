<h2 class="items">Lista de generos</h2>
<table class='table'>
{foreach from=$generos item=genero}
<li>Id: {$genero['ID_Genero']} | Genero: {$genero['Genero']}<hr></li>
{/foreach}
</table>


<h2 class="items">Lista de juegos</h2>
<table class='table'>
{foreach from=$juegos item=juego}
<li> ID: {$juego['ID_Juego']} <h4>Titulo: {$juego['Titulo']}</h4><hr>Consola: {$juego['Consola']}<br>Genero: {$juego['Genero']} (Id:  {$juego['ID_Genero']})<br>Precio: ${$juego['Precio']}<br>Descripcion: <br>{$juego['Descripcion']}<br><hr></li>
{/foreach}
</table>
