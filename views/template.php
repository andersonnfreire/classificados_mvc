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
                <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="<?php echo BASE_URL; ?>" class="navbar-brand">Classificados</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
						<li><a href="<?php echo BASE_URL; ?>anuncio/MeusAnuncios">Meus Anúncios</a></li>
						<li><a href="<?php echo BASE_URL; ?>usuario/sair">Sair</a></li>
					<?php else: ?>
						<li><a href="<?php echo BASE_URL; ?>usuario/cadastrar">Cadastre-se</a></li>
						<li><a href="<?php echo BASE_URL; ?>usuario/login">Login</a></li>
					<?php endif; ?>
				</ul>
			</div>
		</nav>
		
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>

		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>