<?php

class authController {

	public function auth() {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username = htmlspecialchars($username);
		$password = htmlspecialchars(md5($password));

		$instance = databaseController::instance();
		$connection = $instance->connection();
		$sql = ('SELECT username, password FROM user WHERE username="'.$username.'" AND password="'.$password.'"');
		$request = $connection->query($sql);
		$result = $request->fetchAll();
		
		if (!empty($result)){
			
			$params = '?controller=pages&action=home';
			header('Location: index.php'.$params);
			
		} else {
			echo "Username or password incorrect.";
		}
	}
}


?>