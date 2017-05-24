<?php

class databaseController {

	private static $_instance;
	private $_connection;

	private function __construct() {
		try {

			$this->_connection = new PDO('mysql:host=127.0.0.1;dbname=intranet', 'root', '');
			// echo 'Connected to database.';

		}
		catch (Exception $e) {
			echo 'Error ;'. $e->getMessage();
		}
	}

	public static function instance() {
		if (!self::$_instance) {
		self::$_instance = new databaseController;
		return self::$_instance;
		}
		return self::$_instance;
	}

	public function connection () {
		return $this->_connection;

	}
}

?>