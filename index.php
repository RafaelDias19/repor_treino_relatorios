<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="signin.css" rel="stylesheet"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tabela</title>


    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
            <a class="navbar-brand" href="./index.php?p=index">Teste</a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsite" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarsite">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" active href="./index.php?p=cadastrar">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?p=consulta">Consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php?p=exportar">Gerar Relatório Geral</a>
                    </li>
                </ul>
            </div>
        </nav>

    </div>


  </head>
  <body >

       
    <?php
            $pag = @$_GET['p'];
            if($pag=='index'){
                require_once "home.php"; 
            }
            if ($pag=='cadastrar') {
                require_once 'cadastrar.php';
            }
            if($pag=='consulta'){
                require_once 'consulta.php';
            }
            if($pag=='exportar'){
                require_once 'exibir.php';
            }
           
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

 
