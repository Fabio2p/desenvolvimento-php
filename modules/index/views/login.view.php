<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="<?= BASE_SITE ?>/css/style.css" />
</head>
<body>
	<?php
		/*
		*chama a classe App
		*
		* Adiciona o token $_SESSION['token'];
		*
		*/ 
		App::token(); 

	?>
	<div class="container">
	
	<div class="container_form">

		<form action="?module=login&option=pagina-de-login&view=index" method="post">
			 
			<div class="input">
				
				<label>Login</label>
				
				<input type="text" name="login">

				<label>Senha</label>
				
				<input type="password" name="senha">
				
				<input type="hidden" name="token" value="<?= $_SESSION['token']; ?>" />
				
				<input type="submit" value="Acessar" class="btn-submit" />

			</div>
		</form>

	</div>
	
</body>
</html>