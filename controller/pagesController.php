<?php

class pagesController{

	const PAGESDIR = 'view/pages/';

	public function login() {
		require_once(self::PAGESDIR.'login.php');
	}

	public function home() {
		require_once(self::PAGESDIR.'home.php');
	}

	public function news() {
		require_once(self::PAGESDIR.'news.php');
	}

	public function planning() {
		require_once(self::PAGESDIR.'planning.php');
	}

	public function inventaire() {
		require_once(self::PAGESDIR.'inventaire.php');
	}

	public function administratif() {
		require_once(self::PAGESDIR.'administratif.php');
	}

	public function contact() {
		require_once(self::PAGESDIR.'contact.php');
	}

	public function profile() {
		require_once(self::PAGESDIR.'profile.php');
	}

	public function info($infoMessage){
		echo "<div class=\"alert alert-danger\">".$infoMessage."</div>";
	}

	public function error($errorMessage){
		echo "<div class=\"alert alert-danger\">".$errorMessage."</div>";
	}

}

?>