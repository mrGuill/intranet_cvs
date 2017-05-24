<?php

class authController {

	public function auth() {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$username = htmlspecialchars($username);
		$password = htmlspecialchars(md5($password));

		$instance = databaseController::instance();
		$connection = $instance->connection();
		$sql = ('SELECT id, username, password FROM user WHERE username="'.$username.'" AND password="'.$password.'"');
		$request = $connection->query($sql);
		$result = $request->fetchAll();
		
		if (!empty($result)){
					
			$id = $result[0]['id'];	
			call('user', 'startSession', $id);

			$params = '?controller=pages&action=home';
			header('Location: index.php'.$params);
			
		} else {
			echo "Username or password incorrect.";
		}
	}
}


?>