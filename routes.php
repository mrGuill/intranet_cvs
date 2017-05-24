<?php

// La fonction call permet d'attribuer une action à un controller et de l'apeller;
function call ($controller, $action, $arg = null){
	require_once('controller/'.$controller.'Controller.php');

	switch($controller){
		case 'pages':
			$controller = new pagesController;
			break;
		case 'auth':
			$controller = new authController;
			break;
		case 'user':
			$controller = new userController;
			break;
	}

	$controller->$action($arg);
}

call($controller, $action);

?>