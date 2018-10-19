<h2>Todos los juegos</h2>
  <form action="MostrarDetalle" method="post">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Titulo</th>
          <th scope="col">Consola</th>
          <th scope="col">Genero</th>
        </tr>
      </thead>
      <tbody>
          {foreach from=$Juego item=juego}
          <tr>
            <td><button class="btn btn-primary" type="submit" value="{$juego['ID_Juego']}">{$juego['Titulo']}</button></td>
            <td>{$juego['Consola']}</td>
            <td><button class="btn btn-primary" type="submit" name="SeleccionGenero" formaction="Filtro" value="{$juego['ID_Genero']}">{$juego['Genero']}</button></td>
          </tr>
          {/foreach}
      </tbody>
    </table>
</form>
