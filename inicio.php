<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Gestão Sites</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SITES</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="?page=painel">Painel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novo">Cadastro Site</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Site</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=novousuario">Cadastro Usuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?page=listarusuario">Listar Usuário</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
          include("conexao.php");
          switch(@$_REQUEST["page"]){
            case "novo":
              include("./site/novo-site.php");
            break;
            case "listar":
              include("./site/listar-site.php");
            break;
            case "salvar":
              include("./site/salvar-site.php");
            break;
            case "editar":
              include("./site/editar-site.php");
            break;
            case "painel":
              include("./site/painel.php");
            break;

            case "novousuario":
              include("./usuario/novo-usuario.php");
            break;
            case "listarusuario":
              include("./usuario/listar-usuario.php");
            break;
            case "salvarusuario":
              include("./usuario/salvar-usuario.php");
            break;
            case "editaruser":
              include("./usuario/editar-usuario.php");
            break;
            default:
              include("./site/painel.php");
          }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>