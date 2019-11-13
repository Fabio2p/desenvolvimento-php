<?php
/**
 * Author: Fábio Silveira dos Anjos
 * 
 * AuthorEmail: fabio.s.a.proweb@gmail.com
 * 
 * data: 12-11-2019
 * 
 * Classe database: responsável pela a conexão com a base de dados
 */

class Database{

    /**
     * Atribute: $conn
     */
    private static $conn = null;

    /**
     * Método setConn(): atribui os valores necessário para a conexão
     * 
     */
    public static function setConn($host, $base, $user,$pass){

       // require_once(realpath('../config/config.db.php'));
        
        try {
            
            if(self::$conn == null):
                
                $chars = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF-8"];

                $dsn = "mysql:host=".$host.";dbname=".$base;

                self::$conn = new PDO($dsn, $user,$pass);

                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            endif;

            
            return self::$conn;


        } catch (PDOException $e) {
            
            if($e->getCode() == '2002'):

                echo "<b>Servidor</b> não localizado!";

            endif;    

            if($e->getCode() == '1049'):

                echo "<b>Banco de dados</b> não localizado!";

            endif;

        }

    }

    /**
     * Atributo getConn(): recupera os dados para serem utilizados 
     * em classes herdeiras
     * 
     */
    /*protected function getConn(){
        
        return self::setConn();
    }*/
    
}
