<?php

class pagesController{

	const PAGESDIR = 'view/pages/';

	public function login() {
		require_once(self::PAGESDIR.'login.php');
	}

	public function home() {
		require_once(self::PAGESDIR.'home.php');
	}

	public function contact() {
		require_once(self::PAGESDIR.'contact.php');
	}

	public function info($infoMessage){
		echo "<div class=\"alert alert-danger\">".$infoMessage."</div>";
	}

	public function error($errorMessage){
		echo "<div class=\"alert alert-danger\">".$errorMessage."</div>";
	}

}

?>