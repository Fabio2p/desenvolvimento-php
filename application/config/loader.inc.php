<?php



define('base_url', '/sob-demanda');

function __autoload($class){
	
	$path = ['/../../system/core/','/../../system/database/','/../../system/helpers/'];
	
		foreach($path as $file):
			
			if(file_exists(__DIR__."\\{$file}\\{$class}.php") && !is_dir(__DIR__."\\{$file}\\{$class}.php")):
				
				include_once __DIR__."\\{$file}\\{$class}.php";
				
			endif;
			
		endforeach;
	
}
?>