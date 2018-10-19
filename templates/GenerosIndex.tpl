<h2>Juegos por genero</h2>
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
          {foreach from=$Categorias item=Categoria}
          <tr>
          <td>
            <button type="submit" class="btnDet" name="DetallesOk" value="{$Categoria['ID_Juego']}">{$Categoria['Titulo']}
            </button>
          </td>
          <td>{$Categoria['Consola']}</td>
          <td>{$Categoria['Genero']}</td>
          </tr>
          {/foreach}
      </tbody>
    </table>
</form>
