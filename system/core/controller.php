<?php 
class Controller{
	
	protected function view($view, $dados = null){
		
		if(is_array($dados) && count($dados) > 0):
		
			extract($dados, EXTR_PREFIX_ALL, 'view');
					
		endif;
		
		$view_dir = $_SERVER['DOCUMENT_ROOT'].'/sob-demanda/application/views/'.$view.'.view.php';
		
		if(file_exists($view_dir)):
			
			require_once($view_dir);
			
			return $view;
			
			else:
			
			echo 'View não encontrada';
			
		endif;
	}

}
?>