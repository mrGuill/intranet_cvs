<?php 

class userController {

	const CLASSDIR = 'model/';

	public function startSession($id){
		require_once(self::CLASSDIR.'User.php');
		$user = new User($id);

		$_SESSION['loggedin'] = true;
		$_SESSION['id'] = $user->getId();
		$_SESSION['username'] = $user->getUsername();
		$_SESSION['password'] = $user->getPassword();
		$_SESSION['mail'] = $user->getMail();
		$_SESSION['firstName'] = $user->getFirstName();
		$_SESSION['lastName'] = $user->getLastName();

	}

	public function destroySession(){
		session_destroy();
		header('Location: index.php');
	}

	public function register(){
		
	}

}

?>