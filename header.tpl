 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Minimalismo </title>

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"></link>
    <link rel="icon" href="images/aguacate.png?v1" type="image/x-icon" />
<link rel="shortcut icon" href="images/aguacate.png?v1" type="image/x-icon" />
</head>


 <nav class="navbar navbar-expand-lg fixed-top ">
        <a class="navbar-brand" href="inicio" id="marcaMinimalismo"> MINIMALISMO </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            id="navResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-4">
                <li class="nav-item">
                    <a class="nav-link" data-value="about" href="admin"> Administrador </a> </li>

  <div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="revistas" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Revistas</a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    {foreach $categorias as $categoria}
    <a class="dropdown-item" href="revistas/{$categoria['id_categorias']}">{$categoria['categoria']}</a>
    {/foreach}
  </div>
</div>
            </ul>
        </div>
    </nav>
