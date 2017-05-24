<DOCTYPE html>

<!-- La page de layout va nous permettre d'afficher tout le contenu que l'on souhaite. Ce contenu changera dynamiquement en fonction du controller et de l'action choisi par l'utilisateur. -->

<?php 
session_start();
?>

<html>

	<head>
		<title>CVS Intranet</title>
	</head>

	<body>

		<header>


			<?php 
			// On requiert routes.php qui va nous permettre d'appeler les controllers et leurs actions.
			require_once('routes.php'); 
			?>

		</header>

		<nav>
		</nav>

		<footer>
		</footer>

	</body>

</html>