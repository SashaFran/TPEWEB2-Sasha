{include file = "header.tpl"}
      <div class="cuerpoDetalle" id="Cuerpo">

      {foreach from=$Detalles item=Detalle}

      <div class="infoTitulo">
        <h2>{$Detalle['Titulo']}</h2>
      </div>
      <div class="descripcion">
      <div class="info">
        <h5 class="infoGame">Genero: {$Detalle['Genero']} |</h5>
        <h5 class="infoGame">Consola: {$Detalle['Consola']} |</h5>
        <h5 class="infoGame">Precio: $ {$Detalle['Precio']}</h5>
      </div>
        <h5>Descripcion:</h5>
        {$Detalle['Descripcion']}<br>
      </div>
      {/foreach}

      </div>

      <div class="footer">
      <nav class="nav nav-pills nav-fill">
        <p class="nav-item nav-link" class="pie">Siguenos en nuestras redes sociales: </p>
        <a class="nav-item nav-link" class="pie" href="http://facebook.com">Facebook <img src="image/Facebook.png" id="Redsocial"/></a>
        <a class="nav-item nav-link" class="pie" href="http://twitter.com">Twitter <img src="image/Twitter.jpg" id="Redsocial"/></a>
        <a class="nav-item nav-link" class="pie" href="http://Instagram.com">Instagram <img src="image/Instagram.png" id="Redsocial"/></a>
      </nav>
      </div>
      <script src="JS/PartialRender.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
      </html>
