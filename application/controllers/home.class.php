<?php
class Home extends Controller{

public function index(){
	$dados['title'] = 'Efetuar login';
	
	$this->view('home',$dados);
}

public function login(){
	
	header('Location: ?option=home&view=administracao');
}	


public function administracao(){
	
	$dados['title'] = 'Painel Administrativo';
	
	$this->view('menus', $dados);

	$this->view('content');
}

}
?>