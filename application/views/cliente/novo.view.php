<html>
<head>
	<title><?php echo $view_title; ?></title>
	
</head>
<body>

<div class="container">

	<div class="container-cliente">
	<div class="row-fluid">
		<div class="col-md-5 form-border">
			
				<h3>Cadastrar novo cliente</h3>
				<hr />

				<form action="" method="post">
					
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="nome" class="form-control" placeholder="Nome do Cliente">
						</div>	
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							<input type="text" name="nome" class="form-control" placeholder="Celular do Cliente">

							<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
							<input type="text" name="nome" class="form-control" placeholder="Telefone fixo do Cliente">
						</div>	
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
							<input type="text" name="nome" class="form-control" placeholder="Endereço do Cliente">
						</div>	
					</div>

					<input type="submit" class="btn btn-primary btn-custon" name="register" value="Cadastrar" />
				</form>
		</div>	

		<div class="col-md-5 form-border-last">
			<div class="container-cadastro">
				<h3>Ultimos clientes cadastrado</h3>
				<hr />
				<ul class="ultimos-cadastro">
					<li><a href="#">Fabio Silveira dos anjos</a></li>
					<li><a href="#">Paula p.da Silva</a></li>
					<li><a href="#">Pablo d. silva</a></li>
				</ul>	
			</div>
		</div>	
	</div>	
 </div>	
</div>

<div class="border-divider"></div>

</body>
<</html>