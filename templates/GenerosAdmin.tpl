<h2 class="items">Lista de Items</h2>
<table class='table'>
{foreach from=$juegos item=juego}
<li> ID: {$juego['ID_Juego']} <h4>Titulo: {$juego['Titulo']}</h4> <hr>Consola: {$juego['Consola']}<br> Genero: {$juego['Genero']} (ID: {$juego['ID_Genero']}) <br>Descripcion: {$juego['Descripcion']} <br>Precio: ${$juego["Precio"]}<br><hr></li>
{/foreach}
</table>;
