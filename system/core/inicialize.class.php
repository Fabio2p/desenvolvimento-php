<?php
// class Inicialize: inicializa a applicaчуo
class Inicialize{
	private $option 	= null;
	private $view   	= null;
	private $controller	= null;
	
	private function setOption(){
		
		$this->option = filter_input(INPUT_GET, 'option', FILTER_SANITIZE_URL);
		
		if(empty($this->option)):
			
			header('Location: ?option=home');
			
		endif;
	}
	
	private function setView(){
		
		$this->view = filter_input(INPUT_GET, 'view', FILTER_SANITIZE_URL);
	}
	
	public function run(){
		
		$this->setOption();
		
		$this->setView();
		
		$path = $_SERVER['DOCUMENT_ROOT'].'/sob-demanda/application/controllers/'.$this->option.'.class.php';
		
		if(file_exists($path)): // verifica se existe o arquivo informado
			
			require_once($path);
			
			if(class_exists($this->option)): // verifica se a classe existe
				
				$this->controller = new $this->option;
				
				$metodo = (empty($this->view) || $this->view == null ? 'index': $this->view);
				
				if(method_exists($this->controller, $metodo)): // verifica se o metodo existe na classe
					
					$this->controller->$metodo();
					
					else:
					
					echo "Metodo nao existe";
					
				endif; // method_exists: fim da verificaчуo
				
				else:
				
				echo "Classe nao existe!";
				
			endif; // class_exists: fim da verificaчуo
			
			else:
				
			echo "Arquivo nуo existe!";	
			
		endif; // files_exists: fim da verificaчуo
	}
	
}
?>