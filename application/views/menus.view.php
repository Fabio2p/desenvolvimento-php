<!DOCTYPE html>
<html>
<head>
	<title><?php echo $view_title; ?></title>
	<script src="<?=base_url?>/js/jquery.min.js"></script>
	<script src="<?=base_url?>/js/style.js"></script>
	<script src="<?=base_url?>/js/bootstrap.min.js"></script>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="<?=base_url?>/css/style.css">
	<link rel="stylesheet" href="<?=base_url?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url?>/css/google-font.css">


</head>
<body class="bc-body">
	<!-- Barra de navegação e menus -->

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php?option=home&view=login" class="navbar-brand">ALDTECK - INFORMÁTICA</a>
			</div>
			<div class="dropdown navbar-left">
				<button class="btn navbar-btn" type="button" data-toggle="dropdown">
					Menus<span class="caret"></span>
				</button>
				<ul class="dropdown-menu">
					<li><a href="#" id="cliente">Cliente</a></li>
					<li><a href="#" id="solicitacao">Solicitações</a></li>
					<li><a href="#" id="produto">Produtos</a></li>
				</ul>
			</div>

			<div class="dropdown nav navbar-nav nav-position s"></div>

			<!-- Opções do usuario -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="glyphicon glyphicon-user">Usuario</a></li>
			</ul>
			<!-- fim da opção do usuario -->
</nav>
<!--fim da barra de navegação e menus -->

	<!-- Formulário de busca -->
	<div class="container-fluid">
		<div class="row">
			<form class="form-inline form-custom">
				<input type="text" name="name" class="form-control custom-name"  placeholder="Pesquisar por nome" />
				<input type="text" name="by_code" class="form-control" placeholder="Pesquisar por código" />
				<button type="button" class="btn btn-primary">Buscar</button>
			</form>
			</div>
		</div>
	<!-- Fim do formulário de busca -->