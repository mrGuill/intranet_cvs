<?php

// La fonction call permet d'attribuer une action à un controller;
function call ($controller, $action){
	require_once('controller/'.$controller.'Controller.php');

	switch($controller){
		case 'pages':
			$controller = new pagesController();
			break;
		case 'auth':
			$controller = new authController();
			break;
	}

	$controller->$action();
}

call($controller, $action);

?>