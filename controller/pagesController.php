<?php

class pagesController{

	const PAGESDIR = 'view/pages/';

	public function login(){
		require_once(self::PAGESDIR.'login.php');
	}

	public function home(){
		require_once(self::PAGESDIR.'home.php');
	}

	// public function error(){

	// }

}

?>