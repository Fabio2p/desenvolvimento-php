jQuery(function(){
  
  // inicio da rotina de cliente
  jQuery('#cliente').click(function(){
	jQuery('.s').html(
				"<button class='btn navbar-btn btn-clear' type='button' data-toggle='dropdown'>Cliente"+
					
					"<span class='caret'></span>"+
				
				"</button>"+
					
					"<ul class='dropdown-menu t'>"+
						
					"<li id='novo'><a href='index.php?option=cliente&view=novo'>Novo</a></li>"+
						
					"<li><a href='index.php?option=cliente&view=consultar' id='consultar'>Consultar</a></li>"+
				
				"</ul>");
	
	}); // fim da rotina de cliente 



 // inicio da rotina de solicitacao
 jQuery('#solicitacao').click(function(){
		
	jQuery('.s').html(
				"<button class='btn navbar-btn btn-clear' type='button' data-toggle='dropdown'>Solicitação"+
				   "<span class='caret'></span>"+
				"</button>"+
				    "<ul class='dropdown-menu t'>"+
				      "<li><a href='#'>Nova</a></li>"+
				      "<li><a href='#'>Consultar</a></li>"+
				    "</ul>");

	}); // fim da rotina de solicitacao


 // inicio da rotina de produto
 jQuery('#produto').click(function(){

	jQuery('.s').html(
					"<button class='btn navbar-btn btn-clear' type='button' data-toggle='dropdown'>Produto"+
		 			  "<span class='caret'></span>"+
		 			"</button>"+
						"<ul class='dropdown-menu t'>"+
							"<li><a href='#'>Cadastrar</a></li>"+
							"<li><a href='#'>Estoque</a></li>"+
							"<li><a href='#'>Consultar</a></li>"+
						"</ul>"
					);

	}); // fim da rotina produto

	jQuery('li#novo a').click(function(){

		alert();
		
	});


});