<?php
/**
 * Author: Fábio Silveira dos Anjos
 * 
 * AuthorEmail: fabio.s.a.proweb@gmail.com
 * 
 * data: 17-08-2019
 * 
 * Classe Home: carrega a pagina inicial da app
 * 
 */
class Home extends Controller{

    public function index(){
        
            /**
             * carrega a view login.view.php em:
             * 
             * ../modules/index/views/login.view.php
             */
          //$this->view('/index', 'login');
       	

         $data = new Database();

         $teste = $data->setConn('127.0.0.1', 'devel_laravel', 'F@bio', 'F@bio5505');

         $sql = "SELECT * FROM users";

         $t =  $teste->prepare($sql);

         $t->setFetchMode(PDO::FETCH_OBJ);

         $t->execute();

         var_dump($t->fetchAll());


    }

    public function conexaojoomla(){

    	 $data = new Database();

         $teste = $data->setConn('127.0.0.1', 'devel_joomla', 'F@bio', 'F@bio5505');

         $sql = "SELECT * FROM xoq3x_users";

         $t =  $teste->prepare($sql);

         $t->setFetchMode(PDO::FETCH_OBJ);

         $t->execute();

         var_dump($t->fetchAll());

    }

}