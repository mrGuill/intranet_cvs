<!DOCTYPE html>

<!-- La page de layout va nous permettre d'afficher tout le contenu que l'on souhaite. Ce contenu changera dynamiquement en fonction du controller et de l'action choisi par l'utilisateur. -->

<html>

	<head>
		<meta charset="UTF-8">
		<title>CVS Intranet</title>
	</head>

	<header>
	</header>

	<?php 
	if (isset($_SESSION['loggedin'])){
		require_once('pages/nav.php');
	} else {}
	?>

	<body>

		<?php 
			// On requiert routes.php qui va nous permettre d'appeler les controllers et leurs actions.
			require_once('routes.php'); 
		?>
	</body>

	<?php require_once('pages/footer.php'); ?>

</html>