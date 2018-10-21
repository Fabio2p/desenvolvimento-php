<?php
class Cliente extends Controller{
	
	public function novo(){
		
		$dados['title'] = 'Cliente: Novo';
		
		$this->view('menus', $dados);

		$this->view('cliente/novo');
	
	} // fim do metodo
	
	public function consultar(){
		
		$dados['title'] = 'Cliente: Consultar';
		
		$this->view('menus', $dados);

		$this->view('cliente/consultar');
	}
	
} // fim da classe
?>