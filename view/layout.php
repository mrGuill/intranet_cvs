<!DOCTYPE html>

<!-- La page de layout va nous permettre d'afficher tout le contenu que l'on souhaite. Ce contenu changera dynamiquement en fonction du controller et de l'action choisi par l'utilisateur. -->

<html>

	<head>
		<meta charset="UTF-8">
		<title>CVS | INTRANET</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	</head>

	<div class="container">

		<?php

		require_once('element/header.php');
		 
		if (isset($_SESSION['loggedin'])){
			require_once('element/nav.php');
		} else {}
		?>

		<body>

			<?php 
				// On requiert routes.php qui va nous permettre d'appeler les controllers et leurs actions.
				require_once('routes.php'); 
			?>
		</body>

		<?php 
		
		if (isset($_SESSION['loggedin'])){
			require_once('element/footer.php');
		} else {}

		?>

	</div>

</html>