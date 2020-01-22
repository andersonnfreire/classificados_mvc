<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Meu site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/style.css" />
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo BASE_URL; ?>">Classificados</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <?php if (isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo BASE_URL; ?>anuncio/MeusAnuncios">Meus Anúncios</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo BASE_URL; ?>usuario/sair">Sair</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo BASE_URL; ?>usuario/cadastrar">Cadastrar</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?php echo BASE_URL; ?>usuario/login">Login</a></li>
                            <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav><br><br><br>


        <?php $this->loadViewInTemplate($viewName, $viewData); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

    </body>
</html>