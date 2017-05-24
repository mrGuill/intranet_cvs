<?php 

class User {

	private $_id;
	private $_username;
	private $_password;
	private $_mail;
	private $_firstName;
	private $_lastName;

	public function __construct($id) {
		$instance = databaseController::instance();
		$connection = $instance->connection();

		$sql = ('SELECT * FROM user WHERE id="'.$id.'"');
		$request = $connection->query($sql);
		while ($result = $request->fetch()){
			$this->_id = $result['id'];
			$this->_username = $result['username'];
			$this->_password = $result['password'];
			$this->_mail = $result['mail'];
			$this->_firstName = $result['firstName'];
			$this->_lastName = $result['lastName'];
		}
	}

	public function getId() {
		return $this->_id;
	}

	public function getUsername() {
		return $this->_username;
	}


	public function getPassword() {
		return $this->_password;
	}

	public function getMail() {
		return $this->_mail;
	}

	public function getfirstName() {
		return $this->_firstName;
	}

	public function getlastname() {
		return $this->_lastName;
	}
}


?>