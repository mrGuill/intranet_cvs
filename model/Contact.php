<?php 

class Contact {

	private $_id;
	private $_firstName;
	private $_lastName;
	private $_company;
	private $_mail;
	private $_phone;


	public function __construct($id) {
		$instance = databaseController::instance();
		$connection = $instance->connection();

		$sql = ('SELECT * FROM contact WHERE id="'.$id.'"');
		$request = $connection->query($sql);
		while ($result = $request->fetch()){
			$this->_id = $result['id'];
			$this->_username = $result['firstName'];
			$this->_password = $result['lastName'];
			$this->_mail = $result['company'];
			$this->_firstName = $result['mail'];
			$this->_lastName = $result['phone'];
		}
	}

	public function getId() {
		return $this->_id;
	}

	public function getFirstName() {
		return $this->_username;
	}


	public function getLastName() {
		return $this->_password;
	}

	public function getCompany() {
		return $this->_mail;
	}

	public function getMail() {
		return $this->_firstName;
	}

	public function getPhone() {
		return $this->_lastName;
	}
}


?>