<?php 
abstract class Base{

	private static $conn = null;

	private static function setConn(){

		if(self::$conn == null):

			try{


				
				
					
			}catch(PDOException $e){

				if($e->getCode() == '2002'):

					echo "HOST não encontrado!";
				endif;

				if($e->getCode() == '1049'):
					echo "Banco de Dados não encontrado!";
				endif;
			}

		endif;
	}
	
}
?>