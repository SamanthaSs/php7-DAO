<?php

spl_autoload_register(function($class_name){

	$filename = "class" . DIRECTORY_SEPARATOR . $class_name.".php"; // A partir da pasta DAO - pasta classe - constante de repositório - nome da classe

	if(file_exists(($filename))){ //Se o arquivo com o nome da classe existir 

		require_once($filename); //puxa as configurações para config.php

	}
	

});




?>