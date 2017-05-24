<?php

require_once('connection.php');

// On instancie la base de données.
$instance = databaseController::instance();
$connection = $instance->connection();

// On identifie à quelle type de requête le serveur fait-il affaire.
$method = $_SERVER['REQUEST_METHOD'];

// Selon le type de requête, on execute des commandes différentes.
switch ($method) {

	// Premier cas : méthode POST.
	case 'POST':

		$form = $_POST['form'];
		
		switch ($form) {

			case 'login':
			$controller = "auth";
			$action = "auth";
			break;
		}

		break;
	
	default:
		
		if (isset($_GET['controller']) && isset($_GET['action'])){
		// On récupère l'information de controller et d'action..
		$controller = $_GET['controller'];
		$action = $_GET['action'];
		} else {
		// Par défaut, on affichera la page login.php à l'aide du pagesController;
		$controller = "pages";
		$action = "login";
		}

		break;
}

require_once('view/layout.php');

?>