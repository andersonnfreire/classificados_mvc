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
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
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
        </nav>


        <?php $this->loadViewInTemplate($viewName, $viewData); ?>



        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery.min"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

    </body>
</html>