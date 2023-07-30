<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco de Dados</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
      html
      {
        background-color: #F8F9FA;
        background-size: cover;
      }
      form
      {
        background-color: #F8F9FA;
        border-radius: 5px;
        color: gray;
      }
      h1
      {
        color: gray;
      }
      h3
      {
        text-align: center;
        color: gray;
        background-color: rgb(128, 128, 128, 0.1);
        border-radius: 100px;
      }
    </style>
</head>
<body>
<script src="js/bootstrap.bundle.min.js"></script>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastrar Jogador</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Jogador</a>
          </li>
      </ul>
    </div>
  </nav>
  </div>
  <br>
  <br>
  <h3>Cadastre os dados do seu jogador preferido de acordo com alguns dos parâmetros utilizados nos jogos modernos de futebol</h3>
</div>
<div class="container">
  <div class="row">
    <div class="col mt-5">
      <?php
      include("conf.php");
        switch(@$_REQUEST["page"])
          {
            case "novo":
              include("new.php");
              break;
            case "listar":
              include("list.php");
              break; 
            case "salvar": 
              include("save.php");
              break;
            case "editar": 
              include("edit.php");
              break;
            default:
          }
      ?>
    </div>

    <?php
    echo "<img src='img1.jpg'>";
    ?>
</body>
</html>