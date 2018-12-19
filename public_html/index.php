<!doctype html>
<html lang="pt-BR">
    <?php
    require_once '../vendor/autoload.php';
    require_once '../Config/Configurar.php';
    ?>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo _CAMINHO_IMG_; ?>logo.ico" >
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <title>Sistema</title>
    </head>
    <header class="navbar navbar-light" style="background-color: #e3f2fd;">
        <nav class="nav">
            <a class="btn btn-primary" href="Inicial">Inicial</a>
            <a class="nav-link" href="Login">Login</a>
            <a class="nav-link" href="Cadastrar">Cadastrar</a>
            <a class="nav-link" href="404">Erro</a>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dowload</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= _CAMINHO_FILE_ ?>astah.rar">Astah</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= _CAMINHO_FILE_ ?>Pacotes_Wamp.zip">Pacotes WampServer</a>
                </div>
            </li>    
        </nav>
    </header>
    <body>
        <div class="container" >
            <?php
            $dispachante = new \App\Dispatch();
            ?>  
        </div>    

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>