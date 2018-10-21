<?php defined('BASEPATH') 	or die;?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $view_title; ?></title>
	
	<link rel="stylesheet" href="<?=base_url?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url?>/css/style.css">
	<link rel="stylesheet" href="<?=base_url?>/css/google-font.css">
</head>
<body class="bg-body">
		<form action="?option=home&view=login" method="post" name="form-login" class="form-login">
			<fieldset>
				<legend class="legend">Efetuar login</legend>
				<label  class="label" for="usuario">Uusário</label>
				<input  class="input-text"type="text" name="usuario">
				<label  class="label" for="senha">Senha</label>
				<input  class="input-password" type="password" name="senha">

				<input  class="button-submit" type="submit" name="submit" value="Acessar">
			</fieldset>
		</form>
</body>
</html>